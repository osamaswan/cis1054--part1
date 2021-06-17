3)  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Date and time</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <p>
    <?php
        session_start(); //start session 
      // function to convert str to time of variables and calculates difference between them in seconds while getting rid of decimals
        function datetimediff($date1,$date2){
            $diff= array();
                $one = strtotime($date1);
                $two = strtotime($date2);
                $datediff = abs($one - $two);
                $diff['s'] = floor($datediff);
            return $diff;
        }  
        //if session variabel is empty set it to current time and echo 
        if(empty($_SESSION['lastvisit'])){
            $_SESSION['lastvisit'] = date("Y/m/d h:i:s");
            echo "Visted 1 second ago" . $_SESSION['lastvisit'] ;
            
            
        }
      //otherwise if it is set print when was last visit set new variable to the current time and print the differance using function upove
        else{
            echo "Last Visit was on " . $_SESSION['lastvisit'], "\n\n";
            $currentdate = date("Y/m/d h:i:s");
            echo "\n", "Time since last visit " . datetimediff($_SESSION['lastvisit'],$currentdate) ['s'], " Seconds" ;
            
        }    
    ?>
</body>
</html>
