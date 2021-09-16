<?php

namespace Easoblue\LaraHelper\Facade;

use Illuminate\Support\Facades\Facade;

class StringHelper extends Facade {
   protected static function getFacadeAccessor() { 
   	return 'StringHelper'; 
   }
}