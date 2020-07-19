<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/layout.css">

    <!--        font awesome 5.13.1    -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/v4-shims.css">

    <!--        Bootstrap 4.5     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!--        Jquery 3.5.1    -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

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
                <a class="nav-link text-white link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                   href="">SHOP&nbsp;NOW<span class="fas fa-plus"></span></a>

                <div class="dropdown-menu">
                    <ul class="menu1-mob">
                        <span class="dropdown-header">Types of laptops depending on usage</span>
                        <li><a class="dropdown-item" href=""><img class="icons" src="/css/images/work-icon.png">Work</a></li>
                        <li><a class="dropdown-item" href=""><img class="icons" src="/css/images/everyday-icon.png">Everyday Use</a></li>
                        <li><a class="dropdown-item" href=""><img class="icons" src="/css/images/gaming-icon.png">Gaming</a></li>
                        <li><a class="dropdown-item" href=""><img class="icons" src="/css/images/student-icon.png">Student</a></li>
                        <li><a class="dropdown-item" href=""><img class="icons" src="/css/images/creativty-icon.png">Creativity & Entertainment</a></li>
                    </ul>

                    <div class="menu1-desk">
                        <ul class="laptop-types-list" id="laptop-types-list">
                            <h5 class="dropdown-header">Types of laptops depending on usage</h5>
                            <li><a class="dropdown-item work-laptop" id="work-laptop" href=""><img class="icons" src="/css/images/work-icon.png">Work</a></li>

                            <li><a class="dropdown-item everyday-laptop" id="everyday-laptop" href=""><img class="icons" src="/css/images/everyday-icon.png">Everyday Use</a></li>

                            <li><a class="dropdown-item gaming-laptop" id="gaming-laptop" href=""><img class="icons" src="/css/images/gaming-icon.png">Gaming</a></li>

                            <li><a class="dropdown-item student-laptop" id="student-laptop" href=""><img class="icons" src="/css/images/student-icon.png">Student</a></li>

                            <li><a class="dropdown-item creativity-laptop" id="creativity-laptop" href=""><img class="icons" src="/css/images/creativty-icon.png">Creativity & Entertainment</a></li>
                        </ul>
                        <div class="menu-image">
                            <img class="logo-image" id="logo-image" src="/css/images/logo.png" alt="logo">
                            <img class="work-laptop-image" id="work-laptop-image" src="/css/images/work-laptop.jpg" alt="">
                            <img class="everyday-laptop-image" id="everyday-laptop-image" src="/css/images/everyday-laptop.jpg" alt="">
                            <img class="gaming-laptop-image" id="gaming-laptop-image" src="/css/images/gaming-laptop.png" alt="">
                            <img class="student-laptop-image" id="student-laptop-image" src="/css/images/student-laptop.jpg" alt="">
                            <img class="creativity-laptop-image" id="creativity-laptop-image" src="/css/images/creativity-laptop.png" alt="">
                        </div>
                        <div class="menu-description">
                            <ul id="defoult-description">
                                <li>Stay Home and Save the World</li>
                            </ul>
                            <ul id="work-description">
                                <li>Videoconferencing</li>
                                <li>Spreadsheets & reports</li>
                                <li>Competitive Research</li>
                            </ul>
                            <ul id="everyday-description">
                                <li>Keep up with friends & family</li>
                                <li>Watch videos online</li>
                                <li>Internet Surfing</li>
                            </ul>
                            <ul id="gaming-description">
                                <li>MMORPGs & 1st-person shooters</li>
                                <li>Graphics-intensive gaming</li>
                                <li>Immersive sound & graphics</li>
                            </ul>
                            <ul id="student-description">
                                <li>Rugged & durable</li>
                                <li>Homework & reports</li>
                                <li>Videoconferencing</li>
                            </ul>
                            <ul id="creativity-description">
                                <li>Photo / video editing</li>
                                <li>Music / sound mixing</li>
                                <li>Design & engineering applications</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="">Services
                    <span class="fas fa-plus"></span></a>
                <div class="dropdown-menu">
                    <ul class="menu2-mob">
                        <span class="dropdown-header">We are at your service</span>
                        <li><a class="dropdown-item" href=""><i class="fas fa-shipping-fast"></i>Delivery</a></li>
                        <li><a class="dropdown-item" href=""><i class="fas fa-shield-alt"></i>Guarantee</a></li>
                        <li><a class="dropdown-item" href=""><i class="fas fa-medkit"></i>Product service</a></li>
                        <li><a class="dropdown-item" href=""><i class="fas fa-comments-dollar"></i>Pay any way</a></li>
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
            <i class="fas fa-map-marker-alt"><span><span class="inspan">&nbsp;</span>9, Ziyolilar str., M.Ulugbek district,
                    Tashkent city</span></i>
            <i class="fas fa-phone-alt"><span><span class="inspan">&nbsp;</span>+998 71 289-99-99</span></i>
            <i class="far fa-envelope"><span><span class="inspan">&nbsp;</span>info@gmail.com</span></i>
        </div>
    </div>

    <div class="copyright">
        All Right Reserved 2020, @OnlineShop
    </div>
