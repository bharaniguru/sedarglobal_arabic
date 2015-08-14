	
	<div id="content" class="content">
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Sale</a></li>
		    <li><a href="javascript:;">Shipment Master</a></li>
		    <li><a href="javascript:;">View</a></li>
		</ol>
		<h1 class="page-header">View Master <small> You may view here...</small></h1>
		<div class="row">
		   <div class="col-md-12">
	    <div class="panel panel-inverse">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">View  Master</h4>
		</div>
		<div class="panel-body" id="form_validation">
		    		    
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url();?>SaleCtr/ShipmentMaster_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add </span></a>
		    </p>
		
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
                            <tr>
				
				<th>USER NAME</th>

                                <th>ROLE</th>

                                <th>HOME</th>
                                
                                <th>ABOUT US</th>
				
				<th>CONCEPT BRIEF</th>
				 
				<th>SUPPORT PROGRAM</th>
                                
                                <th>FRANCHISE SERVICE</th>
                                
                                <th>FRANCHISE TRAINING PROGRAM</th>
                                
                                <th>CONTACT US</th>
                                
                                
                                <th>Action</th>
                            </tr>
			</thead>
			<tbody>
                                
                                <tr>
				
				
				<td><?php //echo $row['SH_CODE'];?></td>

                                <td><?php //echo $row['SH_DESC'];?></td>
                                    
                                <td><?php //echo $row['SH_FROM_DT'];?></td>

                                <td><?php //echo $row['SH_UPTO_DT'];?></td>
				
				<td><?php //echo $row['SH_ACTIVE_YN'];?></td>
				
				<td><?php //echo $row['SH_LANG_CODE'];?></td>
                                
                                <td><?php //echo $row['SH_LANG_CODE'];?></td>
                                
                                <td><?php //echo $row['SH_LANG_CODE'];?></td>
                                
                                <td><?php //echo $row['SH_LANG_CODE'];?></td>
				
				    
				    <td>
                                       <a href="<?php echo base_url();?>SaleCtr/ShipmentMaster_Edit/<?php //echo $row['SH_COMP_CODE'];?>/<?php //echo $row['SH_CODE'];?>" class="btn btn-xs btn-primary" ><i class="fa  fa-edit" ></i>  </a>&nbsp;&nbsp;
                                       <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php //echo site_url('SaleCtr/ShipmentMaster_Delete/'.$row['SH_COMP_CODE'].'/'.$row['SH_CODE']);?>" id="delete_box"><i class="fa  fa-trash-o" ></i></a>
                                    </td>
                                 </tr>
                               
                              </tbody>
			</table>
		</div>
	    </div>
	</div>
    </div>
	</div>
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    </div>

</body>
</html>
<script>
$(document).ready(function() {
   var table = $("#data-table").DataTable({
       dom: 'TRC<"clear">lfrtip',
       responsive: true,
         stateSave: true,
       tableTools: {
        sSwfPath: "../assets/plugins/DataTables/swf/copy_csv_xls_pdf.swf"
       },
   });
   table.columns( [ 4, 5 ] ).visible( false, false );
    table.columns( [ 6 ] ).visible( true, true );
   table.columns.adjust().draw( false );
      });
</script>
<script>
$('#form_validation').on('click', '#delete_box', function(e) {
	e.preventDefault();
	var link = $(this).attr('href');
           bootbox.confirm("Are you sure you want to delete?", function(confirmed) {   
               if (confirmed) {
                     window.location.href = link;     
                }    
            });
	});
</script>

