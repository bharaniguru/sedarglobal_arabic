
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Explore Products</a></li>
	<li class="active">Explore Products Edit</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header"><small> You may Edit details here...</small></h1>
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
		    <h4 class="panel-title">Explore Products </h4>
		</div>
		<div class="panel-body" id="">
		    <?php
		    foreach($productMultiImage as $row1)
		    $productMultiImage= $row1['productImage'];
		    $productMultiImage= $row1['productMultiImage'];
		    $productMultiImage= explode(",", $productMultiImage);
		    $length = count($productMultiImage);
		    
		    foreach($productsEdit as $row)
		    //$productsEdit= $row['productImagesTitle'];
		    //$productsEdit= explode(",", $productsEdit);
		    //$length = count($productsEdit);
		    ?>
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('GlobalController/Products_Edit/'.$row['id']); ?>" class="form-horizontal form12">
		    <legend>Edit The Content</legend>
		    <div class="row">
			<div class="col-md-7">
			    <!-- <div class="col-md-12">
			    <h4 class="m-t-0">Product Title</h4>
		    </div>
		    <div class="col-md-12">
		    <input type="text" name="bName" id="bName"  class="form-control input-lg" value="" placeholder="Products Title" />
		    </div>-->
		    <div class="col-md-12">
			<h4 class="m-t-0">Brand</h4>
		    </div>
		    <div class="col-md-12">
			<section class="col col-12">
			    <!--<input type="hidden" name="brandid" id="brandid">-->
			    <select name="brandId" id="brandId" class="form-control">
				<option selected="" disabled="">Select</option>
				<?php if (count($brandsView) > 0 )
							    {
					foreach ($brandsView as $brnd)
					{
				?>
				<option value="<?php echo $brnd['id']; ?>" <?php if($brnd["id"]==$row['brandId']) echo "selected"; ?> ><?php echo $brnd['name']; ?></option>
				 <?php } }?>
			    </select>
			</section>
		    </div>
		    <div class="col-md-12">
                                    <h4 class="m-t-0">Product Category</h4>
				 </div>
				<div class="col-md-12">
						    <section class="col col-12">
							<!--<input type="hidden" name="brandid" id="brandid">-->
							<select name="productCat" id="productCat" class="form-control">
							    <option selected="" disabled="">Select</option>
							    <?php if (count($productCatView) > 0 )
							    {
								foreach ($productCatView as $procat)
								{
								    ?>
							    <option value="<?php echo $procat['id']; ?>" <?php if($procat["id"]==$row['productCategory']) echo "selected"; ?>><?php echo $procat['name']; ?></option>
							    <?php } }?>
							</select>
						    </section>
						</div>
				<div class="col-md-12">
                                    <h4 class="m-t-0">Product Material</h4>
				 </div>
				<div class="col-md-12">
						    <section class="col col-12">
							<!--<input type="hidden" name="brandid" id="brandid">-->
							<select name="productMat" id="productMat" class="form-control">
							    <option selected="" disabled="">Select</option>
							    <?php if (count($Material) > 0 )
							    {
								foreach ($Material as $mat)
								{
									    ?>
							    <option value="<?php echo $mat['id']; ?>" <?php if($mat["id"]==$row['productMaterial']) echo "selected"; ?>><?php echo $mat['materialName']; ?></option>
									   <?php } }?>
							</select>
						    </section>
						</div>
				<div class="col-md-12">
                                    <h4 class="m-t-0">Product Accesories</h4>
				 </div>
				<div class="col-md-12">
						    <section class="col col-12">
							<!--<input type="hidden" name="brandid" id="brandid">-->
							<select name="productAcc" id="productAcc" class="form-control">
							    <option selected="" disabled="">Select</option>
							    <?php if (count($Accessories) > 0 )
							    {
								foreach ($Accessories as $access)
								{
									    ?>
							     <option value="<?php echo $access['id']; ?>" <?php if($access["id"]==$row['productAccessories']) echo "selected"; ?>><?php echo $access['AccessoriesName']; ?></option>
									   <?php } }?>
							</select>
						    </section>
						</div>
				  <div class="col-md-12">
                                    <h4 class="m-t-0">Motorzation</h4>
				 </div>
				
				 <div class="col-md-12">
				    <section class="col col-12">
					<b>No</b>
					<input name="motor" data-render="switchery" value="Y" type="checkbox" onchange="if ($(this).prop('checked')) {$('#MotorOn').val('Y'); alert('Y');}else{$('#MotorOn').val('N'); alert('N');}" class="js-switch" checked/>
					<input type="hidden" name="MotorOn" id="MotorOn" value="">
					<b>Yes</b>
				    </section>
				  </div>
				<div class="col-md-12">
                                    <h4 class="m-t-0">Product Name</h4>
				 </div>
				<div class="col-md-12">
				    <input type="text" name="productName" id="productName"  class="form-control input-md" value="<?php echo $row['productName']; ?>" placeholder="Product Name" />
				</div>
				<!--<div class="col-md-12">
                                    <h4 class="m-t-0">Product Link</h4>
				 </div>
				<div class="col-md-12">
				    <input type="text" name="productLink" id="productLink"  class="form-control input-md" value="<?php echo $row['productLink']; ?>" placeholder="Product Link" />
				</div>
			 -->
				
			    <div class="col-md-12">
				 <p></p>
			    <h4 class="m-t-0">Description</h4>
			    </div>
				<div class="col-md-12" style="padding:10px">
				<textarea id="productDesc" name="productDesc" placeholder="Enter your content here" cols="25" rows="5" class="ckeditor textarea form-control  textarea_middle required"><?php echo $row['productDescription']; ?> </textarea>
				</div>
		    </div>
		     <div class="col-md-12">
			<h4 class="m-t-0">Product Image</h4>
			 <div class="row AdjustPadding" id="image2" style="padding-bottom:20px;" >
                                <div class="col-md-12" id="gallery1">
                                    <div class="col-md-4 col-sm-4 col-xs-12 ImageViews AdjustPadding" style="padding-bottom:20px;"  >
                                        <img src="<?php echo site_url('uploads/'.$row1['productImage']);?>" class="col-md-12 previewsimage " id="dummy2" style="height: 185px; width: 200px;" >
                                        <input type="file" id="previews" name="imagename" class="col-md-12 "onchange="attachmentss(this);" >
                                             <input type="hidden" name="getimage" value="<?php echo $row1['productImage'];?>">
					    <!--<div class="input-group" style="padding:10px;">
                                            <span class="input-group-btn">
                                            <span class="btn btn-primary btn-file">
                                            Browse<input type="file" id="preview" name="image[]" class="col-md-12 "onchange="attachment(this);" >
                                            </span>
                                    </span>
                                    <input type="text" id="" name="userfile1[]" value="" placeholder="" class="form-control" readonly>
                                        </div>-->
                            </div>
                        </div>
                    </div>
		    </div>
		    <div class="col-md-12">
			<h4 class="m-t-0">Product Multi Image</h4>
			 <div class="row AdjustPadding" id="image1" style="padding-bottom:20px;" >
				<div class="page-title">
				    <button type="button" class="pull-right btn btn-primary" onclick="addImage()"><i class="fa  fa-plus"></i></button>
				</div>
				<div class="col-md-12" id="gallery">
                                     <?php
                                        for($i =0; $i <$length; $i++)
                                        {
                                     ?>
				    <div class=" col-md-4 col-sm-4 col-xs-12 ImageView AdjustPadding" style="padding-bottom:20px;"  >
					<img src="<?php echo site_url('uploads/'.$productMultiImage[$i]);?>" class="col-md-12 previewimage " id="dummy1" style="height: 185px;" >
					<input type="hidden" name="oldimage[]" value="<?php echo $productMultiImage[$i]?>">
                                       <input type="file" id="preview" name="image[]" class="col-md-12 "onchange="attachment(this);" >
				     <!--<div class="input-group" style="padding:10px;">
				<span class="input-group-btn">
				<span class="btn btn-primary btn-file">
				Browse<input type="file" id="preview" name="image[]" class="col-md-12 "onchange="attachment(this);" >
				 <input type="hidden" name="oldimage[]" value="">
				</span>
				</span>
				<input type="text" id="" name="userfile1[]" value="" placeholder="" class="form-control" readonly>
			       </div>-->
				    </div><?php } ?>
				    </div>
			 </div>
		    </div>
		    </div>
			   
			<div class="pager form-group">
                             <div class="col-md-6 control-label">
				<button class="btn btn-md btn-danger m-r-5 m-b-5" onclick="window.history.back();" type="button"> Cancel </button>
				<input type="submit" class="btn btn-md btn-success m-r-5 m-b-5" name="Update" id="submit" value="Update" >
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
    function attachmentss($this) {
  
var oFReader = new FileReader();
oFReader.readAsDataURL($this.files[0]);
oFReader.onload = function (oFREvent) {
    
$($this).parents('.ImageViews').find('img').attr("src",  oFREvent.target.result);

};
};
function attachmentsss()
    {
	
	$(".removeButton").on('click',function(){
	   
	    var $row   = $(this).parents('.ImageViews');
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
    $('<div class="col-md-4 col-sm-4 col-xs-12 ImageView " style="padding-bottom:20px;"  ><img src="<?php echo site_url('assets/img/no-image.png');?>" class="col-md-12 previewimage" id="dummy1" style="height: 185px;" ><input type="file" id="preview" name="image[]" class="col-md-12 "onchange="attachment(this);" ><div class="col-md-12 " ><a  onclick="" class=" pull-right btn btn-danger removeButton" data-template="textbox"><i class="fa fa-trash"></i></a></div>	').appendTo("#gallery");
	    //$('<div class="col-md-6" ><img src="<?php echo site_url('assets/images/no.png');?>" class="col-md-12 previewimage" id="dummy1" style="height: 250px;" >	<input type="file" id="preview" name="image" onchange="attachment();" >	 <button type="button" onclick="" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></div>').apppendTo("#gallery");
	    attachments();
	    }
</script>
<script>
        //var Switchery = require('switchery');
    
    var elem = document.querySelector('.js-switch');
    var init = new Switchery(elem,{ color: '#24D6FA'});
</script>

 