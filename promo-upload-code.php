<!-- NAV TABS BEGIN -->
<ul class="nav nav-tabs" role="tablist">
    <li id="promo-upload-code-nav" role="presentation" class="active"><a href="#promo-upload-code" role="tab"><strong>Promo - Upload Code</strong></a></li>
</ul>
<!-- NAV TABS END -->    

<!-- TAB CONTENT BEGIN -->
<div class="tab-content"><!-- .tab-content -->

<!-- VIEW BEGIN -->
<div role="tabpanel" class="tab-pane active" id="promo-upload-code"><!-- .tab-pane #promo-view -->

<form id="promo-upload-code-form" class="form-horizontal" role="form"><br><!-- "#promo-view-form" -->
        <div class="form-group">    
            <label for="voucher_design" class="col-sm-2 control-label">Voucher Design</label>
            <img class="col-sm-6 control-label" id="voucher_design_upload" src="">
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label"><u>VOUCHER SUMMARY</u></label>
            <label for="" class="col-sm-2 control-label">&nbsp;</label>
            <label for="" class="col-sm-3 control-label"><u>MERCHANT SUMMARY</u></label>
            <label for="" class="col-sm-2 control-label">&nbsp;</label>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Promo ID:</label>
            <p class="col-sm-3" id="promo_id_upload">&nbsp;</p>
            <label for="" class="col-sm-2 control-label">Merchant Code:</label>
            <p class="col-sm-3" id="merchant_code_upload">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Title:</label>
            <p class="col-sm-3" id="voucher_name_upload">&nbsp;</p>
            <label for="" class="col-sm-2 control-label">Merchant Name:</label>
            <p class="col-sm-3" id="promo_merchant_name_upload">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description:</label>
            <p class="col-sm-3" id="voucher_description_desktop_upload">&nbsp;</p>
            <label for="" class="col-sm-2 control-label">Participating Outlets:</label>
            <p class="col-sm-3" id="selecting_outlets_upload">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Group:</label>
            <p class="col-sm-3" id="voucher_group_upload">&nbsp;</p>
            <label for="" class="col-sm-2 control-label">Outlets Listing:</label>
            <p class="col-sm-3" id="merchant_outlet_listing_upload">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Category:</label>
            <p class="col-sm-3" id="voucher_category_upload">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Value Price:</label>
            <p class="col-sm-3" id="voucher_value_upload">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Quantity:</label>
            <p class="col-sm-3" id="voucher_quantity_upload">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Expiry Date:</label>
            <p class="col-sm-3" id="voucher_expiry_date_upload">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Terms &amp; Conditions:</label>
            <p class="col-sm-3" id="terms_and_conditions_upload">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Types of Delivery:</label>
            <p class="col-sm-3" id="types_of_delivery_upload">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Requested Publish Date:</label>
            <p class="col-sm-3" id="voucher_publish_date_upload">&nbsp;</p>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">File Code Upload:</label>
            <div class="col-sm-4">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                <span class="btn btn-default btn-file">
                    <span class="fileinput-new">Select file</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="file_code_upload" id="file_code_upload">
                </span>
                <span class="fileinput-filename"></span>
                <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" id="promo-upload-code-upload-code" class="btn btn-primary">Upload Code</button>
        </div><!-- .modal-footer -->

</form><!-- "#promo-voucher-details-form" -->
</div><!-- .tab-pane #promo-preview -->

</div><!-- .tab-content -->
<!-- TAB CONTENT END -->

<script>
$('#promo-upload-code-upload-code').on('click', function(event){
    var code_file = $('#file_code_upload')[0].files[0];
    if(code_file)
    {
        var fileReader = new FileReader();
        var formData = new FormData();

        fileReader.onload = function(e) {
            var text = fileReader.result;
            var voucher_code = text.split('\n');
            var x;
            var voucher_list = [];
            for (x in voucher_code)
            {
                var single_voucher;
                if(voucher_code[x].trim() !== '')
                {
                   single_voucher =  {voucher_id:voucher_code[x].trim(), voucher_status:"available"};
                   voucher_list.push(single_voucher);
                }
            }
            formData.append('voucher_list', JSON.stringify(voucher_list));
            formData.append('promo_id', $('#promo_id_upload').text());
            $.ajax({
                type: "POST",
                url: "promo-code-submit.php",
                data: formData,
                success: function(data) {
                        alert("Your voucher code has been successfully uploaded.");
                        $('#promo-upload-code-modal').modal('hide');
                        promoTable.ajax.reload();
                        reportsTable.ajax.reload();
                    },
                cache: false,
                contentType: false,
                processData: false
            });

        };
        
        fileReader.readAsText(code_file);
    }
    else
    {
        alert("Please upload the code...");
    }
});
</script>
