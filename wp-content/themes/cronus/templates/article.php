<?php global $post, $posts_total, $posts_index; ?>

<?php tempo_get_template_part( 'templates/article/before' ); ?>

<article <?php post_class( 'tempo-article classic' ); ?>>

    <?php tempo_get_template_part( 'templates/article/prepend' ); ?>


    <?php tempo_get_template_part( 'templates/article/meta/top' ); ?>

    <?php tempo_get_template_part( 'templates/article/title' ); ?>

    <?php tempo_get_template_part( 'templates/article/thumbnail' ); ?>

    <?php tempo_get_template_part( 'templates/article/hentry' ); ?>

    <?php tempo_get_template_part( 'templates/article/append' ); ?>

</article>

<?php tempo_get_template_part( 'templates/article/after' ); ?>