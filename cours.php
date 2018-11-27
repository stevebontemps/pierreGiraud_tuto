<!DOCTYPE html>
<html>
   <head>
        <title>Cours PHP</title>
        <meta charset='utf-_8'>
    </head>
    <body>
        <h1>Hello !</h1>

        <?php 
            include('classes/humain.class.php');
            include('classes/francais.class.php');

            $victor = new Humain(NULL);
            $pierre = new Francais(NULL);
            $paul = new Humain('Paul');

//-> opérateur objet : pour signifier que l'on souhaite accéder à quelque chose à l'interieur de notre classe.
// on ne précise pas de signe $ avant le nom de la propriété qu'on souhaite récupérer dans ce cas.
            $victor->setNom('Victor');
            $pierre->setNom("Pierre");

            $pierre->setPostal(83000);

            //$victor->nom = "Victor";
            echo
                'Nom : ' .$victor->getNom().
                '<br>Crée le : ' .$victor->getdateInscrit().
                '<br>Nom : ' . $pierre->getNom().
                '<br>Crée le : ' .$pierre->getdateInscrit().
                '<br>Code postal : ' .$pierre->getPostal().
                '<br>Nom : ' .$paul->getNom().
                '<br>Crée le : ' .$paul->getdateInscrit();
            

        ?>
    </body>
</html> 
