<?php

/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php if ($price_html = $product->get_price_html()) : ?>

	<span class="dspark" style="font-family:'Montserrat';
					font-size: 13px;">
		Đầm Sen Park</span>

	<div class="card-body">

		<span class="date" style="	position: static;
		font-family: 'Montserrat';
		font-size: 13px; 
		color: #444444;">
			<i class='far fa-calendar-alt' style='font-size:16px;color: #ED7200;'></i>
			30/05/2021 - 01/06/2021
		</span>

		<span class=" price" style="position: static;
		font-size: 26px;
		color: #FA7D09;
		font-family: ' Montserrat'; 
		font-style: normal; 
		font-weight: bold; "> <?php echo $price_html; ?> VNĐ</span>

		<a class="badge btn-danger" >Xem chi tiết</a>
	</div>
<?php endif; ?>