</div>

<!--    Hover navbar element to show dropdown menu   -->
<script>
    if (window.innerWidth >= 992) {
        function toggleDropdown(e) {
            const _d = $(e.target).closest('.dropdown'),
                _m = $('.dropdown-menu', _d);
            setTimeout(function () {
                const shouldOpen = e.type !== 'click' && _d.is(':hover');
                _m.toggleClass('show', shouldOpen);
                _d.toggleClass('show', shouldOpen);
                $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
            }, e.type === 'mouseleave' ? 300 : 0);
        }
        $('body')
            .on('mouseenter mouseleave', '.dropdown', toggleDropdown)
            .on('click', '.dropdown-menu a', toggleDropdown);
    }
</script>

<!--    Script for animating images and description in dropdown-menu on hover   -->
<script>
                        
    $(document).ready(function(){
        $("#laptop-types-list").mouseenter(function()
        {
            $("#defoult-description")
            .animate({opacity: '0'}, {duration: 2000});
            
            $("#logo-image").animate
            ({
                opacity: '0'
                }, { duration: 2000
            });
        });

        $("#laptop-types-list").mouseleave(function()
        {
            $("#defoult-description").animate
            ({
                opacity: '1'
                }, { duration: 1200
            });
            $("#logo-image").animate
            ({
                opacity: '1'
                }, { duration: 1200
            });
        });

        $("#work-laptop").mouseenter(function()
        {
            $("#work-laptop-image").show(1000).animate
            ({
                opacity: '1'
                }, { duration: 1200, queue: false 
            });
            $("#work-description").show(1000).animate
            ({
                opacity: '1'
                }, { duration: 1200, queue: false 
            });
        });

        $("#work-laptop").mouseleave(function()
        {
            $("#work-laptop-image").animate
            ({
                opacity: '0'
                }, { duration: 1200, queue: false 
            });
            $("#work-description").animate
            ({
                opacity: '0'
                }, { duration: 1200, queue: false 
            });
        });

        $("#everyday-laptop").mouseenter(function()
        {
            $("#everyday-laptop-image").show(1000).animate
            ({
                opacity: '1'
                }, { duration: 1200, queue: false 
            });
            $("#everyday-description").show(1000).animate
            ({
                opacity: '1'
                }, { duration: 1200, queue: false 
            });
        });

        $("#everyday-laptop").mouseleave(function()
        {
            $("#everyday-laptop-image").animate
            ({
                opacity: '0'
                }, { duration: 1200, queue: false 
            });
            $("#everyday-description").animate
            ({
                opacity: '0'
                }, { duration: 1200, queue: false 
            });
        });


        $("#gaming-laptop").mouseenter(function()
        {
            $("#gaming-laptop-image").show(1000).animate
            ({
                opacity: '1'
                }, { duration: 1200, queue: false 
            });
            $("#gaming-description").show(1000).animate
            ({
                opacity: '1'
                }, { duration: 1200, queue: false 
            });
        });

        $("#gaming-laptop").mouseleave(function()
        {
            $("#gaming-laptop-image").animate
            ({
                opacity: '0'
                }, { duration: 1200, queue: false 
            });
            $("#gaming-description").animate
            ({
                opacity: '0'
                }, { duration: 1200, queue: false 
            });
        });

        $("#student-laptop").mouseenter(function()
        {
            $("#student-laptop-image").show(1000).animate
            ({
                opacity: '1'
                }, { duration: 1200, queue: false 
            });
            $("#student-description").show(1000).animate
            ({
                opacity: '1'
                }, { duration: 1200, queue: false 
            });
        });

        $("#student-laptop").mouseleave(function()
        {
            $("#student-laptop-image").animate
            ({
                opacity: '0'
                }, { duration: 1200, queue: false 
            });
            $("#student-description").animate
            ({
                opacity: '0'
                }, { duration: 1200, queue: false 
            });
        });

        $("#creativity-laptop").mouseenter(function()
        {
            $("#creativity-laptop-image").show(1000).animate
            ({
                opacity: '1'
                }, { duration: 1200, queue: false 
            });
            $("#creativity-description").show(1000).animate
            ({
                opacity: '1'
                }, { duration: 1200, queue: false 
            });
        });

        $("#creativity-laptop").mouseleave(function()
        {
            $("#creativity-laptop-image").animate
            ({
                opacity: '0'
                }, { duration: 1200, queue: false 
            });
            $("#creativity-description").animate
            ({
                opacity: '0'
                }, { duration: 1200, queue: false 
            });
        });
    
    });
    </script>

</body>
</html>
