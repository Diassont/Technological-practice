<?php get_header(); ?>

<section class="container section">
  <div class="section-head">
    <div>
      <h1 class="page-title" style="margin-bottom:8px;">Каталог</h1>
      <p class="muted" style="margin:0;">Оберіть категорію або перегляньте популярні позиції.</p>
    </div>

    <a class="head-link" href="<?php echo esc_url(home_url('/contacts')); ?>">
      Підібрати під бюджет <span class="arr">→</span>
    </a>
  </div>

  <h2 class="section-title" style="margin-top:22px;">Категорії</h2>
  <div class="grid grid-4" style="margin-top:12px;">
    <a class="card cat-card" href="#"><div class="cat-emoji">🖥️</div><strong>Монітори</strong><div class="muted">144Hz • IPS • 2K</div></a>
    <a class="card cat-card" href="#"><div class="cat-emoji">🖱️</div><strong>Миші</strong><div class="muted">сенсор • DPI • RGB</div></a>
    <a class="card cat-card" href="#"><div class="cat-emoji">⌨️</div><strong>Клавіатури</strong><div class="muted">механіка • свічі</div></a>
    <a class="card cat-card" href="#"><div class="cat-emoji">🎧</div><strong>Навушники</strong><div class="muted">мікрофон • 7.1</div></a>
  </div>

  <h2 class="section-title" style="margin-top:28px;">Популярні товари (демо)</h2>

  <div class="product-grid" style="margin-top:12px;">

    <!-- CARD 1 -->
    <article class="p-card">
      <div class="p-imgwrap">
        <img class="p-img"
             src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/demo-monitor.jpg'); ?>"
             alt="Монітор 27&quot; 2K 165Hz"
             loading="lazy">
      </div>

      <div class="p-body">
        <h3 class="p-title">Монітор 27" 2K 165Hz</h3>
        <p class="p-desc">IPS матриця, плавний геймплей, ідеально для 1440p.</p>

        <div class="p-meta">
          <span class="pill">ТОП</span>
          <span class="pill pill-outline">Gaming</span>
        </div>

        <div class="p-bottom">
          <div class="p-price">
            <div class="price">9 999 грн</div>
            <div class="muted">в наявності</div>
          </div>

          <button class="btn btn-outline p-more"
            data-title="Монітор 27&quot; 2K 165Hz"
            data-price="9 999 грн"
            data-stock="В наявності • відправка 1–2 дні"
            data-img="<?php echo esc_url(get_template_directory_uri() . '/assets/img/demo-monitor.jpg'); ?>"
            data-desc="IPS, 165Hz, 1ms, підтримка Adaptive Sync. Рекомендовано для FPS/Action у 1440p."
            data-specs="Діагональ: 27&quot;|Роздільна: 2560×1440|Частота: 165Hz|Матриця: IPS|Порти: HDMI/DP"
          >Детальніше</button>
        </div>
      </div>
    </article>

    <!-- CARD 2 -->
    <article class="p-card">
      <div class="p-imgwrap">
        <img class="p-img"
             src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/demo-ssd.jpg'); ?>"
             alt="SSD NVMe 1TB Gen4"
             loading="lazy">
      </div>

      <div class="p-body">
        <h3 class="p-title">SSD NVMe 1TB Gen4</h3>
        <p class="p-desc">Швидке завантаження Windows, ігор та програм.</p>

        <div class="p-meta">
          <span class="pill">ХІТ</span>
          <span class="pill pill-outline">Office</span>
        </div>

        <div class="p-bottom">
          <div class="p-price">
            <div class="price">2 399 грн</div>
            <div class="muted">в наявності</div>
          </div>

          <button class="btn btn-outline p-more"
            data-title="SSD NVMe 1TB Gen4"
            data-price="2 399 грн"
            data-stock="В наявності • гарантія 12 міс"
            data-img="<?php echo esc_url(get_template_directory_uri() . '/assets/img/demo-ssd.jpg'); ?>"
            data-desc="NVMe Gen4 — відмінний вибір для ігор, монтажу та швидкого запуску системи."
            data-specs="Обʼєм: 1TB|Інтерфейс: PCIe 4.0|Форм-фактор: M.2 2280|Швидкість: до 7000 MB/s"
          >Детальніше</button>
        </div>
      </div>
    </article>

    <!-- CARD 3 -->
    <article class="p-card">
      <div class="p-imgwrap">
        <img class="p-img"
             src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/demo-mouse.jpg'); ?>"
             alt="Миша 26K DPI"
             loading="lazy">
      </div>

      <div class="p-body">
        <h3 class="p-title">Миша 26K DPI</h3>
        <p class="p-desc">Легка, точна, стабільна — для шутерів та кіберспорту.</p>

        <div class="p-meta">
          <span class="pill">ТОП</span>
          <span class="pill pill-outline">FPS</span>
        </div>

        <div class="p-bottom">
          <div class="p-price">
            <div class="price">1 299 грн</div>
            <div class="muted">в наявності</div>
          </div>

          <button class="btn btn-outline p-more"
            data-title="Миша 26K DPI"
            data-price="1 299 грн"
            data-stock="В наявності • доставка по Україні"
            data-img="<?php echo esc_url(get_template_directory_uri() . '/assets/img/demo-mouse.jpg'); ?>"
            data-desc="Сенсор 26K DPI, зручний хват, відмінна точність та швидка реакція."
            data-specs="Сенсор: 26K DPI|Вага: 65–75г|Підключення: USB|Перемикачі: до 50M кліків"
          >Детальніше</button>
        </div>
      </div>
    </article>

    <!-- CARD 4 -->
    <article class="p-card">
      <div class="p-imgwrap">
        <img class="p-img"
             src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/demo-headset.jpg'); ?>"
             alt="Навушники з мікрофоном"
             loading="lazy">
      </div>

      <div class="p-body">
        <h3 class="p-title">Навушники з мікрофоном</h3>
        <p class="p-desc">Чіткий звук + мікрофон для Discord/CS/Valorant.</p>

        <div class="p-meta">
          <span class="pill">NEW</span>
          <span class="pill pill-outline">Audio</span>
        </div>

        <div class="p-bottom">
          <div class="p-price">
            <div class="price">1 799 грн</div>
            <div class="muted">в наявності</div>
          </div>

          <button class="btn btn-outline p-more"
            data-title="Навушники з мікрофоном"
            data-price="1 799 грн"
            data-stock="В наявності • гарантія 12 міс"
            data-img="<?php echo esc_url(get_template_directory_uri() . '/assets/img/demo-headset.jpg'); ?>"
            data-desc="Комфортна посадка, якісний мікрофон, збалансований звук для ігор і музики."
            data-specs="Формат: Over-ear|Мікрофон: є|Підключення: USB/Jack|Звук: стерео/7.1 (залежить від моделі)"
          >Детальніше</button>
        </div>
      </div>
    </article>

  </div>
</section>

<!-- MODAL -->
<div class="modal" id="productModal" aria-hidden="true">
  <div class="modal__overlay" data-close></div>

  <div class="modal__dialog" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <button class="modal__close" type="button" data-close aria-label="Закрити">✕</button>

    <div class="modal__grid">
      <div class="modal__media">
        <img id="modalImg" src="" alt="" loading="lazy">
      </div>

      <div class="modal__content">
        <h2 id="modalTitle" class="modal__title"></h2>
        <div class="modal__price" id="modalPrice"></div>
        <div class="muted" id="modalStock" style="margin-top:6px;"></div>

        <p class="modal__desc muted" id="modalDesc"></p>

        <div class="modal__specs">
          <div class="modal__specTitle">Характеристики</div>
          <ul id="modalSpecs"></ul>
        </div>

        <div class="modal__actions">
          <a class="btn" id="buyBtn" href="<?php echo esc_url(home_url('/contacts')); ?>">Придбати</a>
          <button class="btn btn-outline" type="button" data-close>Закрити</button>
        </div>

        <div class="muted" style="margin-top:10px; font-size:13px;">
          Натисни “Придбати” — і ми уточнимо наявність та доставку.
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
