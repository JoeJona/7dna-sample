<?php 
include ('code.php');
if ($_SESSION["loggedin"] == 0) {
     header("location: signin.php");
     exit();
 } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style-1.css">
    <link rel="stylesheet" href="./css/style-2.css">
    <link rel="stylesheet" href="./css/owl.carousel.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/aos.css">
    <link rel="stylesheet" href="./css/drop.css"> 
</head>
<body>
    <header>
    <div style="margin-left: 300px;">
            </div>
            <div class="wrapper">
            <ul>
                    <li class="current"><a href="rvu.php">HOME</a></li>
            <h4 style="position: absolute; right: 10px; top: 20px;"><a href="logout.php">Log Out</a></h4>
            </div>
</header><br>
    <section id="showcase">
        <article style="margin-left: 200px;" id="main-col">
            <h1 style="color: black; margin-top: 20px">Welcome</h1> 
                <ul id="services">
                    <li>
                        <p>
                            What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
<br>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
<br>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
            
        </li></ul></article>
        </div>
    </section>
    <footer style="position: absolute; bottom:0px; width: 100%; text-align: center;">
        <p>Copyright &copy; 2023</p>
    </footer>

    <script src="jquery3.4.1.min.js"></script>
    <script src="owl.carousel.min.js"></script>
    <script src="main.js"></script>
    <script src="aos.js"></script>
</body>
</html>