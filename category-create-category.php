<!-- NAV TABS BEGIN -->
<ul class="nav nav-tabs" role="tablist">
    <li id="category-category-details-nav" role="presentation" class="active disabled">
        <a href="#category-category-details" role="tab"><strong>Category Details</strong></a>
    </li>
    <li id="category-preview-nav" role="presentation" class="disabled">
        <a href="#category-preview" role="tab"><strong>Preview</strong></a>
    </li>
</ul>
<!-- NAV TABS END -->    

<!-- TAB CONTENT BEGIN -->
<div class="tab-content"><!-- .tab-content -->

<!-- CATEGORY DETAILS BEGIN -->
<div role="tabpanel" class="tab-pane active" id="category-category-details"><!-- .tab-pane #category-category-details -->
<form id="category-form" class="form-horizontal" role="form"><br><!-- .form-horizontal -->

    <div class="form-group">
        <label for="category_id" class="col-sm-2 control-label">Category ID</label>
        <div class="col-sm-6">
            <input type="text" name="category_id" class="form-control" id="category_id" value="" disabled>
        </div>
    </div>
    <div class="form-group">
        <label for="category_name" class="col-sm-2 control-label">Category Name</label>
	    <div class="col-sm-6">
	        <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Category Name">
	    </div>
    </div>
    <div class="form-group">
        <label for="sub_category_name" class="col-sm-2 control-label">Sub Category Name</label>
        <div class="col-sm-6">
            <input type="text" name="sub_category_name" class="form-control" id="sub_category_name" placeholder="Sub Category Name">
        </div>
    </div>
    <div class="form-group">
        <label for="category_icon" class="col-sm-2 control-label">Category Icon</label>
        <div class="col-sm-6"> 
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                </div>
            <div>
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="category_icon" id="category_icon">
                </span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="category_background" class="col-sm-2 control-label">Category Background Image</label>
        <div class="col-sm-6">      
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                </div>
            <div>
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="category_background" id="category_background">
                </span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" id="category-category-details-next" class="btn btn-primary">Next</button>
    </div><!-- .modal-footer -->

</form><!-- .form-horizontal -->
</div>
<!-- CATEGORY DETAILS END -->

<!-- PREVIEW BEGIN -->
<div role="tabpanel" class="tab-pane" id="category-preview">
<form id="category-preview-form" class="form-horizontal" role="form"><br>
    
    <div class="form-group">
        <label for="category_id" class="col-sm-2 control-label">Category ID</label>
        <div class="col-sm-6">
            <p type="text" class="form-control" id="category_id_preview">
        </div>
    </div>
    <div class="form-group">
        <label for="category_name" class="col-sm-2 control-label">Category Name</label>
	    <div class="col-sm-6">
	        <p type="text" class="form-control" id="category_name_preview">
	    </div>
    </div>
    <div class="form-group">
        <label for="sub_category_name" class="col-sm-2 control-label">Sub Category Name</label>
        <div class="col-sm-6">
        <p type="text" class="form-control" id="sub_category_name_preview">
        </div>
    </div>
    <div class="form-group">
        <label for="category_icon_preview" class="col-sm-2 control-label">Category Icon</label>
        <div class="col-sm-6"> 
            <div class="fileinput fileinput-exists" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    <img id="category_icon_preview" src="#">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="category_background_preview" class="col-sm-2 control-label">Category Background Image</label>
        <div class="col-sm-6">      
            <div class="fileinput fileinput-exists" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    <img id="category_background_preview" src="#">
                </div>
            </div>
        </div>
    </div>

    <div class="modal-footer">
            <button id="category-preview-edit" type="button" class="btn btn-default">Edit</button>
            <button id="category-preview-submit" type="button" class="btn btn-primary">Submit for approval</button>
    </div><!-- .modal-footer -->
</form>
</div>
<!-- PREVIEW END -->

</div><!-- .tab-content -->
<!-- TAB CONTENT END -->

<script>
$('#category-category-details-next').click(function() {
    $('#category-create-category-modal').scrollTop(0);

    $('#category_id_preview').html($('#category_id').val());
    $('#category_name_preview').html($('#category_name').val());
    $('#sub_category_name_preview').html($('#sub_category_name').val());

    var iconPreview = document.getElementById('category_icon_preview');
    var iconFile    = document.getElementById('category_icon').files[0];
    var backgroundPreview = document.getElementById('category_background_preview');
    var backgroundFile = document.getElementById('category_background').files[0];
    var iconReader  = new FileReader();
    var backgroundReader = new FileReader();

    iconReader.onloadend = function () 
    {
        iconPreview.src = iconReader.result;
    }
    
    backgroundReader.onloadend = function ()
    {
        backgroundPreview.src = backgroundReader.result;
    }

    if (iconFile) 
    {
        iconReader.readAsDataURL(iconFile);
    } 
    else 
    {
        iconPreview.src = "";
    }

    if (backgroundFile)
    {
        backgroundReader.readAsDataURL(backgroundFile);
    }
    else
    {
        backgroundPreview.src = "";
    }
    
    $('#category-category-details-nav, #category-category-details').removeClass('active');    
    $('#category-preview-nav, #category-preview').addClass('active');
});

$('#category-preview-edit').click(function() {
    $('#category-create-category-modal').scrollTop(0);
    $('#category-preview-nav, #category-preview').removeClass('active');    
    $('#category-category-details-nav, #category-category-details').addClass('active');
});

$('#category-preview-submit').click(function(e) {
    var formData = new FormData($('#category-form')[0]); 
    formData.append("category_status", "pending approval");
    formData.append("category_id", $("#category_id").val().trim());
    $.ajax({
        type: "POST",
        url: "category-submit.php",
        data: formData,
        success: function() {
            alert("Your category has been created successfully.");
            $('#category-create-category-modal').modal('hide');
            categoryTable.ajax.reload();
            },
        cache: false,
        contentType: false,
        processData: false
    });
});
</script>
