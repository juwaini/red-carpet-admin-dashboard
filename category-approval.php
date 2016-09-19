<!-- NAV TABS BEGIN -->
<ul class="nav nav-tabs" role="tablist">
    <li id="category-approval-nav" role="presentation" class="active">
        <a href="#category-approval" role="tab"><strong>Category - Approval</strong></a>
    </li>
</ul>
<!-- NAV TABS END -->    

<!-- TAB CONTENT BEGIN -->
<div class="tab-content"><!-- .tab-content -->

<!-- PREVIEW BEGIN -->
<div role="tabpanel" class="tab-pane active" id="category-approval">
<form id="category-approval-form" class="form-horizontal" role="form"><br>
    <input type="hidden" name="category_id" id="category_id" value="">    
    <div class="form-group">
        <label for="category_id_approval" class="col-sm-2 control-label">Category ID</label>
        <div class="col-sm-6">
            <p type="text" class="form-control" name="category_id_approval" id="category_id_approval" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="category_name_approval" class="col-sm-2 control-label">Category Name</label>
	    <div class="col-sm-6">
	        <p type="text" class="form-control" id="category_name_approval">
	    </div>
    </div>
    <div class="form-group">
        <label for="sub_category_name_approval" class="col-sm-2 control-label">Sub Category Name</label>
        <div class="col-sm-6">
            <p type="text" class="form-control" id="sub_category_name_approval">
        </div>
    </div>
    <div class="form-group">
        <label for="category_icon_approval" class="col-sm-2 control-label">Category Icon</label>
        <div class="col-sm-6"> 
            <div class="fileinput fileinput-exists" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    <img id="category_icon_approval" src="#">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="category_background_approval" class="col-sm-2 control-label">Category Background Image</label>
        <div class="col-sm-6">      
            <div class="fileinput fileinput-exists" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    <img id="category_background_approval" src="#">
                </div>
            </div>
        </div>
    </div>

    <div class="modal-footer">
            <button id="category-approval-submit" type="button" class="btn btn-primary">Approve</button>
    </div><!-- .modal-footer -->
</form>
</div>
<!-- PREVIEW END -->

</div><!-- .tab-content -->
<!-- TAB CONTENT END -->

<script>
$('#category-approval-submit').click(function() {
    var approveurl = 'include/lib/approve.php?id=' + $('#category_id').val()  + '&route=category';
    $.ajax({
        url:approveurl,
        success: function() {
            alert("Your category has been approved.");
            $('#category-approval-modal').modal('hide');
            categoryTable.ajax.reload();
            }
    });
});
</script>
