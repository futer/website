<?php

if (isset($_REQUEST['Mail']))
{

      $name = $_REQUEST['Name'] ;
      $email = $_REQUEST['Mail'] ;
      $phone = $_REQUEST['Phone'] ;
      $message = $_REQUEST['Message'] ;

      $message_text = $message." Nr telefonu:".$phone;

      mail("kontakt@nwstudio.esy.es", $name, $message_text, "Od:" . $email);
      echo "Wiadomosc zostala wyslana.";
}
else
	echo "bład";
?>