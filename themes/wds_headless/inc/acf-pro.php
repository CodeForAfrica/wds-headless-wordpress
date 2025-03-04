<?php
/**
 * Advanced Custom Fields Pro settings.
 *
 * @see https://www.advancedcustomfields.com/pro/
 * @author WebDevStudios
 * @package wds-headless-theme
 * @since 1.0
 */

if ( class_exists( 'acf_pro' ) ) {

	/**
	 * Register custom Options page.
	 *
	 * Note: This is an ACF Pro only feature!
	 *
	 * @see https://www.advancedcustomfields.com/resources/acf_add_options_page/
	 * @author WebDevStudios
	 * @since 1.0
	 */
	function wds_acf_options_page() {
		acf_add_options_page(
			[
				'page_title'      => esc_html__( 'Headless Config' ),
				'menu_title'      => esc_html__( 'Headless Config' ),
				'menu_slug'       => 'headless-config',
				'capability'      => 'edit_posts',
				'icon_url'        => 'dashicons-admin-generic',
				'redirect'        => false,
				'show_in_graphql' => true,
			]
		);
	}
	add_action( 'acf/init', 'wds_acf_options_page' );

	/**
	 * Register custom ACF Blocks.
	 *
	 * Note: This is an ACF Pro only feature!
	 *
	 * @see https://www.advancedcustomfields.com/resources/blocks/
	 * @author WebDevStudios
	 * @since 1.0
	 */
	function wds_acf_blocks_init() {

		$supports = [
			'align'  => 'none',
			'anchor' => false,
			'mode'   => false,
		];

		// Media Text block.
		acf_register_block_type(
			[
				'name'            => 'acf-media-text',
				'title'           => esc_html__( 'ACF Media Text', 'wds' ),
				'description'     => esc_html__( 'A block to display media and text in a 50/50 layout.', 'wds' ),
				'render_callback' => '',
				'category'        => 'wds-content',
				'icon'            => 'images-alt2',
				'keywords'        => [ 'media', 'text', 'button', 'wds' ],
				'mode'            => 'edit',
				'enqueue_assets'  => '',
				'align'           => 'wide',
				'supports'        => $supports,
			]
		);

		// Banners.
		acf_register_block_type(
			[
				'name'            => 'banners',
				'title'           => esc_html__( 'Banner', 'wds' ),
				'description'     => esc_html__( 'A block to display a banners post.', 'wds' ),
				'render_callback' => '',
				'category'        => 'section',
				'icon'            => 'images-alt2',
				'keywords'        => [ 'banners' ],
				'mode'            => 'edit',
				'enqueue_assets'  => '',
				'align'           => 'wide',
				'supports'        => $supports,
			]
		);

		// Explore block.
		acf_register_block_type(
			[
				'name'            => 'explore-list',
				'title'           => esc_html__( 'Explore List', 'wds' ),
				'description'     => esc_html__( 'A block to display list of explore cards.', 'wds' ),
				'render_callback' => '',
				'category'        => 'section',
				'icon'            => 'images-alt2',
				'keywords'        => [ 'explore' , 'list'],
				'mode'            => 'edit',
				'enqueue_assets'  => '',
				'align'           => 'wide',
				'supports'        => $supports,
			]
		);

		// Key Indicators Block.
		acf_register_block_type(
			[
				'name'            => 'key-indicators-list',
				'title'           => esc_html__( 'Key Indicators List', 'wds' ),
				'description'     => esc_html__( 'A block to display list of key Indicators.', 'wds' ),
				'render_callback' => '',
				'category'        => 'section',
				'icon'            => 'images-alt2',
				'keywords'        => [ 'key', 'indicator', 'list' ],
				'mode'            => 'edit',
				'enqueue_assets'  => '',
				'align'           => 'wide',
				'supports'        => $supports,
			]
		);

		// Key Statistics block.
		acf_register_block_type(
			[
				'name'            => 'key-statistics-list',
				'title'           => esc_html__( 'Key Statics List', 'wds' ),
				'description'     => esc_html__( 'A block to display list of key statistics', 'wds' ),
				'render_callback' => '',
				'category'        => 'section',
				'icon'            => 'images-alt2',
				'keywords'        => [ 'key', 'list', 'statistics' ],
				'mode'            => 'edit',
				'enqueue_assets'  => '',
				'align'           => 'wide',
				'supports'        => $supports,
			]
		);
	}
	add_action( 'acf/init', 'wds_acf_blocks_init' );
}
