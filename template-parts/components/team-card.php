<?php
/**
 * Team Specialist Card Component Part
 *
 * @package Tintora
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$name     = ! empty( $args['name'] ) ? $args['name'] : 'David Reynolds';
$role     = ! empty( $args['role'] ) ? $args['role'] : __( 'Master Tint Installer', 'tintora' );
$exp      = ! empty( $args['experience'] ) ? $args['experience'] : __( '12+ Yrs Experience', 'tintora' );
?>

<div class="card team-card" style="text-align: center;">
	<h3 class="team-name" style="margin-bottom: 0.25rem;"><?php echo esc_html( $name ); ?></h3>
	<p class="team-role" style="color: var(--tintora-accent); font-weight: 600; font-size: 0.9rem; margin-bottom: 0.5rem;"><?php echo esc_html( $role ); ?></p>
	<p class="team-exp" style="color: var(--tintora-muted); font-size: 0.85rem; margin: 0;"><?php echo esc_html( $exp ); ?></p>
</div>
