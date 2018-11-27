<?php 
    class Humain{
        
        //     propriétés = $nom
        protected $nom;
        protected $dateInscrit;

        // Methode constructeur de notre classe Humain
        public function __construct($nouveauNom){
            $this->setNom($nouveauNom);
            $this->setDateInscription();
        }

        // un setter sert à définir ,affecter
        public function setNom($nouveauNom){
            $this->nom = $nouveauNom;
        }

        public function setDateInscription(){
            $this->dateInscrit = date('d-m-Y H:i:s');
        }

        // un getter sert à récuperer
        public function getNom(){
            return $this->nom;
        }

        public function getDateInscrit(){
            return $this->dateInscrit;
        }
    }

?>