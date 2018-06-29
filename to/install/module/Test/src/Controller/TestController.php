<?php

namespace Test\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TestController extends AbstractActionController
{

    function init()
    {
	   $frontend= array(
    		'lifetime' => 36000,
    		'automatic_serialization' => true
		);

	   $backend= array(
    			'cache_dir' => '/path/to/install/data/cache',
		);

	   $cache = Zend_Cache::factory('core', 'File', $frontend, $backend );
	   Zend_Registry::set('cache',$cache);
    }

    public function indexAction()
    {
		
    }

    function firstAction()
  {
	//3, 5, 9, 15, X finding X
	// 3 = 3 + 1(0)     1
	// 5 = 3 + 2(1)	    2
	// 9 = 3 + 3(2)	    3
	// 15 = 3 + 4(3)    4
	// ans = 3 + n(n-1) n
	// In this case X is 5th number, that means n is 5.
	
	$n = 5;	
	$ans = 3 + $n * ($n-1);

	echo $ans;
	die();
  }

  function secondAction()
  {
	// Equation is (Y + 24)+(10 × 2) = 99
	// Replace Y with $y and solve equation
	$y  = 99 - (10*2)-24;	
	echo $y;
	die();
  }

  function thirdAction()
  {
	//If 1 = 5 , 2 = 25 , 3 = 325 , 4 = 4325 Then 5 = X
	//	1 =     5
	//   2 =    25      
	//   3 =   325
  	//   4 =  4325
     //   5 =  X
	// Pattern n = n[n-1]
	// 2 = 25 (2[5])
     // 3 = 325 (3[25])
     // 4 = 4325 (4[325])
	// I consider this is the pattern rather than  	      	// mathematical operation.
	// If it's mathematical operation, then 5 = 1 according to	// the first line. 
     
	$ans = 54325;

	echo $ans;
	die();
  }

}

?>