<?php

error_reporting(0);

include('template/header.php');
include('config.php');

$halaman = $_GET['halaman'];

switch ($halaman) {

        // case 'beranda':
        //     include('beranda.php');
        //     break;

        //coding pemijaman start
    case 'daftarPeminjaman':
        include('peminjaman/v_daftarPeminjaman.php');
        break;
    case 'tambahPeminjaman':
        include('peminjaman/v_tambahPeminjaman.php');
        break;
    case 'simpanPeminjaman':
        include('peminjaman/m_tambahPeminjaman.php');
        break;
    case 'hapusPeminjaman':
        include('peminjaman/m_hapusPeminjaman.php');
        break;
    case 'ubahPeminjaman':
        include('peminjaman/v_ubahPeminjaman.php');
        break;
    case 'simpanUbahPeminjaman':
        include('peminjaman/m_ubahPeminjaman.php');
        break;

        //coding pemijaman

        //coding anggota start
    case 'daftarAnggota':
        include('anggota/v_daftarAnggota.php');
        break;
    case 'tambahAnggota':
        include('anggota/v_tambahAnggota.php');
        break;
    case 'simpanAnggota':
        include('anggota/m_tambahAnggota.php');
        break;
    case 'hapusAnggota':
        include('anggota/m_hapusAnggota.php');
        break;
    case 'ubahAnggota':
        include('anggota/v_ubahAnggota.php');
        break;
    case 'simpanUbahAnggota':
        include('anggota/m_ubahAnggota.php');
        break;


        //coding anggota end

        //coding buku start

    case 'daftarBuku':
        include('buku/v_daftarBuku.php');
        break;
    case 'tambahBuku':
        include('buku/v_tambahBuku.php');
        break;
    case 'simpanBuku':
        include('buku/m_tambahBuku.php');
        break;
    case 'hapusBuku':
        include('buku/m_hapusBuku.php');
        break;
    case 'ubahBuku':
        include('buku/v_ubahBuku.php');
        break;
    case 'simpanUbahBuku':
        include('buku/m_ubahBuku.php');
        break;

        //coding buku end
    default:

        break;
}

include('template/footer.php');
