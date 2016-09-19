<!-- NAV TABS BEGIN -->
<ul class="nav nav-tabs" role="tablist">
    <li id="promo-disable-nav" role="presentation" class="active"><a href="#promo-disable" role="tab"><strong>Promo - Disable</strong></a></li>
</ul>
<!-- NAV TABS END -->    

<!-- TAB CONTENT BEGIN -->
<div class="tab-content"><!-- .tab-content -->

<!-- VIEW BEGIN -->
<div role="tabpanel" class="tab-pane active" id="promo-disable"><!-- .tab-pane #promo-view -->

<form id="promo-disable-form" class="form-horizontal" role="form"><br><!-- "#promo-view-form" -->
        <div class="form-group">    
            <label for="voucher_design" class="col-sm-2 control-label">Voucher Design</label>
            <img class="col-sm-6 control-label" id="voucher_design_disable" src="#">
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label"><u>VOUCHER SUMMARY</u></label>
            <label for="" class="col-sm-2 control-label">&nbsp;</label>
            <label for="" class="col-sm-3 control-label"><u>MERCHANT SUMMARY</u></label>
            <label for="" class="col-sm-2 control-label">&nbsp;</label>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Promo ID:</label>
            <p class="col-sm-3" id="promo_id_disable">&nbsp;</p>
            <label for="" class="col-sm-2 control-label">Merchant Code:</label>
            <p class="col-sm-3" id="merchant_code_disable">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Title:</label>
            <p class="col-sm-3" id="voucher_name_disable">&nbsp;</p>
            <label for="" class="col-sm-2 control-label">Merchant Name:</label>
            <p class="col-sm-3" id="promo_merchant_name_disable">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description (Desktop):</label>
            <p class="col-sm-3" id="voucher_description_desktop_disable">&nbsp;</p>
            <label for="" class="col-sm-2 control-label">Participating Outlets:</label>
            <p class="col-sm-3" id="selecting_outlets_disable">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description (Mobile):</label>
            <p class="col-sm-3" id="voucher_description_mobile_disable">&nbsp;</p>
            <label for="" class="col-sm-2 control-label">Outlets Listing:</label>
            <p class="col-sm-3" id="merchant_outlet_listing_disable">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Group:</label>
            <p class="col-sm-3" id="voucher_group_disable">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Category:</label>
            <p class="col-sm-3" id="voucher_category_disable">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Value Price:</label>
            <p class="col-sm-3" id="voucher_value_disable">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Quantity:</label>
            <p class="col-sm-3" id="voucher_quantity_disable">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Expiry Date:</label>
            <p class="col-sm-3" id="voucher_expiry_date_disable">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Terms &amp; Conditions:</label>
            <p class="col-sm-3" id="terms_and_conditions_disable">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Types of Delivery:</label>
            <p class="col-sm-3" id="types_of_delivery_disable">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Requested Publish Date:</label>
            <p class="col-sm-3" id="voucher_publish_date_disable">&nbsp;</p>
        </div>

        <div class="modal-footer">
            <button type="button" data-dismiss="modal" id="promo-disable-cancel" class="btn btn-primary">Cancel</button>
            <button type="button" id="promo-disable-submit" class="btn btn-danger">Disable</button>
        </div><!-- .modal-footer -->

</form><!-- "#promo-voucher-details-form" -->
</div><!-- .tab-pane #promo-preview -->

</div><!-- .tab-content -->
<!-- TAB CONTENT END -->

<script>
$('#promo-disable-submit').click(function(){
    var answer = confirm("Are you sure that you want to disable this promo?");
    if(answer)
    {
        var disableurl = 'include/lib/disable.php?id=' + $('#promo_id_disable').text()  + '&route=promo';
        $.ajax({
            url:disableurl,
            success: function() {
                alert("Your promo has been disabled.");
                $('#promo-disable-modal').modal('hide');
                promoTable.ajax.reload();
                }
        });
    }
});
</script>
