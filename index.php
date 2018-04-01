<?php
get_header();
?>
<section>
<div class='container'>
    <!--puxando as tags -->
    <?php if(have_posts()): ?>
    <?php while(have_posts()):  ?>
    <?php the_post(); ?>
    <!--adicionando as imagem na pag-->
    <article>  
        <?php if(has_post_thumbnail()): ?>
        
        <a href="<?php the_permalink(); ?>" class="post_thumbnail">

                <?php the_post_thumbnail('full', array( 'class' => 'cs_img')); ?>

            </a>
        <?php endif; ?>
        <!--colocando o titulo e linkando ele-->
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <!--Colocando o nome do autor, data e categoria-->
        <p>
            <?php echo get_the_date(); ?> |
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
                <?php the_author(); ?></a> |
                <?php the_category(', '); ?>
        </p>
        <!--Exibindo o os comentarios dos posts-->
        <p>
            
            <?php the_excerpt(); ?>
            
        </p>
        <!--numeros de comentarios-->
        <p>   
            <?php comments_number('(0) Comentários', '(1) Comentário', '(%) Comentários'); ?> |
            
            <a href="<?php the_permalink(); ?>">LEIA MAIS</a>
        </p>
        
    </article>
    
    <?php endwhile; ?>
    <?php endif; ?>
    <!--paginação-->
    <div class="paginacao">
        <!--Proxima página-->
        <div class="pagina_anterior">
            <?php previous_posts_link('Página Anterior'); ?>
        </div>
        <!--Página anterior-->
        <div class="pagina_proxima">
            <?php next_posts_link('Proxima Página')  ?>
        </div>
        
        
    </div>
    
</div>

<?php get_sidebar(); ?>
    
    <div style="clear: both"></div>

</section>

<?php
get_footer();
?>

