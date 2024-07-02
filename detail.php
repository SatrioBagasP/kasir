<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel Details</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #modal img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>

<body class="flex flex-col items-center justify-center min-h-screen bg-gray-900">

    <?php
    // Get the ID from the URL
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // Load the JSON data from file
    $jsonData = file_get_contents('data.json');
    $data = json_decode($jsonData, true);

    // Find the carousel with the given ID
    $carousel = null;
    foreach ($data['carousels'] as $item) {
        if ($item['id'] == $id) {
            $carousel = $item;
            break;
        }
    }
    ?>
    <div id="default-carousel" class="relative w-full z-10" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

            <?php foreach ($carousel['items'] as $index => $item) : ?>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="<?= $item['src'] ?>" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 cursor-pointer" alt="..." onclick="openModal(this)">
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <?php foreach ($carousel['items'] as $index => $item) : ?>

                <button type="button" class="w-3 h-3 rounded-full" aria-current="<?= ($index === 0) ? 'true' : 'false' ?>" aria-label="Slide '. <?= $index + 1; ?>.'" data-carousel-slide-to="<?= $index ?>"></button>

            <?php endforeach; ?>

        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 hidden z-20">
        <button id="prevBtn" class="absolute left-4 p-4 text-white">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M13.729 5.575c1.304-1.074 3.27-.146 3.27 1.544v9.762c0 1.69-1.966 2.618-3.27 1.544l-5.927-4.881a2 2 0 0 1 0-3.088l5.927-4.88Z" clip-rule="evenodd" />
            </svg>
        </button>
        <img src="" alt="Zoomed Image" id="modalImage" class="max-w-full max-h-full">
        <button id="nextBtn" class="absolute right-4 p-4 text-white">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M10.271 18.425c-1.304 1.074-3.27.146-3.27-1.544V7.119c0-1.69 1.966-2.618 3.27-1.544l5.927 4.881a2 2 0 0 1 0 3.088l-5.927 4.88Z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <script>
        const modal = document.getElementById('modal');
        const modalImage = document.getElementById('modalImage');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentIndex;
        let currentCarouselImages;

        function openModal(element, index) {
            currentIndex = index;
            currentCarouselImages = Array.from(element.parentElement.parentElement.querySelectorAll('img'));
            modalImage.src = element.src;
            modal.classList.remove('hidden');
        }

        function updateModalImage(index) {
            modalImage.src = currentCarouselImages[index].src;
        }

        prevBtn.addEventListener('click', (event) => {
            event.stopPropagation();
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : currentCarouselImages.length - 1;
            updateModalImage(currentIndex);
        });

        nextBtn.addEventListener('click', (event) => {
            event.stopPropagation();
            currentIndex = (currentIndex < currentCarouselImages.length - 1) ? currentIndex + 1 : 0;
            updateModalImage(currentIndex);
        });

        // Hide modal on click outside of image
        modal.addEventListener('click', (e) => {
            if (e.target !== modalImage && e.target !== prevBtn && e.target !== nextBtn) {
                modal.classList.add('hidden');
            }
        });
    </script>

</body>

</html>