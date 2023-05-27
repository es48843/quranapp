<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
        @vite(['resources/css/app.css','resources/js/app.js'])
        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>
    </head>
    <body class="bg-gray-50 dark:bg-gray-750" x-data="{ expandedSideBar: true }"
          @resize.window="
                width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
                if (width < 640) {
                    expandedSideBar = true;
                }
            "
    >

    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button data-drawer-target="sidebarNav" data-drawer-toggle="sidebarNav" aria-controls="sidebarNav" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>
                    <a href="#" class="flex ml-2">
                        <img src="https://i.ibb.co/0KWhRHt/qoranlogo4.png" class="h-8 mr-3" alt="QuranApp Logo" />
                        <span x-show="expandedSideBar"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="-z-10 -translate-x-5"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="-z-10 -translate-x-0"
                        x-transition:leave-end="-translate-x-5" 
                        class="self-center text-sm font-semibold sm:text-xl whitespace-nowrap dark:text-white">QuranApp</span>
                    </a>
                    <button @click="expandedSideBar = ! expandedSideBar"
                            class="hidden sm:flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 ml-12 duration-200"
                            :class="{ ' ml-12': expandedSideBar,  }"
                    \>
                        <a aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                            <span x-show="!expandedSideBar">
                                <x-ri-menu-2-fill />
                            </span>
                            <span x-show="expandedSideBar">
                                <x-ri-menu-3-fill />
                            </span>
                        </a>
                    </button>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ml-3">
                        <div>
                            <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    Neil Sims
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    neil.sims@flowbite.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="sidebarNav" class="fixed top-0 left-0 z-40 w-auto h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800"        >
            <ul class="space-y-2 font-medium" >
                <li>
                    <a href="#" class="flex items-center p-2 text-sm text-gray-500 dark:text-gray-300 rounded-lg hover:text-blue-600 dark:hover:text-blue-500 hover:bg-gray-100 dark:hover:bg-gray-750"
                       data-tooltip-target="tooltip-dashboard" data-tooltip-placement="right"
                    >
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                        <span   
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="-translate-x-5"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="-translate-x-0"
                        x-transition:leave-end="-translate-x-5" 
                        x-show="expandedSideBar"
                        class="ml-3 pr-4" >Dashboard</span>
                    </a>
                    <div x-show="!expandedSideBar" id="tooltip-dashboard" role="tooltip" class="hidden sm:flex absolute z-10 invisible px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-900 whitespace-nowrap">
                        Dashboard
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div class="duration-500 p-4 sm:ml-48"
        :class="{ ' sm:ml-16 z-10': !expandedSideBar ,  ' sm:ml-48 z-10': expandedSideBar}"
    >
        <div class="p-4 my-14">
{{--            <div class="grid grid-cols-3 gap-4 mb-4">--}}
{{--                <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">--}}
{{--                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>--}}
{{--                </div>--}}
{{--                <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">--}}
{{--                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>--}}
{{--                </div>--}}
{{--                <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">--}}
{{--                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">--}}
{{--                <p class="text-2xl text-gray-400 dark:text-gray-500">asd</p>--}}
{{--            </div>--}}
            <div style="direction: rtl" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-7 gap-4 mb-4">
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/001-alif.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/sfd.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                               Elif
                            </p>
                        </div>
                        
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/ba.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/seL.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Be
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/003-taa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skA.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Te
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/004-tha.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skA.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                The
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/005-jeem.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/sim.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Xhim
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/006-haa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skg.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Ha
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/007-khaa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skh.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Ha'
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/008-dal.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/smQ.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Dal
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/009-dhal.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skC.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Dhal
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/010-raa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/siy.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Ra
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/011-jaa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skQ.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Zej
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/012-seen.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/smR.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Sin
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/013-sheen.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/smZ.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Shin
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/014-saad.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skD.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Sad
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/015-dhaad.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/smj.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Dad
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/016-toa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skt.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Ta
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/017-dhaa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/ski.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Dha
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/018-ain.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skE.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Ajn
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/019-ghain.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/sin.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Gajn
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/020-faa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/smS.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Fe
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/021-qaaf.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skw.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Kaf
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/022-kaaf.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/smF.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Kef
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/023-laam.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/sku.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Lam
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/024-meem.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/sk_.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Mim
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/025-noon.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/skF.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Nun
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/027-ha.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/smk.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                He
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/026-waw.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/smm.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Vav
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
                <button data-mp3="https://www.islamcan.com/learn-arabic/arabic-alphabets/029-yaa.mp3" href="#" class="pb-[5px] letter-button overflow-hidden block w-full sm:max-w-sm h-48 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="h-full w-full flex-col justify-center items-center p-6">
                        <div class="flex justify-center items-center h-3/4 p-2">
                            <img src="https://svgur.com/i/sm_.svg" class="invert-0 dark:invert h-full">
                        </div>
                        <div class="flex justify-center items-end text-center h-1/4">
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Je
                            </p>
                        </div>
                    </div>
                    <div style="direction: ltr" class="progress-bar w-full h-1.5 bg-gray-400">
                        <div class="progress-bar__fill w-0 h-full text-center text-xs text-white bg-blue-500">
                        </div>
                    </div>
                </button>
            </div>
{{--            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">--}}
{{--                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>--}}
{{--            </div>--}}
{{--            <div class="grid grid-cols-2 gap-4">--}}
{{--                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">--}}
{{--                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>--}}
{{--                </div>--}}
{{--                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">--}}
{{--                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>--}}
{{--                </div>--}}
{{--                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">--}}
{{--                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>--}}
{{--                </div>--}}
{{--                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">--}}
{{--                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

        <div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
                <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 dark:hover:bg-gray-750 group">
                    <svg class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Home</span>
                </button>
                <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 dark:hover:bg-gray-750 group">
                    <svg class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"></path>
                    </svg>
                    <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Wallet</span>
                </button>
                <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 dark:hover:bg-gray-750 group">
                    <svg class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path>
                    </svg>
                    <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Settings</span>
                </button>
                <button id="theme-toggle" type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 dark:hover:bg-gray-750 group">
                    <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            
        </div>
        <style>
            .animate-shake {
                animation: shake 0.5s cubic-bezier(.36,.07,.19,.97) both;
                transform: translate3d(0, 0, 0);
            }

            @keyframes shake {
                10%, 90% {
                    transform: translate3d(-1px, 0, 0);
                }
                
                20%, 80% {
                    transform: translate3d(2px, 0, 0);
                }

                30%, 50%, 70% {
                    transform: translate3d(-4px, 0, 0);
                }

                40%, 60% {
                    transform: translate3d(4px, 0, 0);
                }
            }
        </style>
    <script>
        const buttons = document.querySelectorAll('.letter-button');
        let isPlaying = false;

        buttons.forEach(button => {
            const audioSrc = button.getAttribute('data-mp3');
            const audio = new Audio(audioSrc);

            button.addEventListener('click', () => {
                if (isPlaying) {
                    button.classList.add(`animate-shake`);
                    setTimeout(() => {
                        button.classList.remove(`animate-shake`);
                    }, 500);
                } else {
                    const duration = audio.duration;
                    const durationMs = Math.floor(duration * 1000);
                    const progressBarFill = button.querySelector('.progress-bar__fill');
                    audio.play();
                    progressBarFill.classList.remove('w-0');
                    progressBarFill.classList.add(`w-full`);
                    progressBarFill.style.transition = `width ${durationMs}ms linear`;

                    audio.addEventListener('ended', () => {
                        progressBarFill.style.transition = `0ms`;
                        progressBarFill.classList.remove(`w-full`);
                        progressBarFill.classList.add('w-0');
                        isPlaying = false;
                    });
                    isPlaying = true;
                }
            });
        });
    </script>
    </body>
</html>
