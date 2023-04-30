<?php
class materiel
{
    private ?int $idmateriel;
    private ?string $nom = null;
    private ?string $impact_environmental = null;
    private ?float $cout = null;

    public function __construct($n, $p, $a)
    {
        $this->nom = $n;
        $this->impact_environmental = $p;
        $this->cout = $a;
    }
    /**
     * Get the value of idmateriel
     */
    public function getIdmateriel()
    {
        return $this->idmateriel;
    }

    /**
     * Get the value of nom
     */
    public function getnom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setnom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of impact_environmental
     */
    public function getimpact_environmental()
    {
        return $this->impact_environmental;
    }

    /**
     * Set the value of impact_environmental
     *
     * @return  self
     */
    public function setimpact_environmental($impact_environmental)
    {
        $this->impact_environmental = $impact_environmental;

        return $this;
    }

    /**
     * Get the value of cout
     */
    public function getcout()
    {
        return $this->cout;
    }

    /**
     * Set the value of cout
     *
     * @return  self
     */
    public function setcout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    
}
