<!doctype html>
<html lang="en">

<head>

    <title>Reburn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="icon" type=".ico" href="assets/images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/reburn.min.css') }}">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-X49SJESNXX"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7784149573243041"
        crossorigin="anonymous"></script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7784149573243041"
        crossorigin="anonymous"></script>
    <!-- anuncios1 -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7784149573243041" data-ad-slot="6346583827"
        data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-X49SJESNXX');
    </script>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
</head>

<body>

    @include('layouts.partials.navbar')

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <div class="dsaf">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <h3 class="footer-logo">Gym REBURN</h3>
                    <p>Av. Primera Nte. Ote., Norte, 29950 Ocosingo, Chis</p>

                </div>
                <div class="col-lg-4 col-md-6">
                    <h3 class="footer-logo"> Síguenos</h3>
                    <ul class="list-unstyled socila-list">

                        <li><a href="https://web.facebook.com/profile.php?id=100035986544312&_rdc=1&_rdr"
                                target="_blank"><img src="assets/images/social/facebook.png" alt="facebook"></a></li>
                        <li><a href="https://twitter.com/ReburnGm" target="_blank"><img
                                    src="assets/images/social/twitter.png" alt="twitter"></a></li>
                        <li><a href="https://www.youtube.com/watch?v=wYyrbpjm77A" target="_blank"><img
                                    src="assets/images/social/youtube.png" alt="youtube"></a></li>
                        <li><a href="https://www.instagram.com/reburngym/" target="_blank"><img
                                    src="assets/images/social/instagram.png" alt="instagram"></a></li>
                    </ul>

                </div>
            </div>
            <div class="copyright text-center text-white">
                REBURN © 2022
                <script>
                    Document.write(new(Date))
                </script>
            </div>
    </footer>

</body>
<script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

</html>
