
/**
 * ¿La pagina que se esta viendo ES el destino del CTA?
 *
 * El HTML del repo marca el boton del nav con aria-current="page" en
 * /reservar-consultoria/, para no ofrecerle al visitante un enlace a la pagina en
 * la que ya esta. El tema lo resuelve comparando la ruta del CTA con la de la
 * pagina actual, en vez de cablear el slug: si algun dia el CTA apunta a otro
 * lado, esto sigue funcionando.
 */
function caissa_cta_actual() {
	if ( ! is_page() ) {
		return false;
	}
	$destino = wp_parse_url( caissa_cta_url(), PHP_URL_PATH );
	$actual  = wp_parse_url( (string) get_permalink(), PHP_URL_PATH );
	if ( empty( $destino ) || empty( $actual ) ) {
		return false;
	}
	return trailingslashit( $destino ) === trailingslashit( $actual );
}
