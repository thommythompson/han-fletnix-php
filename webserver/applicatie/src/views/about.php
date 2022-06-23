<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fletnix - About</title>
    <?php
        include 'src/utils/includes/head.php';
    ?>
</head>
<body>
    <?php
      include 'src/utils/includes/navbar.php';
    ?>
    <div class="container split">
        <div>
            <div>
                <h2>About Fletnix</h2>
                <p>Lorem Ipsum</p>
            </div>
            <div>
                <h2>Contact Info</h2>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                </ul>
            </div>
        </div>

        <div class="flex-column">
            <h2>Send us a message</h2>
            <form method="POST">
                <input type="email" id="inputEmail" placeholder="Email address" required autofocus />
                <input type="text" id="inputTitle" placeholder="Title" required />
                <textarea id="inputMessage" placeholder="Message" required></textarea>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Send Message
                </button>
            </form>
        </div>
    </div>
    <?php
        include 'src/utils/includes/footer.php';
    ?>
</body>
</html>
