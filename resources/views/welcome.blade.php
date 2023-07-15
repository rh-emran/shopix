{{-- <!DOCTYPE html>
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
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopix</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <!-- fot awesome -->
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/all.css" />
    <!-- Scripts -->
    @vite([' /sass/app.scss', 'resources/js/app.js'])
    <!-- core css -->
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css" /> --}}
    {{-- <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/grt-youtube-popup.css" />
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/animate.css" />
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/anim.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/owl.theme.default.css">
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/owl.carousel.min.css">
    <!-- owl carousel -->
    <!-- light slider -->
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/lightslider.min.css">
    <!-- light slider -->
    <!-- common css -->
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/style.css" />
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/responsive.css" />
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/timer.css">
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/sticky.css">
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/review.css">

    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/offertime.css"> --}}

    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/highlight.js/9.10.0/styles/github.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.magnific-popup/1.0.0/magnific-popup.css" />
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
    
  </head>
  <!-- <style>
    
    
    .flip-clock {
        text-align: center;
        perspective: 400px;
        /* margin: 20px auto; */
    }
    
    .flip-clock *,
    .flip-clock *:before,
    .flip-clock *:after {
        box-sizing: border-box;
    }
    
    .flip-clock__piece {
        display: inline-block;
        margin: 0 5px;
    }
    
    .flip-clock__slot {
        font-size: 2vw;
    }
    
    .card {
        display: block;
        position: relative;
        padding-bottom: 0.72em;
        font-size: 4vw;
        line-height: 0.95;
    }
    
    .card__top,
    .card__bottom,
    .card__back::before,
    .card__back::after {
        display: block;
        height: 0.72em;
        color: #ccc;
        background: #222;
        padding: 0.25em 0.25em;
        border-radius: 0.15em 0.15em 0 0;
        backface-visiblity: hidden;
        transform-style: preserve-3d;
        width: 1.8em;
        transform: translateZ(0);
    }
    
    .card__bottom {
        color: #FFF;
        position: absolute;
        top: 50%;
        left: 0;
        border-top: solid 1px #000;
        background: #393939;
        border-radius: 0 0 0.15em 0.15em;
        pointer-events: none;
        overflow: hidden;
    }
    
    .card__bottom::after {
        display: block;
        margin-top: -0.72em;
    }
    
    .card__back::before,
    .card__bottom::after {
        content: attr(data-value);
    }
    
    .card__back {
        position: absolute;
        top: 0;
        height: 100%;
        left: 0%;
        pointer-events: none;
    }
    
    .card__back::before {
        position: relative;
        z-index: -1;
        overflow: hidden;
    }
    
    .flip .card__back::before {
        animation: flipTop 0.3s cubic-bezier(.37, .01, .94, .35);
        animation-fill-mode: both;
        transform-origin: center bottom;
    }
    
    .flip .card__back .card__bottom {
        transform-origin: center top;
        animation-fill-mode: both;
        animation: flipBottom 0.6s cubic-bezier(.15, .45, .28, 1);
    }
    
    @keyframes flipTop {
        0% {
            transform: rotateX(0deg);
            z-index: 2;
        }
        0%,
        99% {
            opacity: 0.99;
        }
        100% {
            transform: rotateX(-90deg);
            opacity: 0;
        }
    }
    
    @keyframes flipBottom {
        0%,
        50% {
            z-index: -1;
            transform: rotateX(90deg);
            opacity: 0;
        }
        51% {
            opacity: 0.99;
        }
        100% {
            opacity: 0.99;
            transform: rotateX(0deg);
            z-index: 5;
        }
    }
</style> -->
  <body >

   




<button onclick="topFunction()" id="ToTopBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
<div class="layout__head">

  <!-- DISTURBANCE NOTICE (DEACTIVATED) -->
  <div class="topbar-alert">
    <div class="topbar-alert__container">
      <div class="topbar-alert__body">
        <i class="topbar-alert__exclamation fa fa-exclamation-circle" aria-hidden="true"></i>
        <span class="topbar-alert__closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <a href="#">
          <p style="color: #ffffff;" class="topbar-alert__text">যেকোনো প্রয়োজনে কল করুন : 09639-112150 অথবা হোয়াট্স আপ করুন : 01826-462224</p>
        </a>
      </div>
    </div>
  </div>
  <!-- /DISTURBANCE NOTICE -->
  <div style="background: #734434;" class="topbar__container-inner " id="StickyHeader">
    <div class="topbar__inner">
     <div class="Portal_topnav" >
      <div class="offer_feed ">
        <p style="background: #734434;">শহীদ দিবস উপলক্ষে মাত্র ২০ টাকায় সারাদেশে হোম ডেলিভারি অফারটি আর মাত্র ২৪ ঘন্টা থাকবে</p>
      </div>
    <!-- <div class="nav-dropdown">
    <button class="nav-dropbtn"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;<strong>Jonathan</strong></button>
    <div class="nav-dropdown-content">
      <a href="#">My Profile</a>
      <a href="#">Agent Portal</a>
      <a href="#">Log out</a>
    </div>
  </div> -->
  <!-- <a href="javascript:void(0);" style="font-size:25px;" class="nav-icon" onclick="NavResponsive()"><strong>&#9776;</strong></a> -->
</div>     
      
    </div>
  </div>
 

</div>


</div>


<script>
  window.onscroll = function() {
    onscroll_function()
  };
  var navbar = document.getElementById("StickyHeader");
  var sticky = navbar.offsetTop;

  function onscroll_function() {
    navFunction();
    scrollFunction();
    //...what ever else you want to trigger
  }

  function navFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }

  function scrollFunction() {
    if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
      document.getElementById("ToTopBtn").style.display = "block";
    } else {
      document.getElementById("ToTopBtn").style.display = "none";
    }
  }

  function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }
  
  function NavResponsive() {
  var x = document.getElementById("PortalTopnav");
  if (x.className === "Portal_topnav") {
    x.className += " responsive";
  } else {
    x.className = "Portal_topnav";
  }
}
</script>






<div class="videobanner">
  <div class="videocontainer">
  
  <video class="videoembed" autoplay muted loop>
    <source src="http://www.adrianparr.com/download/keyboard-video.mp4" type="video/mp4">
    <source src="https://netdemo.uk/bbb/bbb.ogg" type="video/ogg">
  Your browser does not support the video tag.
  </video>
  
    <div class="videobanner-title">
    <a href="index.html"><img class="logoo" src="{{ Vite::asset('resources/assets/frontend/images/logo.png') }}" alt=""></a>  
      <h1 style="margin-bottom: 20px;">Let’s explore our product </h1>
      <!-- <a href=""  class="order-submit3">অর্ডার করুন </a> -->
    </div>
    
  </div>
  </div>






   
    <div style="background: #734434 ;color: #ffffff;" class="promo-area">
      <div class="container">
        <div class="row promo">
          <div class="col-sm-3 col-6 ">
            <div class="promo-item">
              <div class="promo-img">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                </svg>
                
              </div>
              <div  class="promo-content">
                <p><strong>GIFT VOUCHER</strong></p>
                <p>24-72 Hours</p>
              </div>
            </div>
          </div>
          <!-- col end -->
          <div class="col-sm-3 col-6">
            <div class="promo-item">
              <div class="promo-img">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                </svg>
                
              </div>
              <div class="promo-content">
                <p><strong>ONLINE SUPPORT</strong></p>
                <p>with a 30 day</p>
              </div>
            </div>
          </div>
          <!-- col end -->
          <div class="col-sm-3 col-6">
            <div class="promo-item">
              <div class="promo-img">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                </svg>
                
              </div>
              <div class="promo-content">
                <p><strong>MONEY BACK GUARANTEE</strong></p>
                <p>100% Money Back Guarantee</p>
              </div>
            </div>
          </div>
          <!-- col end -->
          <div class="col-sm-3 col-6">
            <div class="promo-item">
              <div class="promo-img">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                </svg>
                
              </div>
              <div class="promo-content">
                <p><strong>FREE SHIPPING & AMP; RETURN</strong></p>
                <p>Free Shipping on All Orders</p>
              </div>
            </div>
          </div>
          <!-- col end -->
        </div>
      </div>
    </div>
    <!-- promo end -->

   
    <!-- whychoose end -->
    <div class="offer-area">
      <div class="container">
        <div class="row">
          <!--  -->
          <!-- col 6 -->
          <div >
            <div   class="why-us-area">
                  <div class="col-xl-7">
                    <div class="why-content">
                      <h3>আমাদের থেকে কেন কিনবেন:</h3>
                      <ul>
                        <li>ডেলিভারি চার্জ সম্পুর্ন ফ্রি।</li>
                        <li>50% ছাড়ে মাত্র ১২৯৯ টাকায় পাচ্ছেন চমৎকার স্টাইলিশ 3 পিসের ব্যাকপ্যাক সেটটি।</li>
                        <li>অত্যন্ত সুন্দর ও ইউনিক 3 পিসের ব্যাকপ্যাক সেট।</li>
                        <li>ছবিতে যা দেখছেন ১০০% সেইম পাবেন।</li>
                        <li>জেলা/উপজেলা সদরে হোম ডেলিভারি সুবিধা।</li>
                        <li>প্রোডাক্ট হাতে পেয়ে পেমেন্ট করার সুবিধা।</li>
                      </ul>
                      <!-- <h3>অফারটি থাকবে মাত্র</h3> -->

                      <a href="" class="">Order Now </a>
                    </div>
                  </div>
                  <!-- col end -->
                  <div class="col-xl-5">
                    <div class="why-us-banner">
                      
                      <div class="banner-item2">
                        <a href=""><img src="{{ Vite::asset('resources/assets/frontend/images/whychoose-product.png') }}" alt="" /></a>
                      </div>
                    </div>
                  </div>
                
            </div>
            <!-- product-card end -->
           
            
          </div>
        </div>


        


     
        
      </div>
    </div>

    <div class="offer-area3">
      <div class="container">
        <div class="row t2offer">
                <div class="time2n">
                  <div class="offer2">
                    <h2 class="orftxt">GRAB THIS LIMITED TIME OFFER  </h2>
                  </div>
                  <div class="offerti" >
                    <div class="element countdown-container">
                      <div class="element days-c">
                        <p class="big-text" id="days">0</p>
                        <span>Days</span>
                      </div>
                      <div class="element hours-c">
                        <p class="big-text" id="hours">0</p>
                        <span>Hours</span>
                      </div>
                      <div class="element minutes-c">
                        <p class="big-text" id="minutes">0</p>
                        <span>Minutes</span>
                      </div>
                      <div class="element seconds-c">
                        <p class="big-text" id="seconds">0</p>
                        <span>Seconds</span>
                      </div>
                      </div>
                    </div>
          </div>
          <!-- col 6 -->
        </div>
      </div>
    </div>

    
    <!-- video part area -->
    <div class="product-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="product-gallery">
              <ul id="imageGallery">
                <li class="pdtslid" data-thumb="images/product.png" data-src="images/product1.png">
                  <img src="{{ Vite::asset('resources/assets/frontend/images/product.png') }}" />
                </li>
                <li class="pdtslid" data-thumb="images/product1.png" data-src="images/product1.png">
                  <img src="{{ Vite::asset('resources/assets/frontend/images/product1.png') }}" />
                </li>
                <li class="pdtslid" data-thumb="images/product2.png" data-src="images/product1.png">
                  <img src="{{ Vite::asset('resources/assets/frontend/images/product2.png') }}" />
                </li>
                <li class="pdtslid" data-thumb="images/product3.png" data-src="images/product1.png">
                  <img src="{{ Vite::asset('resources/assets/frontend/images/product3.png') }}" />
                </li>
                <li class="pdtslid" data-thumb="images/product.png" data-src="images/product1.png">
                  <img src="{{ Vite::asset('resources/assets/frontend/images/product.png') }}" />
                </li>
              </ul>
            </div>
          </div>
          <!-- col 6 -->
          <div class="col-sm-6">
            <div class="product-card product-top">
              <h1 class="product-name">M10 TWS Wireless Earbuds</h1>
              <p></p>
              <ul class="color-review">
                <li>Color <span class="black active" data-color-primary="#000" data-color-sec="#212121" data-pic="https://github.com/anuzbvbmaniac/Responsive-Product-Card---CSS-ONLY/blob/master/assets/img/jordan_proto.png?raw=true"></span>
                  <span class="red" data-color-primary="#7E021C" data-color-sec="#bd072d" data-pic="https://github.com/anuzbvbmaniac/Responsive-Product-Card---CSS-ONLY/blob/master/assets/img/jordan_proto_red_black.png?raw=true"></span>
                  <span class="orange" data-color-primary="#CE5B39" data-color-sec="#F18557" data-pic="https://github.com/anuzbvbmaniac/Responsive-Product-Card---CSS-ONLY/blob/master/assets/img/jordan_proto_orange_black.png?raw=true"></span></li>
                  <li class="animi" ><img src="images/line-carve.png" alt=""> 17 Sold In Last 10 Hours</li>
              </ul>
              <ul class="color-review">
               
                <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> ( 120 Reviews )</li>
              </ul>
              <h6 class="price">৳ 1,080 <span class="old-price"><del>৳ 7,050</del></span></h6>
              <p ></p>
            </div>
            <!-- product-card end -->
            <div class="  product-card my-2 product-middle">
              <ul class="product-code">
                <li><img src="images/shopping-bag.png" alt=""> Product Code: 7665556</li>
                <li ><img src="images/eye-outline.png" alt=""> 283 Customers Are Viewing This Product</li>
                
              </ul>
            </div>
            <button  class="order-submit">Order Now </button>
            <!-- product-card end -->
            <div style="margin-top: 20px;" class="product-card product-bottom">
              <ul class="product-delivery">
                <li class="delivery-date"><img src="images/shopping-bag.png" alt=""> Delivery Within 2-3 Days. 100% COD</li>
                <li><img src="images/check-right.png" alt=""> ঢাকায় ডেলিভারি খরচ  ৳60.00</li>
                <li><img src="images/check-right.png" alt=""> ঢাকার বাইরের কুরিয়ার খরচ অগ্রিম দিতে হবে  ৳130.00</li>
                <li ><img src="images/bulb.png" alt=""> বিঃদ্রঃ- ছবি এবং বর্ণনার সাথে পণ্যের মিল থাকা সত্যেও আপনি পণ্য গ্রহন করতে না চাইলে ডেলিভারি চার্জ ঢাকার মধ্যে ৬০ টাকা ডেলিভারি ম্যানকে প্রদান করে পণ্যটি ফেরত দিতে হবে।</li>
                
              </ul>
              <p style="margin-top: 10px;">রমাদান হোক উৎসবমুখর🌙 <br>
                পবিত্র মাহে রমজান উপলক্ষে সারা বাংলাদেশে পাচ্ছেন ফ্রি  হোম ডেলিভারি 🆓🚚</p>
            </div>
            <!-- product-card end -->
            
          </div>
        </div>


        


       <div style="margin-top: 40px;" class="container jani">
        <div class="checkout-product9 ab-head">
          <h5 style="font-size: 22px;" ><a style="margin-right: 10px;" href="" class=" right c2"> Description</a>
           <a href="" class=" right c1"> Customer Review</a></h5>
         </div>
        <div style="margin-top: -20px;"  class="row">
        <div class="ab-container one">
          
          <div style="margin-top: 40px;" class="ab-content">
            <p class="checkout-product8"></p>
            
            <div class="description-item">
              <p  style="margin-bottom: 10px;">Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
              <ul>
                <li> Leather Type : Cow Leather</li>
                <li>Material : Polyester</li>
                <li>Active noise cancellation : Yes</li>
                <li>Communication : True Wireless</li>
                <li>Control the volumes : Yes</li>
                <li>Sensitivity : 110dB</li>
                <li>Impedance range : up to 32 Ω</li>
                <li>Model Number : M10 Tws</li>
                <li>Headphone pad material : SILICONE</li>
                <li>Bluetooth version : 5.1</li>
                <li>Frequency response range : 20 - 20000Hz</li>
                <li>Total Harmonic Distortion : 1%</li>
                <li>Charging Method : charging case</li>
                <li>Maximum output : 15mW</li>
                <li>Codecs : Aptx HD</li>
                <li>Resistance : 4 Ω</li>
                <li>Features : Water-resistant, Amazon Alexa support,Apple Siri support, </li>
                <li>Active noise cancellation, Playback control & </li>
                <li>Google Assistant support.</li>

              </ul>
              <p style="margin-top: 10px;">Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summe!</p>
            </div>
            </div>
          </div>
        </div>
      
        <div  class="ab-container two hide">
          <p class="checkout-product7"></p>
          <div class="ab-content">
            <!-- Design: https://dribbble.com/shots/7434211-Review-Panel-UI-Design -->

            <div class="review-sec">
              <div class="global">
                <h5>Customer Review</h5>
                <span class="global-value">0.0</span>
                <div class="rating-icons">
                  <span class="one"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                  <span class="two"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                </div>
               <p style="margin-top: 10px;">( based on <span class="total-reviews">0</span> Reviews )</p> 
              </div>
              <div class="chart">
                <div class="rate-box">
                  <p class="rewiew-text">Excellent<span class="value">5</span></p>
                  <div class="progress-bar">
                    <span class="progress"></span>
                  </div>
                  <span class="count">0</span>
                </div>
                <div class="rate-box">
                  <p class="rewiew-text1">Good<span class="value">4</span></p>
                  <div class="progress-bar"><span class="progress"></span></div>
                  <span class="count">0</span>
                </div>
                <div class="rate-box">
                  <p class="rewiew-text2">Average<span class="value">3</span></p>
                  <div class="progress-bar"><span class="progress"></span></div>
                  <span class="count">0</span>
                </div>
                <div class="rate-box">
                  <p class="rewiew-text3">Below Average<span class="value">2</span></p>
                  <div class="progress-bar"><span class="progress"></span></div>
                  <span class="count">0</span>
                </div>
                <div class="rate-box">
                  <p class="rewiew-text4">Poor<span class="value">1</span></p>
                  <div class="progress-bar"><span class="progress"></span></div>
                  <span class="count">0</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
        
      </div>
    </div>
    <!-- product part end -->
    <div class="banner-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-8">
            <div class="banner-item">
              <a href=""><img src="images/advertisment-one.png" alt=""></a>
            </div>
          </div>
          <!-- col end -->
          <div class="col-sm-4 col-4">
            <div class="banner-item ">
              <a href=""><img src="images/advertisment-two.png" alt=""></a>
            </div>
            <div class="banner-item mt-4">
              <a href=""><img src="images/advertisment-three.png" alt=""></a>
            </div>
          </div>
        </div>
        <!-- row end -->
        <!--  -->
        <!-- row end -->
      </div>
    </div>
    <!-- banner section end -->
    <div  class="checkout-section">
      <div class="container">
        <div style="margin-top: -20px;" class="row">
          <div class="col-sm-12">
            <h2 class="checkout-title">বিলিং এন্ড শিপিং</h2>
            <p class="checkout-contact">যেকোনো প্রয়োজনে কল করুন : 09639-112150 অথবা হোয়াট্স আপ করুন : 01826-462224</p>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="checkout-inner">
              <form action="">
                  <div class="row">
                    <!-- <p class="checkout-product5" style="margin-bottom: 20px;">Have a coupon? <span> <a href="" style="color: #4E6076;">Click here to enter your code</a> </span> </p> -->

                  <div class="col-sm-7">
                    <p class="checkout-product5" style="margin-bottom: 20px;">Have a coupon? <span> <a href="" style="color: #4E6076;">Click here to enter your code</a> </span> </p>

                    <div class="checkout-item2">
                      
                      <h5 style="margin-bottom: 20px;color: #777777;">Billing & Shipping</h5>
                        <div class="form-group">
                          <label for="name">আপনার নাম <span>*</span></label>
                          <input type="text" id="name" name="name"  class="form-control">
                        </div>
                        <!-- form-group end -->
                        <div style="margin-top: 10px;" class="form-group">
                          <label for="district">জেলা  <span>*</span></label>
                        
                          <select type="text" name="display"  class="form-control select2">
                            <option value="">Dhaka</option>
                            <option value="">Rangpur</option>
                            <option value="">Dinajpur</option>
                          </select>


                        </div>
                        <!-- form-group end -->
                        <div style="margin-top: 10px;" class="form-group">
                          <label for="mobile">মোবাইল নাম্বার <span>*</span></label>
                          <input type="text" id="mobile" name="mobile" placeholder="১১ ডিজিটের নাম্বারটি সঠিকভাবে লিখুন" class="form-control">
                        </div>
                        <!-- form-group end -->
                        <div style="margin-top: 10px;" class="form-group">
                          <label for="address">ডেলিভারি ঠিকানা <span>*</span></label>
                          <textarea id="address" placeholder="আপনার সম্পূর্ণ ডেলিভারি ঠিকানা দিন" name="address" cols="8" rows="6" class="form-control"></textarea>
                        </div>
                        <!-- form-group end -->
                    </div>
                  </div>
                  <!-- col end -->
                  <div class="col-sm-5">
                    <div class="checkout-item m_margin">
                      <h2 style="font-size: 1.3em;font-weight: 600;color: #555555;">Your Order</h2>
                      <button id="btnOpenForm" class=" order-submit2">Order Now </button>
                      <div class="checkout-product3" style="display: flex; justify-content: space-between; ">
                        <div style="flex: 1;font-weight: 600;color:#777777;">Product</div>
                        
                        <div style="font-weight: 600;color:#777777;">Subtotal</div>
                      </div>

                      <div class="checkout-product" style="display: flex; justify-content: space-between; ">
                        <div style="flex: 1;font-size: .9em;color:#777777;">3 in 1 waterproof Backpack set- Black</div>
                        
                        <div >
                          <p style="font-size: .9em;font-weight: 600;">2,598.00</p>
                        </div>
                      </div>
                       
                      <div class="checkout-product" style="display: flex; justify-content: space-between; ">
                        <div style="flex: 1;font-size: .9em;color:#777777;">Subtotal</div>
                        
                        <div >
                          <p style="font-size: .9em;font-weight: 600;">2,598.00</p>
                        </div>
                      </div>
                      <div class="checkout-product" style="display: flex; justify-content: space-between; ">
                        <div style="flex: 1;font-size: .9em;color:#777777;">Shipping</div>
                        
                        <div >
                          <p style="font-size: .9em;">Free Shipping</p>
                        </div>
                      </div>

                      <div class="checkout-product3" style="display: flex; justify-content: space-between; ">
                        <div style="flex: 1;font-size: .9em;color:#777777;">Total</div>
                        
                        <div >
                          <p style="font-size: .9em;font-weight: 600;">2,598.00</p>
                        </div>
                      </div>

                        
                        

                        <h3 style="font-size: .9em;font-weight: 600;margin-top: 20px;">Cash On Delivery</h3>
                        <p style="font-size: 14px;margin-top: 10px;color:#777777;">Pay With Cash Upon Delivery.</p>
                        

                        
                    </div>
                  </div>
                  <!-- col end -->
                  <div class="form-popup-bg">
                    <div class="form-container">
                      <button id="btnCloseForm" class="close-button">X</button>
                      <div style="text-align: center;">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="sucess w-5 h-5">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg> -->
                        <img style="width: 30%;" src="images/Prize cup.png" alt="">
                        
                      </div>
                      <p style="margin-top: 20px; color: white;">Your Order id : 20005</p>
                      
                      <h6 class="pop-up-h" style="margin-top: 20px;color: white">Your Order Placed Successfully!</h6>

                      <p class="pop-up-p" style="margin-top: 20px;color: white">আপনার অরডারটি সফল ভাবে সম্পন্ন হয়েছে। আমাদের কাস্টমার কেয়ার প্রতিনিধি শীঘ্রই আপনাকে ফোন করে অর্ডার কনফার্ম করে দিবে।</p>
                      
                    </div>
                  </div>
                  
                  </div>
              </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->

    <footer>
      <div style="margin-top: -20px;" class="container">
        <div class="row">
          <div class="col-sm-8 col-12">
            <div class="footer-left">
              
              <p>Copyright © 2023 <span><a style="color: white;margin-right: 10px;" href="#">Shopix.com.bd</a></span>  All rights reserved. <span><a style="color: white; margin-right: 10px;"  href="#">Privacy Policy</a></span> <span><a style="color: white;margin-right: 10px;"  href="#">Terms and Condition</a></span>  <span><a style="color: white;margin-right: 10px;"  href="#">Return & Refund Policy</a></span> </p>
            </div>
          </div>
          <!-- col end -->
          <div class="col-sm-4 col-12">
            <div style="text-align: right;" class="footer-right">
              <ul>
                <li><img style="height: 25px;margin-right: 10px;" src="images/Payment method icon.png" alt=""></li>
                <li><img style="height: 25px;margin-right: 10px;" src="images/Payment method icon2.png" alt=""></li>
                <li><img style="height: 25px;margin-right: 10px;" src="images/Payment method icon3.png" alt=""></li>
                <li><img style="height: 25px;margin-right: 10px;" src="images/Payment method icon4.png" alt=""></li>
                <li><img style="height: 25px;margin-right: 10px;" src="images/Payment method icon6.png" alt=""></li>
                <li><img style="height: 25px;margin-right: 10px;" src="images/Payment method icon7.png" alt=""></li>
                <li><img style="height: 25px;margin-right: 10px;" src="images/Payment method icon8.png" alt=""></li>
               
              </ul>
              
            </div>
          </div>
          <!-- col end -->
        </div>
      </div>
    </footer>

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/grt-youtube-popup.js"></script>
    <script src="js/jquery.syotimer.min.js"></script>
    <script src="js/lightslider.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/navh.js"></script>
    <script src="js/time.js"></script>
    <script src="js/review.js"></script>
    <!-- bootstrap js -->






    <script>
      $(".youtube-link").grtyoutube({
        autoPlay: true,
        theme: "dark",
      });
    </script>
<!-- <script>
  var countDownDate = new Date("2023-09-30T00:00:00Z").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("offer_timer").innerHTML = days + " : " + hours + " : " + minutes + " : " + seconds + " ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("offer_timer").innerHTML = "EXPIRED";
  }
}, 1000);

</script> -->

    <!-- <script>
      $('#offer_timer').syotimer({
        date: new Date("2023-07-01T18:00:00.000+02:00"),
      });
    </script> -->
    <script>
      $(document).ready(function() {
        $('#imageGallery').lightSlider({
            gallery:true,
            item:1,
            loop:true,
            thumbItem:5,
            slideMargin:0,
            enableDrag: false,
            currentPagerPosition:'left',
            onSliderLoad: function(el) {
                el.lightGallery({
                    selector: '#imageGallery .lslide'
                });
            }   
        });  
      });
    </script>
     
  </body>
</html>