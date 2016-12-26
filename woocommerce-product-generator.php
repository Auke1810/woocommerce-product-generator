<?php
/**
 * woocommerce-product-generator.php
 *
 * Copyright (c) 2014 "kento" Karim Rahimpur www.itthinx.com
 *
 * This code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
 *
 * This code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * This header and all notices must be kept intact.
 *
 * @author itthinx
 * @package woocommerce-product-generator
 * @since 1.0.0
 *
 * Plugin Name: WooCommerce Product Generator
 * Plugin URI: http://www.itthinx.com/
 * Description: A sample product generator for WooCommerce.
 * Version: 1.1.2
 * Author: itthinx, AukeJomm
 * Author URI: http://www.itthinx.com, http://www.wordpressassist.nl
 * Donate-Link: http://www.itthinx.com
 * License: GPLv3
 */

define( 'WOOPROGEN_PLUGIN_VERSION', '1.1.2' );
define( 'WOOPROGEN_PLUGIN_DOMAIN', 'woocommerce-product-generator' );
define( 'WOOPROGEN_PLUGIN_URL', WP_PLUGIN_URL . '/woocommerce-product-generator' );

/**
 * Product Generator.
 */
class WooCommerce_Product_Generator {

	const MAX_PER_RUN = 100;
	const DEFAULT_PER_RUN = 10;

	const IMAGE_WIDTH = 512;
	const IMAGE_HEIGHT = 512;

	const DEFAULT_LIMIT = 10000;

	const DEFAULT_TITLES =
'
ACME
Banana
Apple
Carrot
Tomato
Potato
Soy
Strawberry
Pumpkin
Juice
iPhone
Mac
Galaxy
Album
Jazz
Samsung
Motorola
Egg
Shampoo
Shower
Gel
Moustache
Bikini
Towel
Cool
CD
DVD
Movie
Shoe
Dress
Trouser
Knife
Doll
Download
Video
Book
Sword
Ring
Card
Princess
Prince
Car
Toy
Fire
HDMI
TV
Player
Film
Gift
Wet
Gun
Water
Beverage
Cola
Smoothie
Washer
Oven
Refrigerator
Internet
Heater
Cooler
Cleaner
Fish
Meat
Hair
Lotion
Mixer
Blender
Diamond
Perl
Thermal
Rooster
Chicken
Lamb
Hot
Cold
Microwave
Natural
Wood
Plastic
Chair
Table
Cover
Sheet
Bed
Cushion
Seat
Bike
Kit
Gold
Silver
Brass
Red
Green
Blue
Yellow
Black
White
Pink
Violet
Purple
Lime
Lavender
Brown
Grey
Small
Medium
Large
';

