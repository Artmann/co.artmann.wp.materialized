				</div>

				<div class="col m3 offset-m1 show-on-medium-and-up sidebar">
					<div class="top">
						<?php get_search_form(true); ?>
						<div class="social-box">
							<div class="bg"></div>
							<?php $url = urlencode('//'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]); ?>
							<a href="https://www.facebook.com/sharer/sharer.php?m2w&p[url]=<?php echo $url; ?>" target="_blank">
								<img class="sicon" src="<?php bloginfo('stylesheet_directory'); ?>/images/fbicon.png" />
							</a>
							<a target="_blank" href="http://twitter.com/share?url=<?php echo $url; ?>">
	              <img class="sicon" src="<?php bloginfo('stylesheet_directory'); ?>/images/tw-icon.png" />
							</a>
							<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>">
    	          <img class="sicon" src="<?php bloginfo('stylesheet_directory'); ?>/images/li-icon.png" />
							</a>
						</div>
					</div>
					<div class="widgets">
						<?php get_sidebar(); ?>
					</div>
					<div class="bottom">
						<div class="twitter-btn">
						<a href="https://twitter.com/ChrisArtmann" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @ChrisArtmann</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							<br/>
						</div>
					</div>
				</div>

			</div>
		</div>
	</body>
</html>
