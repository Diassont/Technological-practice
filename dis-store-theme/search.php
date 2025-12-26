<?php get_header(); ?>

<section class="section hero" style="padding-top:16px;">
  <div class="container">

    <div class="section-head">
      <div>
        <h1 class="page-title" style="margin-bottom:6px;">
          Результати пошуку: “<?php echo esc_html(get_search_query()); ?>”
        </h1>
        <p class="muted" style="margin:0;">
          Знайдено: <?php echo intval($wp_query->found_posts); ?>
        </p>
      </div>

      <a class="head-link" href="<?php echo esc_url(home_url('/catalog/')); ?>">
        Весь каталог <span class="arr">→</span>
      </a>
    </div>

    <div style="margin-top:14px;">
      <form class="header-search" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input class="search-input" type="search" name="s" placeholder="Пошук..." value="<?php echo esc_attr(get_search_query()); ?>">
      </form>
    </div>

    <div style="margin-top:14px;">
      <?php if (have_posts()): ?>
        <div class="grid">
          <?php while (have_posts()): the_post(); ?>
            <a class="card" href="<?php the_permalink(); ?>">
              <strong><?php the_title(); ?></strong>
              <div class="muted" style="margin-top:8px;">
                <?php echo wp_trim_words(get_the_excerpt(), 22); ?>
              </div>
            </a>
          <?php endwhile; ?>
        </div>

        <div style="margin-top:18px;">
          <?php the_posts_pagination(); ?>
        </div>

      <?php else: ?>
        <p class="muted" style="margin-top:14px;">Нічого не знайдено. Спробуй інший запит.</p>
      <?php endif; ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>
