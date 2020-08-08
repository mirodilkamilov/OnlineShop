<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/layout.css">

    <!--        google fonts: Montserrat and Italianno (for only logo text)  -->
    <!--<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">

    <!--        font awesome 5.13.1    -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/v4-shims.css">

    <!--        Bootstrap 4.5     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!--        Jquery 3.5.1    -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <title>LaptopShop</title>

</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="">
            <img src="/css/images/logo.png" alt="logo" width="70px" height="48px" class="d-inline-block align-top"
                loading="lazy">
            <span class="logo-name">LaptopShop</span>

        </a>

        <button class="navbar-toggler" id="menu-button" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <div class="menu-button">
                <span id="first-line"></span>
                <span id="second-line"></span>
                <span id="third-line"></span>
            </div>
        </button>

        <script>
            $(document).ready(function() {
                $("#menu-button").click(function() {
                    $("#first-line").toggleClass("first-line");
                    $("#second-line").toggleClass("second-line");
                    $("#third-line").toggleClass("third-line");
                });
            });

        </script>

        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown nav-item-first shop-link">
                    <a class="nav-link text-white link" data-toggle="dropdown" href="">SHOP&nbsp;NOW<span
                            class="fas fa-plus"></span><i class="fas fa-chevron-down"></i></a>

                    <div class="dropdown-menu" id="dropdown-menu">
                        <ul class="menu1-mob">
                            <span class="dropdown-header">Types of laptops depending on usage</span>
                            <li><a class="dropdown-item" href=""><img class="icons"
                                        src="/css/images/work-icon.png">Work</a></li>
                            <li><a class="dropdown-item" href=""><img class="icons"
                                        src="/css/images/everyday-icon.png">Everyday Use</a></li>
                            <li><a class="dropdown-item" href=""><img class="icons"
                                        src="/css/images/gaming-icon.png">Gaming</a></li>
                            <li><a class="dropdown-item" href=""><img class="icons"
                                        src="/css/images/student-icon.png">Student</a></li>
                            <li><a class="dropdown-item" href=""><img class="icons"
                                        src="/css/images/creativty-icon.png">Creativity & Entertainment</a></li>
                        </ul>


                        <div class="menu1-desk">
                            <ul class="laptop-types-list" id="laptop-types-list">
                                <h5 class="dropdown-header">Types of laptops depending on usage</h5>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item work-laptop" id="work-laptop" href=""><img class="icons"
                                            src="/css/images/work-icon.png">Work
                                    </a>
                                    <ul class="dropdown-menu">
                                        <div class="menu-image">
                                            <img class="work-laptop-image" id="work-laptop-image"
                                                src="/css/images/work-laptop.jpg" alt="">
                                        </div>
                                        <div class="menu-description">
                                            <ul id="work-description">
                                                <li>Videoconferencing</li>
                                                <li>Spreadsheets & reports</li>
                                                <li>Competitive Research</li>
                                            </ul>
                                        </div>
                                    </ul>
                                </li>

                                <li class="dropdown-submenu">
                                    <a class="dropdown-item everyday-laptop" id="everyday-laptop" href=""><img
                                            class="icons" src="/css/images/everyday-icon.png">Everyday Use
                                    </a>
                                    <ul class="dropdown-menu">
                                        <div class="menu-image">
                                            <img class="everyday-laptop-image" id="everyday-laptop-image"
                                                src="/css/images/everyday-laptop.jpg" alt="">
                                        </div>
                                        <div class="menu-description">
                                            <ul id="everyday-description">
                                                <li>Keep up with friends & family</li>
                                                <li>Watch videos online</li>
                                                <li>Internet Surfing</li>
                                            </ul>
                                        </div>
                                    </ul>
                                </li>

                                <li class="dropdown-submenu">
                                    <a class="dropdown-item gaming-laptop" id="gaming-laptop" href=""><img class="icons"
                                            src="/css/images/gaming-icon.png">Gaming</a>
                                    <ul class="dropdown-menu">
                                        <div class="menu-image">
                                            <img class="gaming-laptop-image" id="gaming-laptop-image"
                                                src="/css/images/gaming-laptop.png" alt="">
                                        </div>
                                        <div class="menu-description">
                                            <ul id="gaming-description">
                                                <li>MMORPGs & 1st-person shooters</li>
                                                <li>Graphics-intensive gaming</li>
                                                <li>Immersive sound & graphics</li>
                                            </ul>
                                        </div>
                                    </ul>
                                </li>

                                <li class="dropdown-submenu">
                                    <a class="dropdown-item student-laptop" id="student-laptop" href=""><img
                                            class="icons" src="/css/images/student-icon.png">Student</a>
                                    <ul class="dropdown-menu">
                                        <div class="menu-image">
                                            <img class="student-laptop-image" id="student-laptop-image"
                                                src="/css/images/student-laptop.jpg" alt="">
                                        </div>
                                        <div class="menu-description">
                                            <ul id="student-description">
                                                <li>Rugged & durable</li>
                                                <li>Homework & reports</li>
                                                <li>Videoconferencing</li>
                                            </ul>
                                        </div>
                                    </ul>
                                </li>

                                <li class="dropdown-submenu">
                                    <a class="dropdown-item creativity-laptop" id="creativity-laptop" href=""><img
                                            class="icons" src="/css/images/creativty-icon.png">Creativity &
                                        Entertainment</a>
                                    <ul class="dropdown-menu">
                                        <div class="menu-image">
                                            <img class="creativity-laptop-image" id="creativity-laptop-image"
                                                src="/css/images/creativity-laptop.jpg" alt="">
                                        </div>
                                        <div class="menu-description">
                                            <ul id="creativity-description">
                                                <li>Photo / video editing</li>
                                                <li>Music / sound mixing</li>
                                                <li>Design & engineering applications</li>
                                            </ul>
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <script>
                            $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
                                if (!$(this).next().hasClass('show')) {
                                    $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
                                }
                                var $subMenu = $(this).next('.dropdown-menu');
                                $subMenu.toggleClass('show');


                                $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(
                                    e) {
                                    $('.dropdown-submenu .show').removeClass('show');
                                });

                                return false;
                            });

                        </script>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link services-link" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false" href="">Services
                        <span class="fas fa-plus"></span><i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-menu" id="dropdown-menu2">
                        <ul class="menu2">
                            <span class="dropdown-header">We are at your service</span>
                            <li><a class="dropdown-item" href=""><i class="fas fa-shipping-fast"></i>Delivery</a></li>
                            <li><a class="dropdown-item" href=""><i class="fas fa-shield-alt"></i>Guarantee</a></li>
                            <li><a class="dropdown-item" href=""><i class="fas fa-medkit"></i>Product service</a></li>
                            <li><a class="dropdown-item" href=""><i class="fas fa-comments-dollar"></i>Pay any way</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Vacancy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">About</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
                <li class="nav-item nav-item-last">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">About</a>
                </li>
            </ul>
            <script>
                $('#dropdown').on('show.bs.dropdown', function() {
                    $(this).find('#dropdown-menu').first().stop(true, true).slideDown();
                });
                $('#dropdown').on('hide.bs.dropdown', function() {
                    $(this).find('#dropdown-menu').first().stop(true, true).slideUp();
                });

            </script>
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
                <a href=""><span>Help</span></a>
                <a href=""><span>Shop</span></a>
                <a href=""><span>Home</span></a>
                <a href=""><span>Sign Up</span></a>
                <a href=""><span>Vacancy</span></a>
                <a href=""><span>About us</span></a>
            </div>

            <div class="links">
                <h6>HELPFUL LINKS</h6>
                <a href=""><span>FAQs</span></a>
                <a href=""><span>Support</span></a>
                <a href=""><span>Services</span></a>
                <a href=""><span>Privacy Policy</span></a>
                <a href=""><span>Terms & Condition</span></a>
            </div>

            <div class="contact">
                <h6 id="Hcontact">CONTACT</h6>
                <i class="fas fa-map-marker-alt"><span><span class="inspan">&nbsp;</span>9, Ziyolilar str., M.Ulugbek
                        district, Tashkent city</span></i>
                <i class="fas fa-phone-alt"><span><span class="inspan" style="margin-right: 12px;">&nbsp;</span>+998 71
                        289-99-99</span></i>
                <span><span class="inspan" style="margin-right: 28px;">&nbsp;</span>+998 71 289-00-00</span>
                <i class="far fa-envelope"><span><span class="inspan"
                            style="margin-right: 12px;">&nbsp;</span>info@gmail.com</span></i>
            </div>

            <div class="google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.638337995809!2d69.33237581479513!3d41.33847710698992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDIwJzE4LjUiTiA2OcKwMjAnMDQuNCJF!5e0!3m2!1sen!2s!4v1595501098110!5m2!1sen!2s"
                    width="400" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>

        </div>



        <div class="copyright">
            All Right Reserved 2020, @LaptopShop
        </div>
    </div>

    <!--    Hover navbar element to show dropdown menu   -->
    <script>
        function resize() {

            if (window.innerWidth >= 992) {

                function toggleDropdown(e) {
                    const _d = $(e.target).closest('.dropdown'),
                        _m = $('#dropdown-menu', _d);
                    setTimeout(function() {
                        const shouldOpen = e.type !== 'click' && _d.is(':hover');
                        _m.toggleClass('show', shouldOpen);
                        _d.toggleClass('show', shouldOpen);
                        $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
                    }, e.type === 'mouseleave' ? 300 : 0);
                }

                function toggleSubMenu(e) {
                    const _d = $(e.target).closest('.dropdown-submenu'),
                        _m = $('.dropdown-menu', _d);
                    setTimeout(function() {
                        const shouldOpen = e.type !== 'click' && _d.is(':hover');
                        _m.toggleClass('show', shouldOpen);
                        _d.toggleClass('show', shouldOpen);
                        $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
                    }, e.type === 'mouseleave' ? 300 : 0);
                }
                $('body')
                    .on('mouseenter mouseleave', '.dropdown', toggleDropdown)
                    .on('click', '#dropdown-menu a', toggleDropdown)
                    .on('click', '#dropdown-menu2 a', toggleDropdown)
                    .on('mouseenter mouseleave', '.dropdown-submenu', toggleSubMenu)
                    .on('click', '.dropdown-menu a', toggleSubMenu);
            }
        }
        resize();
        $(window).resize(resize);

    </script>

</body>

</html>
