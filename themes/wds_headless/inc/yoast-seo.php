<?php
/**
 * Yoast SEO settings.
 *
 * @see https://wordpress.org/plugins/wordpress-seo/
 * @author WebDevStudios
 * @package wds-headless-theme
 * @since 1.0
 */

if ( defined( 'WPSEO_VERSION' ) ) {

	/**
	 * Replace Site URL JAMStack URL as needed.
	 *
	 * @author WebDevStudios
	 * @since  1.0
	 * @param  array $breadcrumbs Yoast SEO breadcrumbs.
	 * @return array              Filtered breadcrumbs.
	 */
	function wds_breadcrumb_links( array $breadcrumbs ) {

		// Return path in breadcrumbs.
		return array_map( function( $breadcrumb ) {
			$parsed_url        = wp_parse_url( $breadcrumb['url'] );
			$path              = $parsed_url['path'] ?? '';
			$breadcrumb['url'] = "/{$path}";

			return $breadcrumb;
		}, $breadcrumbs );
	}
	add_filter( 'wpseo_breadcrumb_links', 'wds_breadcrumb_links' );
}
