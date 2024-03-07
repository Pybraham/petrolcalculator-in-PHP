<?php
$_kraftstoffsorte = $_POST["Kraftstoffsorte"];
$_tankmonat = $_POST["Tankmonat"];
$_number1 = $_POST["number1"];
$_number2 = $_POST["number2"];
$_number3 = $_POST["number3"];
$_number4 = $_POST["number4"];

$_preis1 = $_POST["preis1"];
$_preis2 = $_POST["preis2"];
$_preis3 = $_POST["preis3"];
$_preis4 = $_POST["preis4"];

if(!empty($_POST["ohneMwst"]))
{
    
    $_verbrauch=$_number1 + $_number2 + $_number3 + $_number4;
    
    $_preis=$_preis1+$_preis2+$_preis3+$_preis4;
    $_mwst=($_preis/119)*19;
    $_preisohne=$_preis-$_mwst;

    echo "Sie haben in dem Monat: ".$_tankmonat." ".round($_verbrauch,2)." Liter ".$_kraftstoffsorte." Verbraucht.<br><br>";
    
    echo " Die gesamt Kosten Beträgt: ".round($_preis,2)." € davon sind: ". round($_mwst,2)." € Mehrwertsteuer der Preis ohne Mehrwertsteuer Lautet: ". round($_preisohne,2)." €";





}
if(!empty($_POST["mitMwst"]))
{
    
    $_verbrauch=$_number1 + $_number2 + $_number3 + $_number4;
    $_preis=$_preis1+$_preis2+$_preis3+$_preis4;
    $_mwst=($_preis/119)*19;
    $_mwstmit=$_preis+$_mwst;

    echo "Sie haben in dem Monat: ".$_tankmonat." ".round($_verbrauch,2)." Liter ".$_kraftstoffsorte." Verbraucht.<br><br>";
  
    echo " Die gesamt Kosten Betragen: ".round($_preis,2)." € davon sind: ".round($_mwst,2)." € Mehrwertsteuer";





}




?>