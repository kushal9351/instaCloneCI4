<?php

namespace App\Controllers;

use Facebook\Facebook;
use \App\Models\UserModel;
use \App\Models\imagePostModel;
use \App\Models\FollowersModel;
use \App\Models\LikeModel;
use \App\Models\CommentModel;
use \App\Models\MessageModel;




use CodeIgniter\CLI\Console;

class User extends BaseController
{

    // private $facebook="";
    // private $fb_helper="";
    // function __construct(){
    //     $this->facebook = new Facebook([
    //         'app_id' => '3526523347608131',
    //         'app_secret' => 'e2832dcc9c6fe49b7f34dfc21c8d00b7',
    //         'default_graph_version' => 'v2.3'
    //     ]);
    //     $this->fb_helper = $facebook->getRedirectLoginHelper();
    // }  

    public function login()
    {
        // ini_set("display_errors", true);
        // error_reporting(E_ALL);
        $data = [];
        // return view('login page');
        // return "<h1>login page</h1>"; 
        $facebook = new Facebook([
            'app_id' => '3526523347608131',
            'app_secret' => 'e2832dcc9c6fe49b7f34dfc21c8d00b7',
            'default_graph_version' => 'v2.3'
        ]);

        $fb_helper = $facebook->getRedirectLoginHelper();

        if ($this->request->getVar('state')) {
            $fb_helper->getPersistentDataHandler()->set('state', $this->request->getVar('state'));
        }


        if ($this->request->getVar('code')) {
            if (session()->get('access_token')) {
                $access_token = session()->get('access_token');
            } else {
                $access_token = $fb_helper->getAccessToken();
                session()->set('access_token', $access_token);
                $facebook->setDefaultAccessToken(session()->get('access_token'));
            }
            $graph_response = $facebook->get('/me?fields=name,email', $access_token);
            $fb_user_info = $graph_response->getGraphUser();

            if (!empty($fb_user_info['id'])) {
                $fbdata = [
                    'profile_pic' => 'http://graph.facebook.com/' . $fb_user_info['id'] . '/picture',
                    'user_name' => $fb_user_info['name'],
                    'email' => $fb_user_info['email'],
                    'userid' => $fb_user_info['id'],
                ];

                session()->set('userdata', $fbdata);
            }
        } else {
            $fb_permissions = ['email'];
            $data['fb_login_url'] = $fb_helper->getLoginUrl('http://localhost:8080/user/login', $fb_permissions);
        }

        // return view("fb_view", $data);
        return view("loginPage", $data);


        // *********************************************************************************************************************************
        // $fb_permissions = ['email'];
        // $data['fb_login_url'] = $this->fb_helper->getLoginUrl('http://localhost:8080/user/login', $fb_permissions);
        // return view("fb_view", $data);
    }

    // public function authWithFB(){
    //     if ($this->request->getVar('state')) {
    //         $this->fb_helper->getPersistentDataHandler()->set('state', $this->request->getVar('state'));
    //     }

    //     if ($this->request->getVar('code')) {
    //             if (session()->get('access_token')) {
    //                 $access_token = session()->get('access_token');
    //             } else {
    //                 $access_token = $this->fb_helper->getAccessToken();
    //                 session()->set('access_token', $access_token);
    //                 $this->facebook->setDefaultAccessToken(session()->get('access_token'));
    //             }
    //             $graph_response = $this->facebook->get('/me?fields=name,email', $access_token);
    //             $fb_user_info = $graph_response->getGraphUser();
    //     }
    // }

    public function logout()
    {
        if (session()->has('userdata')) {
            session()->destroy();
            return redirect()->to('user/login');
        }
    }

