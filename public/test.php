<?php

// VERIFICATION FUNCTION EXISTE

// function functionAvailable($func = "")
// {
//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//     if (function_exists($func)) {
//         echo "$func function is available.\n";
//     } else {
//         echo "$func function is not available.\n";
//     }
//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// }

// functionAvailable('is_array'); // return true;



// // Compléter le code de la fonction functionAvailable prenant en paramètre une chaîne de caractères $func.
// // La fonction devra retourner :
// // - true si $func est une fonction interne à PHP ou définie par l'utilisateur
// // - false dans tous les autres cas
//===================================================

// VERIFICATION SI UNE PIZZA EST VEG
// class Pizza
// {
//     public static $ingredientsNotVeg = ['poulet', 'mouton', 'boeuf', 'porc'];
//     public $ingredients;

//     public function isVeg()
//     {
//         //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//         $notVeg = Pizza::$ingredientsNotVeg;

//         $diffs = array_diff($this->ingredients, $notVeg);

//         return sizeof($diffs) == sizeof($this->ingredients);
//         //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//     }

//     public function getIngredients()
//     {
//         return $this->ingredients;
//     }

//     public function setIngredients(array $ingredients)
//     {
//         $this->ingredients = $ingredients;
//     }
// }

// $pizza = new Pizza();
// $pizza->setIngredients(['champignon', 'fromage', 'mouton']);
// $pizza->isVeg(); // La méthode isVeg() retournera false

// var_dump($pizza->isVeg());

// // Complétez le code de la fonction isVeg afin de savoir si une pizza est végétarienne ou pas
// // La fonction doit retourner :
// // - true si une pizza est végétarienne
// // - false si une pizza n'est pas végétarienne


// // // La liste des ingrédients pouvant faire en sorte qu'une pizza n'est pas végétarienne est contenue dans la propriété $ingredientsNotVeg de la classe Pizza. Cette propriété est un tableau de chaine de caractères. A noter que la casse doit être respectée.






// date_default_timezone_set('America/Los_Angeles');

// function addMonthToDate(DateTime $date, $nbMonth)
// {
//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//     $intervall = new DateInterval('P' . $nbMonth . 'M');
//     $newDate->add($intervall);
//     return $newDate;
//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// }

// // exemple d'appel : addMonthToDate(new DateTime('2016-01-01'), 3)->format() => la date retournée devra être : 2016-04-01

// Rédigez le code de la fonction addMonthToDate qui reçoit deux arguments $date et $nbMonth.
// La fonction permet d'ajouter un nombre de mois à une date donnée.
// Elle devra retourner la nouvelle date.



// Rédiger le code de la fonction reception en ajoutant deux arguments devant être typés (type hinting):
// - un tableau
// - un objet de type stdClass

// function reception(array $myArray, stdClass $myObj)
// {
// }



// class Pizza
// {

//     public $price;

//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------

// function priceFormat()
// {
//     return number_format($this->price, $decimals = 2, $decimal_separator = ",", $thousands_separator = " ");
// }


//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// }

// $pizza = new Pizza();
// $pizza->price = 124515;

// // Compléter le code de la classe Pizza afin d'y ajouter une méthode priceFormat.
// // Celle-ci devra afficher le prix au format suivant :
// // - Deux chiffres après la virgule
// // - Le séparateur des décimales devra être une virgule
// // - Le séparateur des milliers doit être un espace
// // Exemple : "455 124 515,00"


// function removeHtml($chaine)
// {
//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// return strip_tags($chaine);
//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// }

// $string = "Hi! <script src='http://www.evilsite.com/bad_script.js'></script>It's a good day!";
// removeHtml($string); // La fonction devra retourner : "Hi! It's a good day!"

// // Rédigez le code de la fonction removeHtml qui reçoit en argument le paramètre $chaine.
// // La fonction devra retourner le paramètre en supprimant toutes les balises HTML.




// class User
// {

//     protected $firstname;

//     public function __construct($firstname)
//     {
//         $this->firstname = $firstname;
//     }

//     public function getFirstname()
//     {
//         return $this->firstname;
//     }

//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//     function reply(User $destinataire, $message)
//     {
//         return 'message from ' . $this->firstname . ' to ' . $destinataire->getFirstname() . ' : ' . $message;
//     }
//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// }

// $foo = new User('foo');
// $bar = new User('bar');
// echo $bar->reply($foo, 'hello world!') . '<br>'; //la ligne suivante affichera : message from bar to foo : hello world!

// // Compléter le code de la classe User en y ajoutant une méthode reply.
// // Celle-ci devra avoir deux arguments :
// // - Le destinataire : un autre User
// // - Le message

