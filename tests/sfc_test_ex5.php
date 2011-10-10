<?php namespace sfctest;
use \sfc\account as account;

require_once(__DIR__.'/../lib/account.php');

class sfc_test_ex5 extends \PHPUnit_Framework_TestCase {

    /**
     * @expectedException \Exception
     */
    public function test_set_age__requires_positive_integer() {
        $account = new account;
        $account->set_age(-10);
    }

    /**
     * @expectedException \PHPUnit_Framework_Error
     */
    public function test_set_favorite_foods__requires_array_of_foods() {
        $account = new account;
        $account->set_favorite_foods('sushi');
    }

}
