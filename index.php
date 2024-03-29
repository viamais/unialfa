<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700&family=DM+Sans:opsz,wght@9..40,400;9..40,600;9..40,700&display=swap"
      rel="stylesheet"
    />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- jquery -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- iconify -->

    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <link rel="stylesheet" href="./css/plugins.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/override.css" />
    <title>Seja um parceiro UNIALFA EaD</title>
    <meta name="description" content="Invista em Educação Digital. Seja um parceiro UNIALFA EaD. Mais de 20 anos de experiência no ramo do Ensino Superior.">
    
    <meta property="og:title" content="Seja um parceiro UNIALFA EaD" />
	<meta property="og:description" content="Invista em Educação Digital. Seja um parceiro UNIALFA EaD. Mais de 20 anos de experiência no ramo do Ensino Superior." />
	<meta property="og:type" content="company" />
	<meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" />
	<meta property="og:image" content="https://<?php echo $_SERVER['HTTP_HOST'];?>/img/facebook.png" />
	<meta property="og:site_name" content="UNIALFA" />
	<meta property="fb:admins" content="1066108721" />
  </head>

  <body>
    <header>
      <div class="container">
        <a href="https://www.unialfa.com.br" target="_blank"><img src="./svg/unialfa-logo.svg" alt="Logo da Unialfa" /></a>
        <nav>
          <ul>
            <li><a href="#diferenciais">DIFERENCIAIS</a></li>
            <li><a href="#porqueinvestir">POR QUE INVESTIR</a></li>
            <li><a href="#modelodenegocios">MODELO DE NEGÓCIOS</a></li>
            <li><a href="#etapas">ETAPAS</a></li>
          </ul>
          <a href="javascript:;" onclick="$('.modal').fadeIn();" class="button-red-default">Cadastre-se</a>
        </nav>
      </div>
    </header>

    <section class="s-hero">
      <div class="container">
        <div class="s-hero__text">
          <h2>Invista em Educação Digital</h2>
          <h1>
            Seja um parceiro <br />
            UNIALFA EaD
          </h1>
          <p>
            Mais de 20 anos de experiência <br />
            no ramo de Ensino Superior
          </p>
        </div>
        <!-- <div class="img">
          <img src="./img/img-s-hero.png" alt="" />
        </div> -->
      </div>
      <!-- <div class="ornament"></div> -->
    </section>

    <section class="s-highlights" id="diferenciais">
      <div class="container">
        <div class="card-w-title">
          <h2>23 anos</h2>
          <p>de Experiência no Ramo de Ensino Superior</p>
        </div>
        <div class="card-w-title">
          <h2>3</h2>
          <p>Unidades Físicas em Goiás e São Paulo</p>
        </div>
        <div class="card-w-title">
          <h2>16</h2>
          <p>Polos Credenciados no MEC</p>
        </div>
        <div class="card-w-title">
          <h2>nota 4</h2>
          <p>no Conceito Institucional EaD no MEC - CI EaD</p>
        </div>
        <div class="card-w-title">
          <h2 class="o-title">Corpo Docente com Mestres e Doutores</h2>
        </div>
        <div class="card-w-title">
          <h2 class="o-title">Mais de 30 cursos de Graduação EaD</h2>
        </div>
        <div class="card-w-title">
          <h2 class="o-title">Mais de 4 cursos de Pós-Graduação EaD</h2>
        </div>
        <div class="card-w-title">
          <h2 class="o-title">Cursos autorizados e/ou reconhecidos pelo MEC</h2>
        </div>
        <div class="card-w-title">
          <h2 class="o-title">Certificação de Qualidade ISO 9001</h2>
        </div>
        <div class="card-w-title">
          <h2 class="o-title">Nota 5 no Recredenciamento Institucional</h2>
        </div>
      </div>
    </section>

    <section class="s-why" id="porqueinvestir">
      <div class="container">
        <h2>
          Por que investir em um <br />
          polo UNIALFA EaD?
        </h2>
        <div class="grid">
          <div class="card-w-icon">
            <iconify-icon class="icon" icon="ph:chart-line-up"></iconify-icon>
            <h3>Crescimento exponencial da Educação a Distância</h3>
          </div>
          <div class="card-w-icon">
            <iconify-icon class="icon" icon="ph:thumbs-up"></iconify-icon>
            <h3>Flexibilidade e conveniência para os estudantes</h3>
          </div>
          <div class="card-w-icon">
            <iconify-icon class="icon" icon="ph:map-trifold"></iconify-icon>
            <h3>Maior alcance geográfico e acesso a um público mais amplo</h3>
          </div>
          <div class="card-w-icon">
            <iconify-icon class="icon" icon="ph:piggy-bank"></iconify-icon>
            <h3>Redução de custos operacionais</h3>
          </div>
          <div class="card-w-icon">
            <iconify-icon class="icon" icon="ph:chart-bar"></iconify-icon>
            <h3>Escalabilidade e expansão</h3>
          </div>
          <div class="card-w-icon">
            <iconify-icon class="icon" icon="ph:tree-structure"></iconify-icon>
            <h3>Personalização do aprendizado</h3>
          </div>
          <div class="card-w-icon">
            <iconify-icon class="icon" icon="ph:lightbulb"></iconify-icon>
            <h3>Aprendizado ao longo da vida</h3>
          </div>
          <div class="card-w-icon">
            <iconify-icon
              class="icon"
              icon="ph:presentation-chart"
            ></iconify-icon>
            <h3>Análise e acompanhamento de desempenho</h3>
          </div>
          <div class="card-w-icon">
            <iconify-icon class="icon" icon="ph:plugs-connected"></iconify-icon>
            <h3>Infraestrutura simplificada</h3>
          </div>
          <div class="card-w-icon">
            <iconify-icon class="icon" icon="ph:user-focus"></iconify-icon>
            <h3>Plano de negócios exclusivos</h3>
          </div>
        </div>
      </div>
    </section>

    <section class="s-our-work" id="modelodenegocios">
      <div class="container">
        <h2>Nosso Modelo de Negócios</h2>
        <div class="flex">
          <div class="star">
            <div class="icon-container">
              <iconify-icon class="icon" icon="ph:star-fill"></iconify-icon>
              <h3>Polo Exclusivo</h3>
            </div>
            <p>
              Acreditamos na sua expertise como empreendedor, assim você terá
              uma infraestrutura exclusiva com destaque na sua cidade e região,
              proporcionando uma maior visibilidade para seu negócio e maior
              capilaridade do seu público.
            </p>
          </div>
          <div class="star">
            <div class="icon-container">
              <iconify-icon
                class="icon"
                icon="ph:star-half-fill"
              ></iconify-icon>
              <h3>Polo Integrado</h3>
            </div>
            <p>
              Você já possui um negócio consolidado com uma infraestrutura
              física que possa compartilhar a instalação do polo, aumentando as
              possibilidades de geração de receita adicional, utilizando os
              mesmos recursos humanos.
            </p>
          </div>
        </div>
      </div>
    </section>
    <?php /*
    <section class="s-testimonials">
      <div class="container">
        <h2>Opinião dos nossos alunos</h2>

        <div class="swiper-container">
          <ul class="swiper-wrapper">
            <li class="testimonial swiper-slide">
              <div class="person">
                <img
                  src="./img/person.png
              "
                  alt="Foto do aluno"
                />
              </div>

              <h3>
                Comecei minha parceria com a UNIALFA em 2006 e, graças ao apoio
                oferecido pela instituição e à segurança e tranquilidade
                proporcionada pelo premiadíssimo corpo pedagógico, hoje, estamos
                em 19 cidades do estado.
              </h3>

              <p class="who">
                <strong>Ana Maria Magalhães</strong> <br />
                <span>Ex-aluno de Graduação em Direito no UNIALFA EaD</span>
              </p>
            </li>
            <li class="testimonial swiper-slide">
              <div class="person">
                <img
                  src="./img/person.png
              "
                  alt="Foto do aluno"
                />
              </div>

              <h3>
                Comecei minha parceria com a UNIALFA em 2006 e, graças ao apoio
                oferecido pela instituição e à segurança e tranquilidade
                proporcionada pelo premiadíssimo corpo pedagógico, hoje, estamos
                em 19 cidades do estado.
              </h3>

              <p class="who">
                <strong>Ana Maria Magalhães</strong> <br />
                <span>Ex-aluno de Graduação em Direito no UNIALFA EaD</span>
              </p>
            </li>
          </ul>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>

          <!-- Se quiser os pagination dots -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    */ ?>

    <section class="s-steps" id="etapas">
      <h2 class="container">Etapas para se tornar um Polo EaD</h2>
      <ul class="container">
        <li>
          <span class="circle">1</span>
          <p>Etapas para se tornar um Polo EaD</p>
        </li>
        <li>
          <span class="circle">2</span>
          <p>Validação da Infraestrutura</p>
        </li>
        <li>
          <span class="circle">3</span>
          <p>Requisitos e documentação necessária</p>
        </li>
        <li>
          <span class="circle">4</span>
          <p>Protocolo e aprovação</p>
        </li>
        <li>
          <span class="circle">5</span>
          <p>Entrega da documentação</p>
        </li>
        <li>
          <span class="circle">6</span>
          <p>Assinatura do contrato de parceria</p>
        </li>
        <li>
          <span class="circle">7</span>
          <p>Treinamento</p>
        </li>
        <li>
          <span class="circle">8</span>
          <p>Ativação e inauguração</p>
        </li>
        <li>
          <span class="circle">9</span>
          <p>Acompanhamento e suporte da UNIALFA</p>
        </li>
      </ul>
    </section>

    <section class="s-cta">
      <div class="triangle">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="106"
          height="53"
          viewBox="0 0 106 53"
          fill="none"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M53 52.3257L0.674099 -0.000217319H105.326L53 52.3257Z"
            fill="#282828"
          />
        </svg>
      </div>
      <div class="container">
        <h2>Abra seu Polo UNIALFA</h2>
        <a href="javascript:;" onclick="$('.modal').fadeIn();" class="button-big"> Quero me cadastrar </a>
        <p class="cta-wp">
          Ou fale com um consultor pelo <a href="#">WhatsApp</a>
        </p>
      </div>
    </section>

    <section class="modal">
    	<div class="modal-bg" onclick="$('.modal').fadeOut();"></div>
    	<div class="modal-content">
    		<form method="post" class="form subscribe formulario-validacao">
    			<h1>Abra seu Polo UNIALFA</h1>
    			<dl>
    				<dt>Seu nome</dt>
    				<dd><input type="text" name="nome" class="obg" /></dd>
    			</dl>
    			<dl>
    				<dt>Telefone</dt>
    				<dd><input type="text" name="telefone" class="celular obg" /></dd>
    			</dl>
    			<dl>
    				<dt>E-mail</dt>
    				<dd><input type="email" name="email" class="obg" /></dd>
    			</dl>
    			<dl>
    				<dt>Curso(s) de interesse</dt>
    				<dd>
    					<textarea name="curso" class="obg"></textarea>
    				</dd>
    			</dl>
    			<dl>
    				<dd><button type="submit">Enviar</button></dd>
    			</dl>
    		</form>
    	</div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="js/jquery.validacao.js"></script>
    <script src="js/jquery.sweetalert.js"></script>
    <script src="js/jquery.inputmask.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/all.js"></script>

    <script>
      /* swiper */
      var swiper = new Swiper(".swiper-container", {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
  </body>
</html>