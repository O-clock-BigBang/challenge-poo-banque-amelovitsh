<?php
// * Définir une classe Employé caractérisée par les attributs :
// CIN, Nom, Prénom,.

class Client
{
/* Attributs */
    private $cin;
    private $firstName;
    private $lastName;
    private $phone;

     //*Définir un constructeur permettant d’initialiser tous les attributs
    public function __construct($newcin ='', $newfirstName ='', $newlastName = '', $newphone = '')
    {
        $this->setCin($newcin);
        $this->setFirstName($newfirstName);
        $this->setLastName($newlastName);
        $this->setPhone($newphone);
    }


    // * Définir à l’aide des propriétés les méthodes d’accès aux différents attributs de la classe.
    /* getters & setters */

    /**
     * Get the value of CIN
     *
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set the value of Cin
     *
     * @param mixed Cin
     *
     * @return self
     */
    public function setCin($cin)
    {
        // un matricule ne peut contenir que des nombres, tirets ou espaces
        if(preg_match('/^[0-9 \-\a-zA-Z]*$/', $cin))
            $this->cin = $cin;

        return $this;
    }

    /**
     * Get the value of First Name
     *
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of First Name
     *
     * @param mixed firstName
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of Last Name
     *
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of Last Name
     *
     * @param mixed lastName
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of Phone
     *
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of Phone
     *
     * @param mixed phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
    // un telephone ne peut contenir que des nombres, tirets ou espaces ou +
    if(preg_match('/^[0-9 \-\+]*$/', $phone))
        $this->phone = $phone;

    return $this;

    }

    public function getHTMLData()
    {
        $display = "<p> CIN : " . $this->cin . "</p>";
        $display .= "<p> Nom complet : " . $this->firstName . " " . $this->lastName . "</p>";
        $display .= "<p> Phone : " . $this->phone . "</p>";
        return $display;
    }
}
