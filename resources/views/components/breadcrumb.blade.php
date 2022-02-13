@include('includes.head')
@include('includes.header')

<body class="bg-cover " style="background-image: url('https://www.matichon.co.th/wp-content/uploads/2021/09/01-76.jpg')">
    <div class="container mx-auto   ">
        <ol class="inline-flex items-center space-x-1 md:space-x-3 ml-5 ">
            {{-- LISTA QUE INDICA PAGINA PRINCIPAL EN BREADCRUMB --}}
            <li class="inline-flex items-center">
                <a href="#" class="inline-flex items-center font-italic text-sm text-gray-200 hover:text-gray-500 ">
                    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    Pagina Principal
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd">Cursos</path>
                    </svg>
                    {{-- DEPENDE LA VIEW QUE ELIGA SE MUESTRA LA SEGUNDA SECCION DEL BREADCRUMB --}}
                    @switch($nombre)
                        @case('contacto')
                            <span class="ml-1 text-sm font-italic text-gray-100 md:ml-2 "> Contacto
                            </span>
                        @break
                        @case('servicio')
                            <span class="ml-1 text-sm font-italic text-gray-100 md:ml-2 "> Servicios
                            </span>
                        @break
                        @case('contacto')

                        @break
                        @default
                        <span class="ml-1 text-sm font-italic text-gray-100 md:ml-2 "> Cursos
                        </span>
                    @endswitch



                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-italic text-gray-100 md:ml-2 ">{{ $nombre }}
                    </span>
                </div>
            </li>
        </ol>
        {{-- //DEPENDE LA OPCION Q ELIGA EN EL MENU DE NAV SE ABRIRA LA VISTA DEL CURSO --}}
        @switch($nombre)
            @case('automotriz')
                @include('cursos.automotriz')

            @break
            @case('cableadoredes')
                @include('cursos.cableadoredes')

            @break
            @case('carpinteria')
                @include('cursos.carpinteria')

            @break
            @case('disenodigital')
                @include('cursos.disenodigital')

            @break
            @case('estructurasmetalicas')
                @include('cursos.estructurasmetalicas')

            @break
            @case('jardineria')
                @include('cursos.jardineria')

            @break
            @case('saludmental')
                @include('cursos.saludmental')

            @break
            @case('sexualidad')
                @include('cursos.sexualidad')

            @break
            @case('tecnologias')
                @include('cursos.tecnologias')

            @break
            @case('teoriamusical')
                @include('cursos.teoriamusical')

            @break
            @case('servicio')
                @include('servicios.servicio')

            @break
            @case('contacto')
                @include('contacto.contacto')

            @break

            @default
                <span class="status"></span>
        @endswitch
    </div>
    <footer class="">
        @include('includes.footer')
    </footer>
</body>

