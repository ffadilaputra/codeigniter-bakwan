<?php
/**
 * Created by PhpStorm.
 * User: aka
 * Date: 07/03/18
 * Time: 2:18
 */

use Philo\Blade\Blade;

class MY_Controller extends CI_Controller {

    protected $blade;
    protected $data;

    public function __construct() {
        parent::__construct();
        $this->blade = new Blade(VIEWPATH, APPPATH . 'cache');
        $this->data = [];
    }

    protected function view($view, $data = [], $return = false){
        $this->data = array_merge($this->data, $data);
        $blview = $this->blade->view()->make($view, $this->data)->render();
        if(! $return )
            return print( $blview );
        return $blview;
    }
}