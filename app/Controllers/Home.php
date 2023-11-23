<?php

namespace App\Controllers;

use Facebook\Facebook;

class Home extends BaseController
{
    // private $facebook="";
    // private $fb_helper="";
    // function __construct(){
    //     $facebook = new Facebook([
    //         'app_id' => '3526523347608131',
    //         'app_secret' => 'e2832dcc9c6fe49b7f34dfc21c8d00b7',
    //         'default_graph_version' => 'v2.3'
    //     ]);
    //     $fb_helper = $facebook->getRedirectLoginHelper();
    // }   
    public function index(){
        // return view('welcome_message');
        // return redirect()->to(base_url('/user/signup'));
        return redirect()->to('user/login'); 
    }

//     public function login(){
//         $fb_permissions = ['email'];
//         $data['fb_btn'] = $fb_helper->getLoginUrl('http://localhost:8080/user/login', $fb_permissions);
//         return view("login", $data);
//     }

    public function email(){

        $to = 'kushalvarin@gmail.com';
        $subject = 'Account Activation-GoPhp';
        $message = 'hi kushal';

        $email = \Config\Services::email();

        // $email->setFrom('admin@gmail.com', 'Kushal');
        $email->setTo($to);
        $email->setFrom('kushgujrati01@gmail.com', 'Info');
        // $email->setCC('another@another-example.com');
        // $email->setBCC('them@their-example.com');

        $email->setSubject($subject);
        $email->setMessage($message);

        if($email->send()){
            echo "Success";
        }
        else{
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }

        // return "email route";
    }
}
