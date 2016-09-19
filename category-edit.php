<!-- NAV TABS BEGIN -->
<ul class="nav nav-tabs" role="tablist">
    <li id="category-edit-nav" role="presentation" class="active disabled">
        <a href="#category-edit" role="tab"><strong>Category - Edit</strong></a>
    </li>
</ul>
<!-- NAV TABS END -->    

<!-- TAB CONTENT BEGIN -->
<div class="tab-content"><!-- .tab-content -->

<!-- VIEW BEGIN -->
<div role="tabpanel" class="tab-pane active disabled" id="category-edit">
<form id="category-edit-form" class="form-horizontal" role="form"><br>
    <div class="form-group">
        <label for="category_id_edit" class="col-sm-2 control-label">Category ID</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="category_id_edit" id="category_id_edit" value="" disabled>
        </div>
    </div>
    <div class="form-group">
        <label for="category_name_edit" class="col-sm-2 control-label">Category Name</label>
	    <div class="col-sm-6">
	        <input type="text" class="form-control" name="category_name_edit" id="category_name_edit">
	    </div>
    </div>
    <div class="form-group">
        <label for="sub_category_name_edit" class="col-sm-2 control-label">Sub Category Name</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="sub_category_name_edit" id="sub_category_name_edit">
        </div>
    </div>
    <div class="form-group">
        <label for="category_icon_edit" class="col-sm-2 control-label">Category Icon</label>
        <div class="col-sm-6"> 
            <div class="fileinput fileinput-exists" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    <img id="category_icon_edit" src="#">
                </div>
            <div>
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="category_icon_edit" id="category_icon_edit">
                </span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="category_background_edit" class="col-sm-2 control-label">Category Background Image</label>
        <div class="col-sm-6">      
            <div class="fileinput fileinput-exists" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    <img id="category_background_edit" src="#">
                </div>
            <div>
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="category_background_edit" id="category_background_edit">
                </span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
            </div>
        </div>
    </div>

    <div class="modal-footer">
            <button id="category-edit-cancel" type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
            <button id="category-edit-submit" type="button" class="btn btn-primary">Submit Edit</button>
    </div><!-- .modal-footer -->
</form>
</div>
<!-- VIEW END -->

</div><!-- .tab-content -->
<!-- TAB CONTENT END -->

<script>
$('#category-edit-submit').click(function(e) {
    var formData = new FormData($('#category-edit-form')[0]); 
    formData.append("operation", "edit");
    formData.append("category_id", $("#category_id_edit").val().trim());
    $.ajax({
        type: "POST",
        url: "category-submit.php",
        data: formData,
        success: function() {
            alert("Your category has been edited successfully.");
            $('#category-edit-modal').modal('hide');
            categoryTable.ajax.reload();
            },
        cache: false,
        contentType: false,
        processData: false
    });
});

</script>