    public function signUp()
    {

        $data = [];

        $facebook = new Facebook([
            'app_id' => '3526523347608131',
            'app_secret' => 'e2832dcc9c6fe49b7f34dfc21c8d00b7',
            'default_graph_version' => 'v2.3'
        ]);

        $fb_helper = $facebook->getRedirectLoginHelper();
        if ($this->request->getVar('state')) {
            $fb_helper->getPersistentDataHandler()->set('state', $this->request->getVar('state'));
        }


        if ($this->request->getVar('code')) {
            if (session()->get('access_token')) {
                $access_token = session()->get('access_token');
            } else {
                $access_token = $fb_helper->getAccessToken();
                session()->set('access_token', $access_token);
                $facebook->setDefaultAccessToken(session()->get('access_token'));
            }
            $graph_response = $facebook->get('/me?fields=name,email', $access_token);
            $fb_user_info = $graph_response->getGraphUser();

            if (!empty($fb_user_info['id'])) {
                $fbdata = [
                    'profile_pic' => 'http://graph.facebook.com/' . $fb_user_info['id'] . '/picture',
                    'user_name' => $fb_user_info['name'],
                    'email' => $fb_user_info['email'],
                    'userid' => $fb_user_info['id'],
                ];

                session()->set('userdata', $fbdata);
            }
        } else {
            $fb_permissions = ['email'];
            $data['fb_login_url'] = $fb_helper->getLoginUrl('http://localhost:8080/user/login', $fb_permissions);
        }
        return view('signUpPage.php', $data);


        // *********************************************************************************************************************************
        // $fb_permissions = ['email'];
        // $data['fb_btn'] = $this->fb_helper->getLoginUrl('http://localhost:8080/user/login', $fb_permissions);
        // return view("signUpPage.php");
    }

    public function create()
    {

        if ($this->request->is('post')) {



            // helper(['form']);
            // $validation = \Config\Services::validation();

            // $rules = $this->validate([

            //     'email_id' => 'required|min_length[10]|is_unique[ci4.email]',
            //     'mobile_No' => 'required',
            //     'fullName' => 'required|min_length[10]',
            //     'userName' => 'required|min_length[10]',
            //     'password' => 'required|max_length[255]|min_length[8]'
            // ]);

            // if (!$rules) {
            //     return view('signUpPage.php', ['validation' => $this->validator]);
            // } else {
            $user = new UserModel();

            $phone = '';
            $email = '';

            if (is_numeric($this->request->getPost('mobileNumberEmailAddress')) == 1) {
                $phone = $this->request->getPost('mobileNumberEmailAddress');
            } else {
                $email = $this->request->getPost('mobileNumberEmailAddress');
            }

            // $password = md5($this->request->getPost('password'));

            $data = [
                'email_id' => $email,
                'mobile_No' => $phone,
                'fullName' => $this->request->getPost('fullName'),
                'userName' => $this->request->getPost('userName'),
                // 'password' =>  $this->request->getPost('password')
                'password' => md5((string) $this->request->getPost('password'))

            ];

            print_r($data);
            $user->save($data);
            echo "<br>";

            // return "successfully inserted";
            // }
        }
        session()->setFlashData("error_controller", "account is created, Now you can login");
        return redirect()->to(base_url('/user/login'));

        // die("123");
        // return "create page";

    }


