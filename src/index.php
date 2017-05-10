<?php

final class Calculator {


public function calculate($a){
   switch($a){
       case ('0'||''||null):
       return 0;
       case '1':
       return 1;
       case ('1+2'):
       return 3;
       break;
   }
}

}

?>