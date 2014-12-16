
<% if getFeaturedProducts() %>
	<div class="featured-products">
		<% loop getFeaturedProducts(6) %>
			<a class="featured-product" href="$Link">
				<img src="$Image.CroppedImage(200,200).URL" alt="$Title" />
				<span class="title">$Title</span>
			</a>
		<% end_loop %>
	</div>
<% end_if %>