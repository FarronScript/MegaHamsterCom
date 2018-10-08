<?php

namespace HTL3R\MegaHamsterCom;
use HTL3R\MegaHamsterCom\HamsterDomains as Hamsterdomains;

require("vendor/autoload.php");

$myFlat = new HamsterDomains\Flat();

?>

<!DOCTYPE html>
<html lang="de" ng-app="Vorlage">
<head>
    <meta charset="utf-8">
    <title>Vorlage</title>
    <link rel="icon" href="favicon.ico">

</head>

<body>


<?php
echo "<h1> Hello Web Hamster!!</h1>";
?>



</body>

</html>