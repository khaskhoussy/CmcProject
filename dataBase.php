<?php

$dbServerName="localhost";
$dbUserName="root";
$dbPassword ="";
$dbName ="traceforum";
$cd = 0;
$allNamesR =[];
$allUsers =[];
$v=0;

$connexion = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

$sql = "SELECT * FROM transition;";
$result = mysqli_query($connexion,$sql);

while ($xds = mysqli_fetch_assoc($result)) {
    array_push($allNamesR, $xds['Utilisateur']);
}

while ($v <sizeof($allNamesR)) {
    if (!in_array($allNamesR[$v], $allUsers)) {
        array_push($allUsers, $allNamesR[$v]);
    }
    $v++;
}
 $allUsers;


?>