<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

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
        .h {
            height: 90vh;
        }

        .r {
            background-color: red;
        }

        .b {
            background-color: blue;
        }

        .y {
            background-color: yellow;
        }

        .dm-sans {
            font-family: "DM Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 200;
            font-style: normal;
        }

        .cg-light {
            font-family: "Cormorant Garamond", serif;
            font-weight: 300;
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
    </style>
</head>

<body class="bg-gray-800">
    <!-- Navbar -->
    <nav class=" bg-gray-900 border-gray-200 md:mt-0">
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
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-gray-900 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 raleway">
                    <!-- <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-600  md:bg-transparent 
                        md:p-0 md:hover:text-blue-700 ">Home</a> <!-- md:text-blue-700 --> <!-- Untuk active -->
                    </li>

                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-600 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:py-5 ">HOME</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-600 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:py-5 ">ABOUT</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-600 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:py-5 ">PROYEK</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-600 md:hover:bg-transparent md:border-0 md:hover:text-gray-500 md:py-5 ">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="max-w-screen-xl md:h-screen md:grid grid-cols-1 md:grid-cols-2 py-1,5 mx-auto mt-10 md:mt-0 flex flex-wrap  justify-center ">
        <div class="order-1 md:order-2 flex items-end min-h-0 fix md:items-center justify-center md:justify-end py-5 px-5">
            <img class="rounded-full w-96 h-96 md:w-96 md:h-96" src="Profile.jpg">
        </div>
        <div class="order-2 md:order-1 flex items-start md:items-center md:mt-0 px-5 py-0 md:p-10">
            <div class="heading text-white">
                <h1 class="cg-light mb-3 tracking-widest text-gray-300 text-4xl text-center md:text-7xl md:text-left">
                    WELCOME.
                </h1>
                <p class="raleway text-gray-400 text-1xl text-center md:text-justify ">
                    Saya merupakan mahasiswa di Institut Teknologi Adhitama Surabaya jurusan Sistem Informasi yang memiliki minat di bidang pembuatan website. Saya telah menguasai HTML, CSS, PHP, Framework seperti Laravel, Codeigniter, Bootstrap, serta memiliki kemampuan untuk merancang database menggunakan Mysql dan Power Designer.
                </p>
            </div>
        </div>

    </div>
</body>




</html>