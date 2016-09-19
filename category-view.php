<!-- NAV TABS BEGIN -->
<ul class="nav nav-tabs" role="tablist">
    <li id="category-view-nav" role="presentation" class="active disabled">
        <a href="#category-view" role="tab"><strong>Category - View</strong></a>
    </li>
</ul>
<!-- NAV TABS END -->    

<!-- TAB CONTENT BEGIN -->
<div class="tab-content"><!-- .tab-content -->

<!-- VIEW BEGIN -->
<div role="tabpanel" class="tab-pane active disabled" id="category-view">
<form id="category-view-form" class="form-horizontal" role="form"><br>
    <input type="hidden" name="category_id" id="category_id" value="">    
    <div class="form-group">
        <label for="category_id_view" class="col-sm-2 control-label">Category ID</label>
        <div class="col-sm-6">
            <p type="text" class="form-control" name="category_id_view" id="category_id_view" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="category_name_view" class="col-sm-2 control-label">Category Name</label>
	    <div class="col-sm-6">
	        <p type="text" class="form-control" id="category_name_view">
	    </div>
    </div>
    <div class="form-group">
        <label for="sub_category_name_view" class="col-sm-2 control-label">Sub Category Name</label>
        <div class="col-sm-6">
            <p type="text" class="form-control" id="sub_category_name_view">
        </div>
    </div>
    <div class="form-group">
        <label for="category_icon_view" class="col-sm-2 control-label">Category Icon</label>
        <div class="col-sm-6"> 
            <div class="fileinput fileinput-exists" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    <img id="category_icon_view" src="#">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="category_background_view" class="col-sm-2 control-label">Category Background Image</label>
        <div class="col-sm-6">      
            <div class="fileinput fileinput-exists" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    <img id="category_background_view" src="#">
                </div>
            </div>
        </div>
    </div>

    <div class="modal-footer">
            <button id="category-view-close" type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
    </div><!-- .modal-footer -->
</form>
</div>
<!-- VIEW END -->

</div><!-- .tab-content -->
<!-- TAB CONTENT END -->

<script>
</script>
