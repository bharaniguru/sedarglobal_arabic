<?php
//
//print"<pre>";
//
//print_r($getStory[0]);
//exit;
?>
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
		  <form action="<?php echo base_url('GlobalController/globalStoreEdit/'.$getStory[0]['id']); ?>" class="form-horizontal"  id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
		    <legend>Change address</legend>
                    <div class="row">
			    <div class="col-md-4">
                            <h5 class="m-t-0">Country</h5>

			    <select class="form-control" id="country" name="country">
				<option>select Country</option>
			    <?php foreach ($country as $row) {?>
				<option value="<?php echo $row['CountryCode']?>" <?php if($row['CountryCode'] == $getStory[0]['country']) echo "selected"; ?>><?php echo $row['CountryName']?></option>
				
				<?php }?>
			    </select>

			    </div>
			    <div class="col-md-4">
                            <h5 class="m-t-0">State</h5>

			    <select class="form-control" id="state" name="state">
				<option>select State</option>
				<?php foreach ($state as $row) {?>
				<option value="<?= $row['StateCode']?>"><?= $row['StateName']?></option>
				<?php }?>
				 </select>

			    </div>
			    <div class="col-md-4">
                            <h5 class="m-t-0">City</h5>

			    <select class="form-control" id="city" name="city">
				<option>select City</option>
				<?php foreach ($city as $row) {?>
				<option value="<?= $row['CityCode']?>"><?= $row['CityName']?></option>
				<?php }?>
				 </select>
			    
                        </div>
		    </div>

		    <legend>Change address</legend>
                    <div class="row">

                         <div class="col-md-4">
                            <h5 class="m-t-0">Address title</h5>
                            <input class="form-control input-sm" name="address1" type="text" value="<?php echo $getStory[0]['addresstitle']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
			 <div class="col-md-4">
                            <h5 class="m-t-0">Address#1</h5>
                            <input class="form-control input-sm" name="address2" type="text" value="<?php echo $getStory[0]['address1']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
			  <div class="col-md-4">
                            <h5 class="m-t-0">Address#2</h5>
                            <input class="form-control input-sm" name="address3" type="text" value="<?php echo $getStory[0]['address2']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
		    </div>
		    <div class="row">
                         <div class="col-md-6">
                            <h5 class="m-t-0">Fax</h5>
                            <input class="form-control input-sm" name="fax" type="text" value="<?php echo $getStory[0]['fax']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
			 <div class="col-md-6">
                            <h5 class="m-t-0">Phone Number</h5>
                            <input class="form-control input-sm" name="phone" type="text" value="<?php echo $getStory[0]['phone']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
		    </div>
			 <p></p>
			 
			 <legend>Change image for Store</legend>
			<div class="row">
			<div class="row AdjustPadding" id="image1" style="padding-bottom:20px;" >
                        <div class="col-md-12">
                            <div class="col-md-4 viewer AdjustPadding" style="padding-bottom:20px;"  >
				<img src="<?php echo site_url('uploads/'.$getStory[0]['textImage']);?>" class="col-md-12 previewimage" style="height: 185px;" >
				    <input type="file" id="previewer" name="imagetext" class="col-md-12 "onchange="attachmenter(this);" >
					<input type="hidden" id="previewer" name="oldimagee" value="<?php echo $getStory[0]['textImage']?>" >
                            </div>
                        </div>
                    </div>
		    </div>
			 
			 
		     <legend>Click the imgage to add extra <button type="button" onclick="addImage()" class="pull-right btn btn-primary"><i class="fa  fa-plus"></i></button></legend>
		   
                        
		    <div class="row AdjustPadding" id="image1" style="padding-bottom:20px;" >
			<div class="page-title">
                             <div class="col-md-4" style="padding:10px; ">
                                <label>Image Name</label>
                                <input type="text" name="description" class="form-control input-md" value="<?php echo $getStory[0]['description']?>" placeholder="Image Name" />
                            </div>
                            <!--<button type="button" class="pull-right btn btn-primary" onclick="addImage()"><i class="fa  fa-plus"></i></button>-->
			</div>
			 <div class="row">
                        <?php foreach ($getStory as $row)
                        
                        $stores=$row['image'];
                        $story=explode(",", $stores);
                        $leangth=count($story);
                        
                        ?>
                        <div class="col-md-12" id="gallery">
                            <?php for($i=0;$i<$leangth;$i++) {?>
                            <div class="col-md-4 col-sm-4 col-xs-12 ImageView AdjustPadding" style="padding-bottom:20px;"  >
				<img src="<?php echo site_url('uploads/'.$story[$i]);?>" class="col-md-12 previewimage" id="dummy1" style="height: 185px;" >
                               <input type="hidden" id="preview" name="oldimage[]" value="<?php echo $story[$i]?>" >
			        <input type="file" id="preview" name="image[]" class="col-md-12 "onchange="attachment(this);" >
                              </div>
                             <?php } ?>
                        </div>
                    </div>
			<!--<div class="col-md-4">
			    <input class="form-control input-sm" name="imgdesciption" value="<?php //echo $getStory[0]['image description']?>" type="text" placeholder="image description">
				<p></p>
			    <p>
				<img class="media-object superbox-img previewimage" id="show_image" name="show_image" src="<?php //echo base_url('assets/img/'.$getStory[0]['image']); ?>" >
			    </p>
			    <div role="form">
				<input type="hidden" value="<?php //echo $data['slider_image_1'];?>" name="old_slider_image_1"/>
				<input id="storyimage" class="filestyle" type="file" name='image' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
				<div class="bootstrap-filestyle input-group">
				    <span class="group-span-filestyle input-group-btn" tabindex="0">
					<label id="new" class="btn btn-default" for="storyimage">
					    <span class="glyphicon glyphicon-folder-open"></span>
					    Choose file
					</label>
				    </span>
				    <input class="form-control" id="storyimage-1"  value="<?php //echo $getStory[0]['slider_image_1']; ?>" type="text" readonly>
				</div>
			    </div>
			</div>-->
			<!--<div id="shower"></div>-->
			<!--<div class="col-md-4 hide" id="shoeee">
			    <input class="form-control input-sm" name="about_subtitle_1" value="<?php //echo $getStory[0]['image description']?>" type="text" placeholder="image description">
				<p></p>
			    <p>
				<img class="media-object superbox-img previewimage" id="show_image2" name="show_image" src="<?php //echo base_url('assets/img/'.$getStory[0]['image']); ?>" >
			    </p>
			    <div role="form">
				<input type="hidden" value="<?php //echo $data['slider_image_1'];?>" name="old_slider_image_1"/>
				<input id="storyimage2" class="filestyle" type="file" name='image' onchange="PreviewImage2();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
				<div class="bootstrap-filestyle input-group">
				    <span class="group-span-filestyle input-group-btn" tabindex="0">
					<label id="new" class="btn btn-default" for="storyimage2">
					    <span class="glyphicon glyphicon-folder-open"></span>
					    Choose file
					</label>
				    </span>
				    <span class="col-md-10">
				    <input class="form-control" id="storyimage-2"  value="<?php //echo $getStory[0]['slider_image_1']; ?>" type="text" readonly>
				</span><button type="button" id="remover" onclick="reeee($(this))" class="pull-right btn btn-danger"><i class="fa  fa-plus"></i></button>
				</div>
			    </div>
			</div>-->
	
		     </div>
                    
		    <p></p>
                    <p></p>
			<div class="pager form-group">
                             <div class="col-md-7 control-label">
                                <button  class="btn btn-success m-r-5 m-b-5" type="submit" name="update" >update</button>
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
    $(document).ready(function () {
	
	getState(statecode);
	getcity(citycode);

	});
   
   
   
   var statecode= "<?php echo $getStory[0]['country']; ?>";
   var citycode= "<?php echo $getStory[0]['state']; ?>";

    function getState(statecode) {
	
	$.ajax({
	
	type:'post',
	url: "<?=site_url('GlobalController/getState');?>",
	data:{statecode:statecode},
	success: function (response){
	
	$('#state').html(response);
	}
	
    });
	
    }

    function getcity(citycode) {
	
	$.ajax({
	
	type:'post',
	url: "<?=site_url('GlobalController/getCity');?>",
	data:{citycode:citycode},
	success: function (response){
	
	$('#city').html(response);
	}
	
    });
	
    }
    
    
     $('#country').change(function() { 
    var codecountry=$(this).find("option:selected").val();

    $.ajax({
	
	type:'post',
	url: "<?=site_url('GlobalController/findState');?>",
	data:{codecountry:codecountry},
	success: function (response){
	
	$('#state').html(response);
	}
	
    });
   });
    
    $('#state').change(function() { 
    var codestate=$(this).find("option:selected").val();

    $.ajax({
	
	type:'post',
	url: "<?=site_url('GlobalController/findcity');?>",
	data:{codestate:codestate},
	success: function (response){
	
	$('#city').html(response);
	}
	
    });
   });
    
