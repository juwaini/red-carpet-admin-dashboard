<!-- CATEGORY CREATE CATEGORY MODAL BEGIN -->
<div class="modal fade" id="category-create-category-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
        <div class="modal-header"><!-- .modal-header #category-create-category-modal -->
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Category - Create New Category</h4>
        </div><!-- .modal-header #category-create-category-modal -->

        <div class="modal-body">            
            <?php
                require_once 'category-create-category.php';    
            ?>
        </div><!-- .modal-body -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog .modal-lg -->
</div><!-- .modal fade #category-create-category-modal -->

<!-- CATEGORY CREATE CATEGORY MODAL END -->

<script>
$('#category-create-category-modal').on('show.bs.modal', function() {
    $('#category-form')[0].reset();
    $('#category-preview-form')[0].reset();

    $('#category-preview-nav, #category-preview').removeClass('active');    
    $('#category-category-details-nav, #category-category-details').addClass('active');

    $.get('include/lib/getid.php?q=category', function(data){
        $('#category_id').val(data);
    })
});
</script>

<!-- CATEGORY APPROVAL MODAL BEGIN -->
<div class="modal fade" id="category-approval-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <div class="modal-header"><!-- .modal-header #category-approval -->
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Category - Approval</h4>
        </div><!-- .modal-header #category-approval -->

        <div class="modal-body">
            <?php
                require_once 'category-approval.php';
            ?>
        </div><!-- .modal-body -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog .modal-lg --> 
</div><!-- .modal fade #category-approval -->

<!-- CATEGORY APPROVAL MODAL END -->

<script>
$('#category-approval-modal').on('show.bs.modal', function(event) {
    $('#category-approval-form')[0].reset();

    var url = 'include/lib/retrievedata.php?q=category&id=' + event.relatedTarget.id;
    $.get(url, function(data) {
        var category_data = JSON.parse(data);
        $('#category_id').val(category_data.category_id);
        $('#category_id_approval').text(category_data.category_id);
        $('#category_name_approval').text(category_data.category_name);
        $('#sub_category_name_approval').text(category_data.sub_category_name);
        $('#category_icon_approval').attr('src', category_data.category_icon);
        $('#category_background_approval').attr('src', category_data.category_background);
    })
});
</script>

<!-- CATEGORY VIEW BEGIN -->
<div class="modal fade" id="category-view-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <div class="modal-header"><!-- .modal-header #category-view -->
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Category - View</h4>
        </div><!-- .modal-header #category-view -->

        <div class="modal-body">
            <?php
                require_once 'category-view.php';
            ?>
        </div><!-- .modal-body -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog .modal-lg --> 
</div><!-- .modal fade #category-view -->

<!-- CATEGORY VIEW MODAL END -->

<script>
$('#category-view-modal').on('show.bs.modal', function(event) {
    $('#category-view-form')[0].reset();

    var url = 'include/lib/retrievedata.php?q=category&id=' + event.relatedTarget.id;
    $.get(url, function(data) {
        var category_data = JSON.parse(data);
        $('#category_id').val(category_data.category_id);
        $('#category_id_view').text(category_data.category_id);
        $('#category_name_view').text(category_data.category_name);
        $('#sub_category_name_view').text(category_data.sub_category_name);
        $('#category_icon_view').attr('src', category_data.category_icon);
        $('#category_background_view').attr('src', category_data.category_background);
    })
});
</script>

<!-- CATEGORY EDIT BEGIN -->
<div class="modal fade" id="category-edit-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <div class="modal-header"><!-- .modal-header #category-edit -->
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Category - Edit</h4>
        </div><!-- .modal-header #category-edit -->

        <div class="modal-body">
            <?php
                require_once 'category-edit.php';
            ?>
        </div><!-- .modal-body -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog .modal-lg --> 
</div><!-- .modal fade #category-view -->

<!-- CATEGORY EDIT MODAL END -->

<script>
$('#category-edit-modal').on('show.bs.modal', function(event) {
    $('#category-edit-form')[0].reset();

    var url = 'include/lib/retrievedata.php?q=category&id=' + event.relatedTarget.id;
    $.get(url, function(data) {
        var category_data = JSON.parse(data);
        $('#category_id').val(category_data.category_id);
        $('#category_id_edit').val(category_data.category_id);
        $('#category_name_edit').val(category_data.category_name);
        $('#sub_category_name_edit').val(category_data.sub_category_name);
        $('#category_icon_edit').attr('src', category_data.category_icon);
        $('#category_background_edit').attr('src', category_data.category_background);
    })
});
</script>

<!-- CATEGORY DISABLE BEGIN -->
<div class="modal fade" id="category-disable-modal" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <div class="modal-header"><!-- .modal-header #category-view -->
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Category - Disable</h4>
        </div><!-- .modal-header #category-view -->

        <div class="modal-body">
            <?php
                require_once 'category-disable.php';
            ?>
        </div><!-- .modal-body -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog .modal-lg --> 
</div><!-- .modal fade #category-view -->

<!-- CATEGORY DISABLE  MODAL END -->

<script>
$('#category-disable-modal').on('show.bs.modal', function(event) {
    $('#category-disable-form')[0].reset();

    var url = 'include/lib/retrievedata.php?q=category&id=' + event.relatedTarget.id;
    $.get(url, function(data) {
        var category_data = JSON.parse(data);
        $('#category_id').val(category_data.category_id);
        $('#category_id_disable').text(category_data.category_id);
        $('#category_name_disable').text(category_data.category_name);
        $('#sub_category_name_disable').text(category_data.sub_category_name);
        $('#category_icon_disable').attr('src', category_data.category_icon);
        $('#category_background_disable').attr('src', category_data.category_background);
    })
});
</script>
