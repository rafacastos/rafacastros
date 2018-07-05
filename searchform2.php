
<?php 
/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML. */
function wpdocs_my_search_form( $form ) {
    $form = '<form method="get" class="search-form" action="' . home_url( '/' ) . '">
                                <input class="search-field" id="search-field" type="text" name="s" value="' . get_search_query() . '" aria-required="false" autocomplete="off" placeholder="Buscar" />
                                <button class="search-submit"><span class="screen-reader-text"></span><i class="fa fa-search"></i></button>
                            </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );

?>
