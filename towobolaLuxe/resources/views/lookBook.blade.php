<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Towobola Luxe - Lookbook</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;family=Poppins:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#B89F5D",
                        "background-light": "#FDFBF6",
                        "background-dark": "#111621",
                        "text-light": "#2D2D2D",
                        "text-dark": "#FDFBF6",
                    },
                    fontFamily: {
                        "display": ["Newsreader", "serif"],
                        "body": ["Poppins", "sans-serif"],
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            background-color: #FDFBF6;
        }

        .dark body {
            background-color: #111621;
        }

        #fullscreen-video-overlay:target {
            display: flex;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="bg-background-light dark:bg-background-dark font-body text-text-light dark:text-text-dark">
    <div class="relative w-full overflow-x-hidden">
        <x-header />
        <main class="flex flex-col">
            <h1
                class="font-display text-[40px] font-bold leading-tight tracking-tight px-4 text-center pt-8 pb-4 text-text-light dark:text-text-dark">
                Lookbook</h1>
            <div class="px-4 pb-6 flex items-center justify-end">
                <p class="text-sm text-text-light/70 dark:text-text-dark/70">{{ $lookBooks->count() }}Looks</p>
                <form method="GET" action="{{ route('lookBook') }}">
                    <select name='category' class="bg-slate-700 text-white rounded-xl">
                        <option value="">choose category</option>
                        <option value="all">All</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <button class='bg-white text-slate-700 p-2'>filter</button>
                </form>
            </div>

            <div class='glass flex fixed  md:hidden hidden inset-0 z-[999]  items-center justify-center bg-black/10 backdrop-blur-sm'>
                <div class='' ></div>
                <div>
                    <h1 class="text-4xl font-bold capitalize text-red-500" id='close-btn'>x</h1>
                {{-- <div class='screen'>
                    <img src='{{ asset('images/ankara image6.jpg') }}' class="h-[35rem] w-[20rem]" >
                </div> --}}
                <div class='screen'>
    <img class="h-[35rem] w-[20rem]" />
    <video class="h-[35rem] w-[20rem] hidden" controls></video>
</div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-3 z-0 p-4 ">
                {{-- <div class="col-span-1 flex flex-col gap-3"> --}}
                @foreach ($lookBooks as $lookBook)
                  
                        <div class="relative group overflow-hidden rounded-xl">
                            <video autoplay
                                class="h-full w-full object-cover aspect-[3/4] transition-transform duration-300 group-hover:scale-105">
                                <source src="{{ Storage::disk('public')->url($lookBook->video) }}">
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <p class="absolute bottom-4 left-4 font-display text-lg font-bold capitalize md:text-xl   leading-tight text-white">
                                {{ $lookBook->collection_name }}</p>
                        </div>
                    <div class="relative group overflow-hidden rounded-xl imgContainer" >
                        <img  class="h-full w-full object-cover aspect-[3/4] transition-transform duration-300 group-hover:scale-105"
                            src="{{ Storage::disk('public')->url($lookBook->image) }}" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <p class="absolute bottom-4 left-4 font-display text-lg font-bold leading-tight text-white capitalize md:text-xl ">
                            {{ $lookBook->collection_name }}</p>
                    </div>
                @endforeach

            </div>
        </main>

        <div class="fixed bottom-6 right-6 z-40">
            <button
                class="flex h-14 w-14 cursor-pointer items-center justify-center overflow-hidden rounded-full bg-[#25D366] text-white shadow-lg">
                <svg class="bi bi-whatsapp" fill="currentColor" height="28" viewBox="0 0 16 16" width="28"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
                    </path>
                </svg>
            </button>
        </div>

        <x-footer />
    </div>
    <div class="fixed inset-0 z-[999] hidden items-center justify-center bg-black/90 backdrop-blur-md"
        id="fullscreen-video-overlay">
        <a class="absolute top-4 right-4 text-white z-10" href="#">
            <span class="material-symbols-outlined text-4xl">close</span>
        </a>
        <div class="relative w-full h-full flex items-center justify-center">
            <video autoplay="" class="w-full max-h-full object-contain" controls="">
                <source src="#" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <script>
//     let screen = document.querySelector('.screen');
// let screenImg = document.querySelector('.screen img');
// let glass = document.querySelector('#glass');
// let imageContainerImg = document.querySelectorAll('.imgContainer img');
// let imageContainer = document.querySelectorAll('.imgContainer');
// let closeBtn = document.getElementById('close-btn');

// Popup elements
    let glass       = document.querySelector('.glass');
    let screenImg   = document.querySelector('.screen img');
    let screenVideo = document.querySelector('.screen video'); // (we will add this)
    let closeBtn    = document.getElementById('close-btn');

    // Collect all clickable media
    let imageItems = document.querySelectorAll('.imgContainer img');
    let videoItems = document.querySelectorAll('video'); // all looping videos in grid

// const imageContainerImgs = document.querySelectorAll('.imageContainerImg');
// const screenImg = document.getElementById('screenImg');

imageItems.forEach(img => {
    img.addEventListener('click', () => {
        screenImg.classList.remove('hidden');
    });
});

    // 📌 Show IMAGE in popup
    // imageItems.forEach(img => {
    //     img.addEventListener('click', function () {
    //         let src = this.getAttribute('src');
    //         console.log(src);

    //         // Show image
    //         screenImg.src = src;
    //         screenImg.classList.remove('hidden');

    //         // Hide video
    //         if (screenVideo) screenVideo.classList.add('hidden');

    //         // Show modal
    //         glass.classList.remove('hidden');
    //     });
    // });


    // // 📌 Show VIDEO in popup
    // videoItems.forEach(v => {
    //     v.addEventListener('click', function () {
    //         let src = this.querySelector("source").getAttribute("src");

    //         // Create video element if not exist
    //         if (!screenVideo) {
    //             screenVideo = document.createElement("video");
    //             screenVideo.controls = true;
    //             screenVideo.autoplay = true;
    //             screenVideo.className = "h-[35rem] w-[20rem] object-contain";
    //             document.querySelector('.screen').appendChild(screenVideo);
    //         }

    //         // Set video source
    //         screenVideo.src = src;
    //         screenVideo.classList.remove('hidden');

    //         // Hide image
    //         screenImg.classList.add('hidden');

    //         // Show modal
    //         glass.classList.remove('hidden');
    //     });
    // });


    // // ❌ Close popup when pressing X
    // closeBtn.addEventListener('click', function () {
    //     glass.classList.add('hidden');

    //     // Pause video when closing
    //     if (screenVideo) screenVideo.pause();
    // });
   
    </script>
</body>
</html>
