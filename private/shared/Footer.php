
<!-- copyright -->
<div class="footer-w3layouts">
    <!--<div class="container">-->
        <div class="agile-copy">
            <p>© 2017 Travel Adventure. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>

        <div class="clearfix"></div>
    <!--</div>-->
</div>
<!-- copyright -->

<script>
        var editor = new wysihtml5.Editor("wysihtml5-editor", {
        toolbar:     "wysihtml5-editor-toolbar",
        stylesheets: ["http://yui.yahooapis.com/2.9.0/build/reset/reset-min.css", "<?php echo url_for('stylesheets/css/editor.css');?>"],
        parserRules: wysihtml5ParserRules
      });
      
      editor.on("load", function() {
        var composer = editor.composer;
        composer.selection.selectNode(editor.composer.element.querySelector("h1"));
      });
    </script>

 <!-- Default-JavaScript-File -->
        <script type="text/javascript" src="<?php echo url_for('stylesheets/js/jquery-2.1.4.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo url_for('stylesheets/js/bootstrap.js');?>"></script>
        <script type="text/javascript" src="<?php echo url_for('stylesheets/js/FileSaver.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo url_for('stylesheets/js/tableexport.min.js');?>"></script>
        <!-- //Default-JavaScript-File -->

        <!-- gallery plugin -->
        <!--<script type="text/javascript" src="<?php // echo url_for('stylesheets/js/simple-lightbox.min.js');?>"></script>-->
<!--        <script>
            $(function () {
                var gallery = $('.w3gallery-grids a').simpleLightbox({
                    navText: ['&lsaquo;', '&rsaquo;']
                });
            });

        </script>-->
        <!-- //gallery plugin -->

        <!-- ji slider -->
        <!-- banner js script -->
        <script src="<?php echo url_for('stylesheets/js/JiSlider.js');?>"></script>
        <script>
            $(window).load(function () {
                $('#JiSlider').JiSlider({
                    color: '#fff',
                    start: 3,
                    reverse: true
                }).addClass('ff')
            })

        </script>
<!--        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>-->
        <!-- //ji slider -->
        <!-- //banner js script -->

        <!-- for-Testimonials -->
        <!--<script defer src="<?php // echo url_for('stylesheets/js/jquery.flexslider.js');?>"></script>-->
        <!--Start-slider-script-->
<!--        <script type="text/javascript">
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });

        </script>-->
        <!--End-slider-script-->
        <!-- //for-Testimonials -->

        <!--<script type="text/javascript" src="<?php // echo url_for('stylesheets/js/numscroller-1.0.js');?>"></script>-->
        <!-- numscroller js file -->

        <!-- smooth scrolling -->
        <!--<script src="<?php // echo url_for('stylesheets/js/SmoothScroll.min.js');?>"></script>-->
        <!--<script type="text/javascript" src="<?php // echo url_for('stylesheets/js/move-top.js');?>"></script>-->
        <!--<script type="text/javascript" src="<?php // echo url_for('stylesheets/js/easing.js');?>"></script>-->
        <!-- here stars scrolling icon -->
<!--        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });

        </script>-->
        <!-- //here ends scrolling icon -->
        <!-- smooth scrolling -->

        <!-- scrolling script -->
<!--        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });

        </script>-->
        <!-- //scrolling script -->

<!--        <script src="<?php // echo url_for('stylesheets/js/jquery.vide.min.js');?>"></script>-->
        <!-- video js file -->

