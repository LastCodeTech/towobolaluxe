<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Your Measurements - Custom Tailoring</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;family=Playfair+Display:wght@700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        .font-serif {
            font-family: 'Playfair Display', serif;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#d4af35",
                        "background-light": "#f8f7f6",
                        "background-dark": "#201d12",
                        "text-light": "#111111",
                        "text-dark": "#f0f0f0",
                        "border-light": "#e4e3dc",
                        "border-dark": "#4a4638",
                        "surface-light": "#ffffff",
                        "surface-dark": "#2d2a1d",
                        "subtle-light": "#EFEFEF",
                        "subtle-dark": "#3a3629",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"],
                        "serif": ["Playfair Display", "serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                    boxShadow: {
                        'gentle': '0 4px 12px 0 rgba(0, 0, 0, 0.05)',
                    }
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
    <x-header />
    <div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">

        <main class="flex-1">
            <!-- Header Section -->
            <div class="px-6 text-center pt-4 pb-8">
                <h1 class="font-serif text-[32px] font-bold leading-tight text-text-light dark:text-text-dark">Your
                    Measurements</h1>
                <p class="text-text-light/80 dark:text-text-dark/80 text-base font-normal leading-normal pt-2">Provide
                    your details for a perfectly tailored fit.</p>
            </div>
            <!-- Style Selector Card -->
            <div class="px-6 pb-8">
                <div class="flex flex-col rounded-xl bg-surface-light dark:bg-surface-dark shadow-gentle p-6">
                    <form action="{{ route('bookfittings') }}" method="GET" class='flex items-center gap-3'>
                        <label class="flex flex-col w-full">
                            <p class="text-lg font-bold pb-3 text-text-light dark:text-text-dark">Choose Your Style</p>
                            <select name="fitting_category"
                                class="form-select flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark bg-background-light dark:bg-background-dark border-border-light dark:border-border-dark focus:border-primary focus:ring-primary h-14 placeholder:text-text-light/50 p-3 text-base font-medium leading-normal">
                                <option value="">choose style</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </label>
                        <button class="mt-10 bg-red-600 text-white p-2 rounded-md">Filter</button>
                    </form>
                    <h1 class="pt-2 text-md font-semi-bold md:text-xl capitalize">oops! cant find your preferred style
                        among the shortlisted style ? <a class='text-red-500' href="{{ route('contact') }}">Contact us
                        </a></h1>
                </div>
            </div>

            @if (!empty($forms))
                <!-- upload design inspiration -->
                <div class="px-6 pb-8">
                    <div class="flex flex-col rounded-xl bg-surface-light dark:bg-surface-dark shadow-gentle p-6">
                        <label class="flex flex-col w-full">
                            <p class="text-lg font-bold pb-3 text-text-light dark:text-text-dark">Have a particular
                                design
                                in mind ? <br /><b class='text-red-500'>Upload it here</b> </p>
                            <input type='file'>
                        </label>
                    </div>
                </div>
                <!-- upload your image while standing upright -->
                <div class="px-6 pb-8">
                    <div class="flex flex-col rounded-xl bg-surface-light dark:bg-surface-dark shadow-gentle p-6">
                        <label class="flex flex-col w-full">
                            <p class="text-lg font-bold pb-3 text-text-light dark:text-text-dark">upload a recent
                                picture of
                                you standing upright</p>
                            <input type='file'>
                        </label>
                    </div>
                </div>

                <!-- Measurement Form Section -->
                <form action="#" method="POST">
                    @csrf
                    <div class="px-6 pb-8">
                        <h3 class="text-lg font-bold leading-tight tracking-[-0.015em] pb-4">Provide Your Measurements
                        </h3>
                        <div class="flex flex-col gap-4">

                            @foreach ($forms as $form)
                                <h1>this style is {{ $form->fittingcategory_id }}</h1>
                                @foreach ($form->values as $data)
                                    <div class="relative flex w-full items-center">
                                        <span
                                            class="material-symbols-outlined absolute left-4 text-text-light/50 dark:text-text-dark/50">female</span>
                                        <input
                                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg bg-surface-light dark:bg-surface-dark border-border-light dark:border-border-dark focus:border-primary focus:ring-primary h-14 pl-12 pr-16 text-base font-medium placeholder:text-text-light/50 dark:placeholder:text-text-dark/50 text-text-light dark:text-text-dark"
                                            placeholder="{{ $data['name'] }}" type="{{ $data['type'] }}" />

                                        <span
                                            class="absolute right-4 text-sm font-semibold text-text-light/70 dark:text-text-dark/70">
                                            {{ $data['unit'] }}
                                        </span>
                                    </div>
                                @endforeach
                            @endforeach
                            <div>
                                <label class="text-xl font-semibold py-3">contact information</label><br />
                                <input
                                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg bg-surface-light dark:bg-surface-dark border-border-light dark:border-border-dark focus:border-primary focus:ring-primary h-14 pl-12 pr-16 text-base font-medium placeholder:text-text-light/50 dark:placeholder:text-text-dark/50 text-text-light dark:text-text-dark"
                                    placeholder="input your phone number" type="tel" name="contact"/>

                            </div>
                            <div>
                                <label class="text-xl font-semibold py-3">Note</label><br />
                                <input
                                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg bg-surface-light dark:bg-surface-dark border-border-light dark:border-border-dark focus:border-primary focus:ring-primary h-14 pl-12 pr-16 text-base font-medium placeholder:text-text-light/50 dark:placeholder:text-text-dark/50 text-text-light dark:text-text-dark"
                                    placeholder="have a note ? input it here" type="tel" name="note"/>

                            </div>
                        </div>
                    </div>
                </form>


        </main>
        <form action="#" method="POST">
            @csrf
            <!-- Sticky Footer CTA -->
            <footer class="sticky bottom-0 z-10 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm p-4">
                <button
                    class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-14 bg-text-light dark:bg-primary text-surface-light dark:text-text-light gap-2 text-base font-bold leading-normal tracking-[0.015em]">
                    submit
                </button>
            </footer>
        </form>
    @else
        @endif

    </div>

</body>

</html>
