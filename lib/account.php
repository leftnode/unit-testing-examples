<?php namespace sfc;

class account {

    public $id = 0;
    public $name = '';
    public $age = 0;
    public $email_address = '';
    public $password = '';

    public $favorite_foods = array();

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


    public function set_age($age) {
        $age = (int)$age;
        if ($age < 0) {
            throw new \Exception("The age can not be a negative number.");
        }
        $this->age = $age;
        return($this);
    }

    public function set_email_address($email_address) {
        if (filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
            $this->email_address = $email_address;
        }
        return($this);
    }

    public function set_favorite_foods(array $favorite_foods) {
        $this->favorite_foods = $favorite_foods;
        return($this);
    }


    public function get_email_address() {
        return($this->email_address);
    }

}
