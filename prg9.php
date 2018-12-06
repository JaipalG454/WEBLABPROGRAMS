 <?php
$allTheStates = "Mississippi Alabama Texas Massachusetts Kansas";
$statesArray = [];
$states1 = explode(' ', $allTheStates);
$i = 0;

echo "Given States are: <strong>".$allTheStates."</strong><br>";

foreach ($states1 as $state) {
 if (preg_match('/xas$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 print "<br>The States that <b>ends in xas</b>:<i>" . $state."</i>";
 }
}


foreach ($states1 as $state) {
 if (preg_match('/^k.*s$/i', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "<br>The states that <b>begins with k ans ends in s</b>:<i>" . $state."</i>";
 }
}

foreach($states1 as $state) {
if (preg_match('/^M.*s$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "<br>The states that <b>begins with M and ends in s</b>:<i>" . $state."</i>";
}
}

foreach($states1 as $state) {
  if (preg_match('/a$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "<br>The states that <b>ends in a</b>:" . $state."<br>";
}
}
foreach ($statesArray as $element => $value) {
 print( "<br> Index[" . $element . "]: " . $value);
}
?>