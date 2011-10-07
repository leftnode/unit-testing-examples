<?php namespace sfctest;
use \sfc\account as account;

require_once(__DIR__.'/../lib/account.php');

class sfc_test_ex3a extends \PHPUnit_Framework_TestCase {

    public function test___construct__account_initially_empty() {
        $account = new account;
        $this->assertEmpty($account->name);
        $this->assertEquals(0, $account->age);
    }

    /**
     * @dataProvider provider_invalid_email_address
     */
    public function test_set_email_address__requires_valid_email_address($email_address) {
        $account = new account;
        $account->set_email_address($email_address);

        $this->assertEmpty($account->email_address);
    }

    public function test_set_email_address__allows_valid_email_address() {
        $email_address = 'vcherubini@speedfc.com';

        $account = new account;
        $account->set_email_address($email_address);

        $this->assertEquals($email_address, $account->email_address);
    }



    public function provider_invalid_email_address() {
        return(array(
             array('vic')
            ,array('vic@')
            ,array('@vic.com')
            ,array('jerry@192.168.1.102.45')
        ));
    }

}
