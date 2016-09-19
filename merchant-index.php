<!-- MERCHANT CREATE MERCHANT MODAL START -->
<div class="modal fade" id="merchant-create-merchant-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
        <div class="modal-header"><!-- class="modal-header" for "#merchant-create-merchant-modal" -->
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Merchant - Create New Merchant</h4>
        </div><!-- class="modal-header" for "#merchant-create-merchant-modal" -->

        <div class="modal-body">            
            <?php
                require_once 'merchant-create-merchant.php';    
            ?>
        </div><!-- .modal-body -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog .modal-lg -->
</div><!-- .modal fade #merchant-create-merchant-modal -->

<!-- MERCHANT CREATE MERCHANT MODAL END -->

<script>
$('#merchant-create-merchant-modal').on('show.bs.modal', function() {
    $('#merchant-form')[0].reset();
    $('#merchant-preview-form')[0].reset();

    $('#merchant-preview-nav, #merchant-preview').removeClass('active');    
    $('#merchant-merchant-details-nav, #merchant-merchant-details').addClass('active');

    $.get('include/lib/getid.php?q=merchant', function(data){
        $('#merchant_id').val(data);
    })
});
</script>

<!-- MERCHANT APPROVAL MODAL START -->
<div class="modal fade" id="merchant-approval-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <div class="modal-header"><!-- class="modal-header" for "#merchant-approval-modal" -->
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Merchant - Approval</h4>
        </div><!-- class="modal-header" for "#merchant-approval-modal" -->

        <div class="modal-body">
            <?php
                require_once 'merchant-approval.php';
            ?>
        </div><!-- .modal-body -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog .modal-lg -->
</div><!-- .modal fade #merchant-approval-modal -->

<!-- MERCHANT APPROVAL MODAL END -->
        
<script>
$('#merchant-approval-modal').on('show.bs.modal', function(event) {
    $('#merchant-approval-form')[0].reset();

    var url = 'include/lib/retrievedata.php?q=merchant&id=' + event.relatedTarget.id;
    $.get(url, function(data) {
        var merchant_data = JSON.parse(data);
        $('#merchant_id').val(merchant_data.merchant_id);
        $('#merchant_id_approval').text(merchant_data.merchant_id);
        $('#merchant_name_approval').text(merchant_data.merchant_name);
        $('#merchant_hq_address_approval').text(merchant_data.merchant_hq_address);
        $('#merchant_icon_approval').attr('src', merchant_data.merchant_icon);
        $('#merchant_background_approval').attr('src', merchant_data.merchant_background);
        $('#merchant_total_branches_approval').text(merchant_data.merchant_total_branches);
        $('#merchant_listing_references_approval').text(merchant_data.merchant_listing_references);
        $('#merchant_pic_name_approval').text(merchant_data.merchant_pic_title + " " + merchant_data.merchant_pic_name);
        $('#merchant_pic_email_approval').text(merchant_data.merchant_pic_email);
        $('#merchant_pic_phone_number_approval').text(merchant_data.merchant_pic_phone_number);
    })
});
</script>

<!-- MERCHANT VIEW MODAL START -->
<div class="modal fade" id="merchant-view-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <div class="modal-header"><!-- class="modal-header" for "#merchant-view-modal" -->
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Merchant - View</h4>
        </div><!-- class="modal-header" for "#merchant-approval-modal" -->

        <div class="modal-body">
            <?php
                require_once 'merchant-view.php';
            ?>
        </div><!-- .modal-body -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog .modal-lg -->
</div><!-- .modal fade #merchant-view-modal -->

<!-- MERCHANT VIEW MODAL END -->
        
<script>
$('#merchant-view-modal').on('show.bs.modal', function(event) {
    $('#merchant-view-form')[0].reset();

    var url = 'include/lib/retrievedata.php?q=merchant&id=' + event.relatedTarget.id;
    $.get(url, function(data) {
        var merchant_data = JSON.parse(data);
        $('#merchant_id').val(merchant_data.merchant_id);
        $('#merchant_id_view').text(merchant_data.merchant_id);
        $('#merchant_name_view').text(merchant_data.merchant_name);
        $('#merchant_hq_address_view').text(merchant_data.merchant_hq_address);
        $('#merchant_icon_view').attr('src', merchant_data.merchant_icon);
        $('#merchant_background_view').attr('src', merchant_data.merchant_background);
        $('#merchant_total_branches_view').text(merchant_data.merchant_total_branches);
        $('#merchant_listing_references_view').text(merchant_data.merchant_listing_references);
        $('#merchant_pic_name_view').text(merchant_data.merchant_pic_title + " " + merchant_data.merchant_pic_name);
        $('#merchant_pic_email_view').text(merchant_data.merchant_pic_email);
        $('#merchant_pic_phone_number_view').text(merchant_data.merchant_pic_phone_number);
    })
});
</script>

