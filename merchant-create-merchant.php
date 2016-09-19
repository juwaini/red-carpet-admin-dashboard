<!-- NAV TABS BEGIN -->
<ul class="nav nav-tabs" role="tablist">
    <li id="merchant-merchant-details-nav" role="presentation" class="active disabled"><a href="#merchant-merchant-details" role="tab"><strong>Merchant Details</strong></a></li>
    <li id="merchant-preview-nav" role="presentation" class="disabled"><a href="#merchant-preview" role="tab"><strong>Preview</strong></a></li>
</ul>
<!-- NAV TABS END -->    

<!-- TAB CONTENT BEGIN -->
<div class="tab-content"><!-- .tab-content -->

<!-- MERCHANT DETAILS BEGIN -->
<div role="tabpanel" class="tab-pane active" id="merchant-merchant-details"><!-- .tab-pane #merchant-merchant-details -->

<form id="merchant-form" class="form-horizontal" role="form"><br><!-- "#merchant-merchant-details-form" -->
        <div class="form-group">    
            <label for="merchant_id" class="col-sm-2 control-label">Merchant ID</label>
	        <div class="col-sm-6">
                <input type="text" name="mechant_id" id="merchant_id" value="" class="form-control" disabled> 
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_name" class="col-sm-2 control-label">Merchant Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="merchant_name" id="merchant_name" placeholder="Merchant Name">
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_hq_address" class="col-sm-2 control-label">HQ Address</label>
            <div class="col-sm-6">
	            <textarea class="form-control" name="merchant_hq_address" id="merchant_hq_address" rows=3>
	            </textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_icon" class="col-sm-2 control-label">Merchant Icon</label>
            <div class="col-sm-6"> 
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    </div>
                <div>
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="merchant_icon" id="merchant_icon">
                </span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_background" class="col-sm-2 control-label">Merchant Background</label>
            <div class="col-sm-6"> 
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    </div>
                <div>
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="merchant_background" id="merchant_background">
                </span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_total_branches" class="col-sm-2 control-label">Total Number of Branches</label>
            <div class="col-sm-2">
                <input type="number" class="form-control" id="merchant_total_branches" name="merchant_total_branches">
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_listing_references" class="col-sm-2 control-label">Merchant Listing References</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="merchant_listing_references" name="merchant_listing_references" placeholder="http://www.example.com">
            </div>
        </div>   
        <div class="form-group">
            <label for="merchant_pic_name" class="col-sm-2 control-label">Person In Charge Name</label>
            <div class="col-sm-2">
                <select class="form-control" id="merchant_pic_title" name="merchant_pic_title">
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                </select>
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="merchant_pic_name" id="merchant_pic_name" placeholder="PIC Name">
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_pic_email" class="col-sm-2 control-label">Person In Charge Email</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" name="merchant_pic_email" id="merchant_pic_email" placeholder="PIC Email">
            </div>
        </div>
        <div class="form-group">
            <label for="merchant_pic_phone_number" class="col-sm-2 control-label">PIC Phone Number</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="merchant_pic_phone_number" id="merchant_pic_phone_number" placeholder="PIC Phone Number">
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" data-toggle="modal" href="#merchant-preview-modal" id="merchant-merchant-details-next" class="btn btn-primary">Next</button>
        </div><!-- .modal-footer -->

</form><!-- "#merchant-merchant-details-form" -->

</div><!-- .tab-pane -->
<!-- MERCHANT DETAILS END -->

<!-- PREVIEW BEGIN -->    
<div role="tabpanel" class="tab-pane" id="merchant-preview"><!-- .tab-pane #merchant-preview -->

