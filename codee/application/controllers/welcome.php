<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->helper('url')
		$this->load->model('qures');
		$posts=$this->qures->getpost();
		$this->load->view('welcome_message',['posts'=>$posts]);
	}


	public function create(){
		$this->load->view('create');

	}


	public function update($id){
		$this->load->model('qures');
		$post=$this->qures->getsinglepost($id);
		$this->load->view('update',['post'=>$post]);

	}


	public function save(){

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');


		if ($this->form_validation->run()==TRUE)
		{

			$data=$this->input->post();
			$today = date('Y-m-d');
			$data['date_created'] = $today;


			unset($data['submit']);

			$this->load->model('qures');
			if($this->qures->addpost($data))
			{
				$this->session->set_flashdata('msg','Data Save Successfully');
			}

			else {

				$this->session->set_flashdata('msg','Faild To Save Data');
			}

			return redirect('welcome');
		}
		else
		{
			$this->load->view('create');
		}

	}


	public function change ($id){


		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');


		if ($this->form_validation->run())
		{

			$data=$this->input->post();
			$today = date('Y-m-d');
			$data['date_created'] = $today;


			unset($data['submit']);

			$this->load->model('qures');
			if($this->qures->updatepost($data,$id))
			{
				$this->session->set_flashdata('msg','Data Update Successfully');
			}

			else {

				$this->session->set_flashdata('msg','Faild To Save Data');
			}

			return redirect('welcome');
		}
		else
		{
			$this->load->view('create');
		}



	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */