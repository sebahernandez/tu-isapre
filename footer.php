<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tu-isapre
 */

?>
<footer class="site-footer" id="colophon">
    <div class="site-info">
        <div class="container">
            <div class="row oficinas">
                <div class="col-md-3">
                    <p><?php the_custom_logo(); ?></p>
                </div>
                <div class="col-md-3">
                    <h5 class="text-white">CONTÁCTANOS:</h5>
                    <p class="pr-3">
                        <a href="tel:+56942768730"><i class="fa fa-whatsapp" aria-hidden="true"></i> +56 9 4276 8730</a>
                    </p>
                    <p class="pr-3">
                        <a href="tel:56 9 4956 4333"><i class="fa fa-whatsapp" aria-hidden="true"></i> +56 9 4956 4333
                        </a></p>
                </div>
                <div class="col-md-6">
                    <h5 class="text-white">OFICINAS:</h5>
                    <p class="text-white"><i class="fa fa-map-marker" aria-hidden="true"></i> Av. Libertador Bernardo
                        O'higgins 1302, oficina 70, Santiago.</p>
                    <p class="text-white"><i class="fa fa-map-marker" aria-hidden="true"></i> Av. Providencia 1208,
                        oficina 207, Providencia.</p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- .site-info -->
</footer><!-- #colophon -->



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142388650-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-142388650-2');
</script>
<?php wp_footer(); ?>

</body>

</html>