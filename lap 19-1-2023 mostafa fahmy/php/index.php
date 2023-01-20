<?php
require_once("autoload.php");
$count = new counter();
$count->set_to_counter();
$visit = new visitor();
$visit->set_to_session();
 echo $count->get_counter();