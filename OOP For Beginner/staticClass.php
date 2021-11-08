<?php 


// we mostly used static class for utilities



class Weather{

    public static $tempConditions = ['cold', 'mild', 'Warm'];


    public static function celsiusToFarenhiet($c){

        return $c * 9 /5 +32;
    }

    public static function determineTempCondition($f){

        if($f < 40 ){
            //access within the class using self. Which refer to the class not the instance. As the static affliated to the specific class not instance self::
            return self::$tempConditions[0];

        }
        else if($f <70){
            return self::$tempConditions[1];
        }
        else{
            return self::$tempConditions[2];
        }

    }

}