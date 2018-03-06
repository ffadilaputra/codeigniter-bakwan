<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class Sample extends Eloquent {
    protected $table = "sample";
    protected $primaryKey = "id_sample";
}