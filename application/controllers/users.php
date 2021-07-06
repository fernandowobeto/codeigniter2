<?php

class users extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('unico/un_usuarios_model');
    }

    public function list()
    {
        $users = $this->un_usuarios_model->all();

        $this->render('users/list', compact('users'));
    }

    public function form(int $id)
    {
        $user = $this->un_usuarios_model->find($id);

        $this->render('users/form', compact('user'));
    }

    public function save()
    {
        $data = $this->input->post(null, true);

        $this->un_usuarios_model->save($data);
    }

    public function delete(int $id)
    {
        $this->un_usuarios_model->delete($id);
    }

}
