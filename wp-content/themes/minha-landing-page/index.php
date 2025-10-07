<?php
/**
 * O arquivo principal de fallback do tema.
 *
 * @package MinhaLandingPage
 */

// Se o front-page.php existir, o WordPress o usará para a página inicial.
// Este arquivo está aqui para garantir que o tema seja considerado válido pelo WordPress.

if ( is_front_page() ) {
    // Carrega o template da nossa landing page
    get_template_part( 'front-page' );
} else {
    // Para qualquer outra página, mostra um conteúdo simples.
    echo "<h1>Página não encontrada</h1>";
}
