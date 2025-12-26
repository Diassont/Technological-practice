</main>

<footer class="site-footer">
  <div class="container footer-inner">
    <div class="footer-col">
      <div class="footer-logo">DIS<span>STORE</span></div>
      <p class="muted"> Комплектуючі та периферія для роботи, навчання та ігор.</p>
    </div>

    <div class="footer-col">
      <div class="footer-title"></div>
      <?php
        wp_nav_menu([
          'theme_location' => 'footer_menu',
          'container' => false,
          'menu_class' => 'footer-menu',
          'fallback_cb' => false,
        ]);
      ?>
    </div>

    <div class="footer-col">
      <div class="footer-title">Контакти</div>
      <p class="muted">support@disstore.ua</p>
      <p class="muted">+380 95 105 51 67</p>
    </div>
  </div>

  <div class="container footer-bottom">
    <span class="muted">© <?php echo date('Y'); ?> DIS STORE</span>
  </div>
</footer>

<div class="modal" id="productModal" aria-hidden="true">
  <div class="modal__overlay" data-close></div>

  <div class="modal__dialog" role="dialog" aria-modal="true" aria-label="Деталі товару">
    <button class="modal__close" type="button" data-close aria-label="Закрити">✕</button>

    <div class="modal__grid">
      <div class="modal__media">
        <img id="modalImg" src="" alt="">
      </div>

      <div class="modal__content">
        <h3 class="modal__title" id="modalTitle"></h3>
        <div class="modal__price" id="modalPrice"></div>
        <p class="muted" id="modalStock" style="margin:6px 0 0;"></p>

        <p class="modal__desc" id="modalDesc"></p>

        <div class="modal__specs">
          <div class="modal__specTitle">Характеристики</div>
          <ul id="modalSpecs"></ul>
        </div>

        <div class="modal__actions">
          <a class="btn" id="modalBuy" href="<?php echo esc_url(home_url('/contacts')); ?>" target="_self">Придбати</a>
          <button class="btn btn-outline" type="button" data-close>Закрити</button>
        </div>

        <p class="modal__hint">
          Натисни <strong>«Придбати»</strong> — і ми уточнимо наявність та доставку.
        </p>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
