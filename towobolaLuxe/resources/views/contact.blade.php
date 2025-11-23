<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Contact Us - Towobola Luxe</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Playfair+Display:wght@700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<style>
      .font-serif { font-family: 'Playfair Display', serif; }
      .font-sans { font-family: 'Manrope', sans-serif; }
    </style>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#C0B283",
              "background-light": "#F8F8F8",
              "background-dark": "#211121",
              "text-light": "#333333",
              "text-dark": "#EAEAEA",
              "border-light": "#E0E0E0",
              "border-dark": "#443344",
            },
            fontFamily: {
              "display": ["Manrope", "sans-serif"],
              "serif": ["Playfair Display", "serif"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
          },
        },
      }
    </script>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark font-display text-text-light dark:text-text-dark">
<div class="relative w-full overflow-x-hidden">
<!-- Sticky Top App Bar -->
<x-header />
<main>
<!-- Hero Section -->
<div class="@container">
<div class="@[480px]:p-4">
<div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 items-center justify-center p-4" data-alt="A model wearing an elegant, flowing designer gown against a minimalist backdrop" style='background-image: linear-gradient(rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuC827HorRTzIDRrdx3DexVbXdctq3sBzQVKI_W2KgHIE20rp3u6Z6vTgZkv58UdPQr_8JqFtkl99vq9Qaq6oCbGPQQ1hlGcuceWRLgj1XHGcOk1oUNqGmoWmhVAvj51u_PanjZWtn-T9QGtIrVdZeSebi0oWMOJrzOLfyGOPiRRKUMxZlnOMP__hH02WFTkQaaM_HCPTTE8yWcbCVJA7GmuPCStsO1YRRcndkQFnMmAcmogHTZhns2dwbRj9uk6VK-jBNGuMqHy0K-i");'>
<div class="flex flex-col gap-2 text-center">
<h1 class="text-white text-4xl font-serif font-bold leading-tight @[480px]:text-5xl">
                                Get in Touch
                            </h1>
<h2 class="text-white text-sm font-normal leading-normal @[480px]:text-base">
                                We'd love to hear from you. Reach out for inquiries, collaborations, or to book a fitting at our studio.
                            </h2>
</div>
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-primary text-text-light text-sm font-bold leading-normal tracking-wide @[480px]:text-base hover:opacity-90 transition-opacity">
<span class="truncate"><a href="{{route('bookfittings')}}">Book a Fitting</a></span>
</button>
</div>
</div>
</div>
<!-- Contact Info & Form Section -->
<div class="max-w-6xl mx-auto px-4 py-16 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
<!-- Left Column: Info & Socials -->
<div>
<!-- Section Header -->
<h2 class="text-2xl font-serif font-bold leading-tight tracking-wide text-text-light dark:text-text-dark pb-4 border-b border-border-light dark:border-border-dark">Studio &amp; Enquiries</h2>
<!-- Description List -->
<div class="grid grid-cols-[auto_1fr] gap-x-4 mt-6">
<div class="col-span-2 grid grid-cols-subgrid py-4">
<p class="text-primary text-sm font-semibold">Email</p>
<a class="text-sm hover:underline" href="mailto:contact@towobolaluxe.com">contact@towobolaluxe.com</a>
</div>
<div class="col-span-2 grid grid-cols-subgrid border-t border-border-light dark:border-border-dark py-4">
<p class="text-primary text-sm font-semibold">Phone</p>
<a class="text-sm hover:underline" href="tel:+1234567890">+1 (234) 567-890</a>
</div>
<div class="col-span-2 grid grid-cols-subgrid border-t border-border-light dark:border-border-dark py-4">
<p class="text-primary text-sm font-semibold">Address</p>
<p class="text-sm">123 Fashion Ave, Suite 404, New York, NY 10001</p>
</div>
</div>
<!-- Social Media Section -->
<div class="mt-12">
<h3 class="text-lg font-serif font-bold leading-tight tracking-wide text-text-light dark:text-text-dark">Follow Our Journey</h3>
<div class="flex items-center gap-5 mt-4">
<a aria-label="Instagram" class="text-text-light dark:text-text-dark hover:text-primary transition-colors" href="#">
<svg class="feather feather-instagram" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><rect height="20" rx="5" ry="5" width="20" x="2" y="2"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
</a>
<a aria-label="Pinterest" class="text-text-light dark:text-text-dark hover:text-primary transition-colors" href="#">
<svg class="feather feather-pinterest" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M12.017 1.987c-5.293 0-8.48 4.67-8.48 9.765 0 3.124 1.574 6.234 4.09 7.436.084.03.167.05.25.06.195.022.392-.047.53-.17.13-.114.19-.28.17-.448l-.4-1.7c-.03-.13.01-.26.09-.36.14-.17.34-.26.54-.23.47.07 1.05-.28 1.13-1.04.05-.51-.15-1.1-.5-1.5-.72-.81-1.05-1.85-.92-3.09.21-2.03 1.9-3.48 3.8-3.48 2.3 0 3.7 1.7 3.7 3.9 0 2.8-1.4 5.3-3.9 5.3-.85 0-1.6-.45-1.85-1.05-.18-.45.09-1.05.3-1.4.15-.3.1-.75-.09-.98-.2-.23-.5-.3-1.05-.15-.75.23-1.13 1-1.13 1.9 0 .5.09.9.23 1.3.17.45.2.8.12 1.2l-.25 1.1c-.09.38-.6 1.6-1.12 2.3-1.6 2.1-3.6 2.9-6.2 2.9-5.9 0-10.4-4.8-10.4-10.6C1.617 6.08,6.017,1,11.917,1c4.8 0 8.4 3.1 8.4 7.6 0 4.1-2.6 7.1-6.1 7.1-1.2 0-2.3-.6-2.7-1.3-.1-.2-.1-.4-.1-.6 0-.6.4-1.2.6-1.5.2-.3.3-.4.5-.7.2-.3.2-.6.1-.9-.1-.2-.3-.4-.5-.4-.2 0-.4.1-.5.2-.2.2-.4.6-.4 1 0 .2.1.4.1.6 0 .4-.1.8-.3 1.1-.3.5-.7.9-1.2 1.2-.5.3-1.1.5-1.7.5-3.1 0-5.4-2.8-5.4-6.3 0-3.3 2.5-5.9 5.7-5.9 3.1 0 5.2 2.1 5.2 5.1 0 3-1.7 5.7-4.3 5.7-1 0-1.8-.7-1.5-1.7.3-1.1.9-2.2.9-3.1 0-1.1-.5-2-1.7-2-1.4 0-2.6 1.4-2.6 3.3 0 1.2.4 2.1.9 2.7.1.1.2.2.2.4 0 .2-.1.4-.2.5-.2.2-.5.2-.7.1-.6-.2-1-.7-1.2-1.3-.3-.7-.4-1.5-.4-2.3 0-3.3 2.4-6.3 6.1-6.3 3.9 0 6.7 2.8 6.7 6.4 0 3.8-2.4 7.2-6.5 7.2z"></path></svg>
</a>
<a aria-label="Facebook" class="text-text-light dark:text-text-dark hover:text-primary transition-colors" href="#">
<svg class="feather feather-facebook" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
</a>
</div>
</div>
</div>
<!-- Right Column: Form -->
<div>
<!-- Section Header -->
<h2 class="text-2xl font-serif font-bold leading-tight tracking-wide text-text-light dark:text-text-dark pb-4 border-b border-border-light dark:border-border-dark">Send a Message</h2>
<!-- Contact Form -->
<form class="space-y-6 mt-6">
<div>
<label class="block text-sm font-medium mb-2" for="name">Name</label>
<input class="block w-full rounded border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary focus:ring-primary dark:text-text-dark transition-colors" id="name" name="name" placeholder="Your Name" type="text"/>
</div>
<div>
<label class="block text-sm font-medium mb-2" for="email">Email</label>
<input class="block w-full rounded border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary focus:ring-primary dark:text-text-dark transition-colors" id="email" name="email" placeholder="your@email.com" type="email"/>
</div>
<div>
<label class="block text-sm font-medium mb-2" for="message">Message</label>
<textarea class="block w-full rounded border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary focus:ring-primary dark:text-text-dark transition-colors" id="message" name="message" placeholder="How can we help you?" rows="5"></textarea>
</div>
<div>
<button class="w-full flex items-center justify-center rounded-lg h-12 px-5 bg-primary text-text-light text-sm font-bold leading-normal tracking-wide hover:opacity-90 transition-opacity" type="submit">
                                Send Message
                            </button>
