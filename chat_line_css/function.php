
//////////////////////////////////////////////////
//ショートコードで囲んだ範囲のpタグを消す
//////////////////////////////////////////////////
function noFunc( $atts, $content = null ) {
	$content = str_replace( '<p>' , '' , $content );
  $content = str_replace( '</p>' , '' , $content );
  return $content;
}
add_shortcode('no', 'noFunc');
