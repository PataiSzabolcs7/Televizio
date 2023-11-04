<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">
            Televízió Shop
            <img src="./images/vecteezy_smart-tv-icon-on-transparent-background_17785091_454.svg" height="30" alt="TV logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="index.php?menu=home">Home</a>
                </li>
                <?php
                if ($_SESSION['login']) {
                    echo '
                        <li class = "nav-item">
                            <a class = "nav-link text-white' . ($menu == 'logout' ? ' active' : '') . '" href = "index.php?menu=logout">Kilépés</a>
                        </li>';
                } else {

                    echo '
                    <li class = "nav-item">
                        <a class = "nav-link text-white' . ($menu == 'login' ? ' active' : '') . '" href = "index.php?menu=login">Belépés</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link text-white' . ($menu == 'regisztracio' ? ' active' : '') . '" href = "index.php?menu=regisztracio">Regisztráció</a>
                    </li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>