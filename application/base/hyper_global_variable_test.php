<?php
  $x=60;
  $y=40;

  function addition() {
  $GLOBALS['z'] =  $GLOBALS['x'] + $GLOBALS['y'];
  }

  addition();
  echo "the result is ";
  echo $z;

 ?>
