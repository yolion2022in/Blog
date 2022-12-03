<?php
namespace App\Services;

//自訂小玩意 的 class & method
class GismoService
{


    //中文(中日韓亞洲語系雙bytes)打亂 的 method
    /**
     * @param $str | string
     * @return string
     */
    public static function mb_str_shuffle($str) {
        if( !( $str && gettype($str)=='string' ) )
            return false;   //'別搞偶啊！';
        
        //正式來
        $ret = array();
        $cotype = mb_detect_encoding($str);   //偵測編碼

        for ($i=0; $i<mb_strlen($str, $cotype); $i++){
            array_push($ret, mb_substr($str, $i, 1, $cotype));
        }

        shuffle($ret);
        return join($ret);
    }


    /**
     * @param $str | string
     * @param $length | integer
     * @return string
     */
    public static function mb_substr_and_shuffle($str, $length){
        if( !( $str && gettype($str)=='string' ) )
            return false;   //'別搞偶啊！';
        
        if( !( $length 
                && gettype($length)=='integer' 
                && mb_strlen($str) > (int)$length 
                && (int)$length > 0 
            ) )
            return false;   //'別搞偶啊！';

        //返回打亂後的指定長度字數
        return mb_substr( self::mb_str_shuffle($str) ,0,$length, 'utf-8' );
    }





}
