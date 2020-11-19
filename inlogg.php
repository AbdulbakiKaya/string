<?php
$anvandare = $_POST['name'];
$losenord = $_POST['losen'];

if($anvandare == "Nikita" && $losenord == "dinMamma")
{
  echo "Välkommen Nikita till ditt konto";
}
else
{
  echo "MÅSTE GIT";
}


?>