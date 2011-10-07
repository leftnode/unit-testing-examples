<?php namespace sfctest;
use \sfc\account as account;

require_once(__DIR__.'/../lib/account.php');

class sfc_test_ex3b extends \PHPUnit_Framework_TestCase {

    public function test___construct__account_initially_empty() {
        $account = new account;
        $this->assertTrue($account->is_empty());
    }

}
