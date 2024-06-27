<?php
class Struk extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['nama_pegawai'])) {
            header('location: ' . BASEURL . '/login');
        }
    }
    
    public function index()
    {
        $data['judul'] = 'Struk';
        $data['nota'] = $this->model('Struk_model')->getTotalStruk();
        $this->view('template/header', $data);
        $this->view('struk/index', $data);
        $this->view('template/footer');
    }

    public function list()
    {
        $data['judul'] = 'Struk';
        $data['nota'] = $this->model('Struk_model')->getAllStruk();
        $this->view('template/header', $data);
        $this->view('struk/list', $data);
        $this->view('template/footer');
    }

    public function buat()
    {
        $data['judul'] = 'Struk';
        $data['nota'] = $this->model('Struk_model')->getStruk();
        $data['item'] = $this->model('Struk_model')->getItemStruk($data['nota']['id_nota']);
        $data ['harga'] = $this->model('Struk_model')->getHargaStruk($data['nota']['id_nota']);
        $this->view('template/header', $data);
        $this->view('struk/buat', $data);
        $this->view('template/footer');
    }

    public function cetak($id_nota)
    {
        $data['judul'] = "cetak";
        $data['nota'] = $this->model('Struk_model')->getStruk();
        $data['item'] = $this->model('Struk_model')->getItemStruk($data['nota']['id_nota']);
        $data ['harga'] = $this->model('Struk_model')->getHargaStruk($data['nota']['id_nota']);
        $data ['pegawai'] = $this->model('Struk_model')->getPegawai($data['nota']['id_nota']);
        $this->view('template/header-login', $data);
        $this->view('struk/cetak', $data);
        $this->view('template/footer');
    }

    public function bayar($id_nota)
    {
        $total = $_POST['total'];
        $uang = $_POST['uang'];
        $kembalian = $uang - $total;
        if($this->model('Struk_model')->addDetailToStruk($_POST,$id_nota,$kembalian) > 0)
        {
            header('location: '.BASEURL.'/struk/buat');
            exit;
        }
    }

    public function add($id_nota)
    {
        $id_barang = $_POST['id_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $barang = $this->model('Struk_model')->getBarang($id_barang);
        echo $id_nota;
        var_dump($barang);
        echo $barang ['id_barang'];
        for($i=1;$i<=$jumlah_barang;$i++)
        {
            $this->model('Struk_model')->addItemToStruk($barang,$id_nota); 
            if($i==$jumlah_barang)
            {
                header('location: '.BASEURL.'/struk/buat');
                exit;
            }
        }
    }
    
    public function delitem($id_nota,$id_barang)
    {
        if($this->model('Struk_model')->deleteItemFromStruk($id_nota,$id_barang) > 0)
        {
            header('location: '.BASEURL.'/struk/buat');
            exit;
        }
    }
    

    public function delete($id_nota)
    {
        if($this->model('Struk_model')->deleteStruk($id_nota) > 0)
        {
            if($this->model('Struk_model')->deleteDetail($id_nota) > 0)
            {
                header('location: '.BASEURL.'/home');
                exit;
            }
            header('location: '.BASEURL.'/home');
                exit;
        }
    }
    public function buatStruk($id_pegawai)
    {
        $data['judul'] = 'Struk';
        if($this->model('Struk_model')->createStruk($id_pegawai) > 0)
        {
            header('location: '.BASEURL.'/struk/buat');
            exit;
        }
    }

}