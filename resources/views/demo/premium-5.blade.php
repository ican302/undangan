<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Premium-5</title>

    <!-- Resources -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&family=DM+Serif+Display&display=swap"
        rel="stylesheet">

    <!-- Flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        #modal-image {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
        }

        .vertical-text {
            writing-mode: vertical-lr;
            text-orientation: mixed;
        }

        .text-shadow {
            text-shadow: -5px 5px 0px rgba(255, 255, 255, 0.2);
        }

        .text-shadow-2 {
            text-shadow: 0px 5px 0px rgba(0, 0, 0, 0.2);
        }

        .px-4::-webkit-scrollbar {
            width: 5px;
        }

        .px-4::-webkit-scrollbar-track {
            background: #ffffff;
            border-radius: 10px;
        }

        .px-4::-webkit-scrollbar-thumb {
            background-color: #EEEEEE;
            border-radius: 10px;
        }

        .px-4::-webkit-scrollbar-thumb:hover {
            background-color: #EEEEEE;
        }
    </style>
</head>

<body class="antialiased" style="overflow: hidden; background-color: #EEEEEE;">

    <!-- Sampul -->
    <section>
        <div id="cover-page"
            class="relative flex flex-col justify-between items-center min-h-screen mx-auto max-w-[500px]"
            style="background-image: url('{{ asset('tema/premium-5/bg.webp') }}'); 
            background-size: cover; background-attachment: fixed;">
            <div class="flex flex-col justify-center py-5 space-y-10 flex-grow w-full">
                <!-- Foto Cover -->
                <div class="-rotate-3 p-[0.65rem] pb-5 md:mx-auto mx-10 bg-white relative shadow-lg">
                    <img src="{{ asset('tema/premium-5/ornament-1.webp') }}" alt="Ornament"
                        class="absolute -top-7 -left-10 w-32 h-28 object-contain z-10 -rotate-12" />
                    <div class="relative flex justify-center pb-5" data-aos="fade-left" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        <img src="{{ asset('tema/foto/cover.jpg') }}" alt="Cover Image" class="w-80 h-80 object-cover">
                    </div>
                    <img src="{{ asset('tema/premium-5/flower-1.webp') }}" alt="Flower"
                        class="absolute -bottom-12 -right-20 w-48 h-48 object-contain z-10 rotate-12" />
                    <div class="absolute bottom-3 bg-[#FFB3B8]/75 p-3 text-white" data-aos="fade-right"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="text-xl md:text-2xl font-pinyon leading-none">
                            The Wedding of
                        </div>
                        <div class="text-2xl md:text-3xl font-cormorant font-semibold uppercase mt-2 leading-none">
                            Rizky & Ana
                        </div>
                    </div>
                </div>
                <!-- Nama Tamu -->
                <div class="text-center" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800"
                    data-aos-delay="500">
                    <div class="font-cormorant">
                        <div class="mt-[-0.35rem]">
                            Kepada Yth :
                        </div>
                        <div class="mt-1">
                            Bapak/Ibu/Saudara/i
                        </div>
                        <div class="rounded text-xl mt-5 mb-1 font-croissant">
                            Ikhsan
                        </div>
                        <hr class="border-[#FFB3B8] w-48 mx-auto">
                        <div>
                            <button type="button" onclick="openInvitation()"
                                class="text-white py-2 px-6 mt-5 font-cormorant font-bold text-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-[#FFB3B8] focus:ring-offset-1 transition duration-150"
                                style="background-color: #FFB3B8;">
                                <i class="fa-solid fa-envelope mr-1"></i>
                                Buka Undangan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pembuka -->
    <section id="main-invitation">
        <div class="relative flex flex-col justify-center items-start min-h-screen w-full mx-auto max-w-[500px]"
            style="background-image: url('{{ asset('tema/premium-5/bg.webp') }}'); 
            background-size: cover; background-attachment: fixed;">
            <!-- Foto Pembuka -->
            <div class="flex justify-center mx-auto mt-14">
                <div class="rotate-3 py-3 px-[0.65rem] mx-8 bg-white relative shadow-lg">
                    <img src="{{ asset('tema/premium-5/ornament-2.png') }}" alt="Ornament"
                        class="absolute -top-7 -right-10 w-32 h-28 object-contain z-10 rotate-12" />
                    <div class="relative flex justify-center">
                        <img src="{{ asset('tema/foto/pembuka.jpg') }}" alt="Opening Image"
                            class="w-72 h-72 object-cover" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                            data-aos-duration="800">
                    </div>
                    <img src="{{ asset('tema/premium-5/flower-2.png') }}" alt="Flower"
                        class="absolute -bottom-12 -left-20 w-48 h-48 object-contain z-10 -rotate-12" />
                </div>
            </div>
            <!-- Tanggal Acara -->
            <div class="mt-8 mx-auto text-center">
                <div class="relative mb-4" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="w-16 mx-auto border-t-2 border-[#FFB3B8]"></div>
                </div>
                <div class="text-2xl md:text-3xl font-cormorant font-semibold" data-aos="zoom-in"
                    data-aos-duration="800">
                    Sabtu, 14 Oktober 2023
                </div>
                <div class="relative mt-4" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="w-16 mx-auto border-t-2 border-[#FFB3B8]"></div>
                </div>
            </div>
            <!-- Countdown -->
            <div class="relative w-full max-w-80 mt-5 mb-56 mx-auto">
                <div id="countdown" class="text-center font-cormorant flex justify-center space-x-4 mx-2">
                    <div class="bg-[#FFB3B8]/50 text-center border-b-[3px] border-[#FFB3B8] px-2 mt-5"
                        data-aos="flip-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <span class="text-xl w-12 h-12 flex items-center justify-center days">
                            00
                        </span>
                        <span class="pb-3 flex items-center justify-center">
                            Hari
                        </span>
                    </div>
                    <div class="bg-[#FFB3B8]/50 text-center border-b-[3px] border-[#FFB3B8] px-2 mt-5"
                        data-aos="flip-up" data-aos-easing="ease-in-sine" data-aos-duration="800"
                        data-aos-delay="200">
                        <span class="text-xl p-3 w-12 h-12 flex items-center justify-center hours">
                            00
                        </span>
                        <span class="pb-3 flex items-center justify-center">
                            Jam
                        </span>
                    </div>
                    <div class="bg-[#FFB3B8]/50 text-center border-b-[3px] border-[#FFB3B8] px-2 mt-5"data-aos="flip-up"
                        data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-delay="400">
                        <span class="text-xl p-3 w-12 h-12 flex items-center justify-center minutes">
                            00
                        </span>
                        <span class="pb-3 flex items-center justify-center">
                            Menit
                        </span>
                    </div>
                    <div class="bg-[#FFB3B8]/50 text-center border-b-[3px] border-[#FFB3B8] px-2 mt-5"data-aos="flip-up"
                        data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-delay="600">
                        <span class="text-xl p-3 w-12 h-12 flex items-center justify-center seconds">
                            00
                        </span>
                        <span class="pb-3 flex items-center justify-center">
                            Detik
                        </span>
                    </div>
                </div>
            </div>
            <!-- Frame -->
            <div class="absolute bottom-0 w-full">
                <img src="{{ asset('tema/premium-5/frame-2.png') }}" alt="Frame Atas" class="object-cover">
            </div>
        </div>
    </section>

    <!-- Mempelai -->
    <section>
        <div class="bg-white relative flex flex-col min-h-screen w-full mx-auto max-w-[500px]">
            <!-- Teks Pembuka -->
            <div class="mx-5 mb-5 mt-10">
                <div class="text-3xl">
                    <div class="font-pinyon" data-aos="fade-right" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        We Are Getting
                    </div>
                    <div class="mt-1 font-cormorant font-bold uppercase" data-aos="fade-left"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Married!
                    </div>
                </div>
                <div class="text-sm mt-7" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="font-croissant">
                        Assalamu’alaikum Wr. Wb.
                    </div>
                    <div class="text-lg mt-2 font-cormorant">
                        Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta’ala, Insya Allah kami akan
                        menyelenggarakan
                        acara pernikahan :
                    </div>
                </div>
            </div>
            <!-- Mempelai Pria -->
            <div class="flex flex-col justify-center mx-auto my-10">
                <div class="-rotate-3 py-3 px-[0.65rem] mx-8 bg-white relative shadow-lg">
                    <img src="{{ asset('tema/premium-5/ornament-1.webp') }}" alt="Ornament"
                        class="absolute -top-7 -left-10 w-32 h-28 object-contain z-10 -rotate-12" />
                    <div class="relative flex justify-center">
                        <img src="{{ asset('tema/foto/mempelai-pria.jpg') }}" alt="Mempelai Pria"
                            class="w-72 h-72 object-cover" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                            data-aos-duration="800">
                    </div>
                    <img src="{{ asset('tema/premium-5/flower-1.webp') }}" alt="Flower"
                        class="absolute -bottom-12 -right-20 w-48 h-48 object-contain z-10 rotate-12" />
                </div>
                <div class="text-center" data-aos="fade-right" data-aos-easing="ease-in-sine"
                    data-aos-duration="800">
                    <h2 class="text-xl font-croissant mt-20">
                        Rizky Syaputra
                    </h2>
                    <p class="font-cormorant mt-3">
                        Putra ke-3
                    </p>
                    <p class="font-cormorant">
                        Bapak Syahrial
                    </p>
                    <p class="font-cormorant">
                        &
                    </p>
                    <p class="font-cormorant mb-3">
                        Ibu Yuyun Rusmiati
                    </p>
                    <div class="flex justify-center">
                        <a href="https://www.instagram.com" target="_blank"
                            class="flex items-center justify-center gap-2 mt-5 py-[0.35rem] px-6 shadow-xl bg-[#FFB3B8] text-white font-cormorant focus:ring-2 focus:ring-[#FFB3B8] focus:ring-offset-1 transition ease-in-out duration-150 w-fit">
                            <i class="fab fa-instagram"></i>
                            Instagram
                        </a>
                    </div>
                </div>
            </div>
            <!-- Mempelai Wanita -->
            <div class="flex flex-col justify-center mx-auto my-10">
                <div class="rotate-3 py-3 px-[0.65rem] mx-8 bg-white relative shadow-lg">
                    <img src="{{ asset('tema/premium-5/ornament-2.png') }}" alt="Ornament"
                        class="absolute -top-7 -right-10 w-32 h-28 object-contain z-10 rotate-12" />
                    <div class="relative flex justify-center">
                        <img src="{{ asset('tema/foto/mempelai-wanita.jpg') }}" alt="Mempelai Wanita"
                            class="w-72 h-72 object-cover" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                            data-aos-duration="800">
                    </div>
                    <img src="{{ asset('tema/premium-5/flower-2.png') }}" alt="Flower"
                        class="absolute -bottom-12 -left-20 w-48 h-48 object-contain z-10 -rotate-12" />
                </div>
                <div class="text-center" data-aos="fade-left" data-aos-easing="ease-in-sine"
                    data-aos-duration="800">
                    <h2 class="text-xl font-croissant mt-20">
                        Ana Lutfiani
                    </h2>
                    <p class="font-cormorant mt-3">
                        Putri ke-3
                    </p>
                    <p class="font-cormorant">
                        Bapak Agus Sutrisno
                    </p>
                    <p class="font-cormorant">
                        &
                    </p>
                    <p class="font-cormorant mb-3">
                        Ibu Rosy Meri
                    </p>
                    <div class="flex justify-center">
                        <a href="https://www.instagram.com" target="_blank"
                            class="flex items-center justify-center gap-2 mt-5 py-[0.35rem] px-6 shadow-xl bg-[#FFB3B8] text-white font-cormorant focus:ring-2 focus:ring-[#FFB3B8] focus:ring-offset-1 transition ease-in-out duration-150 w-fit">
                            <i class="fab fa-instagram"></i>
                            Instagram
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Acara -->
    <section>
        <div class="relative flex flex-col justify-center items-center min-h-screen max-w-[500px] mx-auto"
            style="background-image: url('{{ asset('tema/premium-5/bg.webp') }}'); 
            background-size: cover; background-attachment: fixed;">
            <!-- Frame -->
            <div class="w-full">
                <img src="{{ asset('tema/premium-5/frame-1.png') }}" alt="Frame Atas" class="object-cover">
            </div>
            <!-- Daftar Acara -->
            <div class="bg-white shadow-xl p-5 mt-24 mb-10 mx-3 flex flex-col max-w-[475px]">
                <div class="my-10 mx-5 text-center relative flex flex-col items-center">
                    <div class="-mt-28 mb-8 z-10">
                        <img src="{{ asset('tema/premium-5/map-icon.webp') }}" alt="Frame Atas"
                            class="object-cover w-24 h-auto">
                    </div>
                    <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <h3 class="text-3xl font-dmSerifDisplay">Akad</h3>
                        <hr class="border-white mt-3">
                    </div>
                    <div class="mt-5 font-cormorant" data-aos="fade-left" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        <p class="text-lg">Hari/Tanggal :</p>
                        <p class="text-center mt-1">Minggu, 31 Desember 2024</p>
                        <p class="text-lg mt-5">Waktu :</p>
                        <p class="text-center mt-1">08:00 WIB - 09:00 WIB</p>
                        <p class="text-lg mt-5">Tempat :</p>
                        <p class="text-center mt-1">Kediaman Mempelai Wanita</p>
                        <p class="text-center mt-1">Perum Regency, Jl. Harmoni Raya No. 123</p>
                        <div class="mt-7 flex justify-center">
                            <a href="https://www.google.com/maps" target="_blank"
                                class="bg-[#FFB3B8] font-bold shadow-xl border-2 border-[#FFB3B8] text-white py-2 px-6 flex items-center justify-center space-x-2 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-1 transition ease-in-out duration-150">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Google Maps</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-xl p-5 mt-10 mx-3 flex flex-col max-w-[475px]">
                <div class="my-10 mx-5 text-center relative flex flex-col items-center">
                    <div class="-mt-28 mb-8 z-10">
                        <img src="{{ asset('tema/premium-5/map-icon.webp') }}" alt="Frame Atas"
                            class="object-cover w-24 h-auto">
                    </div>
                    <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <h3 class="text-3xl font-dmSerifDisplay">Resepsi</h3>
                        <hr class="border-white mt-3">
                    </div>
                    <div class="mt-5 font-cormorant" data-aos="fade-left" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        <p class="text-lg">Hari/Tanggal :</p>
                        <p class="text-center mt-1">Minggu, 31 Desember 2024</p>
                        <p class="text-lg mt-5">Waktu :</p>
                        <p class="text-center mt-1">09:00 WIB - 10:00 WIB</p>
                        <p class="text-lg mt-5">Tempat :</p>
                        <p class="text-center mt-1">Kediaman Mempelai Wanita</p>
                        <p class="text-center mt-1">Perum Regency, Jl. Harmoni Raya No. 123</p>
                        <div class="mt-7 flex justify-center">
                            <a href="https://www.google.com/maps" target="_blank"
                                class="bg-[#FFB3B8] font-bold shadow-xl border-2 border-[#FFB3B8] text-white py-2 px-6 flex items-center justify-center space-x-2 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-1 transition ease-in-out duration-150">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Google Maps</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Streaming -->
            <div class="bg-white shadow-xl p-5 mt-10 mb-24 mx-3 flex flex-col max-w-[475px]" data-aos="zoom-in"
                data-aos-easing="ease-in-sine" data-aos-duration="800">
                <div class="mx-auto my-5 text-center">
                    <div class="text-3xl text-nowrap font-dmSerifDisplay mb-5">
                        Live Streaming
                    </div>
                    <div class="font-light mt-5 font-cormorant">
                        Temui kami secara virtual untuk menyaksikan acara pernikahan kami melalui siaran
                        langsung
                    </div>
                    <div class="mt-5">
                        <a href="https://www.google.com/maps" target="_blank"
                            class="bg-[#FFB3B8] font-bold font-cormorant shadow-xl border-2 border-[#FFB3B8] text-white py-2 px-6 flex items-center justify-center space-x-2 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-1 transition ease-in-out duration-150">
                            <i class="fas fa-video"></i>
                            <span>Tonton Streaming</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Frame -->
            <div class="w-full">
                <img src="{{ asset('tema/premium-5/frame-2.png') }}" alt="Frame Atas" class="object-cover">
            </div>
        </div>
    </section>

    <!-- Cerita & Quote -->
    <section>
        <div class="bg-white relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]">
            <!-- Konten -->
            <div class="flex flex-col">
                <div class="my-10">
                    <!-- Judul -->
                    <div class="text-4xl uppercase font-dmSerifDisplay text-center mb-5" data-aos="fade-down"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Love Story
                    </div>
                    <!-- Divider -->
                    <div class="flex items-center justify-center text-center gap-4 mb-7" data-aos="zoom-in"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="h-[1px] bg-black flex-1"></div>
                        <div class="text-3xl mx-0 md:mx-2">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="h-[1px] bg-black flex-1"></div>
                    </div>
                    <!-- Foto Cerita -->
                    <div class="flex justify-center mx-auto">
                        <div class="rotate-3 py-3 px-[0.65rem] mx-8 mb-7 bg-white relative shadow-lg">
                            <img src="{{ asset('tema/premium-5/ornament-2.png') }}" alt="Ornament"
                                class="absolute -top-7 -right-10 w-32 h-28 object-contain z-10 rotate-12" />
                            <div class="relative flex justify-center">
                                <img src="{{ asset('tema/foto/cerita.jpg') }}" alt="Story Image"
                                    class="w-72 h-72 object-cover" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                                    data-aos-duration="800">
                            </div>
                            <img src="{{ asset('tema/premium-5/flower-2.png') }}" alt="Flower"
                                class="absolute -bottom-12 -left-20 w-48 h-48 object-contain z-10 -rotate-12" />
                        </div>
                    </div>
                    <!-- Quote -->
                    <div class="text-center">
                        <div class="px-5 pt-10 text-lg font-cormorant" data-aos="fade-right"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            "Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari
                            jenismu sendiri, supaya kamu merasa tenang dan tentram kepadanya, dan dijadikan-Nya
                            diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar
                            terdapat
                            tanda-tanda bagi kaum yang berfikir."
                        </div>
                        <div class="pt-5 pb-10 font-semibold font-croissant text-[#000000]" data-aos="fade-left"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            Ar Rum: 21
                        </div>
                    </div>
                    <!-- Cerita -->
                    <div class="mt-5 mx-5">
                        <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                            <div class="text-xl font-dmSerifDisplay p-4">
                                Pertemuan Pertama
                            </div>
                            <div class="pb-4 px-4 text-lg font-cormorant">
                                Kami bertemu di sebuah kafe kecil.
                                Senyum pertama yang kami bagi membuat hati kami saling terhubung.
                                Percakapan ringan mengarah pada janji untuk bertemu lagi.
                                Itu adalah awal dari sebuah kisah cinta yang tak terduga.
                            </div>
                        </div>
                        <div class="mt-5 mb-10" data-aos="fade-up" data-aos-easing="ease-in-sine"
                            data-aos-duration="800">
                            <div class="text-xl font-dmSerifDisplay p-4">
                                Lamaran
                            </div>
                            <div class="pb-4 px-4 text-lg font-cormorant">
                                Setelah beberapa waktu bersama, aku melamar untuk membangun masa depan bersama.
                                Dengan restu orangtuanya, aku tahu ini adalah langkah yang tepat.
                                Kami siap memulai lembaran baru dalam hidup kami.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section>
        <div class="bg-white relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]">
            <div class="flex flex-col my-10">
                <!-- Judul -->
                <div class="pb-10 px-5 mx-auto text-center">
                    <div class="text-3xl uppercase font-dmSerifDisplay" data-aos="fade-left"
                        data-aos-easing="ease-in-sine" data-aos-duration="800" style="font-weight: 1000;">
                        Gallery
                    </div>
                    <div class="text-3xl font-cormorant text-shadow-2" data-aos="fade-right"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        OUR MOMENTS
                    </div>
                </div>
                <!-- Foto & Video -->
                <div class="mx-5">
                    <!-- Video -->
                    <div class="shadow-xl" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        <iframe class="w-full h-56"
                            src="https://www.youtube.com/embed/imGaOIm5HOk?si=ljyrmX6DD6dG1YUF" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <!-- Foto Galeri -->
                    <div class="">
                        <div class="grid grid-cols-2 gap-4 py-5">
                            <img src="{{ asset('tema/foto/foto-gallery-1.jpg') }}" alt=""
                                class="w-full aspect-square object-cover cursor-pointer shadow-xl"
                                onclick="openModal('{{ asset('tema/foto/foto-gallery-1.jpg') }}')" data-aos="zoom-in"
                                data-aos-easing="ease-in-sine" data-aos-duration="800">
                            <img src="{{ asset('tema/foto/foto-gallery-2.jpg') }}" alt=""
                                class="w-full aspect-square object-cover cursor-pointer shadow-xl"
                                onclick="openModal('{{ asset('tema/foto/foto-gallery-2.jpg') }}')" data-aos="zoom-in"
                                data-aos-easing="ease-in-sine" data-aos-duration="800">
                            <img src="{{ asset('tema/foto/foto-gallery-3.jpg') }}" alt=""
                                class="w-full aspect-square object-cover cursor-pointer shadow-xl"
                                onclick="openModal('{{ asset('tema/foto/foto-gallery-3.jpg') }}')" data-aos="zoom-in"
                                data-aos-easing="ease-in-sine" data-aos-duration="800">
                            <img src="{{ asset('tema/foto/foto-gallery-4.jpg') }}" alt=""
                                class="w-full aspect-square object-cover cursor-pointer shadow-xl"
                                onclick="openModal('{{ asset('tema/foto/foto-gallery-4.jpg') }}')" data-aos="zoom-in"
                                data-aos-easing="ease-in-sine" data-aos-duration="800">
                            <img src="{{ asset('tema/foto/foto-gallery-5.jpg') }}" alt=""
                                class="w-full aspect-square object-cover cursor-pointer shadow-xl"
                                onclick="openModal('{{ asset('tema/foto/foto-gallery-5.jpg') }}')" data-aos="zoom-in"
                                data-aos-easing="ease-in-sine" data-aos-duration="800">
                            <img src="{{ asset('tema/foto/foto-gallery-6.jpg') }}" alt=""
                                class="w-full aspect-square object-cover cursor-pointer shadow-xl"
                                onclick="openModal('{{ asset('tema/foto/foto-gallery-6.jpg') }}')" data-aos="zoom-in"
                                data-aos-easing="ease-in-sine" data-aos-duration="800">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wish & RSVP -->
    <section>
        <div class="relative flex flex-col justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
            style="background-image: url('{{ asset('tema/premium-5/bg.webp') }}'); 
            background-size: cover; background-attachment: fixed;">
            <!-- Frame -->
            <div class="w-full">
                <img src="{{ asset('tema/premium-5/frame-1.png') }}" alt="Frame Atas" class="object-cover">
            </div>
            <!-- Wish -->
            <div class="w-full">
                <div class="bg-white flex flex-col mx-2 mt-24 shadow-xl">
                    <div class="mt-10">
                        <!-- Judul Wish -->
                        <div class="text-center">
                            <h2 class="text-3xl font-dmSerifDisplay mt-5 mx-5" data-aos="fade-down"
                                data-aos-easing="ease-in-sine" data-aos-duration="800">
                                Wedding Wish
                            </h2>
                            <p class="mt-3 mb-5 mx-5 font-cormorant text-lg" data-aos="fade-up"
                                data-aos-easing="ease-in-sine" data-aos-duration="800">
                                Berikan ucapan, harapan dan do'a kepada kedua mempelai
                            </p>
                        </div>
                        <!-- Form Wish -->
                        <form action="#" method="POST" data-aos="fade-right" data-aos-easing="ease-in-sine"
                            data-aos-duration="800" class="mx-5 mb-5">
                            <div class="mb-4 w-full">
                                <label for="name" class="block text-white font-medium font-dmSerifDisplay">
                                    Nama:
                                </label>
                                <input type="text" id="name" name="name"
                                    class="mt-1 block w-full border border-[#EEEEEE] py-2 px-3 text-sm font-cormorant text-black"
                                    placeholder="Nama Anda" required
                                    onfocus="this.style.borderColor='#EEEEEE'; this.style.boxShadow='0 0 0 1px #ffffff';"
                                    onblur="this.style.borderColor='#EEEEEE'; this.style.boxShadow='none';"
                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                    oninput="this.setCustomValidity('')" style="border-color: #EEEEEE;">
                            </div>
                            <div class="mb-4 w-full">
                                <label for="message" class="block text-white font-medium font-dmSerifDisplay">
                                    Ucapan atau Doa:
                                </label>
                                <textarea id="message" name="message" rows="4"
                                    class="mt-1 block w-full border border-[#EEEEEE] py-2 px-3 text-sm font-cormorant text-black"
                                    placeholder="Tulis ucapan atau doa Anda di sini..." required
                                    onfocus="this.style.borderColor='#EEEEEE'; this.style.boxShadow='0 0 0 1px #ffffff';"
                                    onblur="this.style.borderColor='#EEEEEE'; this.style.boxShadow='none';"
                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"></textarea>
                            </div>
                            <div class="text-center text-sm mb-10">
                                <button type="submit"
                                    class="text-white shadow-xl py-2 px-6 focus:outline-none focus:ring-1 focus:ring-[#FFB3B8] focus:ring-offset-1 transition ease-in-out duration-150 font-montserrat"
                                    style="background-color: #FFB3B8">
                                    <span>Kirim</span>
                                    <i class="fas fa-paper-plane ml-1"></i>
                                </button>
                            </div>
                        </form>
                        <!-- Their Wish -->
                        <div class="px-4 mb-10 mt-5 mx-2 text-black border-2 border-[#EEEEEE] rounded"
                            style="max-height: 500px; overflow-y: auto;" data-aos="fade-left"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            <div class="my-4 p-5 rounded-xl shadow-xl">
                                <h4 class="uppercase font-dmSerifDisplay">
                                    Risa
                                </h4>
                                <p class="font-cormorant text-lg pt-1">
                                    Selamat ya, semoga dilancarkan sampai hari H. Amin.
                                </p>
                            </div>
                            <div class="mb-4 p-5 bg-white rounded-xl shadow-xl">
                                <h4 class="uppercase font-dmSerifDisplay">
                                    Toni
                                </h4>
                                <p class="font-cormorant text-lg pt-1">
                                    Selamat, SaMaWa ya.
                                </p>
                            </div>
                            <div class="mb-4 p-5 bg-white rounded-xl shadow-xl">
                                <h4 class="uppercase font-dmSerifDisplay">
                                    Lina
                                </h4>
                                <p class="font-cormorant text-lg pt-1">
                                    Semoga menjadi keluarga yang bahagia dan harmonis selamanya.
                                </p>
                            </div>
                            <div class="mb-4 p-5 bg-white rounded-xl shadow-xl">
                                <h4 class="uppercase font-dmSerifDisplay">
                                    Dika
                                </h4>
                                <p class="font-cormorant text-lg pt-1">
                                    Selamat atas pernikahannya, semoga diberkahi dengan kebahagiaan dan cinta.
                                </p>
                            </div>
                            <div class="mb-4 p-5 bg-white rounded-xl shadow-xl">
                                <h4 class="uppercase font-dmSerifDisplay">
                                    Siti
                                </h4>
                                <p class="font-cormorant text-lg pt-1">
                                    Barakallah! Semoga perjalanan hidup kalian selalu dilimpahi berkah.
                                </p>
                            </div>
                            <div class="mb-4 p-5 bg-white rounded-xl shadow-xl">
                                <h4 class="uppercase font-dmSerifDisplay">
                                    Agus
                                </h4>
                                <p class="font-cormorant text-lg pt-1">
                                    Selamat! Semoga cinta dan kasih sayang selalu menyertai perjalanan hidup kalian.
                                </p>
                            </div>
                            <div class="mb-4 p-5 bg-white rounded-xl shadow-xl">
                                <h4 class="uppercase font-dmSerifDisplay">
                                    Maya
                                </h4>
                                <p class="font-cormorant text-lg pt-1">
                                    Selamat menikah! Semoga menjadi keluarga yang sakinah, mawaddah, dan rahmah.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- RSVP -->
            <div class="w-full">
                <div class="bg-white flex flex-col mx-2 mt-10 mb-24 shadow-xl" data-aos="fade-up"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <!-- Judul RSVP -->
                    <h2 class="text-center text-3xl font-dmSerifDisplay mt-10 mb-5 mx-5">
                        RSVP
                    </h2>
                    <!-- Form -->
                    <form action="#" method="#" class="mx-5">
                        <div class="mb-4 w-full">
                            <label for="name" class="block text-white font-medium font-dmSerifDisplay">
                                Nama :
                            </label>
                            <input type="text" id="name" name="name"
                                class="mt-1 block w-full border border-[#EEEEEE] py-2 px-3 text-sm font-cormorant text-black"
                                placeholder="Nama Anda" required
                                onfocus="this.style.borderColor='#EEEEEE'; this.style.boxShadow='0 0 0 1px #ffffff';"
                                onblur="this.style.borderColor='#EEEEEE'; this.style.boxShadow='none';"
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                oninput="this.setCustomValidity('')" style="border-color: #EEEEEE;">

                        </div>
                        <div class="mb-4 w-full">
                            <label for="message" class="block text-white font-medium font-dmSerifDisplay">
                                Pesan :
                            </label>
                            <textarea id="message" name="message" rows="4"
                                class="mt-1 block w-full border border-[#EEEEEE] py-2 px-3 text-sm font-cormorant text-black"
                                placeholder="Tulis pesan Anda di sini..." required
                                onfocus="this.style.borderColor='#EEEEEE'; this.style.boxShadow='0 0 0 1px #ffffff';"
                                onblur="this.style.borderColor='#EEEEEE'; this.style.boxShadow='none';"
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"></textarea>
                        </div>
                        <div class="mb-4">
                            <div class="relative inline-block w-full">
                                <label for="message" class="block text-white font-medium font-dmSerifDisplay">
                                    Konfirmasi Kehadiran
                                </label>
                                <button id="dropdownButton"
                                    class="mt-1 block text-left bg-white text-black w-full border border-[#EEEEEE] shadow-sm py-2 px-3 sm:text-sm font-cormorant"
                                    style="transition: 0.5s ease; outline: none;" onclick="toggleDropdown(event)">
                                    <span class="text-gray-600">. . .</span>
                                </button>
                                <ul id="dropdownMenu"
                                    class="hidden absolute z-10 w-full mt-[0.10rem] bg-white text-black border border-[#EEEEEE] shadow-lg font-cormorant">
                                    <li class="py-2 px-3 cursor-pointer hover:bg-[#EEEEEE]"
                                        onclick="selectOption('Ya, Saya akan datang')">
                                        Ya, Saya akan datang
                                    </li>
                                    <li class="py-2 px-3 cursor-pointer hover:bg-[#EEEEEE]"
                                        onclick="selectOption('Maaf, Saya tidak bisa datang')">
                                        Maaf, Saya tidak bisa datang
                                    </li>
                                    <li class="py-2 px-3 cursor-pointer hover:bg-[#EEEEEE]"
                                        onclick="selectOption('Saya belum tahu bisa datang atau tidak')">
                                        Saya belum tahu bisa datang atau tidak
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center text-sm mb-10">
                            <button type="submit"
                                class="text-white shadow-xl py-2 px-6 focus:outline-none focus:ring-1 focus:ring-[#FFB3B8] focus:ring-offset-1 transition ease-in-out duration-150 font-montserrat"
                                style="background-color: #FFB3B8">
                                <span>Kirim</span>
                                <i class="fas fa-paper-plane ml-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Kado Digital -->
    <section>
        <div class="relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
            style="background-image: url('{{ asset('tema/premium-5/bg.webp') }}'); 
            background-size: cover; background-attachment: fixed;">
            <div class="bg-white my-5 mx-3 flex flex-col shadow-xl">
                <div class="mx-5 py-10" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <!-- Judul -->
                    <div class="text-center mb-9">
                        <div class="text-3xl font-dmSerifDisplay mb-5 mx-8">
                            Kado Digital
                        </div>
                        <div class="font-cormorant text-lg my-5 mx-8">
                            Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Dan jika memberi adalah
                            ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless
                        </div>
                    </div>
                    <!-- Divider -->
                    <div class="flex items-center justify-center text-center gap-4">
                        <div class="h-[1px] bg-black flex-1"></div>
                        <div class="text-2xl mx-0 md:mx-2">
                            <i class="fas fa-gift"></i>
                        </div>
                        <div class="h-[1px] bg-black flex-1"></div>
                    </div>
                    <!-- Rekening -->
                    <div>
                        <div class="w-full text-center font-cormorant mt-10">
                            <p class="text-lg mt-4">Bank :</p>
                            <p class="text-lg font-dmSerifDisplay">BCA</p>
                            <p class="mt-4 text-lg">Atas Nama :</p>
                            <p class="text-lg font-dmSerifDisplay">Rizky Syaputra</p>
                            <p class="mt-4 text-lg">Nomor Rekening :</p>
                            <p id="nomor_rekening_1" class="text-lg font-dmSerifDisplay mb-4">
                                12345678910
                            </p>
                            <div class="mb-4 text-center">
                                <button id="copyButton_1" type="button" onclick="copyToClipboard(1)"
                                    class="text-lg shadow-xl text-nowrap text-white py-2 px-6 focus:outline-none focus:ring-2 focus:ring-[#FFB3B8] focus:ring-offset-2 transition ease-in-out duration-150"
                                    style="background-color: #FFB3B8;">
                                    <span>Salin Nomor Rekening</span>
                                    <i class="fas fa-copy text-lg ml-1"></i>
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="w-full text-center font-cormorant">
                            <p class="text-lg mt-4">Bank :</p>
                            <p class="text-lg font-dmSerifDisplay">BCA</p>
                            <p class="mt-4 text-lg">Atas Nama :</p>
                            <p class="text-lg font-dmSerifDisplay">Ana Lutfiani</p>
                            <p class="mt-4 text-lg">Nomor Rekening :</p>
                            <p id="nomor_rekening_2" class="text-lg font-dmSerifDisplay mb-4">
                                10987654321
                            </p>
                            <div class="mb-4 text-center">
                                <button id="copyButton_2" type="button" onclick="copyToClipboard(2)"
                                    class="text-lg shadow-xl text-nowrap text-white py-2 px-6 focus:outline-none focus:ring-2 focus:ring-[#FFB3B8] focus:ring-offset-2 transition ease-in-out duration-150"
                                    style="background-color: #FFB3B8;">
                                    <span>Salin Nomor Rekening</span>
                                    <i class="fas fa-copy text-lg ml-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Penutup -->
    <section>
        <div class="relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
            style="background-image: url('{{ asset('tema/foto/cover.jpg') }}'); 
            background-size: cover; background-position: center;">
            <!-- Konten -->
            <div class="flex flex-col text-center bg-white/85 p-8 mx-5 shadow-xl relative max-w-[400px]">
                <!-- Teks Penutup -->
                <div data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="font-cormorant text-lg">
                        Suatu kebahagiaan & kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan
                        memberikan do’a restu kepada kami
                    </div>
                    <div class="font-dmSerifDisplay mt-5">
                        Wassalamu’alaikum Wr. Wb.
                    </div>
                </div>
                <br><br>
                <!-- Teks -->
                <div>
                    <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="font-cormorant text-lg">
                            Kami yang berbahagia
                        </div>
                        <div class="text-2xl font-bold mt-3 font-dmSerifDisplay">
                            Rizky & Ana
                        </div>
                    </div>
                    <div class="mt-10 font-cormorant text-lg" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        <div class="mt-5">
                            Created with
                            <i class="fa-solid fa-heart" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                                data-aos-duration="800"></i>
                            by
                            <a href="{{ route('home') }}" class="hover:underline" target="_blank">
                                WeInvite
                            </a>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('tema/premium-5/flower-1.webp') }}" alt="Flower"
                    class="absolute -bottom-14 -right-16 w-48 h-48 object-contain z-10 rotate-12" />
            </div>
        </div>
    </section>

    <!-- Modal Foto -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex items-center justify-center">
        <div class="bg-black/80 absolute inset-0"></div>
        <div class="relative p-1 w-full max-h-full">
            <div class="relative bg-white">
                <button type="button"
                    class="absolute top-2 right-2 text-white !bg-[#FFB3B8] !important text-sm w-7 h-7 inline-flex justify-center items-center"
                    onclick="closeModal()">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4">
                    <img id="modal-image" class="w-auto h-full mx-auto object-contain border-2 border-[#FFB3B8]"
                        src="" alt="Modal Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Musik -->
    <button id="music-control"
        class="fixed top-4 right-4 z-30 text-[#FFB3B8] bg-white py-3 px-4 rounded-full shadow-lg">
        <i id="music-icon" class="fas fa-music pr-[1px]"></i>
        <audio id="background-music" loop autoplay>
            <source src="{{ asset('tema/music/Yiruma, (이루마) - Kiss the Rain.mp3') }}" type="audio/mpeg">
        </audio>
    </button>

    <script>
        // Disable Klik Kanan
        document.addEventListener('contextmenu', event => event.preventDefault());

        // Disable specific key combinations
        document.addEventListener('keydown', event => {
            if (
                event.key === "F12" ||
                (event.ctrlKey && event.shiftKey && (event.key === "I" || event.key === "J" || event.key === "C" ||
                    event.key === "K")) ||
                (event.ctrlKey && event.key === "U") ||
                (event.metaKey && event.altKey && (event.key === "I" || event.key === "J" || event.key === "U")) ||
                (event.metaKey && event.shiftKey && (event.key === "C" || event.key === "K"))
            ) {
                event.preventDefault();
            }
        });

        // Detect DevTools is open
        let devtoolsOpen = false;
        setInterval(() => {
            const widthThreshold = window.outerWidth - window.innerWidth > 100;
            const heightThreshold = window.outerHeight - window.innerHeight > 100;
            if (widthThreshold || heightThreshold) {
                if (!devtoolsOpen) {
                    devtoolsOpen = true;
                }
            } else {
                devtoolsOpen = false;
            }
        }, 500);

        // Inisialisasi AOS
        AOS.init();

        // Fungsi Buka Undangan
        function openInvitation() {
            document.body.style.overflowY = "auto";
            document.body.style.overflowX = "hidden";

            const invitation = document.getElementById("main-invitation");
            invitation.scrollIntoView({
                behavior: "smooth",
            });
        }

        // Inisialisasi Navbar saat Halaman Dimuat
        window.onload = function() {
            document.body.style.overflow = "hidden";
            const coverPage = document.getElementById("cover-page");
            coverPage.scrollIntoView({
                behavior: "smooth",
            });
        };

        // Fungsi Countdown
        const targetDate = new Date("2025-12-31T08:00:00+01:00").getTime();

        const countdownInterval = setInterval(function() {
            const now = new Date().getTime();
            const distance = targetDate - now;

            if (distance < 0) {
                clearInterval(countdownInterval);
                document.getElementById("countdown").innerHTML = "Acara Telah Dimulai!";
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.querySelector('.days').innerText = days < 10 ? '0' + days : days;
            document.querySelector('.hours').innerText = hours < 10 ? '0' + hours : hours;
            document.querySelector('.minutes').innerText = minutes < 10 ? '0' + minutes : minutes;
            document.querySelector('.seconds').innerText = seconds < 10 ? '0' + seconds : seconds;
        }, 1000);

        // Fungsi Buka Modal
        function openModal(imageSrc) {
            const modalImage = document.getElementById("modal-image");
            modalImage.src = imageSrc;

            const modal = document.getElementById("default-modal");
            const modalContent = modal.querySelector('.relative');

            modal.classList.remove("hidden");

            gsap.fromTo(
                modalContent, {
                    scale: 0,
                    opacity: 0,
                }, {
                    scale: 1,
                    opacity: 1,
                    duration: 0.5,
                    ease: "back.out(1.7)",
                }
            );
        }

        // Fungsi Tutup Modal
        function closeModal() {
            const modal = document.getElementById("default-modal");
            const modalContent = modal.querySelector('.relative');

            gsap.to(modalContent, {
                scale: 0,
                opacity: 0,
                duration: 0.5,
                ease: "back.in(1.7)",
                onComplete: () => {
                    modal.classList.add("hidden");
                },
            });
        }

        // Fungsi Salin Nomor Rekening
        function copyToClipboard(id) {
            const rekeningText = document.getElementById("nomor_rekening_" + id).innerText;

            const tempTextArea = document.createElement("textarea");
            tempTextArea.value = rekeningText;
            document.body.appendChild(tempTextArea);
            tempTextArea.select();
            document.execCommand("copy");
            document.body.removeChild(tempTextArea);

            const button = document.getElementById("copyButton_" + id);
            button.innerHTML =
                '<span>Nomor Rekening Berhasil Disalin!</span> <i class="fas fa-check text-lg ml-1"></i>';

            setTimeout(() => {
                button.innerHTML =
                    '<span>Salin Nomor Rekening</span> <i class="fas fa-copy text-lg ml-1"></i>';
            }, 3000);
        }

        // Fungsi Toggle Dropdown
        function toggleDropdown(event) {
            event.preventDefault();
            const dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.classList.toggle("hidden");
        }

        // Fungsi Pilih Opsi Dropdown
        function selectOption(option) {
            const dropdownButton = document.getElementById("dropdownButton");
            dropdownButton.textContent = option;
            document.getElementById("dropdownMenu").classList.add("hidden");
        }

        // Fungsi Tutup Dropdown Saat Mengklik Di Luar Dropdown
        document.addEventListener("click", function(event) {
            const dropdownButton = document.getElementById("dropdownButton");
            const dropdownMenu = document.getElementById("dropdownMenu");
            if (!dropdownButton.contains(event.target)) {
                dropdownMenu.classList.add("hidden");
            }
        });

        // Fungsi Pause & Play Music
        const musicControl = document.getElementById('music-control');
        const backgroundMusic = document.getElementById('background-music');
        const musicIcon = document.getElementById('music-icon');
        let isPlaying = true;

        function toggleMusic() {
            if (isPlaying) {
                backgroundMusic.pause();
                musicIcon.classList.remove('fa-music');
                musicIcon.classList.add('fa-pause');
            } else {
                backgroundMusic.play();
                musicIcon.classList.remove('fa-pause');
                musicIcon.classList.add('fa-music');
            }
            isPlaying = !isPlaying;
        }

        musicControl.addEventListener('click', toggleMusic);

        // Custom Form
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');

            form.addEventListener('submit', function(event) {
                const requiredInputs = Array.from(form.querySelectorAll('input[required]'));
                let firstInvalidInput = null;

                requiredInputs.forEach(input => {
                    input.setCustomValidity('');
                });

                for (const input of requiredInputs) {
                    if (!input.value.trim()) {
                        if (!firstInvalidInput) {
                            firstInvalidInput = input;
                        }
                        input.setCustomValidity('Kolom ini harus diisi.');
                    }
                }

                if (firstInvalidInput) {
                    firstInvalidInput.focus();
                    firstInvalidInput.reportValidity();
                    event.preventDefault();
                }
            });
        });
    </script>

</body>

</html>
