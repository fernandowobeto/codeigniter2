<?php

class login extends MY_Controller
{

    public function index()
    {
        $this->render('login/form');
    }

    public function action()
    {
        $data = $this->input->post(null, true);

        var_dump($data);
    }

}
