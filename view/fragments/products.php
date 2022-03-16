
		<main>
			<section class='products'>

			<?php
				
			foreach ($arrProducts as $product) {
				echo "
				<figure class='product product-item'>
					<a href='{$rootPath}/product/".$product["id"]."' class='product__link'>
						<div class='product__image-container'>

							<img src='".$rootPath."/public/images/products/" .$product['photo']. "' alt='". $product["name"]  ."' class='product__img'>";

							echo ($product['new']) ?"<span class='new'>new</span>":"";
							
							echo ($product['promo']) ?"<span class='promo'>promo</span>":"";
			
						echo "
						</div>
						<hr>
						<figcaption class='product__name'>". $product['name'] ."</figcaption>
						<span class='product__company'>Marca: ". $product['company'] ."</span>
						<br>
							<span class='product__price'>". $product['price'] ." USD <span class='price-usd'></span> ~ <span class='price-bs'>96.915.000,00 Bs</span></span>
							<br>
							<span class='product__stock'>Disponible: ".$product['stock']."</span>
						</a>
					</figure>";
			}

			?>
			</section>


		</main>
