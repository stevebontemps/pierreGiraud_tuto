<!DOCTYPE html>
<html>
   <head>
        <title>Cours PHP</title>
        <meta charset='utf-_8'>
    </head>
    <body>
        <h1>Hello</h1>

        <?php 
            include('classes/humain.class.php');

            $pierre = new Humain();
            $victor = new Humain();
//-> opérateur objet : pour signifier que l'on souhaite accéder à quelque chose à l'interieur de notre classe.
// on ne précise pas de signe $ avant le nom de la propriété qu'on souhaite récupérer dans ce cas.
            $pierre->setNom("Pierre");
            echo $pierre->getNom();


            //$victor->nom = "Victor";
            echo '<br/>';
            $victor->setNom("victor");
            echo $victor->getNom();

        ?>
    </body>
</html> 
