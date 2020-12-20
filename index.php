<?php
 include_once 'dataBase.php';
 require ('Person.php');
 require_once ('Activity.php');
 require_once ('PersonScored.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <title>HighCharts</title>
    </head> 
    <body>
        <div id ="container"> </div> 
            <script src="index.js"></script>   
            <?php
                $resultCheck = mysqli_num_rows($result);
                $users=[];
                $usersScored=[];
                $compt=0;
                $x=0;
                $temp=0;
                $pocket = null ;
                $bdd = new PDO("mysql:host=127.0.0.1;dbname=traceforum;charset=utf8","root","");
                $nbConnexion=$bdd->prepare("SELECT COUNT(*) From transition where Titre = 'Connexion' and Utilisateur= ?");
                $nbMessagePoster=$bdd->prepare("SELECT COUNT(*) From transition where Titre = 'Poster un nouveau message' and Utilisateur= ?");
                $nbMessageContenu=$bdd->prepare("SELECT COUNT(*) FROM transition WHERE Titre LIKE'Afficher le contenu d%' and Utilisateur= ?");
                $nbMessageRepondu=$bdd->prepare("SELECT COUNT(*) FROM transition WHERE Titre ='Répondre à un message' and Utilisateur= ?");
                if ($resultCheck > 0) {
                    while ($x <sizeof($allUsers)) {
                        $personnage = new Person($allUsers[$x]);

                         $nbConnexion->execute(array($personnage->getName()));
                         while($results1 = $nbConnexion->fetch())
                         {
                            $personnage->setActivity(new Activity("Connexion",348,intval($results1[0])));                           
                         }
                         $nbMessagePoster->execute(array($personnage->getName()));
                         while($results2 = $nbMessagePoster->fetch())
                         {
                            $personnage->setActivity(new Activity("PostMessage",1490,intval($results2[0])));                           
                         }
                         $nbMessageContenu->execute(array($personnage->getName()));
                         while($results3 = $nbMessageContenu->fetch())
                         {
                            $personnage->setActivity(new Activity("ContinuMessage",14531,intval($results3[0])));                           
                         }
                         $nbMessageRepondu->execute(array($personnage->getName()));
                         while($results4 = $nbMessageRepondu->fetch())
                         {
                            $personnage->setActivity(new Activity("repondre",14531,intval($results4[0])));                           
                         }
                             array_push($users,$personnage);                        
                        $x++;
                    }  
                    while ($temp <sizeof($users)){
                        $scoreduser = new PersonScored($users[$temp]->getName(),$users[$temp]->personScore());
                        array_push($usersScored,$scoreduser);  
                        $temp++;
                    }
                   
                    // while($compt <sizeof($usersScored)){
                    
                    //     if(($usersScored[$compt]->getScore()) < ($usersScored[$compt+1]->getScore())){
                    //         $pocket = $usersScored[$compt];
                    //       $usersScored[$compt] = $usersScored[$compt+1] ;
                    //       $usersScored[$compt+1] = $pocket ;
                    //     } 
                    //     $compt++;
                    // }          

                }   
                               
            ?>
    <script>
        var list = <?php echo json_encode($usersScored);?>;
    </script>    
    <script src="index.js"> </script>

            



    </body>
</html>