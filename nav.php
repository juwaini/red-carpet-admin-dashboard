<div class="col-md-2"><!-- for nav -->

    <ul id="navigation" class="nav nav-pills nav-stacked" role="tablist">
        <li role="presentation" class="active"><a role="tab" data-toggle="tab" href="#promo">Promo Summary</a></li>
        <li role="presentation"><a role="tab" data-toggle="tab" href="#merchant">Merchant Summary</a></li>
        <li role="presentation"><a role="tab" data-toggle="tab" href="#category">Category (Pillars)</a></li>
        <li role="presentation"><a role="tab" data-toggle="tab" href="#reports">Reports</a></li>
    </ul>
    <br>

    <ul id="logout" class="nav nav-pills nav-stacked">
    <li class="active"><a href="logout.php">Logout</a></ul>

</div><!-- end nav -->

<script>
$('#navigation.nav-pills li a').click(function() {
    var route = $(this).attr('href');
    $("#navigation.nav-pills li.active").removeClass("active"); 
    $(this).addClass("active"); 
});
</script>   
