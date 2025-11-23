<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Towobola Luxe - Favorites</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
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
<h1 class="font-display text-[40px] font-bold leading-tight tracking-tight px-4 text-center pt-8 pb-6 text-text-light dark:text-text-dark">My Favorites</h1>
<div class="flex gap-3 px-4 pb-6 overflow-x-auto [scrollbar-width:none] [-ms-overflow-style:none]">

<h1 class='flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-background-light px-5 ring-1 ring-inset ring-text-light/20 dark:bg-background-dark dark:ring-text-dark/20'><a href="{{route('lookBook')}}" class="text-sm font-medium leading-normal text-text-light dark:text-text-dark">back to lookBook</a></h1>
</div>
<div class="grid grid-cols-2 gap-3 p-4">
<div class="relative group overflow-hidden rounded-xl">
<img class="h-full w-full object-cover aspect-[3/4] transition-transform duration-300 group-hover:scale-105" data-alt="Model in a flowing white dress against a neutral background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXpydiLHvRKiCz_EF5P3pYBFHmxYX53pjgO6iobvVwueVJWVJN31xiEdU5Vvv0K8YbMDAo6wmte3yHaqmarVjWFCAtVfRCDbEdeiHB-FNves6yH7R64W9rk4ci_K27nOrU8vMA9dIEc6l74yTUbiOinlGsP6Zy-LH0ahaeBDfwy6preTszs73pty97Mw4qHtd4dK43X75D-RgcmmngBV1rl6_Y8lOxkl2zzyynJbFMmlZt_exwtyUTJviVArWAm6KJ59MbJ4kWO4Zk"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<button class="absolute top-2 right-2 flex h-8 w-8 items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
<span class="material-symbols-outlined text-white text-lg">close</span>
</button>
</div>
<div class="relative group overflow-hidden rounded-xl">
<img class="h-full w-full object-cover aspect-[3/4] transition-transform duration-300 group-hover:scale-105" data-alt="Model posing in an elegant black evening gown." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCv3cSLGZlxbhq-nR-sJtVyEKZwvvmd_-YPG9EuSdp4YncT4MxgV9dq_2pOAoAoq7A3F5x-yqq_N9tSHUxmgfXaPWfnWbJan8_ODo-KJ-itX6uczDO0cRaBW8ivEAat1tR53Zznu-iP9uXyJc1xCk5fgvBZtaN2Xhk2lsXfkMO5RG94CjWa5JynjWwsrp-zCqpbgJlku2VZPYPAQ26KI0bsF9GmClSEkWFryHv41_P2T663AgV40rcLae_15Eww4PvBxgPEGnxqPJ24"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<button class="absolute top-2 right-2 flex h-8 w-8 items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
<span class="material-symbols-outlined text-white text-lg">close</span>
</button>
</div>
<div class="relative group overflow-hidden rounded-xl">
<img class="h-full w-full object-cover aspect-[3/4] transition-transform duration-300 group-hover:scale-105" data-alt="Close-up of a model wearing a detailed, embellished dress." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8JB3xlzhAhgCU8xBbFe6i0aj1TF0iwq67dUF6jfP8simhsYTJTK2HY7hB1JhhiK-BF1rZBrOgpie1jzDQLaGCkM_up91ycQmoQLqG9ayxbbKFQVV3VpIv4AKzakwp0QTwnGdgp0hCDnOG23YhpUW5AEgLp7mHYZdyImHwT6U-bsyuSQGIN1KBdR3bqsFcM_mmBcz6tsCgZZGsJru5ZxDpuHdcwd0wxIsLMWt55RFaVvYuu6_4XUoV9pwZ_3QfJtKSDa9B6wve0HAF"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<button class="absolute top-2 right-2 flex h-8 w-8 items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
<span class="material-symbols-outlined text-white text-lg">close</span>
</button>
</div>
<div class="relative group overflow-hidden rounded-xl">
<img class="h-full w-full object-cover aspect-[3/4] transition-transform duration-300 group-hover:scale-105" data-alt="Full shot of a model in a vibrant, patterned outfit." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBUrm3WswrrVKQNM_tPMwDmmasuVQ2h_0N186CbJkGQyGsqM9CMSrwA7ydZVtDE2oT96qyGkp1aVMiIUxedbvptPzQRV8YgLTaIQ1uVI_smeeHlc-FBOMv0TjzEKBd2MME0s3fbKawePgal4veHqygCPqzIw3dte-ZVjzFw5UhYtd2t9a9oFnkeVfuUr3ETm2xu42kkZus9OqAttWprEYlQghmnVRRJEdaxdhX54bha2M07xF_C_QPp8v3Gna1bml72bmXxwA66fVAZ"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<button class="absolute top-2 right-2 flex h-8 w-8 items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
<span class="material-symbols-outlined text-white text-lg">close</span>
</button>
</div>
<div class="relative col-span-2 group overflow-hidden rounded-xl">
<img class="h-full w-full object-cover aspect-[16/9] transition-transform duration-300 group-hover:scale-105" data-alt="Video thumbnail of a fashion show." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4lYuFpxzGggCOp16vsUv4DkWh5kl0Y9sXWSTv91Qrnf46Vx5fFWGDadGOjTSuTQWmW4hccX_ddm50es27PTJfJojT5p1jNjf4-1f5yYxy5KRoiOeRZ9jTq5b7DOLOhkRWPzlQbF3oqhm6BB-Niqimf5ljyL9Qa7HFjGssFTDG14hP1kEhemB3aIAcJsPx_BOva6605W_M60HJcKwRrh2zSed5crCDoSFvlCdFpOrc-h_22HEKZSKwML4Ghcq9hMy4IwygzsNH-FDW"/>
<div class="absolute inset-0 bg-black/40"></div>
<div class="absolute inset-0 flex items-center justify-center">
<span class="material-symbols-outlined text-white text-6xl">play_circle</span>
</div>
<button class="absolute top-2 right-2 flex h-8 w-8 items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
<span class="material-symbols-outlined text-white text-lg">close</span>
</button>
</div>
</div>
<div class="px-4 mt-4">
<button class="w-full flex h-12 items-center justify-center gap-x-2 rounded-lg bg-primary px-5 text-center">
<p class="text-base font-semibold leading-normal text-white">Book a Fitting</p>
</button>
</div>
</main>
<div class="fixed bottom-6 right-6 z-40">
<button class="flex h-14 w-14 cursor-pointer items-center justify-center overflow-hidden rounded-full bg-[#25D366] text-white shadow-lg">
<svg class="bi bi-whatsapp" fill="currentColor" height="28" viewBox="0 0 16 16" width="28" xmlns="http://www.w3.org/2000/svg">
<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
</svg>
</button>
</div>
<x-footer />
</div>

</body></html>