<?php
/*
Plugin Name: SyntaxHighlighter Evolved: Haskell Brush
Description: Adds support for the Haskell language to the SyntaxHighlighter Evolved plugin.
Author: kuyur
Version: 1.0.0
Author URI: http://kuyur.info/
*/
 
// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_haskell_regscript' );

// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_haskell_addlang' );

// Register the brush file with WordPress
function syntaxhighlighter_haskell_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-haskell', plugins_url( 'shBrushHaskell.js', __FILE__ ), array('syntaxhighlighter-core'), '1.0.0' );
}

// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_haskell_addlang( $brushes ) {
    $brushes['haskell'] = 'haskell';
    $brushes['hask'] = 'haskell';
    $brushes['hs'] = 'haskell';
 
    return $brushes;
}

?>