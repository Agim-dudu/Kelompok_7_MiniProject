<?php

class editakun extends Controller {
    public function index($id)
        {
            $data['judul'] = 'Home';
            $data['akun_petugas']=$this->model('ha_model')->getAkunById($id);
            $this->view('editakun/index', $data);
        }
}
