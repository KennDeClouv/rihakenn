@extends('layouts.app')

@section('title', 'Kenn & Rihaa')

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.querySelector("#pap-container");
            const uploadedFilesDiv = document.getElementById('uploadedFiles');
            const progressDiv = document.getElementById('progress');
            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

            function applyWideClass() {
                document.querySelectorAll(".pap").forEach(img => {
                    function checkSize() {
                        if (img.naturalWidth > img.naturalHeight) {
                            img.classList.add("wide");
                        } else {
                            img.classList.remove("wide");
                        }
                    }

                    if (img.complete) {
                        checkSize();
                    } else {
                        img.onload = checkSize;
                    }
                });
            }

            function refreshFileList() {
                fetch("{{ route('gallery.get-files') }}")
                    .then(response => response.json())
                    .then(files => {
                        let content = "";
                        files.forEach(file => {
                            content += `<img src="${file.file}" alt="" class="pap">`;
                        });
                        container.innerHTML = content;

                        applyWideClass(); // Panggil fungsi untuk menerapkan class wide
                        addImageClickEvent(); // Pastikan event click tetap aktif
                    })
                    .catch(error => {
                        console.error("Error fetching files:", error);
                        uploadedFilesDiv.innerHTML = "<p>Error loading files.</p>";
                    });
            }

            function openUploadModal() {
                Swal.fire({
                    title: "Select image",
                    input: "file",
                    inputAttributes: {
                        accept: "image/*",
                        "aria-label": "Upload your profile picture"
                    },
                    showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    preConfirm: (file) => {
                        if (!file) {
                            Swal.showValidationMessage('Please select a file');
                            return false;
                        }

                        let formData = new FormData();
                        formData.append("file", file);
                        formData.append("_token", csrfToken);

                        Swal.fire({
                            title: "Uploading...",
                            html: '<div class="swal-progress"><div class="swal-progress-bar"></div></div>',
                            allowOutsideClick: false,
                            showConfirmButton: false,
                            didOpen: () => {
                                Swal.showLoading();
                            }
                        });

                        return fetch("{{ route('gallery.upload') }}", {
                                method: "POST",
                                body: formData
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    Swal.fire({
                                        title: "Success!",
                                        text: "Image uploaded successfully.",
                                        icon: "success",
                                        timer: 1500,
                                        showConfirmButton: false
                                    });
                                    refreshFileList(); // Update list setelah upload berhasil
                                } else {
                                    Swal.fire({
                                        title: "Error",
                                        text: "Upload failed!",
                                        icon: "error"
                                    });
                                }
                            })
                            .catch(error => {
                                Swal.fire({
                                    title: "Error",
                                    text: "Error uploading file.",
                                    icon: "error"
                                });
                            });
                    }
                });
            }

            function addImageClickEvent() {
                document.querySelectorAll(".pap").forEach(img => {
                    img.addEventListener("click", function() {
                        Swal.fire({
                            imageUrl: img.src,
                            imageAlt: "Preview",
                            showConfirmButton: false,
                            background: "rgba(0,0,0,0.8)",
                            width: "auto",
                            heightAuto: false,
                            customClass: {
                                popup: 'custom-popup'
                            }
                        });
                    });
                });
            }

            // Load pertama kali
            refreshFileList();

            // Event upload button
            document.getElementById("uploadButton").addEventListener("click", openUploadModal);
        });
    </script>

@endsection

@section('style')
    <style>
        .custom-popup img {
            max-width: 90vw;
            /* lebar max 90% viewport */
            max-height: 90vh;
            /* tinggi max 90% viewport */
            object-fit: contain;
            /* biar tetep proporsional */
        }

        .swal2-container {
            background: #fffffff9 !important;
            /* gelapin bg belakang */
        }
    </style>
@endsection

@section('content')
    <div class="page-wrapper">
        @include('components.navbar')
        <div class="main-wrapper">
            <section>
                <div class="padding-global">
                    <h1 class="heading-style-128px" style="text-align:center; padding-top: 100px">Our private gallery</span>
                    </h1>
                </div>
            </section>
            <section class="section_kenniscolumn-filter">
                <div class="padding-global">
                    <div class="w-layout-blockcontainer container-col-12 w-container">
                        <div fs-cmsfilter-element="filters" class="filter w-form">
                            <div class="filter-collection">
                                <div class="articles-list_embed w-embed">

                                </div>
                                <div class="w-dyn-list">
                                    <div articles-list="true" fs-cmsfilter-element="list" fs-cmsload-element="list"
                                        role="list" class="cms-list is-articles_grid w-dyn-items" id="pap-container">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section class="section_verder-lezen">
                <div class="section-padding-224 padding-bottom">
                    <div class="padding-global">
                        <div class="w-layout-blockcontainer container-col-12 w-container">
                            <div class="verder-lezen_wrapper">
                                <div class="hide-this">
                                    <div class="span-heading_intro">
                                        <div class="heading-style-128px">gratis</div>
                                    </div><img src="{{ asset('assets/img/64affd6ce95f31b1c3920822_shape_08.svg') }}"
                                        loading="lazy" alt="shape" class="span-element is-7">
                                </div>
                                <a custom-cursor-trigger="pointer" class="button is-v2 w-inline-block" id="uploadButton">
                                    <div class="btn_content">
                                        <div class="btn-content_wrap">
                                            <div class="btn-content_spacing">
                                                <div class="btn-item">
                                                    <div class="btn-item_back is-icon"></div>
                                                    <div class="btn-item_front is-icon">
                                                        <div class="btn-item_track is-internal">
                                                            <div class="btn_item_track-item is-01"><img loading="eager"
                                                                    src="{{ asset('assets/img/64ddd3259a064f703497f9af_arrow-right-white.svg') }}"
                                                                    alt="" class="icon-16"></div>
                                                            <div class="btn_item_track-item is-02"><img loading="eager"
                                                                    src="{{ asset('assets/img/64ddd3259a064f703497f9af_arrow-right-white.svg') }}"
                                                                    alt="" class="icon-16"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-item">
                                            <div class="btn-item_back"></div>
                                            <div class="btn-item_front">
                                                <div>maak een gratis account aan</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @include('components.footer')
    </div>
@endsection
