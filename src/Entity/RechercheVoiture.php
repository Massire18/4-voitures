<?php


namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class RechercheVoiture{

    /**
     * @Assert\LessThanOrEqual(propertyPath="maxAnnee", message="doit être plus petit que l'annee Max")
     */
    private $minAnnee;

    /**
     * @Assert\LessThanOrEqual(propertyPath="minAnnee", message="doit être plus grand que l'annee Min")
     */
    private $maxAnnee;


    public function getMinAnnee(){
        return $this->minAnnee;
    }

    public function getMaxAnnee(){
        return $this->maxAnnee;
    }

    public function setMinAnnee(int $annee)
    {
        $this->minAnnee = $annee;
        return $this;
    }

    public function setMaxAnnee(int $annee)
    {
        $this->maxAnnee = $annee;
        return $this;
    }
}