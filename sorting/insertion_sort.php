<?php
 /*
	GitHub : https://github.com/MangeshSathe
	Developer : Mangesh Sathe, reach[DOT]mangeshsathe[AT]gmail[DOT]com
	Algorithm : Insertion sort
	Language : PHP
	Description : Insertion sort iterates, consuming one input element each repetition, and growing a sorted output list. At each iteration, insertion sort removes one element from the input data, finds the location it belongs within the sorted list, and inserts it there. It repeats until no input elements remain.
	More info :  https://en.wikipedia.org/wiki/Insertion_sort
 */

 $arrToSort = [10,5,20,30,22,44,11,70,53,2];

 $arrToSortLength = sizeof($arrToSort);
 
 echo "<pre> Original unsorted array : </br>";
 print_r($arrToSort);
 echo "</pre>";
 
 for($i = 1; $i <= $arrToSortLength-1; $i++){
 
		$key = $arrToSort[$i]; 
		$j = $i-1;
		 
		//echo "For loop trace : Value of KEY is ".$key." and value of J is ".$j."</br>";
		 
		while($j >= 0 && $arrToSort[$j] > $key){
		$arrToSort[$j+1] = $arrToSort[$j];
		$j = $j - 1;
		//echo "While loop trace : Value of J is ".$j."</br>";
		}
		 
		$arrToSort[$j+1] = $key;
		/*
		echo "<pre> Stepwise sorted array formation: </br>";
		print_r($arrToSort);
		echo "</pre>";
		*/
 }
 
 echo "<pre> Sorted array : </br>";
 print_r($arrToSort);
 echo "</pre>";
