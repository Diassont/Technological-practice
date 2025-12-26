<?php get_header(); ?>

<section class="container section">
  <h1 class="page-title">Контакти</h1>
  <p class="muted">Зв’яжіться з нами зручним способом.</p>

  <div class="grid" style="margin-top:20px;">
    <div class="card">
      <strong>📧 Email</strong>
      <div class="muted" style="margin-top:8px;">support@disstore.ua</div>
    </div>

    <div class="card">
      <strong>📱 Телефон</strong>
      <div class="muted" style="margin-top:8px;">+380 95 105 51 67</div>
    </div>

    <div class="card">
      <strong>💬 Telegram</strong>
      <div class="muted" style="margin-top:8px;">@disstore_support</div>
    </div>

    <div class="card">
      <strong>⏰ Графік</strong>
      <div class="muted" style="margin-top:8px;">Пн–Сб: 10:00–19:00</div>
    </div>
  </div>

  <div class="card" style="margin-top:24px;">
  <h3 style="margin-top:0;">Напишіть нам</h3>

  <?php echo do_shortcode('[wpforms id="150" title="false"]'); ?>
</div>
  </div>
</section>

<?php get_footer(); ?>
