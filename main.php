<!doctype html>
<html lang="en">
	<?php
	
	session_start();
// CALL AUTHENTICATION CHECK
//print $_SESSION['validated'];
//	print  $_SESSION['role'];
include ('authentication_participant.php');
	

?>
	
	

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Bienvenido - Menu Principal</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 5, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
	
	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
	

	
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary scrolled">
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>  <img src="assets/img/flags/pr.png" width="24
					" height="16">
            </a>
        </div>
        <div class="pageTitle">
            Mi Cooper App
      </div>
        <div class="right">
            <a href="#" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Search...">
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <a href="#" class="ms-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

    <!-- App Capsule -->
    <div id="appCapsule">
<div id="result"></div>
        <div class="header-large-title" >
           <h2>Hola, <?php print $_SESSION["name"];?>!</h2> 
           
        </div>

        <div class="section full mt-3 mb-3">

            <!-- carousel multiple -->
            <div class="carousel-multiple splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="card">
                                <a href=""><img src="assets/img/menu/noticias.png" class="card-img-top" alt="image"></a>
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Noticias</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                              <img src="assets/img/menu/calendario.png" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Calendario</h4>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                              <img src="assets/img/menu/mensajes.png" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Mensajes</h4>
                                </div>
                            </div>
                        </li>
                        
						
						<li class="splide__slide">
                            <div class="card">
                              <img src="assets/img/menu/videos.png" class="card-img-top" alt="image">
                                <div class="card-body pt-2">
                                    <h4 class="mb-0">Videos</h4>
                                </div>
                            </div>
                        </li>
						
						
						
						
						
						
						
						
						
                    </ul>
                </div>
            </div>
            <!-- * carousel multiple -->

        </div>


        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-end">
                    <div>
                        <h6 class="card-subtitle">Mi Cooper App</h6>
                        <h5 class="card-title mb-0 d-flex align-items-center justify-content-between">
                            Modo Dark
                        </h5>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodecontent">
                        <label class="form-check-label" for="darkmodecontent"></label>
                    </div>

                </div>
            </div>
        </div>
		
		<div class="section mt-3 mb-3">
            <div class="card">
              <div class="section full mt-2 mb-3">
       
            <!-- carousel full -->
            <div class="carousel-full splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="assets/img/promo/1.jpg" alt="alt" class="imaged w-100 square">
                        </li>
                        <li class="splide__slide">
                            <img src="assets/img/sample/photo/wide2.jpg" alt="alt" class="imaged w-100 square">
                        </li>
                        <li class="splide__slide">
                            <img src="assets/img/sample/photo/wide3.jpg" alt="alt" class="imaged w-100 square">
                        </li>
                    </ul>
                </div>
            </div>
            <!-- * carousel full -->
        </div>
               
			
        

        <div class="section mt-3 mb-3">
            <div class="card">
                
  <video class="embed-responsive-item" controls autoplay loop muted>
        <source src="https://player.vimeo.com/external/325698769.sd.mp4?s=4e70164190f4b472059c9f4ca74ca0ca58056ce4&profile_id=165" type="video/mp4">
        Your browser does not support the video tag.
      </video>
</div>
                
            </div>



        <!-- app footer -->
        <div class="appFooter">
            <img src="assets/img/cooperapplogo.png" alt="icon" class="footer-logo mb-2">
            <div class="footer-title">
                Copyright © Mi Cooper App <span class="yearNow"></span>. All Rights Reserved.
            </div>
            <div></div>
            

            <div class="mt-2">
                <a href="#" class="btn btn-icon btn-sm btn-facebook">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-twitter">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-linkedin">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-instagram">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-whatsapp">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-secondary goTop">
                    <ion-icon name="arrow-up-outline"></ion-icon>
                </a>
            </div>

        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="main.php" class="item active">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
            </div>
        </a>
       
        <a href="#" class="item">
            <div class="col">
                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                <span class="badge badge-danger">5</span>
            </div>
        </a>
        <a href="logout.php" class="item">
            <div class="col">
                 <ion-icon name="log-out-outline"></ion-icon>
            </div>
        </a>
        <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
            <div class="col">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-body p-0">

                    <!-- profile box -->
                    <div class="profileBox">
                        <div class="image-wrapper">
                            <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged rounded">
                        </div>
                        <div class="in">
                            <strong><?php print $_SESSION['name'] . " " . $_SESSION['lastname'];?></strong>
                            <div class="text-muted">
                                <ion-icon name="location"></ion-icon>
                                Puerto Rico
                            </div>
                        </div>
                        <a href="#" class="close-sidebar-button" data-bs-dismiss="modal">
                            <ion-icon name="close"></ion-icon>
                        </a>
                    </div>
                    <!-- * profile box -->

                    <ul class="listview flush transparent no-line image-listview mt-2">
                        <li>
                            <a href="main.php" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Noticias
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="cube-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Calendario
                                </div>
                            </a>
                        </li>
                        
                        <li>
                            <a href="#" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Mensajes</div>
                                    <span class="badge badge-danger">5</span>
                                </div>
                            </a>
                        </li>
						
						
						   <li>
                            <a href="logout.php" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Salir</div>
                                    
                                </div>
                            </a>
                        </li>
						
						
						
                        <li>
                            <div class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="moon-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Dark Mode</div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input dark-mode-switch" type="checkbox"
                                            id="darkmodesidebar">
                                        <label class="form-check-label" for="darkmodesidebar"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    

      <!-- sidebar buttons -->
                <div class="sidebar-buttons">
                    <a href="#" class="button">
                        <ion-icon name="person-outline"></ion-icon>
                    </a>
                    <a href="#" class="button">
                        <ion-icon name="archive-outline"></ion-icon>
                    </a>
                    <a href="#" class="button">
                        <ion-icon name="settings-outline"></ion-icon>
                    </a>
                    <a href="logout.php" class="button">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </a>
                </div>
                <!-- * sidebar buttons -->
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->

    <!-- welcome notification  -->
    <div id="notification-welcome" class="notification-box">
        <div class="notification-dialog android-style">
            <div class="notification-header">
                <div class="in">
                    <img src="assets/img/icon/72x72.png" alt="image" class="imaged w24">
                    <strong>Mi Cooper App</strong>
                    <span>just now</span>
                </div>
                <a href="#" class="close-button">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <h3 class="subtitle">Welcome to Mobilekit</h3>
                    <div class="text">
                        Mobilekit is a PWA ready Mobile UI Kit Template.
                        Great way to start your mobile websites and pwa projects.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * welcome notification -->

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

    <script>
        // Trigger welcome notification after 5 seconds
        setTimeout(() => {
            notification('notification-welcome', 5000);
        }, 2000);
    </script>
		
		
		
		<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "070f0864-aa9b-4c36-8a60-46627d77a728",
      autoRegister: false,
      notifyButton: {
        enable: true,
      },
    });
    OneSignal.registerForPushNotifications();
  });
     OneSignal.push(function() {
      OneSignal.getUserId(function(userId) {

        var user_id = <?php echo (Sentry::getUser()->id) ?? 0; ?>;
        var token   = "{{ csrf_token() }}";

        $.post("/user/storeUserPath", {
            'user_id': user_id,
            '_token': token,
            'userId': userId,
        });

      });
    });
</script>

</body>

</html>