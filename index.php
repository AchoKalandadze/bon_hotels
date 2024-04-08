<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bon Hotels</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <?php include "./variables.php" ?>
</head>
<body>
    <header class="header" id="header">
        <div class="container">
            <div class="header-flex">
                <img src="./assets/images/Logo.svg" alt="Logo">
                <nav>
                    <ul class="navigation">
                        <?php 
                        foreach($headerNavContents as $elem){
                            echo '<li class="our-hotel"><a href=" '.$elem['link'] . ' " class="nav-link"> '.$elem['text'] . ' </a>
                            <nav>
                                <ul class="inside-nav" id="inside-nav">';
                            foreach ($elem['nav'] as $elem1){
                                echo '<li><a href="#" class="nav-link">'.$elem1.'</a></li>';

                            }
                            echo '</ul>
                            </nav>
                        </li>' ;
                        }
                        ?>
                        <!-- <li class="our-hotel"><a href="#first-section" class="nav-link">Our Hotel</a>
                            <nav>
                                <ul class="inside-nav" id="inside-nav">
                                    <li><a href="#" class="nav-link">elem 1</a></li>
                                    <li><a href="#" class="nav-link">elem 2</a></li>
                                    <li><a href="#" class="nav-link">elem 3</a></li>
                                </ul>
                            </nav>
                        </li>
                        <li><a href="#second-section" class="nav-link">Rooms & Rates</a></li>
                        <li><a href="#third-section" class="nav-link">Facilities</a></li>
                        <li><a href="./newspage.php" class="nav-link">Contact Us</a></li> -->
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="first-section" id="first-section">
            <div class="first-section-content">
                <h1 class="main-title">WELCOME TO BON HOTEL</h1>
                <p class="description">Good people. Good thinking. Good feeling.</p>
                <a href="#" class="button">EXPLORE</a>
            </div>
        </section>
        <section class="second-section" id="second-section">
            <div class="container">
                <h2 class="secondary-title">Rooms & Rates</h2>
                <div class="rooms-gallery">
                    <?php foreach($variables as $variable){
                    
                         echo '<div class="card">
                            <img src="' . $variable['img'] . '" alt="' . $variable['img_alt'] . '">
                            <div class="overlay"></div>
                            <div class="card-content">
                                <h3 class="card-title">' . $variable['card-title'] .  '</h3>
                                <a href="#" class="button button-small">'. $variable['button-small'] . '</a>
                            </div>
                        </div>' ;
                    }
                        
                    ?>

                    <!-- <div class="card">
                        <img src="./assets/images/1.jpg" alt="card-1">
                        <div class="overlay"></div>
                        <div class="card-content">
                            <h3 class="card-title">Standard Twin Room</h3>
                            <a href="#" class="button button-small">Check Rates</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./assets/images/2.jpg" alt="card-2">
                        <div class="overlay"></div>
                        <div class="card-content">
                            <h3 class="card-title">Standard Room</h3>
                            <a href="#" class="button button-small">Check Rates</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./assets/images/3.jpg" alt="card-3">
                        <div class="overlay"></div>
                        <div class="card-content">
                            <h3 class="card-title">Standard View Room</h3>
                            <a href="#" class="button button-small">Check Rates</a>
                        </div>
                    </div>
                    <div class="card"> -->
                        <!-- <img src="./assets/images/4.jpg" alt="card-4">
                        <div class="overlay"></div>
                        <div class="card-content">
                            <h3 class="card-title">Deluxe Room</h3>
                            <a href="#" class="button button-small">Check Rates</a>
                        </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </section>
        <section class="third-section" id="third-section">
            <div class="container">
                <div class="contact-us">
                    <h2 class="secondary-title">Get a room already!</h2>
                    <a href="#" class="button button-bot">Book Now</a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <a href="./index.html">
                    <img src="./assets/images/footer-logo.svg" alt="footer-logo">
                </a>
                <nav>
                    <ul class="footer-navigation">
                        <li>
                            <a href="#" class="footer-nav-link">Our Hotels</a>
                        </li>
                        <li>
                            <a href="#" class="footer-nav-link">Our Conferencing</a>
                        </li>
                        <li>
                            <a href="#" class="footer-nav-link">Our Company</a>
                        </li>
                        <li>
                            <a href="#" class="footer-nav-link">Hotel Design</a>
                        </li>
                        <li>
                            <a href="#" class="footer-nav-link">Careers</a>
                        </li>
                    </ul>
                </nav>

                <div class="footer-text">
                    <p>Bon Hotels Head Office</p>
                    <a href="tel:+27 434 344 432">+27 434 344 432</a>
                    <a href="mailto:info@bonhotels.com">info@bonhotels.com</a>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>