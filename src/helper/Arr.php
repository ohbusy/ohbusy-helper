<?php

namespace ohbusy\helper;

class Arr
{
    /**
     * 从数组中随机取出一个或多个值
     * @return string|array
     */
    public static function getArrayRandValue($array,$nember = 1){

        if($nember == 1){
            return  $array[array_rand($array,$nember)];
        }else{
            $randKeyArr = array_rand($array,$nember);
            $count = count($randKeyArr);
            $randValueArr = [];
            for ($i = 0;$i<$count;$i++){
                $randValueArr[] = $array[$randKeyArr[$i]];
            }
            return $randValueArr;
        }

    }

}