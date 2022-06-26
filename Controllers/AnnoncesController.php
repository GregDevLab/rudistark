<?php

namespace App\Controllers;

use App\Core\Form;
use App\Exception\FileException;
//elles sont toutes dans le même namespace
use App\Models\{AnnoncesModel, UploadsModel, CategoriesModel};
// use App\Models\UploadsModel;
// use App\Models\CategoriesModel;
use App\Services\FileValidator;
use App\Services\FlashMessage;
use Exception;

class AnnoncesController extends Controller
{
    /**
     * Cette méthode affichera une page listant toutes les annonces de la base de données
     *
     * @return void
     */
    public function index()
    {
        // On va instancié le modèle corresponde à la table 'annonces'
        $annoncesModel = new AnnoncesModel;

        // On va chercher toutes les annonces actives
        $annonces = $annoncesModel->findBy(['actif' => 1]);

        // On génère la vue
        $this->render('annonces/index', compact('annonces'), 'default');
    }

    /**
     * Affiche 1 annonce
     *
     * @param int $id Id de l'annonce
     * @return void
     */
    public function lire(int $id)
    {
        // On instancie le modèle
        $annoncesModel = new AnnoncesModel;


        // On va chercher 1 annonce
        $annonce = $annoncesModel->find($id);

        // On envoie à la vue
        $this->render('annonces/lire', compact('annonce'), 'default');
    }

