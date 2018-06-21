
//////////////////////////////////////////////////
//ショートコードで囲んだ範囲のpタグを消す
//////////////////////////////////////////////////
function noFunc( $atts, $html = null ) {
	$html = str_replace( '<p>' , '' , $html );
  $html = str_replace( '</p>' , '' , $html );
  return $html;
}
add_shortcode('no', 'noFunc');
