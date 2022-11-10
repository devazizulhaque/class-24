<?php


namespace App\classes;

use App\classes\Student;

class Home
{
    public $name = 'Habibur Rahman';
    protected $email = 'email@email.com';
    private $password = '0154245';

    public function name ()
    {
        $this->two();
    }

    protected function email ()
    {
        echo 'email@domain.com';
    }

    private function password ()
    {
        echo 'you password is 1234';
    }

    public function index ()
    {
//        $this->name = 'Sokina Bibi';
//        echo $this->name;
        header('Location: action.php?page=home');
    }
}