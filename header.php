   <head>
        <meta charset='UTF-8' />
        <title>title</title>
        <?php  wp_head();   ?>
    </head>
    <body <?php body_class('cs_body') ?> >
        <header>
            <h1>TESTANDO O HTML</h1>
        <?php
        if (has_nav_menu('primary'))
        {
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => 'nav',
                'container_class' => 'cs_menu',
                'fullback_cb' => false
            ));
        }
        ?>
        </header>