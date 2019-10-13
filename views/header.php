<main>
<nav class="navbar navbar-expand-lg fixed-top bg-primario">
            <div class="container">
                <div class="navbar-translate">
                <a class="navbar-brand" href="<?php echo BASE_URL; ?>">
                        <?php echo SITE_NAME; ?>
                </a>
                <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URL_PREFIX; ?>help">
                                <i class="fas fa-question"></i>
                                Ajuda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URL_PREFIX; ?>security">
                                <i class="fas fa-shield-alt"></i>
                                Segurança
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URL_PREFIX; ?>company">
                                <i class="far fa-building"></i>
                                Empresa
                            </a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL_PREFIX; ?>login">
                                    <i class="nc-icon nc-user-run"></i>
                                    Entrar
                                </a>
                        </li>
                    </ul>
                </div>
            </div>
</nav>