<?php 
    class Humain{
        
        //     propriétés = $nom
        private $nom;

        // un setter sert à définir ,affecter
        public function setNom($nouveauNom){
            $this->nom = $nouveauNom;
        }

        // un getter sert à récuperer
        public function getNom(){
            return $this->nom;
        }
    }

?>