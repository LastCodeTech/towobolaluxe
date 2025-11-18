<x-homelayout>  
    <body class="bg-background-light dark:bg-background-dark font-display">
<div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden main-wrapper">
<!-- Sticky Top App Bar -->
 <x-header></x-header> 
<!-- Main content area relative to the body -->
<main class="relative -mt-[80px] flex-grow">
<!-- Hero Section -->
<div class="relative">
<div class="flex min-h-screen flex-col gap-6 bg-cover bg-center bg-no-repeat items-center justify-center p-6 text-center" data-alt="A high-fashion model wearing a designer outfit from Towobola Luxe in a studio setting." style='background-image: linear-gradient(rgba(26, 26, 26, 0.4) 0%, rgba(26, 26, 26, 0.7) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCTzbyA_cvtXAwqLCZ_B4aXyZiqcqVSDzmIZeRrasYqF6SmP6QTH84VoFQlCxxaFxQLi-2GldT8J7W24Rh0V-YrfiP3nQkhWmyCSuFWZS2pc2_3RbJ5rGLx7MAGKvelH5ffbLCMHm-5pszVlREzD-T8E6tiGYr67dqd6GxCvE7HiVLcDaPR8Pkqubghqdbe7atyw1oREck4MJOyoFx8GSUkRO1jUtJ3a0rTx6wgSgX_EDS1DLFWtX-RP9R2aAJJKyIceXgHgBbassam");'>
<div class="flex flex-col gap-4">
<h1 class="font-serif text-4xl font-black leading-tight tracking-wide text-stone-100 sm:text-5xl">
                            Timeless Silhouettes, Redefined
                        </h1>
<h2 class="text-sm font-normal leading-normal text-stone-200 sm:text-base">
                            Discover artistry in fabric with our exclusive collections, crafted for the modern connoisseur.
                        </h2>
</div>
<div class="flex flex-col sm:flex-row gap-4 w-full max-w-sm mt-4">
<button class="flex flex-1 min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary text-background-dark text-sm font-bold leading-normal tracking-[0.015em]">
<span class="truncate"><a href="{{route('lookBook')}}">View our Look Book</a></span>
</button>
<button class="flex flex-1 min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-transparent border border-white text-white text-sm font-bold leading-normal tracking-[0.015em]">
<span class="truncate"><a href="{{route('bookfittings')}}">Book a Fitting</a></span>
</button>
</div>
<div class="absolute bottom-8 flex flex-col items-center gap-2">
<span class="material-symbols-outlined text-white animate-bounce">expand_more</span>
</div>
</div>
</div>
</main>

<section class="px-4 py-16 md:px-8 md:py-24 text-center">
<h1 class="font-display text-4xl md:text-6xl font-bold leading-tight tracking-tight">The Art of Modern Elegance</h1>
<p class="mt-4 max-w-2xl mx-auto text-base leading-relaxed">
                    Towobola Luxe is born from a vision to blend timeless craftsmanship with contemporary design, creating pieces that empower and inspire.
                </p>
