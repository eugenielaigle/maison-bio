<?php
/**
 * Template part for displaying one post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maison_Biologique
 */


?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php

  the_title( '<h1 class="article-title entry-title">', '</h1>' ); ?>
  <div class="archive-description">(<?php the_category('()'); ?>)</div>


  <?php  if( have_rows('article') ):
    while ( have_rows('article') ) : the_row();

// PARTIE TEXTE + IMAGES + SIDEBAR
      if( get_row_layout() == 'texte_image_sidebar' ):?>
        <div class="orga-partie1">
          <!-- Texte -->
          <div class="textes-gauche">
            <div class="article-content">
              <p class="chapeau-article"><?php the_sub_field('chapeau'); ?></p>
              <?php the_sub_field('content_1'); ?>
              <p class="citation-article xs-invisible"><?php the_sub_field('citation'); ?></p>
              <div class="xs-invisible">
                <?php the_sub_field('content_2'); ?>
              </div>
            </div>
          </div>


          <!-- Images -->
          <div class="images-centre">
            <div>
              <?php if( have_rows('images_droite') ):
                while ( have_rows('images_droite') ) : the_row();
                  if( get_row_layout() == 'image_verticale' ):
                    $image = get_sub_field('imagev');?>
                    <img class="image-verticale"  src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                  <?php elseif( get_row_layout() == 'image_horizontale' ):
                    $image2 = get_sub_field('imageh');?>
                    <img class="image-horizontale"  src="<?php echo $image2['url'];?>" alt="<?php echo $image2['alt'];?>">
                  <?php elseif( get_row_layout() == 'image_carree' ):
                    $image3 = get_sub_field('imagec');?>
                    <div class="image-carree">
                      <img src="<?php echo $image3['url'];?>" alt="<?php echo $image3['alt'];?>">
                    </div>
                  <?php endif;?>

                <?php endwhile;
              else :
              endif;?>
            </div>

            <!-- Réseaux sociaux -->
            <?php
            $rs = get_sub_field('reseaux_sociaux');
            if ($rs == true) { ?>
              <div class="partage xs-invisible">
                <?php
                $lien = get_permalink();
                $titre = strip_tags(get_the_title());
                $facebook_link  = 'https://www.facebook.com/sharer/sharer.php?u='.$lien;
                $twitter_link  = 'http://www.linkedin.com/shareArticle?mini=true&url=' . $lien . '&title=' . $titre;
                ?>
                <p class="partagez">PARTAGER:</p>
                <a class="partage-facebook" href="<?php echo $facebook_link;?>" target="_blank">FACEBOOK</a>
                <a class="partage-twitter" href="<?php echo $twitter_link; ?>" target="_blank">LINKEDIN</a>
                <a class="partage-email" href="<?php echo $mail_link;?>">EMAIL</a>
              </div>

              <?php } ?>
            </div>


            <!-- Sidebar -->
            <div class="sidebar-droite xs-invisible">
              <?php
              $photos = get_field('photographies');
              if (!empty($photos)):?>
                <div class="sidebar-top">
                  <p>Ecrit par:</p>
                  <p><?php the_field('author'); ?></p>
                  <br>
                  <p>Photographies:</p>
                  <p><?php the_field('photographies'); ?></p>
                  <br>
                  <p>Publié le</p>
                  <p><?php  echo get_the_date();?></p>
                </div>
                <?php
              endif;
              $sidebar = get_field('sidebar');
              if (!empty($sidebar)):?>
                <div class="sidebar-bottom">
                  <?php echo $sidebar;; ?>
                </div>
              <?php endif; ?>
            </div>

            <!-- Texte -->
            <div class="textes-gauche">
              <div class="article-content">
                <p class="citation-article xs-visible"><?php the_sub_field('citation'); ?></p>
                <div class="xs-visible">
                  <?php the_sub_field('content_2'); ?>
                </div>
              </div>
            </div>

          </div>




          <?php
// PARTIE IMAGE PANORAMIQUE
          elseif( get_row_layout() == 'image_panoramique' ):?>
            <div class="image-pano">
              <?php $file = get_sub_field('image_horizontale');?>
              <img class="image-verticale"  src="<?php echo $file['url'];?>" alt="<?php echo $file['alt'];?>">
            </div>
          <?php  endif;






        endwhile;

      else :

      endif;?>



      <!-- Sidebar et Réseaux sociaux sur mobile -->
      <div class="sidebar-droite xs-visible">
        <?php
        $sidebar = get_field('sidebar');
        if (!empty($sidebar)):?>
          <div class="sidebar-bottom">
            <?php echo $sidebar;; ?>
          </div>
        <?php endif;
        $photos = get_field('photographies');
        if (!empty($photos)):?>
        <div class="sidebar-top">
          <p>Ecrit par:</p>
          <p><?php the_field('author'); ?></p>
          <br>
          <p>Photographies:</p>
          <p><?php the_field('photographies'); ?></p>
          <br>
          <p>Publié le</p>
          <p><?php  echo get_the_date();?></p>
        </div>
        <?php
      endif;?>
    </div>

      <div class="partage xs-visible">
        <?php
        $lien = get_permalink();
        $titre = strip_tags(get_the_title());
        $facebook_link  = 'https://www.facebook.com/sharer/sharer.php?u='.$lien;
        $twitter_link  = 'https://twitter.com/share?url=' . $lien . '&text=' . $titre ;
        $mail_link = 'mailto:?subject=' . $titre . '&body=' . $titre . ' - ' . $lien ;
        ?>
        <p class="partagez">PARTAGER:</p>
        <div>
        <a class="partage-facebook" href="<?php echo $facebook_link;?>" target="_blank">FACEBOOK</a>
        <a class="partage-twitter" href="<?php echo $twitter_link; ?>" target="_blank">LINKEDIN</a>
        <a class="partage-email" href="<?php echo $mail_link;?>">EMAIL</a>

        </div>
      </div>

    <?php
// PARTIE ARTICLES A LA UNE
    $post_objects = get_field('articles_a_la_une');
    if( $post_objects ): ?>
      <div class="articles-a-la-une">
        <p class="meme-theme">Dans le même thème</p>
        <div class="articles-inspirants">
          <?php foreach( $post_objects as $post): ?>
            <?php setup_postdata($post); ?>
            <div class="article-inspirant">
              <a href="<?php the_permalink(); ?>">
                <div class="image-carree">
                  <?php the_post_thumbnail(); ?>
                </div>
                <h4 class="entry-category"><?php the_category(); ?></h4>
                <h3 class="article-title"><?php the_title(); ?></h3>
                <div class="entry-excerpt"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo wpse_custom_excerpts(30); ?></a></div>
              </a>
            </div>
          <?php endforeach; ?>
        </div> <!-- end articles-inspirants -->
        <?php wp_reset_postdata(); ?>
      </div> <!-- end articles à la une -->
    <?php endif;?>






  </article><!-- #post-<?php the_ID(); ?> -->

