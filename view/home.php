<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no,initial-scale=1.0" />
	<title>Tp-link Guayana - Inicio </title>
	<link rel="stylesheet" href="./public/css/styles.css">
</head>
<body>
	<header>
		<h1><a href="" class="home-link">TPLINKGUAYANA.COM - CONECTATE A LA ERA DIGITAL</a></h1>
		<nav class="header__nav">
			<select name="" id="header__nav-select" class="nav-link__info">
				<option value="">categorías</option>
				

		<?php
			foreach ($arrCategories as $category) {
				echo "<option value='". $category."'>". $category."s</option>";
			}

		?>

			</select>
			<a href="promo" class="header__nav-link"><img class="link__icon"src="https://static.thenounproject.com/png/1570916-200.png" alt="promo products"><span class="nav-link__info">Promo</span></a>
			<a href="new" class="header__nav-link"><img class="link__icon"src="https://image.flaticon.com/icons/png/512/40/40058.png" alt="new products" ><span class="nav-link__info">Nuevos</span></a>
		</nav>
			</header>
		<nav class="navbar" id="navbar">
			<a href="https://localhost/tp-link-guayana" class="logo-link"><img src="public/images/logo.png" alt="tp-link Guayana" title="tp-link Guayana" class="logo">
			</a>
			<form class="navbar__search-form">
				<input type="search" placeholder="Buscar producto" autocomplete="off" class="search__form-input" name="search">
				<button class="icon-search search__form-submit" type="submit"></button>
			</form>
			<p class="nav-info">Tp-Link - Ultracell</p>
			<p class="nav-info icon-user">Ingresar</p>
			<p class="nav-info icon-basket">Pedidos</p>
			<p class="nav-info icon-phone">Contactanos</p>
			<div class="logo-container">
				<?php
					
					foreach ($modelLogo->getData("SELECT * FROM COMPANIES") as $logo) {
						echo "<a href='company/". $logo["name"]."'><img class='company-logo'src='public/images/company-logos/".$logo['image']. "' alt='". $logo['name']. "'></a>";	
					}
				?>
			</div>
			
		</nav>

		<main>
			<section class='products'>
				<figure class='product'>
					<a href='' class='product__link'>
						<div class="product__image-container">
							<img src='https://conceptodefinicion.de/wp-content/uploads/2014/10/Laptop-2.jpg' alt='' class='product__img'>
							<span class="new">new</span>
							<span class="promo">promo</span>
						</div>
						<hr>
						<figcaption class='product__name'>Laptop HP 14 64GB</figcaption>
						<span class='product__company'>Marca: COMPUTACIÓN</span>
						<br>
						<span class='product__price'>30,00 USD <span class='price-usd'></span> ~ <span class='price-bs'>96.915.000,00 Bs</span></span>
						<br>
						<span class='product__stock'>Disponible: 1</span>
					</a>
				</figure>
				
			<?php
			foreach ($modelProducts->getData("SELECT * FROM PRODUCTS") as $product) {
				echo "
				<figure class='product'>
					<a href='product/".$product["id"]."' class='product__link'>
						<div class='product__image-container'>

							<img src='public/images/products/" .$product['photo']. "' alt='". $product["name"]  ."' class='product__img'>
							";

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


		<footer>
			<p class="footer__p">Tp-link Guayana &copy; </p>
		</footer>
		<button class="hamburger hamburger--vortex" id="panel-btn" >
  			<span class="hamburger-box">
    			<span class="hamburger-inner"></span>
		  	</span>
		</button>
		<a id="ws-btn"><img class="ws-img" src="public/images/whatsapp-icon.png" alt=""></a>
	<script src="./public/js/index.js" type="module"></script>
</body>
</html>