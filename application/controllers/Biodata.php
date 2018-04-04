<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Biodata extends MY_Controller {

    public function index() {
	    $data['biodata'] = BiodataModel::all();
		$this->view('biodata.index', $data);
	}

	public function show($id) {
        $data['biodata_array'] = json_decode(json_encode(BiodataModel::find($id)),TRUE);
        $data['biodata_object'] = BiodataModel::find($id);

        $data['biodata_query_array'] = json_decode(json_encode(BiodataModel::find($id)),TRUE);
        $data['biodata_query_object'] = BiodataModel::find($id);
        $this->view('biodata.show', $data);
    }

	public function create() {
        $this->view('biodata.create');
    }

    public function store() {
        BiodataModel::create($this->input->post());
        redirect(base_url('biodata'), 'refresh');
    }

    public function edit($id) {
        $data['biodata'] = BiodataModel::find($id);
        $this->view('biodata.edit', $data);
    }

    public function update($id) {
        BiodataModel::find($id)->update($this->input->post());
        redirect(base_url('biodata'), 'refresh');
    }

    public function delete($id) {
        BiodataModel::destroy($id);
        redirect(base_url('biodata'), 'refresh');
    }
}
