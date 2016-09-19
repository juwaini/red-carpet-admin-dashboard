<!-- NAV TABS BEGIN -->
<ul class="nav nav-tabs" role="tablist">
    <li id="merchant-edit-nav" role="presentation" class="active"><a href="#merchant-edit" role="tab"><strong>Merchant Edit</strong></a></li>
</ul>
<!-- NAV TABS END -->    

<!-- TAB CONTENT BEGIN -->
<div class="tab-content"><!-- .tab-content -->

<!-- MERCHANT DETAILS BEGIN -->
<div role="tabpanel" class="tab-pane active" id="merchant-edit"><!-- .tab-pane #merchant-merchant-details -->

<form id="merchant-edit-form" class="form-horizontal" role="form"><br><!-- "#merchant-merchant-details-form" -->
        <div class="form-group">    
            <label for="merchant_id_edit" class="col-sm-2 control-label">Merchant ID</label>
	        <div class="col-sm-6">
                <input type="text" class="form-control" name="merchant_id_edit" id="merchant_id_edit" value="" disabled> 
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_name_edit" class="col-sm-2 control-label">Merchant Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="merchant_name_edit" id="merchant_name_edit">
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_hq_address_edit" class="col-sm-2 control-label">HQ Address</label>
            <div class="col-sm-6">
	            <input type="text" class="form-control" name="merchant_hq_address_edit" id="merchant_hq_address_edit">
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_icon_edit" class="col-sm-2 control-label">Merchant Icon</label>
            <div class="col-sm-6"> 
                <div class="fileinput fileinput-exists" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                        <img id="merchant_icon_edit" src="#">
                    </div>
                <div>
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="merchant_icon_edit" id="merchant_icon_edit">
                </span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_background_edit" class="col-sm-2 control-label">Merchant Background</label>
            <div class="col-sm-6"> 
                <div class="fileinput fileinput-exists" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                        <img id="merchant_background_edit" src="#">
                    </div>
                <div>
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="merchant_background_edit" id="merchant_background_edit">
                </span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_total_branches_edit" class="col-sm-2 control-label">Total Number of Branches</label>
            <div class="col-sm-2">
                <input type="number" class="form-control" name="merchant_total_branches_edit" id="merchant_total_branches_edit">
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_listing_references_edit" class="col-sm-2 control-label">Branches Listing Reference</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="merchant_listing_references_edit" id="merchant_listing_references_edit">
            </div>
        </div>   
        <div class="form-group">
            <label for="merchant_pic_name_edit" class="col-sm-2 control-label">Person In Charge Name</label>
            <div class="col-sm-2">
                <select class="form-control" id="merchant_pic_title_edit" name="merchant_pic_title_edit">
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                </select>
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="merchant_pic_name_edit" id="merchant_pic_name_edit">
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_pic_email_edit" class="col-sm-2 control-label">PIC Email</label>
            <div class="col-sm-6">
                <input type="email"  class="form-control" name="merchant_pic_email_edit" id="merchant_pic_email_edit">
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_pic_phone_number_edit" class="col-sm-2 control-label">PIC Phone Number</label>
            <div class="col-sm-6">
                <input type="phone" class="form-control" name="merchant_pic_phone_number_edit" id="merchant_pic_phone_number_edit">
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" id="merchant-edit-cancel" class="btn btn-primary">Cancel</button>
            <button type="button" id="merchant-edit-submit" class="btn btn-primary">Submit Edit</button>
        </div><!-- .modal-footer -->

</form><!-- "#merchant-view-form" -->

</div><!-- .tab-pane -->
<!-- MERCHANT DETAILS END -->
</div><!-- .tab-content -->
<!-- TAB CONTENT END -->
<script>
$('#merchant-edit-submit').click(function(e) {
    
    var formData = new FormData($('#merchant-edit-form')[0]); 
    formData.append("operation", "edit");
    formData.append("merchant_status", "pending approval");
    formData.append("merchant_id", $("#merchant_id_edit").val());
    $.ajax({
        type: "POST",
        url: "merchant-submit.php",
        data: formData,
        success: function() {
            alert("Your merchant has been edited successfully.");
            $('#merchant-edit-modal').modal('hide');
            merchantTable.ajax.reload();
            },
        cache: false,
        contentType: false,
        processData: false
    });
});
</script>
