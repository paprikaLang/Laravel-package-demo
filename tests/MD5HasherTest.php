<?php
use PHPUnit\Framework\TestCase;
/**
 * Created by PhpStorm.
 * User: paprika
 * Date: 2017/10/3
 * Time: 下午3:19
 */
class MD5HasherTest extends TestCase
{
    protected $hasher;
    public function setup(){
        $this->hasher = new Paprika\Hasher\MD5Hasher();
    }
    public  function testMD5HasherMake(){
        $password = md5('password');
        $passwordTwo = $this->hasher->make('password');
        $this->assertEquals($password,$passwordTwo);
    }
    public function testMD5HasherWithSalt(){
        $passwordTwo = $this->hasher->make('password',['salt'=>'paprika']);
        $password = md5('passwordpaprika');
        $this->assertEquals($passwordTwo,$password);
    }
    public function testMD5HasherCheck(){
        $password = md5('password');
        $passwordCheck = $this->hasher->check('password',$password);

        $this->assertTrue($passwordCheck);
    }
}