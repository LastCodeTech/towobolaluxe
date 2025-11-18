<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Book an Appointment - Towobola Luxe</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&amp;family=Playfair+Display:wght@700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<style>
      .font-serif-display {
        font-family: 'Playfair Display', serif;
      }
    </style>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#C0A172",
              "background-light": "#FDFCF9",
              "background-dark": "#211121",
              "text-light": "#252525",
              "text-dark": "#E0E0E0",
              "border-light": "#E0E0E0",
              "border-dark": "#4a3a4a",
              "input-bg-light": "#FFFFFF",
              "input-bg-dark": "#312131",
              "placeholder-light": "#A0A0A0",
              "placeholder-dark": "#8a7a8a",
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
<div class="relative flex min-h-screen w-full flex-col">
<x-header></x-header>
<main class="flex-grow pb-28">
<!-- Header Image -->
<div class="@container">
<div class="@[480px]:px-4 @[480px]:py-3 p-0">
<div class="w-full bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden min-h-[260px]" data-alt="Close-up of a luxurious bespoke garment with intricate stitching" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDSAOofqCTqind154USZciAhrYjH9Sc4MB_YRjIRQ4F_diZVsBj8zis6-onRbkYq9-5O9Kmn3Lw05rFFI9X8rzTOBeCVdDVgjFYUqD_RZ1vU2D3fC8ngZFurckDoYRXecpe-OXjuKtP7CuhU92ltEc1GvyMHono21MyBRLgIDLwwnf0_ND9WUGbtGYmNKIVj4bhddJhb35C_7d66Gfwylor-3z5aAkzV5GD932zpCIW2i2LcFkiVBYLjOowpP-V8azLzLOMIZW-1hqE");'></div>
</div>
</div>
<!-- Headline and Body Text -->
<div class="px-4 pt-6 pb-3">
<h1 class="text-text-light dark:text-white font-serif-display text-[32px] font-bold leading-tight tracking-tight">Book a Private Fitting</h1>
<p class="text-text-light dark:text-text-dark pt-2 text-base font-normal leading-normal">Experience our collection firsthand with a personalized appointment tailored to your unique needs and style.</p>
</div>
<!-- Form Fields -->
<form class="space-y-4 px-4 py-3">
<!-- Full Name -->
<div class="flex max-w-full flex-wrap items-end gap-4 p-0">
<label class="flex w-full flex-col">
<p class="pb-2 text-sm font-medium leading-normal text-text-light dark:text-text-dark">Full Name</p>
<input class="form-input flex h-12 w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg border border-border-light bg-input-bg-light p-3 text-base font-normal leading-normal text-text-light placeholder:text-placeholder-light focus:border-primary focus:outline-0 focus:ring-2 focus:ring-primary/20 dark:border-border-dark dark:bg-input-bg-dark dark:text-white dark:placeholder:text-placeholder-dark dark:focus:border-primary" placeholder="Enter your full name" type="text"/>
</label>
</div>
<!-- Email -->
<div class="flex max-w-full flex-wrap items-end gap-4 p-0">
<label class="flex w-full flex-col">
<p class="pb-2 text-sm font-medium leading-normal text-text-light dark:text-text-dark">Email Address</p>
<input class="form-input flex h-12 w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg border border-border-light bg-input-bg-light p-3 text-base font-normal leading-normal text-text-light placeholder:text-placeholder-light focus:border-primary focus:outline-0 focus:ring-2 focus:ring-primary/20 dark:border-border-dark dark:bg-input-bg-dark dark:text-white dark:placeholder:text-placeholder-dark dark:focus:border-primary" placeholder="you@example.com" type="email"/>
</label>
</div>
<!-- Phone Number -->
<div class="flex max-w-full flex-wrap items-end gap-4 p-0">
<label class="flex w-full flex-col">
<p class="pb-2 text-sm font-medium leading-normal text-text-light dark:text-text-dark">Phone Number</p>
<input class="form-input flex h-12 w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg border border-border-light bg-input-bg-light p-3 text-base font-normal leading-normal text-text-light placeholder:text-placeholder-light focus:border-primary focus:outline-0 focus:ring-2 focus:ring-primary/20 dark:border-border-dark dark:bg-input-bg-dark dark:text-white dark:placeholder:text-placeholder-dark dark:focus:border-primary" placeholder="Enter your phone number" type="tel"/>
</label>
</div>
<!-- Service Type Dropdown -->
<div class="flex max-w-full flex-wrap items-end gap-4 p-0">
<label class="flex w-full flex-col">
<p class="pb-2 text-sm font-medium leading-normal text-text-light dark:text-text-dark">Service Type</p>
<div class="relative w-full">
<select class="form-select flex h-12 w-full appearance-none min-w-0 flex-1 resize-none overflow-hidden rounded-lg border border-border-light bg-input-bg-light p-3 text-base font-normal leading-normal text-text-light placeholder:text-placeholder-light focus:border-primary focus:outline-0 focus:ring-2 focus:ring-primary/20 dark:border-border-dark dark:bg-input-bg-dark dark:text-white dark:placeholder:text-placeholder-dark dark:focus:border-primary">
<option>Bespoke Fitting</option>
<option>Collection Viewing</option>
<option>General Inquiry</option>
</select>
<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-text-light dark:text-text-dark">
<span class="material-symbols-outlined">expand_more</span>
</div>
</div>
</label>
</div>
<!-- Date & Time Pickers -->
<div class="grid grid-cols-2 gap-4">
<label class="flex w-full flex-col">
<p class="pb-2 text-sm font-medium leading-normal text-text-light dark:text-text-dark">Preferred Date</p>
<input class="form-input flex h-12 w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg border border-border-light bg-input-bg-light p-3 text-base font-normal leading-normal text-text-light placeholder:text-placeholder-light focus:border-primary focus:outline-0 focus:ring-2 focus:ring-primary/20 dark:border-border-dark dark:bg-input-bg-dark dark:text-white dark:placeholder:text-placeholder-dark dark:focus:border-primary" type="date"/>
</label>
<label class="flex w-full flex-col">
<p class="pb-2 text-sm font-medium leading-normal text-text-light dark:text-text-dark">Time Slot</p>
<input class="form-input flex h-12 w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg border border-border-light bg-input-bg-light p-3 text-base font-normal leading-normal text-text-light placeholder:text-placeholder-light focus:border-primary focus:outline-0 focus:ring-2 focus:ring-primary/20 dark:border-border-dark dark:bg-input-bg-dark dark:text-white dark:placeholder:text-placeholder-dark dark:focus:border-primary" type="time"/>
</label>
</div>
<!-- Text Area -->
<div class="flex max-w-full flex-wrap items-end gap-4 p-0">
<label class="flex w-full flex-col">
<p class="pb-2 text-sm font-medium leading-normal text-text-light dark:text-text-dark">Message (Optional)</p>
<textarea class="form-textarea flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg border border-border-light bg-input-bg-light p-3 text-base font-normal leading-normal text-text-light placeholder:text-placeholder-light focus:border-primary focus:outline-0 focus:ring-2 focus:ring-primary/20 dark:border-border-dark dark:bg-input-bg-dark dark:text-white dark:placeholder:text-placeholder-dark dark:focus:border-primary" placeholder="Any specific requirements or questions?" rows="4"></textarea>
</label>
</div>
<!-- CTA Button -->
<div class="pt-4">
<button class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-14 bg-primary text-white gap-2 px-5 text-base font-bold leading-normal tracking-wide">
                        Schedule Appointment
                    </button>
