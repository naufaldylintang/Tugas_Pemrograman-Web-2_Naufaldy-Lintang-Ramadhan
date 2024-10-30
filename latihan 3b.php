<?php
$var1 = "Hello";
$var2 = "";
$var3 = NULL;
$var4 = 0;

// Menggunakan isset()
echo "Hasil isset():<br>";
echo "isset(\$var1): " . (isset($var1) ? 'true' : 'false') . "<br>";
echo "isset(\$var2): " . (isset($var2) ? 'true' : 'false') . "<br>";
echo "isset(\$var3): " . (isset($var3) ? 'true' : 'false') . "<br>";
echo "isset(\$var4): " . (isset($var4) ? 'true' : 'false') . "<br>";

// Menggunakan empty()
echo "<br>Hasil empty():<br>";
echo "empty(\$var1): " . (empty($var1) ? 'true' : 'false') . "<br>";
echo "empty(\$var2): " . (empty($var2) ? 'true' : 'false') . "<br>";
echo "empty(\$var3): " . (empty($var3) ? 'true' : 'false') . "<br>";
echo "empty(\$var4): " . (empty($var4) ? 'true' : 'false') . "<br>";
?>