<!doctype html>
<html class="no-js" lang="zxx">

<!-- index-431:41-->

<head>
    <!-- Begin Head area-->
    <?php $this->load->view("view_tamu/_partials/head.php") ?>
    <!-- Head End Here -->
</head>

<body>

    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Begin Body Wrapper area -->
    <div class="body-wrapper">

        <!-- Begin Header Area -->
        <?php $this->load->view("view_tamu/_partials/header.php") ?>
        <!-- Header Area End Here -->

        <!-- Begin Konten area-->
        <?php echo $contents; ?>
        <!-- Konten End Here -->

        <!-- Begin Footer Area -->
        <?php $this->load->view("view_tamu/_partials/footer.php") ?>
        <!-- Footer Area End Here -->

    </div>
    <!-- Body Wrapper End Here -->

    <!-- Begin JavaScript area -->
    <?php $this->load->view("view_tamu/_partials/javascript.php") ?>
    <!-- JavaScript End Here -->

</body>

<!-- index-431:47-->

</html>