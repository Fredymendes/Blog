<!--Navigator-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.php">Blog Printer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php?action=about">Qui je suis ?</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php?action=register">Deviens un printer !</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php?action=forms">Contactez-moi !</a></li>
                <?php if(!isset($_SESSION['pseudo'])) :?>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php?action=connect">Connexion</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" 
                        <?php 
                            if ($_SESSION['role'] == 1): ?> href="index.php?action=profil" <?php endif; ?>>
                        <?= $_SESSION['pseudo']; ?>
                    </a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php?action=deconnexion">Deconnexion</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>