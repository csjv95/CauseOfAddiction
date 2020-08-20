<?php namespace App\Controllers;

use CodeIgniter\Controller;

class User extends Controller
{
    public function index()
    {
        
    }

    public function login()
	{
	    echo view('templates/header');
	    echo view('user/login');
	    echo view('templates/footer');
	}
}