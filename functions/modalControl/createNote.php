<?php
    //Create notes conf
    if(isset($_POST["cardTitle"]) && isset($_POST["cardText"])){
        $cardTitle = $_POST['cardTitle'];
        $cardTxtContent = $_POST['cardText'];
        if($cardTitle != "" && $cardTxtContent != ""){
           

            echo "<br>";
            echo("<h1 style='display:flex; height:100vh; justify-content:center; align-items:center' id='success'></h1>");
            echo("<script src='/jsScript/returnToMain.js'></script>");
        }else{
            echo("<h1 id='failure'></h1>");
            echo("<script src='/jsScript/returnToMain.js'></script>");
        }
    }
?>