<footer class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p>Todos os diretos reservados - Rafael Castro 2018</p>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/owlcarousel/owl.carousel.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/video.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    })

</script>


<?php wp_footer(); ?>
</body>

</html>
