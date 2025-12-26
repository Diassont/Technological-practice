<?php get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container hero-inner">
    <div class="hero-left">
      <div class="badge">🔥 ТОП-ціни • 2025</div>
      <h1 class="hero-title">DIS STORE — комплектуючі та периферія</h1>
      <p class="hero-sub muted">
        Підбір під твій ПК, швидка доставка по Україні та чесна гарантія.
        Зробимо збірку “під ключ” або допоможемо з апгрейдом.
      </p>

      <div class="hero-actions">
        <a class="btn" href="<?php echo esc_url(home_url('/catalog')); ?>">Перейти в каталог</a>
        <a class="btn btn-outline" href="<?php echo esc_url(home_url('/contacts')); ?>">Підібрати комплект</a>
      </div>

      <div class="hero-stats">
        <div class="stat">
          <div class="stat-num">1–2 дні</div>
          <div class="muted">відправка</div>
        </div>
        <div class="stat">
          <div class="stat-num">12+ міс</div>
          <div class="muted">гарантія</div>
        </div>
        <div class="stat">
          <div class="stat-num">TOP</div>
          <div class="muted">підбір під бюджет</div>
        </div>
      </div>
    </div>

    <div class="hero-right">
      <div class="hero-card">
        <div class="hero-card-title">🎯 Хіт сезону</div>
        <div class="hero-product">
          <div class="hp-name">Відеокарти для 1080p/1440p</div>
          <div class="muted">Підбір під FPS та твій монітор</div>
          <div class="hp-actions">
            <a class="btn btn-outline" href="<?php echo esc_url(home_url('/catalog')); ?>">Дивитись</a>
            <a class="btn" href="<?php echo esc_url(home_url('/contacts')); ?>">Підібрати</a>
          </div>
        </div>
      </div>

      <div class="hero-strip">
        <div class="strip-item">Контроль якості перед відправкою</div>
        <div class="strip-item">Підбір конфігурації під задачі</div>
        <div class="strip-item">Чіткі рекомендації</div>
      </div>
    </div>
  </div>
</section>

<!-- CATEGORIES -->
<section class="container section">
  <div class="section-head">
    <h2 class="section-title">Популярні категорії</h2>
   <a class="head-link" href="<?php echo esc_url(home_url('/catalog')); ?>"> Весь каталог <span class="arr">→</span></a>
  </div>

  <div class="grid grid-4">
    <a class="card cat-card" href="<?php echo esc_url(home_url('/catalog')); ?>">
      <div class="cat-emoji">🖥️</div>
      <strong>Монітори</strong>
      <div class="muted">144Hz • IPS • 2K</div>
    </a>

    <a class="card cat-card" href="<?php echo esc_url(home_url('/catalog')); ?>">
      <div class="cat-emoji">🖱️</div>
      <strong>Миші</strong>
      <div class="muted">сенсор • DPI • RGB</div>
    </a>

    <a class="card cat-card" href="<?php echo esc_url(home_url('/catalog')); ?>">
      <div class="cat-emoji">⌨️</div>
      <strong>Клавіатури</strong>
      <div class="muted">механіка • свічі</div>
    </a>

    <a class="card cat-card" href="<?php echo esc_url(home_url('/catalog')); ?>">
      <div class="cat-emoji">🎧</div>
      <strong>Навушники</strong>
      <div class="muted">мікрофон • 7.1</div>
    </a>
  </div>
</section>

<!-- FEATURES -->
<section class="container section">
  <h2 class="section-title">Чому DIS STORE</h2>

  <div class="grid grid-4">
    <div class="card feature-card">
      <strong>⚡ Швидко</strong>
      <div class="muted" style="margin-top:8px;">Відповідь + оформлення без зайвих питань.</div>
    </div>
    <div class="card feature-card">
      <strong>🧠 Підбір</strong>
      <div class="muted" style="margin-top:8px;">Під твій бюджет та задачі: ігри/робота.</div>
    </div>
    <div class="card feature-card">
      <strong>🛡️ Гарантія</strong>
      <div class="muted" style="margin-top:8px;">Офіційні умови, документи.</div>
    </div>
    <div class="card feature-card">
      <strong>✅ Перевірка</strong>
      <div class="muted" style="margin-top:8px;">Перевіряємо перед відправкою.</div>
    </div>
  </div>
