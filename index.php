<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/script.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bildterapihuset</title>
    </head>
    <body id="body">
        <div class="all-pages">
            <div class="main-page-container">
                <div class="main-page-cover">
                    <div class="hamburger-toggle" id="toggle-hamburger" onclick="toggleHamburger()"></div>
                    <div class="hamburger-menu" id="hamburger-menu">
                        <div class="mobile-navbar-header">
                            <div class="close-hamburger" onclick="toggleHamburger()"></div>
                        </div>
                        <div class="mobile-navbar-link" onclick="window.location = '#second-page'; toggleHamburger();">UPPDRAG</div>
                        <div class="mobile-navbar-link" onclick="window.location = '#third-page'; toggleHamburger();">OSS</div>
                        <div class="mobile-navbar-link" onclick="window.location = '#fourth-page'; toggleHamburger();">HITTA HIT</div>
                    </div>
                    <nav id="navbar">
                        <a class="navbar-link" href="#second-page">UPPDRAG</a>
                        <a class="navbar-link" href="#third-page">OSS</a>
                        <a class="navbar-link" href="#fourth-page">HITTA HIT</a>
                    </nav>
                    <img alt="Logo" class="logo-img" id="logo-img" src="img/logo.svg">
                </div>
            </div>
            <div id="second-page" class="second-page">
                <div class="second-page-box">
                    <div class="box-header">
                        <i class="material-icons box-icon">person</i>
                        <h2 class="header-title">Individ</h2>
                    </div>
                    <div class="box-content">
                        <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
                <div class="second-page-box">
                    <div class="box-header">
                        <i class="material-icons box-icon">group</i>
                        <h2 class="header-title">Grupp</h2>
                    </div>
                    <div class="box-content">
                        <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
                <div class="second-page-box">
                    <div class="box-header">
                        <i class="material-icons box-icon">comment</i>
                        <h2 class="header-title">Kurser</h2>
                    </div>
                    <div class="box-content">
                        <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
                <div class="second-page-box">
                    <div class="box-header">
                        <i class="material-icons box-icon">build</i>
                        <h2 class="header-title">Workshops</h2>
                    </div>
                    <div class="box-content">
                        <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
            </div>
            <div id="third-page" class="third-page">
                <div class="row-container">
                    <div class="row-box">
                        <img alt="Anna Karin Karlsson" class="terapi-img" src="img/anna.jpg">
                        <h3 class="row-box-title">Anna Karin Karlsson</h3>
                    </div>
                    <div class="row-box">
                        <img alt="Birgitta Englund" class="terapi-img" src="img/birgitta.jpg">
                        <h3 class="row-box-title">Birgitta Englund</h3>
                    </div>
                    <div class="row-box">
                        <img alt="Carin Salander" class="terapi-img" src="img/carin.jpg">
                        <h3 class="row-box-title">Carin Salander</h3>
                    </div>
                    <div class="row-box">
                        <img alt="Gunilla Berglund" class="terapi-img" src="img/gunilla-ny.jpg">
                        <h3 class="row-box-title">Gunilla Berglund</h3>
                    </div>
                </div>
                <div class="row-container">
                    <div class="row-box">
                        <img alt="Karin Egberg Thyme" class="terapi-img" src="img/karinet.png">
                        <h3 class="row-box-title">Karin Egberg Thyme</h3>
                    </div>
                    <div class="row-box">
                        <img alt="Katarina Sihlén" class="terapi-img" src="img/placeholder.png">
                        <h3 class="row-box-title">Katarina Sihlén</h3>
                    </div>
                    <div class="row-box">
                        <img alt="Ninne Lindgren" class="terapi-img" src="img/ninne.jpg">
                        <h3 class="row-box-title">Ninne Lindgren</h3>
                    </div>
                    <div class="row-box">
                        <img alt="Ulla Kiivuori" class="terapi-img" src="img/ulla.jpg">
                        <h3 class="row-box-title">Ulla Kiivuori</h3>
                    </div>
                </div>
            </div>
            <div id="fourth-page" class="fourth-page">
                <div class="left-side">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Brogatan+5,+903+21+Umeå&t=&z=13&ie=UTF8&iwloc=&output=embed">
                            </iframe>
                        </div>
                        <a href="https://www.crocothemes.net"></a>
                        <style>.mapouter{overflow:hidden;}.gmap_canvas {background:none!important;}</style>
                    </div>
                    <h3 class="mobile-contact-info-text">kgunillak@gmail.com</h3>
                </div>
                <div class="right-side">
                    <h1 class="fourth-page-title">Kontakt</h1>
                    <h3 class="contact-info-text">kgunillak@gmail.com</h3>
                    <h3 class="contact-info-text">Brogatan 5, 903 21 Umeå</h3>
                </div>
            </div>
        </div>
    </body>
</html>