<form id="merchant-preview-form" class="form-horizontal" role="form"><!-- .form-horizontal #merchant-preview -->
    <br>
    <div class="form-group">
        <label for="merchant_id_preview" class="col-sm-2 control-label">Merchant ID</label>
	    <div class="col-sm-6">
            <p type="text" id="merchant_id_preview" class="form-control"></p> 
        </div>
    </div>
    <div class="form-group">
        <label for="merchant_name" class="col-sm-2 control-label">Merchant Name</label>
        <div class="col-sm-6">
            <p type="text" class="form-control" name="merchant_name_preview" id="merchant_name_preview"></p>
        </div>
    </div>
    <div class="form-group">
        <label for="merchant_hq_address" class="col-sm-2 control-label">HQ Address</label>
        <div class="col-sm-6">
            <p type="textarea" class="form-control" name="merchant_hq_address_preview" id="merchant_hq_address_preview" rows=3></p>
        </div>
    </div>
    <div class="form-group">
        <label for="merchant_icon" class="col-sm-2 control-label">Merchant Icon</label>
        <div class="col-sm-2">
            <img id="merchant_icon_preview" src="#">
        </div>
    </div>
    <div class="form-group">
        <label for="merchant_background" class="col-sm-2 control-label">Merchant Background</label>
        <div class="col-sm-2">
            <img id="merchant_background_preview" src="#" style="width: 150px; height: 250px;">
        </div>
    </div>
    <div class="form-group">
        <label for="merchant_total_branches" class="col-sm-2 control-label">Total Number of Branches</label>
        <div class="col-sm-2">
            <p type="number" class="form-control" id="merchant_total_branches_preview" name="merchant_total_branches_preview"></p>
        </div>
    </div>
    <div class="form-group">
        <label for="merchant_listing_references" class="col-sm-2 control-label">Branches Listing Reference</label>
        <div class="col-sm-6">
            <p type="text" class="form-control" id="merchant_listing_references_preview" name="merchant_listing_references_preview"></p>
        </div>
    </div>   
    <div class="form-group">
        <label for="merchant_pic_name" class="col-sm-2 control-label">PIC Name</label>
        <div class="col-sm-6">
            <p type="text" class="form-control" name="merchant_pic_name_preview" id="merchant_pic_name_preview"></p>
        </div>
    </div>
    <div class="form-group">
        <label for="merchant_pic_email" class="col-sm-2 control-label">PIC Email</label>
        <div class="col-sm-6">
            <p type="email" class="form-control" name="merchant_pic_email_preview" id="merchant_pic_email_preview"></p>
        </div>
    </div>
    <div class="form-group">
        <label for="merchant_pic_phone_number" class="col-sm-2 control-label">PIC Phone Number</label>
        <div class="col-sm-6">
            <p type="text" class="form-control" name="merchant_pic_phone_number_preview" id="merchant_pic_phone_number_preview"></p> 
        </div>
    </div>   

    <div class="modal-footer">
            <button id="merchant-preview-edit" type="button" class="btn btn-default">Edit</button>
            <button id="merchant-preview-submit" type="button" class="btn btn-primary">Submit for approval</button>
    </div><!-- .modal-footer -->

</div><!-- .tab-pane #merchant-preview -->
</form><!-- .form-horizontal #merchant-preview -->
<!-- PREVIEW END -->

</div><!-- .tab-content -->
<!-- TAB CONTENT END -->

<script>
$('#merchant-preview-edit').click(function() {
    $('#merchant-create-merchant-modal').scrollTop(0);
    $('#merchant-preview-nav, #merchant-preview').removeClass('active');    
    $('#merchant-merchant-details-nav, #merchant-merchant-details').addClass('active');
});

$('#merchant-merchant-details-next').click(function() {
    $('#merchant-create-merchant-modal').scrollTop(0);
    $('#merchant-merchant-details-nav, #merchant-merchant-details').removeClass('active');    
    $('#merchant-preview-nav, #merchant-preview').addClass('active');
    
    $('#merchant_id_preview').html($('#merchant_id').val());
    $('#merchant_name_preview').html($('#merchant_name').val());
    $('#merchant_hq_address_preview').html($('#merchant_hq_address').val());
    $('#merchant_total_branches_preview').html($('#merchant_total_branches').val());
    $('#merchant_listing_references_preview').html($('#merchant_listing_references').val());
    $('#merchant_pic_name_preview').html($('#merchant_pic_title').val() + " " + $('#merchant_pic_name').val());
    $('#merchant_pic_email_preview').html($('#merchant_pic_email').val());
    $('#merchant_pic_phone_number_preview').html($('#merchant_pic_phone_number').val());
    
    var iconPreview = document.getElementById('merchant_icon_preview');
    var iconFile    = document.getElementById('merchant_icon').files[0];
    var backgroundPreview = document.getElementById('merchant_background_preview');
    var backgroundFile = document.getElementById('merchant_background').files[0];
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
});

$('#merchant-preview-submit').click(function(e) {
    
    var formData = new FormData($('#merchant-form')[0]); 
    formData.append("merchant_status", "pending approval");
    formData.append("merchant_id", $("#merchant_id").val());
    $.ajax({
        type: "POST",
        url: "merchant-submit.php",
        data: formData,
        success: function() {
            alert("Your merchant has been created successfully.");
            $('#merchant-create-merchant-modal').modal('hide');
            merchantTable.ajax.reload();
            },
        cache: false,
        contentType: false,
        processData: false
    });
});
</script>