    public function searchAndLogin()
    {
        if ($this->request->is('post')) {



            // helper(['form']);
            // $validation = \Config\Services::validation();

            // $rules = $this->validate([
            //     'email_id' => 'required|min_length[10]|is_unique[ci4.email]',
            //     'mobile_No' => 'required',
            //     'fullName' => 'required|min_length[10]',
            //     'userName' => 'required|min_length[10]',
            //     'password' => 'required|max_length[255]|min_length[8]'
            // ]);

            // if (!$rules) {
            //     return view('loginPage.php', ['validation' => $this->validator]);
            // } 


            $user = new UserModel();

            // $phone = '';
            // $email = '';
            $data = '';
            $result = '';
            $password = md5($this->request->getPost('password'));
            // if(!empty($password)){
            //     $password = md5($password);
            // }


            if (is_numeric($this->request->getPost('mobileNumberEmailAddress')) == 1) {
                // $this->$phone = $this->request->getPost('mobileNumberEmailAddress');
                // $this->$data = [
                //     'mobile_No' => $this->request->getPost('mobileNumberEmailAddress'),
                //     'password' => $this->request->getPost('password')
                // ];

                $mobile_No = $this->request->getPost('mobileNumberEmailAddress');

                $result = $user->where('mobile_No', $mobile_No)->first();

                // print_r($result);



            } else {
                // $email = $this->request->getPost('mobileNumberEmailAddress');
                // $this->$data = [
                //     'email_id' => $this->request->getPost('mobileNumberEmailAddress'),
                //     'password' => $this->request->getPost('password')
                // ];

                $email = $this->request->getPost('mobileNumberEmailAddress');
                // $password = $this->request->getPost('password');

                $result = $user->where('email_id', $email)->first();

                // print_r($this->$result);
            }

            // $data = [
            //     'email_id' => $email,
            //     'mobile_No' => $phone,
            //     'password' => $this->request->getPost('password')
            // ];

            // print_r($this->$data);
            // echo "hello";
            // die;
            // echo $user->find($data);
            // echo "<br>";
            // die;
            // return "successfully inserted";

            if ($result != null) {
                // if (password_verify($this->$password, $this->$result['password'])) {
                //     return 'Password is valid!';
                // } else {
                //     return 'Invalid password.';
                // }
                // echo $password;
                // echo "<br>," . $result['password'];
                if ($password == $result['password']) {
                    // return 'Password is valid!';

                    // SETTING SESSIONS
                    $session = session();
                    $session->set('userdata', $result);
                    $session->set('loggedin', 'loggedin');
                    return redirect()->to('user/dashboard');

                } else {
                    session()->setFlashData("error_controller", "Sorry, your password was incorrect. Please double-check your password.");
                    return redirect()->to('user/login');
                }
            } else {
                session()->setFlashData("error_controller", "Sorry, your password was incorrect. Please double-check your password.");
                return redirect()->to('user/login');
            }
            // }
        }
    }


    public function password_Reset()
    {
        return view('resetPage');
    }


    public function email()
    {

        $auth = bin2hex(random_bytes(30));


        if ($this->request->is('post')) {
            $user = new UserModel();

            // $email = '';
            $email = $this->request->getPost('mobileNumberEmailAddress');
            // print_r($email);
            $result = $user->where('email_id', $email)->first();
            // $user->save($data);
            // echo $result['email_id'] . " <br>";
            // print_r($result);


            if ($result == null) {

                session()->setFlashData("error_controller", "No users found");
                return redirect()->to('user/password/reset');
            } else {
                $data = [
                    'resetToken' => $auth
                ];
                $user->update($result['id'], $data);

                $username = $result['userName'];
                $email = $result['email_id'];
                // echo "found";

                $to = $email;
                $subject = $username . ", we've made it easy to get back to Instagram";
                $message = "Hi " . $username . ",<br>
                We're sorry to hear that you're having trouble with logging in to Instagram. We've received a message that you've forgotten your password. If this was you, you can get straight back into your account or reset your password now. <br>
                <a  href='http://localhost:8080/user/password/reset/confirm/" . $auth . "'><button style='text-align: center; background-color: blue; color:white;'>reset your password</button></a><br>

                If you didn't request a login link or password reset, you can ignore this message and learn more about why you might have received it.

                Only people who know your Instagram password or click the login link in this email can log in to your account.";



                $email = \Config\Services::email();

                // $email->setFrom('admin@gmail.com', 'Kushal');
                $email->setTo($to);
                $email->setFrom('kushgujrati01@gmail.com', 'Instagram');
                // $email->setCC('another@another-example.com');
                // $email->setBCC('them@their-example.com');

                $email->setSubject($subject);
                $email->setMessage($message);

                if ($email->send()) {
                    $dataa['email'] = $to;
                    // print_r($dataa);
                    // die;

                    return view('emailSendMsg.php', $dataa);

                } else {
                    $data = $email->printDebugger(['headers']);
                    print_r($data);
                }
            }
        }
        // return redirect()->to(base_url('/user/login'));





        // return "email route";
    }

