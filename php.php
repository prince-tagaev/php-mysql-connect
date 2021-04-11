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

   <!-- Get file from folder -->
   <div class="get_file bg-secondary p-3">

        <?php
        $dir_path = 'img/';
        
        if(is_dir($dir_path)){
          $files = opendir($dir_path);
          {
            if ($files) {
              while (($file_name = readdir($files)) !== FALSE) {
                if ($file_name != "." && $file_name != "..") {
                  // echo $file_name;
                  echo "<a download href='$dir_path$file_name' class='text-white'>$file_name</a>" . "<br>";
                }
              }
            }
          }
        }

        
        ?>
        </div>