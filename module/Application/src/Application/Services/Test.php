<?php
namespace Application\Services;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Cache\StorageFactory;
use Zend\Cache\Storage\Adapter\Memcached;
use Zend\Cache\Storage\StorageInterface;
 
class Test
{ 
################################################################################ 
	function __construct() 
    {
        $this->x = 3;
        $this->anotherX = "5";
    } 
################################################################################ 
    function FindingForX()
    {
        $x = $this->x ; 
        for($i=1;$i<=4; $i++)
        {
            $x = $x + (2 * $i);
        }        
        return $x;
    }
################################################################################ 
    function FindingForY()
    {
        $y = 99 - (10*2) -24 ; 
        return $y;
    }
################################################################################ 
    function FindingForAnotherX()
    {
        $x = $this->anotherX;
        for($i=2;$i<=5;$i++)
        {
            $x =  "$i$x";
        }
        return $x;
    }
################################################################################ 
}
    