<?php
    class Francais extends Humain{

        private $postal;
        
        /* On définit un constructeur pour Francais.
        De fait, on surcharge le constructeur du parent.
        */
        public function __construct($nouveauNom){
            parent::__construct($nouveauNom);
            $this->nom = strtoupper($nouveauNom);
        }

        /* on modifie setNom() pour que $nom stocke un nom en majuscules.
        on dit qu'on "surcharge" la methode setNom()
        public function setNom($nouveauNom){
            $this->nom = $nouveauNom;
        }*/

        //on definit deux methodes speficique a Francais
        public function setPostal($codePostal){
            $this->postal = $codePostal;
        }
        public function getPostal(){
            return $this->postal;
        }

}
?>