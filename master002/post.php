<?php
session_start();
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
// die("dit is de variabele text : " . $text);
     
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($fp);
 } else {
 	die( "sessionvariable niet geschreven");
 }
?>