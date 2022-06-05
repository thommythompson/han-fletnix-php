<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fletnix - Home</title>
    <?php
        include 'src/utils/includes/head.php';
    ?>
</head>
<body>
    <?php
      include 'src/utils/includes/navbar.php';
    ?>
    <header>
        <div class="text-center">
            <a href="/">
                <h1 class="title">FLETNIX</h1>
            </a>
            <div>
                <h3>"All your favorite movies in one place"<h3>
            </div>
            <div >
                <a href="/overview">
                    <button class="zoom-animation">Watch Movies</button>
                </a>
            </div>
        </div>
    </header>
    <div class="container">
        <section>
            <div class="split">
                <div>
                    <a href="/details">
                        <img src="/img/wallpaper_the_godfather.jpeg">
                    </a>
                </div>
                <div>
                    <a href="/details">
                        <h2>The godfather</h2>
                    </a>
                    <p>The aging patriarch of an organized crime dynasty in postwar New York City transfers control of his clandestine empire to his reluctant youngest son.</p>
                    <a href="/details">
                        <button>Watch Movie</button>
                    </a>
                </div>
            </div>
        </section>
        <section>
            <div class="split">
                <div>
                    <a href="/details">
                        <img src="/img/wallpaper_maverick.jpeg">
                    </a>
                </div>
                <div>
                    <a href="/details">
                        <h2>Topgun</h2>
                    </a>
                    <p>After more than thirty years of service as one of the Navy's top aviators, Pete Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging the advancement in rank that would ground him.</p>
                    <a href="/details">
                        <button>Watch Movie</button>
                    </a>
                </div>
            </div>
        </section>
        <section>
            <div class="split">
                <div>
                    <a href="/details">
                        <img src="/img/wallpaper_f_and_f.webp">
                    </a>
                </div>
                <div>
                    <a href="/details">
                        <h2>Fast & Furious</h2>
                    </a>
                    <p>Los Angeles police officer Brian O'Conner must decide where his loyalty really lies when he becomes enamored with the street racing world he has been sent undercover to destroy.</p>
                    <a href="/details">
                        <button>Watch Movie</button>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <?php
        include 'src/utils/includes/footer.php';
    ?>
</body>
</html>