    public function confirm_Password_Reset($auth)
    {
        $user = new UserModel();

        if ($this->request->is('post')) {
            $password = $this->request->getPost('spassword');
            $cpassword = $this->request->getPost('cpassword');

            // php validation
            if ($password != $cpassword) {
                session()->setFlashData("error_controller", "Sorry, your password and confirm password are not same. Please double-check your password.");
                return redirect()->to('user/password/reset/confirm/' . $auth);
            }
            if (strlen((string) $password) < 6 || strlen((string) $cpassword) < 6) {
                session()->setFlashData("error_controller", "Your password must be at least 6 characters");
                return redirect()->to('user/password/reset/confirm/' . $auth);
            }
            // Uppercase and lowercase letter check
            if (!preg_match("/[A-Z]/", ((string) $password)) || !preg_match("/[a-z]/", ((string) $password))) {
                session()->setFlashData("error_controller", "Password must contain both uppercase and lowercase letters");
                return redirect()->to('user/password/reset/confirm/' . $auth);
            }
            // Numeric character check
            if (!preg_match("/[0-9]/", ((string) $password))) {
                session()->setFlashData("error_controller", "Password must contain at least one numeric character");
                return redirect()->to('user/password/reset/confirm/' . $auth);
            }
            // Special character check (you can modify this pattern as needed)
            if (!preg_match("/[^A-Za-z0-9]/", ((string) $password))) {
                session()->setFlashData("error_controller", "Password must contain at least one special character");
                return redirect()->to('user/password/reset/confirm/' . $auth);
            }

            // change pass and store into database
            $result = $user->where('resetToken', $auth)->first();
            // print_r($result);
            $data = [
                'resetToken' => '',
                'password' => md5($password)
            ];
            $user->update($result['id'], $data);
            session()->setFlashData("error_controller", "password changed successfully");
            return redirect()->to('user/login');
        } else {
            $result = $user->where('resetToken', $auth)->first();
            // $user = new UserModel();
            // $result = $user->where('resetToken', $auth)->first();
            // print_r($result);
            if ($result == null) {
                return view('linkExpirePage.php');
            }
            $data['auth'] = $auth;
            return view('old&NewPass.php', $data);
        }

    }

    // *********************************************************************************
    public function dashboard()
    {

        // display
        $user = new UserModel();
        $posts = new imagePostModel();
        $followList = new FollowersModel();
        $likeList = new LikeModel();

        $result = $user->where('email_id', session()->get('userdata')['email_id'])->first();
        $result2 = $posts->join('users', 'users.id = posts.user_id')->orderBy('posts.pId', 'desc')->findAll();
        $result3 = $user->findAll();
        $result4 = $followList->where('user_id', session()->get('userdata')['id'])->findAll();
        
        $result5 = array();
        
        $groupByData = $likeList->select(['post_id', 'COUNT(post_id) as post_count'])->groupBy('post_id')->findAll();
        // echo "<pre>";    

       
        
        $likeData = $likeList->where('user_id', session()->get('userdata')['id'])->findAll();
        $likeArr = array();
        $likePostIdArr = array();



        // $likeLists = $likeList->>



        // $noOFLikes = $likeList->findAll();




        // print_r(session()->get('userdata'));
        // die;

        // Load the database library
        // $db = \Config\Database::connect();

        // $sql = "SELECT * FROM posts";
        // $result2 = $db->query($sql);
        // echo "hello";
        foreach ($result4 as $res) {
            array_push($result5, $res['follower_id']);
        }
        foreach ($likeData as $res){
            array_push($likePostIdArr, $res['post_id']);
        }

        foreach ($groupByData as $res){
            $likeArr[$res['post_id']] = $res['post_count'];
        }

        //  print_r($groupByData[post_id]);
        // die;

        $msgUserData = $this->fetchAllUserMsg();
        

        $data['result'] = $result;
        $data['posts'] = $result2;
        $data['users'] = $result3;
        $data['following'] = $result5;
        $data['likesData'] = $likeArr;
        $data['likePostIdArr'] = $likePostIdArr;
        $data['groupByData'] = $groupByData;
        $data['msgUserData'] = $msgUserData;


        return view('dashboard.php', $data);

    }


