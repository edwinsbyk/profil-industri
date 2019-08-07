<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        is_logged_in();
    }

    function index()
    {
        $data['title'] = "Manage Berita";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->model('Berita_model', 'berita');

        $data['listBerita'] = $this->berita->getlist();

        $data['berita'] = $this->db->get('berita')->result_array();

        $this->load->view('templates/tambahberita_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('berita/index', $data);
        $this->load->view('templates/user_footer');
    }

    public function edit()
    {

        $slug = url_title($this->input->post('judul'), 'dash', true);
        $is_active = $this->input->post('is_active');
        $is_active = $this->input->post('is_active');
        if ($is_active == 1) {
            $is_active = '1';
        } else {
            $is_active = '0';
        }
        $id = $this->input->post('id');

        $judul = $this->input->post('judul');

        $ringkasan = $this->input->post('ringkasan');
        $status_berita = $is_active;
        $isi = $this->input->post('isi');
        $author = $this->input->post('author');

        $this->load->model('Berita_model', 'berita');
        $this->berita->editBerita($id, $judul, $ringkasan, $status_berita, $isi, $author, $slug);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berita sudah di update. </div>');
        redirect('berita');
    }


    public function hapusBerita()
    {

        $this->load->model('Berita_model');
        $id = $this->input->post('id');

        $this->Berita_model->hapusBerita($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berita sudah dihapus. </div>');
        redirect('berita');
    }

    public function tambah()
    {

        $judul = $this->input->post('judul');

        $ringkasan = $this->input->post('ringkasan');
        $author = $this->input->post('author');
        $isi = $this->input->post('isi');
        $is_active = $this->input->post('is_active');
        $slug = url_title($this->input->post('judul'), 'dash', true);
        $is_active = $this->input->post('is_active');
        if ($is_active == 1) {
            $is_active = '1';
        } else {
            $is_active = '0';
        }
        $data = [
            'judul' => htmlspecialchars($judul),
            'ringkasan' => htmlspecialchars($ringkasan),
            'author' => htmlspecialchars($author),
            'isi' => $isi,
            'slug' => htmlspecialchars($slug),
            'status_berita' => $is_active,


        ];
        $this->db->insert('berita', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berita sudah ditambahakan. </div>');
        redirect('berita');
    }

    function tinymce_upload()
    {
        $config['upload_path'] = './assets/img/berita/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 0;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file')) {
            $this->output->set_header('HTTP/1.0 500 Server Error');
            exit;
        } else {
            $file = $this->upload->data();
            $this->output
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode(['location' => base_url() . '/assets/img/berita/' . $file['file_name']]))
                ->_display();
            exit;
        }
    }
}
