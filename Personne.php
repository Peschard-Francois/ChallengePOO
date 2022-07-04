<?php

class Personne
{
    private string $lastName;
    private string $firstName;
    private string $adress;
    private string $dateBirthday;

    public function __construct(string $lastName,string $firstName,string $adress,string $dateBirthday)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->adress = $adress;
        $this->dateBirthday = $dateBirthday;

    }

    public function displayIdentity(): string
    {
        return "Lastname : " . $this->lastName . "<br>" . " Firstname : " . $this->firstName . "<br>" . " Adresse : " . $this->adress . "<br>" .
         " Date d'anniverssaire : " . " " . $this->dateBirthday;
    }

    public function calculAge(): string
    {
        $aujourdhui = date("Y-m-d");
        $age = date_diff(date_create($aujourdhui),date_create($this->dateBirthday));
        return "Votre âge est de : " . $age->format('%y');
    }



    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getAdress(): string
    {
        return $this->adress;
    }

    /**
     * @return string
     */
    public function getDateBirthday(): string
    {
        return $this->dateBirthday;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param string $adress
     */
    public function setAdress(string $adress): void
    {
        $this->adress = $adress;
    }

    /**
     * @param string $dateBirthday
     */
    public function setDateBirthday(string $dateBirthday): void
    {
        $this->dateBirthday = $dateBirthday;
    }
}