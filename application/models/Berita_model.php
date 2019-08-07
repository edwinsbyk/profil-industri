<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public function getlist()
    {
        $query = "SELECT * FROM `berita` order by id DESC";

        return $this->db->query($query)->result_array();
    }
    public function tambah($data)
    {
        return $this->db->insert('listBerita', $data);
    }


    function editBerita($id, $judul, $ringkasan, $status_berita, $isi, $author, $slug)
    {
        $hasil = $this->db->query("UPDATE `berita` SET `judul`='$judul',`slug`='$slug',ringkasan='$ringkasan',status_berita='$status_berita',isi='$isi',author='$author' WHERE id='$id'");
        return $hasil;
    }

    function hapusBerita($id)
    {
        $hasil = $this->db->query("DELETE FROM `berita` WHERE id='$id'");
        return $hasil;
    }

    function simpanBerita($judul, $ringkasan, $status_berita, $isi, $author)
    {
        $hasil = $this->db->query("INSERT INTO `berita`(id,judul,ringkasan,status_berita,isi,author) VALUES ('','$judul','$ringkasan','$status_berita','$isi','$author'");
        return $hasil;
    }

    public function getDaftarBerita($read = FALSE)
    {
        if ($read === FALSE) {
            $query = $this->db->query("SELECT * FROM berita where status_berita='1' order by id DESC");
            return $query->result_array();
        }
        $query = $this->db->get_where('berita', array('slug' => $read));
        return $query->row_array();
    }

    public function showBerita()
    {
        $query = $this->db->query("SELECT * FROM berita where status_berita='1' order by id DESC");
        return $query->result_array();
    }
}
