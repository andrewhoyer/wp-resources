function x_symbol($atts) {
	return wp_kses_post("𝕏");
}

add_shortcode("X", "x_symbol");
