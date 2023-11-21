
<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Newsletter</h4>
                        <p>Suscríbete a nuestro boletin informativo y obtén <span>10%</span> descuento en tu primera compra</p>
                        <form action="{{route('subscribe')}}" method="post" class="newsletter-inner">
                            @csrf
<<<<<<< HEAD
                            <input name="email" placeholder="Ingrese su correo" required="" type="email">
                            <button class="btn" type="submit">Suscribete</button>
=======
                            <input name="email" placeholder="Your email address" required="" type="email">
                            <button class="btn" type="submit" aria-label="Suscribete">Suscribete</button>
>>>>>>> 6ef68cfb76da90f7c6f0b47861090b4dac5b4941
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->