	const DEFAULT_CONTENTS = '
Lorem Ipsum Dolor Sit Amet
Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
Do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.
Nisi ut aliquid ex ea commodi consequatur?
Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam.
Do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Nisi ut aliquid ex ea commodi consequatur?
Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam.
Corrupti quos dolores et quas molestias excepturi sint occaecati.
Itaque earum rerum hic tenetur a sapiente delectus.
Non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.

You mean it controls your actions?
Partially, but it also obeys your commands. What?!
I suggest you try it again, Luke.
This time, let go your conscious self and act on instinct.
Escape is not his plan.
I must face him, alone.
I\'m surprised you had the courage to take the responsibility yourself.
Don\'t act so surprised, Your Highness.
You weren\'t on any mercy mission this time.
Several transmissions were beamed to this ship by Rebel spies.
I want to know what happened to the plans they sent you.
But with the blast shield down, I can\'t even see!
How am I supposed to fight?
I want to come with you to Alderaan.
There\'s nothing for me here now.
I want to learn the ways of the Force and be a Jedi, like my father before me.
Obi-Wan is here.
The Force is with him.
I need your help, Luke.
She needs your help.
I\'m getting too old for this sort of thing.
I\'m surprised you had the courage to take the responsibility yourself.
Don\'t act so surprised, Your Highness.
You weren\'t on any mercy mission this time.
Several transmissions were beamed to this ship by Rebel spies.
I want to know what happened to the plans they sent you.
Hokey religions and ancient weapons are no match for a good blaster at your side, kid.
You\'re all clear, kid.
Let\'s blow this thing and go home!
As you wish.
I want to come with you to Alderaan.
There\'s nothing for me here now.
I want to learn the ways of the Force and be a Jedi, like my father before me.
What?!
What good is a reward if you ain\'t around to use it?
Besides, attacking that battle station ain\'t my idea of courage.
It\'s more like ... suicide.
Ye-ha!

The swallow may fly south with the sun, and the house martin or the plover may seek warmer climes in winter, yet these are not strangers to our land.
On second thoughts, let\'s not go there.
It is a silly place.
Why do you think that she is a witch?
The Knights Who Say Ni demand a sacrifice!
Strange women lying in ponds distributing swords is no basis for a system of government.
Supreme executive power derives from a mandate from the masses, not from some farcical aquatic ceremony.
It\'s only a model.
What do you mean?
The nose?

All I want is to be a monkey of moderate intelligence who wears a suit ... that\'s why I\'m transferring to business school!
Shut up and get to the point!
No!
Don\'t jump!
The kind with looting and maybe starting a few fires!
In your time, yes, but nowadays shut up!
Besides, these are adult stemcells, harvested from perfectly healthy adults whom I killed for their stemcells.
It\'s just like the story of the grasshopper and the octopus.
All year long, the grasshopper kept burying acorns for winter, while the octopus mooched off his girlfriend and watched TV.

While their products leave much to be desired, Acme delivery service is second to none;
Wile E. can merely drop an order into a mailbox (or enter an order on a website, as in the Looney Tunes: Back in Action movie), and have the product in his hands within seconds.
The name Acme became popular for businesses by the 1920s, when alphabetized business telephone directories such as the Yellow Pages began to be widespread.

A battery, providing the power source for the phone functions.
An input mechanism to allow the user to interact with the phone.
The most common input mechanism is a keypad, but touch screens are also found in some high-end smartphones.
A screen which echoes the user\'s typing, displays text messages, contacts and more.
Basic mobile phone services to allow users to make calls and send text messages.
All GSM phones use a SIM card to allow an account to be swapped among devices.
Some CDMA devices also have a similar card called a R-UIM.
Individual GSM, WCDMA, iDEN and some satellite phone devices are uniquely identified by an International Mobile Equipment Identity (IMEI) number.
FooPhone is an attempt to develop a mobile phone which contains only Foo.

Caution! May contain Peanuts!

In common language usage, "fruit" normally means the fleshy seed-associated structures of a plant that are sweet or sour and edible in the raw state, such as apples, oranges, grapes, strawberries, bananas, and lemons.
On the other hand, the botanical sense of "fruit" includes many structures that are not commonly called "fruits", such as bean pods, corn kernels, wheat grains, and tomatoes.

Some vegetables also contain fiber, important for gastrointestinal function.
Vegetables contain important nutrients necessary for healthy hair and skin as well.
A person who refrains from dairy and meat products, and eats only plants (including vegetables) is known as a vegan.
Some vegetables can be consumed raw, while some, such as cassava, must be cooked to destroy certain natural toxins or microbes in order to be edible.
A number of processed food items available on the market contain vegetable ingredients and can be referred to as "vegetable derived" products.
These products may or may not maintain the nutritional integrity of the vegetable used to produce them.
Of all the world\'s nations, China is the leading cultivator of vegetables, with top productions in potato, onions, cabbage, lettuce, tomatoes and broccoli.
The tomato is consumed in diverse ways, including raw, as an ingredient in many dishes, sauces, salads, and drinks.
While it is botanically a fruit, it is considered a vegetable for culinary purposes (as well as under U.S. customs regulations, see Nix v. Hedden), which has caused some confusion.
The fruit is rich in lycopene, which may have beneficial health effects.

iPhone is a line of smartphones designed and marketed by Apple Inc.
It runs Apple\'s iOS mobile operating system.
The first generation iPhone was released on June 29, 2007; the most recent iPhones, the seventh-generation iPhone 5C and iPhone 5S, were introduced on September 10, 2013.
The MacBook Pro is a line of Macintosh portable computers introduced in January 2006 by Apple Inc., and now in its third generation.
Replacing the PowerBook G4, the MacBook Pro was the second model, after the iMac, to be announced in the Apple-Intel transition.
It is also the high-end model of the MacBook family and is currently produced with 13- and 15-inch screens, although a 17-inch version has been offered previously.

';
	
