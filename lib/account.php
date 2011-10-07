<?php namespace sfc;

class account {

    public $id = 0;
    public $name = '';
    public $age = 0;
    public $email_address = '';
    public $password = '';

    public function __construct() {
    }

    public function is_empty() {
        foreach ($this as $v) {
            if (!empty($v)) {
                return(false);
            }
            return(true);
        }
    }


    public function set_email_address($email_address) {
        if (filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
            $this->email_address = $email_address;
        }
        return($this);
    }

}
