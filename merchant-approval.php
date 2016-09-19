<!-- NAV TABS BEGIN -->
<ul class="nav nav-tabs" role="tablist">
    <li id="merchant-approval-nav" role="presentation" class="active"><a href="#merchant-approval" role="tab"><strong>Merchant Approval</strong></a></li>
</ul>
<!-- NAV TABS END -->    

<!-- TAB CONTENT BEGIN -->
<div class="tab-content"><!-- .tab-content -->

<!-- MERCHANT DETAILS BEGIN -->
<div role="tabpanel" class="tab-pane active" id="merchant-approval"><!-- .tab-pane #merchant-merchant-details -->

<form id="merchant-approval-form" class="form-horizontal" role="form"><br><!-- "#merchant-merchant-details-form" -->
        <input type="hidden" name="merchant_id" id="merchant_id" value="">
        <div class="form-group">    
            <label for="merchant_id_approval" class="col-sm-2 control-label">Merchant ID</label>
	        <div class="col-sm-6">
                <p class="form-control" id="merchant_id_approval">&nbsp;</p> 
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_name_approval" class="col-sm-2 control-label">Merchant Name</label>
            <div class="col-sm-6">
                <p class="form-control" id="merchant_name_approval">&nbsp;</p>
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_hq_address_approval" class="col-sm-2 control-label">HQ Address</label>
            <div class="col-sm-6">
	            <p class="form-control" id="merchant_hq_address_approval">&nbsp;</p>
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_icon_approval" class="col-sm-2 control-label">Merchant Icon</label>
            <div class="col-sm-6"> 
                <img id="merchant_icon_approval" src="">                
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_background_approval" class="col-sm-2 control-label">Merchant Background</label>
            <div class="col-sm-6"> 
                <img id="merchant_background_approval" src="" style="width: 200px; height: 300px;">                
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_total_branches_approval" class="col-sm-2 control-label">Total Number of Branches</label>
            <div class="col-sm-2">
                <p class="form-control" id="merchant_total_branches_approval">&nbsp;</p>
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_listing_references_approval" class="col-sm-2 control-label">Branches Listing Reference</label>
            <div class="col-sm-6">
                <p class="form-control" id="merchant_listing_references_approval">&nbsp;</p>
            </div>
        </div>   
        <div class="form-group">
            <label for="merchant_pic_name_approval" class="col-sm-2 control-label">PIC Name</label>
            <div class="col-sm-4">
                <p class="form-control" id="merchant_pic_name_approval">&nbsp;</p>
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_pic_email_approval" class="col-sm-2 control-label">PIC Email</label>
            <div class="col-sm-6">
                <p class="form-control" id="merchant_pic_email_approval">&nbsp;</p>
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_pic_phone_number_approval" class="col-sm-2 control-label">PIC Phone Number</label>
            <div class="col-sm-6">
                <p class="form-control" id="merchant_pic_phone_number_approval">&nbsp;</p>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" id="merchant-approval-submit" class="btn btn-primary">Approve</button>
        </div><!-- .modal-footer -->

</form><!-- "#merchant-merchant-details-form" -->

</div><!-- .tab-pane -->
<!-- MERCHANT DETAILS END -->
</div><!-- .tab-content -->
<!-- TAB CONTENT END -->

<script>
$('#merchant-approval-submit').click(function() {
    var approveurl = 'include/lib/approve.php?id=' + $('#merchant_id').val()  + '&route=merchant';
    $.ajax({
        url:approveurl,
        success: function() {
            alert("Your merchant has been approved.");
            $('#merchant-approval-modal').modal('hide');
            merchantTable.ajax.reload();
            }

    });
});
</script>
