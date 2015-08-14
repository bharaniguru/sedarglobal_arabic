<?php
//print_r($getStory[0]);
//
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
		  <form action="<?php echo base_url('GlobalController/globalstateEdit/'.$statedit[0]['id']); ?>" class="form-horizontal"  id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                  <legend>Add GeoLocation as your wish</legend>
                    <div class="row">
                        
                         <div class="col-md-6">
                            <h5 class="m-t-0">State Name</h5>
                            <input class="form-control input-sm" name="stateName" type="text" value="<?php echo $statedit[0]['StateName']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
			 <div class="col-md-6">
                            <h5 class="m-t-0">State Code</h5>
                            <input class="form-control input-sm" name="stateCode" type="text" value="<?php echo $statedit[0]['StateCode']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
			  <div class="col-md-6">
                            <h5 class="m-t-0">Country Code</h5>
                            <input class="form-control input-sm" name="countryCode" type="text" value="<?php echo $statedit[0]['CountryCode']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>

		    </div>
		    <div class="row">
			
	<!--		 <div class="col-md-6">
                            <h5 class="m-t-0">Latitude</h5>
                            <input class="form-control input-sm" name="latitude" type="text" value="<?php echo $statedit[0]['latitude']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>
			 <div class="col-md-6">
                            <h5 class="m-t-0">Longitude</h5>
                            <input class="form-control input-sm" name="longitude" type="text" value="<?php echo $statedit[0]['longitude']?>" placeholder="TYPE YOUR OWN TITLE">
                          </div>-->
			
		    </div>
			<div class="pager form-group">
                             <div class="col-md-7 control-label">
                                <button  class="btn btn-success m-r-5 m-b-5" type="submit" name="update" >Update</button>
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