<?php
 /*

	GitHub : https://github.com/MangeshSathe
	Developer : Mangesh Sathe, reach[DOT]mangeshsathe[AT]gmail[DOT]com
	Algorithm : Bubble sort
	Language : PHP
	Description : Bubble sort, sometimes referred to as sinking sort, is a simple sorting algorithm that repeatedly steps through the list to be sorted, compares each pair of adjacent items and swaps them if they are in the wrong order. The pass through the list is repeated until no swaps are needed, which indicates that the list is sorted. 
	More info : https://en.wikipedia.org/wiki/Bubble_sort
 */

 $arrToSort = [10,5,20,30,22,22,11,70,53,2];

 $arrToSortLength = sizeof($arrToSort);
 
 echo "<pre> Unsorted array : </br>";
 print_r($arrToSort);
 echo "</pre>";
 
 for($i = 0; $i < $arrToSortLength; $i++) {
	for($j = 0; $j < $arrToSortLength-$i-1; $j++) {
		if($arrToSort[$j] > $arrToSort[$j+1]) {
			$tempSwap = $arrToSort[$j+1];
			$arrToSort[$j+1] = $arrToSort[$j];
			$arrToSort[$j] = $tempSwap;
		}
	}
 }
 
 echo "<pre> Sorted array : </br>";
 print_r($arrToSort);
 echo "</pre>";
