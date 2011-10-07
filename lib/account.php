<?php namespace sfc;

class account {

    public $id = 0;
    public $name = '';
    public $age = 0;
    public $email_address = '';
    public $password = '';

    public function __construct() {
    }


    public function set_email_address($email_address) {
        if (filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
            $this->email_address = $email_address;
        }
        return($this);
    }

}
