<?php


class StrUtils
{
   private string $texte;


   public function __construct(string $texte){
       $this->setTexte($texte);
   }

   public function bold(): string {
       return "<strong>".$this->getTexte()."</strong>";
   }

   public function italic(): string {
       return "<em>".$this->getTexte()."</em>";
   }

   public function underline(): string {
       return "<u>".$this->getTexte()."</u>";
   }

   public function capitalize() : string{
       return ucfirst($this->getTexte());
   }

   public function uglify(): string {
       return "<span><strong><em><u>".ucfirst($this->getTexte())."</u></em></strong></span>";
   }





    /**
     * @return string
     */
    public function getTexte(): string
    {
        return $this->texte;
    }

    /**
     * @param string $texte
     */
    public function setTexte(string $texte): void
    {
        $this->texte = $texte;
    }


}