<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Towobola Luxe Admin Login</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#333333",
                        "background-light": "#F8F8F8",
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
            font-variation-settings:
            'FILL' 0,
            'wght' 300,
            'GRAD' 0,
            'opsz' 24
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="font-display">
<div class="relative flex h-auto min-h-screen w-full flex-col bg-background-light dark:bg-background-dark group/design-root overflow-x-hidden">
<div class="flex min-h-screen w-full flex-col items-center justify-center p-6 sm:p-8">
<div class="flex w-full max-w-sm flex-col items-center">
<div class="mb-8">
<h2 class="text-2xl font-bold text-black dark:text-white">Towobola Luxe</h2>
</div>
<h1 class="text-black dark:text-white tracking-light text-[28px] font-bold leading-tight text-center pb-2 pt-4">Admin Access</h1>
<p class="text-sm text-gray-500 dark:text-gray-400 pb-8 text-center">Welcome back, please enter your details.</p>
@if(session()->has('message'))
<h1 class="text-base text-red-600">{{session('message')}}</h1>
@endif
<div class="w-full space-y-4">
    <form action="{{route('loginProcess')}}" method='POST'>
        @csrf
<label class="flex flex-col w-full">
<p class="text-sm font-medium leading-normal pb-2 text-black dark:text-white">Email</p>
<div class="flex w-full flex-1 items-stretch rounded-lg">
<div class="text-gray-500 dark:text-[#93a5c8] flex border border-gray-300 dark:border-[#344465] bg-white dark:bg-[#1a2232] items-center justify-center pl-[15px] rounded-l-lg border-r-0">
<span class="material-symbols-outlined text-base">person</span>
</div>
<input name='email' class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-black dark:text-white focus:outline-0 focus:ring-0 border border-gray-300 dark:border-[#344465] bg-white dark:bg-[#1a2232] focus:border-primary/50 dark:focus:border-primary h-12 placeholder:text-gray-400 dark:placeholder:text-[#93a5c8] p-[15px] rounded-l-none border-l-0 pr-4 text-base font-normal leading-normal" placeholder="Enter your username or email" value=""/>
@error('email')
<h1 class="text-base text-white">{{$message}}</h1>
@enderror
</div>
</label>
<label class="flex flex-col w-full">
<p class="text-sm font-medium leading-normal pb-2 text-black dark:text-white">Password</p>
<div class="flex w-full flex-1 items-stretch rounded-lg">
<div class="text-gray-500 dark:text-[#93a5c8] flex border border-gray-300 dark:border-[#344465] bg-white dark:bg-[#1a2232] items-center justify-center pl-[15px] rounded-l-lg border-r-0">
<span class="material-symbols-outlined text-base">lock</span>
</div>
<input name='password' class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-black dark:text-white focus:outline-0 focus:ring-0 border border-gray-300 dark:border-[#344465] bg-white dark:bg-[#1a2232] focus:border-primary/50 dark:focus:border-primary h-12 placeholder:text-gray-400 dark:placeholder:text-[#93a5c8] p-[15px] rounded-l-none border-l-0 pr-4 text-base font-normal leading-normal" placeholder="Enter your password" type="password" value=""/>
@error('password')
<h1 class="text-base text-white">{{$message}}</h1>
@enderror
</div>
</div>
</label>
<div class="flex w-full py-6">
    <input type='submit' value="Login" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 flex-1 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-opacity-90 transition-colors">
</div>
    </form>
</div>


<div class="text-center">
<a class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-primary/80 transition-colors" href="#">Forgot Password?</a>
</div>

</div>
</div>
</div>
</body></html>