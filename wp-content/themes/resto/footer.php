<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resto
 */

?>

	</div><!-- #content -->

<!--	<footer id="colophon" class="site-footer">-->
<!--		<div class="site-info">-->
<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'resto' ) ); ?><!--">--><?php
//				/* translators: %s: CMS name, i.e. WordPress. */
//				printf( esc_html__( 'Proudly powered by %s', 'resto' ), 'WordPress' );
//			?><!--</a>-->
<!--			<span class="sep"> | </span>-->
<!--			--><?php
//				/* translators: 1: Theme name, 2: Theme author. */
//				printf( esc_html__( 'Theme: %1$s by %2$s.', 'resto' ), 'resto', '<a href="http://underscores.me/">PhatLe</a>' );
//			?>
<!--		</div><!-- .site-info -->-->
<!--	</footer><!-- #colophon -->-->



<footer>
    <div class="container clearfix">
        <div class="row">
            <article class="span3 pull-right">
                <div class="box-newsletter"> <strong>Brochure:</strong>
                    <a href="#" target="_blank" class="link-brochure">download brochure</a>
                </div>
            </article>
            <article class="span1_5 pull-right offset-r">
                <ul class="list-footer">
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Coverage Areas</a></li>
                </ul>
            </article>
            <article class="span1_5 pull-right">
                <ul class="list-footer">
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Email Us</a></li>
                </ul>
            </article>
            <article class="span1_5 pull-right">
                <ul class="list-footer">
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                </ul>
            </article>
            <article class="span3"> <img src="<?php echo(get_template_directory_uri()); ?>/shipsun.com/img/logo-footer.png" alt="" class="logo-footer"/>
                <!--div class="privacy">&copy; 2013
                      <a href="#">Privacy policy</a> &nbsp;<!-- {%FOOTER_LINK} -->
                <!--/div-->
                <div class="clear"></div>
            </article>
        </div>
    </div>
</footer>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
