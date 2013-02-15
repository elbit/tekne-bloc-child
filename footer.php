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

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<div class="well module-footer">
        <ul class=" address " itemscope itemtype="http://data-vocabulary.org/Organization">
              <li itemprop="brand">
                <a href="http://teknecultura.com" itemprop="url">
                  <img src="img/teknelogo-beta-0.6.png" alt="home">
                </a>
              </li>
              <br/>
              <li itemprop="email"><a href="mailto:info@teknecultura.com">info@teknecultura.com</a></li>
              <ul itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
                <li itemprop="street-address">Vidal i Ribas 25</li>
                <li itemprop="locality">Sant Feliu de Llobregat</li>
                <li itemprop="postal-code">08980</li> 
                <li itemprop="region">Barcelona</li>
                
              </ul>
              <li><a itemprop="tel" href="tel:936853242" class="important">936 853 242</a></li>
        </ul>
      </div>
      
      <div class=" module-footer  well hidden-phone">
              <img src="img/mailing3.png">
      
        <div class="navbar-inner cta cta-footer">

             <form action="http://produccionscontrabaix.us5.list-manage.com/subscribe/post?u=df5f9aafe375682bc4f69b46d&amp;id=2405a54f28" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate navbar-form" target="_blank" novalidate>
              <h2 class="cta-lema">Subscriu-te al bloc i rep informació:</h2>
              <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="el teu e-mail" required>
              <input type="submit" value="Subscriu-te" name="Subscriu-te" id="mc-embedded-subscribe" class="btn btn-info btn-block">
            </form>
        </div>
        
        
      </div>
      
      <div class="module-footer well xarxes no-margin-right hidden-phone">
      
        
         <!--<a class="twitter-timeline"  height="350"href="https://twitter.com/teknecultura" data-widget-id="301042086843662338">Tuits de @teknecultura</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>-->



      </div>
    <div>
    
    <nav class="menu menu-footer well" role="menu">
            <!-- <span class="half-width float-left"> -->
              <a  href="que.php"> Què </a>
              <a href="com.php"> Com</a>
              <a href="qui.php"> Qui</a>
          <!--   </span> -->
            <!-- <span class="half-width float-left"> -->
              <a href="blog.php"> Bloc...</a>
              <a href="contacte.php"> Contacte</a>
              <a class="to-top no-margin-right" href="#top">&#11014; Puja &#11014;</a>
           <!--  </span> -->
        </nav>
      
      
    </div>
 
		
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>



</body>
</html>