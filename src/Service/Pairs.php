<?php

namespace Hilovska\Pairs\Service;

class Pairs
{
    public function getPairs(array $args, bool $unique)
    {
    	if($unique){
    		$args = array_unique($args);
    	}
        if(count($args) < 2){
            throw new \Exception("Enter at least two arguments, please.");
        }
    	$pairs = [];
        foreach ($args as $key1 => $arg1) {
	        foreach ($args as $key2 => $arg2) {
	        	if($key1 !== $key2){
	        		$pairs[] = $arg1 . ' ' . $arg2;
	        	}
	        }
            unset($args[$key1]);
        }
        return $pairs;
        
    }
}
