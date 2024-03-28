<?php
//Looping For
// Hitung pengulangan 1 s.d 10
for($x=1; $x<=10; $x++){
    echo "$x &nbsp";
}
echo '<hr>';
for($x=10; $x>=1; $x--){
    echo "$x &nbsp;";
}
echo '<hr>';
for($x=10; $x>=1; $x--){
    echo "<input type='radio' name='r'>";
}
echo '<hr>';
$j = 1;
while ($j <= 10) {
    echo "$j &nbsp;";
    $j++;
}
echo "<hr>";
$j = 10;
while ($j >= 1) {
    echo "$j &nbsp;";
    $j--;
}
echo "<hr>";
