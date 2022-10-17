<!DOCTYPE html>
<html lang="en">

<head>
    <title>Landing Page</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8" />
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php include("../html/header.php") ?>
    </header>

    <main>
        <div id="contact-usContainer">

            <div class="center">
                <div id="astronauta">
                    <img src="../images/astronauta.png">
                </div>
            </div>

            <div class="center">
                <div id="formContainer">

                    <h1>Contact us</h1>
                    <input type="text" id="name" placeholder="Your Name">
                    <input type="text" id="lastname" placeholder="Your Last Name">
                    <input type="text" id="email" placeholder="Your Email">
                    <textarea id="message" placeholder="Message"></textarea>

                </div>
            </div>

        </div>
    </main>

    <footer>
        <?php include("../html/footer.php") ?>
    </footer>
</body>

</html>