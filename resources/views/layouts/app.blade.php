<!DOCTYPE html>
<html lang="en">
<head>
    <title>Klinika Gjermane e Syrit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<!--Body-->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="70">

<!--Containter Body-->
<div class="container" id="kryesore">

    <!--Navigation Section-->
    <nav class="navbar navbar-default" id="headNavBar">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="{{route('index')}}" id="logoxl"><img src="{{url("/img/logo.png")}}" alt="Klinika Gjermane e Syrit" height="40" width="170"></a>
                <a class="navbar-brand" href="{{route('index')}}" id="logosm" style="display:none"><img src="{{("img/domed.png")}}" alt="Klinika Gjermane e Syrit" height="40"></a></div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('t1.index')}}">Нарушување на видот</a></li>
                    <li><a href="{{route('t2.index')}}">Живот без наочари</a></li>
                    <li><a href="{{route('t3.index')}}">Операција на катаракта</a></li>
                    <li><a href="{{route('t4.index')}}">Останати процедури</a></li>
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Повеќе <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('t5.index')}}">За нас</a></li>
                            <li><a href="{{route('poseta')}}">Посета</a></li>
                            <li><a href="{{route('prashaj')}}">Прашај го лекарот</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Албански</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!--Row (Image Slider Section)-->
    <div class="row" id="myCarouselRow">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active"> </li>
                <li data-target="#carousel1" data-slide-to="1" class=""> </li>
                <li data-target="#carousel1" data-slide-to="2" class=""> </li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active"> <img src="{{url("/img/11.jpg")}}" alt="New York" width="1200" height="700">
                    <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>The atmosphere in New York is lorem ipsum.</p>
                    </div>
                </div>
                <div class="item"> <img src="{{url("/img/2.jpg")}}" alt="Chicago" width="1200" height="700">
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago - A night we won't forget.</p>
                    </div>
                </div>
                <div class="item"> <img src="{{url("/img/3.jpg")}}" alt="Los Angeles" width="1200" height="700">
                    <div class="carousel-caption">
                        <h3>LA</h3>
                        <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    @yield('content')
    @yield('deshmi')

<!-- Row (Contact Section) -->
<div id="contact" class="row">
    <h2 class="text-center">Contact</h2><hr>
    <div class="col-md-4">
        <address>
            <strong style="color:#cd9dd8"><span class="glyphicon glyphicon-map-marker"></span>Klinika Gjermane e Syrit</strong><br>
            Spitali Hygeia, Autostrada Tirane-Durres, Km1<br>
            1000, Tirana, AL<br>
            <abbr title="Phone"><span class="glyphicon glyphicon-phone"></span></abbr> +355 4 23 88 931 <br>
            <abbr title="Phone"><span class="glyphicon glyphicon-phone"></span></abbr> +355 69 60 82 771 <br>
            <abbr title="Mail"><span class="glyphicon glyphicon-envelope"></span></abbr> info@kgjs.al
        </address>
        <p><strong>Social</strong></p>
        <div class="row">
            <div class="col-xs-2"><img class="img-circle" src="img/fblogo.jpg" width="32px" height="32px" alt="Fb Logo"></div>
            <div class="col-xs-2"><img class="img-circle" src="img/youtubelogo.png" width="32px" height="32px" alt="Youtube Logo"></div>       	<div class="col-xs-2"><img class="img-circle" src="img/32X32.gif" alt=""></div>
            <div class="col-xs-2"><img class="img-circle" src="img/32X32.gif" alt=""></div>
        </div>
    </div>

    <form  role="form" action="{{route('contact')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <div class="col-md-8">
        <div class="row">
            <div class="col-sm-6 form-group">
                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
        <br>
        <div class="col-md-12 form-group">
            <button class="btn pull-right" type="submit">Send</button>
        </div>
    </div>
    </form>

    <br>
</div>


<!-- Add Google Maps -->
<div class="row" id="googleMap"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzQRf2gNUzW2LMMatg2Btu7QUyjhPMTls" type="text/javascript"></script>
<script src="js/script.js"></script>
</div>
<!-- Footer -->
<footer class="text-center"><a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP"></a><br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 style="color:#FFFFFF">Partnerë:</h2>
                <br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-3">
                <div class="row">
                    <p class="partnerHeading"><strong>Klinika Gjermane - Prishtinë</strong></p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis accusamus praesentium eveniet ad unde doloremque ex officia eius ab quibusdam.</p>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <p class="partnerHeading"><strong>Augenklinik Westfalen.</strong></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, mollitia natus amet eligendi consequuntur. Veritatis ullam debitis voluptas repellat laboriosam.</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <p class="partnerHeading"><strong>Augenzentrum Lunen</strong></p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, error, itaque non vel architecto ratione obcaecati doloribus delectus illum harum?</p>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <p class="partnerHeading"><strong>Augenzentren</strong></p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, nam voluptate accusantium nulla distinctio odit aliquam voluptatem ab. Earum, voluptatibus.</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-xs-12">
                <hr>
                <p>Copyright © Klinika Gjermane e Syrit. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>


<script>
    $(document).ready(function(){
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip();
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();
                // Store hash
                var hash = this.hash;
                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    })
</script>

</body>
</html>