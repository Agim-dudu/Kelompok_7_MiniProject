<?php 

class login_petugas extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('login-petugas/index', $data);
    }

    public function confirm(){
        $data['input'] = $this->model('login_petugas_model')->confirmlogin($_POST);
        $db['login'] = $this->model('login_petugas_model')->getAllLogin();
        if($data['input']['username'] == $db['login']['username']){
            $this->view('home-petugas/index', $data);
        }
    }
    
}