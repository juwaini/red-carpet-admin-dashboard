<div id="body" class="col-md-10">
<div class="tab-content"><!-- .tab-content -->

<!-- PROMO SECTION BEGIN-->
<div role="tabpanel" class="tab-pane fade in active" id="promo"><!-- .tab-pane #promo -->

<div id="promo-header" class="row"><form class="form-inline" role="form"><!-- id="promo-header" -->
<div class="col-md-3">
    <button id="create-new-voucher" data-toggle="modal" data-target="#promo-create-voucher-modal" type="button" class="btn btn-block btn-primary">
    <span class="glyphicon glyphicon-plus"></span> Create New Voucher </button>
</div>
<div class="col-md-6">&nbsp;</div>
</form></div><!-- id="promo-header"-->
<!-- end of promo/index.php header -->

<!-- for promo/index.php tabledata -->
<br>
<div><table id="promo-table" class="table table-bordered table-hover">
    <thead><tr>
	<th>ID</th>
	<th>Voucher Name</th>
	<th>Merchant</th>
	<th>Created Date</th>
	<th>Published Date</th>
	<th>Status</th>
	<th>PIC</th>
	<th>Action</th>
    </tr></thead>
</table></div>
<!-- end of promo/index.php tabledata -->

</div><!-- .tab-pane #promo-->
<!-- PROMO SECTION END -->

<!-- MERCHANT SECTION BEGIN-->
<div role="tabpanel" class="tab-pane fade in" id="merchant"><!-- .tab-pane #merchant -->

<!-- merchant-index.php header begin -->
<div id="merchant-header" class="row"><!-- id="merchant-header" -->
<form class="form-inline" role="form"><!-- class="form-inline" -->
    <div class="col-md-3">
        <button id="create-new-merchant" type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#merchant-create-merchant-modal">
        <span class="glyphicon glyphicon-plus"></span> Create New Merchant
        </button>
    </div><!-- class="col-md-3" -->
	<div class="col-md-6">&nbsp;</div>
</form><!--class="form-inline"-->
</div><!-- id="merchant-header"-->
<br>
<!-- merchant-index.php header end -->

<!-- for merchant-index.php tabledata -->
<div><table id="merchant-table" class="table table-bordered table-hover">
    <thead><tr>
	<th>ID</th>
	<th>Merchant Name</th>
	<th>Merchant's PIC</th>
	<th>PIC Email</th>
	<th>PIC Contact</th>
	<th>Total Promos</th>
    <th>Status</th>
	<th>Action</th>
    </tr></thead>
</table></div><!--id="merchant-table"-->
<!-- end of promo/index.php tabledata -->

</div><!-- .tab-pane #merchant -->

<!-- MERCHANT SECTION END -->


<!-- CATEGORY SECTION BEGIN -->

<div role="tabpanel" class="tab-pane fade in" id="category"><!-- .tab-pane #category -->

<div id="category-header" class="row"><!-- #category-header .row -->
<form class="form-inline" role="form"><!-- .form-inline -->
    <div class="col-md-3"><!-- .col-md-3 -->
        <button data-toggle="modal" data-target="#category-create-category-modal" id="create-new-category" type="button" class="btn btn-block btn-primary">
            <span class="glyphicon glyphicon-plus">
            </span>Create New Category
        </button>
    </div><!-- .col-md-3 -->
    <div class="col-md-9">
        &nbsp;
    </div><!-- .col-md-9 -->
</form><!-- .form-inline -->
</div><!-- #category-header .row -->

<br>
<div><table id="category-table" class="table table-bordered table-hover"><!-- #category-table -->
    <thead><tr>
    <th>ID</th>
	<th>Category</th>
	<th>Sub Category</th>
	<th>Category Icon</th>
	<th>Status</th>
	<th>Action</th>
    </tr></thead>
</table></div><!-- tabledata -->
</div><!-- .tab-pane #category -->

<!-- CATEGORY SECTION END -->


<!-- REPORTS SECTION BEGIN -->

<div role="tabpanel" class="tab-pane fade in" id="reports"><!-- .tab-pane #reports -->

<div id="reports-header" class="row">
<form class="form-inline" role="form">
    <div class="col-md-9">&nbsp;</div>
</form>
</div><!-- #reports-header -->

<!-- for reports/index.php tabledata -->
<br>
<div><table id="reports-table" class="table table-bordered table-hover">
    <thead><tr>
	<th>Voucher</th>
	<th>Merchant</th>
	<th>Expiry Date</th>
	<th>Quantity</th>
	<th>No. of View</th>
	<th>Redeemed</th>
	<th>Used</th>
	<th>Details Reports</th>
    </tr></thead>
</table></div><!-- #reports-table .table -->
</div><!-- .tab-pane #reports -->

</div><!-- .tab-content -->
</div><!-- #body .col-md-10 -->

<script>
    promoTable = $('#promo-table').DataTable();
    promoTable.ajax.url("include/lib/generatetable.php?q=promo").load();
    
    merchantTable = $('#merchant-table').DataTable(); 
    merchantTable.ajax.url("include/lib/generatetable.php?q=merchant").load();
    
    categoryTable = $('#category-table').DataTable(); 
    categoryTable.ajax.url("include/lib/generatetable.php?q=category").load();

    reportsTable = $('#reports-table').DataTable();
    reportsTable.ajax.url("include/lib/generatetable.php?q=reports").load();
</script>
