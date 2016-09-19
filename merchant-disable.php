<!-- NAV TABS BEGIN -->
<ul class="nav nav-tabs" role="tablist">
    <li id="merchant-disable-nav" role="presentation" class="active"><a href="#merchant-disable" role="tab"><strong>Merchant Disable</strong></a></li>
</ul>
<!-- NAV TABS END -->    

<!-- TAB CONTENT BEGIN -->
<div class="tab-content"><!-- .tab-content -->

<!-- MERCHANT DETAILS BEGIN -->
<div role="tabpanel" class="tab-pane active" id="merchant-disable"><!-- .tab-pane #merchant-merchant-details -->

<form id="merchant-disable-form" class="form-horizontal" role="form"><br><!-- "#merchant-merchant-details-form" -->
        <input type="hidden" name="merchant_id" id="merchant_id" value="">
        <div class="form-group">    
            <label for="merchant_id_disable" class="col-sm-2 control-label">Merchant ID</label>
	        <div class="col-sm-6">
                <p class="form-control" id="merchant_id_disable">&nbsp;</p> 
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_name_approval" class="col-sm-2 control-label">Merchant Name</label>
            <div class="col-sm-6">
                <p class="form-control" id="merchant_name_disable">&nbsp;</p>
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_hq_address_view" class="col-sm-2 control-label">HQ Address</label>
            <div class="col-sm-6">
	            <p class="form-control" id="merchant_hq_address_disable">&nbsp;</p>
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_icon_view" class="col-sm-2 control-label">Merchant Icon</label>
            <div class="col-sm-6"> 
                <img id="merchant_icon_disable" src="">                
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_background_view" class="col-sm-2 control-label">Merchant Background</label>
            <div class="col-sm-6"> 
                <img id="merchant_background_disable" src="" style="width: 200px; height: 300px;">                
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_total_branches_view" class="col-sm-2 control-label">Total Number of Branches</label>
            <div class="col-sm-2">
                <p class="form-control" id="merchant_total_branches_disable">&nbsp;</p>
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_listing_references_view" class="col-sm-2 control-label">Branches Listing Reference</label>
            <div class="col-sm-6">
                <p class="form-control" id="merchant_listing_references_disable">&nbsp;</p>
            </div>
        </div>   
        <div class="form-group">
            <label for="merchant_pic_name_view" class="col-sm-2 control-label">PIC Name</label>
            <div class="col-sm-6">
                <p class="form-control" id="merchant_pic_name_disable">&nbsp;</p>
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_pic_email_view" class="col-sm-2 control-label">PIC Email</label>
            <div class="col-sm-6">
                <p class="form-control" id="merchant_pic_email_disable">&nbsp;</p>
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_pic_phone_number_view" class="col-sm-2 control-label">PIC Phone Number</label>
            <div class="col-sm-6">
                <p class="form-control" id="merchant_pic_phone_number_disable">&nbsp;</p>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" id="merchant-disable-submit" class="btn btn-danger">Disable</button>
        </div><!-- .modal-footer -->

</form><!-- "#merchant-view-form" -->

</div><!-- .tab-pane -->
<!-- MERCHANT DETAILS END -->
</div><!-- .tab-content -->
<!-- TAB CONTENT END -->

<script>
$('#merchant-disable-submit').click(function(){
    var answer = confirm("Are you sure that you want to disable this merchant?");
    if(answer)
    {
        var disableurl = 'include/lib/disable.php?id=' + $('#merchant_id_disable').text()  + '&route=merchant';
        $.ajax({
            url:disableurl,
            success: function() {
                alert("Your merchant has been disabled.");
                $('#merchant-disable-modal').modal('hide');
                merchantTable.ajax.reload();
                }
        });
    }
});
</script>
