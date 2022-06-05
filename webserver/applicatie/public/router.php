<?php

// Verdeelt HTTP requests naar de juiste PHP-views.
declare(strict_types=1);

session_start();

require_once 'config/bootstrap.php';

/*
`$_SERVER['REQUEST_URI']` is de volledige URL die binnenkomt op de webserver bij het request, vanaf het pad.
Dus bij 'http://localhost/pad/naar/pagina?naam=Piet' is het `'/pad/naar/pagina?naam=Piet'`.
Met `parse_url` zoals hieronder aangeroepen pak je alleen het pad-gedeelte.
Dus dan wordt het `'/pad/naar/pagina'`.
*/
$urlPad = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

/* INDEX */
if ($urlPad === '' || $urlPad === '/') {
  require_once 'src/views/index.php';
/* OVERVIEW */
} elseif ($urlPad === '/overview' || $urlPad === '/overview/') {
  require_once 'src/views/overview.php';
/* ABOUT */
} elseif ($urlPad === '/about' || $urlPad === '/about/') {
  require_once 'src/views/about.php';
/* DETAILS */
} elseif ($urlPad === '/details' || $urlPad === '/details/') {
  require_once 'src/views/details.php';
/* PLAYER */
} elseif ($urlPad === '/player' || $urlPad === '/player/') {
  require_once 'src/views/player.php';
/* PRIVACY */
} elseif ($urlPad === '/privacy' || $urlPad === '/privacy/') {
  require_once 'src/views/privacy.php';
/* SINGIN */
} elseif ($urlPad === '/signin' || $urlPad === '/signin/') {
  require_once 'src/views/signin.php';
/* SIGNUP */
} elseif ($urlPad === '/signup' || $urlPad === '/signup/') {
  require_once 'src/views/signup.php';
/* LOGOUT ROUTE */
} elseif ($urlPad === '/logout' || $urlPad === '/logout/') {
  require_once 'src/views/logout.php';
/* TEST ROUTE */
} elseif ($urlPad === '/test' || $urlPad === '/test/') {
  require_once 'src/views/test.php';
} else {
  /*
  Er is geen pagina opgevraagd in het HTTP-request.
  Ga ervan uit dat een bestand (zoals een stylesheet) is opgevraagd.
  */
  $isBestand = preg_match(
  /*
  Als het pad eindigt met `.css` of één van de andere door `|` gescheiden bestandsnaamextensies,
  is een geldig bestandstype opgevraagd.
  */
      '/\.(?:css|png|jpg|jpeg|svg|woff|woff2|ttf|otf|html|mp4|webm|ogm|ogv|ogg|mp3|webp)$/',
      $urlPad
  );
  if ($isBestand) {
    /*
    Geef PHP het signaal dat geen pagina maar een bestand opgevraagd is.
    PHP stuurt dan het bestand op naar de client.
    */
    return false;
  } else {
    // Het is een bekende pagina noch een geldig bestandstype.
    http_response_code(404);
    require_once 'src/views/404.php';
  }
}
