<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GlobalController extends CI_Controller
    {
	function GlobalController()
	{
	    parent::__construct();
	    $this->load->model('GlobalModel');
	    $this->load->library('session');
	    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));	    
	}
	
	public function index()
	{
	    $session_data = $this->session->userdata('username');
	    //$session_data = $this->session->userdata('username');
	    if ($this->input->post('proceed')=='yes')
	    {	
		$result= $this->GlobalModel->globalAuthentication();
		//echo '<pre>';		
		//print_r($result);
		//echo '</pre>';	
		//exit();
		if($result == 0)
		{		       
		    //$this->session->set_userdata('username',$result[0]['username']);
		    //redirect("GlobalController/sedarUserView");
		    $this->session->set_flashdata('error', 'Invalid User Id and Password Please check it');
		    redirect(base_url()."GlobalController",'refresh');		    
		}
		else
		{
		    $this->session->set_userdata('browserLanguage',$this->input->post('language'));		    
		    $this->session->set_userdata('username',$result[0]['username']);
		    redirect("GlobalController/sedarUserView");		    
		}
	    }	    
	    $this -> load -> view('index');	
	}
	
	public function Logout()
	{
	    $this->session->unset_userdata('username');
	   
	    unset($this->session->userdata);
	    redirect(base_url()."GlobalController",'refresh');
	}     


    //1.Home page Slider Start 
    public function sliderImageAdd()
    {
	
	$this -> load -> view('header');
	$this -> load -> view('sliderImageAdd');
	//$this -> load -> view('footer');
    }
    public function sliderImageAddNew()
    {
	if(isset ($_POST["Save"])){
	   
	    $this->GlobalModel->sliderImageAdd();
	    redirect("GlobalController/Project_Image");
	}
	
	$this -> load -> view('header');
	$this -> load -> view('sliderImageAdd');
	//$this -> load -> view('footer');
    }
    //Home page Slider End

    //Elango controller Start
    //2.ProjectOverview start
    
    
    //REPOSITION PROJECT IMG FUNCTIONS STARTS
     public function repositionProjectImages()
    {
	//$businessId=$this->session->userdata('businessId');
	$list_order = $_POST['position'];
	$list = explode(',' , $list_order);
	$i = 1;
	foreach($list as $id)
	{
	    $sql= "UPDATE about_project_img SET position='$i' WHERE id ='$id'" ;	
	    $result[]=$this->db->query($sql);
	    $i++;
	    $query[]=$sql;
	    //echo $sql."<br>";
	}
	print_r($query);
    }
    //REPOSITION PROJECT IMG FUNCTIONS ENDS
    //STATUS ON/OFF
     public function ajaxProjectImageStatus()
    {
	//$businessId=$this->session->userdata('businessId');
	$id=$_POST["projectimageId"];
	$result= $this->GlobalModel->getStatusProjectImages($id);
	
	if($result[0]['status']=="ENABLED")
	{
	   $status="DISABLED"; 
	}
	else
	{
	    $status="ENABLED";    
	}
	$form_data=array(
		    'status'=>$status
		    );
	//$this->db->where('businessId',$businessId);
	$this->db->where('id',$id);
	$this->db->update('about_project_img', $form_data);
	echo'{"status":"'.$status.'","projectimageid":"'.$id.'"}';
    }
    //STATUS ON/OFF
    
    public function Project_Overview()
	{
	    if(isset($_POST["Save"])){
		  $this->GlobalModel->ProjectOverview_Add();  
		}
	    $data['Project']=$this->GlobalModel->projectOverviewDetails();   
	    $this -> load -> view('header');
	    $this -> load -> view('Project_Overview', $data);
	    //$this -> load -> view('footer');
	}
	    
     public function Project_Image()
    {
	$data['formData']= $this->GlobalModel->getformdata();
	
	$this -> load -> view('header');
	$this -> load -> view('Project_Image',$data);
	//$this -> load -> view('footer');
    }
    public function ProjectImage_Add()
    {
	if(isset ($_POST["Save"])){
	   
	    $this->GlobalModel->ProjectImage_Add();
	    redirect("GlobalController/Project_Image");
	}
	
	$this -> load -> view('header');
	$this -> load -> view('ProjectImage_Add');
	//$this -> load -> view('footer');
    }
    public function ProjectImage_Edit($id)
    {
	if (isset($_POST["Update"])) {
	 
	    $this->GlobalModel->ProjectImage_Edit($id);
	    redirect("GlobalController/Project_Image");
	 }
	 $data['docsedit']= $this->GlobalModel->GetDocs($id);
	$this -> load -> view('header');
	$this -> load -> view('ProjectImage_Edit',$data);
    }
       public function ProjectImage_Delete($id)
    {
        $this->GlobalModel->ProjectDelete($id);
        redirect("GlobalController/Project_Image");
    }
    //Project Overview end
    //3.Client overview start
    //REPOSITION CLIENT IMAGE FUNCTION STARTS
     public function repositionClientImages()
    {
	
	$list_order = $_POST['position'];
	$list = explode(',' , $list_order);
	$i = 1;
	foreach($list as $id)
	{
	    $sql= "UPDATE about_client_img SET position='$i' WHERE id ='$id'" ;	
	    $result[]=$this->db->query($sql);
	    $i++;
	    $query[]=$sql;
	    //echo $sql."<br>";
	}
	print_r($query);
    }
     //REPOSITION CLIENT IMAGE FUNCTION ENDS
      //STATUS ON/OFF
     public function ajaxClientImageStatus()
    {
	
	$id=$_POST["clientimageId"];
	$result= $this->GlobalModel->getStatusClientImages($id);
	
	if($result[0]['status']=="ENABLED")
	{
	   $status="DISABLED"; 
	}
	else
	{
	    $status="ENABLED";    
	}
	$form_data=array(
		    'status'=>$status
		    );

	$this->db->where('id',$id);
	$this->db->update('about_client_img', $form_data);
	echo'{"status":"'.$status.'","clientimageid":"'.$id.'"}';
    }
    //STATUS ON/OFF
      public function Client_Overview()
    {
	if(isset($_POST["Save"])){
	      $this->GlobalModel->ClientOverview_Add();  
	    }
	 $data['Client']=$this->GlobalModel->clientOverviewDetails();
	 $this -> load -> view('header');
	 $this -> load -> view('Client_Overview', $data);
	//$this -> load -> view('footer');
    }
     public function Client_Image()
    {
	$data['clientImage']= $this->GlobalModel->getclientImage();
	$this -> load -> view('header');
	$this -> load -> view('Client_Image', $data);
	//$this -> load -> view('footer');
    }
    public function ClientImage_Add()
    {
	if(isset ($_POST["Save"])){
	   
	    $this->GlobalModel->clientImage_Add();
	    redirect("GlobalController/Client_Image");
	}
	
	$this -> load -> view('header');
	$this -> load -> view('ClientImage_Add');
	//$this -> load -> view('footer');
    }
     public function ClientImage_Edit($id)
    {
	if (isset($_POST["Update"])) {
	 
	    $this->GlobalModel->ClientImage_Edit($id);
	    redirect("GlobalController/Client_Image");
	 }
	 $data['clientEdit']= $this->GlobalModel->GetDocsClients($id);
	$this -> load -> view('header');
	$this -> load -> view('ClientImage_Edit',$data);
    }
    public function ClientImage_Delete($id)
    {
        $this->GlobalModel->ClientDelete($id);
 redirect("GlobalController/Client_Image");
    }
    public function AboutUs()
    {
	
	$this -> load -> view('header');
	$this -> load -> view('AboutUs');
	//$this -> load -> view('footer');
    }
    //Client Overview end
    
    //4.Franchising Oppurnities
    //VIEW
       public function FranchisingOpportunities_View()
    {
	$data['opportunities']= $this->GlobalModel->getOpportunities();
	$this -> load -> view('header');
	$this -> load -> view('FranchisingOpportunities_View',$data);
	//$this -> load -> view('footer');
    }
    //ADD
     public function FranchisingOpportunities_Add()
    {
	if(isset ($_POST["Save"])){
	   
	    $this->GlobalModel->FranchisingOpportunities_Add();
	    redirect("GlobalController/FranchisingOpportunities_View");
	}
	
	$this -> load -> view('header');
	$this -> load -> view('FranchisingOpportunities_Add');
	//$this -> load -> view('footer');
    }
    //EDIT
    public function FranchisingOpportunities_Edit($id)
    {
	if (isset($_POST["Update"])) {
	 
	    $this->GlobalModel->FranchisingOpportunities_Edit($id);
	    redirect("GlobalController/FranchisingOpportunities_View");
	 }
	 $data['opportunitiesEdit']= $this->GlobalModel->GetopportunitiesEdit($id);
	$this -> load -> view('header');
	$this -> load -> view('FranchisingOpportunities_Edit',$data);
    }
    //DELETE
     public function FranchisingOpportunities_Delete($id)
    {
        $this->GlobalModel->FranchisingOpportunities_Delete($id);
	redirect("GlobalController/FranchisingOpportunities_View");
    }
    //Franchising Opp End
    //5.Explore Brands
    //VIEW
       public function Brands_View()
    {
	$data['brands']= $this->GlobalModel->getbrands();
	$this -> load -> view('header');
	$this -> load -> view('Brands_View',$data);
	//$this -> load -> view('footer');
    }
      public function Brands_Add()
    {
	if(isset ($_POST["Save"])){
	   
	    $this->GlobalModel->Brands_Add();
	    redirect("GlobalController/Brands_View");
	}
	
	$this -> load -> view('header');
	$this -> load -> view('Brands_Add');
	//$this -> load -> view('footer');
    }
     //EDIT
    public function Brands_Edit($id)
    {
	if (isset($_POST["Update"])) {
	 
	    $this->GlobalModel->Brands_Edit($id);
	    redirect("GlobalController/Brands_View");
	 }
	 $data['BrandsEdit']= $this->GlobalModel->GetBrandsEdit($id);
	 $this -> load -> view('header');
	 $this -> load -> view('Brands_Edit',$data);
    }
    //DELETE
     public function Brands_Delete($id)
    {
        $this->GlobalModel->Brands_Delete($id);
 redirect("GlobalController/Brands_View");
    }
    //EXPLORE BRAND End