	/**
	 * Initialize hooks.
	 */
	public static function init() {
		// register_activation_hook(__FILE__, array( __CLASS__,'activate' ) );
		// register_deactivation_hook(__FILE__,  array( __CLASS__,'deactivate' ) );
		add_action( 'admin_menu', array( __CLASS__, 'admin_menu' ) );
		if ( is_admin() ) {
			add_filter( 'plugin_action_links_'. plugin_basename( __FILE__ ), array( __CLASS__, 'admin_settings_link' ) );
		}
		add_action( 'init', array( __CLASS__, 'wp_init' ) );
	}

	/**
	 * Does nothing for now.
	 */
	public static function activate() {
	}

	/**
	 * Does nothing for now.
	 */
	public static function deactivate() {
	}

	/**
	 * Add the Generator menu item.
	 */
	public static function admin_menu() {
		if ( self::woocommerce_is_active() ) {
			$page = add_submenu_page(
				'woocommerce',
				'Product Generator',
				'Product Generator',
				'manage_woocommerce',
				'product-generator',
				array( __CLASS__, 'generator' )
			);
			add_action( 'load-' . $page, array( __CLASS__, 'load' ) );
		}
	}
	
	public static function load() {
		wp_register_script( 'product-generator', WOOPROGEN_PLUGIN_URL . '/js/product-generator.js', array( 'jquery' ), WOOPROGEN_PLUGIN_VERSION, true );
		wp_register_style( 'product-generator', WOOPROGEN_PLUGIN_URL . '/css/product-generator.css', array(), WOOPROGEN_PLUGIN_VERSION );
	}

	/**
	 * Adds plugin links.
	 *
	 * @param array $links
	 * @param array $links with additional links
	 */
	public static function admin_settings_link( $links ) {
		if ( self::woocommerce_is_active() ) {
			$links[] = '<a href="' . get_admin_url( null, 'admin.php?page=product-generator' ) . '">' . __( 'Product Generator', WOOPROGEN_PLUGIN_DOMAIN ) . '</a>';
		}
		return $links;
	}

	/**
	 * AJAX request handler.
	 * 
	 * If a valid product generator request is recognized,
	 * it runs a generation cycle and then produces the JSON-encoded response
	 * containing the current number of published products held in the 'total'
	 * property.
	 */
	public static function wp_init() {
		if (
			isset( $_REQUEST['product_generator'] ) && 
			wp_verify_nonce( $_REQUEST['product_generator'], 'product-generator-js' )
		) {
			// run generator
			$per_run = get_option( 'woocommerce-product-generator-per-run', self::DEFAULT_PER_RUN );
			self::run( $per_run );
			$n_products = self::get_product_count();
			$result = array( 'total' => $n_products );
			echo json_encode( $result );
			exit;
		}
	}

