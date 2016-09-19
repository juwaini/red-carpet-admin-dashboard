<!-- NAV TABS BEGIN -->
<ul class="nav nav-tabs" role="tablist">
    <li id="promo-approval-nav" role="presentation" class="active disabled"><a href="#promo-approval" role="tab"><strong>Promo - Approval</strong></a></li>
</ul>
<!-- NAV TABS END -->    

<!-- TAB CONTENT BEGIN -->
<div class="tab-content"><!-- .tab-content -->

<!-- APPROVAL BEGIN -->
<div role="tabpanel" class="tab-pane active" id="promo-approval"><!-- .tab-pane #promo-approval -->

<form id="promo-approval-form" class="form-horizontal" role="form"><br><!-- "#promo-approval-form" -->
        <input type="hidden" name="promo_id" id="promo_id" value="">
        <div class="form-group">    
            <label for="voucher_design_approval" class="col-sm-2 control-label">Voucher Design:</label>
            <img class="col-sm-6 control-label" id="voucher_design_approval" src="#">
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label"><u>VOUCHER SUMMARY</u></label>
            <label for="" class="col-sm-2 control-label">&nbsp;</label>
            <label for="" class="col-sm-3 control-label"><u>MERCHANT SUMMARY</u></label>
            <label for="" class="col-sm-2 control-label">&nbsp;</label>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Promo ID:</label>
            <p class="col-sm-3" id="promo_id_approval">&nbsp;</p>
            <label for="" class="col-sm-2 control-label">Merchant Code:</label>
            <p class="col-sm-3" id="merchant_code_approval">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Title:</label>
            <p class="col-sm-3" id="voucher_name_approval">&nbsp;</p>
            <label for="" class="col-sm-2 control-label">Merchant Name:</label>
            <p class="col-sm-3" id="promo_merchant_name_approval">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description:</label>
            <p class="col-sm-3" id="voucher_description_desktop_approval">&nbsp;</p>
            <label for="" class="col-sm-2 control-label">Participating Outlets:</label>
            <p class="col-sm-3" id="selecting_outlets_approval">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Group:</label>
            <p class="col-sm-3" id="voucher_group_approval">&nbsp;</p>
            <label for="" class="col-sm-2 control-label">Outlets Listing:</label>
            <p class="col-sm-3" id="merchant_outlet_listing_approval">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Category:</label>
            <p class="col-sm-3" id="voucher_category_approval">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Value Price:</label>
            <p class="col-sm-3" id="voucher_value_approval">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Quantity:</label>
            <p class="col-sm-3" id="voucher_quantity_approval">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Expiry Date:</label>
            <p class="col-sm-3" id="voucher_expiry_date_approval">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Terms &amp; Conditions:</label>
            <p class="col-sm-3" id="terms_and_conditions_approval">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Types of Delivery:</label>
            <p class="col-sm-3" id="types_of_delivery_approval">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Requested Publish Date:</label>
            <p class="col-sm-3" id="voucher_publish_date_approval">&nbsp;</p>
        </div>

        <div class="modal-footer">
            <button type="button" data-toggle="modal" id="promo-approval-reject" class="btn btn-danger">Reject</button>
            <button type="button" data-toggle="modal" id="promo-approval-approve" class="btn btn-primary">Approve</button>
        </div><!-- .modal-footer -->

</form><!-- "#promo-approval-form" -->

</div><!-- .tab-pane #promo-approval -->
    
</div><!-- .tab-content -->
<!-- TAB CONTENT END -->

<script>
$('#promo-approval-reject').click(function(){
    var reject_reason = prompt("Are you sure that you want to reject this promo? Please tell why...");
    if(reject_reason !== null)
    {
        var rejecturl = 'include/lib/reject.php?id=' + $('#promo_id').val()  + '&route=promo&reason=' + encodeURIComponent(reject_reason);
        $.ajax({
            url:rejecturl,
            success: function() {
                alert("Your promo has been rejected with the following reason: " + reject_reason);
                $('#promo-approval-modal').modal('hide');
                promoTable.ajax.reload();
                }
        });
    }
});

$('#promo-approval-approve').click(function(){
    var approveurl = 'include/lib/approve.php?id=' + $('#promo_id').val()  + '&route=promo';
    $.ajax({
        url:approveurl,
        success: function() {
            alert("Your promo has been approve.");
            $('#promo-approval-modal').modal('hide');
            promoTable.ajax.reload();
            }
    });
});
</script>
