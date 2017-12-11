<?php
global $short_url;
// Checar se ja existe um URL encurtado armazenado no banco de dados
if(get_post_meta($post->ID, "short_url", true) != ""){
  //Short URL already exists, pull from post meta
  $short_url = get_post_meta($post->ID, "short_url", true);
}
else {
  // Caso não tenha, vamos criar uma
  $full_url = get_permalink();
  $short_url = make_bitly_url($full_url);
  // Salvar no port_meta
  add_post_meta($post->ID, 'short_url', $short_url, true);
}
?>

  <a href="whatsapp://send?text=<?php echo get_post_meta( $post->ID,'txt-facebook', true )?>+<?php the_Permalink(); ?>">
      <i class="fa fa-whatsapp green-text green-darken-4 icons-social show" aria-hidden="true"></i>
      </a>

  <a href="http://www.facebook.com/share.php?u=<?php the_Permalink(); ?>">
      <i class="fa fa-facebook-official  blue-text text-darken-4 icons-social" aria-hidden="true"></i>
      </a>

  <a href="https://twitter.com/intent/tweet?text=<?php echo get_post_meta( $post->ID,'tweet', true )?>+<?php the_Permalink(); ?>">
      <i class="fa fa-twitter-square blue-text text-darken-1 icons-social" aria-hidden="true"></i>
    </a>

    <a href="mailto:?subject=<?php the_title();?>&amp;body=<?php echo get_post_meta( $post->ID,'txt-facebook', true )?> <?php the_Permalink(); ?>" title=”Envie este artigo a um amigo!”>
        <i class="fa text-darken-1 orange-text darken-5-text fa-envelope-o icons-social" aria-hidden="true"></i>
      </a>
