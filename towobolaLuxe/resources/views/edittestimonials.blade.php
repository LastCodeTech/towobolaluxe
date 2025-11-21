<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Testimonial Management</title>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1754cf",
                        "background-light": "#f6f6f8",
                        "background-dark": "#111621",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            font-size: 24px;
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark font-display">
<div class="relative flex min-h-screen w-full flex-col">
<!-- Top App Bar -->
<header class="sticky top-0 z-10 flex h-16 items-center border-b border-slate-200/80 dark:border-slate-800/80 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm px-4">
<h1 class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">Testimonial Management</h1>
</header>
<main class="flex flex-col flex-1 p-4 md:p-6 lg:p-8">
<div class="mx-auto w-full max-w-4xl space-y-8">
<!-- Add New Testimonial Section -->
<section>
<div class='mb-4 flex justify-between items-center'>
<h2 class="text-slate-900 dark:text-white text-2xl font-bold leading-tight tracking-[-0.015em] ">update Testimonials</h2>
<button class='bg-red-400 rounded-md text-sm shadow-sm py-2 px-3'><a href="{{route('testimonialsmng')}}" class='text-white capitalize'>back</a></button></div>
<div class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/40 p-4 md:p-6 space-y-6">
<div class="flex flex-col md:flex-row gap-6">
<div class="flex flex-col min-w-40 flex-1">
<label class="text-slate-800 dark:text-slate-200 text-base font-medium leading-normal pb-2" for="clientName">Client Name</label>
<input class="form-input w-full resize-none overflow-hidden rounded-lg text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-slate-700 bg-background-light dark:bg-background-dark h-12 placeholder:text-slate-400 dark:placeholder:text-slate-500 px-4 text-base font-normal leading-normal" id="clientName" placeholder="Enter client's full name" value=""/>
</div>
<div class="flex flex-col items-center gap-3 md:w-48">
<p class="text-slate-800 dark:text-slate-200 text-base font-medium leading-normal w-full pb-2 md:pb-0">Client Photo</p>
<div class="w-24 h-24 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center">
<span class="material-symbols-outlined text-slate-400 dark:text-slate-500" style="font-size: 40px;">person</span>
</div>
<button class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-slate-200 hover:bg-slate-300 dark:bg-slate-800 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-200 gap-2 text-sm font-bold leading-normal tracking-[0.015em]">
<span class="material-symbols-outlined" style="font-size: 20px;">upload</span>
<span>Upload</span>
</button>
</div>
</div>
<div>
<label class="flex flex-col min-w-40 flex-1" for="testimonialText">
<p class="text-slate-800 dark:text-slate-200 text-base font-medium leading-normal pb-2">Testimonial Text</p>
<textarea class="form-input w-full resize-none overflow-hidden rounded-lg text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-slate-700 bg-background-light dark:bg-background-dark min-h-36 placeholder:text-slate-400 dark:placeholder:text-slate-500 p-4 text-base font-normal leading-normal" id="testimonialText" placeholder="Enter the testimonial content here"></textarea>
</label>
</div>
<div class="flex justify-end">
<button class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-primary text-white gap-2 text-base font-bold leading-normal tracking-[0.015em] hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:ring-offset-2 focus:ring-offset-background-light dark:focus:ring-offset-background-dark">
<span>update Testimonial</span>
</button>
</div>
</div>
</section>
<!-- Manage Existing Testimonials Section -->
</div>
</main>
</div>
</body></html>