<?php  
try
        {
        $bdd = new PDO('mysql:host=localhost;dbname=larav;charset=utf8', 'root', '');

        }
        catch(Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        } 

 $req="SELECT name,prenom,grade,photo 
       FROM equipes,users 
       where equipes.chef_id=users.id 
         and equipes.achronymes=ILS"
          ;
$reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
$reponse->execute();
        $row=$reponse->fetch();
       $img_src= $row['photo'];
       echo "<img src='images1.jpg' alt=''>";
                    ?>
                    <!DOCTYPE html>
                    <html>
                    <head>
                    	<title>kk</title>
                    </head>
                    <body>
                    <div> iiio</div>
                   
                    </body>
                    </html>