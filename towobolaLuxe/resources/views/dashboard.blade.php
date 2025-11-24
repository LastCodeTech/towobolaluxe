<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Towobola Luxe - Admin Collections</title>
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
                        "neutral-light": "#F3F4F6",
                        "neutral-dark": "#1F2937",
                        "border-light": "#E5E7EB",
                        "border-dark": "#374151"
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
  </head>
<body class="bg-background-light dark:bg-background-dark font-body text-text-light dark:text-text-dark">
<div class="relative w-full overflow-x-hidden min-h-screen">
<header class="sticky top-0 z-50 flex h-16 items-center justify-between border-b border-border-light dark:border-border-dark bg-background-light/80 px-4 backdrop-blur-sm dark:bg-background-dark/80">
<h1 class="font-display text-2xl font-bold text-text-light dark:text-text-dark">Admin Panel</h1>
<div class="flex items-center gap-2">
<button class="flex h-10 w-10 items-center justify-center rounded-full bg-neutral-light dark:bg-neutral-dark">
<span class="material-symbols-outlined text-text-light dark:text-text-dark">person</span>
</button>
</div>
</header>
<main class="p-4 md:p-6 space-y-8">
<div class="max-w-4xl mx-auto">
<h2 class="text-3xl font-display font-bold mb-6">Manage Collections</h2>
@if(session()->has('message'))
<h1 class="text-md text-white">{{session('message')}}</h1>
@endif
<div class="bg-white dark:bg-neutral-dark p-6 rounded-lg shadow-sm border border-border-light dark:border-border-dark">
<div class='flex justify-between mb-3 items-center'>
    <h3 class="text-xl font-semibold mb-4 font-display">Add New Collection</h3>
    <form method='POST' action="{{route('logout')}}">
        @csrf
        <button class='text-white capitalize bg-red-400 rounded-md text-sm shadow-sm py-2 px-3'>logout</button>
    </form>
</div>
<form class="space-y-4">
<div>
<label class="block text-sm font-medium text-text-light/80 dark:text-text-dark/80" for="collection-name">Collection Name</label>
<input class="mt-1 block w-full rounded-md border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary focus:ring-primary" id="collection-name" name="collection-name" placeholder="e.g., Spring/Summer 2024" type="text"/>
</div>
<div>
<label class="block text-sm font-medium text-text-light/80 dark:text-text-dark/80" for="collection-description">Description</label>
<textarea class="mt-1 block w-full rounded-md border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary focus:ring-primary" id="collection-description" name="collection-description" placeholder="A brief description of the collection..." rows="3"></textarea>
</div>
<div>
<label class="block text-sm font-medium text-text-light/80 dark:text-text-dark/80" for="collection-images">Images/Videos</label>
<div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-border-light dark:border-border-dark px-6 pt-5 pb-6">
<div class="space-y-1 text-center">
<span class="material-symbols-outlined text-4xl text-text-light/50 dark:text-text-dark/50 mx-auto">cloud_upload</span>
<div class="flex text-sm text-text-light/60 dark:text-text-dark/60">
<label class="relative cursor-pointer rounded-md bg-white dark:bg-neutral-dark font-medium text-primary focus-within:outline-none focus-within:ring-2 focus-within:ring-primary focus-within:ring-offset-2 hover:text-primary/80" for="file-upload">
<span>Upload a file</span>
<input class="sr-only" id="file-upload" multiple="" name="file-upload" type="file"/>
</label>
<p class="pl-1">or drag and drop</p>
</div>
<p class="text-xs text-text-light/50 dark:text-text-dark/50">PNG, JPG, GIF, MP4 up to 10MB</p>
</div>
</div>
</div>
<div class="flex justify-between items-center">
<div>
<label class="block text-sm font-medium text-text-light/80 dark:text-text-dark/80" for="collection-categories">Categories</label>
<select class='text-white bg-slate-700 text-sm capitalize font-bold border-1 rounded-md'>
    <option value="">choose Category</option>
    {{-- <option value="">abaya</option>
    <option value="">gown</option>
    <option value="">hijab</option> --}}
    @foreach($categories as $category)
    <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
</select></div>
<button class='text-2xl font-bold text-white bg-red-400 py-2 px-3 rounded-md'><a href='{{route('addcategory')}}'>+</a></button>
</div>
<div class="flex justify-between gap-3 pt-2">
<button class="inline-flex items-center justify-center rounded-md border border-transparent bg-primary px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2" type="submit">
                                Add Collection
                            </button>
<button class='bg-red-400 rounded-md text-sm shadow-sm py-2 px-3'><a href="{{route('testimonialsmng')}}" class='text-white capitalize'>manage testimonials</a></button>
</div>

</form>
</div>
<div class="mt-12">
<h3 class="text-xl font-semibold mb-4 font-display">Existing Collections</h3>
<div class="space-y-4">
<div class="flex items-center justify-between bg-white dark:bg-neutral-dark p-4 rounded-lg shadow-sm border border-border-light dark:border-border-dark">
<div>
<p class="font-semibold">Autumn/Winter 2023</p>
<p class="text-sm text-text-light/70 dark:text-text-dark/70">A collection inspired by earthy tones.</p>
</div>
<div class="flex items-center space-x-2">
<button class="flex h-9 w-9 items-center justify-center rounded-md border border-border-light dark:border-border-dark hover:bg-neutral-light dark:hover:bg-gray-700">
<span class="material-symbols-outlined text-lg"><a href='{{route('editcollection')}}'>edit</a></span>
</button>
<button class="flex h-9 w-9 items-center justify-center rounded-md border border-border-light dark:border-border-dark hover:bg-red-50 dark:hover:bg-red-900/30">
<span class="material-symbols-outlined text-lg text-red-600 dark:text-red-500">delete</span>
</button>
</div>
</div>
<div class="flex items-center justify-between bg-white dark:bg-neutral-dark p-4 rounded-lg shadow-sm border border-border-light dark:border-border-dark">
<div>
<p class="font-semibold">Bridal Couture '23</p>
<p class="text-sm text-text-light/70 dark:text-text-dark/70">Exquisite gowns for the modern bride.</p>
</div>
<div class="flex items-center space-x-2">
<button class="flex h-9 w-9 items-center justify-center rounded-md border border-border-light dark:border-border-dark hover:bg-neutral-light dark:hover:bg-gray-700">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="flex h-9 w-9 items-center justify-center rounded-md border border-border-light dark:border-border-dark hover:bg-red-50 dark:hover:bg-red-900/30">
<span class="material-symbols-outlined text-lg text-red-600 dark:text-red-500">delete</span>
</button>
</div>
</div>
<div class="flex items-center justify-between bg-white dark:bg-neutral-dark p-4 rounded-lg shadow-sm border border-border-light dark:border-border-dark">
<div>
<p class="font-semibold">Resort Wear</p>
<p class="text-sm text-text-light/70 dark:text-text-dark/70">Light and airy pieces for your next getaway.</p>
</div>
<div class="flex items-center space-x-2">
<button class="flex h-9 w-9 items-center justify-center rounded-md border border-border-light dark:border-border-dark hover:bg-neutral-light dark:hover:bg-gray-700">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="flex h-9 w-9 items-center justify-center rounded-md border border-border-light dark:border-border-dark hover:bg-red-50 dark:hover:bg-red-900/30">
<span class="material-symbols-outlined text-lg text-red-600 dark:text-red-500">delete</span>
</button>
</div>
</div>
</div>
</div>
</div>
</main>
</div>

</body></html>