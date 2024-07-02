<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Animated on Scroll -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">


    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Document</title>

    <style>
        .dm-sans {
            font-family: "DM Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 200;
            font-style: normal;
        }

        .cg-light {
            font-family: "Cormorant Garamond", serif;
            font-weight: 700;
            font-style: normal;
        }

        .raleway {
            font-family: "Raleway", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
        }

        .fix {
            margin-top: -40px;
        }

        .animate-charcter {
            text-transform: uppercase;
            background-image: linear-gradient(-225deg,
                    #231557 0%,
                    #b59562 29%,
                    #ff1361 67%,
                    #fff800 100%);
            background-size: auto auto;
            background-clip: border-box;
            background-size: 200% auto;
            color: #fff;
            background-clip: text;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 3s linear infinite;
            font-size: 70px;
        }

        @keyframes textclip {
            to {
                background-position: 200% center;
            }
        }

        .custom-card {
            background: url('tes1.png') no-repeat center center;
            background-size: cover;
            position: relative;
            overflow: hidden;
        }

        .custom-card-1 {
            background: url('2.png') no-repeat center center;
            background-size: cover;
            position: relative;
            overflow: hidden;
        }

        .custom-card-2 {
            background: url('tes2.png') no-repeat center center;
            background-size: cover;
            position: relative;
            overflow: hidden;
        }

        .custom-card-3 {
            background: url('tes3.png') no-repeat center center;
            background-size: cover;
            position: relative;
            overflow: hidden;
        }

        .custom-card-4 {
            background: url('tes4.png') no-repeat center center;
            background-size: cover;
            position: relative;
            overflow: hidden;
        }

        .custom-card-5 {
            background: url('tes5.png') no-repeat center center;
            background-size: cover;
            position: relative;
            overflow: hidden;
        }

        .custom-card-6 {
            background: url('tes6.png') no-repeat center center;
            background-size: cover;
            position: relative;
            overflow: hidden;
        }

        .custom-card-7 {
            background: url('tes7.png') no-repeat center center;
            background-size: cover;
            position: relative;
            overflow: hidden;
        }

        .custom-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
            /* Overlay warna hitam dengan opacity 0.3 */
        }

        .custom-card-1::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
            /* Overlay warna hitam dengan opacity 0.3 */
        }

        .custom-card-2::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
            /* Overlay warna hitam dengan opacity 0.3 */
        }

        .custom-card-3::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
            /* Overlay warna hitam dengan opacity 0.3 */
        }

        .custom-card-4::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
            /* Overlay warna hitam dengan opacity 0.3 */
        }

        .custom-card-5::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
            /* Overlay warna hitam dengan opacity 0.3 */
        }

        .custom-card-6::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
            /* Overlay warna hitam dengan opacity 0.3 */
        }

        .custom-card-7::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
            /* Overlay warna hitam dengan opacity 0.3 */
        }

        .card-content {
            position: relative;
            z-index: 1;
            /* Mengatur teks di atas overlay */
            color: #fff;
            /* Warna teks putih untuk kontras dengan latar belakang gelap */
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .text-limit {
            width: 100%;
            /* Lebar maksimum untuk teks */
            overflow: hidden;
            /* Mengatur teks yang melebihi lebar untuk disembunyikan */
            white-space: nowrap;
            /* Mencegah teks untuk melintas baris */
            text-overflow: ellipsis;
            /* Menyisipkan tanda elipsis (...) untuk teks yang dipotong */

        }

        .bg {
            background-color: #212529;
            /* background-color: rgb(32, 33, 36); */
        }

        .bg1 {
            /* background-color: red; */
            background-color: rgb(32, 33, 36);
        }

        @import url('https://fonts.googleapis.com/css?family=Fira+Mono:400');

        .glitch {
            animation: glitch 1s linear infinite;
        }

        @keyframes glitch {

            2%,
            64% {
                transform: translate(2px, 0) skew(0deg);
            }

            4%,
            60% {
                transform: translate(-2px, 0) skew(0deg);
            }

            62% {
                transform: translate(0, 0) skew(5deg);
            }
        }

        .glitch:before,
        .glitch:after {
            content: attr(title);
            position: absolute;
            left: 0;
        }

        .glitch:before {
            animation: glitchTop 1s linear infinite;
            clip-path: polygon(0 0, 100% 0, 100% 33%, 0 33%);
            -webkit-clip-path: polygon(0 0, 100% 0, 100% 33%, 0 33%);
        }

        @keyframes glitchTop {

            2%,
            64% {
                transform: translate(2px, -2px);
            }

            4%,
            60% {
                transform: translate(-2px, 2px);
            }

            62% {
                transform: translate(13px, -1px) skew(-13deg);
            }
        }

        .glitch:after {
            animation: glitchBotom 1.5s linear infinite;
            clip-path: polygon(0 67%, 100% 67%, 100% 100%, 0 100%);
            -webkit-clip-path: polygon(0 67%, 100% 67%, 100% 100%, 0 100%);
        }

        @keyframes glitchBotom {

            2%,
            64% {
                transform: translate(-2px, 0);
            }

            4%,
            60% {
                transform: translate(-2px, 0);
            }

            62% {
                transform: translate(-22px, 5px) skew(21deg);
            }
        }

        span {
            color: #FFC107;
        }

        .r {
            background-color: red;
        }

        .h {
            height: 80vh;
        }

        @media (max-width: 768px) {
            .h {
                height: max-content;
            }
        }

        .gambar {
            height: 500px;
        }

        body {
            overflow-x: hidden;
        }

        .b {
            background-color: blue;
        }

        #back-to-top {
            display: none;
            /* Sembunyikan tombol secara default */
            position: fixed;
            /* Posisi tetap di sudut kanan bawah */
            bottom: 20px;
            /* Jarak dari bawah */
            right: 20px;
            /* Jarak dari kanan */
            z-index: 100;
            /* Pastikan tombol berada di atas elemen lainnya */
            background-color: #FFC107;
            /* Warna latar belakang */
            color: black;
            /* Warna teks */
            border: none;
            /* Hilangkan border */
            padding: 10px 20px;
            /* Padding */
            font-size: 16px;
            /* Ukuran font */
            border-radius: 5px;
            /* Sudut melengkung */
            cursor: pointer;
            /* Ganti kursor menjadi pointer */
        }

        #back-to-top:hover {
            background-color: yellow;
            /* Warna latar belakang saat di-hover */
        }
    </style>
