<?php
function faktorial($a){
  if ($a < 2){
    return 1;
  } else {
    return $a * faktorial($a - 1);
  }
}
echo "Faktorial dari 5 = " . faktorial(5);
?>