<?php /* Template Name: AES Hydro*/ ?>

<?php get_header() ?>
<div>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
  <?php endwhile;
  endif; ?>
</div>

<?php query_posts('category_name=blog&showposts=3');
if (have_posts()) : ?>
  <div class="blogs-preview-container padded">
    <h2>
      Recent Blogs
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
  <div class="view-all-blogs">
    <a href="/category/blog/">
      <button>View All Blogs</button>
    </a>
  </div>
<?php endif; ?>
<?php get_footer(); ?>