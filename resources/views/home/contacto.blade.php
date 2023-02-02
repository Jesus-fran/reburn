@extends('layouts.app-master')

@section('content')

        <section class="section mt-4 mb-4" id="contact-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 w-100 p-0">
                        <div class="note"></div>
                        <div class="contact-form fields">
                            <h2 class="text-center text-white mb-5">Contáctanos</h2>
                            <div style=" width: 49%;   float: left;">
                                <form action="send.php" method="POST">
                                    <div class="container" class="center">
                                        <div class="col-md-6 col-sm-12">
                                            <input name="name" type="text" id="name" placeholder="Name"
                                                required="">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                                placeholder="Email" required="">
                                        </div>
                                        <div class="col-lg-12 w-100">
                                            <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" name="submit" class="main-button">ENVIAR
                                                MENSAJE</button>
                                        </div>
                                    </div>
                                </form>
                                <div></div>
                            </div>

                            <div style="   width: 49%;    /* float: right; */  float: right;   /* margin: auto; */ ">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.322582047037!2d-92.09633378519344!3d16.9093727208658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f2ea70ef4e0e63%3A0xbbab361fac6f641!2sGimnasio%20Ol%C3%ADmpico!5e0!3m2!1ses!2smx!4v1664941409028!5m2!1ses!2smx"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection