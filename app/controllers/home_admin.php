<?php

    class home_admin extends Controller {
        public function index()
        {
            $data['judul'] = 'Home';
            $data['paket'] = $this->model('ha_model')->getAllPaket();
            $data['petugas'] = $this->model('ha_model')->getAllPetugas();
            $data['akun_petugas'] = $this->model('ha_model')->getAllAkun();
            $this->view('home-admin/index', $data);
        }

        public function hapuspaketan($id)
        {   
            if($this->model('ha_model')->hapusDataPaketan($id)>0){
                header('Location :'. BASEURL .'/home-admin');
                exit;
            }
        }
        public function hapusakun($id)
        {   
            if($this->model('ha_model')->hapusDataAkun($id)>0){
                header('Location :'. BASEURL .'/home-admin');
                exit;
            }
        }
        public function hapuspetugas($id)
        {   
            if($this->model('ha_model')->hapusDataPetugas($id)>0){
                header('Location :'. BASEURL .'/home-admin');
                exit;
            }
        }
        public function tambahpetugas()
        {   
            if($this->model('ha_model')->tambahDataPetugas($_POST)>0){
                header('Location :'. BASEURL .'/home-admin');
                exit;
            }
        }
        public function tambahpaket()
        {   
            if($this->model('ha_model')->tambahDataPaket($_POST)>0){
                header('Location :'. BASEURL .'/home-admin');
                exit;
            }
        }
        public function tambahakun()
        {   
            if($this->model('ha_model')->tambahDataAkun($_POST)>0){
                header('Location :'. BASEURL .'/home-admin');
                exit;
            }
        }
        public function ubahakun()
        {   
            if($this->model('ha_model')->ubahDataAkun($_POST)>0){
                header('Location :'. BASEURL .'/home-admin');
                exit;
            }
        }
        public function ubahpaket()
        {   
            if($this->model('ha_model')->ubahDataPaketan($_POST)>0){
                header('Location :'. BASEURL .'/home-admin');
                exit;
            }
        }
        public function ubahpetugas()
        {   
            if($this->model('ha_model')->ubahDataPetugas($_POST)>0){
                header('Location :'. BASEURL .'/home-admin');
                exit;
            }
        }
    }

?>