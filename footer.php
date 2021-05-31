<div class="container">
	<div class="row">
		<div class="col-md-6">
			<p>&copy; All right revarsed</p>
		</div>
		<div class="col-md-6">
			<?php 
				wp_nav_menu(array(
					"theme_location" => "footermenu",
					"menu_id" => "footercontainer",
					"menu_class" => "list-inline"
				));
			?>
		</div>
	</div>
</div>
<?php wp_footer()?>
</body>
</html>