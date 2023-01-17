<?php
$data = file("log.txt");
$i = 0 ;
$ii = 0 ;
foreach($data as $data){
  $make_multiy_array = explode(",",$data);
  foreach($make_multiy_array as $make_multiy_array){
    switch($ii){
        case 0: 
            echo  "visit : $make_multiy_array"  ;
            break;
        case 1: 
            echo  "ip Address : $make_multiy_array"  ;
            break;
        case 2: 
            echo  "Email : $make_multiy_array"  ;
            break;
        case 3: 
            echo  "Name : $make_multiy_array"  ;
            break;
        
        }
        echo "<br/>";
        $ii++ ;
    }
    echo "<br/><br/><hr><br/><br/>";
    $ii=0 ;
    $i++ ;

  }


// $replace_colam = str_replace("," ,"<br/>",$data);
// $replace_PHP_EOL = str_replace(PHP_EOL,"<br/> <br/><hr/> <br/><br/><br/>",$replace_colam);
// echo "$replace_PHP_EOL" ;

 

?>


