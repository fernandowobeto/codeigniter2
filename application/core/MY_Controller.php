<?php

class MY_Controller extends CI_Controller
{

    public function render(string $view, array $data = [])
    {
        $this->load->view('template', [
            'content' => $this->load->view($view, $data, true)
        ]);
    }

}
