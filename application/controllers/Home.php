<?php

class Home extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('Berita_model');
    }
    public function index()
    {
        $data['title'] = 'Welcome';
        $this->load->view('templates/navbar', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    public function profil()
    {
        $data['title'] = 'Profil';
        $this->load->view('templates/navbar', $data);
        $this->load->view('home/profil');
        $this->load->view('templates/footer');
    }
    public function solusi()
    {
        $data['title'] = 'Solusi';
        $this->load->view('templates/navbar', $data);
        $this->load->view('home/solusi');
        $this->load->view('templates/modal');
        $this->load->view('templates/footer');
    }
    public function portfolio()
    {
        $data['title'] = 'Portfolio';
        $this->load->view('templates/navbar', $data);
        $this->load->view('home/portfolio');
        $this->load->view('templates/footer');
    }
    public function karir()
    {
        $data['title'] = 'Karir';
        $this->load->view('templates/navbar', $data);
        $this->load->view('home/karir');
        $this->load->view('templates/footer');
    }

    public function kontak()
    {
        $data['title'] = 'Kontak';
        $this->load->view('templates/navbar', $data);
        $this->load->view('home/kontak');
        $this->load->view('templates/footer');
    }

    public function galeri()
    {
        $data['title'] = 'Galeri';
        $this->load->view('templates/navbar', $data);
        $this->load->view('home/galeri');
        $this->load->view('templates/footer');
    }


    public function berita()
    {
        $this->load->model('Berita_model', 'berita');

        $data['berita'] = $this->berita->getDaftarBerita();
        $data['detail'] = $this->berita->getDaftarBerita();

        $data = array(
            'title' => "Berita Terbaru",
            'listBerita' => $this->berita->getDaftarBerita(),
            'isi' => 'home/index'
        );
        // $data['listBerita'] = $this->berita->getDaftarBerita();
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/berita_header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');

        // // $this->load->model('Berita_model', 'berita');
        // // $data['berita'] = $this->berita->getDaftarBerita();
        // // $data['detail'] = $this->berita->getDaftarBerita($read);

        // // $data = [
        // //     'title' => $data['detail']['judul'],
        // //     'berita' => $this->berita->getDaftarBerita(),
        // //     'detail' => $this->berita->getDaftarBerita($read),
        // //     'isi' => 'home/read_view'
        // // ];

        // // $this->load->view('templates/navbar', $data);
        // // $this->load->view('templates/baca_header', $data);
        // // $this->load->view('news/baca_view', $data);
        // // $this->load->view('templates/footer');
    }

    public function baca($read)
    {
        $this->load->model('Berita_model', 'berita');
        $data['berita'] = $this->berita->getDaftarBerita();
        $data['detail'] = $this->berita->getDaftarBerita($read);

        $data = [
            'title' => $data['detail']['judul'],
            'berita' => $this->berita->getDaftarBerita(),
            'detail' => $this->berita->getDaftarBerita($read),
            'isi' => 'home/read_view'
        ];
        $this->load->view('templates/navbar', $data);
        $this->load->view('news/baca_view', $data);
        $this->load->view('templates/footer');
    }
}