    public function submitEditProfile()
    {
        // return "here";

        // helper(['form', 'url']);
        $user = new UserModel();
        $imageName = "";


        $file = $this->request->getFile('uploadfile');




        $validated = $this->validate([
            // 'uploadfile' => [
            //     'uploaded[uploadfile]',
            //     'mime_in[uploadfile,image/jpg,image/jpeg,image/gif,image/png]',
            //     'max_size[uploadfile,4096]',
            // ],
            'userName' => 'required',
            'fullName' => 'required',
            'gender' => 'required',
        ]);

        if (!$validated) {
            session()->setFlashData("error_msg", "something went wrong");
            // $data['validation'] = $this->validator;
            return redirect()->to('user/dashboard');
        }
        // echo ($file);

        // if($file->isValid()){
        //     echo "here inside";
        //     // $file->store();
        //     $name = $file->getRandomName();
        //     $file->move('uploads', $name);
        // }

        if ($file->isValid()) {
            $imageName = $file->getRandomName();
            // $file->store('uploads', $name);
            // $file->store();
            $file->move('./uploads/', $imageName);
        }

        // if($file !=null){ 

        // }

        // echo $imageName;
        // die;


        $data = [

            'profile_pic' => $imageName,
            'fullName' => $this->request->getPost('p_name'),
            'userName' => $this->request->getPost('p_username'),
            // 'password' =>  $this->request->getPost('password')
            'bio' => $this->request->getPost('p_bio'),
            'addLink' => $this->request->getPost('p_addLink'),
            'gender' => $this->request->getPost('p_gender')
        ];

        // print_r($data);
        // die;
        // echo "<br>";
        // print_r(session()->get('userdata')['id']);
        $id = session()->get('userdata')['id'];

        $user->update($id, $data);

        session()->setFlashData("error_controller", "Edit profile successfuly");
        return redirect()->to('user/dashboard');

    }


    public function submitPostImage()
    {
        $postImg = new imagePostModel();
        $imageName = "";

        $file = $this->request->getFile('postImg');


        $validated = $this->validate([
            'postImg' => [
                'rules' => 'uploaded[postImg]|max_size[postImg,1024]|ext_in[postImg,jpg,jpeg,png,gif]',
                // Adjust the file type and size as needed
                'errors' => [
                    'uploaded' => 'Please select an image to upload.',
                    'max_size' => 'The image size should not exceed 1 MB.',
                    'ext_in' => 'Invalid file format. Only JPG, JPEG, PNG, and GIF are allowed.',
                ],
            ],
            'post_text' => 'required',
        ]);

        if (!$validated) {
            session()->setFlashData("error_msg", "something went wrong");
            // $data['validation'] = $this->validator;
            return redirect()->to('user/dashboard');
        }




        if ($file->isValid()) {
            $imageName = $file->getRandomName();
            $file->move('./uploads/', $imageName);

            $data = [
                'user_id' => session()->get('userdata')['id'],
                'post_Img' => $imageName,
                'post_text' => $this->request->getPost('postCommentBox')
            ];

            // print_r($data); 
            // die;
            $postImg->save($data);

            session()->setFlashData("error_controller", "uploaded your post succesfully");
            return redirect()->to('user/dashboard');
        }
    }


    public function showMyProfile($name)
    {
        // return $name ." here is your profile";
        $user = new UserModel();
        $posts = new imagePostModel();
        $followList = new FollowersModel();
        $CommentModel = new CommentModel();

        $result = $user->where('userName', $name)->first();
        // $id = 

        // print_r($result);
        // echo "<br>" . $id;

        // die;
        if (!$result) {

            // die("page was not found");
            return view('linkExpirePage');
        }
        $result2 = $posts->where('user_id', $result['id'])->findAll();
        $noOfPosts = $posts->where('user_id', $result['id'])->countAllResults();
        // $noOfFollowing = $followList->where('user_id', $result['id'])->countAllResults();


        // Get the number of users the current user is following
        $following = $followList->where('follower_id', $result['id'])->findAll();
        $noOfFollowing = count($following);
        // $noOfFollowers = $followList->where('follower_id', $result['id'])->countAllResults();


        // Get the list of followers' user details
        $followers = $followList->where('user_id', $result['id'])->findAll();

        // Get the followers' details from the 'users' table
        $followerDetails = [];
        $checkFollowUnfollow = [];
        foreach ($followers as $follower) {
            $followerUser = $user->find($follower['follower_id']);
            if ($followerUser) {
                $followerDetails[] = $followerUser;
            }

            // take all data into array for follow and unfollow 
            array_push($checkFollowUnfollow, $follower['follower_id']);
        }



        // Get the list of users the current user is following
        $followingList = [];
        foreach ($following as $followedUser) {
            $followedUserData = $user->find($followedUser['user_id']);
            if ($followedUserData) {
                $followingList[] = $followedUserData;
            }
        }



        // $fetchAllCommentBasedOnUser = $CommentModel->where('user_id', $result['id'])->findAll();


        // $commentPostList = [];
        // foreach ($fetchAllCommentBasedOnUser as $user) {
        //     $commentPostData = $posts->find($user['user_id']);
        //     if ($commentPostData) {
        //         $commentPostList[] = $commentPostData;
        //     }
        // }



        // $result5 = array();
        // foreach($followers as $res){
        // array_push($result5, $res['follower_id']);
        // }

        // print_r($commentPostList);
        // die;






        // $result3 = $user->join('follower_list', 'users.id = follower_list.follower_id')->findAll();

        // print_r($result);
        // die;


        $data['result'] = $result;
        $data['posts'] = $result2;
        $data['noOfPosts'] = $noOfPosts;
        $data['noOfFollowing'] = $noOfFollowing;
        // $data['noOfFollowers'] = $noOfFollowers;
        $data['listOfFollowers'] = $followerDetails;
        $data['checkFollowUnfollow'] = $checkFollowUnfollow;
        $data['followingList'] = $followingList;
        // $data['msgUserData'] = fetchAllUserMsg();



        return view('showMyProfile', $data);





    }

