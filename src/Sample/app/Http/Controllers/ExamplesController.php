<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamplesController extends Controller
{
    public function __construct()
    {
        // echo "construct".PHP_EOL;
    }

    public function classExtends()
    {
        $classA = new ClassA;
        // echo $classA->printPHP();
        echo $classA->methodB().PHP_EOL;
        echo $classA->instanceVal.PHP_EOL;
        echo ClassA::$classVal.PHP_EOL;
        echo ClassA::classFunc().PHP_EOL;
        // echo $classA->protectedFunc().PHP_EOL; //これはエラー。Protectedのメソッドは直では呼び出せない。
        die();

        // return view('home', ['tweets' => $tweets]);
    }
}


class ClassA extends ClassB
{
    static $classVal = "class val";         //**** クラス変数
    public $instanceVal = "instance val";   //**** インスタンス変数

    //**** クラス メソッド
    public static function classFunc() {
        echo "クラスメソッドです。".PHP_EOL;
    }

    //**** インスタンス メソッド
    public function printItem($item) {
        echo $item.PHP_EOL;
    }

    public function printPHP() {
        echo "PHPですよ。".PHP_EOL;
    }

    public function methodB() {
        echo "オーバーライドしたmethod Bです。".PHP_EOL;

        //**** スーパークラス（親クラス）のメソッド呼び出し
        parent::classBmethod1();

        //**** protectedメソッドを呼び出す
        parent::protectedFunc();
    }
}

class ClassB
{
    public function printItem($item) {
        echo $item.PHP_EOL;
    }

    public function printPHP() {
        echo "PHPですよ。".PHP_EOL;
    }

    public function methodB() {
        echo "method Bです。".PHP_EOL;
    }

    public function classBmethod1() {
        echo "classBmethod1です。".PHP_EOL;
    }

    protected function protectedFunc() {
        echo "protectedFuncです。".PHP_EOL;
    }
}