// // La méthode devra retourner la chaîne de caractères suivante : message from firstname de l'expéditeur to firstname du destinataire : message

// function numberOfArgument($argument = '')
// {
//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------

//     return sizeof(func_get_args()) > 2;
//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// }

// numberOfArgument('foo'); // return false

// // Compléter le code de la fonction numberOfArgument
// // Cette fonction devra retourner :
// // - true si le nombre d'arguments qui lui sont passés est strictement supérieur à 2
// // - false dans tous les autres cas


// class User
// {


//     public function __construct($firstname, $lastname)
//     {
//         $this->firstname = $firstname;
//         $this->lastname = $lastname;
//     }

//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//     public function getProperties()
//     { {
//            return [
//                 "firstname" => $this->firstname,
//                 "lastname" => $this->lastname
//             ];
//         }
//     }
//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// }

// Compléter le code de la classe User en y ajoutant la méthode getProperties.
// Celle-ci devra retourner un tableau associatif contenant les noms des propriétés de la classe User en clé et les valeurs associées aux propriétés comme valeur des clés.
// Les propriétés de la class User ont volontairement été masquées.

// function switchArrayKeysValues($tab)
// {
//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//     return array_flip($tab);
//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// }

// $graph = array(
//     "color" => "red",
//     "size"  => "medium",
//     "shape" => "sphere"
// );

// switchArrayKeysValues($graph); // La fonction switchArrayKeysValues() retournera le tableau suivant : ['red' => 'color', 'medium' => 'size', 'sphere' => 'shape']

// // Compléter le code de la fonction switchArrayKeysValues qui reçoit un tableau en argument $tab.
// // La fonction devra retourner un nouveau tableau dont les clefs sont devenues les valeurs et les valeurs les clefs.

// function ifIsEven($x)
// {
//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//     return $x % 2 == 0;
//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// }

// echo ifIsEven(2) . '<br>';

// // Compléter le code de la fonction ifIsEven
// // Elle détermine si le nombre $x qui lui est passé en argument est pair. Elle devra retourner :
// // - true si $x est pair
// // - false si $x est impair


// class Pizza
// {

//     public $name;

//     public $price;

//     public function afficher()
//     {
//         //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//         return $this->name . ' ' . ':' . ' ' . '$' . $this->price;
//         //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//     }
// }

// $pizza = new Pizza();
// $pizza->name = "4 fromages";
// $pizza->price = 12;
// echo $pizza->afficher();  // Cette méthode affichera : 4 fromages : $12

// // Complétez le code de la méthode afficher. Celle-ci devra retourner les propriétés name et price de l'objet Pizza en les séparant par " : "(sans les guillemets) et en ajoutant un $ avant le prix.

// // Exemple
// // Si la propriété nom vaut 4 fromages et la propriété prix vaut 12
// // La méthode afficher devra retourner : 4 fromages : $12


// class Single
// {
//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//     public static function getInstance()
//     {

//         if (is_null(self::$_instance)) {
//             self::$_instance = new Single();
//         }

//         return self::$_instance;
//     }
//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// }


// // Rédigez le code de la classe Single en ajoutant une méthode public et statique getInstance
// // Vous devez implémenter le design pattern Singleton. La méthode getInstance devra donc toujours retourner la même instance de la classe Single.



// class Circle
// {
//     public $radius;

//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//     function __construct($radius)
//     {
//         $this->radius = $radius;
//     }
//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------

// }

// $variable = new Circle(10);

// // Complétez le code de la classe Circle pour que son constructeur attribue à la propriété $radius l'unique argument qu'il reçoit en paramètre.



// $array1 = array("banana", "pear", "apple", "orange");
// $array2 = array("yellow", "orange", "green");

// function commonValue($tab = [], $tabTwo = [])
// {
//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------

//     $result =  array_intersect($tab, $tabTwo);
//     return $result;


//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// }

// commonValue($array1, $array2); // return ["yellow"];
// var_dump(commonValue($array1, $array2));

// // Compléter le code de la fonction commonValue ayant deux tableau $tab et $tabTwo en paramètre.
// // La fonction devra retourner un tableau rassemblant les valeurs communes du tableau $tab et $tabTwo.


// abstract class Mere
// {
//     private function getValue()
//     {
//     }

//     abstract function sayHello();
// }

// //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// class Fille extends Mere
// {
//     public function sayHello()
//     {
//     }
// }
// //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// $object = new Fille();

// // Complétez le code suivant afin de créer une classe Fille héritant de la classe abstraite Mere. Il doit être possible d'instancier un objet de classe Fille.


// function fusionner($word, $otherWord)
// {
//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//     return $word . " " . $otherWord;
//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// }

// echo fusionner('Hello', 'world!') . '<br>';

