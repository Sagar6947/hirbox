<?php
class Recruiter extends CI_Controller

{
    public function index()
    {

        // $data['latest_blogs'] = $this->Commonmodel->getAllRows('latest_blogs');
        $this->load->view('recruiter/register');
    }
    
    
     public function home()
    {
        $this->load->view('recruiter/home');
    }

     public function login()
    {
        $this->load->view('recruiter/login');
    }

     public function register()
    {
        $this->load->view('recruiter/register');
    }

     public function company_details()
    {
        $this->load->view('recruiter/profile');
    }

     public function assign_team()
    {
        $this->load->view('recruiter/assign-team');
    }

     public function job_details()
    {
        $this->load->view('recruiter/job-details');
    }

     public function apply_candidates()
    {
        $this->load->view('recruiter/apply-candidates');
    }

     public function mapped_jobs()
    {
        $this->load->view('recruiter/mapped-jobs');
    }

     public function mapped_candidates()
    {
        $this->load->view('recruiter/mapped-candidates');
    }

     public function search_jobs()
    {
        $this->load->view('recruiter/search-jobs');
    }

     public function faq()
    {
        $this->load->view('recruiter/faq');
    }

     public function videos()
    {
        $this->load->view('recruiter/videos');
    }

     public function add_job()
    {
        $this->load->view('recruiter/add-job');
    }
    
     public function need_help()
    {
        $this->load->view('recruiter/need-help');
    }

    
   




}
