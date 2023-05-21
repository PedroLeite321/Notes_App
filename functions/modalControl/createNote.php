<?php
    //Create notes conf
    if(isset($_POST["cardTitle"]) && isset($_POST["cardText"])) {
        $cardTitle = $_POST['cardTitle'];
        $cardTxtContent = $_POST['cardText'];
        if($cardTitle != "" && $cardTxtContent != "")   {
            require("../../view/html/sentSuccessfully.php");
        }else   {
            require("../../view/html/sentFailed.php");
        }
    }
?>