<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Misoft</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('catalogo.css') }}">
    
</head>

<body>

    <header>
        <!--Menu-->
        
        <div class="menu container">

            <img class="logo-1" src="{{ asset('./Img/Logo-Michi.PNG.png') }}" alt="">
            <input type="radio" class="logomenu" />
            <img class="menulog" src="{{ asset('./Img/menu.png') }}" alt="">
            <nav class="navbar">

                <div class="menu-1">
                    <ul>

                        <li> <button><a href="#">Inicio</a></button> </li>
                        <li> <button><a href="#">Envios</a></button> </li>
                        <li> <button><a href="#productos">Catalogo</a></button> </li>
                        <li> <button><a href="#Nosotros">Nosotros</a></button></li>


                    </ul>
                </div>

              

                <div class="imagen-usuario">
                  <a href="{{ route('usuarios.domiciliario') }}"><img src="{{ asset('./Img/avatar.png') }}" alt="Dashboard"> </a> 
                </div>
            </nav>
        </div>

        <div class="header-content  container">
            <!--Slide-->
            <div class="swiper mySwiper-1">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="slide">
                            <div class="slide-txt">
                                <h1> Luffy </h1>
                                <p>
                                    Personaje Famoso del anime "One Piece" hecho con lana,
                                    perfecto para regalo o como llavero incluso como 
                                    decoración.
                                </p>

                                <div class="botones">
                                <a href="{{ route('carrito') }}" class="btn-1">Comprar</a>
                                </div>

                            </div>
                            <div class="slide-img">

                                <img src="{{ asset('./Img/Luffy.jpg.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slide">
                            <div class="slide-txt">
                                <h1> Kirby </h1>
                                <p>
                                  Famoso personaje de videojuegos "Kirby" hecho con lana rosada
                                  montado en su estrella, perfecto para un llavero.
                                </p>

                                <div class="botones">
                                <a href="{{ route('carrito') }}" class="btn-1">Comprar</a>
                                </div>

                            </div>
                            <div class="slide-img">

                                <img src="{{ asset('./Img/Kirby.jpg.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slide">
                            <div class="slide-txt">
                                <h1> Mapache </h1>
                                <p>
                                    Pequeño mapache hecho con lana, perfecto para llavero.
                                </p>

                                <div class="botones">
                                <a href="{{ route('carrito') }}" class="btn-1">Comprar</a>
                                </div>

                            </div>
                            <div class="slide-img">

                                <img src="{{ asset('./Img/Mapache.jpg.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>



                    <!--Botones para el Slide-->
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            
               

            </div>


        </div>


    </header>

    <!--Productos-->
    <main class="products" id="productos">

        <div class="tabs container">
            <!--Tab 1-->
            <input type="radio" name="tabs" id="tab1" checked="checked" class="tabInput" value="1">
            <label for="tab1">Categoria</label>
            <div class="tab">
                <div class="swiper mySwiper-2" id="swiper1">
                    <!--Estan los productos-->
                    <div class="swiper-wrapper">

                        <!--Para Agregar Productos-->
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Deadpool</h4>
                                    <img src= "{{ asset('./Img/Deadpool.jpg.jpg') }}" alt="">
                                </div>

                                <div class="product-txt">
                                    <h4>Deadpool</h4>
                                    <p>Deadpool hecho con lana </p>
                                    <span class="price">$40.000</span>

                                    <div class="btn-3">
                                    <a href="{{ route('carrito') }}">Comprar</a>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Chimuelo</h4>
                                    <img src="{{ asset('./Img/Chimuelo Blanco.jpg.jpg') }}" alt="">
                                </div>

                                <div class="product-txt">
                                    <h4>Productos</h4>
                                    <p>Hermoso LLavero para regalar </p>
                                    <span class="price">$40.000</span>

                                    <div class="btn-3">
                                    <a href="{{ route('carrito') }}">Comprar</a>
                                        </div>

                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Mapache</h4>
                                    <img src="{{ asset('./Img/Mapache.jpg.jpg') }}" alt="">
                                </div>

                                <div class="product-txt">
                                    <h4>Productos</h4>
                                    <p>Pequeño mapache para llavero </p>
                                    <span class="price">$20.000</span>

                                    <div class="btn-3">
                                    <a href="{{ route('carrito') }}">Comprar</a>
                                        </div>

                                </div>
                            </div>
                        </div>

                        <!--Se agrega el mismo codigo para más prodcutos-->

                    </div>

                    <!--Botones para productos-->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>


                </div>
            </div>
            <!--Tab 2-->
            <input type="radio" name="tabs" id="tab2" checked="checked" class="tabInput" value="2">
            <label for="tab2">Categoria</label>
            <div class="tab">
                <div class="swiper mySwiper-2" id="swiper2">
                    <!--Estan los productos-->
                    <div class="swiper-wrapper">

                        <!--Para Agregar Productos-->
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Vaquita</h4>
                                    <img src="{{ asset('./Img/VAQUITA.PNG') }}" alt="">
                                </div>

                                <div class="product-txt">
                                    <h4>Productos</h4>
                                    <p>Hermosa Vaquita </p>
                                    <span class="price">$50.000</span>

                                    <div class="btn-3">
                                    <a href="{{ route('carrito') }}">Comprar</a>
                                        </div>

                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Agumon</h4>
                                    <img src="{{ asset('./Img/AGUMON.PNG') }}" alt="">
                                </div>

                                <div class="product-txt">
                                    <h4>Productos</h4>
                                    <p>Hermoso personaje Anime </p>
                                    <span class="price">$30.000</span>

                                    <div class="btn-3">
                                    <a href="{{ route('carrito') }}">Comprar</a>
                                        </div>

                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Girasol</h4>
                                    <img src="{{ asset('./Img/GIRASOL.PNG') }}" alt="">
                                </div>

                                <div class="product-txt">
                                    <h4>Productos</h4>
                                    <p>Girasol grande </p>
                                    <span class="price">$20.000</span>

                                    <div class="btn-3">
                                    <a href="{{ route('carrito') }}">Comprar</a>
                                        </div>

                                </div>
                            </div>
                        </div>

                        <!--Se agrega el mismo codigo para más prodcutos-->

                    </div>

                    <!--Botones para productos-->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>


                </div>
            </div>
            <!--Tab 3-->
            <input type="radio" name="tabs" id="tab3" checked="checked" class="tabInput" value="3">
            <label for="tab3">Categoria</label>
            <div class="tab">
                <div class="swiper mySwiper-2" id="swiper3">
                    <!--Estan los productos-->
                    <div class="swiper-wrapper">

                        <!--Para Agregar Productos-->
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Dinosaurio</h4>
                                    <img src="{{ asset('./Img/Dinosaurio.PNG') }}" alt="">
                                </div>

                                <div class="product-txt">
                                    <h4>Productos</h4>
                                    <p>Dino verde cute </p>
                                    <span class="price">$40.000</span>

                                    <div class="btn-3">
                                    <a href="{{ route('carrito') }}">Comprar</a>
                                        </div>

                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Rosas</h4>
                                    <img src="{{ asset('./Img/ROSAS.PNG') }}" alt="">
                                </div>

                                <div class="product-txt">
                                    <h4>Productos</h4>
                                    <p>Hermosa Rosa </p>
                                    <span class="price">$20.000</span>

                                    <div class="btn-3">
                                    <a href="{{ route('carrito') }}">Comprar</a>
                                        </div>

                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <h4>Tulipanes</h4>
                                    <img src="{{ asset('./Img/Tulipanes.PNG') }}" alt="">
                                </div>

                                <div class="product-txt">
                                    <h4>Productos</h4>
                                    <p>Hermoso ramo </p>
                                    <span class="price">$50.000</span>

                                    <div class="btn-3">
                                    <a href="{{ route('carrito') }}">Comprar</a>
                                        </div>

                                </div>
                            </div>
                        </div>

                        <!--Se agrega el mismo codigo para más prodcutos-->

                    </div>

                    <!--Botones para productos-->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>


                </div>
            </div>



        </div>
    </main>

    <section class="info container" id="Nosotros">

        <div class="info-img">
            <img src="{{ asset('./Img/Logo Misoft.png') }}" alt="">
        </div>

        <div class="info-text">

            <h2>Nosotros </h2>
            <p> Somos un grupo de desarrolladores que estamos en nuestro primer
                proyecto de desarrollo web, el cual consiste en la creación y modelacion
                de una pagina web para una empresa de manualidades que se centra en 
                productos con lana.
            </p>
                <a href="#" class="btn-2">Mas Informacion</a>
        </div>