    public function ajaxRequest()
    {
        if ($this->request->isAJAX()) {
            // die;
            $result = $this->request->getvar('name');
            // echo $result;
            // return json_encode($result);   
            return $result;
        } else {

            return view('ajaxRequest');
        }
    }

    function addFollowUnfollowPage()
    {
        $followList = new FollowersModel();
        if ($this->request->isAJAX()) {

            $id = $this->request->getvar('id');
            $followerId = $this->request->getvar('followerId');
            $action = $this->request->getvar('action');

            // echo $action;
            // die;

            if ($action == 'follow') {
                // $data = [
                //     'follower_id' => $followerId,
                //     'user_id' => session()->get('userdata')['id']
                // ];
                // $followList->save($data);
                // return $id;
                $data = [
                    'follower_id' => $followerId,
                    'user_id' => session()->get('userdata')['id']
                ];

                $followList->save($data);

                return $id;



            }
             else{
                $followList->where('follower_id', $followerId)->delete();
                return $id;

            }
        }
    }

    function removeFollowingPage()
    {
        $followList = new FollowersModel();
        if ($this->request->isAJAX()) {

            $id = $this->request->getvar('id');
            $followerId = $this->request->getvar('followerId');

            // echo $action;
            // die;
            $followList->where('user_id', $followerId)->delete();
            return $id;
        }
    }


    function likeDislikePage(){
        $likeList = new LikeModel();
        if ($this->request->isAJAX()) {

            $postId = $this->request->getvar('post_id');
            $action = $this->request->getvar('action');

            // echo $action . "<br>";
            // echo $postId ."<br>";
            // die;
            // $followList->where('user_id', $followerId)->delete();
            // return $id;

            if ($action == 'rgb(0, 0, 0)') {
                $data = [
                    'post_id' => $postId,
                    'user_id' => session()->get('userdata')['id']
                ];

                $likeList->save($data);
                die;



            }
             else{
                $likeList->where('post_id', $postId)->where('user_id', session()->get('userdata')['id'])->delete();
                die;
                

                // $likeList->where('')
            }
        }
    }

    function submitCommentPage(){

        $CommentModel = new CommentModel();
        // $user = new UserModel();

        $userId = session()->get('userdata')['id'];
        $postId = $this->request->getvar('postId');
        $comment = $this->request->getvar('comment');

        $data = [
            'user_id' => $userId,
            'post_id' => $postId,
            'comment' => $comment
        ];

        // print_r($data);
        // die;
        
        $CommentModel->save($data); 
        die("successfully inserted");


        // try {
        //     $CommentModel->save($data);
        //     die("successfully inserted");
        // } catch (\Exception $e) {
        //     die("Error: " . $e->getMessage());
        // }


        // $commentsBasedOnPost = $CommentModel->where('post_id', $postId)->findAll();

        


        // $userCommentList = [];
        // foreach ($commentsBasedOnPost as $userComment) {
        //     $userCommentData = $user->find($userComment['user_id']);
        //     if ($userCommentData) {
        //         $userCommentList[] = $userCommentData;
        //     }
        // };
        
        

         // Create an associative array combining comments and user data
        // $userCommentList;

        // Encode the response as JSON
        // print_r($userCommentList);

        // echo "<br>";

        // $user = session()->get('userdata')['userName'];

        // echo $user;
        






        // return $postId;
    }



