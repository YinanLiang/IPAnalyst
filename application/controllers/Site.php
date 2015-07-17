<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

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

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code

        global $data;
        $data['cites'] = [['0','N/A']];
        $data['isps'] = [['0','N/A']];

    }


    public function index(){
        global $data;
		$this->load->view('header');
		$this->load->view('content', $data);
		$this->load->view('footer');
	}

	public function updateDatabase(){

		//parse database file

		//write data to database

		//if a log has been uploaded, generate result and show data
		$this->showData();
	}

	public function uploadLog(){

		//show data on the screen
		$this->showData();
	}

	public function showData(){
        global $data;
		//get result
		$this->getResult();
		//show data on the tables and charts
        $this->city();
        $this->isp();
        //reload pages
        $this->load->view('header');
        $this->load->view('content', $data);
        $this->load->view('footer');
	}

	function getResult(){

	}

    function city(){
        //parse result in to multi array
        global $data;
        $data['cites'] = [
            ['1','Mark'],
            ['2','Jacob'],
            ['3','Larry']
        ];
        //display data on city chart

    }

    function isp(){
        //display data on isp table
        global $data;
        $data['isps'] = [
            ['1','Mark'],
            ['2','Jacob'],
            ['3','Larry']
        ];
        //display data on isp chart
    }


}
