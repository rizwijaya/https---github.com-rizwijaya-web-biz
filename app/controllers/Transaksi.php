<?php 
    class Transaksi extends Controller
    {
        public function __construct()
        {
            if(!$_SESSION) {
                header('location:' . BASEURL . '/home/redirecting');
            }
            if($_SESSION['id_grup'] == 3) {
                header('location:' . BASEURL . '/home/redirecting');
            }
        }

        

        public function pembayaran()
        {
            $data['id_grup'] = $_SESSION['id_grup'];
            $data['title'] = "Pembayaran Pelanggan";
            $data['menu'] = "Pembayaran";
            $data['submenu'] = "Data Pembayaran";
            $data['transaksi'] = $this->model('rental_model')->dataPembayaran();
            //var_dump($data['transaksi']); die;
            $this->view('templates/admin/header');
            $this->view('templates/admin/sidebar',$data);
            $this->view('pegawai/pembayaran', $data);
            $this->view('templates/admin/footer');
        }

        public function cancel($id)
        {
            $sts = 3;
            $this->model('rental_model')->trans($id, $sts);
            Flasher::setFlash_modal('Transaksi telah berhasil untuk ditolak.', 'Transaksi ditolak!', 'danger');
            $this->index();
        }

        public function selesai($id)
        {
            $sts = 2;
            $this->model('rental_model')->trans($id, $sts);
            Flasher::setFlash_modal('Transaksi telah berhasil untuk diterima.', 'Transaksi diterima!', 'success');
            $this->index();
        }
    }
    

?>