//6.PRODUCTS START
//VIEW
  public function Products_View()
    {
	$data['products']= $this->GlobalModel->getproducts();
	$this -> load -> view('header');
	$this -> load -> view('Products_View',$data);
	//$this -> load -> view('footer');
    }
     public function Products_Add()
    {
	if(isset ($_POST["Save"])){
	   
	    $this->GlobalModel->Products_Add();
	    redirect("GlobalController/Products_View");
	}
	$data['brandsView']= $this->GlobalModel->getbrandsView();
	$data['productCatView']= $this->GlobalModel->getProductCategoryView();
	$data['Material']=$this->GlobalModel->Getmaterial();
	$data['Accessories']=$this->GlobalModel->Getaccessories();
	$this -> load -> view('header');
	$this -> load -> view('Products_Add',$data);
	//$this -> load -> view('footer');
    } 
     public function Products_Edit($id)
    {
	if (isset($_POST["Update"])) {
	 
	    $this->GlobalModel->Products_Edit($id);
	    redirect("GlobalController/Products_View");
	 }
	 $data['brandsView']= $this->GlobalModel->getbrandsView();
	 $data['productCatView']= $this->GlobalModel->getProductCategoryView();
	 $data['Material']=$this->GlobalModel->Getmaterial();
	 $data['Accessories']=$this->GlobalModel->Getaccessories();
	 $data['productsEdit']= $this->GlobalModel->GetProductsEdit($id);
	 $data['productMultiImage']= $this->GlobalModel->GetProductsMultiImage($id);
	  //print_r( $data['productImages']);
	  //exit;
	  //
	$this -> load -> view('header');
	$this -> load -> view('Products_Edit',$data);
    }
     //DELETE
     public function Products_Delete($id)
    {
        $this->GlobalModel->Products_Delete($id);
        redirect("GlobalController/Products_View");
    }
    //7.BRANDS NEW START
    //VIEW
    //REPOSITION BRANDS FUNCTIONS STARTS
     public function repositionBrandOrder()
    {
	//$businessId=$this->session->userdata('businessId');
	$list_order = $_POST['position'];
	$list = explode(',' , $list_order);
	$i = 1;
	foreach($list as $id)
	{
	    $sql= "UPDATE brands SET position='$i' WHERE id ='$id'" ;	
	    $result[]=$this->db->query($sql);
	    $i++;
	    $query[]=$sql;
	    //echo $sql."<br>";
	}
	print_r($query);
    }
    //REPOSITION BRANDS FUNCTIONS ENDS
    //STATUS ON/OFF
     public function ajaxbrandsStatus()
    {
	
	$id=$_POST["brandsId"];
	$result= $this->GlobalModel->getStatusBrandNew($id);
	
	if($result[0]['status']=="ENABLED")
	{
	   $status="DISABLED"; 
	}
	else
	{
	    $status="ENABLED";    
	}
	$form_data=array(
		    'status'=>$status
		    );
	
	$this->db->where('id',$id);
	$this->db->update('brands', $form_data);
	echo'{"status":"'.$status.'","brandsid":"'.$id.'"}';
    }
    //STATUS ON/OFF
  public function BrandsNew_View()
    {
	$data['brandsView']= $this->GlobalModel->getbrandsView();
	$this -> load -> view('header');
	$this -> load -> view('BrandsNew_View',$data);
	//$this -> load -> view('footer');
    }
     public function BrandsNew_Add()
    {
	if(isset ($_POST["Save"]))
	{
	   
	    $this->GlobalModel->BrandsNew_Add();
	    redirect("GlobalController/BrandsNew_View");
	}
	
	$this -> load -> view('header');
	$this -> load -> view('BrandsNew_Add');
	//$this -> load -> view('footer');
    } 
     public function BrandsNew_Edit($id)
    {
	if (isset($_POST["Update"])) {
	 
	    $this->GlobalModel->BrandsNew_Edit($id);
	    redirect("GlobalController/BrandsNew_View");
	 }
	 $data['brandsView']= $this->GlobalModel->getbrandsView();
	 $data['BrandsNewEdit']= $this->GlobalModel->GetBrandsNewEdit($id);
	 //print_r($data['productsEdit']);
	 //exit;
	$this -> load -> view('header');
	$this -> load -> view('BrandsNew_Edit',$data);
    }
     //DELETE
     public function BrandsNew_Delete($id)
    {
        $this->GlobalModel->BrandsNew_Delete($id);
        redirect("GlobalController/BrandsNew_View");
    }
    //8.Product Category START
     //REPOSITION PRODUCT CATEGORY FUNCTION STARTS
     public function repositionProductCategory()
    {
	
	$list_order = $_POST['position'];
	$list = explode(',' , $list_order);
	$i = 1;
	foreach($list as $id)
	{
	    $sql= "UPDATE productcategory SET position='$i' WHERE id ='$id'" ;	
	    $result[]=$this->db->query($sql);
	    $i++;
	    $query[]=$sql;
	    //echo $sql."<br>";
	}
	print_r($query);
    }
     //REPOSITION PRODUCT CATEGORY FUNCTION ENDS
     //STATUS ON/OFF
     public function ajaxProjectCategoryStatus()
    {
	
	$id=$_POST["productCatId"];
	$result= $this->GlobalModel->getStatusProductCategory($id);
	
	if($result[0]['status']=="ENABLED")
	{
	   $status="DISABLED"; 
	}
	else
	{
	    $status="ENABLED";    
	}
	$form_data=array(
		    'status'=>$status
		    );
	
	$this->db->where('id',$id);
	$this->db->update('productcategory', $form_data);
	echo'{"status":"'.$status.'","productcatid":"'.$id.'"}';
    }
    //STATUS ON/OFF
    //VIEW
  public function ProductCategory_View()
    {
	$data['productCatView']= $this->GlobalModel->getProductCategoryView();
	$this -> load -> view('header');
	$this -> load -> view('ProductCategory_View',$data);
	//$this -> load -> view('footer');
    }
     public function ProductCategory_Add()
    {
	if(isset ($_POST["Save"]))
	{	   
	    $this->GlobalModel->ProductCategory_Add();
	    redirect("GlobalController/ProductCategory_View");
	}
	
	$this -> load -> view('header');
	$this -> load -> view('ProductCategory_Add');
	//$this -> load -> view('footer');
    } 
     public function ProductCategory_Edit($id)
    {
	if (isset($_POST["Update"])) {
	 
	    $this->GlobalModel->ProductCategory_Edit($id);
	    redirect("GlobalController/ProductCategory_View");
	 }
	// $data['ProductCategoryView']= $this->GlobalModel->getProductCatView();
	 $data['ProductNewEdit']= $this->GlobalModel->GetProductCatNewEdit($id);
	 //print_r($data['productsEdit']);
	 //exit;
	$this -> load -> view('header');
	$this -> load -> view('ProductCategory_Edit',$data);
    }
     //DELETE
     public function ProductCategory_Delete($id)
    {
        $this->GlobalModel->ProductCategory_Delete($id);
        redirect("GlobalController/ProductCategory_View");
    } 
    //9.News
    //VIEW
      //STATUS ON/OFF
     public function ajaxNewsStatus()
    {
	
	$id=$_POST["newsId"];
	$result= $this->GlobalModel->getStatusNews($id);
	
	if($result[0]['status']=="ENABLED")
	{
	   $status="DISABLED"; 
	}
	else
	{
	    $status="ENABLED";    
	}
	$form_data=array(
		    'status'=>$status
		    );
	
	$this->db->where('id',$id);
	$this->db->update('news', $form_data);
	echo'{"status":"'.$status.'","newsid":"'.$id.'"}';
    }
    //STATUS ON/OFF
    public function News_View()
	{
	    $data['newsView']= $this->GlobalModel->getnewsView();
	    $this -> load -> view('header');
	    $this -> load -> view('News_View',$data);
	    //$this -> load -> view('footer');
	}
    public function News_Add()
    {
	if(isset ($_POST["Save"]))
	{	   
	    $this->GlobalModel->News_Add();
	    redirect("GlobalController/News_View");
	}
	
	$this -> load -> view('header');
	$this -> load -> view('News_Add');
	//$this -> load -> view('footer');
    }
     public function News_Edit($id)
    {
	if (isset($_POST["Update"])) {
	 
	    $this->GlobalModel->News_Edit($id);
	    redirect("GlobalController/News_View");
	 }
	// $data['ProductCategoryView']= $this->GlobalModel->getProductCatView();
	 $data['newsEdit']= $this->GlobalModel->GetNewsEdit($id);
	
	$this -> load -> view('header');
	$this -> load -> view('News_Edit',$data);
    }
     //DELETE
     public function News_Delete($id)
    {
        $this->GlobalModel->News_Delete($id);
        redirect("GlobalController/News_View");
    } 
    //Elango controller End
    
    //Hakkaim controller Start
 
      public function Country()
    {
	//$data['getStory']=$this->GlobalModel->getStores1();
	$data['country']=$this->GlobalModel->getcountry();
	$this -> load -> view('header');
	$this -> load -> view('Country',$data);
    }

    function countryAdder()
    {
	if(isset($_POST['save']))
	{
	$this->GlobalModel->pushcountry();
	redirect(base_url()."GlobalController/Country");
	}
	$this->load->view('header');
	$this->load->view('CountryAdd',$data);
	
	
    }
    
    function globalcountryEdit($id)
    {
	
	$data['countryedit']=$this->GlobalModel->countryget($id);
	if(isset($_POST['update']))
	{
	    
	 $this->GlobalModel->updatecountry($id);
	redirect(base_url()."GlobalController/Country");   
	    
	}
	$this -> load -> view('header');
	$this -> load -> view('CountryEdit',$data);
	
    }
      public function State()
    {
	//$data['getStory']=$this->GlobalModel->getStores1();
	$data['state']=$this->GlobalModel->gettState();
	$this -> load -> view('header');
	$this -> load -> view('State',$data);
    }
    
     function stateAdder()
    {
	if(isset($_POST['save']))
	{
	$this->GlobalModel->pushstate();
	redirect(base_url()."GlobalController/State");
	}
	$this->load->view('header');
	$this->load->view('StateAdd',$data);

    }
    
     function globalstateEdit($id)
    {
	
	$data['statedit']=$this->GlobalModel->stateget($id);
	if(isset($_POST['update']))
	{
	    
	 $this->GlobalModel->updatestate($id);
	redirect(base_url()."GlobalController/State");   
	    
	}
	$this -> load -> view('header');
	$this -> load -> view('StateEdit',$data);
	
    }
    
    function globalstateDelete($id)
    {
	$this->db->where('id', $id);
	$this->db->delete('ourstate');
	
	redirect(base_url()."GlobalController/State");   
	
    }
    
    
    function City()
    {
	
	$data['city']=$this->GlobalModel->getCityy();
	$this -> load -> view('header');
	$this -> load -> view('City',$data);

	
    }
    
    function cityAdder()
    {
	
	if(isset($_POST['save']))
	{
	$this->GlobalModel->pushcity();
	redirect(base_url()."GlobalController/City");
	}
	$this->load->view('header');
	$this->load->view('cityAdder',$data);

	
	
    }
    function globalcityEdit($id)
    {
	
	$data['cityget']=$this->GlobalModel->cityget($id);
	if(isset($_POST['update']))
	{
	    
	 $this->GlobalModel->updatecity($id);
	redirect(base_url()."GlobalController/City");   
	    
	}
	$this -> load -> view('header');
	$this -> load -> view('cityEdit',$data);
	
	
    }
    function globalcityDelete($id)
    {
	$this->db->where('id', $id);
	$this->db->delete('ourcity');
	
	redirect(base_url()."GlobalController/city");   
	
	
    }
    
    
    public function Global_Stores()
    {
	$data['getStory']=$this->GlobalModel->getStores1();
	$this -> load -> view('header');
	$this -> load -> view('Global_Stores',$data);
    }
    
      public function globalStoreDelete($id)
    {
	$this->GlobalModel->globalStoreDel($id);
	
	redirect(base_url()."GlobalController/Global_Stores");   
	//$this -> load -> view('footer');
    }
    
 function globalStoreAdd()
    {
	 $result['country']=$this->GlobalModel->getcountry();
	 $result['state']=$this->GlobalModel->getstate();
	 $result['city']=$this->GlobalModel->getcity();
	 
	if(isset($_POST['save']))
	{
	 $this->GlobalModel->storesImage();  
	 redirect(base_url()."GlobalController/Global_Stores");
	}
	$this -> load -> view('header');
	$this -> load -> view('Global_StoresAdd',$result);
    }
    
    function globalStoreEdit($id)
    {
	
	$data['country']=$this->GlobalModel->getcountry();
	$data['state']=$this->GlobalModel->getstate();
	$data['city']=$this->GlobalModel->getcity();
	 
	$data['getStory']=$this->GlobalModel->getStores($id);
	if(isset($_POST['update']))
	{
	    $this->GlobalModel->putStores($id);
	    redirect(base_url()."GlobalController/Global_Stores");
	}
	
	
	//print"<pre>";
	//print_r($data);
	//print"<pre>";
	//exit;
	
	$this -> load -> view('header');
	$this -> load -> view('GlobalstoreEdit',$data);
	
    }
        public function SliderImage()
    {
	$data['getSlider']=$this->GlobalModel->getslider();
	//print"<pre>";
	//print_r($data);
	//print"<pre>";
	//exit;
	$this -> load -> view('header');
	$this -> load -> view('SliderImage',$data);
	//$this -> load -> view('footer');
    }
        public function globalSliderAdd()
    {
	if(isset($_POST['save']))
	{
	    
	 $this->GlobalModel->sliderImage();  
	 redirect(base_url()."GlobalController/SliderImage");   
	    
	}
	$this -> load -> view('header');
	$this -> load -> view('sliderImageAdd');
	//$this -> load -> view('footer');
    }
    
     function globalSliderEdit($id)
    {
	$data['getslideredit']=$this->GlobalModel->getSlideredit($id);
	if(isset($_POST['update']))
	{
	    $this->GlobalModel->putslideupdate($id);
	    redirect(base_url()."GlobalController/SliderImage");
	}
	//print"<pre>";
	//print_r($data['getslideredit']);
	//exit;
	$this -> load -> view('header');
	$this -> load -> view('sliderImageEdit',$data);
	
    }
    
    
    
        public function productSlider()
    {
	$data['getProduct']=$this->GlobalModel->getProduct();
	//print"<pre>";
	//print_r($data);
	//print"<pre>";
	//exit;
	$this -> load -> view('header');
	$this -> load -> view('productSlider',$data);
	//$this -> load -> view('footer');
    }
        public function globalProductAdd()
    {
	if(isset($_POST['save']))
	{
	    
	 $this->GlobalModel->productSliderGet();  
	 redirect(base_url()."GlobalController/productSlider");   
	    
	}
	$this -> load -> view('header');
	$this -> load -> view('productSliderAdd');
	//$this -> load -> view('footer');
    }
    
     function globalProductEdit($id)
    {
	$data['getproductnow']=$this->GlobalModel->getProductNow($id);
	if(isset($_POST['update']))
	{
	    $this->GlobalModel->putProductupdate($id);
	    redirect(base_url()."GlobalController/productSlider");
	}
	
	$this -> load -> view('header');
	$this -> load -> view('productSliderEdit',$data);
	
    }
    
      public function globalProductDelete($id)
    {
	$this->GlobalModel->productDelete($id);
	
	redirect(base_url()."GlobalController/productSlider");   
	//$this -> load -> view('footer');
    }
    
    
    
     public function globalSliderDelete($id)
    {
	$this->GlobalModel->sliderDelete($id);
	
	redirect(base_url()."GlobalController/SliderImage");   
	//$this -> load -> view('footer');
    }
    
     public function Menu()
    {
	$data['getMenu']=$this->GlobalModel->pullMenu();
	//print"<pre>";
	//print_r($data);
	//print"<pre>";
	//exit;
	$this -> load -> view('header');
	$this -> load -> view('Menu',$data);
    }

    
        public function globalMenuAdd()
    {
	if(isset($_POST['save']))
	{
	    
	 $this->GlobalModel->getMenu();  
	 redirect(base_url()."GlobalController/Menu");   
	    
	}
	$this -> load -> view('header');
	$this -> load -> view('MenuAdd');
	//$this -> load -> view('footer');
    }
    
    function globalMenuEdit($id)
    
    {
	
	$data['getmenunow']=$this->GlobalModel->getmenuNow($id);
	$data['getMenu']=$this->GlobalModel->pullMenu();
	if(isset($_POST['update']))
	{
	    $this->GlobalModel->putmenuupdate($id);
	    redirect(base_url()."GlobalController/Menu");
	}
	
	$this -> load -> view('header');
	$this -> load -> view('MenuEdit',$data);
	
	
    }
    
      public function globalMenuDelete($id)
    {
	$this->GlobalModel->menuDelete($id);
	
	redirect(base_url()."GlobalController/Menu");   
    }
    
    
    ////////////////////////////////////////////////Hakkaim controller End*****************************************************
   
    //////////////////////////////////////////////////Selva Controller start*****************************************************
    
	//View Function Start
	function Faq_View()
	{
	    $data['faq']=$this->GlobalModel->GetFaqTable();
	    $this->load->view('header');
	    $this->load->view('Faq_View',$data);
	}
	//View Function End
	
	//Add Function Start 
	function Faq_Add()
	{
	    if(isset ($_POST["Save"]))
	    {
		$this->GlobalModel->FaqInsert();
		redirect("GlobalController/Faq_View");
	    }		
	    $this -> load -> view('header');
	    $this -> load -> view('Faq_Add');
	}
	//Add Function End 
	
	//Edit Function Start
	function Faq_Edit($id)
	{
	    if(isset ($_POST["Update"]))
	    {
		$this->GlobalModel->Faq_Edit($id);
		redirect("GlobalController/Faq_View");
	    }
	    $data['FaqRow']=$this->GlobalModel->FaqTableRow($id);
	    $this->load->view('header');
	    $this->load->view('Faq_Edit',$data);
	}
	//Edit Function End
	
	//Delete Function Start
	function Faq_Delete($id)
	{
	    $this->GlobalModel->Faq_Delete($id);
	    redirect("GlobalController/Faq_View");
	}
	//Delete Function End
	
    //***********************************************************************Faq End***********************************************************************//
	
	
    //***************************************************************Privacy Policy Start********************************************************//
    
	//View Function Start
	function PrivacyPolicy_View()
	{
	    $data['PrivacyPolicy']=$this->GlobalModel->GetPrivacyPolicyTable();
	    $this->load->view('header');
	    $this->load->view('PrivacyPolicy_View',$data);
	}
	//View Function End
	
	//Add Function Start
	function PrivacyPolicy_Add()
	{
	    if(isset ($_POST["Save"]))
	    {
		$this->GlobalModel->PrivacyPolicyInsert();
		redirect("GlobalController/PrivacyPolicy_View");
	    }	
	    $this->load->view('header');
	    $this->load->view('PrivacyPolicy_Add');
	}
	//Add Function End
	
	//Edit Function Start
	function PrivacyPolicy_Edit($id)
	{
	    if(isset ($_POST["Update"]))
	    {
		$this->GlobalModel->PrivacyPolicy_Edit($id);
		redirect("GlobalController/PrivacyPolicy_View");
	    }
	    $data['PrivacyPolicy']=$this->GlobalModel->PrivacyPolicyTableRow($id);
	    $this -> load -> view('header');
	    $this -> load -> view('PrivacyPolicy_Edit',$data);
	}
	//Edit Function End
	
	//Delete Function Start
	function PrivacyPolicy_Delete($id)
	{
	    $this->GlobalModel->PrivacyPolicy_Delete($id);
	    redirect("GlobalController/PrivacyPolicy_View");
	}
	//Delete Function End
	
    //***************************************************************Privacy Policy End********************************************************//
    
    
    //*************************************************************Terms And Condition Start********************************************************//
    
	//View Function Start
	function Terms_View()
	{
	    $data['Terms']=$this->GlobalModel->GetTermsAndConditionTable();
	    $this->load->view('header');
	    $this->load->view('Terms_View',$data);
	}
	//View Function End
	
	//Add Function Start
	function Terms_Add()
	{
	    if(isset ($_POST["Save"]))
	    {
		$this->GlobalModel->Terms_Add();
		redirect("GlobalController/Terms_View");
	    }	
	    $this->load->view('header');
	    $this->load->view('Terms_Add');
	}
	//Add Function End
	
	//Edit Function Start
	function Terms_Edit($id)
	{
	    if(isset ($_POST["Update"]))
	    {
		$this->GlobalModel->Terms_Edit($id);
		redirect("GlobalController/Terms_View");
	    }
	    $data['Terms']=$this->GlobalModel->TermsAndConditionTableRow($id);
	    $this -> load -> view('header');
	    $this -> load -> view('Terms_Edit',$data);	
	}
	//Edit Function End
	
	//Delete Function Start
	function Terms_Delete($id)
	{
	    $this->GlobalModel->Terms_Delete($id);
	    redirect("GlobalController/Terms_View");
	}    
	//Delete Function End
	
    //*************************************************************Terms And Condition End********************************************************//
    
    //*************************************************************FeedBack Form Start********************************************************// 
     
	//View Function Start
	function FeedBack_View()
	{
	    $data['feedback']=$this->GlobalModel->GetFeedback();
	    $this->load->view('header');
	    $this->load->view('FeedBack_View',$data);
	}
	//View Function End
     
	//Add Function Start
	function FeedBack_Add()
	{
	    if(isset ($_POST["Save"]))
	    {
		$this->GlobalModel->FeedBack_insert();
		redirect("GlobalController/FeedBack_View");
	    }
	    $this->load->view('header');
	    $this->load->view('FeedBack_Add');
	}
	//Add Function End
     
	//Edit Function Start
	function FeedBack_Edit($id)
	{
	    if (isset($_POST["Update"]))
	    {
		$this->GlobalModel->FeedBack_Edit($id);
		redirect("GlobalController/FeedBack_View");
	    }
	    $data['feedbackrow']=$this->GlobalModel->FeedBackRow($id);
	    $this -> load -> view('header');
	    $this -> load -> view('FeedBack_Edit',$data);
	}
	//Edit Function End
     
	//Delete Function Start
	function FeedBack_Delete($id)
	{
	    $this->GlobalModel->FeedBackDelete($id);
	    redirect("GlobalController/FeedBack_View");
	}
	//Delete Function End
     
    //*************************************************************FeedBack Form End********************************************************// 
     
	
    //*************************************************************Sedar Material Start********************************************************// 
     
	//View Function Start
	function Sedarmaterial_View()
	{
	    $data['Material']=$this->GlobalModel->Getmaterial();
	    $this->load->view('header');
	    $this->load->view('Sedarmaterial_View',$data);
	}
	//View Function End
     
	//Add Function Start
	function Sedarmaterial_Add()
	{
	    if(isset ($_POST["Save"]))
	    {
		$this->GlobalModel->Material_insert();
		redirect("GlobalController/Sedarmaterial_View");
	    }
	    $this -> load -> view('header');
	    $this -> load -> view('Sedarmaterial_Add');
	}
	//Add Function End
     
	//Edit Function Start
	function Sedarmaterial_Edit($id)
	{
	    if (isset($_POST["Update"]))
	    {
		$this->GlobalModel->Sedarmaterial_Edit($id);
		redirect("GlobalController/Sedarmaterial_View");
	    }
	    $data['materialrow']=$this->GlobalModel->MaterialRow($id);
	    $this->load->view('header');
	    $this->load->view('Sedarmaterial_Edit',$data);
	}
	//Edit Function End
    
	//Delete Function Start
	function Sedarmaterial_Delete($id)
	{
	    $this->GlobalModel->Sedarmaterial_Delete($id);
	    redirect("GlobalController/Sedarmaterial_View");
	}
	//Delete Function End
     
    //***************************************************************Sedar Material End************************************************************// 
     
    //*************************************************************Sedar Accessories Start********************************************************// 
     
	//View Function Start
	function Sedaraccessories_View()
	{
	    $data['Accessories']=$this->GlobalModel->Getaccessories();
	    $this -> load -> view('header');
	    $this -> load -> view('Sedaraccessories_View',$data);
	}
	//View Function End
	
	//Add Function Start
	function Sedaraccessories_Add()
	{
	    if(isset ($_POST["Save"]))
	    {
		$this->GlobalModel->Accessories_insert();
		redirect("GlobalController/Sedaraccessories_View");
	    }
	    $this -> load -> view('header');
	    $this -> load -> view('Sedaraccessories_Add');
	}
	//Add Function End
	
	//Edit Function Start
	function Sedaraccessories_Edit($id)
	{
	    if (isset($_POST["Update"]))
	    {
		$this->GlobalModel->Sedaraccessories_Edit($id);
		redirect("GlobalController/Sedaraccessories_View");
	    }
	    $data['accessoriesrow']=$this->GlobalModel->AccessoriesRow($id);
	    $this -> load -> view('header');
	    $this -> load -> view('Sedaraccessories_Edit',$data);
	}
	//Edit Function End
     
	//Delete Function Start
	public function Sedaraccessories_Delete($id)
	{
	    $this->GlobalModel->Sedaraccessories_Delete($id);
	    redirect("GlobalController/Sedaraccessories_View");
	}
	//Delete Function End
    
    //////////////////////////////////////////////////Selva Controller End*******************************************************
    
    
    //sedar user page start    
	public function sedarUserView()
	{
	    $data['user'] = $this->GlobalModel->sedarUserView();	
	    $this -> load -> view('header');
	    $this -> load -> view('sedarUserView',$data);
	}
	public function sedarUserAdd()
	{
	    if($this->input->post('submit_form')=='Save')
	    {	
		$this->GlobalModel->sedarUserAdd();
		redirect("GlobalController/sedarUserView");
	    }
	    
	    $this -> load -> view('header');
	    $this -> load -> view('userAdd');
	}
	public function sedarUserEdit($id)
	{
	    if($this->input->post('submit_form')=='update')
	    {	
		$this->GlobalModel->sedarUserUpdate($id);
		redirect("GlobalController/sedarUserView");
	    }
	    $data['user'] = $this->GlobalModel->sedarUserEdit($id);	
	    $this->load->view('header');
	    $this->load->view('sedarUserEdit',$data);
	}
	function sedarUserDelete($id)
	{
		$this->GlobalModel->sedarUserDelete($id);
		redirect("GlobalController/sedarUserView");
	}
    //sedar user page end
    
    //Sedar contact page Start	
	 public function contact()
	{
	    if(isset($_POST["Save"])){
		  $this->GlobalModel->contact();  
		}
		
	    $data['contact']=$this->GlobalModel->contactDetails();   
	    $this -> load -> view('header');
	    $this -> load -> view('contact', $data);
	    //$this -> load -> view('footer');
	}
	 
	
    //Sedar contact page End
    

	
    }