<html lang="pt-BR">
<head>
    <meta charset="UTF-arset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andi Braids - Beleza com Raízes</title>

    <!-- Novas fontes: Playfair Display para títulos e Montserrat para texto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <style>
        :root {
            /* Nova paleta de cores: Clean, moderno e feminino */
            --cor-fundo: #FDF8F5;       /* Off-white com um toque rosado */
            --cor-texto: #4B4B4B;       /* Cinza escuro, suave */
            --cor-destaque: #D9AAB7;    /* Rosa empoeirado (dusty rose) */
            --cor-secundaria: #A98C83; /* Marrom suave/nude */
            --cor-acentuada: #B98B9A;   /* Tom de malva para links/botões */
        }

        /* --- Estilos Globais --- */
        body {
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
            margin: 0;
            padding: 0;
            background-color: var(--cor-fundo);
            color: var(--cor-texto);
            overflow-x: hidden;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--cor-secundaria); /* Títulos em marrom suave para elegância */
        }

        a {
            color: var(--cor-acentuada);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: var(--cor-destaque);
            text-decoration: none;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* --- Cabeçalho --- */
        .site-header {
            background-color: var(--cor-fundo); /* Fundo clean */
            padding: 15px 0;
            border-bottom: 2px solid var(--cor-destaque); /* Linha sutil de destaque */
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .site-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.8em;
            font-weight: 700;
            color: var(--cor-secundaria); /* Logo em tom marrom para sofisticação */
            text-decoration: none;
            text-transform: uppercase;
        }

        .social-nav a {
            color: var(--cor-texto); /* Cor padrão do texto */
            margin-left: 20px;
            text-decoration: none;
            font-weight: 400; /* Peso de fonte normal */
            transition: color 0.3s ease;
        }

        .social-nav a:hover {
            color: var(--cor-acentuada); /* Cor de destaque ao passar o mouse */
        }
    </style>
</head>
