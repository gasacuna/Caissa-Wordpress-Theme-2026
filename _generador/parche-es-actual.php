	/*
	 * Solo la RUTA de cada URL. Antes se comparaba con el query string incluido
	 * (add_query_arg( array() ) devuelve REQUEST_URI completo), asi que en
	 * /equipo/?gclid=... la URL actual no coincidia con la del item de menu y los
	 * items de tipo "Enlace personalizado" perdian el aria-current cada vez que
	 * alguien llegaba desde un anuncio.
	 */
	$a = untrailingslashit( (string) wp_parse_url( (string) $item->url, PHP_URL_PATH ) );
	$b = untrailingslashit( (string) wp_parse_url( home_url( add_query_arg( array() ) ), PHP_URL_PATH ) );
