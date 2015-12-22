<?php

$input = "yzbqklnj";

function partOne($input){

  $count = 0;
  $solutionFound = false;
  while(!$solutionFound){

    $solution = md5($input . $count);

    if (substr($solution, 0, 5) === "00000"){
      //echo substr($solution, 0, 5);

      $solutionFound = true;
      break;
    }
    $count += 1;

  }

  return $count;

}

function partTwo($input){

  $count = 0;
  $solutionFound = false;
  while(!$solutionFound){

    $solution = md5($input . $count);

    if (substr($solution, 0, 6) === "000000"){
      //echo substr($solution, 0, 5);

      $solutionFound = true;
      break;
    }
    $count += 1;

  }

  return $count;

}

echo partOne($input);
echo "\n";
echo partTwo($input);

 ?>
