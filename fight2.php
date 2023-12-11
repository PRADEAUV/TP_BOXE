<?php
// version  avec une fonction pour les boucles
// version avec les deux joueurs frappent  dans un round----il faudra revoir la notion avec la vitess et 
require_once ('Ippo.php');
require_once ('challenger.php');


class Fight
{
public $prob;
public $tempstrength1;
public $tempstrength2;


public function fighting($boxer1,$boxer2)
{
    //var temporaire pour stocker les valeurs initiales de la force des boxers
    $tempstrength1=$boxer1->strength;
    $tempstrength2=$boxer2->strength;
    echo " La stamina de $boxer1->name est $boxer1->stamina \n";
    echo " La stamina de $boxer2->name est $boxer2->stamina \n";
    //celui avec la vitesse la plus élevée frappe en premier
if ($boxer1->speed> $boxer2->speed) //boxer1 est plus rapide
{
    $this->boucleRounds($boxer1,$boxer2);
}
elseif ($boxer2->speed> $boxer1->speed) // boxer2 est plus rapide
{
    $this->boucleRounds($boxer2,$boxer1);
}
// annonce du vainqueur aprdè les 10 rounds
echo  ($boxer1->stamina>$boxer2->stamina)? $boxer1->name. " est le vainqueur!!!":$boxer2->name. " est le vainqueur!!!";
}
//********************************************** */
public function fincombatAvtDixRound($boxer1,$boxer2)
{
    echo ($boxer1->stamina>$boxer2->stamina)?$boxer1->name. " est le vainqueur!!! \n": $boxer2->name. " est le vainqueur!!!";
    exit ("Fin du Combat avant les 10 rounds! \n");
}
//********************************************** */
Public function probKO($boxer1,$boxer2)
{
    $this->prob=random_int(0,1);
    echo "la probabilité du KO est ". $this->prob."\n";
    if ($this->prob==1)
        {
            $boxer1->strength*=2;
            echo ' La force est '.$boxer1->strength. '  ' .$boxer2->strength." \n"; 
        }
    else
    {
        $boxer2->strength*=2;
        echo ' La force est '.$boxer1->strength. '  ' .$boxer2->strength." \n"; 
    }
}
//********************************************** */
public function boucleRounds($arg1,$arg2)
{
    $this->tempstrength1=$arg1->strength;
    $this->tempstrength2=$arg2->strength;
    for ($i=1; $i <10; $i++) //boucle des rounds
{ 
    if (($arg1->stamina<=0) || ($arg2->stamina<=0) ) 
    {
        $this->fincombatAvtDixRound($arg1,$arg2);
     }
   else
   {
    echo"round $i \n";
    // probabilité d' un coup critique
    $this->probKO($arg1,$arg2);
    // baisse de la stamina
    $arg2->stamina=$arg2->stamina-$arg1->strength;
    $arg1->stamina=$arg1->stamina-$arg2->strength;
    echo " La stamina de $arg1->name est $arg1->stamina \n";
    echo " La stamina de $arg2->name est $arg2->stamina \n";
    // les valeurs de la force sont remises à leur valeurs initiales
    $arg1->strength=$this->tempstrength1;
    $arg2->strength=$this->tempstrength2;
    $i++;
    if (($arg1->stamina<=0) || ($arg2->stamina<=0) ) 
        {
            $this->fincombatAvtDixRound($arg1,$arg2);
         }
    echo'round '. $i ." \n";
    // probabilité d'un coup critique
    $this->probKO($arg1,$arg2);
    // Baisse de la stamina
    $arg1->stamina=$arg1->stamina-$arg2->strength;
    echo " La stamina de $arg1->name est $arg1->stamina \n";
    echo " La stamina de $arg2->name est $arg2->stamina \n";
    // les valeurs de la force sont remises à leur valeurs initiales
    $arg1->strength=$this->tempstrength1;
    $arg2->strength=$this->tempstrength2;
    }
}
}
}


$fight=new Fight;
$fight->fighting($boxer1,$boxer2);
?>