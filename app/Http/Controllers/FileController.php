<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\File;

class FileController extends Controller
{
    private $encryptionKey = '12345678901234567890123456789012';

    public function index()
    {
        return view('gallery.index');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|image|mimes:jpeg,png,jpg,gif,svg,mp4,webm',
        ]);

        $file = $request->file('file');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $randomName = Str::random(20);
        $filename = "{$randomName}.{$extension}";

        // Baca file dan enkripsi
        $fileContent = file_get_contents($file);
        $encryptedContent = openssl_encrypt(
            $fileContent,
            'aes-256-cbc',
            $this->encryptionKey,
            0,
            substr(hash('sha256', $this->encryptionKey), 0, 16)
        );

        if ($encryptedContent === false) {
            return response()->json(['error' => 'Gagal mengenkripsi file'], 500);
        }

        // Simpan file terenkripsi ke storage
        Storage::put("photos/{$filename}", $encryptedContent);

        // Simpan info file ke database
        $fileRecord = File::create([
            'title' => pathinfo($originalName, PATHINFO_FILENAME),
            'name' => $originalName,
            'file' => $filename,
        ]);

        return response()->json(['success' => true, 'file' => $fileRecord]);
    }

    public function download($id)
    {
        $file = File::findOrFail($id);
        $filename = $file->file;

        if (!Storage::exists("photos/{$filename}")) {
            abort(404);
        }

        $encryptedContent = Storage::get("photos/{$filename}");
        $decryptedContent = openssl_decrypt(
            $encryptedContent,
            'aes-256-cbc',
            $this->encryptionKey,
            0,
            substr(hash('sha256', $this->encryptionKey), 0, 16)
        );

        if ($decryptedContent === false) {
            abort(500, "Gagal mendekripsi file");
        }

        return response($decryptedContent)
            ->header('Content-Type', Storage::mimeType("photos/{$filename}"))
            ->header('Content-Disposition', "attachment; filename={$file->name}");
    }

    public function listFiles()
    {
        $files = File::latest()->get();
        return response()->json($files);
    }

    public function getFiles()
    {
        $files = File::all()->map(function ($file) {
            return [
                'id' => $file->id,
                'title' => $file->title,
                'name' => $file->name,
                'file' => route('gallery.file', $file->id),
            ];
        });

        return response()->json($files);
    }

    public function getFile($id)
    {
        $file = File::findOrFail($id);
        $filename = $file->file;

        if (!Storage::exists("photos/{$filename}")) {
            abort(404);
        }

        $encryptedContent = Storage::get("photos/{$filename}");
        $decryptedContent = openssl_decrypt(
            $encryptedContent,
            'aes-256-cbc',
            $this->encryptionKey,
            0,
            substr(hash('sha256', $this->encryptionKey), 0, 16)
        );

        if ($decryptedContent === false) {
            abort(500, 'Gagal mendekripsi file');
        }

        return response($decryptedContent)
            ->header('Content-Type', Storage::mimeType("photos/{$filename}"))
            ->header('Content-Disposition', 'inline; filename="' . $file->name . '"');
    }

    public function showFile($id)
    {
        $file = File::findOrFail($id);
        $filename = $file->file;

        if (!Storage::exists("photos/{$filename}")) {
            abort(404);
        }

        $encryptedContent = Storage::get("photos/{$filename}");
        $decryptedContent = openssl_decrypt(
            $encryptedContent,
            'aes-256-cbc',
            $this->encryptionKey,
            0,
            substr(hash('sha256', $this->encryptionKey), 0, 16)
        );

        if ($decryptedContent === false) {
            abort(500, "Gagal mendekripsi file.");
        }

        return response($decryptedContent)
            ->header('Content-Type', Storage::mimeType("photos/{$filename}"));
    }
}
