<?php
$numbers = array(4,6,2,1,3,8,9,7);

function QuickSort($numbers,$i,$j,$p){	
		$P = $numbers[$p];
		while($i < $j){
			 while($numbers[$i] <= $numbers[$p] && $i < $j){
			     $i++;
			 }
    
			 while($numbers[$p] < $numbers[$j] && $i < $j){
				 $j--;
			 }
			 if($P <= $numbers[$i] && $numbers[$j] < $P){				 
				 $tmp = $numbers[$i];
				 $numbers[$i] = $numbers[$j];
				 $numbers[$j] = $tmp;
				 $j--;
				 $i++;
			 }
			 elseif($P <= $numbers[$i]){
			     $j--;
			 }
			 else{
			     $j--;
			     $i++;   
			}
			 print_r($numbers);
			 echo $i.$j;
			 
			 //if($numbers[$i] > $P){
			   //return QuickSort($numbers,0,$numbers[$i-1],0);		
			 //}	
	   }
	   
	 
	    //QuickSort($numbers,0,$numbers[$r],$numbers[$r-1]);
        //QuickSort($numbers,$numbers[$r+1],$numbers[count($numbers)-1],$numbers[$r+1]);
	   
   	
    
    
		//uickSort($numbers,$numbers($i+1),$numbers[count($numbers)-1],$numbers($i+1));
}   	      

QuickSort($numbers,0,7,4);
//if($i < $j){
?>
 
