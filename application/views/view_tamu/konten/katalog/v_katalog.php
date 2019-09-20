<!-- Begin Li's Breadcrumb Area -->
<?php $this->load->view("view_tamu/konten/katalog/_partials/breadcrumb.php") ?>
<!-- Li's Breadcrumb Area End Here -->

<!-- Begin Li's Content Wraper Area -->
<div class="content-wraper pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-1 order-lg-2">

                <!-- Begin Li's Banner Area -->
                <div class="single-banner shop-page-banner">
                    <a href="#">
                        <img src="<?= base_url() ?>assets/limupa/images/bg-banner/2.jpg" alt="Li's Static Banner">
                    </a>
                </div>
                <!-- Li's Banner Area End Here -->

                <!-- shop-top-bar start -->
                <?php $this->load->view("view_tamu/konten/katalog/_partials/top_bar.php") ?>
                <!-- shop-top-bar end -->

                <!-- shop-products-wrapper start -->
                <?php $this->load->view("view_tamu/konten/katalog/_partials/product.php") ?>
                <!-- shop-products-wrapper end -->

            </div>
            <div class="col-lg-3 order-2 order-lg-1">

                <!-- left_sidebar start -->
                <?php $this->load->view("view_tamu/konten/katalog/_partials/left_sidebar.php") ?>
                <!-- left_sidebar end-->

            </div>
        </div>
    </div>
</div>
<!-- Content Wraper Area End Here -->