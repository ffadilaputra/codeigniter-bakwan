<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {

    public function index() {
	    $data['blog'] = BlogModel::all();
		$this->view('blog.index', $data);
	}

	public function show($id) {
        $data['blog'] = BlogModel::find($id);
        $this->view('blog.show', $data);
    }

	public function create() {
        $this->view('blog.create');
    }

    public function store() {
        $this->validate($this->input->post(), [
            'penulis' => 'required|string',
            'judul' => 'required|string',
            'isi' => 'required|string'
        ]);
        $_POST['file'] = $this->do_upload('file', 'assets/upload/blog', 'image', TRUE);

        BlogModel::create($this->input->post());
        redirect(base_url('blog'), 'refresh');
    }

    public function edit($id) {
        $data['blog'] = BlogModel::find($id);
        $this->view('blog.edit', $data);
    }

    public function update($id) {
        $this->validate($this->input->post(), [
            'penulis' => 'required|string',
            'judul' => 'required|string',
            'isi' => 'required|string'
        ]);

        if(!empty($_FILES['file']['name'])){
            $_POST['file'] = $this->do_upload('file', 'assets/upload/blog', 'image', TRUE);
            $blog = BlogModel::find($id);
            unlink('assets/upload/blog/' . $blog->file);
        }

        BlogModel::find($id)->update($this->input->post());
        redirect(base_url('blog'), 'refresh');
    }

    public function delete($id) {
        $blog = BlogModel::find($id);
        unlink('assets/upload/blog/' . $blog->file);

        BlogModel::destroy($id);
        redirect(base_url('blog'), 'refresh');
    }
}
