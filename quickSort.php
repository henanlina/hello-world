<?php
/**
 * 快速排序
 * 找到一个基准点，其余元素和基准点元素比较，分成两个数组
 */

$arr = [6,3,8,6,4,2,9,5,1];

function quick_sort($arr)
{

	//空数组或仅有一个元素时遍历不再进行递归，直接返回结果
	if(empty($arr)){
		return [];
	}

	$len = count($arr);
	if($len==1){
		return $arr;
	}

	$left = $right = [];
	$pivot = $arr[0];

	for ($i=1; $i < $len; $i++) {

		if($arr[$i]<=$pivot){

			$left[] = $arr[$i];
		}else{

			$right[] = $arr[$i];
		}
	}


	$left  = quick_sort($left);
	$right = quick_sort($right);

	return array_merge($left,[$pivot],$right);

}

$data = quick_sort($arr);
var_dump($data);

