<?php 
    
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
  
    
    $connexion=mysqli_connect("Localhost","root","root","user") or die ("erreur de connexion a la base de données");
    mysqli_select_db($connexion,"user") or die("erreur");
    $query="select titre from user where nom='$nom' and prenom='$prenom' ";
    //var_dump($query); //permet d'afficher le contenu de la requete sous forme d'objet
    
    $resultat=mysqli_query($connexion,$query);
    while ($row=mysqli_fetch_row($resultat)) {
    
        /* if ($row[0]=="admin") {
            echo "<b>  Bonjour admin </b >";
        }else{
             echo " <b>Bonjour utilisateur </B> ";
        } */
        echo "<b> $row[0] </b>";

    }

    
?>