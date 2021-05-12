<!DOCTYPE html>
<html>
    <head>
        <title>UTOPIA</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="shortcut icon" href="images/logo_notext.png">
	    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <header>
            <?php include('navbar.php'); ?>
            <?php 
                @$activePage = $_REQUEST['active'];
                if($activePage == 'home'){
                    include('banner.php');
                }else{
                    include('section_banner.php');
                }
            ?>
            <hr>
        </header>
        <main>
            <?php
                switch($activePage){
                    case 'Adidas':
                        include('adidas.php');
                        break;
                    case 'Nike':
                        include('nike.php');
                        break;
                    case 'Jordan':
                        include('jordan.php');
                        break;
                    case 'Supreme':
                        include('supreme.php');
                        break;
                    case 'All':
                        include('all.php');
                        break;
                    case 'Contact':
                        include('contact.php');
                        break;
                    default:
                        include('home.php');
                        break;
                }
            ?>
        </main>
        <footer>
            <div class="container">
                <h2>UTOPIA</h2>
                <p>Social media</p>
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-square"></i> Facebook</a></li>
                        <li><a href="#"><i class="fab fa-youtube-square"></i> Youtube</a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                        <li><a href="#"><i class="fab fa-twitter-square"></i> Twitter</a></li>
                    </ul>
                </div>
            </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    </body>
</html>
