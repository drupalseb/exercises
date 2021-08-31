<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html>
<head>
  <meta http-equiv="content-type" content="text/html" charset="utf-8">
  <title>Klasy i obiekty w PHP</title>
</head>
<body>
<?php
require_once("classes.php");

function getFutureTime($days,$pattern = "H:i:s d M Y")
{
  return date($pattern, strtotime("+". $days. "days"));
}

function getCurrentTime($pattern = "H:i:s d M Y")
{
  return date($pattern, time());
}

echo "display time for 5 days:". getFutureTime(5)."<br>";
echo "<br> Display current time".getCurrentTime();


echo "<hr> Test klasy \"time\" . <br>";

$a = new time();
$b = new time();
$c = new time("America/Atka");
$d = new time("Australia/Yancowinna");
$e = new time("Australia/Yancowinna");
$e->setFutureTime(5);
/*
echo "Bieżacy czas to: ".$a->getCurrentTime()."<br>";
echo "Za 5 dni będzie ".$b->setFutureTime(5)."<br>";
echo $a->currentTime."<br>";
echo $b->futureTime."<br>";
*/
$b->setFutureTime(5);

echo "curretn time ".$a->currentTime."<br>";
echo "Time in 5 days ".$b->futureTime."<br>";
echo "Different timezone ".$c->currentTime."<br>";
echo "Time in Australia ".$d->currentTime."<br>";
echo "Time in australia for 5 days ".$e->futureTime."<br>";

//-----------------------------------------------------------
?>
<hr>
<p>Next class exercise</p>
<?php
require_once ("punkt.php");


$p = new punkt();

$p->setX(70);
echo 'Wartość X = :'.$p->getX().'<br>';

$p2 = new punkt3d(10,50, 33);

echo $p2->getX().'<br>';
echo $p2->getY().'<br>';
echo $p2->getZ().'<br>';


?>
<hr>
<p>
  Klasy abstrakcyjne
</p>
<br>
<?php
new Animal();

?>
</body>
</html>


<?php
