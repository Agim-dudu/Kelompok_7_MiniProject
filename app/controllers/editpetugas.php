<?php

class editpetugas extends Controller {
    public function index($id)
        {
            $data['judul'] = 'Home';
            $data['petugas']=$this->model('ha_model')->getPetugasById($id);
            $this->view('editpetugas/index', $data);
        }
}
