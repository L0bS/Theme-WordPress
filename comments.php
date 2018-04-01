<?php 

if(post_password_required()){
    return;
}

if(have_comments()){
    foreach ($comments as $comment){    
?>

<div class="comentarios">
    
    <div class="comentario_foto">
        <?php echo get_avatar($comment, 60); ?>
    </div>
    
    <div class="comentario_area">
        <strong><?php comment_author(); ?></strong> - <?php comment_date(); ?><br/>
        
        <?php comment_text(); ?>
    </div>
    
</div>

<?php
    }
}
?>