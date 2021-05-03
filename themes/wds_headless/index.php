<?php
/**
 * Redirect theme requests to cms admin.
 *
 * @author WebDevStudios
 * @package wds-headless-theme
 * @since 1.0
 */

header( 'Location:' . './wp-admin', true, 303 );
