<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/styles-header.css">
    <title><?= $title ?></title>
</head>
<body>
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
            <a href="#" class="nav-button"></a>
        </nav>
    </header>

    <main>
        <div class="hero">
            <img src= "public/img/<?= $heroimg ?>.png" alt="">