</head>

<body class="bg">
    <!-- Navbar -->
    <nav class="bg1 border-gray-200 md:mt-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-10 py-4  ">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="text-white self-center text-2xl font-semibold whitespace-nowrap">Satrio Bagas P</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border  rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 raleway">
                    <!-- <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-600  md:bg-transparent 
                        md:p-0 md:hover:text-blue-700 ">Home</a> <!-- md:text-blue-700 --> <!-- Untuk active -->
                    </li>

                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-600 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:py-5 ">HOME</a>
                    </li>
                    <li>
                        <a href="#about" class="block py-2 px-3 text-white rounded hover:bg-gray-600 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:py-5 ">ABOUT</a>
                    </li>
                    <li>
                        <a href="#projects" class="block py-2 px-3 text-white rounded hover:bg-gray-600 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:py-5 ">PROYEK</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-600 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:py-5 ">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Hero -->
    <div class="h max-w-screen-xl grid grid-cols-1 md:grid-cols-2 md:mx-auto flex items-center justify-center mb-10 ">
        <div class="order-1 md:order-2 flex items-center justify-center mt-5 md:mt-0" data-aos="slide-left" data-aos-duration="1000">
            <img class="rounded-full w-72 h-72 md:w-96 md:h-96" src="Profile.jpg">
        </div>
        <div class="order-2 md:order-1 flex items-center justify-center" data-aos="slide-right" data-aos-duration="1000">
            <div class="heading text-white mt-5 mb-5 md:mt-0 md:mb-0 px-5">
                <h1 class="cg-light text-gray-300 text-4xl text-center md:text-3xl md:text-left">
                    Hi. my name is
                </h1>
                <h1 class="cg-light text-gray-300 text-4xl text-center md:text-7xl md:text-left">
                    Satrio <span>Bagas P</span>
                </h1>
                <div class="glitch cg-light text-gray-300 text-4xl text-center md:text-7xl md:text-left" title="I'am Web Developer">
                    I'am Web Developer
                </div>
                <div class="button mt-2 flex items-center justify-center md:justify-start  ">
                    <a href="CV_SatrioBagasP.pdf" download>
                        <button type="button" class="flex items-center text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-gray-900 dark:hover:bg-yellow-400 dark:focus:ring-yellow-900 transition duration-300 ease-in-out">
                            <svg class="w-6 h-6 mr-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2m-8 1V4m0 12-4-4m4 4 4-4" />
                            </svg>
                            Download My CV
                        </button>
                    </a>

                    <a href="#projects"> <button type="button" class=" text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-gray-900 dark:hover:bg-yellow-400 dark:focus:ring-yellow-900 transition duration-300 ease-in-out">My Project</button></a>

                </div>

            </div>
        </div>
    </div>

    <!-- About -->
    <div class="" id="about">
        <div class=" mb-10 max-w-screen-xl h-full md:h-screen mx-auto  flex items-center">
            <div class="grid grid-cols-1" data-aos="fade-up" data-aos-duration="1000">
                <div class="heading mb-4">
                    <h1 class="cg-light tracking-widest text-gray-300 text-4xl text-center md:text-7xl md:text-">
                        ABOUT ME!
                    </h1>
                </div>
                <div class="dec px-10">
                    <p class="raleway text-gray-300 text-1xl md:text-2xl text-justify md:text-center">
                        Saya merupakan mahasiswa di Institut Teknologi Adhitama Surabaya jurusan Sistem Informasi yang memiliki minat di bidang pembuatan website. Saya telah menguasai HTML, CSS, PHP, Framework seperti Laravel, Codeigniter, Bootstrap, serta memiliki kemampuan untuk merancang database menggunakan Mysql dan Power Designer. Saya sekarang sedang belajar untuk meningkatkan skill yang harus saya kuasai, dan saya memiliki fokus yang tinggi sehingga mampu mengerjakan suatu hal dengan penuh dedikasi.
                    </p>
                </div>
                <!-- Social Icon -->
                <div class="mt-5 icon flex items-center justify-center">
                    <span>
                        <a href="https://www.linkedin.com/in/satrio-bagas-7994882b7/">
                            <svg class="h-10 hover:text-gray-700 transition duration-300 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd" />
                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                            </svg>
                        </a>
                    </span>

                    <span>


                        <a href="https://www.instagram.com/satriobagas.p/">
                            <svg class="h-10  hover:text-gray-700 transition duration-300 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </span>

                    <span>
                        <a href="https://github.com/SatrioBagasPangestu">
                            <svg class="h-10 hover:text-gray-700 transition duration-300 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </span>
                </div>
            </div>

        </div>
    </div>

    <!-- Project -->
    <div class="" id="projects">
        <div class=" max-w-screen-xl h-full md:h-screen mx-auto flex items-start">
            <div class="grid grid-cols-1" data-aos="fade-up" data-aos-duration="1000">
                <div class="heading py-10" data-aos="slide-up" data-aos-duration="1000">
                    <h1 class="cg-light mb-3 tracking-widest text-gray-300 text-4xl text-center md:text-7xl md:text-">
                        MY PROJECTS
                    </h1>
                </div>
                <div class="Own mb-5">
                    <h1 class="cg-light text-white px-5 text-3xl mt-4">
                        Own Project
                    </h1>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-5 ">
                        <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600 custom-card-4">
                            <div class="card-content">
                                <h5 class="raleway mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">KRS Online</h5>
                                <p class="raleway text-gray-700 dark:text-white text-limit">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            </div>
                        </a>
                        <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600 custom-card-5">
                            <div class="card-content">
                                <h5 class="raleway mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mental Health</h5>
                                <p class="raleway text-gray-700 dark:text-white text-limit">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            </div>
                        </a>
                        <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600 custom-card-6">
                            <div class="card-content">
                                <h5 class="raleway mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Kasir</h5>
                                <p class="raleway text-gray-700 dark:text-white text-limit">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="Freelance mb-5">
                    <h1 class="cg-light text-white px-5 text-3xl">
                        Freelance Wordpress Developer
                    </h1>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-5 ">
                        <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600 custom-card">
                            <div class="card-content">
                                <h5 class="raleway mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Property</h5>
                                <p class="raleway text-gray-700 dark:text-white text-limit">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            </div>
                        </a>
                        <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600 custom-card-1">
                            <div class="card-content">
                                <h5 class="raleway mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Car Dealer</h5>
                                <p class="raleway text-gray-700 dark:text-white text-limit">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            </div>
                        </a>
                        <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600 custom-card-2">
                            <div class="card-content">
                                <h5 class="raleway mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Vacation</h5>
                                <p class="raleway text-gray-700 dark:text-white text-limit">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            </div>
                        </a>
                        <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600 custom-card-3">
                            <div class="card-content">
                                <h5 class="raleway mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Marketplace</h5>
                                <p class="raleway text-gray-700 dark:text-white text-limit">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            </div>
                        </a>
                    </div>
                </div>



                <div class="Dosen">
                    <h1 class="cg-light text-white px-5 text-3xl mt-4">
                        Project with Dosen
                    </h1>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-5 ">
                        <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600 custom-card-7">
                            <div class="card-content">
                                <h5 class="raleway mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Project Abdimas</h5>
                                <p class="raleway text-gray-700 dark:text-white text-limit">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <button id="back-to-top" title="Kembali ke atas">↑ Back to Top</button>

    <!-- Footer -->
    <div class="">
        <footer class="bg">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">

                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Satrio Bagas™</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 sm:justify-center sm:mt-0">
                        <a href="https://www.facebook.com/soleh.vlok.1" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="https://github.com/SatrioBagasPangestu" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">GitHub account</span>
                        </a>
                        <a href="https://www.instagram.com/satriobagas.p/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                            <svg class="h-4  transition duration-300 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Instagram account</span>
                        </a>

                        <a href="https://www.linkedin.com/in/satrio-bagas-7994882b7/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                            <svg class="h-4  transition duration-300 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd" />
                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                            </svg>
                            <span class="sr-only">Linkin account</span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>



</body>
<script>
    // script.js

    // Dapatkan tombol
    var backToTopButton = document.getElementById("back-to-top");

    // Ketika pengguna menggulir ke bawah 20px dari bagian atas dokumen, tampilkan tombol
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            backToTopButton.style.display = "block";
        } else {
            backToTopButton.style.display = "none";
        }
    }

    // Ketika pengguna mengklik tombol, gulir ke bagian atas dokumen
    backToTopButton.onclick = function() {
        scrollToTop();
    };

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>


</html>