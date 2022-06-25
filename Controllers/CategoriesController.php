<?php

namespace App\Controllers;

use App\Core\Form;
use App\Models\CategoriesModel;

class CategoriesController extends Controller
{
    /**
     * Cette méthode affichera une page listant toutes les catégories de la base de données
     *
     * @return void
     */
    public function index()
    {
        // On va instancié le modèle corresponde à la table 'categories'
        $categoriesModel = new CategoriesModel;

        // On va chercher toutes les catégories
        $categories = $categoriesModel->findAll();

        // On génère la vue
        $this->render('categories/index', compact('categories'));
    }

    /**
     * Affiche une catégorie
     *
     * @param int $id ID de la catégorie
     * @return void
     */
    public function lire(int $nom)
    {
        // On instancie le modèle
        $categoriesModel = new CategoriesModel;

        // On va chercher 1 annonce
        $categorie = $categoriesModel->find($nom);

        // On envoie à la vue
        $this->render('categories/lire', compact('categorie'));
    }

    /**
     * Ajouter une catégorie
     *
     * @return void
     */
    public function ajouter()
    {
        // On vérifie si l'utilisateur est connecté
        if (isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {
            // L'utilisateur est connecté
            // On vérifie si le formulaire est complet
            if (Form::validate($_POST, ['nom'])) {
                // Le formulaire est complet
                // On se protège contre les failles XSS
                // strip_tags, htmlentities, htmlspecialchars
                $nom = strip_tags($_POST['nom']);

                // On instancie notre modèle
                $categorie = new CategoriesModel;

                // On hydrate
                $categorie->setNom($nom);

                // On enregistre
                $categorie->create();

                // On redirige
                $_SESSION['message'] = "Votre catégorie a été enregistrée avec succès";
                header('Location: /');
                exit;
            } else {
                // Le formulaire est incomplet
                $_SESSION['erreur'] = !empty($_POST) ? "L'enregistrement est incomplet" : '';
                $nom = isset($_POST['nom']) ? strip_tags($_POST['nom']) : '';
            }

            $form = new Form;

            $form->debutForm()
                ->ajoutLabelFor('nom', 'Nom de la Catégorie :')
                ->ajoutInput('text', 'nom', [
                    'id' => 'nom',
                    'class' => 'form-control',
                    'value' => $nom
                ])
                ->ajoutBouton('Ajouter', ['class' => 'btn btn-primary'])
                ->finForm();

            $this->render('categories/ajouter', ['form' => $form->create()]);
        } else {
            // L'utilisateur n'est pas connecté
            $_SESSION['erreur'] = "Vous devez être connecté(e) pour accéder à cette page";
            header('Location: /users/login');
            exit;
        }
    }

    /**
     * Modifier une catégorie
     *
     * @param int $id
     * @return void
     */
    public function modifier(int $id)
    {

        // On vérifie si l'utilisateur est connecté
        if (isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {
            // On va vérifier si la catégorie existe dans la base
            // On instancie notre modèle
            $categoriesModel = new CategoriesModel;

            // On cherche la catégorie avec l'id $id
            $categorie = $categoriesModel->find($id);

            // Si la catégorie n'existe pas, on retourne à la liste des catégories
            if (!$categorie) {
                http_response_code(404);
                $_SESSION['erreur'] = "La catégorie recherchée n'existe pas";
                header('Location: /categories');
                exit;
            }

            if ($_SESSION['user']['id']) {
                if (!in_array('ROLE_ADMIN', $_SESSION['user']['roles'])) {

                    $_SESSION['erreur'] = "Vous n'avez pas accès à cette page";
                    header('Location: /categories');
                    exit;
                }
            }


            // On traite le formulaire
            if (Form::validate($_POST, ['nom'])) {
                // On se protège contre les failles XSS
                $nom = strip_tags($_POST['nom']);

                // On stocke la catégorie
                $categorieModif = new categoriesModel;

                // On hydrate
                $categorieModif->setId($categorie->id)
                    ->setNom($nom);

                // On met à jour la catégorie
                $categorieModif->update();

                // On redirige
                $_SESSION['message'] = "Votre catégorie a été modifiée avec succès";
                header('Location: /');
                exit;
            }

            $form = new Form;

            $form->debutForm()
                ->ajoutLabelFor('nom', 'Nom de la catégorie :')
                ->ajoutInput('text', 'nom', [
                    'id' => 'nom',
                    'class' => 'form-control',
                    'value' => $categorie->nom
                ])
                ->ajoutBouton('Modifier', ['class' => 'btn btn-primary'])
                ->finForm();

            // On envoie à la vue
            $this->render('categories/modifier', ['form' => $form->create()]);
        } else {
            // L'utilisateur n'est pas connecté
            $_SESSION['erreur'] = "Vous devez être connecté(e) pour accéder à cette page";
            header('Location: /users/login');
            exit;
        }
    }
}
