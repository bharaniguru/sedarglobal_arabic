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
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('GlobalController/globalMenuEdit/'.$getmenunow[0]['id']); ?>"" class="form-horizontal">
			
			<legend>Choose the menu to change</legend>
			    <div class="row">
				<div class="col-md-6">
				<div class="form-group">
					<label class="col-md-3 control-label">Menu Title</label>
				    <div class="col-md-9">
					<input class="form-control" type="text" value="<?php echo $getmenunow[0]['menu'];?>" name="title" placeholder="Default input">
				    </div>
				</div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
					<label class="col-md-3 control-label">Menu Type</label>
				    <div class="col-md-9">
					<select class="form-control" name="type">
					    <?php foreach ($getMenu as $row) {?>
					    <option  <?php if($getmenunow[0]['menuType']==$row['menuType'] ) echo "selected"; ?> value="<?php echo $row['menuType'];?>"><?php echo $row['menuType'];?></option>
					<?php } ?>
					</select>
				    </div>
				</div>
			    </div>
			    </div>
			     <div class="row">
				<div class="col-md-6">
				<div class="form-group">
					<label class="col-md-3 control-label">Menu URL</label>
				    <div class="col-md-9">
					<input class="form-control" name="url" value="<?php echo $getmenunow[0]['menuLink'];?>" type="text" placeholder="Default input">
				    </div>
				</div>
				</div>
			    </div>
			
			
			
			<div class="col-md-offset-3 col-md-6">
			    <div class="form-group">
				<label class="col col-4"></label>
				<button class="btn btn-md btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
				<button class="btn btn-md btn-info " onclick=" form_reset();" id="clear_data" type="button"> Reset </button>
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


