<!-- NAV TABS BEGIN -->
<ul class="nav nav-tabs" role="tablist">
    <li id="promo-voucher-details-nav" role="presentation" class="active disabled"><a href="#promo-voucher-details" role="tab"><strong>Voucher Details</strong></a></li>
    <li id="promo-inventory-details-nav" role="presentation" class="disabled"><a href="#promo-inventory-details" role="tab"><strong>Inventory Details</strong></a></li>
    <li id="promo-merchant-details-nav" role="presentation" class="disabled"><a href="#promo-merchant-details" role="tab"><strong>Merchant Details</strong></a></li>
    <li id="promo-preview-nav" role="presentation" class="disabled"><a href="#promo-details" role="tab"><strong>Preview</strong></a></li>
</ul>
<!-- NAV TABS END -->    

<!-- TAB CONTENT BEGIN -->
<div class="tab-content"><!-- .tab-content -->

<!-- VOUCHER DETAILS BEGIN -->
<div role="tabpanel" class="tab-pane active" id="promo-voucher-details"><!-- .tab-pane #promo-voucher-details -->

<form id="promo-voucher-details-form" class="form-horizontal" role="form"><br><!-- "#promo-voucher-details-form" -->
        <div class="form-group">    
            <label for="promo_id" class="col-sm-2 control-label">Promo ID</label>
	        <div class="col-sm-6">
                <input type="text" name="promo_id" id="promo_id" value="" class="form-control" disabled> 
            </div>
        </div>
        <div class="form-group">
            <label for="voucher_name" class="col-sm-2 control-label">Voucher Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="voucher_name" id="voucher_name" placeholder="Voucher Name">
            </div>
        </div>
        <div class="form-group">
            <label for="voucher_description_mobile" class="col-sm-2 control-label">Voucher Description (Mobile)</label>
            <div class="col-sm-6">
	            <textarea class="form-control" name="voucher_description_mobile" id="voucher_description_mobile" rows=3></textarea>
            </div>
        </div>
         <div class="form-group">
            <label for="voucher_description_desktop" class="col-sm-2 control-label">Voucher Description (Desktop)</label>
            <div class="col-sm-6">
                <textarea class="form-control" name="voucher_description_desktop" id="voucher_description_desktop" rows=3></textarea>
            </div>
        </div>
       <div class="form-group">
            <label for="campaign_name" class="col-sm-2 control-label">Campaign Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="campaign_name" id="campaign_name" placeholder="Campaign Name">
            </div>
        </div>
        <div class="form-group">
            <label for="voucher_image1" class="col-sm-2 control-label">Voucher Image</label>
            <div class="col-sm-2"> 
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    </div>
                <div>
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="voucher_image1" id="voucher_image1">
                </span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="voucher_image2" class="col-sm-2 control-label">&nbsp;</label>
            <div class="col-sm-2"> 
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    </div>
                <div>
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="voucher_image2" id="voucher_image2">
                </span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="voucher_image3" class="col-sm-2 control-label">&nbsp;</label>
            <div class="col-sm-2"> 
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    </div>
                <div>
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="voucher_image3" id="voucher_image3">
                </span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="voucher_image4" class="col-sm-2 control-label">&nbsp;</label>
            <div class="col-sm-2"> 
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    </div>
                <div>
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="voucher_image4" id="voucher_image4">
                </span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="voucher_group" class="col-sm-2 control-label">Voucher's Group</label>
            <div class="col-sm-4">
                <select name="voucher_group" id="voucher_group" class="form-control">
                    <option value="">Select Voucher's Group</option>
                    <option value="Freebies">Freebies</option>
                    <option value="Special Value">Special Value</option>
                    <option value="Normal Price">Normal Price</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="voucher_category" class="col-sm-2 control-label">Voucher's Category</label>
            <div id="voucher_category_div" class="col-sm-4">
            </div>
        </div>   
        <div class="form-group">
            <label for="voucher_value" class="col-sm-2 control-label">Voucher's Value</label>
            <div class="col-sm-2">
                <input type="number" class="form-control" name="voucher_value" id="voucher_value">
            </div>
            <div class="col-sm-1 control-label">
                <label>Points</label>
            </div>
        </div>
        <div class="form-group">
            <label for="terms_and_conditions" class="col-sm-2 control-label">Terms &amp; Conditions</label>
            <div class="col-sm-6">
                <textarea type="text" class="form-control" name="terms_and_conditions" id="terms_and_conditions" rows=3></textarea>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" data-toggle="modal" href="promo-inventory-details-modal" id="promo-voucher-details-next" class="btn btn-primary">Next</button>
        </div><!-- .modal-footer -->

