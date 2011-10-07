<?php namespace sfctest;
use \sfc\account as account;

require_once(__DIR__.'/../lib/account.php');

class sfc_test_ex3a extends \PHPUnit_Framework_TestCase {

    public function test___construct__account_initially_empty() {
        $account = new account;
        $this->assertEmpty($account->name);
        $this->assertEquals(0, $account->age);
    }

}
