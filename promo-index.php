<!-- PROMO CREATE NEW VOUCHER MODAL BEGIN -->
<div class="modal fade" id="promo-create-voucher-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg"><!-- .modal-dialog .modal-lg -->
        <div class="modal-content"><!-- .modal-content -->
            
        <div class="modal-header"><!-- class="modal-header" for "#promo-create-voucher-modal" -->
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Promo - Create New Voucher</h4>
        </div><!-- class="modal-header" for "#promo-create-voucher-modal" -->

        <div class="modal-body">            
            <?php
                require_once 'promo-create-voucher.php';    
            ?>
        </div><!-- .modal-body -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog .modal-lg -->
</div><!-- .modal fade #promo-create-voucher-modal -->

<!-- PROMO CREATE NEW VOUCHER MODAL END -->

<script>
$('#promo-create-voucher-modal').on('show.bs.modal', function() {
    $('.nav-tabs li.active, #promo-inventory-details.active, #promo-merchant-details.active, #promo-preview.active').removeClass('active');
    $('#promo-voucher-details-nav, #promo-voucher-details').addClass('active');

    $('#promo-voucher-details-form')[0].reset();
    $('#promo-inventory-details-form')[0].reset();
    $('#promo-merchant-details-form')[0].reset();
    $('#promo-preview-form')[0].reset();

    $.get('include/lib/getid.php?q=promo', function(data){
        $('#promo_id').val(data);
    })

    $.get('include/lib/populate-dropdown.php?route=category&id=category_name', function(data){
        $('#voucher_category_div').html(data);
    });

    $.get('include/lib/populate-dropdown.php?route=merchant&id=merchant_name', function(data){
        $('#promo_merchant_name_div').html(data);
    });
});
</script>

<!-- PROMO APPROVAL MODAL BEGIN -->
<div class="modal fade" id="promo-approval-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <div class="modal-header"><!-- .modal-header for #promo-approval-modal -->
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Promo - Approval</h4>
        </div>

        <div class="modal-body">
            <?php
                require_once 'promo-approval.php';
            ?>
        </div><!-- .modal-body -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog .modal-lg -->
</div><!-- .modal fade #promo-approval-modal -->

<!-- PROMO APPROVAL MODAL END -->

<script>
$('#promo-approval-modal').on('show.bs.modal', function(event) {
    $('#promo-approval-form')[0].reset();
    $('#promo-approval-nav, #promo-approval').addClass('active');

    var url = 'include/lib/retrievedata.php?q=promo&id=' + event.relatedTarget.id;
    $.get(url, function(data) {
        var promo_data = JSON.parse(data);
        $('#promo_id').val(promo_data.promo_id);
        $('#promo_id_approval').text(promo_data.promo_id);
        $('#voucher_design_approval').attr('src', promo_data.voucher_design);
        $('#promo_merchant_name_approval').text(promo_data.promo_merchant_name);

        var url = 'include/lib/get-merchant-data.php?name=' + promo_data.promo_merchant_name;
        $.get(url, function(data) {
            var merchant_data = JSON.parse(data);
            $('#merchant_code_approval').text(merchant_data.merchant_id);
            $('#merchant_outlet_listing_approval').text(merchant_data.merchant_listing_references);
        });

        $('#voucher_name_approval').text(promo_data.voucher_name);
        $('#voucher_description_desktop_approval').text(promo_data.voucher_description_desktop);
        $('#selecting_outlets_approval').text(promo_data.selecting_outlets);
        $('#voucher_group_approval').text(promo_data.voucher_group);
        $('#voucher_category_approval').text(promo_data.voucher_category);
        $('#voucher_value_approval').text(promo_data.voucher_value);

        if (promo_data.voucher_unique === "yes")
            $('#voucher_quantity_approval').text(promo_data.voucher_quantity);
        else
            $('#voucher_quantity_approval').text("Unlimited");

        $('#voucher_expiry_date_approval').text(promo_data.voucher_expiry_date);
        $('#terms_and_conditions_approval').text(promo_data.terms_and_conditions);
        $('#types_of_delivery_approval').text(promo_data.types_of_delivery);
        $('#voucher_publish_date_approval').text(promo_data.voucher_publish_date);
    })
});
</script>

<!-- PROMO UPLOAD CODE MODAL BEGIN -->
<div class="modal fade" id="promo-upload-code-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <div class="modal-header"><!-- .modal-header for #promo-upload-code -->
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Promo - Upload Code</h4>
        </div>

        <div class="modal-body">
            <?php
                require_once 'promo-upload-code.php';
            ?>
        </div><!-- .modal-body -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog .modal-lg -->
</div><!-- .modal fade #promo-upload-code -->

<!-- PROMO UPLOAD CODE MODAL END -->
                
