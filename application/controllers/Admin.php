<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        // is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/user_footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/user_footer');
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/user_footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Access changed. </div>');
    }

    public function userList()
    {
        $data['title'] = 'User List Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();



        $this->load->model('Userlist_model', 'userlist');
        $data['userList'] = $this->userlist->getUserList();
        $data['menu'] = $this->db->get('user')->result_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/userlist', $data);
        $this->load->view('templates/user_footer');
    }

    function listEditUser()
    {
        $this->load->model('Userlist_model');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $role_id = $this->input->post('role_id');
        if ($role_id == "Admin") {
            $role_id = 1;
        } else {
            $role_id = 0;
        }
        $is_active = $this->input->post('is_active');
        if ($is_active == 1) {
            $is_active = 1;
        } else {
            $is_active = 0;
        }


        $this->Userlist_model->edit_user($name, $email, $role_id, $is_active);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User profile sudah diubah. </div>');
        redirect('admin/userlist');
    }


    function listDeleteUser()
    {
        $this->load->model('Userlist_model');
        $id = $this->input->post('id');

        $this->Userlist_model->delete_user($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User sudah dihapus. </div>');
        redirect('admin/userlist');
    }

    function tambah_user()
    {


        $role_id = $this->input->post('role_id');
        if ($role_id == "Admin") {
            $role_id = 1;
        } else {
            $role_id = 2;
        }
        $is_active = $this->input->post('is_active');
        $is_active = $this->input->post('is_active');
        if ($is_active == 1) {
            $is_active = 1;
        } else {
            $is_active = 0;
        }

        $email = $this->input->post('email');
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($email),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role_id' => $role_id,
            'is_active' => $is_active,
            'date_created' => time()

        ];
        $this->db->insert('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User sudah ditambahakan. </div>');
        redirect('admin/userlist');
    }

    function userChangePassword()
    {


        $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
        $id = $this->input->post('id');

        $this->db->set('password', $password);
        $this->db->where('id', $id);
        $this->db->update('user');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Password user sudah diperbaharui. </div>');
        redirect('admin/userlist');
    }
}