</div>
</form>
</main>
<!-- Floating Action Button -->
<button class="fixed bottom-6 right-6 flex h-14 w-14 cursor-pointer items-center justify-center overflow-hidden rounded-full bg-[#25D366] text-white shadow-lg">
<svg fill="currentColor" height="28" viewbox="0 0 24 24" width="28" xmlns="http://www.w3.org/2000/svg"><path d="M19.05 4.94C17.22 3.12 14.72 2 12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 9.28 20.88 6.78 19.05 4.94ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20ZM16.5 13.5C16.5 13.91 16.17 14.24 15.76 14.24C15.53 14.24 15.31 14.15 15.15 14L12 11.83L8.85 14C8.52 14.21 8.08 14.12 7.87 13.79C7.71 13.53 7.76 13.2 7.97 12.98L11.12 9.83C11.33 9.62 11.66 9.53 11.96 9.61C12.04 9.63 12.11 9.67 12.17 9.73L16.29 12.55C16.43 12.65 16.5 12.82 16.5 13V13.5Z" fill="none"></path><path d="M16.75 13.96c-.25-.13-1.47-.72-1.69-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.78.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.25-1.49-1.4-1.74-.14-.25-.02-.38.12-.51.12-.11.25-.29.38-.43.12-.14.17-.25.25-.42.08-.17.04-.31-.02-.43-.06-.13-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.42-.14,0-.3,0-.46,0-.17,0-.43.06-.66.31-.23.25-.87.85-1.07,2.02-.2,1.17.2,2.34.45,2.7.25.36,1.02,1.64,2.49,2.89,1.8,1.5,2.4,1.8,3.2,2.2.8.3,1.5.3,2.1.2.6-.1,1.5-.6,1.7-.1,1.2-.2.6-1.1.5-1.2ZM12,2C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10S17.5,2,12,2Zm0,18c-4.4,0-8-3.6-8-8s3.6-8,8-8,8,3.6,8,8S16.4,20,12,20Z"></path></svg>
</button>
</div>
<x-footer />
</body></html>