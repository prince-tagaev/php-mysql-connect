<?php
   
   $contacts = [
     [
       'name'=>'Zuhridin',
       'email'=>'asaba@internet.ru',
     ],
     [
       'name'=>'Ilyo',
       'email'=>'asaba25@internet.ru',
     ]
     ];
    //  echo print_r($contacts);
    //  echo var_dump($contacts);
    
  echo(" menin atym " . $contacts[0]['name'] . " menin pochtam " . $contacts[0]['email']);
  echo "<br>";

  $cities = ["Batken","Osh","Asaba"];
  rsort($cities);
  print_r($cities);

  echo "<br>";

  $names = ["Zuhridin"=>20,"Ilyo"=>17, "Muzash"=>7];

  ksort($names);
    echo print_r($names);
   ?>


<!-- Function -->
<?php
  echo "<br>";
function salam($name){
  echo "salam " . $name;
}
salam("Zuhridin");
echo "<br>";

function number($number, $pow = 2){
  return $number ** $pow;
}

echo number(2,4)
?>
<!-- function -->

   <!-- Sikil -->



<?php
 echo "<br>";

$i = 11;
$count = 10;
do{
  $i++;
  echo "this is DO $i";
}while ($i <= 10);
?>


   <!-- sikil -->