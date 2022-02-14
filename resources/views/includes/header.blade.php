{{-- NABVAR CON LOGO, TEXTO CON LINK A HOME, SEARCH BAR, LINKS A VIEWS --}}
{{-- NABVAR CON LOGO, TEXTO CON LINK A HOME --}}


<nav class=" border-gray-200 px-2 sm:px-4 py-2.5 rounded ">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/" class="flex">
            <span class="m-5 self-center text-lg font-semibold whitespace-nowrap text-white">Turbo Cursos</span>
        </a>
        <div class="flex md:order-2">

            <button data-collapse-toggle="mobile-menu-4" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="mobile-menu-4" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        {{-- LINKS A VIEWS --}}
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-4">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="/"
                        class="block py-2 pr-4 pl-3 text-white bg-blue-900 rounded md:bg-transparent md:text-blue-900 md:p-0"
                        aria-current="page">Pagina Principal</a>
                </li>
                <li>
                    <!-- Dropdown Buttom -->
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-100 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto ">Cursos
                        <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow ">
                        <ul class="py-1" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ URL::route('saludmental') }}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Salud Mental</a>
                            </li>
                            <li>
                                <a href="{{ URL::route('sexualidad') }}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">Sexualidad</a>
                            </li>
                            <li>
                                <a href="{{ URL::route('jardineria') }}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">Jardineria</a>
                            </li>
                            <li>
                                <a href="{{ URL::route('tecnologias') }}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Tecnologia</a>
                            </li>
                            <li>
                                <a href="{{ URL::route('disenodigital') }}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Diseno Digital</a>
                            </li>
                            <li>
                                <a href="{{ URL::route('teoriamusical') }}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Teoria Musical</a>
                            </li>
                            <li>
                                <a href="{{ URL::route('carpinteria') }}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Carpinteria</a>
                            </li>
                            <li>
                                <a href="{{ URL::route('estructurasmetalicas') }}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Estructuras
                                    Metalicas</a>
                            </li>
                            <li>
                                <a href="{{ URL::route('cableadoredes') }}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Cableado de
                                    Redes</a>
                            </li>
                            <li>
                                <a href="{{ URL::route('automotriz') }}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Automotriz</a>
                            </li>


                        </ul>

                    </div>
                </li>
                {{-- //BOTON VIEW SERVICIOS --}}
                <li>
                    <a href="{{ URL::route('servicio') }}"
                        class="block py-2 pr-4 pl-3 text-gray-100 border-b border-gray-100 hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Servicios</a>
                </li>
                {{-- //BOTON VIEW CONTACTO --}}
                <li>
                    <a href="{{ URL::route('contacto') }}"
                        class="block py-2 pr-4 pl-3 text-gray-100 border-b border-gray-100 hover:bg-gray-70 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Contacto</a>
                </li>
            </ul>
        </div>
        {{-- //SEARCHBAR --}}

        <div class="">
            <div class=" flex justify-center items-center p-4">
                <div class="relative search-input">
                    <a href="" target = "_blank" hidden></a>
                    <input id="inptsearch" type="text"
                        class="h-14 w-96 pr-8 pl-5 rounded z-0 focus:shadow focus:outline-none"
                        placeholder="Busca cualquier curso...">
                        <div class="bg-white autocom-box ">

                        </div>
                    <div class="absolute mt-3 icon"> <svg class="w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg> </div>
                </div>
            </div>
        </div>
        <script>
        const searchWrapper = document.querySelector(".search-input");
const inputBox = searchWrapper.querySelector("input");
const suggBox = searchWrapper.querySelector(".autocom-box");
const icon = searchWrapper.querySelector(".icon");
let linkTag = searchWrapper.querySelector("a");
let webLink;

// if user press any key and release
inputBox.onkeyup = (e)=>{
    let userData = e.target.value; //user enetered data
    let emptyArray = [];
    if(userData){
        icon.onclick = ()=>{
            webLink = "http://turbocursos.herokuapp.com/" + userData;
            linkTag.setAttribute("href", webLink);
            console.log(webLink);
            linkTag.click();
        }
        emptyArray = suggestions.filter((data)=>{
            //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
        });
        emptyArray = emptyArray.map((data)=>{
            // passing return data inside li tag
            return data = '<li>'+ data +'</li>';
        });
        searchWrapper.classList.add("active"); //show autocomplete box
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        for (let i = 0; i < allList.length; i++) {
            //adding onclick attribute in all li tag
            allList[i].setAttribute("onclick", "select(this)");
        }
    }else{
        searchWrapper.classList.remove("active"); //hide autocomplete box
    }
}

function select(element){
    let selectData = element.textContent;
    inputBox.value = selectData;
    icon.onclick = ()=>{
        webLink = "http://turbocursos.herokuapp.com/" + selectData;
        linkTag.setAttribute("href", webLink);
        linkTag.click();
    }
    searchWrapper.classList.remove("active");
}

function showSuggestions(list){
    let listData;
    if(!list.length){
        userValue = inputBox.value;
        listData = '<li>'+ userValue +'</li>';
    }else{
        listData = list.join('');
    }
    suggBox.innerHTML = listData;
}

let suggestions = [
    "automotriz",
    "cableadoredes",
    "carpinteria",
     "diseno digital",
    "estructuras metalicas",
    "jardineria",
    "salud mental",
    "sexualidad",
    "tecnologias",
    "teoria musical",
];

        </script>
        {{-- <div class="">
            <div class="">
              <a href="" target="_blank" hidden></a>
              <input type="text" placeholder="Type To Search..">
              <div class="">

              </div>
              <div class="icon"><i class="fas fa-search"></i></div>
            </div>
          </div> --}}



    </div>
</nav>
