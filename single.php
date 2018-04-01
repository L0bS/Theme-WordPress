<?php
get_header();
?>
<section>
<div class='container'>
    <!--puxando as tags -->
    <?php if(have_posts()): ?>
    <?php while(have_posts()):  ?>
    <?php the_post(); ?>

    <article>
        <!--colocando o titulo e linkando ele-->
                <h2>
                <?php the_title(); ?>
                </h2>
            <!--adicionando as imagem na pag-->
        <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full'); ?>
        <?php endif; ?>
        

        <!--Colocando o nome do autor, data e categoria-->
        <p>
            <?php echo get_the_date(); ?> |
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
                <?php the_author(); ?></a> |
                <?php the_category(', '); ?>
        </p>
        <!--Exibindo o os comentarios dos posts-->
        <p>
            
            <?php the_content(); ?>
            
        </p>
        <!--numeros de comentarios-->
        <p>   
            <?php comments_number('(0) Comentários', '(1) Comentário', '(%) Comentários'); ?>
        </p>
        
        <hr/>
        
        <?php 
        
        if(comments_open()){
            comments_template();
        }
        
        ?>
       
        
    </article>
    
    <?php endwhile; ?>
    <?php endif; ?>
    <!--paginação-->
    <div class="paginacao">
        <!--Proxima página-->
        <div class="pagina_anterior">
            <?php previous_post_link(); ?>
        </div>
        <!--Página anterior-->
        <div class="pagina_proxima">
            <?php next_post_link()  ?>
        </div>
    </div>
    
</div>

<?php get_sidebar(); ?>
    
    <div style="clear: both"></div>

</section>

<?php
get_footer();
?>