</script>

<script>

function attachments()
    {
	
	$(".removeButton").on('click',function(){
	   
	    var $row = $(this).parents('.ImageView');
	    $row.remove();
	});
    }
    
    function addImage(){
    $('<div class="col-md-4 col-sm-4 col-xs-12 ImageView " style="padding-bottom:20px;"  ><img src="<?php echo site_url('assets/img/no-image.png');?>" class="col-md-12 previewimage" id="dummy1" style="height: 185px;" ><input type="file" id="preview" name="image[]" onchange="attachment(this)" ><p></p><input type="text" class="form-control input-md" name="sliderTitle[]" id="id" value="" placeholder="Slider Title"><p></p><input type="text" class="form-control" name="subTitle[]" id="id" value="" placeholder="Slider Sub Title"><p></p><input type="text" class="form-control" name="sliderLink[]" id="id" value="" placeholder="Slider link"> <div class="col-md-12 " ><a  onclick="" class=" pull-right btn btn-danger removeButton" data-template="textbox"><i class="fa fa-trash"></i></a> </div>	').appendTo("#gallery");	
    attachments();
    }
    
    function attachment($this) {
  
    var oFReader = new FileReader();
    oFReader.readAsDataURL($this.files[0]);
    oFReader.onload = function (oFREvent) {
    $($this).parents('.ImageView').find('img').attr("src",  oFREvent.target.result);
    
    };
    };
    
     function attachmenter($this) {
    var imgval=$('#previewer').val();
    var oFReader = new FileReader();
    oFReader.readAsDataURL($this.files[0]);
    oFReader.onload = function (oFREvent) {
    $($this).parents('.viewer').find('img').attr("src",  oFREvent.target.result);
    
    };
    };
    
    
</script>

 