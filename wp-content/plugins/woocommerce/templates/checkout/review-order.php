<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="payment-right">
    <tbody data-order-summary-section="line-items">
		<?php
		do_action( 'woocommerce_review_order_before_cart_contents' );

		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				?>
                        <div style="display: flex; justify-content: space-between;">
                            <div class="product__image">
                                <div class="product-thumbnail ">
                                    <div style="width: 100%; height: 100%; position: relative; overflow: hidden; border-radius: 8px; background-color: #fafafa; z-index: 1;">
										<!-- <img alt="NU:RO Watch with black leather band" class="product-thumbnail__image" src="https://d3n32ilufxuvd1.cloudfront.net/54fdf5843f7907fd4dcf89ce/1171046/upload-4b3e86b0-c06c-11e8-bfcb-1de5a26270df.jpg"> -->
										<?php $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

										if ( ! $product_permalink ) {
											echo $thumbnail; // PHPCS: XSS ok.
										} else {
											printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
										}
										?>
									</div>
									<?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', '<span class="product-thumbnail__quantity" aria-hidden="true">' . sprintf(  $cart_item['quantity'] ) . '</span>', $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                                    <!-- <span class="product-thumbnail__quantity" aria-hidden="true">1</span> -->
                                </div>

                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <p class="product__description">
                                    <span class="product__description__name order-summary__emphasis">
                                    <?php if ( ! $product_permalink ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
						} else {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
						}

						do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

						// Meta data.
                        echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.
                        ?>  
                                    </span>
                                    <span class="product__description__variant order-summary__small-text"></span>

                                </p>
                                <p class="product__price">
                                    <span class="order-summary__emphasis skeleton-while-loading"><?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?></span>
                                </p>
                            </div>
                        </div>
                        <div style="border-top: 1px solid #cacaca; padding: 24px 0px; margin-top: 3px">
                            <div style="display: flex; justify-content: space-between;">
                                <span>Subtotal</span>
                                <span><?php echo wc_get_formatted_cart_item_data( $cart_item ); ?></span>
                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <span >Shipping</span>
                                <span>Calculated at next step</span>
                            </div>
                        </div>
                        <div style="border-top: 1px solid #cacaca; padding: 24px 0px; margin-top: 3px">
                            <div style="display: flex; justify-content: space-between;">
                                <span>Total</span>
                                <div>
                                    <span>USD</span>
                                    <span>$<?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
                                </div>
                            </div>
                        </div>

			<?php
			}
		}

		do_action( 'woocommerce_review_order_after_cart_contents' );
		?>
	</tbody>
</div>