// // Complétez le code de la fonction fusionner qui reçoit en argument deux paramètres : $word et $otherWord.
// // La fonction concatène les deux paramètres en une seule chaîne de caractères où les deux paramètres sont séparés par un espace.

// function extractLastElement(array $array)
// {
//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//     $lastElement = $array[count($array) - 1];
//     echo $lastElement;
//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// }

// $stack = array("Julien", "Ludovic", "Sebastien", "Mickael");
// var_dump(extractLastElement($stack));
// //exmple d'appel extractLastElement($stack); =>devra retourner "Mickael"

// // Rédigez le code de la fonction extractLastElement qui reçoit en argument le paramètre $array.
// // La fonction devra retourner le dernier élément du tableau $array.


// function conversionToFloat($chaine = "")
// {
//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//     $toFloat = floatval($chaine);
//     return $toFloat;
//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// }

// conversionToFloat("12.5"); //return 12.5
// conversionToFloat("lorem"); //return 0
// var_dump(conversionToFloat("12.5"));
// var_dump(conversionToFloat("lorem"));

// // Rédigez le code de la fonction conversionToFloat prenant en paramètre la variable $chaine.
// // La fonction devra retourner $chaine converti en float

// //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// $query = "SELECT * FROM products WHERE visibility = 1";
// //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------

// // Rédiger une requête SQL permettant de sélectionner toutes les colonnes de la table products dont la colonne visibility est égale à 1.
// // Voici le nom des colonnes :
// // - id
// // - title
// // - visibility


// class User
// {

//     static $country;

//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//     public static function getCountry()
//     {
//         return 'Australie';
//     }


//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// }

// // Compléter le code de la classe User en y ajoutant une méthode static getCountry.
// // Celle-ci devra retourner la valeur de la propriété static $country.

// $actions = [
//     'first' => function () {
//         return "Hello";
//     },
//     'second' => function () {
//         return "3WA!";
//     }
// ];


// //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// foreach ($actions as $key => $value) {
//     echo $key . $value;
// }
// //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------

// // Affichez la phrase ci-dessous avec un simple echo en utilisant le tableau $actions:
// // Hello 3WA!


// class User
// {
//     protected $firstname;

//     public function __construct($firstname)
//     {
//         $this->firstname = $firstname;
//     }

//     //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
//     public function __toString()
//     {
//         return $this->firstname;
//     }
//     //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
// }

// $user = new User('foo');
// echo $user; // le code affichera : foo

// // Compléter le code de la classe User en y ajoutant une méthode magique permettant d'afficher un objet User à partir d'un simple echo.
// // La méthode devra afficher le firstname de l'utilisateur.






function auto_copyright(DateTime $date)
{
    //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
    $date = date("Y");
    return $date;
    //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
}

auto_copyright(new DateTime("2015-03-02")); // La fonction devra retourner : 2015
var_dump(auto_copyright(new DateTime("2015-03-02")));

// Compléter le code de la fonction copyright dont l'argument $date est un objet de la class DateTime.
// La fonction doit renvoyer l'année de la date spécifiée au format suivant : YYYY



// IMAGE

 // if (
                //     isset($_FILES["file"]) && $_FILES["file"]["error"] === 0
                // ) {
                //     $folderName = $_SESSION['user']['id'];
                //     $targetDir = "public/img/$folderName/";
                //     $dirExist = is_dir($targetDir);
                //     if (!$dirExist) {
                //         mkdir("$targetDir");
                //         chmod("$targetDir", 0755);
                //     }
                //     $fileName = basename($_FILES['file']['name']);
                //     $targetFilePath = $targetDir . $fileName;
                //     // On a reçu l'image
                //     // On procède au vérification
                //     // On vérifie toujours l'extension et le type mime
                //     $allowed = [
                //         "jpg" => "file/jpeg",
                //         "png" => "file/png",
                //         "jpeg" => "file/jpeg"
                //     ];

                //     $filesize = $_FILES["file"]["size"];

                //     // On vérifie l'extension
                //     $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));



                //     // On vérifie l'absence de l'extension
                //     if (!array_key_exists($fileType, $allowed)) {
                //         die("Erreur : Veuillez sélectionner un format de fichier valide.");
                //     }


                //     // Le type est correct
                //     // On vérifie la taille du fichier
                //     if ($filesize > 1024 * 1024) {
                //         die("Erreur : La taille du fichier est supérieure à 1Mo.");
                //     }


                //     // On déplace le fichier temporaire vers le dossier de destination avec le nom généré
                //     if (!move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                //         die("Erreur : upload impossible.");
                //     }

                //     // On interdit l'accès au fichier via l'url
                //     chmod($targetFilePath, 0644);
                // }