</form><!-- "#promo-voucher-details-form" -->
</div><!-- .tab-pane #promo-voucher-details-->
<script>
$('#promo-voucher-details-next').click(function(){
    $('#promo-create-voucher-modal').scrollTop(0);
    $('#promo-voucher-details-nav, #promo-voucher-details').removeClass('active');
    $('#promo-inventory-details-nav, #promo-inventory-details').addClass('active');    
});
</script>
<!-- VOUCHER DETAILS END -->

<!-- INVENTORY DETAILS BEGIN -->
<div role="tabpanel" class="tab-pane" id="promo-inventory-details"><!-- .tab-pane #promo-inventory-details -->

<form id="promo-inventory-details-form" class="form-horizontal" role="form"><br><!-- "#promo-inventory-details-form" -->
        <div class="form-group">
            <label for="voucher_unique" class="col-sm-2 control-label">Is Voucher Unique?</label>
            <div class="col-sm-10">
               <label class="radio-inline">
                    <input type="radio" id="voucher_unique_yes" name="voucher_unique" value="yes">Yes
               </label>
               <label class="radio-inline">
                    <input type="radio" id="voucher_unique_no" name="voucher_unique" value="no">No
                </label> 
            </div>
        </div>
        <div id="voucher_quantity_div" class="form-group hide">    
            <label for="voucher_quantity" class="col-sm-2 control-label">Voucher Quantity</label>
	        <div class="col-sm-2">
                <input type="number" name="voucher_quantity" id="voucher_quantity" class="form-control"> 
            </div>
            <div class="col-sm-2">
                <label>Units</label>
            </div>
        </div>
        <div id="quantity_reminder_div" class="form-group hide">
            <label for="quantity_reminder" class="col-sm-2 control-label">Quantity Reminder</label>
            <div class="col-sm-2">
                <select name="quantity_reminder" id="quantity_reminder" class="form-control">
                    <option value=0.5>50%</option>
                    <option value=0.3>30%</option>
                    <option value=0.1>10%</option>
                </select>
            </div>
            <div class="col-sm-3">
                <label>Before "Out of Stock"</label>
            </div>
        </div>
        <div class="form-group">
            <label for="voucher_expiry_date" class="col-sm-2 control-label">Voucher Expiry Date</label>
            <div class="col-sm-3">
                <input type="date" id="voucher_expiry_date" name="voucher_expiry_date" class="form-control"></input>
            </div>
        </div>
        <div class="form-group">
            <label for="expiry_date_reminder" class="col-sm-2 control-label">Expiry Date Reminder</label>
            <div class="col-sm-2">
                <select name="expiry_date_reminder" id="expiry_date_reminder" class="form-control">
                    <option value=10>10</option>
                    <option value=7>7</option>
                    <option value=5>5</option>
                    <option value=3>3</option>
                </select>
            </div>
            <div class="col-sm-3">
                <label>Days Before "Expired"</label>
            </div>
        </div>
        <div class="form-group">
            <label for="types_of_delivery" class="col-sm-2 control-label">Types of Delivery</label>
            <div class="col-sm-3">
                 <select name="types_of_delivery" id="types_of_delivery" class="form-control">
                    <option value="">Select Types of Delivery</option>
                    <option value="qrcode">QR Code</option>
                    <option value="barcode">Bar Code</option>
                    <option value="softpin">Soft Pin</option>
                    <option value="email">Email</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="voucher_design" class="col-sm-2 control-label">Voucher's Design</label>
            <div class="col-sm-6"> 
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    </div>
                <div>
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="voucher_design" id="voucher_design">
                </span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="voucher_publish_date" class="col-sm-2 control-label">Set Publish Date</label>
            <div class="col-sm-3">                
                <input class="form-control" name="voucher_publish_date" id="voucher_publish_date" type="date">
            </div>
        </div>   
        
        <div class="modal-footer">
            <button type="button" data-toggle="modal" id="promo-inventory-details-back" class="btn btn-primary">Back</button>
            <button type="button" data-toggle="modal" id="promo-inventory-details-next" class="btn btn-primary">Next</button>
        </div><!-- .modal-footer -->

