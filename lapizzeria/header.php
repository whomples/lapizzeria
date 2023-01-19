<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>

<header class="site-header contenedor">
    <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo La Pizzería">
        </a>
    </div>
    <div class="informacion-header">
        <div class="redes-sociales">
            <!-- HACER: Agregar menú -->
        </div><!--.redes sociales -->
        <div class="direccion">
            <p>Arturo Soria, 4 Portal E, Madrid 28043</p>
            <p>Telefono: 914158622</p>
        </div><!--.bloque dirección -->
    </div><!--.información header -->
</header>

<div class="menu-principal">
    <div class="contenedor">
        <?php
            $args = array(
                'theme-location'  => 'header-menu',
                'container'       => 'nav',
                'container_class' => 'menu-sitio',
                'containder_id'   => 'menu'
            );
            wp_nav_menu( $args );
        ?>
    </div>
</div>
    
