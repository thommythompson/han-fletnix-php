<?php

if (isset($_SESSION["id"])) {
    $fullname = $_SESSION['fullname'];

    echo <<<EOF
    <nav>
        <div class="container">
            <div>
                <a href="/">
                    <h2 class="title zoom-animation">FLETNIX</h2>
                </a>
            </div>
            <div>
                <a href="/overview">
                    <p class="menu-item">Movies</p>
                </a>
            </div>
            <div class="nav-spacer"></div>
            <div>
                <p class="color-white">Hello, {$fullname}</p>
            </div>
            <div>
                <a href="/logout">
                    <p class="menu-item">Logout</p>
                </a>
            </div>
        </div>
    </nav>
    EOF;
} else {
    echo <<<EOF
    <nav>
        <div class="container">
            <div>
                <a href="/">
                    <h2 class="title zoom-animation">FLETNIX</h2>
                </a>
            </div>
            <div>
                <a href="/overview">
                    <p class="menu-item">Movies</p>
                </a>
            </div>
            <div class="nav-spacer"></div>
            <div>
                <a href="/signin">
                    <p class="menu-item">Sign In</p>
                </a>
            </div>
            <div>
                <a href="/signup">
                    <p class="menu-item">Sign Up</p>
                </a>
            </div>
        </div>
    </nav>
    EOF;
}
