<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Hometerior place</title>
    <link rel="stylesheet" href="assests/css/contact.css">
    <link rel="stylesheet" href="assests/css/desktop-view/style.css">
    <link rel="stylesheet" href="assests/css/mobile-view/style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=GFS+Neohellenic&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=GFS+Neohellenic&family=Lato:wght@300;900&display=swap" rel="stylesheet">
    <script defer src="assests/Js/nav.js"></script>
    
</head>
<body>
     
<?php require("views/partials/nav.php") ?>

<?php require("views/partials/hero.php") ?>
    <section class="content-wrapper"><div class="info-section"><h2>Ask for our help <a href="https://wa.link/tg5cfj"><button class="btn">Request a Consultation</button></a></h2> <p>Request a personalized interior design for your apartment</p> <p>In order to craft your dream interior design, we kindly request that you provide us with some essential information. By sharing these details, we can tailor our services to meet your specific needs and preferences, ensuring a truly personalized experience.</p></div> 
        <div class="contact-section">
            <form action="mailto:ContactUs@hometerior.com" method="post" enctype="text/plain">
                <label >Name:</label>
                <input type="text" name="name"><br> <br>
                <label>E-mail:</label>
                <input type="text" name="mail"><br> <br>
                <label >Message:</label>
                <textarea> q </textarea><br><br>
                <i class="fas fa-check-circle "></i>
                <i class="fas fa-exclamation-circle "></i>
                <input class="btn" type="submit" value="Send">
                <input class="btn" type="reset" value="Reset">
            </form>
        </div></section>

</body>

<?php require("views/partials/foot.php");?>
</html>