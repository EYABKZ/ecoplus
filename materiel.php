<?php
class materiel
{
    private ?int $id = null;
    private ?string $nom = null;
    private ?string $impact_environmental = null;
    private ?string $cout = null;
  

    public function __construct($id = null, $nom, $impact, $cout)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->impact_environmental = $impact;
        $this->cout= $cout;
       
    }

    /**
     * Get the value of idmateriel
     */
    public function getid()
    {
        return $this->id;
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
     * Get the value of imapct
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
