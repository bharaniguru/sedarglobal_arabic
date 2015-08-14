    <div id="content" class="content">
      <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            
            <li><a href="javascript:;">Client</a></li>
            <li class="active">Client Overview</li>
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
                        <h4 class="panel-title">Client Overview </h4>
                    </div>
                    <div class="panel-body" id="form_validation">
                        <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('GlobalController/Sedaraccessories_Add'); ?>" class="form-horizontal form12">
                            <legend>Choose the Categories to change</legend>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="col-md-12">
                                       <h3 class="m-t-0">Accessories</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="AccessoriesName" id="FeedbackTitle"  class="form-control input-lg" value="" placeholder="Accessories" />
                                    </div>
                                </div>
                            </div>
                            <div class="pager form-group">
                                <div class="col-md-6 control-label">
                                    <input type="submit" class="btn btn-md btn-success m-r-5 m-b-5" name="Save" id="submit" value="Save" >
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