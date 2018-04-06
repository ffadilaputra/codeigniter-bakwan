<?php
/**
 * Created by PhpStorm.
 * User: aka
 * Date: 07/03/18
 * Time: 2:18
 */

use Philo\Blade\Blade;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation\FileLoader;
use Illuminate\Translation\Translator;
use Illuminate\Validation\Factory;

class MY_Controller extends CI_Controller {

    // attribute for view
    protected $blade;
    protected $data;

    // attribute for validation
    protected $validator;

    public function __construct() {
        parent::__construct();
        $this->blade = new Blade(VIEWPATH, APPPATH . 'cache');
        $this->data = [];

        // Create a new FileLoader instance specifying the translation path
        $loader = new FileLoader(new Filesystem, 'lang');
        $trans = new Translator($loader, 'en');
        $this->validator = new Factory($trans);
    }

    protected function view($view, $data = [], $return = false){
        if($this->session->flashdata('errors')) {
            $data['errors'] = $this->session->flashdata('errors');
        } else {
            $validation = $this->validator->make([], []);
            $data['errors'] = $validation->errors();
        }

        $this->data = array_merge($this->data, $data);
        $blview = $this->blade->view()->make($view, $this->data)->render();
        if(! $return )
            return print( $blview );
        return $blview;
    }

    protected function validate($request = [], $rule = []) {
        $validation = $this->validator->make($request, $rule);

        if($validation->fails()) {
            $this->session->set_flashdata('errors', $validation->errors());
            redirect($this->agent->referrer(), 'refresh');
        }
    }
}