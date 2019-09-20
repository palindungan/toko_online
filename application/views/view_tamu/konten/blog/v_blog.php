<!-- Begin Li's Breadcrumb Area -->
<?php $this->load->view("view_tamu/konten/blog/_partials/breadcrumb.php") ?>
<!-- Li's Breadcrumb Area End Here -->

<!-- Begin Li's Main Blog Page Area -->
<div class="li-main-blog-page pt-60 pb-55">
    <div class="container">
        <div class="row">

            <!-- Begin Li's Blog Sidebar Area -->
            <?php $this->load->view("view_tamu/konten/blog/_partials/sidebar.php") ?>
            <!-- Li's Blog Sidebar Area End Here -->

            <!-- Begin Li's Main Content Area -->
            <div class="col-lg-9 order-lg-2 order-1">
                <div class="row li-main-content">

                    <!-- blog list Start Area -->
                    <?php $this->load->view("view_tamu/konten/blog/_partials/blog_list.php") ?>
                    <!-- blog list End Here -->

                    <!-- Begin Li's Pagination Area -->
                    <?php $this->load->view("view_tamu/konten/blog/_partials/pagination.php") ?>
                    <!-- Li's Pagination End Here Area -->

                </div>
            </div>
            <!-- Li's Main Content Area End Here -->

        </div>
    </div>
</div>
<!-- Li's Main Blog Page Area End Here -->