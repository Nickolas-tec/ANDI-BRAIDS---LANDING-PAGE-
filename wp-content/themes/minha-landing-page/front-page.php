<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANDI - BRAIDS - <?php bloginfo('description'); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="description" content="Tranças afro com identidade, beleza e poder. Agende agora com Andi - especialista em Box Braids e Nagô.">
    <meta property="og:title" content="ANDI - BRAIDS">
    <meta property="og:description" content="Tranças afro com técnica e ancestralidade. Conheça o trabalho de Andiara.">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/IMAGEM 6.jpeg">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta name="twitter:card" content="summary_large_image">

    <?php wp_head(); ?>

    <style>
        /* 1. PALETA DE CORES ATUALIZADA (Mais rica e brilhante) */
        :root {
            --cor-fundo: #FAF8F5; /* Off-white muito claro */
            --cor-fundo-rgb: 250, 248, 245;
            --cor-texto: #3C312E; /* Marrom Profundo */
            --cor-destaque: #D0A87B; /* Ouro/Bege Elegante para acentos */
            --cor-secundaria: #3C312E;
            --cor-acentuada: #A0815E; /* Ouro/Marrom para CTAs */
            --sombra-suave: 0 5px 20px rgba(0, 0, 0, 0.05); /* Sombra para o efeito "HD/Brilho" */
            --sombra-leve: 0 2px 10px rgba(0, 0, 0, 0.03);
        }

        /* 2. BASE RESET E TIPOGRAFIA */
        body {
            font-family: 'Montserrat', sans-serif;
            font-weight: 550; /* Reduzido para um ar mais moderno */
            margin: 0;
            padding: 0;
            background-color: var(--cor-fundo);
            color: var(--cor-texto);
            overflow-x: hidden;
            line-height: 1.6;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            font-weight: 750;
            color: var(--cor-secundaria);
        }
        
        h1 { font-size: 4em; line-height: 1.1; }
        h2 { font-size: 2.5em; margin-bottom: 0.5em; }

        a {
            color: var(--cor-acentuada);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: var(--cor-destaque);
        }

        .container {
            max-width: 1200px; /* Aumentado para mais 'HD' */
            margin: 0 auto;
            padding: 0 25px;
        }
        
        /* 3. HEADER MELHORADO (Mais limpo, com menu flutuante discreto) */
        .site-header {
            background-color: rgba(var(--cor-fundo-rgb), 0.95);
            backdrop-filter: blur(5px);
            padding: 10px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid rgba(var(--cor-destaque), 0.2);
            box-shadow: var(--sombra-leve);
        }

        .header-content {
            display: flex;
            justify-content: center; /* Centraliza o conteúdo do header */
            align-items: center;
        }
        
        .site-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.8em;
            font-weight: 750;
            color: var(--cor-secundaria);
            text-decoration: none;
            text-transform: uppercase;
        }

        .site-nav a {
            font-size: 1em;
            font-weight: 650;
            margin-left: 30px;
            color: var(--cor-texto);
            text-transform: uppercase;
        }
        
        .site-description { display: none; } /* Ocultado para simplificar o Header */

        /* 4. HERO SECTION (Com Imagem de Fundo) */
        .hero {
            position: relative;
            padding: 120px 0;
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-image: linear-gradient(rgba(var(--cor-fundo-rgb), 0.85), rgba(var(--cor-fundo-rgb), 0.85)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-background.jpeg');
            background-size: cover;
            background-position: center;
        }

        .hero-content {
            max-width: 800px; /* Aumenta a largura máxima para o conteúdo */
            padding: 0 25px; /* Adiciona padding lateral para telas menores */
        }
        
        .hero h1 {
            color: var(--cor-secundaria);
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2em;
            font-weight: 450;
            max-width: 500px;
            margin: 0 auto 40px; /* Centraliza o parágrafo e mantém a margem inferior */
        }
        
        /* 5. CTA BUTTON (Aprimorado) */
        .cta-button {
            background-color: var(--cor-acentuada);
            color: white;
            padding: 16px 35px;
            border-radius: 5px;
            font-weight: 750;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.22);
            transition: all 0.3s ease;
            display: inline-block;
            border: none;
        }

        .cta-button:hover {
            background-color: var(--cor-destaque);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.35);
        }
        
        /* 6. SEÇÃO DE ESTATÍSTICAS (NOVO) */
        .stats-section {
            background: var(--cor-destaque);
            color: white;
            text-align: center;
            padding: 30px 0;
            margin-top: 0; /* Removido o margin-top negativo */
            position: relative;
            z-index: 50;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .stats-grid {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .stat-item {
            padding: 0 15px;
        }

        .stat-item strong {
            display: block;
            font-size: 2.4em;
            font-family: 'Playfair Display', serif;
            font-weight: 750;
            line-height: 1.2;
        }

        .stat-item span {
            font-size: 1em;
            font-weight: 550;
            opacity: 0.9;
        }

        /* 7. SEÇÃO DE DIFERENCIAIS (A EXPERIÊNCIA...) */
        .diferenciais-section {
            padding: 80px 0;
            text-align: center;
            background-color: var(--cor-fundo);
        }
        
        .diferenciais-section h2 {
            margin-bottom: 10px;
        }
        
        .diferenciais-section p {
            max-width: 600px;
            margin: 0 auto 50px auto;
            font-weight: 450;
            font-size: 1.1em;
        }

        .diferenciais-grid {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            max-width: 900px;
            margin: 0 auto;
        }

        .diferencial-item {
            flex: 1;
            padding: 20px;
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .diferencial-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--sombra-suave);
        }
        
        .diferencial-item i {
            font-size: 2em;
            color: var(--cor-destaque);
            margin-bottom: 15px;
        }
        
        .diferencial-item h4 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.1em;
            font-weight: 750;
            margin: 0 0 5px 0;
            transition: transform 0.3s ease;
        }

        .diferencial-item:hover h4 {
            transform: translateY(-3px);
        }
        
        .diferencial-item p {
            font-size: 0.9em;
            margin: 0;
            font-weight: 400;
        }


        /* 8. SEÇÃO DE SERVIÇOS (Aprimorado) */
        .content-section {
            padding: 80px 0;
            text-align: center;
        }
        
        .servicos-grid {
            display: flex; /* Alterado para flexbox */
            flex-wrap: wrap; /* Permite que os itens quebrem para a próxima linha */
            justify-content: center; /* Centraliza os cartões */
            gap: 30px;
            text-align: left;
        }

        .servico-card {
            background: #FFFFFF;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 300px; /* Largura fixa para consistência */
            display: flex;
            flex-direction: column;
        }

        .servico-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.15);
        }

        .servico-card img {
            height: 320px; /* Altura ajustada para ser mais moderna */
            border-radius: 12px 12px 0 0;
            object-fit: cover; /* Garante que a imagem cubra a área sem distorcer */
        }
        
        .servico-info {
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            flex-grow: 1; /* Faz esta área crescer para preencher o espaço */
        }
        
        .servico-info h3 {
            font-size: 1.4em;
            margin: 0 0 10px 0;
            transition: transform 0.3s ease;
        }

        .servico-card:hover .servico-info h3 {
            transform: translateY(-3px);
        }
        
        .servico-info p {
            font-weight: 450;
            font-size: 0.95em;
            margin-bottom: 15px;
            /* Limita o texto a 5 linhas para uniformizar a altura dos cards */
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 5; /* Número de linhas a ser exibido */
            -webkit-box-orient: vertical;
        }

        .servico-details {
            margin-top: auto; /* Alinha a duração na base do card */
            padding-top: 15px;
            border-top: 1px solid #F0F0F0;
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 10px;
            font-size: 0.9em;
            color: var(--cor-texto);
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .detail-item i {
            color: var(--cor-destaque);
            font-size: 1.1em;
            width: 20px;
            text-align: center;
        }

        /* 8.1. SEÇÃO DE GALERIA (NOVO) */
        .gallery-section {
            padding: 80px 0;
            text-align: center;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .gallery-item img {
            width: 100%;
            height: 320px; /* Mesma altura das imagens de serviço para consistência */
            object-fit: cover;
            border-radius: 12px;
            box-shadow: var(--sombra-leve);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .gallery-item img:hover {
            transform: scale(1.03);
            box-shadow: var(--sombra-suave);
        }

        /* 9. SEÇÃO DE CTA FINAL (Mantida e Estilizada) */
        #contato {
            background-color: #F8F0EE;
            border: none; /* Removido bordas simples */
            padding: 100px 0; /* Mais padding para destaque */
        }
        
        /* 10. FOOTER E FLUTUANTE */
        .site-footer {
            background-color: var(--cor-secundaria);
            color: rgba(255, 255, 255, 0.8);
            padding: 30px 0;
        }

        /* Media Queries (Responsividade) */
        @media (max-width: 992px) {
            .hero { padding: 60px 25px; }
            .hero-content { max-width: 100%; }
            .hero h1 { font-size: 2.8em; }
            .diferenciais-grid { flex-direction: column; }
            .stats-grid { flex-wrap: wrap; }
            .stat-item { margin-bottom: 20px; }
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 2em; }
            .header-content { flex-direction: column; text-align: center; }
            .site-nav { margin-top: 15px; }
            .site-nav a { margin: 0 10px; }
        }

        /* Efeito de texto interativo */
        .hero-content h1 {
            cursor: default;
        }
        .movable-letter {
            display: inline-block;
            transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
    </style>
</head>
<body>
    
    <header class="site-header">
        <div class="container header-content">
            <a href="<?php echo home_url(); ?>" class="site-logo">ANDI - BRAIDS</a>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero-content">
                <h1>Beleza, Tradição e o Poder da Sua Raiz.</h1>
                <p>Muito além de tranças — é sobre identidade, cuidado e poder.
                Com mais de 5 anos de experiência, Andiara transforma cabelos afros em verdadeiras obras de arte.
                Aqui, cada trança carrega respeito, afeto e propósito. Seu compromisso vai além da estética: é sobre fazer você se sentir vista, valorizada e confiante. Seja bem-vinda ao seu novo momento.</p>
            </div>
        </section>

        <section class="stats-section">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-item">
                        <strong>+5 Anos</strong>
                        <span>DE EXPERIÊNCIA</span>
                    </div>
                    <div class="stat-item">
                        <strong>+400</strong>
                        <span>CLIENTES ATENDIDOS</span>
                    </div>
                    <div class="stat-item">
                        <strong>98%</strong>
                        <span>DE SATISFAÇÃO</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="diferenciais" class="diferenciais-section">
            <div class="container">
                <h2>A Experiência Andi Braids</h2>
                <p>Aqui você encontra talento, cuidado e atendimento feito especialmente para você. Um serviço dedicado, com técnica apurada e foco no seu estilo e conforto.</p>
                <div class="diferenciais-grid">
                    <div class="diferencial-item">
                        <i class="fas fa-crown"></i>
                        <h4>Exclusividade</h4>
                        <p>Atendimento individual, com foco total em você e no cuidado com seu cabelo.</p>
                    </div>
                    <div class="diferencial-item">
                        <i class="fas fa-hand-sparkles"></i>
                        <h4>Técnica e Afeto</h4>
                        <p>Tranças feitas com a técnica afro-brasileira moderna, garantindo durabilidade.</p>
                    </div>
                    <div class="diferencial-item">
                        <i class="fas fa-seedling"></i>
                        <h4>Autoestima</h4>
                        <p>Nosso foco é realçar sua beleza natural e aumentar a sua autoconfiança.</p>
                    </div>
                </div>
                <a href="https://api.whatsapp.com/send?phone=5561981436903" target="_blank" class="cta-button" style="margin-top: 40px;">Faça um orçamento</a>
            </div>
        </section>

        <section id="servicos" class="content-section container">
            <h2>Modelos mais pedidos</h2>
            <div class="servicos-grid">

                <div class="servico-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/IMAGEM 1.jpeg" alt="Trança Nagô" loading="lazy">
                    <div class="servico-info">
                        <h3>Nagô - Masculina</h3>
                        <p>A Nagô masculina é uma trança rente à raiz com divisões finas e bem definidas. Permite criar desenhos geométricos ou linhas retas no couro cabeludo. Ideal para quem busca um estilo moderno e de fácil manutenção.</p>
                        <div class="servico-details">
                            <div class="detail-item">
                                <i class="fas fa-clock"></i>
                                <span>Duração: 1-2 horas</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="servico-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/IMAGEM 5.jpeg" alt="Box Braids" loading="lazy">
                    <div class="servico-info">
                        <h3>Twist - Braids</h3>
                        <p>As Twist Braids são tranças feitas torcendo duas mechas de cabelo, criando um efeito espiral. Elas podem ser feitas com cabelo natural ou sintético, oferecendo volume e textura. Perfeitas para quem deseja um visual único e com toque artesanal.</p>
                        <div class="servico-details">
                            <div class="detail-item">
                                <i class="fas fa-clock"></i>
                                <span>Duração: 7-8 horas</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="servico-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/IMAGEM 4.jpeg" alt="Box Braids com cachos" loading="lazy">
                    <div class="servico-info">
                        <h3>Godds - Braids</h3>
                        <p>As Goddess Braids são tranças com fios cacheados ou ondulados incorporados.Os cachos podem ser adicionados deixando as pontas soltas e cacheadas.</p>
                        <div class="servico-details">
                            <div class="detail-item">
                                <i class="fas fa-clock"></i>
                                <span>Duração: 7-8 horas</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="servico-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/IMAGEM 7.jpeg" alt="Box Braids" loading="lazy">
                    <div class="servico-info">
                        <h3>Box - Braids</h3>
                        <p>As Box Braids são tranças soltas que alongam e dão volume aos fios. Deixam o visual moderno, prático e cheio de estilo. São leves, duram semanas e protegem o cabelo natural.</p>
                        <div class="servico-details">
                            <div class="detail-item">
                                <i class="fas fa-clock"></i>
                                <span>Duração: 7-8 horas</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="servico-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/IMAGEM 8.jpeg" alt="Box Braids" loading="lazy">
                    <div class="servico-info">
                        <h3>Nagô - Feminina</h3>
                        <p>A Nagô feminina é uma trança colada na raiz, feita com linhas finas. Forma desenhos no couro cabeludo e deixa o visual bem estiloso. Perfeita pra quem quer um look forte, limpo e cheio de charme.</p>
                        <div class="servico-details">
                            <div class="detail-item">
                                <i class="fas fa-clock"></i>
                                <span>Duração: 1-2 horas</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Placeholder -->
                <div class="servico-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/IMAGEM 9.jpeg" alt="Placeholder" loading="lazy">
                    <div class="servico-info">
                        <h3>Knotless - Braids</h3>
                        <p> São um estilo de trança que se inicia no próprio cabelo natural da cliente, e não com um nó na raiz como as tradicionais box braids. Essa técnica evita a tração excessiva no couro cabeludo e nos fios.</p>
                        <div class="servico-details">
                            <div class="detail-item">
                                <i class="fas fa-clock"></i>
                                <span>Duração: 5-6 horas</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="contato" class="content-section">
            <div class="container">
                <h2>Realce sua beleza. Honre sua raiz. Eleve sua autoestima!</h2>
                <p>Cada trança é um ato de amor-próprio e poder. Agende seu horário e construa sua melhor versão.</p>
                <a href="https://api.whatsapp.com/send?phone=5561981436903" target="_blank" class="cta-button">Quero Agendar Meu Horário</a>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> ANDI - BRAIDS - Todos os direitos reservados.</p>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const heroTitle = document.querySelector('.hero-content h1');
        if (heroTitle) {
            const text = heroTitle.textContent;
            heroTitle.innerHTML = ''; // Limpa o conteúdo original

            text.split('').forEach(letter => {
                const span = document.createElement('span');
                span.textContent = letter;
                span.className = 'movable-letter';
                if (letter.trim() === '') {
                    span.innerHTML = '&nbsp;';
                }
                heroTitle.appendChild(span);
            });

            const heroSection = document.querySelector('.hero');

            heroSection.addEventListener('mousemove', function(e) {
                const rect = heroSection.getBoundingClientRect();
                const mouseX = e.clientX - rect.left;
                const mouseY = e.clientY - rect.top;

                Array.from(heroTitle.children).forEach(letterSpan => {
                    const letterRect = letterSpan.getBoundingClientRect();
                    const letterCenterX = (letterRect.left - rect.left) + letterRect.width / 2;
                    const letterCenterY = (letterRect.top - rect.top) + letterRect.height / 2;

                    const deltaX = mouseX - letterCenterX;
                    const deltaY = mouseY - letterCenterY;

                    const distance = Math.sqrt(deltaX * deltaX + deltaY * deltaY);
                    const maxDistance = 150;

                    if (distance < maxDistance) {
                        const force = 1 - (distance / maxDistance);
                        const moveX = (deltaX / distance) * force * -25;
                        const moveY = (deltaY / distance) * force * -25;
                        
                        letterSpan.style.transform = `translate(${moveX}px, ${moveY}px)`;
                    } else {
                        letterSpan.style.transform = 'translate(0,0)';
                    }
                });
            });

            heroSection.addEventListener('mouseleave', function() {
                Array.from(heroTitle.children).forEach(letterSpan => {
                    letterSpan.style.transform = 'translate(0,0)';
                });
            });
        }
    });
    </script>
</body>
</html>