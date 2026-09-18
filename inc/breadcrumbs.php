<?php
/**
 * Tintora Breadcrumbs Generator
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Display accessible breadcrumbs trail with Schema.org microdata
 */
function tintora_breadcrumbs() {
	if ( is_front_page() ) {
		return;
	}

	$delimiter   = '<span class="breadcrumb-separator" aria-hidden="true">/</span>';
	$home_title  = esc_html__( 'Home', 'tintora' );
	$before      = '<span class="breadcrumb-current">';
	$after       = '</span>';

	echo '<nav class="tintora-breadcrumbs" aria-label="' . esc_attr__( 'Breadcrumbs', 'tintora' ) . '">';
	echo '<ol itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb-list">';

	// Home Item
	echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb-item">';
	echo '<a itemprop="item" href="' . esc_url( home_url( '/' ) ) . '"><span itemprop="name">' . $home_title . '</span></a>';
	echo '<meta itemprop="position" content="1" />';
	echo '</li>';
	echo $delimiter;

	$position = 2;

	if ( is_category() ) {
		$category = get_queried_object();
		if ( $category->parent != 0 ) {
			$parents = get_category_parents( $category->parent, true, $delimiter );
			echo '<li class="breadcrumb-item">' . $parents . '</li>';
		}
		echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb-item active">';
		echo $before . '<span itemprop="name">' . single_cat_title( '', false ) . '</span>' . $after;
		echo '<meta itemprop="position" content="' . $position . '" />';
		echo '</li>';

	} elseif ( is_search() ) {
		echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb-item active">';
		/* translators: %s: search query */
		echo $before . sprintf( esc_html__( 'Search Results for "%s"', 'tintora' ), get_search_query() ) . $after;
		echo '<meta itemprop="position" content="' . $position . '" />';
		echo '</li>';

	} elseif ( is_single() ) {
		$post_type = get_post_type();
		if ( 'post' !== $post_type ) {
			$post_type_obj = get_post_type_object( $post_type );
			$archive_link  = get_post_type_archive_link( $post_type );
			if ( $archive_link && $post_type_obj ) {
				echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb-item">';
				echo '<a itemprop="item" href="' . esc_url( $archive_link ) . '"><span itemprop="name">' . esc_html( $post_type_obj->labels->name ) . '</span></a>';
				echo '<meta itemprop="position" content="' . $position . '" />';
				echo '</li>';
				echo $delimiter;
				$position++;
			}
		} else {
			$category = get_the_category();
			if ( ! empty( $category ) ) {
				echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb-item">';
				echo '<a itemprop="item" href="' . esc_url( get_category_link( $category[0]->term_id ) ) . '"><span itemprop="name">' . esc_html( $category[0]->name ) . '</span></a>';
				echo '<meta itemprop="position" content="' . $position . '" />';
				echo '</li>';
				echo $delimiter;
				$position++;
			}
		}
		echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb-item active">';
		echo $before . '<span itemprop="name">' . get_the_title() . '</span>' . $after;
		echo '<meta itemprop="position" content="' . $position . '" />';
		echo '</li>';

	} elseif ( is_page() && ! is_front_page() ) {
		global $post;
		if ( $post->post_parent ) {
			$ancestors = get_post_ancestors( $post->ID );
			$ancestors = array_reverse( $ancestors );
			foreach ( $ancestors as $ancestor ) {
				echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb-item">';
				echo '<a itemprop="item" href="' . esc_url( get_permalink( $ancestor ) ) . '"><span itemprop="name">' . esc_html( get_the_title( $ancestor ) ) . '</span></a>';
				echo '<meta itemprop="position" content="' . $position . '" />';
				echo '</li>';
				echo $delimiter;
				$position++;
			}
		}
		echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb-item active">';
		echo $before . '<span itemprop="name">' . get_the_title() . '</span>' . $after;
		echo '<meta itemprop="position" content="' . $position . '" />';
		echo '</li>';

	} elseif ( is_404() ) {
		echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb-item active">';
		echo $before . esc_html__( '404 Error', 'tintora' ) . $after;
		echo '<meta itemprop="position" content="' . $position . '" />';
		echo '</li>';
	}

	echo '</ol>';
	echo '</nav>';
}
