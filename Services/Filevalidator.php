<?php

declare(strict_types=1);

namespace App\Services;

use App\Exception\FileException;

/**
 * FileValidator
 * 
 * cette class permet de controller les fichiers, elle déclenche une FileException en cas d'erreur
 */
class FileValidator
{
    /**
     * __construct
     *
     * @param  array $files - les fichiers à controller
     * @return void
     */
    public function __construct(array $files = [])
    {
        $this->files = $files;
    }

    /**
     * fileError - Si la clef error d'au moins un fichier est differente de 0 (UPLOAD_ERR_OK) alors une exception sera levée
     *
     * @return void
     */
    public function fileError()
    {
        foreach ($this->files['error'] as $error) {
            if ($error !== UPLOAD_ERR_OK) {
                throw new  FileException(message: "Votre fichier n'est pas valide");
                return;
            }
        }
    }
    /**
     * maxfiles - Déclenche une FileException si le nombre de fichier authorisé n'est pas valide
     *
     * @param  int $min - 1 fichier minimum par defaut
     * @param  int $max - 3 fichier max par defaut
     * @return void
     */
    public function maxfiles(int $min = 1, int $max = 3): void
    {
        if (count($this->files['name']) < $min || count($this->files['name']) > $max) {
            throw new FileException(message: "Le nombre de fichiers doit être compris compris entre $min et $max");
        }
    }

    /**
     * isAllowed - déclenche une FileException si au moins un fichier n'est pas du bon type
     *
     * @param  array $mimTypes - tableau de mime type valide
     * @return void
     */
    public function isAllowed(array $mimTypes = ['image/jpg', 'image/jpeg', 'image/webp', 'image/png']): void
    {
        foreach ($this->files['type'] as $type) {
            if (!in_array($type, $mimTypes)) {
                throw new  FileException(message: "Seule les fichier jpg, jpeg, webp et png sont authorisé !");
                return;
            }
        }
    }

    /**
     * maxSize - Déclenche une FileExeption si au moins un fichier est superieur au poids definit
     *
     * @param  int $maxMo - la taille maximum d'un fichier en Mo (1 mo par defaut)
     * @return void
     */
    public function maxSize(int $maxMo = 1): void
    {
        $maxOctets = $maxMo * 1024 * 1024;
        foreach ($this->files['size'] as $size) {
            if ($size > $maxOctets) {
                throw new  FileException(message: "Chaque fichier ne peut excéder $maxMo Mo");
                return;
            }
        }
    }
}
