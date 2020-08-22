<?php namespace App\Controllers;

use CodeIgniter\Controller;

class User extends Controller
{
    public function index()
    {
        
    }

    public function login()
	{

		$this->data = array(
							'title'	=>'로그인',
							'css'=>array('user'),
							'javascript' =>array('login')
		);


	    echo view('templates/header',$this->data);
	    echo view('user/login');
	    echo view('templates/footer');
	}

	public function signUp()
	{
		$this->data = array(
							'title'	=>'회원가입',
							'css'=>array('user'),
							'javascript' =>array('signUp')
		);


	    echo view('templates/header',$this->data);
	    echo view('user/signUp');
	    echo view('templates/footer');
	}

	public function idCheck($id){

		if($id == 'test'){
			return '중복';
		}else{
			return '중복되지않음';
		}

	}

}