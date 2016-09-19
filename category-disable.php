<!-- NAV TABS BEGIN -->
<ul class="nav nav-tabs" role="tablist">
    <li id="category-disable-nav" role="presentation" class="active disabled">
        <a href="#category-disable" role="tab"><strong>Category - Disable</strong></a>
    </li>
</ul>
<!-- NAV TABS END -->    

<!-- TAB CONTENT BEGIN -->
<div class="tab-content"><!-- .tab-content -->

<!-- VIEW BEGIN -->
<div role="tabpanel" class="tab-pane active disabled" id="category-disable">
<form id="category-disable-form" class="form-horizontal" role="form"><br>
    <input type="hidden" name="category_id" id="category_id" value="">    
    <div class="form-group">
        <label for="category_id_view" class="col-sm-2 control-label">Category ID</label>
        <div class="col-sm-6">
            <p type="text" class="form-control" id="category_id_disable">
        </div>
    </div>
    <div class="form-group">
        <label for="category_name_view" class="col-sm-2 control-label">Category Name</label>
	    <div class="col-sm-6">
	        <p type="text" class="form-control" id="category_name_disable">
	    </div>
    </div>
    <div class="form-group">
        <label for="sub_category_name_view" class="col-sm-2 control-label">Sub Category Name</label>
        <div class="col-sm-6">
            <p type="text" class="form-control" id="sub_category_name_disable">
        </div>
    </div>
    <div class="form-group">
        <label for="category_icon_view" class="col-sm-2 control-label">Category Icon</label>
        <div class="col-sm-6"> 
            <div class="fileinput fileinput-exists" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    <img id="category_icon_disable" src="#">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="category_background_view" class="col-sm-2 control-label">Category Background Image</label>
        <div class="col-sm-6">      
            <div class="fileinput fileinput-exists" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    <img id="category_background_disable" src="#">
                </div>
            </div>
        </div>
    </div>

    <div class="modal-footer">
            <button id="category-disable-submit" type="button" class="btn btn-danger">Disable</button>
    </div><!-- .modal-footer -->
</form>
</div>
<!-- VIEW END -->

</div><!-- .tab-content -->
<!-- TAB CONTENT END -->

<script>
$('#category-disable-submit').click(function(){
    var answer = confirm("Are you sure that you want to disable this category?");
    if(answer)
    {
        var disableurl = 'include/lib/disable.php?id=' + $('#category_id_disable').text()  + '&route=category';
        $.ajax({
            url:disableurl,
            success: function() {
                alert("Your category has been disabled.");
                $('#category-disable-modal').modal('hide');
                categoryTable.ajax.reload();
                }
        });
    }
});
</script>
