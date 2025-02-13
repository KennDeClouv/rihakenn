@extends('layouts.app')

@section('title', 'Kenn & Rihaa | Challenge')

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Ambil data challenge dari backend
            function getChallenges() {
                $.ajax({
                    url: "{{ url('/challenge/get-challenges') }}",
                    method: "GET",
                    success: function(response) {
                        if (response.success) {
                            let list = $(".list");
                            list.empty(); // Hapus card lama
                            let cardBg = 0;
                            response.data.forEach(function(challenge, index) {
                                cardBg++;
                                let card = `
                                <li class="card">
                                    <div class="front" style="background-image: url('{{ asset('assets/img/card/${cardBg}.png') }}'); background-size: cover;"></div>
                                    <div class="back">
                                        <p>${challenge.level}</p>
                                        <h3>${challenge.title}</h3><br><br>
                                        <p>${challenge.description}</p><br>
                                        <p>Reward: ${challenge.reward}</p><br>
                                        <p>Penalty: ${challenge.penalty}</p>
                                    </div>
                                </li>
                            `;
                                list.append(card);
                            });
                        }
                    },
                    error: function() {
                        console.error("Gagal mengambil data challenge.");
                    }
                });
            };

            getChallenges();

            // Animasi flipping card
            $(document).on("click", ".card", function() {
                $(this).toggleClass("flipped");
            });

            // Efek stack
            $('#resetChallenge').click(function() {
                $(".card").each(function(e) {
                    setTimeout(function() {
                        $(".card").eq(e).attr("class", "card");
                    }, e * 150);
                });
                setTimeout(function() {
                    getChallenges();
                }, $(".card").length * 250);
                setTimeout(function() {
                    serveCard();
                }, $(".card").length * 350 + 250);
            });

            // Efek spread
            $('#mainChallenge').click(function() {
                serveCard();
            });

            function serveCard() {
                $(".card").each(function(e) {
                    setTimeout(function() {
                        $(".card").eq(e).attr("class", "card ani" + e);
                    }, e * 150);
                });
            }
        });
    </script>
@endsection

@section('style')
    <style>
        .grid {
            width: 1170px;
            margin: 0 auto;
        }

        .list {
            height: 652px;
            position: relative;
            list-style-type: none;
            padding-left: 0;
        }

        .card {
            transition: all 1s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            perspective: 1000px;
            transform-style: preserve-3d;
            float: left;
            width: 222px;
            height: 311px;
            position: absolute;
            right: 0;
            bottom: 0;
            margin: 30px 0 0 15px;
            border-radius: 10px;
            text-align: center;
        }

        .card:nth-child(5n) {
            margin-right: 0;
        }

        .card.ani0 {
            right: 948px;
            bottom: 326px;
        }

        .card.ani1 {
            right: 711px;
            bottom: 326px;
        }

        .card.ani2 {
            right: 474px;
            bottom: 326px;
        }

        .card.ani3 {
            right: 237px;
            bottom: 326px;
        }

        .card.ani4 {
            right: 0;
            bottom: 326px;
        }

        .card.ani5 {
            right: 948px;
            bottom: 0;
        }

        .card.ani6 {
            right: 711px;
            bottom: 0;
        }

        .card.ani7 {
            right: 474px;
            bottom: 0;
        }

        .card.ani8 {
            right: 237px;
            bottom: 0;
        }

        .card.ani9 {
            right: 0;
            bottom: 0;
        }

        .card .front,
        .card .back {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            backface-visibility: hidden;
            transition: transform 0.6s ease-in-out;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 10px;
            box-sizing: border-box;
            border-radius: 10px;
        }

        .card .front {
            background-size: cover;
            background-position: center;
        }

        .card .back {
            background-color: #F7E4EE;
            color: black;
            transform: rotateY(180deg);
        }

        .card.flipped .front {
            transform: rotateY(180deg);
        }

        .card.flipped .back {
            transform: rotateY(0deg);
        }
    </style>
@endsection

@section('content')
    <div class="page-wrapper">
        @include('components.navbar')
        <div class="main-wrapper">
            <section>
                <div class="padding-global">
                    <h1 class="heading-style-128px" style="text-align:center; padding-top: 100px">Siap Main Challenge?</h1>
                </div>
            </section>
            <section class="section_kenniscolumn-filter">
                <div class="padding-global">
                    <div class="grid">
                        <ul class="list">

                        </ul>
                        {{-- <button class="stack">Stack</button> --}}
                        {{-- <button class="spread">Spread</button> --}}
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
                                        <div class="heading-style-128px"></div>
                                    </div><img src="{{ asset('assets/img/64affd6ce95f31b1c3920822_shape_08.svg') }}"
                                        loading="lazy" alt="shape" class="span-element is-7">
                                </div>
                                <div style="display: flex; justify-content: center; align-items: center; gap: 10px;">
                                    <a custom-cursor-trigger="pointer" class="button is-v2" id="resetChallenge">
                                        <div class="btn_content">
                                            <div class="btn-item">
                                                <div class="btn-item_back"></div>
                                                <div class="btn-item_front">
                                                    <div>Reset Challenge</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a custom-cursor-trigger="pointer" class="button is-v2" id="mainChallenge">
                                        <div class="btn_content">
                                            <div class="btn-content_wrap">
                                                <div class="btn-content_spacing">
                                                    <div class="btn-item">
                                                        <div class="btn-item_back is-icon"></div>
                                                        <div class="btn-item_front is-icon">
                                                            <div class="btn-item_track is-internal">
                                                                <div class="btn_item_track-item is-01">
                                                                    <img loading="eager"
                                                                        src="{{ asset('assets/img/64ddd3259a064f703497f9af_arrow-right-white.svg') }}"
                                                                        alt="" class="icon-16">
                                                                </div>
                                                                <div class="btn_item_track-item is-02">
                                                                    <img loading="eager"
                                                                        src="{{ asset('assets/img/64ddd3259a064f703497f9af_arrow-right-white.svg') }}"
                                                                        alt="" class="icon-16">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-item">
                                                <div class="btn-item_back"></div>
                                                <div class="btn-item_front">
                                                    <div>Mainkan Challenge</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @include('components.footer')
    </div>
@endsection
