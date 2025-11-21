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
<div class='flex justify-between items-center mb-2'>
<h2 class="text-slate-900 dark:text-white text-2xl font-bold leading-tight tracking-[-0.015em] mb-4">Add New Testimonial</h2>
<button class='bg-red-400 rounded-md text-sm shadow-sm py-2 px-3'><a href="{{route('dashboard')}}" class='text-white capitalize'>home</a></button></div>
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
<span>Submit Testimonial</span>
</button>
</div>
</div>
</section>
<!-- Manage Existing Testimonials Section -->
<section>
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-4">
<h2 class="text-slate-900 dark:text-white text-2xl font-bold leading-tight tracking-[-0.015em]">Manage Existing</h2>
<div class="flex items-center gap-2">
<label class="text-slate-600 dark:text-slate-400 text-sm font-medium" for="filterStatus">Filter by:</label>
<select class="form-select rounded-lg border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900/40 text-slate-900 dark:text-white focus:border-primary focus:ring-primary/50 text-sm py-2 pl-3 pr-8" id="filterStatus">
<option>All</option>
<option>Approved</option>
<option>Pending</option>
</select>
</div>
</div>
<div class="space-y-4">
<!-- Testimonial Card 1 -->
<div class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/40 p-4 flex flex-col md:flex-row gap-4 items-start">
<img class="w-16 h-16 rounded-full object-cover shrink-0" data-alt="Photo of Jane Doe" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-OXXpBevjuRafU9jfbPSvH50yiUyjVI5gTILSjJuHpsQN7wlDxoYRoG6aY4qGjUm63XqK30IDsUncrurjn43GHm-jiuUPQz6XNecvrMWrvE72oCV_Snh2r2ZOfmXY49tV1kaTzufp4BCK5KUGwIU6zUnRwIBRbcx9VqjRcPVRazybW1CMScMi2fGac1gORNruoLy7tDBrFNZHAgNgRTcDnDZ5i_1sF4yoV_U5xMXF4TuVf0Hh-ZqDESa7F9__7vd1sm0zFKXDbRBR"/>
<div class="flex-1">
<div class="flex items-center gap-3 mb-1">
<h3 class="font-bold text-slate-900 dark:text-white">Jane Doe</h3>
<span class="inline-flex items-center rounded-full bg-green-100 dark:bg-green-900/40 px-2.5 py-0.5 text-xs font-semibold text-green-800 dark:text-green-300">Approved</span>
</div>
<p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed line-clamp-2">"Absolutely stunning craftsmanship! The attention to detail in my custom gown from Towobola Luxe was breathtaking. It was the centerpiece of my event, and I received endless compliments."</p>
</div>
<div class="flex items-center gap-1 self-start md:self-center shrink-0 ml-auto md:ml-0">
<button class="p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined" style="font-size: 20px;">edit</span>
</button>
<button class="p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-red-500 dark:text-red-500">
<span class="material-symbols-outlined" style="font-size: 20px;">delete</span>
</button>
<button class="p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined" style="font-size: 20px;">visibility_off</span>
</button>
</div>
</div>
<!-- Testimonial Card 2 -->
<div class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/40 p-4 flex flex-col md:flex-row gap-4 items-start">
<img class="w-16 h-16 rounded-full object-cover shrink-0" data-alt="Photo of John Smith" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDOH7u2DQasZztsZE3i7lzv9nXFG7e1bbaBN8mSymqJvqLXSg-xIBNPsm7H2NnHUdOx-DNPmuJLZ96jOOLS1aNPs7T2kep76VxilWNNINIMSB4WGKrV0uix7UrcDk1fhogmtHcQyAsmnOmd4QSWlZufhhiBfRRN48xmCgakf2myNANNqPP880msWYsqxjn6ncivnj4CZva1raS_bB00ZHysp4z7Q03cubAzl-2j2zvhFl72UAoDxzOZDVoIpG6yq2HbYsvwUA0pYM2"/>
<div class="flex-1">
<div class="flex items-center gap-3 mb-1">
<h3 class="font-bold text-slate-900 dark:text-white">John Smith</h3>
<span class="inline-flex items-center rounded-full bg-yellow-100 dark:bg-yellow-900/40 px-2.5 py-0.5 text-xs font-semibold text-yellow-800 dark:text-yellow-300">Pending</span>
</div>
<p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed line-clamp-2">"The tailoring is impeccable. The suit fits like a glove and the fabric quality is top-notch. The entire process, from consultation to final fitting, was seamless and professional."</p>
</div>
<div class="flex items-center gap-1 self-start md:self-center shrink-0 ml-auto md:ml-0">
<button class="p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined" style="font-size: 20px;">edit</span>
</button>
<button class="p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-red-500 dark:text-red-500">
<span class="material-symbols-outlined" style="font-size: 20px;">delete</span>
</button>
<button class="p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined" style="font-size: 20px;">check_circle</span>
</button>
</div>
</div>
<!-- Empty State -->
<!-- 
                        <div class="rounded-xl border-2 border-dashed border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/20 p-8 flex flex-col items-center justify-center text-center">
                            <span class="material-symbols-outlined text-slate-400 dark:text-slate-600" style="font-size: 48px;">chat_bubble_outline</span>
                            <p class="mt-4 font-semibold text-slate-800 dark:text-slate-200">No testimonials found</p>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Add a new one using the form above to get started.</p>
                        </div>
                        -->
</div>
</section>
</div>
</main>
</div>
</body></html>