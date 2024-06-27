<?php
class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('template/header-login', $data);
        $this->view('login/index', $data);
        $this->view('template/footer');
    }
    public function ceklogin()
    {
        if($this->model('Login_model')->cekLogin($_POST) > 0)
        {
            //jika berhasil maka create session dan redirect ke halaman dashboard
            $user = $this->model('Login_model')->getUserData($_POST['id_pegawai']);
            var_dump($user);
            $_SESSION['nama_pegawai'] = $user['nama_pegawai'];
            $_SESSION['id_pegawai'] = $user['id_pegawai'];
            header('location: '.BASEURL.'/home');
            exit;
        }
        else
        {
            Flasher::setFlash('Tidak','Ditemukan','danger');
            header('location: '.BASEURL.'/login');
            exit;
        }
    }
}