    <!-- begin #content -->
    <div id="content" class="content">
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
	    <li><a href="javascript:;">Client</a></li>
	   
	    <li class="active">Client Images</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">View<small> You may View Details here...</small></h1>
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
			<p>
			    <a class="btn btn-primary btn-sm " href="<?php echo site_url('GlobalController/Sedarmaterial_Add')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add </span></a>
			     
			</p>
			<div class="table-responsive" style="border: none">
			    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
				<thead>
				    <tr>
					<th>Material</th>
					<th>Action</th>
				    </tr>
				</thead>
				<tbody>
				     <?php
				    foreach($Material as $row)
							{
						    ?>
				    <tr class="even gradeC">
					<td><?php echo $row['materialName']; ?></td>					    
					<td>
					<a href="<?php echo site_url('GlobalController/Sedarmaterial_Edit/'.$row['id'])?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> </a>
					<a href="<?php echo site_url('GlobalController/Sedarmaterial_Delete/'.$row['id'])?>" class="btn btn-xs btn-danger" id="delete_box"><i class="fa  fa-trash-o"></i> </a>
					</td>
				    </tr>
				<?php }?>
				</tbody>
			    </table>
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
	$('#form_validation').on('click', '#delete_box', function(e) {
	    e.preventDefault();
	    //alert();
	    var link = $(this).attr('href');
	    bootbox.confirm("Are you sure you want to delete?", function(confirmed) {   
		if (confirmed) {
		      window.location.href = link;     
		}    
	    });
	 });
    </script>