</section>
<main class="p-4 pt-3 bg-white" id='ourCollection'>
<h1 class="font-display text-4xl md:text-6xl font-bold leading-tight tracking-tight text-center py-3">our collection</h1>
<!-- Image Grid -->
<div class="grid grid-cols-2 gap-3" style="grid-template-columns: repeat(2, minmax(0, 1fr));">
<div class="flex flex-col gap-3">
<div class="w-full aspect-[3/4] bg-cover bg-center rounded-lg bg-[#E0E0E0] dark:bg-gray-700" data-alt="Model in an elegant beige abaya against a neutral background." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBA4L9orz4rx9VaSNMBBD3wVtbN2fXWiKrNwhLyvUoKKMklP-g_067ezocRZa85SHU77VAPyhEcfmk3seT0wRsF2b5ykvxbaYOcAyXcOw6RkzM8w8gwfLXPOMoWwzywL8dyZB9ehe4vZmm-nO0G-4C62OXq9ueX7Ak5KTztmbt1nxflUu2rXCrN6VfTLdKwsVHiB3L_6FjzlS4-dpUPcRPQOUWrJclbfEyAZR15vL88jaGNRb2iAx7Q_xYotoSoQ8ejZ_HDTgk035zA");'></div>
<div class="w-full aspect-[3/4] bg-cover bg-center rounded-lg bg-[#E0E0E0] dark:bg-gray-700" data-alt="Close up of a woman wearing a sparkling high-heel shoe." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA1HLTv_fVAVUMDs_y4KBXVVAfH6aFWdfOiFeGE7_sqT9_K5snOxztAeqRpSLSZeFmrFgB-RyLrBHO2bCSVqyVJC6HWAUF5OW4RYZjywlLfrLaYw2ceFemiqPO0tQFm8Id9z-iSOK3ayZrEJBy9LrBCC5A_SWV0xIq3hIFQEeuAS3UCmkDqtf0UIgyA7ZsYIZou6_5bIDs0fpfZmCl09Dvp7f3FIBK7iZzVNlmQdDmtKs_lTLsZ7O39XskpuumHkqxmngY5Mxntx1PC");'></div>
</div>
<div class="flex flex-col gap-3 mt-8">
<div class="w-full aspect-[3/4] bg-cover bg-center rounded-lg bg-[#E0E0E0] dark:bg-gray-700" data-alt="Woman in a flowing white gown posing outdoors." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBTyl0MVuwGOe-qrUyXFiPZx2bLZzNy_YOES2wa1vtaNC5JVdAnDq3X-Z_1L6fH6y0kR6M-C7NS0X8p0-d6EiL5pqjAal1w05CyEe0_TS52o5wvBBVkw4e-PbAmOS8IyOx4eMLh9zeClBzwmuJlvrcYJtpHOCM0oDxjN_CIe343gtvgqvbaNjZmxFcdQV37MP31RXPrlWCMFEGmfRF0S0X5euhECGpsYVThRl32otwEnh4ERDHvYDN-_HNiQA7iMkxEWmxjvknlmeUl");'></div>
<div class="w-full aspect-[3/4] bg-cover bg-center rounded-lg bg-[#E0E0E0] dark:bg-gray-700" data-alt="Model wearing a traditional green and gold kaftan." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAKUy-hbOoA-Jg3i38ZCKqKOwuD6paW5RFxZ31H7Nc1AsUwW-7szEPnuQ4Ps6Zv_QJH1GoKfRROeqMJQNGUCDto2xJbbPbJUhzchjt7Bb11Hx3R6JK2E8RRx_Bq4XfESoUPFhQ4USRv55MKSxZBMD22Kvw5PQt8UipV7WeTPh26eDXGCMHkbDNdEPzs8N5lsC6Ry2vEurkSkdvlz3NmHUP89DexRILaaG1B_1cct_NtLKsICUU_ZOqsfAlZblp8zdVp0P6qWJHtUuWo");'></div>
</div>
<div class="col-span-2 flex flex-col gap-3">
<div class="w-full aspect-[4/3] bg-cover bg-center rounded-lg bg-[#E0E0E0] dark:bg-gray-700" data-alt="Wide shot of a woman in a stunning bridal gown with a long veil." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB9_kTYJijjIust6V2-wRu_H_6E7O93xOmygBwbiSJ5l7wYIOBgkKYNpWXVmcYqT3t8e6lwwqXpX2u6OJurlAinIHqr8BoCNgM1phGGt8ADy6wx7euutxP4yh91J3BwcpjIuyln9GkDHf-ZaT9uJF0v3DaiXA-RrL7N_lLcDKl8YIIt-Ic0IeskXF2C8NdWiTcof6iWXnWAJfUL-05TQgaX92kbvYfH50fRAaPsvCi__2nFFjRd2jWHWhsxuT6IgzkqEQ2-MDI5yuEg");'></div>
</div>
<div class="flex flex-col gap-3">
<div class="w-full aspect-[3/4] bg-cover bg-center rounded-lg bg-[#E0E0E0] dark:bg-gray-700" data-alt="Elegant woman in a silk evening gown." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBAczGOvlwZ-2e2CIkHuaL7xWlnc35vs58ZGrugKtyC0ciiNwfP5QFxChmxnkyAgiK4juJd2R_1gySTqgNpMUbgkL51hHxLxwZKUHb4EC8lqAKJlkci6gRsVfIYA-v2nud83hu4HxD6WOrjUvpA_gRRwjbFiBk_bsRYfcW-OctxqpuSAqlVUA-aZUf9yygagV3FywJ6txjF_KpAV1gLJ0f3Zn7knBFNTVrfkfWV35WF8_BjOmRlAxoLo2Zmhp9MLOUcV2oJrORGSMp0");'></div>
</div>
<div class="flex flex-col gap-3 mt-8">
<div class="w-full aspect-[3/4] bg-cover bg-center rounded-lg bg-[#E0E0E0] dark:bg-gray-700" data-alt="Portrait of a woman wearing a stylish headscarf and abaya." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAHDVm6e-6Rmhmu0rFMqNDmec_b7U2x_XxMAWCl3ny1027L_atC3dZaeXNAWBYcsCtL7Kphud8vEFJlO07VdHVOzSWwJr5H9EcBFABFCEWJVY-Uhgcpl7EnMDoZpJqyNquRcr8xtBDAEEu_2oHaWBH1euZ2KF7EWDDdyxfhIn2a-wqhX2drrExHo4fhja4-OyTZouOHhE_lEPnKJFOJiYfKhHE2GHMEgivlMj4jjbi24Wvqkij1pagKS6fdTXnKqDXuBWO5ylIbOz5h");'></div>
</div>
</div>
</main>
<section class="px-4 py-16 md:px-8 md:py-24 bg-yellow-50">
<h2 class="font-display text-3xl md:text-4xl font-semibold text-center mb-12">Milestones</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
<div>
<p class="font-display text-4xl text-primary">2021</p>
<h3 class="font-semibold mt-2">Vogue Feature</h3>
<p class="text-sm mt-1">Recognized for innovative design in the "Ones to Watch" issue.</p>
</div>
<div>
<p class="font-display text-4xl text-primary">2022</p>
<h3 class="font-semibold mt-2">Sustainable Design Award</h3>
<p class="text-sm mt-1">Awarded for commitment to ethical sourcing and materials.</p>
</div>
<div>
<p class="font-display text-4xl text-primary">2023</p>
<h3 class="font-semibold mt-2">Paris Fashion Week Debut</h3>
<p class="text-sm mt-1">Showcased our "Ethereal" collection on the international stage.</p>
</div>
</div>
</section>
<h2 class="font-display text-3xl md:text-4xl font-semibold text-center my-5">clients review</h2>
<div class="flex flex-col gap-3 rounded-xl bg-white/50 p-4 dark:bg-black/20">
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="Portrait of Chioma Nwosu" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBK6sg4F1cUqNj1Fo-6hnJyi9X82BmZif--LP8TDgyvzkABluccWPEjO0if2OZdSITmhdVFUQhImZWVUFZciQcRTGxCXlHi8TcFoGSndigGvLTOxA26E-B7cZIdrArS842rQmBSJHveC5mT2s71boKW25kbJ6Qc76jP-ZkIzrDGkkk9KCvAvv4UyvI9xTpFmOVsjLcRbKpc7k0Jmjl9B4RqMNHLqSOpj4OPkFEcaVBxmiNhUrFVMatmlskntCmpUwLY5muGLaoNN39t");'></div>
<div class="flex-1">
<p class="text-base font-medium leading-normal text-stone-900 dark:text-white">Chioma Nwosu</p>
<p class="text-sm font-normal leading-normal text-primary/90 dark:text-primary/70">Business Executive</p>
</div>
</div>
<div class="flex gap-0.5">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="text-base font-normal leading-normal text-stone-700 dark:text-stone-200">
                        The power suit I commissioned is impeccable. It exudes confidence and has become a staple in my professional wardrobe.
                    </p>
<div class="flex gap-9 text-stone-500 dark:text-stone-400">
<button class="flex items-center gap-2">
<span class="material-symbols-outlined text-inherit text-xl">thumb_up</span>
<p class="text-inherit">25</p>
</button>
<button class="flex items-center gap-2">
<span class="material-symbols-outlined text-inherit text-xl">thumb_down</span>
</button>
</div>
</div>
</div>
<!-- Single Button CTA -->
<div class="px-4 py-2 pb-24">
<button class="flex h-12 min-w-[84px] max-w-[480px] flex-1 cursor-pointer items-center justify-center overflow-hidden rounded-lg bg-primary px-5 text-base font-bold leading-normal tracking-[0.015em] text-white">
<a href="{{route('testimonials')}}">see what other clients say</a>
</button>
</div>
<x-footer />
</x-layout>