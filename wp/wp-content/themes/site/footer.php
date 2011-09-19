<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

	<div id="footer" role="contentinfo">
		<div class="siteinfo">
			<p class="grey">恫森文化传播有限公司 E-mail：concordmodel@gmail.com 　　　沪ICP备10203753号-1</p><p class="music-stop">Music off</p>
				<p class="music-play">Music on</p>
     	</div>
     	<div id="musicplayer"></div>
	</div><!-- #footer -->

</div><!-- #wrapper -->
<script type='text/javascript'>
 
 jQuery(function(){
jwplayer('musicplayer').setup({
  flashplayer: '/jwplayer/player.swf',
  file: '/music/bg.mp3',
  height: 1,
  width: 1,
  autoplay:true,
  events: {
  	onReady:function(){
  		jQuery('#musicplayer_wrapper').css('margin-left','-9999px')
  	}	
  }
 }); 
	jQuery('.music-play').hide();
 	jQuery('.music-stop').click(function(){
 		jwplayer('musicplayer').play();
 		jQuery(this).hide();
 		jQuery('.music-play').show();
 	});
 	
 	jQuery('.music-play').click(function(){
 		jwplayer('musicplayer').play();
 		jQuery(this).hide();
 		jQuery('.music-stop').show();
 	});
 });
</script>		
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
