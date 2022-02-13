                {{-- //ESTA ES LA VISTA MADRE, LA PRINCIPAL DE AQUI LLAMA A LAS DEMAS VISTAS Y ASI CONSECUTIVAMENTE --}}
<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body  class="bg-cover " style="background-image: url('https://www.matichon.co.th/wp-content/uploads/2021/09/01-76.jpg')"></div>

<div class="">

    <header class="">
        @include('includes.header')
    </header>

    <div id="main" class="row">

            @yield('content')

        </div>

    <footer class="">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
