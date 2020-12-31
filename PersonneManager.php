<?php
namespace App;

/**
 * Class PersonneManager
 */
class PersonneManager
{

    //------------------------------------------------------------------------------------------- $db
    private $db;

    //----------------------------------------------------------------------------------- __construct
    public function __construct($db)
    {
        $this->setDb($db);
    }

    //------------------------------------------------------------------------------------------- add
    /**
     * @param Personne $personne
     */
    public function add(Personne $personne)
    {
        $q = $this->db->prepare('INSERT INTO personne (id, nom, prenom) VALUES (:id, :nom, :prenom) ');
        $q->bindValue(':id', $personne->getId());
        $q->bindValue(':nom', $personne->getNom());
        $q->bindValue(':prenom', $personne->getPrenom());
        $q->execute();
    }

    //---------------------------------------------------------------------------------------- delete
    public function delete(Personne $personne)
    {

    }

    //------------------------------------------------------------------------------------------- get
    /**
     * @param $id integer
     * @return Personne
     */
    public function get($id)
    {

    }

    //--------------------------------------------------------------------------------------- getList
    /**
     * @return Personne[]
     */
    public function getList()
    {

    }

    //----------------------------------------------------------------------------------------- setDb
    public function setDb($db)
    {
        $this->db = $db;
    }

    //---------------------------------------------------------------------------------------- update
    public function update(Personne $personne)
    {

    }

}

