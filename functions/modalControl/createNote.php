<?php
    //Create notes conf
    if(isset($_POST["cardTitle"]) && isset($_POST["cardText"])){
        $cardTitle = $_POST['cardTitle'];
        $cardTxtContent = $_POST['cardText'];
        print_r($cardTitle);
        echo "<br>";
        print_r($cardTxtContent);
        echo("<h1 id='success'></h1>");
        echo("<script src='/jsScript/returnToMain.js'></script>");
    }
?>