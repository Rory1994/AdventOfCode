<?php


$fileName = "input.txt";

function part1($fileName){

  $total = 0;

  $file = fopen($fileName, "r");

  while (($line = fgets($file)) !== false) {
      $dimensions = array_map('intval', explode("x", $line));
      sort($dimensions);
      $total += calculatePaperNeeded($dimensions);
  }

  fclose($file);

  return $total;

}

function part2($fileName){

  $total = 0;

  $file = fopen($fileName, "r");

  while (($line = fgets($file)) !== false) {
      $dimensions = array_map('intval', explode("x", $line));
      sort($dimensions);
      $total += calculateRibbonNeeded($dimensions);
  }

  fclose($file);

  return $total;

}

function calculateSurfaceArea($dimensions){

  return 2*$dimensions[0]*$dimensions[1] + 2*$dimensions[1]*$dimensions[2] + 2*$dimensions[2]*$dimensions[0];

}

function calculateAreaOfSmallestSide($dimensions){

  return $dimensions[0] * $dimensions[1];

}

function calculatePaperNeeded($dimensions){

  return calculateAreaOfSmallestSide($dimensions) + calculateSurfaceArea($dimensions);

}

function calculateRibbonToWrap($dimensions){

  return ($dimensions[0] * 2) + ($dimensions[1] * 2);

}

function calculateRibbonForBow($dimensions){

  return $dimensions[0] * $dimensions[1] * $dimensions[2];

}

function calculateRibbonNeeded($dimensions){

  return calculateRibbonToWrap($dimensions) + calculateRibbonForBow($dimensions);

}

echo part1($fileName) + "\r\n";
echo "\n";
echo part2($fileName);
 ?>
