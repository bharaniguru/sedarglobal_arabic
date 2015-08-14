
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
		<div class="panel-body" >
	  <form action="<?php echo base_url("GlobalController/Global_Home"); ?>" class="form-horizontal"  id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                   
                <legend>Choose the logo to change</legend>
                    <div class="row">
                         <div class="col-md-4">
			    <p>
				<img class="media-object superbox-img previewimage" id="show_image_log" name="show_image" src="<?php echo base_url('uploads/home/'); ?>" >
			    </p>
			    <div role="form">
				<input type="hidden" value="" name="old_logo"/>
				<input id="filestyle-70" class="filestyle" name="logo" type="file" onchange="PreviewImage4();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
				<div class="bootstrap-filestyle input-group">
				    <span class="group-span-filestyle input-group-btn" tabindex="0">
					<label id="new" class="btn btn-default" for="filestyle-70">
					    <span class="glyphicon glyphicon-folder-open"></span>
					    Choose file
					</label>
				    </span>
				    <input class="form-control" id="filestyle-78" name value="" type="text" readonly>
				</div>
			    </div>
			 </div>
		    </div>
		    <p></p>
		    <p></p>
		   
                   <legend>Choose the Slider to change</legend>
                   
                    <div class="row">
			<div class="col-md-4">
			    <h4 class="m-t-0">Main Image</h4>
			    <p>
				<img class="media-object superbox-img previewimage" id="show_image" name="show_image" src="<?php echo base_url('uploads/home/'); ?>" >
			    </p>
			    <div role="form">
				<input type="hidden" value="" name="old_slider_image_1"/>
				<input id="filestyle-7" class="filestyle" type="file" name='slider_image_1' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
				<div class="bootstrap-filestyle input-group">
				    <span class="group-span-filestyle input-group-btn" tabindex="0">
					<label id="new" class="btn btn-default" for="filestyle-7">
					    <span class="glyphicon glyphicon-folder-open"></span>
					    Choose file
					</label>
				    </span>
				    <input class="form-control" id="filestyle-77"  value="" type="text" readonly>
				</div>
			    </div>
			</div>
		    </div>
		    <p></p>
		    <div class="row">
			     
			    
                            <div class="col-md-4">
				<h4 class="m-t-0">Carousel Caption</h4>
				<input class="form-control input-md" name="CarouselCaption1" value="" type="text" placeholder="Carousel Caption">
				<p></p>
				
				<h4 class="m-t-0">Carousel Content</h4>
				<input class="form-control input-md" name="CarouselContent1" value="" type="text" placeholder="Carousel Content">
				<p></p>
				
				<h4 class="m-t-0">Url</h4>
				<input class="form-control input-md" name="CarouselUrl1" value="" type="text" placeholder="Carousel Url ">
				<p></p>
				<p>
                                    <img class="media-object superbox-img previewimage" id="show_image1" name="show_image" src="<?php echo base_url('uploads/home/') ?>" >
                                </p>
				<div role="form">
				    <input type="hidden" value="" name="old_slider_image_2"/>
				    <input id="filestyle-71" class="filestyle" type="file"  name='slider_image_2' onchange="PreviewImage1();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
				    <div class="bootstrap-filestyle input-group">
					<span class="group-span-filestyle input-group-btn" tabindex="0">
					    <label id="new" class="btn btn-default" for="filestyle-71">
						<span class="glyphicon glyphicon-folder-open"></span>
						Choose file
					    </label>
					</span>
					<input class="form-control" id="filestyle-72"  value="" type="text" readonly>
				    </div>
				</div>
			    </div>
			    <div class="col-md-4">
                                <h4 class="m-t-0">Carousel Caption</h4>
				<input class="form-control input-md" name="CarouselCaption2" value="" type="text" placeholder="Carousel Caption">
				<p></p>
				
				<h4 class="m-t-0">Carousel Content</h4>
				<input class="form-control input-md" name="CarouselContent2" value="" type="text" placeholder="Carousel Content">
				<p></p>
				
				<h4 class="m-t-0">Url</h4>
				<input class="form-control input-md" name="CarouselUrl2" value="" type="text" placeholder="Carousel Url">
				<p></p>
				<p>
                                    <img class="media-object superbox-img previewimage" id="show_image2" name="show_image" src="<?php echo base_url('uploads/home/') ?>">
                                </p>
				<div role="form">
				    <input type="hidden" value="" name="old_slider_image_3"/>
				    <input id="filestyle-73" class="filestyle"  name='slider_image_3' type="file" onchange="PreviewImage2();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
				    <div class="bootstrap-filestyle input-group">
					<span class="group-span-filestyle input-group-btn" tabindex="0">
					    <label id="new" class="btn btn-default" for="filestyle-73">
						<span class="glyphicon glyphicon-folder-open"></span>
						Choose file
					    </label>
					</span>
					<input class="form-control" id="filestyle-74"  value="" type="text" readonly>
				    </div>
				</div>
			    </div>
			    <div class="col-md-4">
                                <h4 class="m-t-0">Carousel Caption</h4>
				<input class="form-control input-md" name="CarouselCaption3" value="" type="text" placeholder="Carousel Caption3">
				<p></p>
				
				<h4 class="m-t-0">Carousel Content</h4>
				<input class="form-control input-md" name="CarouselContent3" value="" type="text" placeholder="Carousel Content3">
				<p></p>
				
				<h4 class="m-t-0">Carousel Url</h4>
				<input class="form-control input-md" name="CarouselUrl3" value="" type="text" placeholder="Carousel Url">
				<p></p>
				<p>
                                    <img class="media-object superbox-img previewimage" id="show_image13" name="show_image" src="<?php echo base_url('uploads/home/')?>">
                                </p>
				<div role="form">
				    <input type="hidden" value="" name="old_slider_image_4"/>
                                    <input id="filestyle-13" class="filestyle" type="file" name='slider_image_4' onchange="PreviewImage13();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
				    <div class="bootstrap-filestyle input-group">
					<span class="group-span-filestyle input-group-btn" tabindex="0">
					    <label id="new" class="btn btn-default" for="filestyle-13">
						<span class="glyphicon glyphicon-folder-open"></span>
						Choose file
					    </label>
					</span>
					<input class="form-control" id="filestyle-3"  value="" type="text" readonly>
				    </div>
				</div>
			    </div>
		    </div>
                      <p></p>
                      <p></p>
                     <legend>Choose the Gallery to change</legend> 
                    
                    <div class="row">
                        <div class="col-md-12">
			    <!--<label class="col-md-4 control-lable"></label>-->
			    <h4 class="m-t-0">Gallery Title</h4>
			    <p class="col-md-5">
				<input type="text" name="GalleryTitle" class="form-control" id="GalleryTitle" value="" >
			    </p>
			    
			</div>
			
			<div class="col-md-4">
			    
			<h4 class="m-t-0">Gallery Name</h4>
			<input class="form-control input-md" name="gal_img_cap1" value="" type="text" placeholder="ADD NAME">
			    <p></p>
                                <p>
                                    <img class="media-object superbox-img previewimage" id="show_image4" name="show_image" src="<?php echo base_url('uploads/home/') ?>">
                                </p>
                            
                    
                  
                                    <div role="form">
                                    <input type="hidden" value="" name="old_gal_img1"/>
                                        <input id="filestyle-80" class="filestyle" type="file"  name='gal_img1' onchange="PreviewImage5();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-80">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                            <input class="form-control" id="filestyle-81"  value="" type="text" readonly>
                                        </div>
                                    
                                    </div>
                            </div>
                             <div class="col-md-4">
				
				<h4 class="m-t-0">Gallery Name</h4>
			<input class="form-control input-md" type="text" name="gal_img_cap2" value="" placeholder="ADD NAME">
			    <p></p>
				
                                <p>
                                    <img class="media-object superbox-img previewimage" id="show_image5" name="show_image" src="<?php echo base_url('uploads/home/'); ?>">
                                </p>
                            
                    
                  
                                    <div role="form">
					<input type="hidden" value="" name="old_gal_img2"/>
                                        <input id="filestyle-82" class="filestyle" type="file" name='gal_img2' onchange="PreviewImage6();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-82">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                            <input class="form-control" id="filestyle-83"  value="" type="text" readonly>
                                        </div>
                                    
                                    </div>
                            </div>
                             
                              <div class="col-md-4">
				
				<h4 class="m-t-0">Gallery Name</h4>
			<input class="form-control input-md" type="text" name="gal_img_cap3" value="" placeholder="ADD NAME">
			    <p></p>
				
                                <p>
                                    <img class="media-object superbox-img previewimage" id="show_image6" name="show_image" src="<?php echo base_url('uploads/home/'); ?>">
                                </p>
                            
                    
                  
                                    <div role="form">
					<input type="hidden" value="" name="old_gal_img3"/>
                                        <input id="filestyle-84" class="filestyle" type="file" name='gal_img3' onchange="PreviewImage7();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-84">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                            <input class="form-control" id="filestyle-85" value="" type="text" readonly>
                                        </div>
                                    
                                    </div>
                            </div>
                        </div>
		    <p></p>
		    <div class="row">
			<div class="col-md-4">
			    <h4 class="m-t-0">Gallery Name</h4>
			    <input class="form-control input-md" type="text" name='gal_img_cap4' value="" placeholder="ADD NAME">
			    <p></p>
			    <p>
				<img class="media-object superbox-img previewimage" id="show_image7" name="show_image" src="<?php echo base_url('uploads/home/') ?>">
			    </p>
			    <div role="form">
				<input type="hidden" value="" name="old_gal_img4"/>
                                    <input id="filestyle-86" class="filestyle" type="file" name='gal_img4' onchange="PreviewImage8();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
				    <div class="bootstrap-filestyle input-group">
					<span class="group-span-filestyle input-group-btn" tabindex="0">
					    <label id="new" class="btn btn-default" for="filestyle-86">
						<span class="glyphicon glyphicon-folder-open"></span>
						Choose file
					    </label>
					</span>
					<input class="form-control" id="filestyle-87" value="" type="text" readonly>
				    </div>
			    </div>
                        </div>
			
			<div class="col-md-4">
			    <h4 class="m-t-0">Gallery Name</h4>
			    <input class="form-control input-md" type="text" name='gal_img_cap5' value="" placeholder="ADD NAME">
			    <p></p>
			    <p>
				<img class="media-object superbox-img previewimage" id="show_image11" name="show_image" src="<?php echo base_url('uploads/home/') ?>">
			    </p>
			    <div role="form">
				<input type="hidden" value="" name="old_gal_img5"/>
                                    <input id="filestyle-11" class="filestyle" type="file" name='gal_img5' onchange="PreviewImage19();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
				    <div class="bootstrap-filestyle input-group">
					<span class="group-span-filestyle input-group-btn" tabindex="0">
					    <label id="new" class="btn btn-default" for="filestyle-11">
						<span class="glyphicon glyphicon-folder-open"></span>
						Choose file
					    </label>
					</span>
					<input class="form-control" id="filestyle-21" value="" type="text" readonly>
				    </div>
			    </div>
                        </div>
			
			<div class="col-md-4">
			    <h4 class="m-t-0">Gallery Name</h4>
			    <input class="form-control input-md" type="text" name='gal_img_cap6' value="" placeholder="ADD NAME">
			    <p></p>
			    <p>
				<img class="media-object superbox-img previewimage" id="show_image12" name="show_image" src="<?php echo base_url('uploads/home/'); ?>">
			    </p>
			    <div role="form">
				<input type="hidden" value="" name="old_gal_img6"/>
                                    <input id="filestyle-12" class="filestyle" type="file" name='gal_img6' onchange="PreviewImage20();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
				    <div class="bootstrap-filestyle input-group">
					<span class="group-span-filestyle input-group-btn" tabindex="0">
					    <label id="new" class="btn btn-default" for="filestyle-12">
						<span class="glyphicon glyphicon-folder-open"></span>
						Choose file
					    </label>
					</span>
					<input class="form-control" id="filestyle-22" value="" type="text" readonly>
				    </div>
			    </div>
                        </div>
		    
		    
		    </div>
                    
                    <p></p>
                      <p></p>
                    
                     <legend>Choose the News Information to change</legend> 
                    <div class="row">
                    <div class="col-md-4">
			<h4 class="m-t-0">News Title</h4>
			<input class="form-control input-md" type="text"  name="news_t1"value="" placeholder="ADD NEWS">
			    <p></p>
			    
                           <h4 class="m-t-0">Description</h4>
                                
                                <textarea class="form-control" rows="5" name="news_d1" placeholder="Textarea"></textarea>
                          
                       <p></p>
			
                                <p>
                                    <img class="media-object superbox-img previewimage" id="show_image8" name="show_image" src="<?php echo base_url('uploads/home/') ?>">
                                </p>
                            
                    
                  
                                    <div role="form">
					<input type="hidden" value="" name="old_news_img1"/>	
                                        <input id="filestyle-90" class="filestyle" type="file" name='news_img1' onchange="PreviewImage9();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-90">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                            <input class="form-control" id="filestyle-91" value="" type="text" readonly>
                                        </div>
                                    
                                    </div>
				    <p></p>
				   <input class="form-control input-md" type="text" name="news_url1" value="" placeholder="CURRENT URL LINK"> 
                            </div>
                    <div class="col-md-4">
			
			<h4 class="m-t-0">News Title</h4>
			<input class="form-control input-md" type="text" name="news_t2" value="" placeholder="ADD NEWS">
			   <p></p>
			    
                           <h4 class="m-t-0">Description</h4>
                                
                                <textarea class="form-control" rows="5"  name="news_d2" placeholder="Textarea"></textarea>
                          
                       <p></p>
                                <p>
                                    <img class="media-object superbox-img previewimage" id="show_image9" name="show_image" src="<?php echo base_url('uploads/home/')?>">
                                </p>
                            
                    
                  
                                    <div role="form">
					<input type="hidden" value="" name="old_news_img2"/>
                                        <input id="filestyle-92" class="filestyle" type="file" name="news_img2" onchange="PreviewImage10();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-92">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                            <input class="form-control" id="filestyle-93" value="" type="text" readonly>
                                        </div>
                                    
                                    </div>
				     <p></p>
				   <input class="form-control input-md" type="text"  name="news_url2" value="" placeholder="CURRENT URL LINK"> 
                            </div>
                    <div class="col-md-4">
			
			<h4 class="m-t-0">News Title</h4>
			<input class="form-control input-md" type="text" name="news_t3" value="" placeholder="ADD NEWS">
			    <p></p>
			     <h4 class="m-t-0">Description</h4>
                                
                                <textarea class="form-control" rows="5" name="news_d3" placeholder="Textarea"></textarea>
                          
                       <p></p>
                                <p>
                                    <img class="media-object superbox-img previewimage" id="show_image10" name="show_image" src="<?php echo base_url('uploads/home/')?>">
                                </p>
                            
                    
                  
                                    <div role="form">
					<input type="hidden" value="" name="old_news_img3"/>
                                        <input id="filestyle-94" class="filestyle" type="file" name="news_img3"  onchange="PreviewImage18();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-94">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                            <input class="form-control" id="filestyle-95"  value="" type="text" readonly>
                                        </div>
                                    
                                    </div>
				     <p></p>
				   <input class="form-control input-md" type="text" name="news_url3" value="" placeholder="CURRENT URL LINK"> 
                            </div>
                    </div>
                   
                    <p></p>
                      <p></p>
         
                     <legend>Choose the Footer to change</legend>
                    
                   <div class="row">
                     <div class="col-md-4">
                                <p>
                                    <img class="media-object superbox-img previewimage" id="show_image11" name="show_image" src="<?php echo base_url('uploads/home/'); ?>" heigh="30%">
                                </p>
                                    <div role="form">
					<input type="hidden" value="" name="old_footer_img"/>
                                        <input id="filestyle-99" class="filestyle" name="footer_img" type="file" onchange="PreviewImage12();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-99">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                            <input class="form-control" id="filestyle-100" value="" type="text" readonly>
                                        </div>
                                    
                                    </div>
                            </div>
                    </div>
		   
		    <div class="pager form-group">
                             <div class="col-md-7 control-label">
                                
                                <input class="btn btn-success m-r-5 m-b-5" type="submit" name="save" id="save" value="Save">
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
	
	<?php $data =$this->session->userdata('HomeEdit');
	
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
    
    
    function PreviewImage19() {
    var image =document.getElementById("filestyle-11").value;
    $('#filestyle-21').val(image);
    //alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-11").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image11").src = oFREvent.target.result;
           
          };
    };
     function PreviewImage20() {
    var image =document.getElementById("filestyle-12").value;
    $('#filestyle-22').val(image);
    //alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-12").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image12").src = oFREvent.target.result;
           
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
    
    
      
     function PreviewImage12() {
    var image =document.getElementById("filestyle-99").value;
    $('#filestyle-100').val(image);
    //alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-99").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image11").src = oFREvent.target.result;
           
          };
    };
    
    
    
     function PreviewImage13() {
    var image =document.getElementById("filestyle-13").value;
    $('#filestyle-3').val(image);
    alert('ahi');
    //  var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-13").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image13").src = oFREvent.target.result;
           
          };
    };
    
    
    
     function PreviewImage16() {
    var image =document.getElementById("filestyle-16").value;
    $('#filestyle-100').val(image);
    //alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-6").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image16").src = oFREvent.target.result;
           
          };
    };
    
    function PreviewImage18() {
    var image =document.getElementById("filestyle-94").value;
    $('#filestyle-95').val(image);
    //alert('ahi');
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("filestyle-94").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image10").src = oFREvent.target.result;
           
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

 