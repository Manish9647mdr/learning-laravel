<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    <nav class="relative bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">

                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    {{-- <div class="flex shrink-0 items-center">
                        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                            alt="Your Company" class="h-8 w-auto" />
                    </div> --}}
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <x-nav-link href="/">Home</x-nav-link>
                <x-nav-link href="/about">About</x-nav-link>
                <x-nav-link href="/contact">Contact</x-nav-link>
            </div>
        </el-disclosure>
    </nav>

    <header class="bg-white border">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:bx-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                {{ $heading }}
            </h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
</body>

</html>
