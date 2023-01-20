@extends('layouts.public')
@section('content')
    @if (isset($result) && $result == 'success')
    <script>
        Toastify({
            text: "Cita enviada exitosamente",
            duration: 5000,
            gravity: "bottom",
            position: "right",
            className: "custom_toast",
            style: {
                background: "linear-gradient(to right, green, yellowgreen)",
            },

        }).showToast();
    </script>
    @endif
    <!-- home section starts  -->
    <section class="home" id="home" style="background: url('{{asset('storage/welcome_images/barber3.jpg')}}') no-repeat;background-size: cover;opacity:.6;">
        <div class="content">
            <h3 data-aos="fade-right">Implementa un servicio premium en tu barbería</h3>
            <p data-aos="fade-right">Implementa la tecnología en tu barbershop y sé parte de la comunidad premium de barberías.</p>
            <a data-aos="fade-up" href="#" class="btn">Quiero ser parte</a>
            <br><br>
            {{-- <a style="color:white" href="https://www.freepik.com/free-photo/handsome-man-barbershop-shaving-beard_12804101.htm">Imagen tomada por senivpetro</a> en Freepik --}}
        </div>
    </section>
    <!-- home section ends -->

    <!-- about section starts  -->
    <section class="about" id="about">

        <h1 class="heading"> <span>Sobre</span> nosotros </h1>

        <div data-aos="fade-up" data-aos-delay="150" class="row">

            <div class="image">
                <img src="{{asset('storage/welcome_images/barber.jpg')}}" alt="">
            </div>

            <div class="content">
                <h3>Barberiasdecostarica</h3>
                <p>Este increíble servicio fué creado y puesto a disposición del público por parte de TeamCode. TeamCode es un organización generadora de soluciones de software, soporte técnico y diseño gráfico ubicada en Costa Rica.</p>
                <p>Para TeamCode es un honor poder contribuir y poner a disposición de miles de barberías en Costa Rica este cómodo y agradable servicio que sin duda mejorará tu relación con los clientes y el servicio que les das.</p>
                <a href="https://teamcodecr.tech" class="btn">Ver más sobre TeamCode</a>
            </div>

        </div>

    </section>
    <!-- about section ends -->

    <!-- menu section starts  -->
    <section class="menu" id="services">

        <h1 class="heading"> Servicios <span>de la app</span> </h1>

        <div class="box-container">

            <div data-aos="zoom-in" data-aos-delay="150" class="box">
                <img src="{{asset('storage/welcome_images/barberLogo.png')}}" alt="">
                <h3>Agendado de citas</h3>
                <p>Permite a tus clientes agendar citas de manera cómoda y sin retrasos.</p>
                {{-- <div class="price">$15.99 <span>20.99</span></div> --}}
                {{-- <a href="#" class="btn">add to cart</a> --}}
            </div>

            <div data-aos="zoom-in" data-aos-delay="250" class="box">
                <img src="{{asset('storage/welcome_images/barberLogo.png')}}" alt="">
                <h3>Posicionamiento</h3>
                <p>Da a conocer tu barbería a nivel nacional con los rankings y en la lista de barberías afiliadas por cantón.</p>
            </div>

            <div data-aos="zoom-in" data-aos-delay="350" class="box">
                <img src="{{asset('storage/welcome_images/barberLogo.png')}}" alt="">
                <h3>Brinda información</h3>
                <p>Con nosotros, tendrás tu espacio para informar a tus clientes sobre información de contacto de tu barbería y tus barberos. Orarios, direcciones de llegada y mucho más</p>
                
            </div>

            <div data-aos="zoom-in" data-aos-delay="450" class="box">
                <img src="{{asset('storage/welcome_images/barberLogo.png')}}" alt="">
                <h3>Reseñas y valoraciones</h3>
                <p>Permite a tus clientes valorar tu servicio, recomendarlo y puntuarlo para posicionarte a nivel nacional.</p>
            </div>

            <div data-aos="zoom-in" data-aos-delay="550" class="box">
                <img src="{{asset('storage/welcome_images/barberLogo.png')}}" alt="">
                <h3>Control de citas</h3>
                <p>Administra las citas agendadas por tus clientes, confirmalas o cancelalas de acuerdo a tu disponibilidad.</p>
            </div>

            <div data-aos="zoom-in" data-aos-delay="650" class="box">
                <img src="{{asset('storage/welcome_images/barberLogo.png')}}" alt="">
                <h3>Control de barberos</h3>
                <p>Agrega, edita o elimina a barberos para darles acceso a la plataforma y tener su propio control de citas.</p>
            </div>

        </div>

    </section>
    <!-- menu section ends -->

    {{-- Comunidad --}}
    <section class="products" id="comunity">

        <h1 class="heading"> Nuestra <span>comunidad top</span> </h1>

        <div class="box-container">

            <div data-aos="zoom-in" data-aos-delay="150" class="box">
                <div class="icons">
                    {{-- <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a> --}}
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="{{asset('storage/welcome_images/barberLogo.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>BarberíaX</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    {{-- <div class="price">$15.99 <span>$20.99</span></div> --}}
                </div>
            </div>

            <div data-aos="zoom-in" data-aos-delay="350" class="box">
                <div class="icons">
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="{{asset('storage/welcome_images/barberLogo.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>BarberíaX</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    {{-- <div class="price">$15.99 <span>$20.99</span></div> --}}
                </div>
            </div>

            <div data-aos="zoom-in" data-aos-delay="150" class="box">
                <div class="icons">
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="{{asset('storage/welcome_images/barberLogo.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>BarberíaX</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    {{-- <div class="price">$15.99 <span>$20.99</span></div> --}}
                </div>
            </div>

        </div>

    </section>
    {{-- Comunidad --}}

    <!-- review section starts  -->
    <section class="review" id="review">

        <h1 class="heading"> Nuestros clientes <span>dicen</span> </h1>

        <div class="box-container">

            <div data-aos="zoom-in" data-aos-delay="250" class="box">
                <img src="{{asset('storage/welcome_images/quote-img.png')}}" alt="" class="quote">
                <p>Exelente app. Nos ha ayudado mucho a mejorar nuestro servicio</p>
                <img src="{{asset('storage/welcome_images/pic-1.png')}}" class="user" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div data-aos="zoom-in" data-aos-delay="150" class="box">
                <img src="{{asset('storage/welcome_images/quote-img.png')}}" alt="" class="quote">
                <p>Exelente app. Nos ha ayudado mucho a mejorar nuestro servicio</p>
                <img src="{{asset('storage/welcome_images/pic-1.png')}}" class="user" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            
            <div data-aos="zoom-in" data-aos-delay="250" class="box">
                <img src="{{asset('storage/welcome_images/quote-img.png')}}" alt="" class="quote">
                <p>Exelente app. Nos ha ayudado mucho a mejorar nuestro servicio</p>
                <img src="{{asset('storage/welcome_images/pic-1.png')}}" class="user" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </section>
    <!-- review section ends -->

    <!-- contact section starts  -->
    <section class="contact" id="contact">

        <h1 class="heading"> <span>Contac</span>tanos</h1>

        <div data-aos="fade-up" data-aos-delay="150" class="row">

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

            <form action="">
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="Nombre">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="Correo electrónico">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="Número de telefono">
                </div>
                <input type="submit" value="contactarlos" class="btn">
            </form>

        </div>

    </section>
    <!-- contact section ends -->

    <!-- blogs section starts  -->
    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="{{asset('storage/welcome_images/barberLogo.png')}}" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21st may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('storage/welcome_images/barberLogo.png')}}" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21st may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('storage/welcome_images/barberLogo.png')}}" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21st may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>
    <!-- blogs section ends -->

    <script>
        AOS.init();
    </script>
@endsection