</section>

<!-- TOP PRODUCTS (DEMO) -->
<section class="container section">
  <div class="section-head">
    <h2 class="section-title">Топ товари 2025</h2>
    <a class="head-link" href="<?php echo esc_url(home_url('/catalog')); ?>"> Дивитись більше <span class="arr">→</span></a>
  </div>

  <div class="grid grid-4">
    <a class="card product-card" href="#">
      <div class="product-top">
        <span class="pill">ТОП</span>
        <span class="pill pill-outline">Gaming</span>
      </div>
      <strong>Монітор 27" 2K 165Hz</strong>
      <div class="muted" style="margin-top:8px;">IPS • G-Sync/FreeSync</div>
      <div class="price-row">
        <span class="price">від 9 999 грн</span>
        <span class="muted">в наявності</span>
      </div>
    </a>

    <a class="card product-card" href="#">
      <div class="product-top">
        <span class="pill">ХІТ</span>
        <span class="pill pill-outline">Office</span>
      </div>
      <strong>SSD NVMe 1TB Gen4</strong>
      <div class="muted" style="margin-top:8px;">швидке завантаження • ігри</div>
      <div class="price-row">
        <span class="price">від 2 399 грн</span>
        <span class="muted">в наявності</span>
      </div>
    </a>

    <a class="card product-card" href="#">
      <div class="product-top">
        <span class="pill">ТОП</span>
        <span class="pill pill-outline">FPS</span>
      </div>
      <strong>Миша 26K DPI</strong>
      <div class="muted" style="margin-top:8px;">легка • точний сенсор</div>
      <div class="price-row">
        <span class="price">від 1 299 грн</span>
        <span class="muted">в наявності</span>
      </div>
    </a>

    <a class="card product-card" href="#">
      <div class="product-top">
        <span class="pill">NEW</span>
        <span class="pill pill-outline">Audio</span>
      </div>
      <strong>Навушники з мікрофоном</strong>
      <div class="muted" style="margin-top:8px;">шумозаглушення • 7.1</div>
      <div class="price-row">
        <span class="price">від 1 799 грн</span>
        <span class="muted">в наявності</span>
      </div>
    </a>
  </div>

  <div class="banner">
    <div>
      <strong style="font-size:18px;">🎁 Акція тижня</strong>
      <div class="muted" style="margin-top:6px;">Знижка на комплект “клава + миша” при замовленні разом.</div>
    </div>
    <a class="btn" href="<?php echo esc_url(home_url('/catalog')); ?>">Перейти</a>
  </div>
</section>

<!-- REVIEWS -->
<section class="container section">
  <h2 class="section-title">Відгуки</h2>

  <div class="grid grid-3">
    <div class="card review-card">
      <strong>Андрій</strong>
      <div class="muted" style="margin-top:6px;">“Підібрали монітор під ігри, доставка швидка, все ок.”</div>
      <div class="rating">★★★★★</div>
    </div>

    <div class="card review-card">
      <strong>Марія</strong>
      <div class="muted" style="margin-top:6px;">“Пояснили різницю по SSD, допомогли з вибором.”</div>
      <div class="rating">★★★★★</div>
    </div>

    <div class="card review-card">
      <strong>Ігор</strong>
      <div class="muted" style="margin-top:6px;">“Норм гарантія + перевірили перед відправкою.”</div>
      <div class="rating">★★★★★</div>
    </div>
  </div>
</section>

<!-- FAQ CTA -->
<section class="container section">
  <div class="faq-box">
    <div>
      <h2 class="section-title" style="margin:0;">Потрібна допомога з підбором?</h2>
      <div class="muted" style="margin-top:8px;">Напиши нам — підберемо під бюджет і задачі.</div>
    </div>
    <div class="faq-actions">
      <a class="btn" href="<?php echo esc_url(home_url('/contacts')); ?>">Написати</a>
      <a class="btn btn-outline" href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