<script>
$('#promo-upload-code-modal').on('show.bs.modal', function(event) {
    $('#promo-upload-code-form')[0].reset();

    var url = 'include/lib/retrievedata.php?q=promo&id=' + event.relatedTarget.id;
    $.get(url, function(data) {
        var promo_data = JSON.parse(data);

        $('#promo_id_upload').text(promo_data.promo_id);
        $('#voucher_design_upload').attr('src', promo_data.voucher_design);
        $('#promo_merchant_name_upload').text(promo_data.promo_merchant_name);

        var url = 'include/lib/get-merchant-data.php?name=' + promo_data.promo_merchant_name;
        $.get(url, function(data) {
            var merchant_data = JSON.parse(data);
            $('#merchant_code_upload').text(merchant_data.merchant_id);
            $('#merchant_outlet_listing_upload').text(merchant_data.merchant_listing_references);
        });

        $('#voucher_name_upload').text(promo_data.voucher_name);
        $('#voucher_description_desktop_upload').text(promo_data.voucher_description_desktop);
        $('#selecting_outlets_upload').text(promo_data.selecting_outlets);
        $('#voucher_group_upload').text(promo_data.voucher_group);
        $('#voucher_category_upload').text(promo_data.voucher_category);
        $('#voucher_value_upload').text(promo_data.voucher_value);

        if (promo_data.voucher_unique === 'no')
            $('#voucher_quantity_upload').text('Unlimited');
        else
            $('#voucher_quantity_upload').text(promo_data.voucher_quantity);

        $('#voucher_expiry_date_upload').text(promo_data.voucher_expiry_date);
        $('#terms_and_conditions_upload').text(promo_data.terms_and_conditions);
        $('#types_of_delivery_upload').text(promo_data.types_of_delivery);
        $('#voucher_publish_date_upload').text(promo_data.voucher_publish_date);
    })
});
</script>

<!-- PROMO VIEW MODAL BEGIN -->
<div class="modal fade" id="promo-view-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <div class="modal-header"><!-- .modal-header for #promo-view -->
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Promo - View</h4>
        </div>

        <div class="modal-body">
            <?php
                require_once 'promo-view.php';
            ?>
        </div><!-- .modal-body -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog .modal-lg -->
</div><!-- .modal fade #promo-view -->
<!-- PROMO VIEW MODAL END -->
                
<script>
$('#promo-view-modal').on('show.bs.modal', function(event) {
    $('#promo-view-form')[0].reset();

    var url = 'include/lib/retrievedata.php?q=promo&id=' + event.relatedTarget.id;
    $.get(url, function(data) {
        var promo_data = JSON.parse(data);

        $('#promo_id_view').text(promo_data.promo_id);
        $('#voucher_design_view').attr('src', promo_data.voucher_design);
        $('#promo_merchant_name_view').text(promo_data.promo_merchant_name);

        var url = 'include/lib/get-merchant-data.php?name=' + promo_data.promo_merchant_name;
        $.get(url, function(data) {
            var merchant_data = JSON.parse(data);
            $('#merchant_code_view').text(merchant_data.merchant_id);
            $('#merchant_outlet_listing_view').text(merchant_data.merchant_listing_references);
        });

        $('#voucher_name_view').text(promo_data.voucher_name);
        $('#voucher_description_desktop_view').text(promo_data.voucher_description_desktop);
        $('#voucher_description_mobile_view').text(promo_data.voucher_description_mobile);
        $('#selecting_outlets_view').text(promo_data.selecting_outlets);
        $('#voucher_group_view').text(promo_data.voucher_group);
        $('#voucher_category_view').text(promo_data.voucher_category);
        $('#voucher_value_view').text(promo_data.voucher_value);

        if (promo_data.voucher_unique === 'no')
            $('#voucher_quantity_view').text('Unlimited');
        else
            $('#voucher_quantity_view').text(promo_data.voucher_quantity);

        $('#voucher_expiry_date_view').text(promo_data.voucher_expiry_date);
        $('#terms_and_conditions_view').text(promo_data.terms_and_conditions);
        $('#types_of_delivery_view').text(promo_data.types_of_delivery);
        $('#voucher_publish_date_view').text(promo_data.voucher_publish_date);
    })
});
</script>

<!-- PROMO DISABLE MODAL BEGIN -->
<div class="modal fade" id="promo-disable-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <div class="modal-header"><!-- .modal-header for #promo-view -->
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Promo - Disable</h4>
        </div>

        <div class="modal-body">
            <?php
                require_once 'promo-disable.php';
            ?>
        </div><!-- .modal-body -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog .modal-lg -->
</div><!-- .modal fade #promo-view -->
<!-- PROMO VIEW MODAL END -->
                