<!-- MERCHANT EDIT  MODAL START -->
<div class="modal fade" id="merchant-edit-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <div class="modal-header"><!-- class="modal-header" for "#merchant-edit-modal" -->
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Merchant - Edit</h4>
        </div><!-- class="modal-header" for "#merchant-edit-modal" -->

        <div class="modal-body">
            <?php
                require_once 'merchant-edit.php';
            ?>
        </div><!-- .modal-body -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog .modal-lg -->
</div><!-- .modal fade #merchant-edit-modal -->

<!-- MERCHANT EDIT MODAL END -->
        
<script>
function setTitleValue(titleSelect, titleValue)
{   
    for (i = 0; i < titleSelect.options.length; i++)
    { 
        if (titleSelect.options[i].value == titleValue)
        {
            // Item is found. Set its property and exit
            titleSelect.options[i].selected = true;
            break;
        }
    }
    return;
}

$('#merchant-edit-modal').on('show.bs.modal', function(event) {
    $('#merchant-edit-form')[0].reset();

    var url = 'include/lib/retrievedata.php?q=merchant&id=' + event.relatedTarget.id;
    $.get(url, function(data) {
        var merchant_data = JSON.parse(data);
        $('#merchant_id_edit').val(merchant_data.merchant_id);
        $('#merchant_name_edit').val(merchant_data.merchant_name);
        $('#merchant_hq_address_edit').val(merchant_data.merchant_hq_address);
        $('#merchant_icon_edit').attr('src', merchant_data.merchant_icon);
        $('#merchant_background_edit').attr('src', merchant_data.merchant_background);
        $('#merchant_total_branches_edit').val(merchant_data.merchant_total_branches);
        $('#merchant_listing_references_edit').val(merchant_data.merchant_listing_references);
        $('#merchant_pic_name_edit').val(merchant_data.merchant_pic_name);
        $('#merchant_pic_email_edit').val(merchant_data.merchant_pic_email);
        $('#merchant_pic_phone_number_edit').val(merchant_data.merchant_pic_phone_number);
        setTitleValue(document.getElementById('merchant_pic_title_edit'), merchant_data.merchant_pic_title);
    })
});
</script>


<!-- MERCHANT DISABLE  MODAL START -->
<div class="modal fade" id="merchant-disable-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <div class="modal-header"><!-- class="modal-header" for "#merchant-view-modal" -->
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Merchant - Disable</h4>
        </div><!-- class="modal-header" for "#merchant-approval-modal" -->

        <div class="modal-body">
            <?php
                require_once 'merchant-disable.php';
            ?>
        </div><!-- .modal-body -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog .modal-lg -->
</div><!-- .modal fade #merchant-view-modal -->

<!-- MERCHANT VIEW MODAL END -->
        
<script>
$('#merchant-disable-modal').on('show.bs.modal', function(event) {
    $('#merchant-view-form')[0].reset();

    var url = 'include/lib/retrievedata.php?q=merchant&id=' + event.relatedTarget.id;
    $.get(url, function(data) {
        var merchant_data = JSON.parse(data);
        $('#merchant_id').val(merchant_data.merchant_id);
        $('#merchant_id_disable').text(merchant_data.merchant_id);
        $('#merchant_name_disable').text(merchant_data.merchant_name);
        $('#merchant_hq_address_disable').text(merchant_data.merchant_hq_address);
        $('#merchant_icon_disable').attr('src', merchant_data.merchant_icon);
        $('#merchant_background_disable').attr('src', merchant_data.merchant_background);
        $('#merchant_total_branches_disable').text(merchant_data.merchant_total_branches);
        $('#merchant_listing_references_disable').text(merchant_data.merchant_listing_references);
        $('#merchant_pic_name_disable').text(merchant_data.merchant_pic_title + " " + merchant_data.merchant_pic_name);
        $('#merchant_pic_email_disable').text(merchant_data.merchant_pic_email);
        $('#merchant_pic_phone_number_disable').text(merchant_data.merchant_pic_phone_number);
    })
});
</script>
