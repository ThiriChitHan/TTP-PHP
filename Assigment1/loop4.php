<?php 
for($i=1;$i<=9;$i+=2) {
     echo str_repeat("&nbsp;", 9 - $i) . str_repeat("*", $i) . "<br>";
}
?>