	public static function generator() {
		if ( !current_user_can( 'manage_woocommerce' ) ) {
			wp_die( __( 'Access denied.', WOOPROGEN_PLUGIN_DOMAIN ) );
		}
		if ( self::woocommerce_is_active() ) {

			wp_enqueue_script( 'product-generator' );
			wp_enqueue_style( 'product-generator' );

			if ( isset( $_POST['action'] ) && ( $_POST['action'] == 'save' ) && wp_verify_nonce( $_POST['product-generator'], 'admin' ) ) {
				$limit    = !empty( $_POST['limit'] ) ? intval( trim( $_POST['limit'] ) ) : self::DEFAULT_LIMIT;
				$per_run  = !empty( $_POST['per_run'] ) ? intval( trim( $_POST['per_run'] ) ) : self::DEFAULT_PER_RUN;
				$titles   = !empty( $_POST['titles'] ) ? $_POST['titles'] : '';
				$contents = !empty( $_POST['contents'] ) ? $_POST['contents'] : '';

				if ( $limit < 0 ) {
					$limit = self::DEFAULT_LIMIT;
				}
				delete_option( 'woocommerce-product-generator-limit' );
				add_option( 'woocommerce-product-generator-limit', $limit, null, 'no' );

				if ( $per_run < 0 ) {
					$per_run = self::DEFAULT_PER_RUN;
				}
				if ( $per_run > self::MAX_PER_RUN ) {
					$per_run = self::MAX_PER_RUN;
				}
				delete_option( 'woocommerce-product-generator-per-run' );
				add_option( 'woocommerce-product-generator-per-run', $per_run, null, 'no' );

				delete_option( 'woocommerce-product-generator-titles' );
				add_option( 'woocommerce-product-generator-title', $titles, null, 'no' );

				delete_option( 'woocommerce-product-generator-contents' );
				add_option( 'woocommerce-product-generator-contents', $contents, null, 'no' );
			} else if ( isset( $_POST['action'] ) && ( $_POST['action'] == 'generate' ) && wp_verify_nonce( $_POST['product-generate'], 'admin' ) ) {
				$max = isset( $_POST['max'] ) ? intval( $_POST['max'] ) : 0;
				if ( $max > 0 ) {
					for ( $i = 1; $i <= $max ; $i++ ) {
						self::create_product();
					}
				}
			} else if ( isset( $_POST['action'] ) && ( $_POST['action'] == 'reset' ) && wp_verify_nonce( $_POST['product-generator-reset'], 'admin' ) ) {
				delete_option( 'woocommerce-product-generator-limit' );
				add_option( 'woocommerce-product-generator-limit', self::DEFAULT_LIMIT, null, 'no' );

				delete_option( 'woocommerce-product-generator-per-run' );
				add_option( 'woocommerce-product-generator-per-run', self::DEFAULT_PER_RUN, null, 'no' );

				delete_option( 'woocommerce-product-generator-titles' );
				add_option( 'woocommerce-product-generator-title', self::DEFAULT_TITLES, null, 'no' );

				delete_option( 'woocommerce-product-generator-contents' );
				add_option( 'woocommerce-product-generator-contents', self::DEFAULT_CONTENTS, null, 'no' );
			}

			$limit    = get_option( 'woocommerce-product-generator-limit', self::DEFAULT_LIMIT );
			$per_run  = get_option( 'woocommerce-product-generator-per-run', self::DEFAULT_PER_RUN );
			$titles   = stripslashes( get_option( 'woocommerce-product-generator-titles', self::DEFAULT_TITLES ) );
			$contents = stripslashes( get_option( 'woocommerce-product-generator-contents', self::DEFAULT_CONTENTS ) );

			$titles = explode( "\n", $titles );
			sort( $titles );
			$titles = trim( implode( "\n", $titles ) );

			echo '<h1>';
			echo __( 'Product Generator', WOOPROGEN_PLUGIN_DOMAIN );
			echo '</h1>';

			echo '<div class="product-generator-admin" style="margin-right:1em;">';

			echo '<div>';
			echo __( 'This produces demo products for testing purposes.', WOOPROGEN_PLUGIN_DOMAIN );
			echo ' ';
			echo __( 'It is <strong>NOT</strong> recommended to use this on a production site.', WOOPROGEN_PLUGIN_DOMAIN );
			echo ' ';
			echo __( 'The plugin will <strong>NOT</strong> clean up the data it has created.', WOOPROGEN_PLUGIN_DOMAIN );
			echo ' ';
			echo __( 'The plugin will create a <em>product-generator</em> user in the role of a <em>Shop Manager</em>.', WOOPROGEN_PLUGIN_DOMAIN );
			echo '</div>';

			echo '<div class="settings">';
			echo '<form name="settings" method="post" action="">';
			echo '<div>';

			echo '<p>';
			echo __( 'The continuous generator runs at most once per second, creating up to the indicated number of products per run.', WOOPROGEN_PLUGIN_DOMAIN );
			echo ' ';
			echo __( 'The continuous generator will try to create new products until stopped, or the total number of products reaches the indicated limit.', WOOPROGEN_PLUGIN_DOMAIN );
			echo '</p>';

			echo '<p>';
			echo '<label>';
			echo __( 'Limit', WOOPROGEN_PLUGIN_DOMAIN );
			echo ' ';
			echo sprintf( '<input type="text" name="limit" value="%d" />', $limit );
			echo '</label>';
			echo '</p>';

			echo '<p>';
			echo '<label>';
			echo __( 'Per Run', WOOPROGEN_PLUGIN_DOMAIN );
			echo ' ';
			echo sprintf( '<input type="text" name="per_run" value="%d" />', $per_run );
			echo ' ';
			echo sprintf( __( 'Maximum %d', WOOPROGEN_PLUGIN_DOMAIN ), self::MAX_PER_RUN );
			echo '</label>';
			echo '</p>';

			echo '<p>';
			echo '<label>';
			echo __( 'Titles', WOOPROGEN_PLUGIN_DOMAIN );
			echo '<br/>';
			echo '<textarea name="titles" style="height:10em;width:90%;">';
			echo htmlentities( $titles );
			echo '</textarea>';
			echo '</label>';
			echo '</p>';

			echo '<p>';
			echo '<label>';
			echo __( 'Contents', WOOPROGEN_PLUGIN_DOMAIN );
			echo '<br/>';
			echo '<textarea name="contents" style="height:20em;width:90%;">';
			echo htmlentities( $contents );
			echo '</textarea>';
			echo '</label>';
			echo '</p>';

			wp_nonce_field( 'admin', 'product-generator', true, true );

			echo '<div class="buttons">';
			echo sprintf( '<input class="button button-primary" type="submit" name="submit" value="%s" />', __( 'Save', WOOPROGEN_PLUGIN_DOMAIN ) );
			echo '<input type="hidden" name="action" value="save" />';
			echo '</div>';

			echo '</div>';
			echo '</form>';
			echo '</div>';

			echo '<h2>';
			echo __( 'Reset', WOOPROGEN_PLUGIN_DOMAIN );
			echo '</h2>';

			echo '<div class="reset">';
			echo '<form name="reset" method="post" action="">';
			echo '<div>';

			echo '<p>';
			echo __( 'Reset to defaults', WOOPROGEN_PLUGIN_DOMAIN );
			echo '</p>';

			wp_nonce_field( 'admin', 'product-generator-reset', true, true );

			echo '<div class="buttons">';
			echo sprintf( '<input class="button button-primary" type="submit" name="submit" value="%s" />', __( 'Reset', WOOPROGEN_PLUGIN_DOMAIN ) );
			echo '<input type="hidden" name="action" value="reset" />';
			echo '</div>';

			echo '</div>';
			echo '</form>';
			echo '</div>';

			echo '<h2>';
			echo __( 'Single Run', WOOPROGEN_PLUGIN_DOMAIN );
			echo '</h2>';

			echo '<div class="generate">';
			echo '<form name="generate" method="post" action="">';
			echo '<div>';

			echo '<p>';
			echo '<label>';
			echo __( 'Generate up to &hellip;', WOOPROGEN_PLUGIN_DOMAIN );
			echo ' ';
			echo '<input type="text" name="max" value="1" />';
			echo '</label>';
			echo '</p>';

			wp_nonce_field( 'admin', 'product-generate', true, true );

			echo '<div class="buttons">';
			echo sprintf( '<input class="button button-primary" type="submit" name="submit" value="%s" />', __( 'Run', WOOPROGEN_PLUGIN_DOMAIN ) );
			echo '<input type="hidden" name="action" value="generate" />';
			echo '</div>';

			echo '</div>';
			echo '</form>';
			echo '</div>';

			echo '<h2>';
			echo __( 'Continuous AJAX Run', WOOPROGEN_PLUGIN_DOMAIN );
			echo '</h2>';

			echo '<div class="buttons">';
			echo sprintf( '<input class="button" type="button" id="product-generator-run" name="product-generator-run" value="%s" />', __( 'Run', WOOPROGEN_PLUGIN_DOMAIN ) );
			echo ' ';
			echo sprintf( '<input class="button" type="button" id="product-generator-stop" name="product-generator-stop" value="%s" />', __( 'Stop', WOOPROGEN_PLUGIN_DOMAIN ) );
			echo '</div>';

			echo '<div id="product-generator-status"></div>';
			echo '<div id="product-generator-update"></div>';
			echo '<div id="product-generator-blinker"></div>';

			$js_nonce = wp_create_nonce( 'product-generator-js' );

			echo '<script type="text/javascript">';
			echo 'if ( typeof jQuery !== "undefined" ) {';
			echo 'jQuery(document).ready(function(){';
			echo sprintf( 'ixprogen.limit = %d;', $limit );
			echo 'jQuery("#product-generator-run").click(function(e){';
			echo 'e.stopPropagation();';
			echo sprintf(
				'ixprogen.start("%s");',
				add_query_arg(
					array(
						'product_generator' => $js_nonce
					),
					admin_url( 'admin-ajax.php' )
				)
			);
			echo '});'; // run click
			echo 'jQuery("#product-generator-stop").click(function(e){';
			echo 'e.stopPropagation();';
			echo 'ixprogen.stop();';
			echo '});'; // stop click
			echo '});'; // ready
			echo '}';
			echo '</script>';

			echo '</div>'; // .product-generator-admin
		}
	}

