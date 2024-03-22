<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/styles-header.css">
    <link rel="icon" type="image/x-icon" href="public/img/torindoLogo.jpg">
    <title><?= $title ?></title>
    <meta property="og:title" content> 
    <meta property="og:description" content="The whole set of solutions provided to create greater value for customers. Torindo Jaya Persada strives to commit in “Serving Better Support”. To achieve this, we will constantly work to be a reliable partner who adds real value to the businesses of our customers. The ultimate goal for us is to achieve consistent business growth andprofitability. We accomplish this by developing lasting partnerships with
our customers, taking advantage of the latest technological advances and
being a good corporate citizen."> 
    <meta property="og:type" content="website"> 
    <meta property="og:image" content="public/img/torindoLogo.jpg"> 
    <meta property="og:url" content="https://www.torindojaya.com"> 
    <meta property="og:site_name" content="Torindo Jaya Persada"> 

</head>
<body>
    <!-- <div class="blocker">
            <h1>We're very sorry..</h1>
            <p>Please view this website with a laptop, tablet, or similar devices for best experience.</p>
            <p>Please set your device to landscape to keep view this website.</p>
            <p class="warning">*Some visual features won't be optimised</p>
    </div> -->
    <header>
        <nav>
            <div class="profile">
                <img src="public/img/torindoLogo.jpg" alt="">
                <h1 class="logo">Torindo Jaya <br>Persada</h1>
            </div>
            <?php
                $currentPage = $page;
                function isCurrentPage($currentPage, $link)
                {
                    return $currentPage === $link;
                }
            ?>
            <ul>
                <li><a href="index"<?= isCurrentPage($currentPage, "index") ? ' class="active"' : '' ?>>Home</a></li>
                <li><a href="about"<?= isCurrentPage($currentPage, "about") ? ' class="active"' : '' ?>>About Us</a></li>
                <li><a href="products"<?= isCurrentPage($currentPage, "products") ? ' class="active"' : '' ?>>Our Product</a></li>
                <li><a href="contact"<?= isCurrentPage($currentPage, "contact") ? ' class="active"' : '' ?>>Contact Us</a></li>
            </ul>
            <a href="#" class="nav-button" onclick="toggleNav()">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </a>
        </nav>

        <script>
            function toggleNav() {
                var navLinks = document.querySelector('nav ul');
                navLinks.classList.toggle('active');
            }
        </script>
    </header>

    <main>
        <div class="hero">
            <img src= "public/img/<?= $heroimg ?>.png" alt="">