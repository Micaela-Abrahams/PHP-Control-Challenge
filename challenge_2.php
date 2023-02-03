<?php
// If....Elseif..Else Statement
$age =100;

if($age >= 18 && $age <= 25 ){
    echo("18 - 25 year old's pay R40.00");

} elseif($age >= 26 && $age <= 64){
    echo("26 - 64 year old's pay R60.00");

} elseif($age >= 65){
    echo("People who are 65 years old & older pay R30.00");

} elseif ($age >= 13 && $age <= 17) {
    echo("Children between the age of 13 - 17 pay R30.00");

} elseif($age >=2 && $age <=12){
    echo("Children between the age 2 - 12 pay R20.00");

} else{
    echo("Children below 2 are free! Yippee");
}
?>