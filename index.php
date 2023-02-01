<?php
  function factorielle($n){
    if($n <= 1){
      return 1;   
    }
    else{
      return $n * factorielle($n - 1);
    }
  }
    
  $n = 5; 
  $f = factorielle($n); 
  echo "La factorielle de". $n.". est". $f; 
?>
