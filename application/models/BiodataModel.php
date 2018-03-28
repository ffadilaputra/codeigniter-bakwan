<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class BiodataModel extends Eloquent {
    protected $table = "biodata";
    public $timestamps = false;
    protected $fillable = ["nama", "alamat", "nim"];
}