    function showCommentModalPage(){

        $user = new UserModel();
        $posts = new imagePostModel();
        $followList = new FollowersModel();
        $CommentModel = new CommentModel();


        // return "hello";
        $postId = $this->request->getvar('postId');
        $modalId = $this->request->getvar('modalId');


        $result = $user->where('id', session()->get('userdata')['id'])->first();
        $post = $posts->where('pId', $postId)->first();

        $data['result'] = $result;
        $data['post'] = $post;

        print_r($post);
        die;

        // return redirect()->to(base_url('/user/fetchComments'));

        // return view('CommentModal', $data);


        

    }


    function fetchCommentsPage(){
        // echo 'kushal'; die;
        // die;
        $CommentModel = new CommentModel();
        $user = new UserModel();

        $postID = $this->request->getvar('post_id');


        // echo $postID;
        // die;


        $commentsBasedOnPost = $CommentModel->where('post_id', $postID)->findAll();

        


        $userCommentList = [];
        foreach ($commentsBasedOnPost as $userComment) {
            $userCommentData = $user->find($userComment['user_id']);
            if ($userCommentData) {
                $userCommentList[] = $userCommentData;
            }
        };


        // print_r($commentsBasedOnPost);
        // print_r($userCommentList);

        
        // die;

         // Create an associative array combining comments and user data
            $response = [
                'commentsList' => $commentsBasedOnPost,
                'userList' => $userCommentList,
            ];

        // Encode the response as JSON
        echo json_encode($response);






        // return "hello";
    }


    function fetchAllUserMsg(){
        $messageTable = new MessageModel();
        $user = new UserModel();

        $currUser = session()->get('userdata')['id'];
        // echo $currUser . "<br> <pre>";

        $messageData = $messageTable->where('(from_user_id = ' . $currUser . ' OR to_user_id = ' . $currUser . ')')->findAll();

        $userIds = [];

        foreach ($messageData as $ch) {
            if(($ch['from_user_id'] != $currUser) && !in_array($ch['from_user_id'], $userIds)){
                $userIds[] = $ch['from_user_id'];
            }

            if(($ch['to_user_id'] != $currUser) && !in_array($ch['to_user_id'], $userIds)){
                $userIds[] = $ch['to_user_id'];
            }
            
        }

        // $msgUserData = $user->where('id', $userId)->first();
        // $result = $user->where('userName', $name)->first();

        // $msgUserData = [];
        // foreach ($userId as $id) {
        //     $msgUserData[] = $user->where('id', $id)->findAll();
        // }

        $msgUserData = $user->whereIn('id', $userIds)->findAll();
        

        return $msgUserData;
        // print_r($msgUserData);

        // return view('dashboard', $msgUserData);
        // die;
        // redirect('/dashboard/fetchAllUserMsg/'. $msgUserData);

        

    }


    public function sendMessage(){
        $messageModel = new MessageModel();

        // Get sender's and recipient's user IDs and message from the form or request
        $fromUserId = 1; // Replace with sender's user ID
        $toUserId = 2;   // Replace with recipient's user ID
        $messageText = 'Hello, how are you?';

        if ($messageModel->sendMessage($fromUserId, $toUserId, $messageText)) {
            echo 'Message sent successfully.';
        } else {
            echo 'Failed to send the message.';
        }
    }


    public function retrieveMessages(){
        $messageModel = new MessageModel();

        // Get sender's and recipient's user IDs from the request
        $fromUserId = 1; // Replace with sender's user ID
        $toUserId = 2;   // Replace with recipient's user ID

        $data['messages'] = $messageModel->getMessages($fromUserId, $toUserId);

        // Load a view to display the messages
        // echo view('message_view', $data);
    }


}

