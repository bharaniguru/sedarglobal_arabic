

	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    
		    <li><a href="javascript:;">Terms</a></li>
		    <li class="active">Terms </li>
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
		    <h4 class="panel-title">Terms </h4>
		</div>
		<div class="panel-body" id="form_validation">
		
		<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('GlobalController/Terms_Edit/'.$Terms[0]['id']); ?>" class="form-horizontal form12">
		 <legend>Choose the Categories to change</legend>
		 <div class="row">
		    <div class="col-md-7">
				 <div class="col-md-12">
			     <h3 class="m-t-0">Terms Title</h3>
				 </div>
				<div class="col-md-12">
				    <input type="text" name="title" id="aboutTitle"  class="form-control input-lg" value="<?php echo $Terms[0]['title']?>" placeholder="Overview Title" />
				</div>
				
				 <div class="col-md-12">
			     <h3 class="m-t-0">Terms link</h3>
				 </div>
				<div class="col-md-12">
				    <input type="text" name="linkTitle" id="aboutTitle"  class="form-control input-lg" value="<?php echo $Terms[0]['linkTitle']?>" placeholder="Overview Title" />
				</div>					
				

			    <div class="col-md-12">
				 <p></p>
			    <h4 class="m-t-0">Terms Description</h4>
			    </div>
				<div class="col-md-12">
				<textarea id="aboutDescription" name="description" placeholder="Enter your content here" cols="25" rows="5" class="ckeditor textarea form-control  textarea_middle required"><?php echo $Terms[0]['description']?> </textarea>
				</div>
		    </div>
		</div>
			   
			<div class="pager form-group">
                             <div class="col-md-6 control-label">
				<input type="submit" class="btn btn-md btn-success m-r-5 m-b-5" name="Update" id="submit" value="Update" >
                                <button class="btn btn-md btn-danger m-r-5 m-b-5" onclick="window.history.back();" type="button"> Cancel </button>
                                
                             </div>
			</div>
			</form>
		</div>
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

<!--
<script>
    $(function(){
	
	<?//php $data =$this->session->userdata('ServiceEdit');
	
	if(//$data!="Y"){?>
	$("#form_validation input").prop("disabled", true);
	<?//php }?>
	});
</script>-->

 