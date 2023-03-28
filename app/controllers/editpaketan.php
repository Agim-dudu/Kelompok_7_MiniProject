<?php

class editpaketan extends Controller {
    public function index($id)
        {
            $data['judul'] = 'Home';
            $data['paket']=$this->model('ha_model')->getPaketById($id);
            $this->view('editpaket/index', $data);
        }
}
