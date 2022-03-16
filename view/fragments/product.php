
		<main>
			<section class="products">

			<?php
			
				echo "
				<figure class='product product-item'>
						<div class='product__image-container'>
							<img src='".$rootPath ."/public/images/products/"  .$product["photo"]  .   "' class='product__img'>";

								
							echo ($product['new']) ?"<span class='new'>new</span>":"";
							
							echo ($product['promo']) ?"<span class='promo'>promo</span>":"";
							
						echo "</div>
						<hr>
						<figcaption class='product__name'>".$product["name"]. "</figcaption>
						<span class='product__company'> Marca:". $product["company"]."</span>
						<br>
						<span class='product__price'>". $product["price"]."$<span class='price-usd'></span> ~ <span class='price-bs'>96.915.000,00 Bs</span></span>
						<ul class='product__details'>";
						
						foreach ($product["about"] as $key) {
							echo "<li>". $key.".</li>";
						}
						
						echo"
						</ul>
						<br>
						<span class='product__stock'>Disponible: ".$product['stock']."</span>
						<br><button class='btn__buy-product'>Comprar</button>

				</figure>";
			
			?>
			</section>
		</main>
