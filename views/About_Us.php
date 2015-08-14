

	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Application</a></li>
		    <li><a href="javascript:;">Define</a></li>
		    <li><a href="javascript:;">Address</a></li>
		    <li class="active">Country</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View<small> You may view details here...</small></h1>
		<!-- end page-header -->
		
		<!-- begin row -->
		<div class="row">
		    <!-- begin col-10 -->
		    <div class="col-md-12">
			<!-- begin panel -->
	    <div class="panel panel-inverse">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">View </h4>
		</div>
		<div class="panel-body" id="form_validation">
		  <form action="<?php echo base_url(); ?>FranchiseController/About_Us/" class="form-horizontal"  id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                 
                <legend>Choose the Title to change</legend>
                    <div class="row">
                         <div class="col-md-4">
                            <h4 class="m-t-0">Title Heading</h4>
                            <input class="form-control input-lg" name="about_title" type="text" value="<?php echo $frach_row[0]['about_title']; ?>" placeholder="TYPE YOUR OWN TITLE">
                            
                        </div>
                        
                    </div>
                     <p></p>
                     <legend>Choose the Sub Title to change</legend>
                    <div class="row">
                        
                        <div class="col-md-4">
                         <div class="col-md-12">
                            <h4 class="m-t-0">Name of this content</h4>
                            <input class="form-control input-lg" name="about_subtitle_1" type="text" value="<?php echo $frach_row[0]['about_subtitle_1']; ?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
                          
                                <div class="col-md-12">
                                      <p></p>
                                    <h4 class="m-t-0">Descrption</h4>
                                <textarea class="ckeditor textarea form-control  textarea_middle required" name="about_subtitle_1_paragraph" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"><?php echo $frach_row[0]['about_subtitle_1_paragraph'];?></textarea>
                            </div>
                       </div>
                        
                        <div class="col-md-4">
                         <div class="col-md-12">
                             <h4 class="m-t-0">Name of this content</h4>
                            <input class="form-control input-lg" name="about_subtitle_2" type="text" value="<?php echo $frach_row[0]['about_subtitle_2']; ?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
                           
                                <div class="col-md-12">
                                     <p></p>
                                    <h4 class="m-t-0">Descrption</h4>
                                <textarea class="form-control ckeditor" name="about_subtitle_2_paragraph" rows="5" placeholder="TYPE YOUR OWN PARAGRAPH"><?php echo $frach_row[0]['about_subtitle_2_paragraph']; ?></textarea>
                            </div>
                       </div>
                        
                        <div class="col-md-4">
                         <div class="col-md-12">
                             <h4 class="m-t-0">Name of this content</h4>
                            <input class="form-control input-lg" name="about_subtitle_3" type="text" value="<?php echo $frach_row[0]['about_subtitle_3']; ?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
                           
                                <div class="col-md-12">
                                     <p></p>
                                   <h4 class="m-t-0">Descrption</h4>
                                <textarea class="form-control ckeditor" name="about_subtitle_3_paragraph" rows="5" placeholder="TYPE YOUR OWN PARAGRAPH"><?php echo $frach_row[0]['about_subtitle_3_paragraph']; ?></textarea>
                            </div>
                       </div>
                       
                     </div>
	
                   
                      <p></p>
                      <p></p>
                    
                      <legend>Choose the Link to change</legend>
                        <div class="row">
                         <div class="col-md-4">
                            <h4 class="m-t-0">Button name</h4>
                            <input class="form-control input-lg" name="Button_Caption" type="text" value="<?php echo $frach_row[0]['Button_Caption']; ?>" placeholder="TYPE YOUR BUTTON NAME">
                            
                        </div>
                         
                          <div class="col-md-4">
                            <h4 class="m-t-0">URL Link</h4>
                            <input class="form-control input-lg" name="Button_Url" type="text" value="<?php echo $frach_row[0]['Button_Url']; ?>" placeholder="URL link">
                            
                        </div>
                        
                    </div>
                          <div class="pager form-group">
                             <div class="col-md-7 control-label">
                                <button  class="btn btn-success m-r-5 m-b-5" type="submit" name="save" >Save</button>
                                <button  class="btn btn-default m-r-5 m-b-5" onclick="window.history.back();" type="button">Cancel</button>
                             </div>
                             
                         </div>
                        
                    </form>
		</div>
	    </div>
	    <!-- end panel -->
	</div>
	<!-- end col-10 -->
    </div>
    <!-- end row -->
	</div>
	<!-- end #content -->
	
	<!-- begin scroll to top btn -->
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	<!-- end scroll to top btn -->
</div>
<!-- end page container -->
</body>
</html>


