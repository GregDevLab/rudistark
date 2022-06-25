<?php

namespace App\Models;

class UploadsModel extends Model
{
    protected $id;

    protected $file_location;

    protected $created_at;

    protected $annonces_id;

    public function __construct()
    {
        $this->table = 'uploads';
    }

    public function upload(array $file_location, int $annonces_id, string $created_at)
    {
        return $this->requete("INSERT INTO $this->table (file_location, annonces_id, created_at) VALUES (?, ?, ?)", [$file_location, $annonces_id, $created_at]);
    }

    // public function upload()
    // {
    //     return $this->requete("INSERT INTO $this->table (file_location, annonces_id, created_at) VALUES (?, ?, ?)", [$this->file_location, $this->annonces_id, $this->created_at]);
    // }

    // public function getUploadId(string $id)
    // {
    //     return $this->requete(
    //         "SELECT annonces.id as annonce_id, users.id as user_id, users.email as user_email, annonces.title as annonce_title, annonces.description as annonce_description, annonces.created_at as annonce_created_at, annonces.price as annonce_price, annonces.category_id as annonce_category_id, annonces.user_id as annonce_user_id, annonces.status as annonce_status, annonces.created_at as annonce_created_at, annonces.updated_at as annonce_updated_at, annonces.deleted_at as annonce_deleted_at, uploads.id as upload_id, uploads.file_location as upload_file_location, uploads.created_at as upload_created_at, uploads.annonces_id as upload_annonces_id 
    //         FROM $this->table
    //         INNER JOIN users ON annonces.user_id = users.id 
    //         INNER JOIN uploads ON annonces.id = uploads.annonces_id 
    //         WHERE uploads.id = ?",
    //         [$id]
    //     )->fetch();
    // }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of annonces_id
     */
    public function getAnnonces_id()
    {
        return $this->annonces_id;
    }

    /**
     * Set the value of annonces_id
     *
     * @return  self
     */
    public function setAnnonces_id($annonces_id)
    {
        $this->annonces_id = $annonces_id;

        return $this;
    }

    /**
     * Get the value of file_location
     */
    public function getFile_location()
    {
        return $this->file_location;
    }

    /**
     * Set the value of file_location
     *
     * @return  self
     */
    public function setFile_location($file_location)
    {
        $this->file_location = $file_location;

        return $this;
    }
}
