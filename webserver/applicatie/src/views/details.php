<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flatnix - Movie Details</title>
    <?php
        include 'src/utils/head.php';
    ?>
</head>
<body class="movie-details-body">
    <?php
      include 'src/utils/navbar.php';
    ?>
    <div class="container">
        <div class="split">
            <div class="center-content">
                <img src="img/poster_skyfall.jpg">
            </div>
            <div class="flex-column gap-2vh padding-2vw">
                    <h2>James Bond: Skyfall</h2>
                    <p>When James Bond's (Daniel Craig's) latest assignment goes gravely wrong and Agents around the world are exposed, MI6 is attacked, forcing (M Dame Judi Dench) to relocate the agency. These events cause her authority and position to be challenged by Gareth Mallory (Ralph Fiennes), the new Chairman of the Intelligence and Security Committee. With MI6 now compromised from both inside and out, M is left with one ally she can trust: Bond. 007 takes to the shadows, aided only by field agent, Miss Eve Moneypenny (Naomie Harris), following a trail to the mysterious Tiago Rodriguez, a.k.a. Raoul Silva (Javier Bardem), whose lethal and hidden motives have yet to reveal themselves.</p>
                    <ul>
                        <li><b>Director:</b></li>
                        <li><b>Cast:</b></li>
                        <li><b>Year:</b></li>
                        <li><b>Duration:</b></li>
                    </ul>
                    <a href="/player">
                        <button>Watch Movie</button>
                    </a>
            </div>
        </div>
    </div>
    <?php
        include 'src/utils/footer.php';
    ?>
</body>
</html>
