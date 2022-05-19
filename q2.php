<?php
    ///////////////////////////Reem/////////////////////////////

class A {
    function scream( ) {
        return 'ahhhhhhhhhhhh';
    }
}
class B extends A {
    function scream( ) {
        return 'nnnnnnnnnnnnnnnnnnnn';
    }
}

$a = new A;
echo $a->scream( ); // ahhhhhhhhhhhh
?> 