
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Project</a></li>
		   
		    <li class="active">Add Your Image Here</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Add Your Images Here<small></small></h1>
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
		    <h4 class="panel-title">Image Gallery</h4>
		</div>
		<div class="panel-body" id="">
		    <?php
		    foreach($docsedit as $row)
				    $projectImage= $row['projectImage'];
				    $projectImage= explode(",", $projectImage);
				   $length = count($projectImage);
				   ?>
		    
		  <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('GlobalController/ProjectImage_Edit/'.$row['id']); ?>" class="form-horizontal">
                    
		   
		    
		    <div class="row AdjustPadding" style="padding-bottom:20px;" >
			  
                        <div class="page-title">
                             <div class="col-md-6" style="padding:10px; ">
                                <label>Image Name</label>
                                <input type="text" name="projectImgTitle" id=""  class="form-control input-md" value="<?php echo $row['projectImgTitle']?>" placeholder="Image Name" />
                            </div>
                            <!--<button type="button" class="pull-right btn btn-primary" onclick="addImage()"><i class="fa  fa-plus"></i></button>-->
			</div>
                        <div class="col-md-12" id="gallery">
				<?php
				for($i =0; $i <$length; $i++)
				{
				?>
                            <div class="col-md-4 col-sm-4 col-xs-12 ImageView AdjustPadding"  style="padding-bottom:20px;"  >
                           
                                
                                <img src="<?php echo site_url('uploads/'.$projectImage[$i]);?>" class="col-md-12 previewimage " id="dummy1" style="height: 185px;" >
                                <input type="file" id="preview" name="image[]" class="col-md-12 "onchange="attachment(this);" >
				    <input type="hidden" id="preview" name="oldimage[]" value="<?php echo $projectImage[$i];?>" >
                               <!-- <div class="col-md-12 " ><a  onclick="" class=" pull-right btn btn-danger removeButton" data-template="textbox"><i class="fa fa-trash"></i></a></div>-->
                            </div><?php
			    
			    } ?>
                        </div>
                    
		    
		    </div>
		    <div class="col-md-offset-3 col-md-6">
				    <div class="form-group">
					<label class="col col-4"></label>
					<button class="btn btn-md btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
					
					<input type="submit" class="btn btn-md btn-success"  name="Update" id="submit_but" value="Update" >
				    </div>
				</div>
                 </form> 
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
    function attachment($this) {
  
var oFReader = new FileReader();
oFReader.readAsDataURL($this.files[0]);
oFReader.onload = function (oFREvent) {
    
$($this).parents('.ImageView').find('img').attr("src",  oFREvent.target.result);

};
};
function attachments()
    {
	
	$(".removeButton").on('click',function(){
	   
	    var $row   = $(this).parents('.ImageView');
	    $row.remove();
	});
    }

//scrpit for previous and next button start
    $(document).ready(function() {
      	$('#rootwizard').bootstrapWizard({'nextSelector': '.button-next', 'previousSelector': '.button-previous', 'firstSelector': '.button-first', 'lastSelector': '.button-last'});
    });
//script for precvious and next button end
</script>
 
 
<script>
function addImage(){
    $('<div class="col-md-4 col-sm-4 col-xs-12 ImageView " style="padding-bottom:20px;"  ><img src="<?php echo site_url('assets/img/no-image.png');?>" class="col-md-12 previewimage" id="dummy1" style="height: 185px;" ><input type="file"class="col-md-12 " id="preview" name="image[]" onchange="attachment(this)" ><div class="col-md-12 " ><a  onclick="" class=" pull-right btn btn-danger removeButton" data-template="textbox"><i class="fa fa-trash"></i></a></div>	').appendTo("#gallery");
	    //$('<div class="col-md-6" ><img src="<?php echo site_url('assets/images/no.png');?>" class="col-md-12 previewimage" id="dummy1" style="height: 250px;" >	<input type="file" id="preview" name="image" onchange="attachment();" >	 <button type="button" onclick="" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></div>').apppendTo("#gallery");
	    attachments();
	    }
	    </script>  
<!--<script type="text/javascript">
 $(document).ready(function() {
   
         $('#form_validation').on('change', '[name="userfile[]"]', function() {
      
      var $row=$(this).parents(".odd_file");  
      var imgpath=$(this).val();
      if (!imgpath==""){
        var img=this.files[0].size;
  var name=this.files[0].name;
        //var imgsize=img/1024;
 $row.find("input[name='filesize[]']").val(img);
 $row.find("input[name='userfile1[]']").val(name);
 
      
      }
    });
 });
</script>-->