
<header>
		<h1><a href="<?php echo $rootPath; ?>" class="home-link">TPLINKGUAYANA.COM - CONECTATE A LA ERA DIGITAL</a></h1>
		<nav class="header__nav">
			<select name="" id="header__nav-select" class="nav-link__info">
				<option value="">categorías</option>
				

		<?php
			foreach($arrCategories as $categorie){
				echo "<option value='{$categorie}'>{$categorie}</option>";
			}
		?>

			</select>
			<a href="promo" class="header__nav-link"><img class="link__icon"src="<?php echo $rootPath; ?>/public/images/price-tag.png" alt="promo products"><span class="nav-link__info">Promo</span></a>
			<a href="new" class="header__nav-link"><img class="link__icon"src="<?php echo $rootPath; ?>/public/images/new-product.png" alt="new products" ><span class="nav-link__info">Nuevos</span></a>
		</nav>
	</header>
		<nav class="navbar" id="navbar">
			<a href="<?php echo $rootPath; ?>" class="logo-link"><img src="<?php echo $rootPath; ?>/public/images/logo.png" alt="tp-link Guayana" title="tp-link Guayana" class="logo">
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
					
					foreach ($arrBrands as $brand) {
						echo "<a href='{$rootPath}/company/". $brand["NAME"]."'><img class='company-logo'src='$rootPath /public/images/company-logos/".$brand['IMAGE']. "' alt='". $brand['NAME']. "'></a>";	
					}
				?>
			</div>
			<h3 class="attributions"><a href="<?php echo $rootPath."/atribuciones.html" ?>">Atribuciones</a></h3>
		</nav>