</form><!-- "#promo-voucher-details-form" -->
</div><!-- .tab-pane #promo-voucher-details-->
<script>
$('#voucher_unique_yes').on('click', function(){
    $('#voucher_quantity_div, #quantity_reminder_div').removeClass('hide');
});

$('#voucher_unique_no').on('click', function(){
    $('#voucher_quantity_div, #quantity_reminder_div').addClass('hide');
});

$('#promo-inventory-details-back').click(function(){
    $('#promo-create-voucher-modal').scrollTop(0);
    $('#promo-inventory-details-nav, #promo-inventory-details').removeClass('active');
    $('#promo-voucher-details-nav, #promo-voucher-details').addClass('active');    
});

$('#promo-inventory-details-next').click(function(){
    $('#promo-create-voucher-modal').scrollTop(0);
    $('#promo-inventory-details-nav, #promo-inventory-details').removeClass('active');
    $('#promo-merchant-details-nav, #promo-merchant-details').addClass('active');    
});
</script>
<!-- INVENTORY DETAILS END -->

<!-- MERCHANT DETAILS BEGIN -->
<div role="tabpanel" class="tab-pane" id="promo-merchant-details"><!-- .tab-pane #promo-merchant-details -->

<form id="promo-merchant-details-form" class="form-horizontal" role="form"><br><!-- "#promo-merchant-details-form" -->

        <div class="form-group">    
            <label for="promo_merchant_name" class="col-sm-2 control-label">Merchant Name</label>
	        <div id="promo_merchant_name_div" class="col-sm-4">
            </div>
        </div>
        <div class="form-group">
            <label for="participating_outlets" class="col-sm-2 control-label">Participating Outlets</label>
            <div class="col-sm-10">
               <label class="radio-inline">
                    <input type="radio" id="selecting_outlets" name="selecting_outlets" value="selected">Selected Outlets
                </label>
                 <label class="radio-inline">
                    <input type="radio" id="selecting_outlets" name="selecting_outlets" value="all">All Outlets
                </label> 
                <label class="radio-inline">
                    <input type="radio" id="selecting_outlets" name="selecting_outlets" value="except">All Outlets Except...
                </label>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" data-toggle="modal" id="promo-merchant-details-back" class="btn btn-primary">Back</button>
            <button type="button" data-toggle="modal" id="promo-merchant-details-next" class="btn btn-primary">Next</button>
        </div><!-- .modal-footer -->

</form><!-- "#promo-voucher-details-form" -->
</div><!-- .tab-pane #promo-voucher-details-->
<script>
$('#promo-merchant-details-back').click(function(){
    $('#promo-create-voucher-modal').scrollTop(0);
    $('#promo-merchant-details-nav, #promo-merchant-details').removeClass('active');
    $('#promo-inventory-details-nav, #promo-inventory-details').addClass('active');
});

