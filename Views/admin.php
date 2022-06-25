<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
</head>

<body>
    <header>
        <!-- NAV FINAL  -->
        <div class="container-fluid px-0">
            <nav class="navbar navbar-expand-md navbar-light bg-white p-0">
                <a class="navbar-brand mr-4" href="/"><strong>MES-ANNONCES.TEST</strong></a>

                <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Annonces<span class="fa fa-angle-down"></span></a>
                            <div class="dropdown-menu" id="dropdown-menu1" aria-labelledby="navbarDropdown1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row d-flex tab">
                                                <div class="fa-icon text-center">
                                                    <span class="fas fa-plus fa-bounce"></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a class="dropdown-item" href="/annonces/ajouter">
                                                        <h6 class="mb-0">Nouvelle annonces</h6>
                                                        <small class="text-muted">Créer votre annonce</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row d-flex tab">
                                                <div class="fa-icon text-center">
                                                    <span class="fa fa-bullhorn"></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a class="dropdown-item" href="#">
                                                        <h6 class="mb-0">Annonces récentes</h6>
                                                        <small class="text-muted">Les dernières annonces</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row d-flex tab">
                                                <div class="fa-icon text-center">
                                                    <span class="fa fa-newspaper "></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a class="dropdown-item" href="/annonces#annonces">
                                                        <h6 class="mb-0">Les annonces</h6>
                                                        <small class="text-muted">Toutes les annonces</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row d-flex tab">
                                                <div class="fa-icon text-center">
                                                    <span class="fa fa-desktop"></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a class="dropdown-item" href="#">
                                                        <h6 class="mb-0">Les catégories</h6>
                                                        <small class="text-muted">Nos catégories</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row d-flex tab">
                                                <div class="fa-icon text-center">
                                                    <span class="fa fa-globe"></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a class="dropdown-item" href="#">
                                                        <h6 class="mb-0">Annonces vedettes</h6>
                                                        <small class="text-muted">Voir le top des annonces</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row d-flex tab">
                                                <div class="fa-icon text-center">
                                                    <span class="fa fa-bolt"></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a class="dropdown-item" href="#">
                                                        <h6 class="mb-0">Booster</h6>
                                                        <small class="text-muted">Remonter votre annonces</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Compte<span class="fa fa-angle-down"></span></a>
                            <div class="dropdown-menu" id="dropdown-menu2" aria-labelledby="navbarDropdown2">
                                <div class="container">
                                    <div class="row">
                                        <?php if (isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) : ?>
                                            <?php if (isset($_SESSION['user']['roles']) && in_array('ROLE_ADMIN', $_SESSION['user']['roles'])) : ?>
                                                <div class="col-md-6">
                                                    <div class="row d-flex tab">
                                                        <div class="fa-icon text-center">
                                                            <span class="fa fa-tools"></span>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <a class="dropdown-item" href="/admin">
                                                                <h6 class="mb-0">Administration</h6>
                                                                <small class="text-muted">Zone admin</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <div class="col-md-6">
                                                <div class="row d-flex tab">
                                                    <div class="fa-icon text-center">
                                                        <span class="fa fa-user"></span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a class="dropdown-item" href="/users/profil">
                                                            <h6 class="mb-0">Profil</h6>
                                                            <small class="text-muted">Gérer votre compte</small>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row d-flex tab">
                                                <div class="fa-icon text-center">
                                                    <span class="fa fa-sign-out"></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a class="dropdown-item" href="/users/logout">
                                                        <h6 class="mb-0">Déconnexion</h6>
                                                        <small class="text-muted">Fermer votre session</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-6">
                                            <div class="row d-flex tab">
                                                <div class="fa-icon text-center">
                                                    <span class="fa fa-lock"></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a class="dropdown-item" href="/users/login">
                                                        <h6 class="mb-0">Connexion</h6>
                                                        <small class="text-muted">Se connecter à votre compte</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row d-flex tab">
                                                <div class="fa-icon text-center">
                                                    <span class="fa fa-sign-in"></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a class="dropdown-item" href="/users/register">
                                                        <h6 class="mb-0">S'enregistrer</h6>
                                                        <small class="text-muted">Créer un compte</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact<span class="fa fa-angle-down"></span></a>
                            <div class="dropdown-menu" id="dropdown-menu3" aria-labelledby="navbarDropdown3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row d-flex tab">
                                                <div class="fa-icon text-center">
                                                    <span class="fa fa-paper-plane"></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a class="dropdown-item" href="#">
                                                        <h6 class="mb-0">Nous contacter</h6>
                                                        <small class="text-muted">Informations, support</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row d-flex tab">
                                                <div class="fa-icon text-center">
                                                    <span class="fa fa-feed"></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a class="dropdown-item" href="#">
                                                        <h6 class="mb-0">Feedback</h6>
                                                        <small class="text-muted">Opinions, plaintes</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row d-flex tab">
                                                <div class="fa-icon text-center">
                                                    <span class="fa fa-question"></span>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a class="dropdown-item" href="#">
                                                        <h6 class="mb-0">FAQ</h6>
                                                        <small class="text-muted">Questions et réponses</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="header">
                <div class="uk-position-top">
                </div>
                <div class="text-box">
                    <h1 class="heading-primary">
                        <span class="heading-primary-main">Heading Primary Main</span>
                        <span class="heading-primary-sub">The secondary heading</span>
                    </h1>
                    <a href="/annonces" class="btn btn-white btn-animated">Voir la liste des annonces</a>
                </div>
            </div>
    </header>

    <div class="container">
        <?php if (!empty($_SESSION['erreur'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['erreur'];
                unset($_SESSION['erreur']); ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($_SESSION['message'])) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['message'];
                unset($_SESSION['erreur']); ?>
            </div>
        <?php endif; ?>
        <?= $contenu ?>
    </div>

    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit-icons.min.js"></script>

    <script src="/js/scripts.js"></script>
</body>

</html>