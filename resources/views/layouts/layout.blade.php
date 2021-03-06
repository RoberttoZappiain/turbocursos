                {{-- //ESTA ES LA VISTA MADRE, LA PRINCIPAL DE AQUI LLAMA A LAS DEMAS VISTAS Y ASI CONSECUTIVAMENTE --}}
                <!doctype html>
                <html>

                <head>
                    @include('includes.head')
                    <title>Pagina principal</title>
                </head>

                <body class="bg-cover "
                    style="background-image: url('https://www.matichon.co.th/wp-content/uploads/2021/09/01-76.jpg')">

                    <div class="">

                        <header class="">
                            @include('includes.header')
                        </header>

                        <div id="main" class="row">

                            <body class="">

                                <div class="container mx-auto">

                                    <div class="flex flex-wrap md:flex-nowrap">
                                        <div class="m-5">
                                            <a href="#"
                                                class="flex flex-col  items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 ">
                                                <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRF8lEMzOEPQbaLiJ0UbRnELY2N7LnvMer-dg&usqp=CAU"
                                                    alt="">
                                                <div class="flex flex-col justify-between p-4 leading-normal">
                                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                                                        INSCRIBETE AHORA MISMO</h5>
                                                    <p class="mb-3 font-normal text-gray-700 ">Crea tus proyectos y
                                                        recibe asesorías personalizadas de nuestros mentores para
                                                        alcanzar tu potencial.</p>
                                                    <button type="button"
                                                        class="text-white m-5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inscribirse</button>
                                                </div>


                                            </a>
                                        </div>

                                        <div class="m-5">
                                            <a href="#"
                                                class="flex  flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 ">
                                                <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                                    src="https://i1.wp.com/asimarc.org/wp-content/uploads/2017/06/icono-asesoria.png"
                                                    alt="">
                                                <div class="flex flex-col justify-between p-4 leading-normal">
                                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                                                        Asesórate con expertos</h5>
                                                    <p class="mb-3 font-normal text-gray-700 ">Crea tus proyectos y
                                                        recibe asesorías personalizadas de nuestros mentores para
                                                        alcanzar tu potencial.</p>
                                                    <button type="button"
                                                        class="text-white m-5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inscribirse</button>
                                                </div>


                                            </a>
                                        </div>

                                        <div class="m-5">
                                            <a href="#"
                                                class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 ">
                                                <iframe
                                                    class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                                    src="https://giphy.com/embed/7T2zXkkjlnBUhPaXLs" alt=""></iframe>
                                                <div class="flex flex-col justify-between p-4 leading-normal">
                                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                                                    </h5>
                                                    <p class="mb-3 font-normal text-gray-700 ">En este curso aprenderas
                                                        a manejar herramientas basicas como adobe illustrator, te
                                                        enseñaremos a utilizar <br> una tableta grafica, especificamente
                                                        de la marca VEIKK (utilizar otra tableta grafica no te limitara
                                                        a no <br> poder aprender en este curso) y las formas en las que
                                                        se puede configurar el entorno de diseño para la <br> comodida y
                                                        facilidad de usabilidad del mismo..</p>
                                                    <button type="button"
                                                        class="text-white m-5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inscribirse</button>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="m-5">
                                            <a href="#"
                                                class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 ">
                                                <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                                    src="https://i1.wp.com/asimarc.org/wp-content/uploads/2017/06/icono-asesoria.png"
                                                    alt="">
                                                <div class="flex flex-col justify-between p-4 leading-normal">
                                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">5
                                                        cursos online de Estructuras
                                                        para soldadores, herreros o quienes quieran especializarse en
                                                        este arte con nuevas técnicas de
                                                        estructuras.</h5>
                                                    <p class="mb-3 font-normal text-gray-700 ">Crea tus proyectos y
                                                        recibe asesorías personalizadas de
                                                        nuestros mentores para alcanzar tu potencial.</p>
                                                    <button type="button"
                                                        class="text-white m-5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inscribirse</button>
                                                </div>


                                            </a>
                                        </div>

                                        <div class="m-5">
                                            <a href="#"
                                                class="flex flex-col  items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 ">
                                                <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                                    src="/imagenes/jardin2.jpg" alt="">
                                                <div class="flex flex-col justify-between p-4 leading-normal">
                                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                                                        INSCRIBETE AHORA MISMO</h5>
                                                    <p class="mb-3 font-normal text-gray-700 ">Un jardín puede servir
                                                        para plantar flores de mil colores, crear espacios apropiados
                                                        para el esparcimiento y cultivar hortalizas. Por eso, desde el
                                                        principio es necesario definir la función que este va a cumplir
                                                        y delimitar claramente las áreas destinadas a cada fin.
                                                        .</p>
                                                    <button type="button"
                                                        class="text-white m-5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inscribirse</button>
                                                </div>


                                            </a>
                                        </div>
                                        <div class="m-5">
                                            <a href="#"
                                                class="flex flex-col  items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 ">
                                                <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                                    src="/imagenes/tec2.jpg" alt="">
                                                <div class="flex flex-col justify-between p-4 leading-normal">
                                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                                                        INSCRIBETE AHORA MISMO</h5>
                                                    <p class="mb-3 font-normal text-gray-700 ">Las tecnologías de la
                                                        información se refieren al uso de dispositivos tecnológicos y
                                                        redes para la manipulación de datos. las industrias vehículo
                                                        para esta disciplina son el hardware y software y su aplicación
                                                        es universal dado al avance tecnológico. En muchos casos también
                                                        se conocen como las tecnologías de la información y la
                                                        comunicación.
                                                        .</p>
                                                    <button type="button"
                                                        class="text-white m-5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inscribirse</button>
                                                </div>


                                            </a>
                                        </div>


                                        <div class="m-5">
                                            <a href="#"
                                                class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 ">
                                                <div class="flex flex-col justify-between p-4 leading-normal">
                                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                                                    </h5>
                                                    <p class="mb-3 font-normal text-gray-700 ">El tercer aspecto se
                                                        refiere al campo de los estudios musicológicos, que persiguen
                                                        una definición<br>
                                                        de los procesos y principios generales de la música, un área de
                                                        investigación que puede diferenciarse
                                                        <br>del análisis al tomar como punto de partida no la obra o la
                                                        interpretación individual, sino los materiales<br>
                                                        fundamentales que la conforman.<br><br>
                                                        Una persona especializada en teoría musical es un teórico
                                                        musical.<br>
                                                    </p>
                                                    <p>que aprenderas en est curso?</p>
                                                    <p>aprenderas a leer partituras cosa que es muy importante para un
                                                        musico el poder leer los libros<br> de musica, aprenderas a
                                                        utilizar las herramientas tecnologicas con las cuales vas a
                                                        poder solucionar<br> multiples de las muchas problematicas
                                                        referentes a lo que produccion musical se refiere.</p>
                                                    <button type="button"
                                                        class="text-white m-5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inscribirse</button>
                                                </div>


                                            </a>
                                        </div>
                                    </div>
                                    <div id="indicators-carousel" class="relative mt-5 mb-7" data-carousel="slide">

                                        <div class="overflow-hidden relative h-48 rounded-lg sm:h-64 xl:h-80 2xl:h-96">

                                            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                                                data-carousel-item="active">
                                                <img src="https://wallpaper-mania.com/wp-content/uploads/2018/09/High_resolution_wallpaper_background_ID_77701454201.jpg"
                                                    class="block absolute left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                                            </div>

                                            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10"
                                                data-carousel-item="">
                                                <img src="https://i.pinimg.com/originals/9d/58/3a/9d583a73188a8194eabae96ba677f329.jpg"
                                                    class="block absolute  left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                                            </div>

                                            <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
                                                <img src="https://wallpaper-mania.com/wp-content/uploads/2018/09/High_resolution_wallpaper_background_ID_77701454579.jpg"
                                                    class="block absolute  left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                                            </div>

                                            <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
                                                <img src="https://wallpaper-mania.com/wp-content/uploads/2018/09/High_resolution_wallpaper_background_ID_77701454530.jpg"
                                                    class="block absolute left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                                            </div>

                                            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
                                                data-carousel-item="">
                                                <img src="https://wallpaper.dog/large/988134.png"
                                                    class="block absolute left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                                            </div>
                                        </div>

                                        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                                            <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true"
                                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                            <button type="button"
                                                class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                                                aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                            <button type="button"
                                                class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                                                aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                            <button type="button"
                                                class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                                                aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                            <button type="button"
                                                class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                                                aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                                        </div>

                                        <button type="button"
                                            class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                            data-carousel-prev="">
                                            <span
                                                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                                <span class="hidden">Previous</span>
                                            </span>
                                        </button>
                                        <button type="button"
                                            class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                            data-carousel-next="">
                                            <span
                                                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                                <span class="hidden">Next</span>
                                            </span>
                                        </button>
                                    </div>

                                    <body>


                                        @yield('content')

                                </div>

                                <footer class="">
                                    @include('includes.footer')
                                </footer>

                        </div>
                </body>

                </html>
