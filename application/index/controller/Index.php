<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
      $test=db('ad')->field('test')->select();
	  dump($test);
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
