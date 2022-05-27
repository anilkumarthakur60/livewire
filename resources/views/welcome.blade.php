<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <style>

    </style>

</head>

<body>
    <span class="screen-darken"></span>

    <header class="section-header py-4">
        <div class="container">
            <h2>Demo page </h2>
        </div>
    </header> <!-- section-header.// -->



    <div class="container">

        <button data-trigger="navbar_main" class="d-lg-none btn btn-warning" type="button"> Show navbar </button>
        <button data-trigger="card_mobile" class="d-lg-none btn btn-warning" type="button"> Show card </button>


        <!-- ============= COMPONENT ============== -->
        <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <div class="offcanvas-header">
                    <button class="btn-close float-end"></button>
                </div>
                <a class="navbar-brand" href="#">Brand</a>

                <ul class="navbar-nav">
                    <li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
                    <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> Services </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> More items </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Dropdown right </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                        </ul>
                    </li>
                </ul>

            </div> <!-- container-fluid.// -->
        </nav>
        <!-- ============= COMPONENT END// ============== -->

        <section class="section-content py-5">

            <h6>Demo for Responsive Navbar with offcanvas view on mobile. <br> Based on Bootstrap 5 CSS framework.
                <br> <br> <span class="text-danger">Change browser size to see in action</span>
            </h6>
            <p>For this demo page you should connect to the internet to receive files from CDN like Bootstrap5 CSS,
                Bootstrap5 JS</p>

            <article class="card mobile-offcanvas bg-light" id="card_mobile">
                <div class="card-body">
                    <div class="offcanvas-header">
                        <button class="btn-close float-end"></button>
                    </div>
                    <h5>This card becomes offcanvas on mobile view</h5>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </article>
            <br>
            <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet,
                consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

            <a href="https://bootstrap-menu.com/detail-offcanvas-mobile.html" class="btn btn-success"> &laquo Back to
                tutorial or Download code</a>

        </section>

    </div><!-- container //  -->
    <script type="text/javascript">
        function darken_screen(yesno){
		if( yesno == true ){
			document.querySelector('.screen-darken').classList.add('active');
		}
		else if(yesno == false){
			document.querySelector('.screen-darken').classList.remove('active');
		}
	}
	
	function close_offcanvas(){
		darken_screen(false);
		document.querySelector('.mobile-offcanvas.show').classList.remove('show');
		document.body.classList.remove('offcanvas-active');
	}

	function show_offcanvas(offcanvas_id){
		darken_screen(true);
		document.getElementById(offcanvas_id).classList.add('show');
		document.body.classList.add('offcanvas-active');
	}

	document.addEventListener("DOMContentLoaded", function(){
		document.querySelectorAll('[data-trigger]').forEach(function(everyelement){
			
			let offcanvas_id = everyelement.getAttribute('data-trigger');
			
			everyelement.addEventListener('click', function (e) {
				e.preventDefault();
	        	show_offcanvas(offcanvas_id);
	  			
			});
		});

		document.querySelectorAll('.btn-close').forEach(function(everybutton){
			
			everybutton.addEventListener('click', function (e) {
				e.preventDefault();
	        	close_offcanvas();
	  		});
		});

		document.querySelector('.screen-darken').addEventListener('click', function(event){
			close_offcanvas();
		});
		
    }); 
	// DOMContentLoaded  end
    </script>
</body>

</html>