<script>
$('#promo-disable-modal').on('show.bs.modal', function(event) {
    $('#promo-disable-form')[0].reset();

    var url = 'include/lib/retrievedata.php?q=promo&id=' + event.relatedTarget.id;
    $.get(url, function(data) {
        var promo_data = JSON.parse(data);

        $('#promo_id_disable').text(promo_data.promo_id);
        $('#voucher_design_disable').attr('src', promo_data.voucher_design);
        $('#promo_merchant_name_disable').text(promo_data.promo_merchant_name);

        var url = 'include/lib/get-merchant-data.php?name=' + promo_data.promo_merchant_name;
        $.get(url, function(data) {
            var merchant_data = JSON.parse(data);
            $('#merchant_code_disable').text(merchant_data.merchant_id);
            $('#merchant_outlet_listing_disable').text(merchant_data.merchant_listing_references);
        });

        $('#voucher_name_disable').text(promo_data.voucher_name);
        $('#voucher_description_desktop_disable').text(promo_data.voucher_description_desktop);
        $('#voucher_description_mobile_disable').text(promo_data.voucher_description_mobile);
        $('#selecting_outlets_disable').text(promo_data.selecting_outlets);
        $('#voucher_group_disable').text(promo_data.voucher_group);
        $('#voucher_category_disable').text(promo_data.voucher_category);
        $('#voucher_value_disable').text(promo_data.voucher_value);

        if (promo_data.voucher_unique === 'no')
            $('#voucher_quantity_disable').text('Unlimited');
        else
            $('#voucher_quantity_disable').text(promo_data.voucher_quantity);

        $('#voucher_expiry_date_disable').text(promo_data.voucher_expiry_date);
        $('#terms_and_conditions_disable').text(promo_data.terms_and_conditions);
        $('#types_of_delivery_disable').text(promo_data.types_of_delivery);
        $('#voucher_publish_date_disable').text(promo_data.voucher_publish_date);
    })
});
</script>

<!-- PROMO EDIT  MODAL BEGIN -->
<div class="modal fade" id="promo-edit-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg"><!-- .modal-dialog .modal-lg -->
        <div class="modal-content"><!-- .modal-content -->
            
        <div class="modal-header"><!-- class="modal-header" for "#promo-create-voucher-modal" -->
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Promo - Edit</h4>
        </div><!-- class="modal-header" for "#promo-create-voucher-modal" -->

        <div class="modal-body">            
            <?php
                require_once 'promo-edit.php';    
            ?>
        </div><!-- .modal-body -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog .modal-lg -->
</div><!-- .modal fade #promo-create-voucher-modal -->

<!-- PROMO CREATE NEW VOUCHER MODAL END -->

<script>
$('#promo-edit-modal').on('show.bs.modal', function(event) {
    $('.nav-tabs li.active, #promo-inventory-details-edit.active, #promo-merchant-details-edit.active, #promo-preview-edit.active').removeClass('active');
    $('#promo-voucher-details-edit-nav, #promo-voucher-details-edit').addClass('active');

    $('#promo-voucher-details-edit-form')[0].reset();
    $('#promo-inventory-details-edit-form')[0].reset();
    $('#promo-merchant-details-edit-form')[0].reset();
    $('#promo-preview-edit-form')[0].reset();

    $.get('include/lib/populate-dropdown.php?route=category&id=category_name', function(data){
        $('#voucher_category_div_edit').html(data);
    });

    $.get('include/lib/populate-dropdown.php?route=merchant&id=merchant_name', function(data){
        $('#promo_merchant_name_edit_div').html(data);
    });

    var url = 'include/lib/retrievedata.php?q=promo&id=' + event.relatedTarget.id;
    $.get(url, function(data) {
        var promo_data = JSON.parse(data);
        $('#promo_id_edit').val(promo_data.promo_id);
        $('#voucher_design_edit').attr('src', promo_data.voucher_design);
        $('#promo_merchant_name_edit').text(promo_data.promo_merchant_name);

        var url = 'include/lib/get-merchant-data.php?name=' + promo_data.promo_merchant_name;
        $.get(url, function(data) {
            var merchant_data = JSON.parse(data);
            $('#merchant_code_edit').text(merchant_data.merchant_id);
            $('#merchant_outlet_listing_edit').text(merchant_data.merchant_listing_references);
        });

        $('#voucher_name_edit').val(promo_data.voucher_name);
        $('#voucher_description_desktop_edit').text(promo_data.voucher_description_desktop);
        $('#voucher_description_mobile_edit').text(promo_data.voucher_description_mobile);
        $('#campaign_name_edit').val(promo_data.campaign_name);

        $('#voucher_image1_edit').attr('src', promo_data.voucher_image1);
        $('#voucher_image2_edit').attr('src', promo_data.voucher_image2);
        $('#voucher_image3_edit').attr('src', promo_data.voucher_image3);
        $('#voucher_image4_edit').attr('src', promo_data.voucher_image4);

        $('#selecting_outlets_edit').text(promo_data.selecting_outlets);

        //$('#voucher_group_edit').text(promo_data.voucher_group);
        //$('#voucher_category_edit').text(promo_data.voucher_category);

        $('#voucher_value_edit').val(promo_data.voucher_value);

        if (promo_data.voucher_unique === 'no')
            $('#voucher_quantity_edit').text('Unlimited');
        else
            $('#voucher_quantity_edit').text(promo_data.voucher_quantity);

        $('#voucher_expiry_date_edit').text(promo_data.voucher_expiry_date);
        $('#terms_and_conditions_edit').text(promo_data.terms_and_conditions);
        $('#types_of_delivery_edit').text(promo_data.types_of_delivery);
        $('#voucher_publish_date_edit').text(promo_data.voucher_publish_date);

    });
});
</script>