<script>
    $(function(){
	
	<?php $data =$this->session->userdata('AboutUsEdit');
	
	if($data!="Y"){?>
	$("#form_validation input").prop("disabled", true);
	<?php }?>
	});
    function PreviewImage() {
    var image =document.getElementById("filestyle-7").value;
    $('#filestyle-77').val(image);
    //alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-7").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image").src = oFREvent.target.result;
           
          };
    };
    
     function PreviewImage1() {
    var image =document.getElementById("filestyle-71").value;
    $('#filestyle-72').val(image);
    //alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-71").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image1").src = oFREvent.target.result;
           
          };
    };
    
     function PreviewImage2() {
    var image =document.getElementById("filestyle-73").value;
    $('#filestyle-74').val(image);
    //alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-73").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image2").src = oFREvent.target.result;
           
          };
    };
    
    
     function PreviewImage3() {
    var image =document.getElementById("filestyle-73").value;
    $('#filestyle-76').val(image);
    //alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-73").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image3").src = oFREvent.target.result;
           
          };
    };
    
    
     function PreviewImage4() {
    var image =document.getElementById("filestyle-70").value;
    $('#filestyle-78').val(image);
    //alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-70").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image_log").src = oFREvent.target.result;
           
          };
    };
    
    
    
     function PreviewImage5() {
    var image =document.getElementById("filestyle-80").value;
    $('#filestyle-81').val(image);
    //alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-80").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image4").src = oFREvent.target.result;
           
          };
    };
    
    
     function PreviewImage6() {
    var image =document.getElementById("filestyle-82").value;
    $('#filestyle-83').val(image);
    //alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-82").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image5").src = oFREvent.target.result;
           
          };
    };
    
     function PreviewImage7() {
    var image =document.getElementById("filestyle-84").value;
    $('#filestyle-85').val(image);
    //alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-84").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image6").src = oFREvent.target.result;
           
          };
    };
    
     function PreviewImage8() {
    var image =document.getElementById("filestyle-86").value;
    $('#filestyle-87').val(image);
    //alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-86").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image7").src = oFREvent.target.result;
           
          };
    };
    
    
    
      
     function PreviewImage9() {
    var image =document.getElementById("filestyle-90").value;
    $('#filestyle-91').val(image);
    //alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-90").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image8").src = oFREvent.target.result;
           
          };
    };
    
    
      
     function PreviewImage10() {
    var image =document.getElementById("filestyle-92").value;
    $('#filestyle-93').val(image);
    //alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-92").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image9").src = oFREvent.target.result;
           
          };
    };
    
    
      
     function PreviewImage11() {
    var image =document.getElementById("filestyle-99").value;
    $('#filestyle-100').val(image);
    alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-99").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image11").src = oFREvent.target.result;
           
          };
    };
    
    
    
     function PreviewImage13() {
    var image =document.getElementById("filestyle-13").value;
    $('#filestyle-100').val(image);
    alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-3").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image13").src = oFREvent.target.result;
           
          };
    };
    
    
    
     function PreviewImage16() {
    var image =document.getElementById("filestyle-16").value;
    $('#filestyle-100').val(image);
    alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-6").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image16").src = oFREvent.target.result;
           
          };
    };
    
  //  
  //  $(":file").filestyle({buttonBefore: true});
  //  
  //    $(":file").filestyle({buttonBefore: true});
  //
  //$(":file").filestyle({buttonBefore: true});
  //
  //$(":file").filestyle({buttonBefore: true});
    
</script>

 