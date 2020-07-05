<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/layout.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/v4-shims.css">

    <!--        Bootstrap 4.5     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <title>OnlineShop</title>
</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="">
        <img src="/css/images/logo.png" alt="" width="70px" height="48px" class="d-inline-block align-top" alt="" loading="lazy">
        <span class="logo-name">OnlineShop</span>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                   href="">SHOP&nbsp;NOW</a>
                <div class="dropdown-menu">
                    something here
                </div>
            </li>

            <!--    Hower effect on dropdown menu   -->
            <script>
                function toggleDropdown (e) {
                    const _d = $(e.target).closest('.dropdown'),
                        _m = $('.dropdown-menu', _d);
                    setTimeout(function(){
                        const shouldOpen = e.type !== 'click' && _d.is(':hover');
                        _m.toggleClass('show', shouldOpen);
                        _d.toggleClass('show', shouldOpen);
                        $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
                    }, e.type === 'mouseleave' ? 300 : 0);
                }
                $('body')
                    .on('mouseenter mouseleave','.dropdown',toggleDropdown)
                    .on('click', '.dropdown-menu a', toggleDropdown);
            </script>

            <li class="nav-item">
                <a class="nav-link" href="">Services</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="">Support</a>
                <div class="dropdown-menu">
                    Support Lorem ipsum dolor.
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">About</a>
            </li>
        </ul>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link gradient" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    @yield('content')

<!--        Footer              -->
<div class="footer">

    <!--        Social media        -->
    <div class="social">
        <h3>FOLLOW US</h3>
        <ul class="list">
            <li>
                <a href="https://t.me/korzinka_uz" target="_blank">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-telegram"></span>
                </a>
            </li>

            <li>
                <a href="https://www.instagram.com/korzinkauz/" target="_blank">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-instagram"></span>
                </a>
            </li>

            <li>
                <a href="https://www.facebook.com/MirodilKamilov" target="_blank">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-facebook"></span>
                </a>
            </li>

            <li>
                <a href="https://www.linkedin.com/login" target="_blank">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-linkedin"></span>
                </a>
            </li>
        </ul>
    </div>

    <div class="box">
        <div class="sitemap">
            <h6>SITE MAP</h6>
            <a href=""><span>Home</span></a>
            <a href=""><span>Shop</span></a>
            <a href=""><span>Help</span></a>
            <a href=""><span>About us</span></a>
            <a href=""><span>Vacancy</span></a>
        </div>

        <div class="links">
            <h6>HELPFUL LINKS</h6>
            <a href=""><span>Services</span></a>
            <a href=""><span>Support</span></a>
            <a href=""><span>Privacy Policy</span></a>
            <a href=""><span>Terms & Condition</span></a>
        </div>

        <div class="contact">
            <h6 id="Hcontact">CONTACT</h6>
            <i class="fas fa-map-marker-alt"><span><span class="inspan">&nbsp;</span>9, Ziyolilar str., M.Ulugbek district, Tashkent city</span></i>
            <i class="fas fa-phone-alt"><span><span class="inspan">&nbsp;</span>+998 71 289-99-99</span></i>
            <i class="far fa-envelope"><span><span class="inspan">&nbsp;</span>info@gmail.com</span></i>
        </div>
    </div>

    <div class="copyright">
        All Right Reserved 2020, @OnlineShop
    </div>
</div>
</body>
</html>