$('#promo-merchant-details-next').click(function(){
    $('#promo-create-voucher-modal').scrollTop(0);
    $('#promo-merchant-details-nav, #promo-merchant-details').removeClass('active');
    $('#promo-preview-nav, #promo-preview').addClass('active');

    var designPreview = document.getElementById('voucher_design_preview');
    var designFile = document.getElementById('voucher_design').files[0];
    var designReader  = new FileReader();

    designReader.onloadend = function () {        
        designPreview.src = designReader.result;}

    if (designFile) {
        designReader.readAsDataURL(designFile);} 
    else {
        designPreview.src = "";}

    var url = 'include/lib/get-merchant-data.php?name=' + $('#promo_merchant_name').val();
    $.get(url, function(data) {
        var merchant_data = JSON.parse(data);
        $('#merchant_code_preview').text(merchant_data.merchant_id);
        $('#promo_merchant_listing_references_preview').text(merchant_data.merchant_listing_references);
    });

    $('#promo_id_preview').text($('#promo_id').val());
    $('#merchant_code_preview').text($('#merchant_code').val());
    $('#voucher_name_preview').text($('#voucher_name').val());
    $('#promo_merchant_name_preview').text($('#promo_merchant_name').val());
    $('#voucher_description_desktop_preview').text($('#voucher_description_desktop').val());
    $('#voucher_outlet_flag_preview').text($('input[name="selecting_outlets"]:checked').val());
    $('#voucher_group_preview').text($('#voucher_group').val());
    $('#voucher_outlet_listing_preview').text($('#voucher_outlet_listing').val());
    $('#voucher_category_preview').text($('#voucher_category').val());
    $('#voucher_value_preview').text($('#voucher_value').val());

    if($('#voucher_unique_yes').is(':checked'))
        $('#voucher_quantity_preview').text($('#voucher_quantity').val());
    
    if($('#voucher_quantity_no').is(':checked'))
        $('#voucher_quantity_preview').text("Unlimited");

    $('#voucher_expiry_date_preview').text($('#voucher_expiry_date').val());
    $('#terms_and_conditions_preview').text($('#terms_and_conditions').val());
    $('#types_of_delivery_preview').text($('#types_of_delivery').val());
    $('#voucher_publish_date_preview').text($('#voucher_publish_date').val());
});
</script>
<!-- MERCHANT DETAILS END -->

<!-- PREVIEW BEGIN -->
<div role="tabpanel" class="tab-pane" id="promo-preview"><!-- .tab-pane #promo-preview -->

<form id="promo-preview-form" class="form-horizontal" role="form"><br><!-- "#promo-preview-form" -->
        <div class="form-group">    
            <label for="voucher_design_preview" class="col-sm-2 control-label">Voucher Design</label>
    	    <div class="col-sm-6">
                <img id="voucher_design_preview" src="#" style="width: 150px; height: 150px;">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label"><u>VOUCHER SUMMARY</u></label>
            <label for="" class="col-sm-2 control-label">&nbsp;</label>
            <label for="" class="col-sm-3 control-label"><u>MERCHANT SUMMARY</u></label>
            <label for="" class="col-sm-2 control-label">&nbsp;</label>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Promo ID:</label>
            <p class="col-sm-3" id="promo_id_preview">&nbsp;</p>
            <label for="" class="col-sm-2 control-label">Merchant Code:</label>
            <p class="col-sm-3" id="merchant_code_preview">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Title:</label>
            <p class="col-sm-3" id="voucher_name_preview">&nbsp;</p>
            <label for="" class="col-sm-2 control-label">Merchant Name:</label>
            <p class="col-sm-3" id="promo_merchant_name_preview">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description:</label>
            <p class="col-sm-3" id="voucher_description_desktop_preview">&nbsp;</p>
            <label for="" class="col-sm-2 control-label">Participating Outlets:</label>
            <p class="col-sm-3" id="voucher_outlet_flag_preview">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Group:</label>
            <p class="col-sm-3" id="voucher_group_preview">&nbsp;</p>
            <label for="" class="col-sm-2 control-label">Outlets Listing:</label>
            <p class="col-sm-3" id="promo_merchant_listing_references_preview">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Category:</label>
            <p class="col-sm-3" id="voucher_category_preview">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Value Price:</label>
            <p class="col-sm-3" id="voucher_value_preview">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Quantity:</label>
            <p class="col-sm-3" id="voucher_quantity_preview">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Expiry Date:</label>
            <p class="col-sm-3" id="voucher_expiry_date_preview">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Terms &amp; Conditions:</label>
            <p class="col-sm-3" id="terms_and_conditions_preview">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Types of Delivery:</label>
            <p class="col-sm-3" id="types_of_delivery_preview">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Requested Publish Date:</label>
            <p class="col-sm-3" id="voucher_publish_date_preview">&nbsp;</p>
        </div>

        <div class="modal-footer">
            <button type="button" data-toggle="modal" id="promo-preview-back" class="btn btn-primary">Back</button>
            <button type="button" data-toggle="modal" id="promo-preview-submit" class="btn btn-primary">Submit for Approval</button>
        </div><!-- .modal-footer -->

