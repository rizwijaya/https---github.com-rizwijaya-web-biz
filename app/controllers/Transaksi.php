<?php
class Transaksi extends Controller
{
    public function __construct()
    {
        if (!$_SESSION) {
            header('location:' . BASEURL . '/home/redirecting');
        }
        if ($_SESSION['id_grup'] == 3) {
            header('location:' . BASEURL . '/home/redirecting');
        }
    }

    public function index()
    {
        $data['id_grup'] = $_SESSION['id_grup'];
        $data['title'] = "Transaksi Pelanggan";
        $data['menu'] = "Transaksi";
        $data['submenu'] = "Progress Transaksi";
        $data['transaksi'] = $this->model('rental_model')->dataTransaksi();
        //var_dump($data['transaksi']); die;
        $this->view('templates/admin/header');
        $this->view('templates/admin/sidebar', $data);
        $this->view('pegawai/transaksi', $data);
        $this->view('templates/admin/footer');
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
        $this->view('templates/admin/sidebar', $data);
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

    public function laporan()
    {
        $data['id_grup'] = $_SESSION['id_grup'];
        $data['title'] = "Laporan";
        $data['menu'] = "Transaksi";
        $data['submenu'] = "Transaksi Selesai";
        $data['transaksi'] = $this->model('rental_model')->dataLaporan();
        //var_dump($data['transaksi']); die;
        $this->view('templates/admin/header');
        $this->view('templates/admin/sidebar', $data);
        $this->view('pegawai/laporan', $data);
        $this->view('templates/admin/footer');
    }

    public function cetak_laporan()
    {
        $data['id_grup'] = $_SESSION['id_grup'];
        $data['title'] = "Laporan";
        $data['menu'] = "Transaksi";
        $data['submenu'] = "Transaksi Selesai";
        $data['transaksi'] = $this->model('rental_model')->dataLaporan();
        //var_dump($data['transaksi']); die;
        $this->view('pegawai/cetak_laporan', $data);
    }

    public function update()
    {
        $this->model('Rental_model')->update_transaksi($_POST); //Input ke database foto mobil
        //Notifikasi sukses update
        if (!empty($_POST['tanggal_pengembalian'])) {
            $this->model('Rental_model')->update_pengembalian($_POST); //Input ke database foto mobil
        }

        Flasher::setFlash_modal('Data Transaksi telah berhasil diperbarui.', 'Data Transaksi Diperbarui!', 'success');
        header('location: ' . BASEURL . '/transaksi');
        exit;
    }
}
