<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Slider</a></li>
       
	<li class="active">Add Your Images Here</li>
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
		<div class="panel-body" id="form_validation">
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('GlobalController/globalSliderEdit/'.$getslideredit[0]['id']); ?>"" class="form-horizontal">
			<div class="row AdjustPadding" id="image1" style="padding-bottom:20px;" >
			    <div class="page-title" >
				<!--<button type="button" class="pull-right btn btn-primary" id="plusButton" onclick="addImage()"><i class="fa  fa-plus"></i></button>-->
			    </div>
			    <div class="col-md-12" id="gallery">
				
				
				
				<div class="col-md-4 ImageView AdjustPadding" style="padding-bottom:20px;">
				    <img src="<?php echo site_url('uploads/'.$getslideredit[0]['SliderImage']);?>" class="col-md-12 previewimage" id="dummy1" style="height: 185px;" >
					
					 <input type="file" id="preview" name="image" onchange="attachment(this);" >
					 <input type="hidden" id="preview" name="oldimage" value="<?php echo $getslideredit[0]['SliderImage'];?>" >
					<!--<div class="input-group">
					<span class="input-group-btn">
					    <span class="btn btn-primary btn-file">
						Browse&hellip; <input type="file" id="preview" value="<?php //echo $common[$i];?>" name="image[]" onchange="attachment(this);">
					    </span>
					</span>
					<input type="text" value="<?php //echo $common[$i];?>" class="form-control" readonly>
				    </div>	-->
				    <p></p>
				    <input type="text" class="form-control" name="sliderTitle" id="id" value="<?php echo $getslideredit[0]['SliderTitle']; ?>" placeholder="Slider Title">
				   <p></p>
				    <input type="text" class="form-control" name="subTitle" id="id" value="<?php echo $getslideredit[0]['SliderDescription']; ?>" placeholder="Slider Sub Title">
				  <p></p>
				    <input type="text" class="form-control" name="sliderLink" id="id" value="<?php echo $getslideredit[0]['SliderLink']; ?>" placeholder="Slider link">                                
				</div>
				<?php //}?>
			    </div>
			</div>
			<div class="col-md-offset-3 col-md-6">
			    <div class="form-group">
				<label class="col col-4"></label>
				<button class="btn btn-md btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
				
				<input type="submit" class="btn btn-md btn-success"  name="update" id="submit_but" value="Update" >
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
    //scrpit for previous and next button start
    $(document).ready(function() {
	$('#rootwizard').bootstrapWizard({'nextSelector': '.button-next', 'previousSelector': '.button-previous', 'firstSelector': '.button-first', 'lastSelector': '.button-last'});
    });
    //script for precvious and next button end
    
    function attachment($this) {  
	var oFReader = new FileReader();
	oFReader.readAsDataURL($this.files[0]);
	oFReader.onload = function (oFREvent)
	{    
	    $($this).parents('.ImageView').find('img').attr("src",  oFREvent.target.result);    
	};
    };
    
    //For addmultiple Image Start
    imageCount = 1;
    function addImage()
    {	
	if (imageCount < 4)
	{	
	    //alert(imageCount);    
	    //$('<div class="col-md-4 col-sm-4 col-xs-12 ImageView " style="padding-bottom:20px;"  ><img src="<?php echo site_url('assets/img/no-image.png');?>" class="col-md-12 previewimage" id="dummy1" style="height: 185px;" ><div class="input-group"><span class="input-group-btn"><span class="btn btn-primary btn-file">Browse&hellip; <input type="file" id="preview" name="image[]" onchange="attachment(this);"></span></span><input type="text" class="form-control" readonly></div><p></p><input type="text" class="form-control input-md" name="sliderTitle[]" id="id" value="" placeholder="Slider Title"><p></p><input type="text" class="form-control" name="subTitle[]" id="id" value="" placeholder="Slider Sub Title"><p></p><input type="text" class="form-control" name="sliderLink[]" id="id" value="" placeholder="Slider link"> <div class="col-md-12 " ><a  onclick="" class=" pull-right btn btn-danger removeButton" data-template="textbox"><i class="fa fa-trash"></i></a> </div>').appendTo("#gallery");	
	    $('<div class="col-md-4 col-sm-4 col-xs-12 ImageView " style="padding-bottom:20px;"  ><img src="<?php echo site_url('assets/img/no-image.png');?>" class="col-md-12 previewimage" id="dummy1" style="height: 185px;" ><input type="file" id="preview" name="image[]" onchange="attachment(this)" ><p></p><input type="text" class="form-control input-md" name="sliderTitle" id="id" value="" placeholder="Slider Title"><p></p><input type="text" class="form-control" name="subTitle[]" id="id" value="" placeholder="Slider Sub Title"><p></p><input type="text" class="form-control" name="sliderLink[]" id="id" value="" placeholder="Slider link"> <div class="col-md-12 " ><a  onclick="" class=" pull-right btn btn-danger removeButton" data-template="textbox"><i class="fa fa-trash"></i></a> </div>	').appendTo("#gallery");	
	    attachments();
	    imageCount ++;
	}else
	{
	    $('#plusButton').prop('disabled', true);
	}	
    }
    //For addmultiple Image end
    
    //To remove Multiple added Image start
    function attachments()
    {	
	$(".removeButton").on('click',function()
	{	   
	    var $row   = $(this).parents('.ImageView');
	    $row.remove();	    	
	    $('#plusButton').prop('disabled', false);
	    //alert(imageCount);
	    imageCount --;	    
	});
	 
    }
    //To remove Multiple added Image start


</script>

