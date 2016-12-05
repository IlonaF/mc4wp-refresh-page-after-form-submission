//Refresh page after form subscription is successful
function if_change_redirect_url( $url ){
	//Get current page URL
	$url = $_SERVER['REQUEST_URI'];
	return $url;
}
add_filter( 'mc4wp_form_redirect_url', 'if_change_redirect_url' );
