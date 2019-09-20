<!-- Begin Li's Breadcrumb Area -->
<?php $this->load->view("view_tamu/konten/product_detail/_partials/breadcrumb.php") ?>
<!-- Li's Breadcrumb Area End Here -->

<!-- content-wraper start -->
<div class="content-wraper">
    <div class="container">
        <div class="row single-product-area">
            <div class="col-lg-5 col-md-6">

                <!-- Product Details Left -->
                <?php $this->load->view("view_tamu/konten/product_detail/_partials/left.php") ?>
                <!--// Product Details Left -->

            </div>

            <div class="col-lg-7 col-md-6">

                <!-- product details right -->
                <?php $this->load->view("view_tamu/konten/product_detail/_partials/right.php") ?>
                <!-- // product detail right -->

            </div>
        </div>
    </div>
</div>
<!-- content-wraper end -->

<!-- Begin Product Area -->
<?php $this->load->view("view_tamu/konten/product_detail/_partials/tab.php") ?>
<!-- Product Area End Here -->

<!-- Begin Li's Laptop Product Area -->
<?php $this->load->view("view_tamu/konten/product_detail/_partials/area.php") ?>
<!-- Li's Laptop Product Area End Here -->

<!-- Begin Quick View | Modal Area -->
<?php $this->load->view("view_tamu/_partials/quick_view.php") ?>
<!-- Quick View | Modal Area End Here -->