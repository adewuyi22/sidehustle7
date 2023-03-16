<?php 

    echo "<b>REQUIREMENTS TO VOTE: </b><p/>";
    
    echo "<b>1. Age : 18 and above: <p/>
    2. PVC<p/>
    3. Ward should be 20 
    </b><p/>";
    

  //  $vote = "yes";
    $age = "20";
    $pvc = false;
    $ward = 20;

        if ($age > 18 && $pvc == true && $ward ==20){
            echo "<p>----------------Voter is eligible to vote----------------</p>";
        } else {
            echo "------------------------------------------------------------<br/> After successful validation, It was found that <br/> user did not meet some of the requirement to vote";           
            echo "<p> <i>Please check and try again...<i/> </p>";
        }

    
?>
