

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
		    <h4 class="panel-title">View</h4>
		</div>
		<div class="panel-body" id="form_validation">
	<form action="<?php echo base_url('GlobalController/Contact'); ?>" class="form-horizontal"  id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                    
                
                    <div class="row">
                         <div class="col-md-12">
			    <legend>Choose the Title to change</legend>
                         <div class="col-md-10">
			     <h4 class="m-t-0">Title Heading</h4>
                            <input class="form-control input-lg" id="concept_brief_title" name="Stores_Title" type="text" placeholder="TYPE YOUR OWN TITLE" value="">
                          </div>
                         
                         <div class="col-md-10">
			     <h4 class="m-t-0">Sub-Title </h4>
                            <input class="form-control input-md" id="" name="Contact_Title" type="text" placeholder="TYPE YOUR OWN TITLE" value="">
                          </div>
			</div>
			 
                    </div>
                    </div>
		      
		    
		      
		        <div class="pager form-group">
                             <div class="col-md-6 control-label">
				
                                 <input type="submit" class="btn btn-success  m-r-5 m-b-5" name="proceed" id="" value="Save">
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


