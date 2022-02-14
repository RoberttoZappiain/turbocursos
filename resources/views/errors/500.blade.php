<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.bundle.js"></script>
    <title>500 Error interno del servidor</title>
</head>

<body>
    <div class="">
        <div class=" flex items-center justify-center">
            <div class=" shadow overflow-hidden sm:rounded-lg pb-8">
                <div class="border-t border-gray-200 text-center pt-8">
                    <div class="flex justify-center">
                        <svg class="w-24 h-24" fill="none" stroke="#D3AEFD" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>

                    <h1 class="text-9xl font-bold text-purple-300">500</h1>
                    <h5 class="text-3xl font-italic py-8 font-sans text-gray-400">ERROR INTERNO DEL SERVIDOR</h5>
                    <p class="text-md  px-12 font-italic font-sans leading-relaxed text-justify text-gray-400">Oops! La
                        pagina que intentas cargar esta teniendo problemas, asegurate de ingresar la direccion
                        correctamente e intentalo de nuevo. </p>
                    <p class="text-md  px-12 font-italic font-sans leading-relaxed text-justify text-gray-400">Intenta
                        regresar al inicio de nuestra pagina haciendo click en el siguiente enlace <a
                            class="text-blue-500" href="">volver al inicio</a> y sigue manteniendote actualizado.</p>
                    <button
                        class="bg-gradient-to-r m-5 from-purple-400 to-blue-500 hover:from-blue-500 hover:to-purple-500 text-white font-semibold px-6 py-3 rounded-md mr-6">
                        Contactanos
                    </button>
                    <a href="{{ URL::route('contacto') }}" class="text-sm px-12 font-italic font-sans leading-relaxed text-center text-gray-400"> Haz click
                        aqui para informarnos de un problema </a>
                </div>
            </div>
        </div>
    </div>
</body>
