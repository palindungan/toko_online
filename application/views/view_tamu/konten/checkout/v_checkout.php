<!-- Begin Li's Breadcrumb Area -->
<?php $this->load->view("view_tamu/konten/checkout/_partials/breadcrumb.php") ?>
<!-- Li's Breadcrumb Area End Here -->

<!--Checkout Area Strat-->
<div class="checkout-area pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="coupon-accordion">

                    <!-- dropdown start area -->
                    <?php $this->load->view("view_tamu/konten/checkout/_partials/dropdown.php") ?>
                    <!-- dropdown end here -->

                </div>
            </div>
        </div>
        <div class="row">

            <!-- left start area -->
            <?php $this->load->view("view_tamu/konten/checkout/_partials/left.php") ?>
            <!-- left end here -->

            <!-- right start area -->
            <?php $this->load->view("view_tamu/konten/checkout/_partials/right.php") ?>
            <!-- right end here -->

        </div>
    </div>
</div>
<!--Checkout Area End-->