</form><!-- "#promo-voucher-details-form" -->
</div><!-- .tab-pane #promo-preview -->
<script>
$('#promo-preview-back').click(function(){
    $('#promo-create-voucher-modal').scrollTop(0);
    $('#promo-merchant-details-nav, #promo-merchant-details').addClass('active');
    $('#promo-preview-nav, #promo-preview').removeClass('active');
   
});

$('#promo-preview-submit').click(function(event){
    var formData = new FormData(); 
    formData.append("promo_status", "pending approval");
    formData.append("promo_id", $("#promo_id").val());
    formData.append("voucher_name", $("#voucher_name").val());
    formData.append("voucher_description_mobile", $("#voucher_description_mobile").val());
    formData.append("voucher_description_desktop", $("#voucher_description_desktop").val());
    formData.append("campaign_name", $("#campaign_name").val());

    if($('#voucher_image1')[0].files[0]){
        formData.append("voucher_image1", $('#voucher_image1')[0].files[0]);}
    if($('#voucher_image2')[0].files[0]){
        formData.append("voucher_image2", $('#voucher_image2')[0].files[0]);}
    if($('#voucher_image3')[0].files[0]){
        formData.append("voucher_image3", $('#voucher_image3')[0].files[0]);}       
    if($('#voucher_image4')[0].files[0]){
        formData.append("voucher_image4", $('#voucher_image4')[0].files[0]);}   

    formData.append("voucher_group", $('#voucher_group').val());    
    formData.append("voucher_category", $('#voucher_category').val());
    formData.append("voucher_value", $('#voucher_value').val());

    if($('#voucher_unique_yes').is(':checked'))
    {
        formData.append("voucher_unique", "yes");
        formData.append("voucher_quantity", $('#voucher_quantity').val());
    }

    if($('#voucher_unique_no').is(':checked'))
    {
        formData.append("voucher_unique", "no");
    }

    formData.append("terms_and_conditions", $('#terms_and_conditions').val());
    formData.append("voucher_expiry_date", $('#voucher_expiry_date').val());
    formData.append("quantity_reminder", $('#quantity_reminder').val());
    formData.append("expiry_date_reminder", $('#expiry_date_reminder').val());
    formData.append("types_of_delivery", $('#types_of_delivery').val());

    if($('#voucher_design')[0].files[0]){
        formData.append("voucher_design", $('#voucher_design')[0].files[0]);}
    
    formData.append("voucher_publish_date", $('#voucher_publish_date').val());
    formData.append("promo_merchant_name", $('#promo_merchant_name').val());
    formData.append("selecting_outlets", $('input[name="selecting_outlets"]:checked').val());

    $.ajax({
        type: "POST",
        url: "promo-submit.php",
        data: formData,
        success: function() {
                alert("Your voucher has been created successfully.");
                $('#promo-create-voucher-modal').modal('hide');
                promoTable.ajax.reload();
                reportsTable.ajax.reload();
            },
        cache: false,
        contentType: false,
        processData: false
    });

});
</script><!-- PREVIEW END -->

</div><!-- .tab-content -->
<!-- TAB CONTENT END -->
