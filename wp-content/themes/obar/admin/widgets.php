<?php
/**
 * Publicidade widget class
 */
class PublicidadeWidget extends WP_Widget {

	function __construct() {
		$widget_ops = array('classname' => 'widget_publicidade', 'description' => __('Exibe publicidade.'));
		$control_ops = array('width' => 400, 'height' => 350);
		parent::__construct('publicidade', __('Publicidade'), $widget_ops, $control_ops);
	}

	function widget( $args, $instance ) {
		extract($args);
		$text = apply_filters( 'widget_publicidade', empty( $instance['publicidade'] ) ? '' : $instance['publicidade'], $instance );
		?>
		<p class="titulo_publicidade">publicidade</p>
		<?php echo $before_widget; ?>
			<div class="textwidget"><?php echo !empty( $instance['filter'] ) ? wpautop( $text ) : $text; ?></div>
		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		if ( current_user_can('unfiltered_html') )
			$instance['publicidade'] =  $new_instance['publicidade'];
		else
			$instance['publicidade'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['publicidade']) ) ); // wp_filter_post_kses() expects slashed
		$instance['filter'] = isset($new_instance['filter']);
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'publicidade' => '' ) );
		$text = esc_textarea($instance['publicidade']);
?>
		<p><label>Código:</label></p>

		<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('publicidade'); ?>" name="<?php echo $this->get_field_name('publicidade'); ?>"><?php echo $text; ?></textarea>
<?php
	}
}

?>