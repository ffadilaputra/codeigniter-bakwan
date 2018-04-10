<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;

class BlogModel extends Eloquent {
    protected $table = "blog";
    public $timestamps = false;
    protected $fillable = ["penulis", "judul", "isi", "file"];
}