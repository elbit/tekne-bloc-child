<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _s
 * @since _s 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer well" role="contentinfo">
		
		<div class="site-info module-footer ">
			<ul class="address list-unnestyled" itemscope itemtype="http://data-vocabulary.org/Organization">    
	         	<li itemprop="brand"><a href="http://teknecultura.com" itemprop="url"><img src="wp-content/themes/tekne-bloc-0.8/img/teknelogo-beta-0.6.png" alt="home"></a></li>
	          	<li itemprop="email">info@teknecultura.com</li>
	          	<ul itemprop="address list-unnestyled" itemscope itemtype="http://data-vocabulary.org/Address">
		            <li itemprop="street-address">Vidal i Ribas 25</li>
		            <li itemprop="locality">Sant Feliu de Llobregat</li>
		            <li itemprop="postal-code">08980</li> 
		            <li itemprop="region">Barcelona</li>
		            <li itemprop="country-name" class="hidden">Spain</li>
         		</ul>
          		<li itemprop="tel" href="939853242">93 985 32 42</li>
      		</ul>
		</div><!-- .site-info -->
		
		<div class="module-footer" role="site map"> 
		
			 <nav class="menu menu-footer">
            <a  href="que.php"> Què </a>
            <a href="com.php"> Com</a>
            <a href="qui.php"> Qui</a>
            <a href="blog.php"> Bloc...</a>
            <a href="mailto:info@teknecultura.com"> Contacte</a>
            <a class="to-top" href="#top">&#11014; Puja &#11014;</a>
        </nav>
		
		</div>
		<div class="module-footer"> </div>
		
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>



</body>
</html>