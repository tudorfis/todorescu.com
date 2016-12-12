  </div> <!-- EOF WRAPPER -->

  <footer id="footer">

  	<div class="widget-area">
  	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Area One')) : ?><?php endif; ?>
  	</div>

  	<div class="widget-area widget-central">
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Area Two')) : ?><?php endif; ?>
		</div>

		<div class="widget-area">
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Area Three')) : ?><?php endif; ?>
		</div>

		<div class="clearer"></div>

  </footer>

<?php wp_footer(); ?>
</body>
</html>
