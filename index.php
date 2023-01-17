<?php

   $name= isset($_POST["name"])? $_POST["name"]:"";
   $email= isset($_POST["email"])? $_POST["email"]:"";
   $message= isset($_POST["message"])? $_POST["message"]:"";
    if(count($_POST)>0){
        
        if(empty($name) || empty($email)||empty($message)){
            $error= "should not be an empty field" ;
    
        }elseif(strlen($name)>99){
            $error= "the name should be less than 100 character" ;
        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error="Invalid email format";
        }elseif(strlen($message)>254){
            $error= "the message should be less than 255 character" ;
        }else{
            $visit = date('l jS \o\f F Y h:i:s A') . ',';
            // $logfile = fopen("log.txt","w+");
           
            
            $logfilea = fopen("log.txt","a+");
            fwrite($logfilea,$visit);
            $ipaddress = $_SERVER['REMOTE_ADDR'].',';
            fwrite($logfilea,$ipaddress);
            fwrite($logfilea,$email.',');
            fwrite($logfilea,$name.PHP_EOL);
            fclose($logfilea);
           
            $details_user ="";
            
            echo" Thank you for contacting Us  <br/> <br/>";
            foreach($_POST as $key => $value){
                if($key != "submit"){
                    echo " $key : $value <br/><br/>"  ;
                }
               
            }
            // fwrite($logfile,$details_user);
            // fclose($logfile);
            die("") ;
        }
           
    }
   
   


?>
<html>

    <head>
        <title> contact form </title>
    </head>
    <body>
    
        <h3> Contact Form </h3>
        <div id="after_submit" style = "color:red;">
        <h1> <?php echo isset($error)?$error:"";?> </h1>
        </div>
        <form id="contact_form" action="index.php" method="POST" enctype="multipart/form-data">
            
            <div class="row">
                <label class="required" for="name">Your name:</label><br />
                <input id="name" class="input" name="name" type="text" value="<?php echo $name ;?>" size="30" /><br />

            </div>
            <div class="row">
                <label class="required" for="email">Your email:</label><br />
                <input id="email" class="input" name="email" type="text" value="<?php echo $email;?>" size="30" /><br />

            </div>
            <div class="row">
                <label class="required" for="message">Your message:</label><br />
                <textarea id="message" class="input" name="message" rows="7" cols="30"><?php echo $message;?></textarea><br />

            </div>

            <input id="submit" name="submit" type="submit" value="Send email" />
            <input id="clear" name="clear" type="reset" value="clear form" />

        </form>
    </body>

</html>