	/**
	 * Product generation cycle.
	 */
	public static function run( $n = self::MAX_PER_RUN ) {
		$limit = intval( get_option( 'woocommerce-product-generator-limit', self::DEFAULT_LIMIT ) );
		$n_products = self::get_product_count();
		if ( $n_products < $limit ) {
			$n = min( $n, $limit - $n_products );
			$n = min( $n, self::MAX_PER_RUN );
			if ( $n > 0 ) {
				for ( $i = 0; $i < $n; $i++ ) {
					self::create_product();
				}
			}
		}
	}
	
	/**
	 * This function does creates hierarchical Taxonomy
	 *
	 */
	private function add_category( $post_id ){
		
		$cats = array(
			array('Sporting Goods' => 'Athletics'),
			array('Sporting Goods' => 'Exercise & Fitness'),
			array('Sporting Goods' => 'Indoor Games'),
			array('Sporting Goods' => 'Outdoor Recreation'),
			array('Toys & Games' => 'Game Timers'),
			array('Toys & Games' => 'Games'),
			array('Toys & Games' => 'Outdoor Play Equipment'),
			array('Toys & Games' => 'Puzzles'),
			array('Toys & Games' => 'Toys'),
			array('Arts & Entertainment' => 'Event Tickets'),
			array('Arts & Entertainment' => 'Hobbies & Creative Arts'),
			array('Arts & Entertainment' => 'Party & Celebration'),
			);
		
		// Get a random category
		$c_n = count( $cats );
		$c_max = rand( 1, 3 );
		for ( $i = 0; $i < $c_max ; $i++ ) {
			$terms = $cats[rand( 0, $c_n - 1 )];
		}
		
		$parent_term = key($terms);
		$term = $terms[ key($terms) ];
		
		
		// check if parent term exists
		$parent_cat = term_exists($parent_term, 'product_cat');
		if ($parent_cat !== 0 && $parent_cat !== null) {
			// parent cat exists
			// Get cat id
			//echo '1.a Parent Term "'.$parent_term.'" bestaat al. <br />';
			$parent_cat_id = get_cat_ID( $parent_term );
		}else{
			// create new parent cat and return cat id
			//$parent_cat_id = wp_create_category( $parent_term );
			//echo '1.a Parent Term "'.$parent_term.'" bestaat nog niet. <br />';
			
			$id = wp_insert_term( $parent_term, 'product_cat' );
			$parent_cat_id = $id['term_id'];
			
			//echo '1.b post id '.$parent_term.' toegevoegd aan categorieën met id '.$parent_cat_id.' <br />';
		}

		// 
		$category = term_exists($term, 'product_cat');
		if ($category !== 0 && $category !== null) {
		  // term does exists
		  // add post to the $category
		  //echo '2.a Term "'.$term.'" bestaat al. <br />';
		  wp_set_object_terms( $post_id, $term, 'product_cat', true );
		  
		  //echo '2.b post id '.$post_id.' toegevoegd aan '.$term.'. <br />';
		  
		}else{
			
			// term does not exists
			// create parent and child term
			//echo '2.a Term "'.$term.'" bestaat nog niet. <br />';
			wp_insert_term( $term, 'product_cat', array('parent'=> $parent_cat_id) );
			
			//echo '2.b Term "'.$term.'" met parent "'.$parent_term.'" aangemaakt. <br />';
			
			// koppel het product aan de category
			 wp_set_object_terms( $post_id, $term, 'product_cat', true );
			  	
			 //echo '2.c post id '.$post_id.' toegevoegd aan '.$term.'. <br />';
			
		}
		
				
	}

