<?php 
class Calculate {
    public function solve($value1,$value2,$sign){
        if($sign == '+'){
            $total = $value1+$value2;
        }elseif($sign == '-'){
            $total = $value1-$value2;
        }elseif($sign == '*'){
            $total = $value1*$value2;
        }elseif($sign == '/'){
            $total = $value1/$value2;
        }
        return $total;
    }
}
?>