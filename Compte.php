<?php
// - Créer Une classe Compte caractérisée par son solde et un code qui est incrémenté lors de sa création ainsi que son propriétaire qui représente un client.
//  - Définir à l’aide des propriétés les méthodes d’accès aux différents attributs de la classe
//  - Définir un constructeur permettant de créer un compte en indiquant son propriétaire.

class Compte
{
    /* Attributs */
    private $solde;
    private $code;
    private $client;

 //*Définir un constructeur permettant d’initialiser tous les attributs
    public function __construct($newsolde = 0, $newcode = 0 ,$newclient)
    {
        $this->setSolde($newsolde);
        $this->setCode($newcode);
        $this->setClient($newclient);
    }


    /**
     * Get the value of Solde
     *
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of Solde
     *
     * @param mixed Solde
     *
     * @return self
     */
    public function setFirstName($solde)
    {

        if (is_numeric($solde))

        $this->solde = $solde;

        return $this;
    }

    /**
     * Get the value of Code
     *
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of Code
     *
     * @param mixed code
     *
     * @return self
     */
    public function setCode($code)
    {
            if(is_numeric($code))
        $this->code = $code + 1;

        return $this;
    }

    /**
     * Get the value of Client
     *
     * @return mixed
     */
    public function getClient()
    {
        $this->client;
    }

    public function setClient()
        {
                return Client.Afficher();

        }

        public function CreateCount()
        {
            $display = "<p> Solde : " . $this->solde . "</p>";
            $display .= "<p> Code : " . $this->code . "</p>";
            $display .= "<p> Client : " . $this->Client.Afficher() . "</p>";

            return $display;
        }
}
?>
