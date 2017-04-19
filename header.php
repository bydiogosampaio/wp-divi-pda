<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <?php elegant_description(); ?>
    <?php elegant_keywords(); ?>
    <?php elegant_canonical(); ?>

    <?php do_action('et_head_meta'); ?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php $template_directory_uri = get_template_directory_uri(); ?>
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( $template_directory_uri . '/js/html5.js"' ); ?>" type="text/javascript"></script>
    <![endif]-->

    <script type="text/javascript">
        document.documentElement.className = 'js';
    </script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="header" role="banner">
    <div class="clearfix">
        <ul id="accessibility">
            <li>
                <a accesskey="1" href="#div-conteudo" id="link-conteudo">
                    Ir para o conte&uacute;do
                    <span>1</span>
                </a>
            </li>
            <li>
                <a accesskey="2" href="#irparaomenu" id="link-navegacao">
                    Ir para o menu
                    <span>2</span>
                </a>
            </li>
            <li>
                <a accesskey="3" href="#portal-searchbox" id="link-buscar">
                    Ir para a busca
                    <span>3</span>
                </a>
            </li>
            <li>
                <a accesskey="4" href="#main-footer" id="link-rodape">
                    Ir para o rodap&eacute;
                    <span>4</span>
                </a>
            </li>
        </ul>

        <ul id="portal-siteactions">
            <li>
                <a href="<?php echo home_url(); ?>/acessibilidade">Acessibilidade</a>
            </li>
            <li>
                <a href="#" class="alto_contraste">Alto Contraste</a>
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/mapa-do-site">Mapa do Site</a>
            </li>
        </ul>

        <div id="logo-header-tema">
            <a href="<?php echo home_url(); ?>" title="Sistema de Apoio &agrave;s Leis de Incentivo &agrave; Cultura">
                <div id="portal-title"><?php bloginfo('name'); ?></div>
                <div id="portal-description" style="color:#FFF">
                    <?php bloginfo('description'); ?>
                </div>
            </a>
        </div>

    </div>

</div>

<div id="et-main-area">
