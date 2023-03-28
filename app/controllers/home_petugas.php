<?php 

class home_petugas extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['pelaundry_biasa'] = $this->model('home_petugas_model')->getAllPelaundryBiasa();
        $data['order_member'] = $this->model('home_petugas_model')->getAllPelaundryMember();
        $data['paket'] = $this->model('home_petugas_model')->getAllPaket();
        $data['member'] = $this->model('home_petugas_model')->getAllMember();
        $this->view('home-petugas/index', $data);
    }

    public function ubahstatuspelaundry_biasa($id){
        if($this->model('home_petugas_model')->ubahstatuspelaundry_biasa($id)>0){
            header('Location :'.BASEURL.'/home-petugas');
            exit;
        }
    }
    public function ubahstatusmember($id){
        if($this->model('home_petugas_model')->ubahstatusmember($id)>0){
            header('Location :'.BASEURL.'/home-petugas');
            exit;
        }
    }
    public function ubahstatus()
        {   
            if($this->model('home_petugas_model')->TampilDetailOrder_model($_POST)>0){
                header('Location :'. BASEURL .'/home-admin');
                exit;
            }
        }
}
