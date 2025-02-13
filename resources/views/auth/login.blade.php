@extends('layouts.app')

@section('title', 'Kenn & Rihaa | Login')

@section('style')
    <style>
        .numpad-card {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            max-width: 90%; /* Make it responsive */
        }

        .numpad-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.8rem;
            margin-top: 1.5rem;
        }

        #pinInput {
            width: 100%;
            text-align: center;
            font-size: 1.5rem;
            /* letter-spacing: 0.5em; */
            padding: 1rem;
            margin: 1rem 0;
            border-radius: 12px;
            border: none;
        }

        .button.is-v2 {
            padding: 1rem;
            font-size: 1.2rem;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        .button.is-v2:active {
            transform: scale(0.9);
            background-color: #ccc;
        }

        .card-pin {
            display: flex;
            /* flex-direction: column; */
            align-items: center;
        }

        @media (max-width: 768px) {
            .card-pin {
                flex-direction: column; /* Stack elements vertically on mobile */
                align-items: center;
            }

            .card-pin img {
                display: none;
                /* order: -1;
                max-width: 80%;
                margin-bottom: 1rem; */
            }
        }
    </style>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const pinInput = document.getElementById('pinInput');
            const buttons = document.querySelectorAll('.numpad-grid button');

            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    const number = this.dataset.number;
                    const action = this.dataset.action;

                    if (number) {
                        if (pinInput.value.length < 4) {
                            pinInput.value += number;
                        }
                    } else if (action === 'clear') {
                        pinInput.value = pinInput.value.slice(0, -1);
                    }
                });
            });
        });
    </script>
@endsection

@section('content')
    @include('components.alert')
    <div class="page-wrapper">
        <main class="main-wrapper">
            <div class="nav-scrolltrigger"></div>
            <header class="section_header-home" id="home">
                <div class="padding-global">
                    <div class="header-100vh is-home">
                        <div class="container-col-10 w-container">
                            <div class="header-logo">
                                <h1 style="font-size: 14rem;">Kenn & Rihaa</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </main>
        <div class="header-100vh " style="position:absolute; top:0; left:0; width:100%; height:100%; background-color:#63636380; backdrop-filter: blur(10px);">
            <div class="card-pin numpad-card" style="display: flex; justify-content: center; align-items: center; gap: 2rem;">
                <img src="{{ asset('assets/img/20241228_100603.jpg') }}" alt="logo" style="max-width: 250px; object-fit: cover; border-radius: 12px;">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <input type="password" id="pinInput" class="input is-sand" name="pin" readonly maxlength="4" placeholder="Masukin pin dongg!">
                    <div class="numpad-grid">

                        <button type="button" class="button is-v2" data-number="1">1</button>
                        <button type="button" class="button is-v2" data-number="2">2</button>
                        <button type="button" class="button is-v2" data-number="3">3</button>
                        <button type="button" class="button is-v2" data-number="4">4</button>
                        <button type="button" class="button is-v2" data-number="5">5</button>
                        <button type="button" class="button is-v2" data-number="6">6</button>
                        <button type="button" class="button is-v2" data-number="7">7</button>
                        <button type="button" class="button is-v2" data-number="8">8</button>
                        <button type="button" class="button is-v2" data-number="9">9</button>
                        <button type="button" class="button is-v2" data-action="clear" style="background-color: var(--red); color: var(--white);"><b>⌫</b></button>
                        <button type="button" class="button is-v2" data-number="0">0</button>
                        <button type="submit" class="button is-v2" style="background-color: var(--green); color: var(--white);"><b>✓</b></button>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection
