<?php namespace sfctest;

class sfc_test_ex2 extends \PHPUnit_Framework_TestCase {

    public function test_sum() {
        $this->assertEquals(4, sum(2, 2));
    }

}

function sum($a, $b) {
    return($a+$b);
}
