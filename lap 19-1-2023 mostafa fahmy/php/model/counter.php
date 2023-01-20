<?php
class counter {
   private $counter_num=0;
    function __construct(){
        if(file_exists("counter.txt")){
            $this->counter_num= file_get_contents("counter.txt");
        }
    }
   
    function set_to_counter(){

        if(!isset($_SESSION["visit"])){
            $counter_file = fopen("counter.txt","w+");
            $this->counter_num ++;
            fwrite($counter_file,(int)$this->counter_num );
            fclose($counter_file);  
        }

    }

    function get_counter(){
        $visits = $this->counter_num;
        return "visits count = $visits";
    }
}
   