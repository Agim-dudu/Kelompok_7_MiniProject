<?php

class sign_pilih extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        // $data['nama'] = $this->model('User_model')->getUser();
        $this->view('pilihanlogin/index', $data);
    }
}

?>