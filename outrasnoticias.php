

<div class="card horizontal">
      <div class="card-image">
          <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); ?>
        <img class="left thumbnews" src="<?php echo $image[0]; ?>">
      </a>
      </div>
      <div class="card-stacked">
        <div class="bloco-thumbnews">
        <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-fonte orange-text darken-2"><?php the_title();?>
</a>
        </div>
        <div class="bloco-thumbnews">
          <div class="tamanho-icones orange-text text-lighten-3">
            <span class="data-post"> <?php the_time('d.m.Y');?> </span>
            <span class="hora-post"> <?php the_time('G:i');?></span>

          </div>
        </div>
      </div>
    </div>
