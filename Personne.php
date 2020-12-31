<?php
namespace App;

/**
 * Class Personne
 * @package App
 */
class Personne
{

    //------------------------------------------------------------------------------------------- $db
    private $id;

    //------------------------------------------------------------------------------------------ $nom
    private $nom;

    //--------------------------------------------------------------------------------------- $prenom
    private $prenom;

    //----------------------------------------------------------------------------------- __construct
    public function __construct($data)
    {
        $this->hydrate($data);
    }

    //---------------------------------------------------------------------------------------- getId
    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    //---------------------------------------------------------------------------------------- getNom
    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    //------------------------------------------------------------------------------------- getPrenom
    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    //--------------------------------------------------------------------------------------- hydrate
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

    //----------------------------------------------------------------------------------------- setId
    /**
     * @param $id integer
     */
    public function setId($id)
    {
        $this->id = (int) $id;
    }

    //---------------------------------------------------------------------------------------- setNom
    /**
     * @param $nom string
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    //------------------------------------------------------------------------------------- setPrenom
    /**
     * @param $prenom string
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

}

