<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Cooper APP - Puerto Rico</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 5, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
    <script src="https://appleid.cdn-apple.com/appleauth/static/jsapi/appleid/1/en_US/appleid.auth.js"></script>
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->


    <!-- App Capsule -->
    <div id="appCapsule" class="pt-0">

        <div class="login-form mt-1">
            <div class="section">
                <img src="assets/img/sample/photo/micooperapplogo.png" alt="image" class="form-image">
            </div>
            <div class="section mt-1">
                <h1>¡Hola y Bienvenido!</h1>
                <h4>Por favor entre sus datos de login:</h4>
            </div>
            <div class="section mt-1 mb-5">
            <button id="apple-login-button">Sign in with Apple</button>
                    <script type="text/javascript">
        document.getElementById("apple-login-button").addEventListener("click", function() {
            AppleID.auth.init({
                clientId : 'com.micopper.app',
                scope : 'name email',
                redirectURI : 'https://micooper.com/validateapple.php',
                state : "2322",
            });

            AppleID.auth.signIn();
        });
    </script>
                <form action="validatparticipant.php" method="post">
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" autocomplete="off" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-links mt-2">
                        <div>
                            
                        </div>
                        <div><a href="http://coopervisionpr.com/" class="text-muted">Empleos/Oportunidades</a></div>
						<div><a href="https://micooper.com/support.html" class="text-muted">Ayuda/Soporte</a></div>
                    </div>

       
                    <div class="form-button-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Log in</button>
                    </div>

                </form>
            </div>
			 <img src="assets/img/employees.png" alt="image" class="form-image">
        </div>


    </div>
    <!-- * App Capsule -->



    <!-- ============== Js Files ==============  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- ProgressBar js -->
    <script src="assets/js/plugins/progressbar-js/progressbar.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>

</body>

</html>