<?php
namespace Paprika\Hasher;

class MD5Hasher
{
    //对参数设置默认值,可以在不给出参数值时也能让函数通过
    public function make($value,array $options = []){
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5',$value.$salt);
    }
    public  function check($value,$hashValue,array $options=[]){
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5',$value.$salt) === $hashValue;
    }

}