	/**
	 * Returns the total number of published products.
	 * 
	 * @return int
	 */
	public static function get_product_count() {
		//$counts = wp_count_posts( 'product' ); // <-- nah ... :|
		global $wpdb;
		return intval( $wpdb->get_var(
			"SELECT count(*) FROM $wpdb->posts WHERE post_type = 'product' and post_status = 'publish'"
		) );
	}

	public static function create_product() {
		$user_id = self::get_user_id(); 
		$title = self::get_title();
		$i = 0;
		while( ( $i < 99 ) ) {
			if ( get_page_by_title( $title, OBJECT, 'product' ) ) {
				$title .= " " . self::get_title();
			} else {
				break;
			}
			$i++;
		}

		$content = self::get_content();
		$excerpt = self::get_excerpt( 3, $content );

		$post_id = wp_insert_post( array(
			'post_type' => 'product',
			'post_title' => $title,
			'post_excerpt' => $excerpt,
			'post_content' => $content,
			'post_status' => 'publish',
			'post_author' => $user_id
		) );
		if ( !( $post_id instanceof WP_Error ) ) {

			// visibility
			update_post_meta( $post_id, '_visibility', 'visible' );

			// price
			$price = wc_format_decimal( floatval( rand( 1, 10000 ) ) / 100.0 );
			update_post_meta( $post_id, '_price', $price );
			update_post_meta( $post_id, '_regular_price', $price );

			// add random categories including parent categories
			self::add_category( $post_id );
			

			// add tags
			$tags = explode( " ", $title );
			$tags[] = 'progen';
			$potential = explode( " ", $content );
			$n = count( $potential );
			$t_max = rand( 1, 7 );
			for ( $i = 0; $i < $t_max ; $i++ ) {
				$tags[] = preg_replace( "/[^a-zA-Z0-9 ]/", '', $potential[rand( 0, $n-1 )] );
			}
			wp_set_object_terms( $post_id, $tags, 'product_tag', true );

			// product image
			$image = self::get_image();
			$image_name = self::get_image_name();
			$r = wp_upload_bits( $image_name, null, $image );
			if ( !empty( $r ) && is_array( $r ) && !empty( $r['file'] ) ) {
				$filetype = wp_check_filetype( $r['file'] );
				$attachment_id = wp_insert_attachment(
					array(
						'post_title' => $title,
						'post_mime_type' => $filetype['type'],
						'post_status' => 'publish',
						'post_author' => $user_id
					),
					$r['file'],
					$post_id
				);
				if ( !empty( $attachment_id ) ) {
					include_once ABSPATH . 'wp-admin/includes/image.php';
					if ( function_exists( 'wp_generate_attachment_metadata' ) ) {
						$meta = wp_generate_attachment_metadata( $attachment_id, $r['file'] );
						wp_update_attachment_metadata( $attachment_id, $meta );
					}
					update_post_meta( $post_id, '_thumbnail_id', $attachment_id );
				}
			}
		}
	}

