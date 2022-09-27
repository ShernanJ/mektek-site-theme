<?php get_header() ?>

<div class="blogs-preview-container padded">
  <h2>
    Blogs
  </h2>

  <div class="cards">
    <?php
    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="card">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('largest'); ?>" class="card-img" />
            <?php endif; ?>
            <?php if (!has_post_thumbnail()) : ?>
              <div class="card-img"></div>
            <?php endif; ?>
            <div class="card-content">
              <p><?php the_title() ?></p>
              <span><?php echo get_the_date('M d, Y'); ?></span>
            </div>
          </a>
        </div>
    <?php endwhile;
    endif; ?>
  </div>
</div>
<br />

<?php get_footer(); ?>