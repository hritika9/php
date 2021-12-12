<?php
  $message = " ";
if(isset($_GET["userage"]) && isset($_GET["nationality"]))
{
   $age= $_GET["userage"];
   $name = $_GET["nationality"];
   
   
   if($age >=18 && $name === "India") 
   {
        
       $message = "you can vote";
   }
      
       
   
   else
   {
         $message = "you cannot vote because your nationality is {$name}"; 
    }
}
    

   ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get.php" method="get">
        <label for="">ENTER YOUR AGE</label>
    <input type="number" name ="userage" />
    <label for="">Enter your nationality</label>
    <input type="text" name = "nationality">
    <input type="submit" value ="Check Now!" />
    <p><?php echo $message ;?></p>
     
</form>
</body>
</html>


 