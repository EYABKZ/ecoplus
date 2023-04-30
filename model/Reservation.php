<?php
class reservation
{
    private ?int $id_reservation = null;
    private ?date $date_deb = null;
    private ?date $date_fin = null;
    private ?string $statut = null;
    private ?int $quantité= null;

    public function __construct($id_reservation, $n, $p, $a,$qt)
    {
        $this->id_reservation = $id_reservation;
        $this->date_deb = $n;
        $this->date_fin= $p;
        $this->statut = $a;
        $this->quantité = $qt;
    }

    /**
     * Get the value of idreservation
     */
    public function getId_reservation()
    {
        return $this->id_reservation;
    }

    /**
     * Get the value of date debut
     */
    public function getdate_deb()
    {
        return $this->date_deb;
    }

    /**
     * Set the value of date debut
     *
     * @return  self
     */
    public function setdate_deb($date_deb)
    {
        $this->date_deb = $date_deb;

        return $this;
    }

    /**
     * Get the value of date fin
     */
    public function getdate_fin()
    {
        return $this->date_fin;
    }

    /**
     * Set the value of date fin
     *
     * @return  self
     */
    public function setdate_fin($date_fin)
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    /**
     * Get the value of statut
     */
    public function getstatut()
    {
        return $this->statut;
    }

    /**
     * Set the value of statut
     *
     * @return  self
     */
    public function setstatut($statut)
    {
        $this->statut= $statut;

        return $this;
    }

     /**
     * Get the value of quantité
     */
    public function getquantité()
    {
        return $this->quantité;
    }

    /**
     * Set the value of quantité
     *
     * @return  self
     */
    public function setquantité($quantité)
    {
        $this->quantité= $quantité;

        return $this;
    }
    
}
