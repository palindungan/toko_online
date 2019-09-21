<!-- Begin Li's Breadcrumb Area -->
<?php $this->load->view("view_tamu/konten/login_register/_partials/breadcrumb.php") ?>
<!-- Li's Breadcrumb Area End Here -->

<!-- Begin Login Content Area -->
<div class="page-section mb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">

                <!-- Login Form start area-->
                <?php $this->load->view("view_tamu/konten/login_register/_partials/login.php") ?>
                <!-- Login Form end here -->

            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">

                <!-- Register Form start area-->
                <?php $this->load->view("view_tamu/konten/login_register/_partials/register.php") ?>
                <!-- Register Form end here -->

            </div>
        </div>
    </div>
</div>
<!-- Login Content Area End Here -->