    /**
     * Ajouter une annonce
     *
     * @return void
     */
    public function ajouter()
    {


        // On vérifie si l'utilisateur est connecté
        if (isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {
            // On instancie le model Categories
            $categoriesModel = new CategoriesModel;
            // On va chercher une catégorie
            $categories = $categoriesModel->findAll();

            // On instancie notre modèle Annonces
            $annonce = new AnnoncesModel;





            // L'utilisateur est connecté
            // On vérifie si le formulaire est complet
            if (Form::validate($_POST, ['titre', 'description', 'price', 'category_id'], $_FILES, ['file'])) {
                // Le formulaire est complet
                // On se protège contre les failles XSS
                // strip_tags, htmlentities, htmlspecialchars
                $titre = strip_tags($_POST['titre']);
                $description = strip_tags($_POST['description']);
                $price = strip_tags($_POST['price']);
                $category_id = strip_tags($_POST['category_id']);

                // On hydrate
                $annonce->setTitre($titre)
                    ->setDescription($description)
                    ->setUsers_id($_SESSION['user']['id'])
                    ->setPrice($price)
                    ->setCategory_id($category_id);

                // On enregistre
                $annonce->create();
                // On récupère l'id de la dernière annonce
                $lastId = $annonce->getLastId();
                $check = array_column($lastId, 'id');
                $lastId = end($check);
                $annonces_id = $lastId;

                if (isset($_FILES["file"])) {
                    // je passe le tableau de fichier au constructor de FileValidator
                    $filesValidator = new FileValidator($_FILES["file"]);

                    //A la premiere erreur rencontrée le script s'arrete et un message flash apparait (voir dossier services)
                    try {

                        $filesValidator->fileError();
                        $filesValidator->maxfiles();
                        $filesValidator->isAllowed();
                        $filesValidator->maxSize();
                    } catch (FileException $e) {

                        FlashMessage::addFlash('fileExcetion', $e->getMessage());
                        header('Location: /annonces/ajouter');
                        exit;
                    }
                    // CODE TEST BY GREG

                    // $file_location = array_filter($_FILES['file']['name']); //Use something similar before processing files.
                    // // Count the number of uploaded files in array
                    // $total_count = count($_FILES['file']['name']);
                    // // Loop through every file
                    // for ($i = 0; $i < $total_count; $i++) {
                    //     //The temp file path is obtained
                    //     $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
                    //     //A file path needs to be present
                    //     if (
                    //         $tmpFilePath != ""
                    //     ) {
                    //         //Setup our new file path
                    //         $newFilePath = "../public/uploads/" . $_FILES['file']['name'][$i];
                    //         //File is uploaded to temp dir
                    //         if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    //             //Other code goes here
                    //         }
                    //     }
                    // }


                    // ORIGINAL CODE
                    // Paramètres de l'upload
                    $folderName = $_SESSION['user']['email'];
                    $newfilename = "../public/uploads/$folderName/";
                    $dirExist = is_dir($newfilename);
                    if (!$dirExist) {
                        mkdir("$newfilename");
                        chmod("$newfilename", 0755);
                    }

                    // On a reçu l'image
                    // On procède aux vérifications
                    // On vérifie toujours l'extension et le type mime
                    // $allowed = [
                    //     "jpg" => "image/jpg",
                    //     "png" => "image/png",
                    //     "jpeg" => "image/jpeg"
                    // ];


                    // Count total files
                    $countfiles = count($_FILES['file']['name']);
                    for ($i = 0; $i < $countfiles; $i++) {
                        $filename = $_FILES["file"]["name"][$i];
                        $filetype = $_FILES["file"]["type"];
                        $filesize = $_FILES["file"]["size"];

                        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                        // On vérifie l'absence de l'extension
                        // if (!array_key_exists($extension, $allowed) || !in_array($filetype, $allowed)) {
                        //     // Ici soit l'extension soit le type est incorrect
                        //     die("Erreur : Veuillez sélectionner un format de fichier valide.");
                        // }

                        // Le type est correct
                        // On limite a 1Mo
                        // if ($filesize > 1024 * 1024) {
                        //     die("Erreur : La taille du fichier est supérieure à 1Mo.");
                        // }

                        // On génère un nom de fichier unique
                        $newname = md5(uniqid());

                        // On génère le chemin complet
                        $targetFilePath = $newfilename . $newname . '.' . $extension;

                        if (!move_uploaded_file($_FILES["file"]["tmp_name"][$i], $targetFilePath)) {
                            die("Erreur : upload impossible.");
                        }

                        // On instancie le model Upload
                        $upload = new UploadsModel;
                        date_default_timezone_set('Europe/Paris');
                        $date = date('Y-m-d H:i:s');

                        $file_location = $_FILES['file']['tmp_name'][$i];
                        // On hydrate Uploads
                        $upload->setAnnonces_id($annonces_id)
                            ->setFile_location($file_location)
                            ->setCreated_at($date);
                        $upload->create();
                        // chmod($newfilename, 0644);
                    }
                }



                // Paramètres de la date
                // date_default_timezone_set('Europe/Paris');
                // $date = date('Y-m-d H:i:s');
                // // On récupère l'id de la dernière annonce
                // $lastId = $annonce->getLastId();
                // $check = array_column($lastId, 'id');
                // $lastId = end($check);
                // $annonces_id = $lastId;

                // // On hydrate Uploads
                // $upload->setAnnonces_id($annonces_id)
                //     ->setFile_location($file_location)
                //     ->setCreated_at($date);
                // $upload->create();


                // On redirige
                $_SESSION['message'] = "Votre annonce a été enregistrée avec succès";
                header('Location: /');
                exit;
            } else {
                // Le formulaire est incomplet
                $_SESSION['erreur'] = !empty($_POST) ? "L'annonce est incomplete" : '';
                $titre = isset($_POST['titre']) ? strip_tags($_POST['titre']) : '';
                $description = isset($_POST['description']) ? strip_tags($_POST['description']) : '';
                $price = isset($_POST['price']) ? strip_tags($_POST['price']) : '';
                $category_id = isset($_POST['category_id']) ? strip_tags($_POST['category_id']) : '';
                $file_location = isset($_FILES['file']['tmp_name']) ? strip_tags($_FILES['file']['tmp_name']) : '';
            }


            $form = new Form;
            $form->debutForm()
                ->ajoutLabelFor('category_id', 'Catégorie :')
                // On utilise array_column pour parcourir le tableau et trouver notre clé.
                ->ajoutSelect('category_id', array_column($categories, 'nom', 'id'), [
                    'value' => $category_id
                ])
                ->ajoutLabelFor('titre', 'Titre de l\'annonce :')
                ->ajoutInput('text', 'titre', [
                    'id' => 'titre',
                    'class' => 'form-control',
                    'value' => $titre
                ])
                ->ajoutLabelFor('description', 'Texte de l\'annonce')
                ->ajoutTextarea('description', $description, ['id' => 'description', 'class' => 'form-control'])
                ->ajoutLabelFor('price', 'Prix du produits :')
                ->ajoutInput('text', 'price', [
                    'id' => 'price',
                    'class' => 'form-control',
                    'value' => $price
                ])
                ->ajoutLabelFor('file', 'Image de l\'annonce :')
                ->addFile('file[]', [
                    'id' => 'file',
                    'class' => 'form-control',
                    'accept' => 'image/jpeg',
                    'value' => $file_location
                ])
                ->ajoutBouton('Ajouter', ['class' => 'btn btn-primary'])
                ->finForm();

            $this->render('annonces/ajouter', ['form' => $form->create(), 'categories' => $categoriesModel->findAll(), 'exception' => FlashMessage::getFlash('fileExcetion')], 'default');
        } else {
            // L'utilisateur n'est pas connecté
            $_SESSION['erreur'] = "Vous devez être connecté(e) pour accéder à cette page";
            header('Location: /users/login');
            exit;
        }
    }

    /**
     * Modifier une annonce
     *
     * @param int $id
     * @return void
     */
    public function modifier(int $id)
    {

        // On vérifie si l'utilisateur est connecté
        if (isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {
            // On instancie le model Categories
            $categoriesModel = new CategoriesModel;
            // On va chercher une catégorie
            $categories = $categoriesModel->findAll();
            // On va vérifier si l'annonce existe dans la base
            // On instancie notre modèle
            $annoncesModel = new AnnoncesModel;

            // On cherche l'annonce avec l'id $id
            $annonce = $annoncesModel->find($id);

            // Si l'annonce n'existe pas, on retourne à la liste des annonces
            if (!$annonce) {
                http_response_code(404);
                $_SESSION['erreur'] = "L'annonce recherchée n'existe pas";
                header('Location: /annonces');
                exit;
            }

            if ($annonce->users_id !== $_SESSION['user']['id']) {
                if (!in_array('ROLE_ADMIN', $_SESSION['user']['roles'])) {

                    $_SESSION['erreur'] = "Vous n'avez pas accès à cette page";
                    header('Location: /annonces');
                    exit;
                }
            }

            // On traite le formulaire
            if (Form::validate($_POST, ['titre', 'description', 'price', 'category_id'])) {
                // On se protège contre les failles XSS
                $titre = strip_tags($_POST['titre']);
                $description = strip_tags($_POST['description']);
                $price = strip_tags($_POST['price']);
                $category_id = strip_tags($_POST['category_id']);


                // On stocke l'annonce             
                $annonceModif = new AnnoncesModel;

                // On hydrate
                $annonceModif->setId($annonce->id)
                    ->setTitre($titre)
                    ->setDescription($description)
                    ->setPrice($price)
                    ->setCategory_id($category_id);

                // On met à jour l'annonce
                $annonceModif->update();

                // On redirige
                $_SESSION['message'] = "Votre annonce a été modifiée avec succès";
                header('Location: /');
                exit;
            }


            $form = new Form;

            $form->debutForm()
                ->ajoutLabelFor('category_id', 'Catégorie :', [
                    'class' => 'my-2'
                ])
                // On utilise array_column pour parcourir le tableau et trouver notre clé.
                ->ajoutSelect('category_id', array_column($categories, 'nom', 'id'), [
                    'value' => $annonce->category_id
                ])
                ->ajoutLabelFor('titre', 'Titre de l\'annonce :', [
                    'class' => 'my-2'
                ])
                ->ajoutInput('text', 'titre', [
                    'id' => 'titre',
                    'class' => 'form-control required',
                    'value' => $annonce->titre
                ])
                ->ajoutLabelFor('description', 'Texte de l\'annonce :', [
                    'class' => 'my-2'
                ])
                ->ajoutTextarea('description', $annonce->description, [
                    'id' => 'description',
                    'class' => 'form-control'
                ])
                ->ajoutLabelFor('price', 'Prix du produits :', [
                    'class' => 'my-2'
                ])
                ->ajoutInputPrice('text', 'price', [
                    'id' => 'price',
                    'class' => 'form-control',
                    'value' => $annonce->price . "€"
                ])
                ->ajoutBouton('Modifier', ['class' => 'btn btn-primary'])
                ->finForm();


            // On envoie à la vue
            $this->render('annonces/modifier', ['form' => $form->create()], 'default');
        } else {
            // L'utilisateur n'est pas connecté
            $_SESSION['erreur'] = "Vous devez être connecté(e) pour accéder à cette page";
            header('Location: /users/login');
            exit;
        }
    }
}
