<?php
//Extends adalah parentnya controller , jadi clas home ini anak dari class controller yang ada pada controller.php
class Home extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['nama_pegawai'])) {
            header('location: ' . BASEURL . '/login');
        }
    }
    public function index()
    {
        $data['judul'] = 'Home';
        $data['barang'] = $this->model('Struk_model')->getTotalPenjualan();
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
}