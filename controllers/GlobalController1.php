<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GlobalController extends CI_Controller {
    function GlobalController(){
	parent::__construct();
	
	$this->load->helper(array('form', 'html'));
	$this->load->model('GlobalModel');
	$this->load->library('session');

    }
    //Authentication Controllers Begin
    public function index(){
	$session_data = $this->session->userdata('Username');
	
	if($session_data=="")
	{
	   
	    if ($this->input->post('proceed')=='yes')
	    {
		
		
		 $result= $this->GlobalModel->FranchiseAuthentication();
		if($result==0)
		{
		    $this->session->set_flashdata('error', 'Invalid User Id and Password Please check it');  
		    redirect(base_url()."FranchiseController");
		    
		}
		else{
		   
		$this->session->set_userdata('Username',$result[0]['Username']);
		
		$this->session->set_userdata('HomeEdit',$result[0]['HomeEdit']);
		$this->session->set_userdata('AboutUsEdit',$result[0]['AboutUsEdit']);
		$this->session->set_userdata('ConceptBriefEdit',$result[0]['ConceptBriefEdit']);
		$this->session->set_userdata('SupportProgramEdit',$result[0]['SupportProgramEdit']);
		$this->session->set_userdata('ServiceEdit',$result[0]['ServiceEdit']);
		$this->session->set_userdata('FranchiseTrainingEdit',$result[0]['FranchiseTrainingEdit']);
		$this->session->set_userdata('ContactUsEdit',$result[0]['ContactUsEdit']);
		$this->session->set_userdata('AboutUsView',$result[0]['AboutUsView']);
		$this->session->set_userdata('ConceptBriefView',$result[0]['ConceptBriefView']);
		$this->session->set_userdata('SupportProgramView',$result[0]['SupportProgramView']);
		$this->session->set_userdata('ServiceView',$result[0]['ServiceView']);
		$this->session->set_userdata('FranchiseTrainingView',$result[0]['FranchiseTrainingView']);
		$this->session->set_userdata('ContactUsView',$result[0]['ContactUsView']);
		$this->session->set_userdata('HomeView',$result[0]['HomeView']);
		$this->session->set_userdata('UserAccess',$result[0]['UserAccess']);
		
		
		  redirect(base_url()."FranchiseController/Franchi_Home");
		    
		}
		
	    }
		
	     $this -> load -> view('index');
	}	
	else
	{
	   if($this->session->userdata('HomeEdit')=="Y" || $this->session->userdata('HomeView')=="Y") {
	    redirect(base_url('FranchiseController/Franchi_Home'));
	   }
	   else if($this->session->userdata('AboutUsEdit')=="Y" || $this->session->userdata('AboutUsView')=="Y") {
	     redirect(base_url('FranchiseController/About_Us'));
	   }
	  else if($this->session->userdata('ServiceEdit')=="Y" || $this->session->userdata('ServiceView')=="Y") {
	     redirect(base_url('FranchiseController/Franchise_Service'));
	   }
	   else if($this->session->userdata('FranchiseTrainingEdit')=="Y" || $this->session->userdata('FranchiseTrainingView')=="Y") {
		 redirect(base_url('FranchiseController/Franchise_TrainingProgram'));
	    }
	   else if($this->session->userdata('ContactUsEdit')=="Y" || $this->session->userdata('ContactUsView')=="Y") {
	     redirect(base_url('FranchiseController/Contact_Us'));
	    }
	  else  if($this->session->userdata('SupportProgramEdit')=="Y" || $this->session->userdata('SupportProgramView')=="Y") {
	    redirect(base_url('FranchiseController/Support_Program'));
	    }
	    
	   else if($this->session->userdata('ConceptBriefEdit')=="Y" || $this->session->userdata('ConceptBriefView')=="Y") {
	     redirect(base_url('FranchiseController/Concept_Brief'));
	    }
	   else if($this->session->userdata('UserAccess')=="Y") {
		 redirect(base_url('FranchiseController/ViewUser'));
	    }
		     
	}
	
    }
    public function Logout()
    {
	$this->session->unset_userdata('Username');
       
	unset($this->session->userdata);
	redirect(base_url()."FranchiseController",'refresh');
    }
    //function 
    // $this -> load -> view('index');
    
    
     function Franchi_Home()
    {
	
	if($this->session->userdata('HomeEdit')=="Y" || $this->session->userdata('HomeView')=="Y") {
	
	    if($this->input->post('save')=='Save')
	    {
		$result= $this->GlobalModel->update_home();
		redirect(base_url()."FranchiseController/Franchi_Home");
	    }
	    else
	    {
	    $this->load->view('header');
	    $data['details']=$this->GlobalModel->get_homedata();
	   
	    $this->load->view('Franchi_Home',$data);
	    }
	}
	else
	{
	   
	    redirect (base_url('FranchiseController/index'));
		     
	}
	
	
    }
    
    function About_Us()
    {
	if($this->session->userdata('AboutUsEdit')=="Y" || $this->session->userdata('AboutUsView')=="Y") { 
	    if(isset($_POST["save"])){
	      $this->GlobalModel->UpdateAboutUs();  
	    }
	    $data['frach_row']=$this->GlobalModel->GetAboutUs();
	    $this->load->view('header');
	    $this->load->view('About_Us',$data);
	}
	else{
	   
	    redirect (base_url('FranchiseController/index'));
		     
	}
	
    }
    
    function Franchise_Service()
    {
	 if($this->session->userdata('ServiceEdit')=="Y" || $this->session->userdata('ServiceView')=="Y") {
	    $data["service"]=$this->GlobalModel->GetFranchiseService();
	    if(isset($_POST["proceed"])){
	    $this->GlobalModel->UpdateFranchiseService();
		    redirect("FranchiseController/Franchise_Service");
		
	    }
	    $this->load->view('header');
	    $this->load->view('Franchise_Service',$data);
	 }
	 else{
	   
	    redirect (base_url('FranchiseController/index'));
		     
	}
    }
     function Franchise_TrainingProgram()
    {
	if($this->session->userdata('FranchiseTrainingEdit')=="Y" || $this->session->userdata('FranchiseTrainingView')=="Y") {
	    if (isset($_POST["proceed"])) {
		$this->GlobalModel->UpdateFranchiseTraining();
		redirect("FranchiseController/Franchise_TrainingProgram");
	    }
	    $data['frtaining']= $this->GlobalModel->GetFranchiseTraining();
	    $this->load->view('header');
	    $this->load->view('Franchise_TrainingProgram',$data);
	}
	else{
	   
	    redirect (base_url('FranchiseController/index'));
		     
	}
    }
    function Contact_Us()
    {
	if($this->session->userdata('ContactUsEdit')=="Y" || $this->session->userdata('ContactUsView')=="Y") { 
	    $data["contact"]=$this->GlobalModel->GetContactData();
	    if(isset($_POST["proceed"])){
	    $this->GlobalModel->UpdateContactData();
		    redirect("FranchiseController/Contact_Us");
		
	    }
	    $this->load->view('header');
	    $this->load->view('Contact_Us',$data);
	}
	else{
	   
	    redirect (base_url('FranchiseController/index'));
		     
	}
    }
      function Support_Program()
    {
	if($this->session->userdata('SupportProgramEdit')=="Y" || $this->session->userdata('SupportProgramView')=="Y") {
	    $data["support"]=$this->GlobalModel->GetSupportProgram();
	    if(isset($_POST["proceed"])){
	    $this->GlobalModel->UpdateSupportProgram();
		    redirect("FranchiseController/Support_Program");
		
	    }
	    $this->load->view('header');
	    $this->load->view('Support_Program',$data);
	}
	else{
	   
	    redirect (base_url('FranchiseController/index'));
		     
	}
    }
      function Concept_Brief()
    {
	if($this->session->userdata('ConceptBriefEdit')=="Y" || $this->session->userdata('ConceptBriefView')=="Y") {
	    $data["concept"]=$this->GlobalModel->GetConceptBrief();
	    if(isset($_POST["proceed"]))
	    {
	    $this->GlobalModel->UpdateConceptBrief();
	    redirect("FranchiseController/Concept_Brief");
		
	    }
	    $this->load->view('header');
	    $this->load->view('Concept_Brief',$data);
	}
	else{
	   
	    redirect (base_url('FranchiseController/index'));
		     
	}
    }
    
    //Add User  Start
    //View
    function ViewUser()
    {
	if($this->session->userdata('UserAccess')=="Y") { 
	    $data['useradd']=$this->GlobalModel->Getuser();
	    $this->load->view('header');
	    $this->load->view('User_View',$data);
	}
	else{
	   
	    redirect (base_url('FranchiseController/index'));
		     
	}
    }
    //Add
     function AddUser()
    {
	if($this->session->userdata('UserAccess')=="Y") { 
	    if (isset($_POST["proceed"])) {
		$this->GlobalModel->AddFranchiseuser();
		redirect("FranchiseController/ViewUser");
	     }
	    $data['useradd']=$this->GlobalModel->Getuser();
	    $this->load->view('header');
	    $this->load->view('User_Add',$data);
	}
	else{
	   
	    redirect (base_url('FranchiseController/index'));
		     
	}
    }
    
    //Add User End
    //Edit & Update start
        function EditUser($code)
    {
	//if($this->session->userdata('UserAccess')=="Y") { 
	    if (isset($_POST["proceed"])) {
		$this->GlobalModel->EditUser($code);
		redirect("FranchiseController/ViewUser");
	    }
	    $data['useradd']=$this->GlobalModel->Getuserdata($code);
	    $this->load->view('header');
	    $this->load->view('User_Edit',$data);
	//}
	//else{
	   
	    //redirect (base_url('FranchiseController/index'));
		     
	//}
    }
    
    //Edit & Update End
    //Delete Start
    function User_Delete($code)
    {
	    $this->GlobalModel->User_Delete($code);
	    redirect("FranchiseController/ViewUser");
    }
    
    //Delete End

    function CountryView()
    {
	$data['GetCountry']=$this->GlobalModel->GetCountry();
	$this->load->view('header');
	$this->load->view('CountryView',$data);
    }
    
    function CountryAdd()
    {
	 if (isset($_POST["save"])) {
		$this->GlobalModel->CountryAdd();
		redirect("FranchiseController/CountryView");
	    }
	$this->load->view('header');
	$this->load->view('CountryAdd');
    }
    
    function CountryEdit($code)
    {
	 if (isset($_POST["update"])) {
		$this->GlobalModel->CountryEdit($code);
		redirect("FranchiseController/CountryView");
	    }
	$data['GetSingleCountry']=$this->GlobalModel->GetSingleCountry($code);
	$this->load->view('header');
	$this->load->view('CountryEdit',$data);
    }
    
    function CountryDelete($code)
    {
	$this->GlobalModel->CountryDelete($code);
	    redirect("FranchiseController/CountryView");
    }

}