</div>
</form>
</div>
</div>
<!-- Map Section -->
<div class="py-16 bg-background-light dark:bg-background-dark border-t border-border-light dark:border-border-dark">
<div class="max-w-6xl mx-auto px-4">
<h2 class="text-2xl font-serif font-bold leading-tight tracking-wide text-center text-text-light dark:text-text-dark">Visit Our Studio</h2>
<p class="text-center mt-2 max-w-2xl mx-auto text-sm">Fittings are by appointment only. Please contact us to schedule your visit.</p>
<div class="mt-8 h-96 w-full rounded-lg overflow-hidden">
<iframe allowfullscreen="" data-location="New York, NY" height="100%" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.610234228994!2d-73.99262078459388!3d40.7486129793279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9e31b8f5d%3A0x8d5a1e4a325add47!2sFashion%20Ave%2C%20New%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1678886455432!5m2!1sen!2sus" style="border:0;" width="100%">
</iframe>
</div>
</div>
</div>
</main>
<!-- Footer -->
<x-footer />
<!-- Floating Action Button (WhatsApp) -->
<a aria-label="Chat on WhatsApp" class="fixed bottom-6 right-6 z-40 bg-[#25D366] text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition-transform" href="#">
<svg fill="currentColor" height="28" viewbox="0 0 24 24" width="28" xmlns="http://www.w3.org/2000/svg"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.886-.001 2.269.655 4.512 1.924 6.344l-1.226 4.485 4.67-1.224zM16.46 14.354c-.229-.115-1.354-.667-1.565-.742-.211-.075-.366-.115-.52.115-.154.229-.592.742-.726.886-.133.144-.266.164-.495.05-.229-.115-.96-1.39-1.826-2.592-.675-.925-1.134-1.688-1.278-1.972-.144-.284-.015-.438.1-.553.104-.104.229-.266.344-.399.115-.133.154-.229.23-.384.075-.154.038-.284-.019-.399-.057-.115-.52-.633-.708-.867-.188-.234-.375-.194-.52-.194-.144 0-.3-.02-.454-.02s-.38.057-.592.344c-.21.284-.813.78-1.01 1.25-.198.469-.266 1.04-.266 1.25s.469 1.9 1.05 2.591c.58.692 1.63 2.1 3.96 3.655 2.33 1.554 2.85 1.592 3.8 1.592.95 0 1.9-.38 2.2-.742.3-.361.3-.675.225-.82-.075-.144-.229-.229-.458-.344z"></path></svg>
</a>
</div>
</body></html>