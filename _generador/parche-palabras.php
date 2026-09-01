	/*
	 * str_word_count() no entiende UTF-8: corta las palabras en cada acento, asi que
	 * "optimizacion" con tilde contaba como dos y el tiempo de lectura salia inflado.
	 * \p{L}\p{N} con el modificador /u cuenta letras y numeros de cualquier alfabeto.
	 */
	$palabras = preg_match_all( '/[\p{L}\p{N}]+/u', wp_strip_all_tags( strip_shortcodes( $post->post_content ) ), $m )
		? count( $m[0] )
		: 0;
	return max( 1, (int) ceil( $palabras / 200 ) );