<section class="horario">
        <div class="horario-info container">

            <h2>Horario</h2>
            <div class="horario-txt">
                <div class="txt">
                    <h4>Direccion</h4>
                    <p>Cra 98# 2-44</p>
                    <p>Tierra Buena, Kennedy</p>

                </div>
            </div>

                <div class="txt">
                    <h4>Horario</h4>
                    <p>Lunes a Viernes: 8:00 am a 7:00 pm</p>
                    <p>Sabados y Domingos : 8:00 am a 2:00 pm</p>

                </div>
    
                <div class="txt">
                    <h4>Telefono</h4>
                    <p>xxxxxxxxx</p>
                    

                </div>

                <div class="txt">
                    <h4>Redes Sociales</h4>
                    <div class="socials">
                        <a href="https://wa.me/573174594011">
                            <div class="social" id="Whatsapp">
                                <img src="{{ asset('./Img/whatsapp.png') }}" alt="">
                            </div>
                        </a>
                        
                        <a href="https://www.instagram.com/michigurumis_creations/">
                            <div class="social" id="Instagram">
                                <img src="{{ asset('./Img/instagram.png') }}" alt="">
                            </div>
                        </a>

                        <a href="https://www.facebook.com/share/8UHXYYcHTFKmqU4S/?mibextid=qi2Omg">
                            <div class="social" id="Facebook">
                                <img src="{{ asset('./Img/facebook.png') }}" alt="">
                            </div>
                        </a>
                    </div>
                
                </div>
            </div>
        </div>
    </section>

    </section>


    <footer class="footer container">
    <section class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d428021.35005904105!2d-74.11633836775412!3d4.663484646662605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1717728198193!5m2!1ses!2sco" 
            width="100%" 
            height="300" <!-- Ajusta la altura aquí -->
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    
    <div class="links">
        <h4>Correos de los creadores</h4>
        <ul>
            <li>Diana: <a href="mailto:brilitosdecoloresahre@gmail.com">Correo</a></li>
            <li>Vanesa: <a href="mailto:vceferino.lesmes@gmail.com">Correo</a></li>
            <li>Nicolas: <a href="mailto:nicolasmorita25@gmail.com">Correo</a></li>
            <li>Daniel: <a href="mailto:moraarce18@gmail.com">Correo</a></li>
        </ul>
    </div>

    
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('script.js') }}"></script>

</body>


</html>