	/**
	 * Returns the user ID of the product-generator user which is used as the
	 * author of products generated. The user is created here if it doesn't
	 * exist yet, with role Shop Manager.
	 * 
	 * @return int product-generator user ID
	 */
	public static function get_user_id() {
		$user_id = get_current_user_id();
		$user = get_user_by( 'login', 'product-generator' );
		if ( $user instanceof WP_User ) {
			$user_id = $user->ID;
		} else {

			$user_pass = wp_generate_password( 12 );
			$maybe_user_id = wp_insert_user( array(
				'user_login' => 'product-generator',
				'role'       => 'shop_manager',
				'user_pass'  => $user_pass
			) );
			if ( !( $maybe_user_id instanceof WP_Error ) ) {
				$user_id = $maybe_user_id;

				// notify admin
				$user = get_userdata( $user_id );
				$blogname = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES );

				$message  = sprintf( __( 'Product generator user created on %s:', WOOPROGEN_PLUGIN_DOMAIN ), $blogname ) . "\r\n\r\n";
				$message .= sprintf( __( 'Username: %s', WOOPROGEN_PLUGIN_DOMAIN ), $user->user_login ) . "\r\n\r\n";
				$message .= sprintf( __( 'Password: %s', WOOPROGEN_PLUGIN_DOMAIN ), $user_pass ) . "\r\n\r\n";
				$message .= __( 'The user has the role of a Shop Manager.', WOOPROGEN_PLUGIN_DOMAIN ) . "\r\n";

				@wp_mail( get_option( 'admin_email' ), sprintf( __( '[%s] Product Generator User', WOOPROGEN_PLUGIN_DOMAIN ), $blogname ), $message);
			}
		}
		return $user_id;
	} 

	/**
	 * Produce a title.
	 * 
	 * @param int $n_words
	 * @return string
	 */
	public static function get_title( $n_words = 3 ) {
		$titles = trim( stripslashes( get_option( 'woocommerce-product-generator-titles', self::DEFAULT_TITLES ) ) );
		$titles = explode( "\n", $titles );
		$title = array();
		$n = count( $titles );
		$n_words = rand( 1, $n_words );
		for ( $i = 1; $i <= $n_words ; $i++ ) {
			$title[] = $titles[rand( 0, $n - 1 )];
		}
		$title = implode( ' ', $title );
		return $title;
	}

	/**
	 * Produce the excerpt.
	 *
	 * @param int $n_lines
	 * @return string
	 */
	public static function get_excerpt( $n_lines = 3, $contents = null ) {
		if ( $contents === null ) {
			$contents = trim( stripslashes( get_option( 'woocommerce-product-generator-contents', self::DEFAULT_CONTENTS ) ) );
		} else {
			$contents = str_ireplace( '</p>', "\n", $contents );
			$contents = str_ireplace( '<p>', '', $contents );
		}
		$contents = explode( "\n", $contents );
		$content = array();
		$n = count( $contents );
		$n_lines = rand( 1, $n_lines );
		for ( $i = 1; $i <= $n_lines ; $i++ ) {
			$maybe_content = $contents[rand( 0, $n - 1 )];
			if ( !in_array( $maybe_content, $content ) ) {
				$content[] = $maybe_content;
			}
		}
		$content = "<p>" . implode( "</p><p>", $content ) . "</p>";
		return $content;
	}

	/**
	 * Produce content.
	 * 
	 * @param int $n_lines
	 * @return string
	 */
	public static function get_content( $n_lines = 10 ) {
		$contents = trim( stripslashes( get_option( 'woocommerce-product-generator-contents', self::DEFAULT_CONTENTS ) ) );
		$contents = explode( "\n", $contents );
		$content = array();
		$n = count( $contents );
		$n_lines = rand( 1, $n_lines );
		for ( $i = 1; $i <= $n_lines ; $i++ ) {
			$content[] = $contents[rand( 0, $n - 1 )];
		}
		$content = "<p>" . implode( "</p><p>", $content ) . "</p>";
		return $content;
	}

	/**
	 * Produce an image.
	 * 
	 * @return string image data
	 */
	public static function get_image() {
		$output = '';
		if ( function_exists( 'imagepng' ) ) {
			$width = self::IMAGE_WIDTH;
			$height = self::IMAGE_HEIGHT;

			$image = imagecreatetruecolor( $width, $height );
			for( $i = 0; $i <= 11; $i++ ) {
				$x = rand( 0, $width );
				$y = rand( 0, $height );
				$w = rand( 1, $width );
				$h = rand( 1, $height );
				$red = rand( 0, 255 );
				$green = rand( 0, 255 );
				$blue  = rand( 0, 255 );
				$color = imagecolorallocate( $image, $red, $green, $blue );
				imagefilledrectangle(
					$image,
					$x - $w / 2,
					$y - $h / 2,
					$x + $w / 2,
					$y + $h / 2,
					$color
				);
			}

			ob_start();
			imagepng( $image );
			$output = ob_get_clean();
			imagedestroy( $image );
		} else {
			$image = file_get_contents( WOOPROGEN_PLUGIN_URL . '/images/placeholder.png' );
			ob_start();
			echo $image;
			$output = ob_get_clean();
		}
		return $output;

	}

	/**
	 * Produce a name for an image.
	 * @return string
	 */
	public static function get_image_name() {
		$t = time();
		$r = rand();
		return "product-$t-$r.png";
	}

	/**
	 * Returns true if WooCommerce is active.
	 * @return boolean true if WooCommerce is active
	 */
	private static function woocommerce_is_active() {
		$active_plugins = get_option( 'active_plugins', array() );
		if ( is_multisite() ) {
			$active_sitewide_plugins = get_site_option( 'active_sitewide_plugins', array() );
			$active_sitewide_plugins = array_keys( $active_sitewide_plugins );
			$active_plugins = array_merge( $active_plugins, $active_sitewide_plugins );
		}
		return in_array( 'woocommerce/woocommerce.php', $active_plugins ); 
	}
}
WooCommerce_Product_Generator::init();
