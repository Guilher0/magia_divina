<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Magia Divina</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/pages.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800;1000&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav style="position: absolute;">
            <div style="margin:15px 0 0 15px; ">
                <a href="{{''}}"><img src="{{'imgIndex/logo-nav.png'}}" alt="logo" style="max-width: 250px"></a>
            </div>

            <div class="box-nav">
                <ul>
                    <li><a href="#jornada"> Quem somos </a></li>
                    <li><a href="#servicos"> nossos serviços </a></li>
                    <li><a href="#contato"> Nosso contato</a></li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')

    {{-- Criando o footer --}}
    <footer class="rodape">

        <div class="container-footer">
            <div class="row-footer">
                <!-- footer col-->
                <div class="footer-col">
                    <h4>Empresa</h4>
                    <ul>
                        <li><a href="#jornada"> Quem somos </a></li>
                        <li><a href="#servicos"> nossos serviços </a></li>
                    </ul>
                </div>
                <!--end footer col-->

                <!-- footer col
                <div class="footer-col">
                    <h4>Obter ajuda</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Transporte</a></li>
                        <li><a href="#">devoluções</a></li>
                        <li><a href="#">Status De Pedido</a></li>
                        <li><a href="#">Opções De Pagamento</a></li>
                    </ul>
                </div>
                end footer col-->

                <!-- footer col-->
                <div class="footer-col">
                    <h4 id="contato">Entre em contato</h4>
                    <!-- <div class="form-sub">
                        <form>
                            <input type="email" placeholder="Digite o seu e-mail" required>
                            <button>subscrever</button>
                        </form>
                    </div> -->

                    <div class="medias-socias">
                        <a href="https://www.facebook.com/profile.php?id=100094004860596"> <img src="{{asset('redes/face.png')}}" alt=""><i class="fa fa-facebook"></i> </a>
                        <a href="https://www.instagram.com/magiadivina_bh/"> <img src="{{asset('redes/insta.png')}}" alt=""> <i class="fa fa-instagram"></i> </a>
                        <a href="https://api.whatsapp.com/send?phone=%2B5531983398688&data=ARB1wuWdgLZstjtgYJ8ZlpN-rCej60rwlkOknQGz15MAxeMWx6gJEuamiT8lnWJUqtW4WZvo9HQgPUtnLmQ799iRHGsDA0w5xwuzapt_e68T9HX0L93tsGEBuT-qo8d089SeL9653ynGdU5W9ewOACfeQQ&source=FB_Page&app=facebook&entry_point=page_cta&fbclid=IwAR0c6VNpFZdDaL--0SUbiJNhw6TNvWmsvgVHPLbTOTN6-V3prbCRDuDp0ag"> <img src="{{asset('redes/wpp.png')}}" alt=""> <i class="fa fa-whatsapp"></i> </a>
                        <!--<a href="#"> <img src="{{asset('redes/email.png')}}" alt=""> <i class="fa fa-email"></i> </a>-->
                    </div>

                </div>
                <!--end footer col-->
            </div>
        </div>

    </footer>
</body>
</html>
