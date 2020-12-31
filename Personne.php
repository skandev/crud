<?php
namespace App;

class Personne
{
    private $id;
    private $nom;
    private $prenom;

    public function __construct($data)
    {
        $this->hydrate($data);
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param $id integer
     */
    public function setId($id)
    {
        $this->id = (int) $id;
    }

    /**
     * @param $nom string
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param $prenom string
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @param $data array
     */
    public function hydrate($data)
    {
        foreach($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if(method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

}
