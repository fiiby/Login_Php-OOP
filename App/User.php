<?php
class user
{
    public $id;
    public $username;
    public $email;
    public $password;

    // constructor
    public function __construct($id, $username, $email, $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    // function to print the user details
    public function print_user_info()
    {
        echo "{$this->id} {$this->username} {$this->email} {$this->password}";
    }
}

$user = new User(1, "admin", "admin@example.com", "adminPassword");
$person->print_user_info();


