<?php

class login_admin extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();
        $this->view('login-admin/index', $data);
    }

    public function confirm(){
        $data['input'] = $this->model('login_admin_model')->confirmlogin($_POST);
        $db['login'] = $this->model('login_admin_model')->getAllLogin();
        var_dump($data['input']['username']);
        var_dump($db['login']['username']);

        if($data['input']['username'] == $db['login']['username']){
            header('Location :'.BASEURL.'/home');
        }
    }
}

?>