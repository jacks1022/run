<?php
$nums =[3,2,4];
$newArr = array_flip($nums);

print_r($newArr);

$res = twoSum([3,2,4],6);

print_r($res);
   function twoSum(array $nums, $target) 
    {
        $find = [];
        $count = count($nums);
        
        for ($i = 0; $i < $count; $i++) {
            $value = $nums[$i];
            echo $target ."---". $value;
            if ($a = array_keys($find, ($target - $value))) {
                return [$a[0], $i];
            }
            
            $find[$i] = $value;
        }
    }

