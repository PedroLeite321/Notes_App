<?php
    //Priority modal conf
if(isset($_POST["filterLowP"]) || isset($_POST["filterNormalP"]) || isset($_POST["filterHighP"]))   {

    $lowPriority = $_POST["filterLowP"];
    $normalPriority = $_POST["filterNormalP"];
    $highPriority = $_POST["filterHighP"];
    if($lowPriority != "" || $normalPriority != "" || $highPriority != ""){
        if($cardTitle != "" && $cardTxtContent != "")   {
            require("../../view/html/sentSuccessfully.php");
        }else   {
            require("../../view/html/sentFailed.php");
        }
    }else{
        echo"<h1>goiaba</h1>";
    }

}