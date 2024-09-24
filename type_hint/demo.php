<?php
declare(strict_types=1);

class Demo {
    public function typeXReturnY($x): C {
        echo __FUNCTION__ . "<br>";
        switch ($x) {
            case 'A':
                return new A(); 
            case 'B':
                return new B(); 
            case 'C':
                return new C(); 
            case 'I':
                return new C(); 
            default:
                return null; 
        }
    }
}
?>
