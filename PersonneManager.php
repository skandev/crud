<?php
namespace App;

class PersonneManager
{
    private $db;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb($db)
    {
        $this->db = $db;
    }

    /**
     * @param $id integer
     * @return Personne
     */
    public function get($id)
    {

    }

    /**
     * @return Personne[]
     */
    public function getList()
    {

    }

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

    public function update(Personne $personne)
    {

    }

    public function delete(Personne $personne)
    {

    }

}
