<h1>Liste des annonces</h1>

<div id="annonces">
    <a href="/annonces/ajouter">Ajouter une annonce</a>
    <article>
        <div class="container">
            <div class="well well-sm">
                <strong>Affichage</strong>
                <div class="btn-group">
                    <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                        </span>Liste</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th"></span>Grilles</a>
                </div>
            </div>
            <?php foreach ($annonces as $annonce) : ?>
                <div id="products" class="row list-group">
                    <div class="item  col-xs-4 col-lg-4">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="./img/img.jpg" alt="" />
                            <div class="caption">
                                <h4 class="group inner list-group-item-heading">
                                    <?= $annonce->titre ?></h4>
                                <p class="group inner list-group-item-text">
                                    <?= $annonce->description ?></p>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <p class="lead">
                                            <?= $annonce->price ?></p>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <a class="btn btn-success" href="/annonces/lire/<?= $annonce->id ?>">Voir l'annonce</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </article>
</div>