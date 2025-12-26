/* =========================
   1) Burger + Mobile Menu
   ========================= */
(() => {
  const burger = document.querySelector(".burger");
  const mobileMenu = document.getElementById("mobileMenu");
  if (!burger || !mobileMenu) return;

  const open = () => {
    mobileMenu.hidden = false;
    burger.setAttribute("aria-expanded", "true");
    document.body.classList.add("menu-open");
  };

  const close = () => {
    mobileMenu.hidden = true;
    burger.setAttribute("aria-expanded", "false");
    document.body.classList.remove("menu-open");
  };

  burger.addEventListener("click", () =>
    burger.getAttribute("aria-expanded") === "true" ? close() : open()
  );

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") close();
  });

  mobileMenu.addEventListener("click", (e) => {
    if (e.target.closest("a")) close();
  });
})();

/* =========================
   2) Product Modal (open/close)
   ========================= */
document.addEventListener("click", (e) => {
  const btn = e.target.closest(".p-more");
  const modal = document.getElementById("productModal");
  if (!modal) return;

  // Відкрити модалку
  if (btn) {
    const title = btn.dataset.title || "";
    const price = btn.dataset.price || "";
    const stock = btn.dataset.stock || "";
    const img = btn.dataset.img || "";
    const desc = btn.dataset.desc || "";
    const specsRaw = btn.dataset.specs || "";

    document.getElementById("modalTitle").textContent = title;
    document.getElementById("modalPrice").textContent = price;
    document.getElementById("modalStock").textContent = stock;
    document.getElementById("modalDesc").textContent = desc;

    const modalImg = document.getElementById("modalImg");
    modalImg.src = img;
    modalImg.alt = title;

    const specsUl = document.getElementById("modalSpecs");
    specsUl.innerHTML = "";
    specsRaw.split("|").forEach((line) => {
      const t = line.trim();
      if (!t) return;
      const li = document.createElement("li");
      li.textContent = t;
      specsUl.appendChild(li);
    });

    modal.classList.add("is-open");
    document.body.classList.add("menu-open"); // блокуємо скрол як у моб.меню
    modal.setAttribute("aria-hidden", "false");
    return;
  }

  // Закрити (по overlay або по кнопці)
  if (e.target.matches("[data-close]")) {
    modal.classList.remove("is-open");
    document.body.classList.remove("menu-open");
    modal.setAttribute("aria-hidden", "true");
  }
});

// Закриття по ESC
document.addEventListener("keydown", (e) => {
  if (e.key !== "Escape") return;

  const modal = document.getElementById("productModal");
  if (!modal) return;
  if (!modal.classList.contains("is-open")) return;

  modal.classList.remove("is-open");
  document.body.classList.remove("menu-open");
  modal.setAttribute("aria-hidden", "true");
});

/* =========================
   3) Desktop Nav Hover Submenu
   ========================= */
document.addEventListener("DOMContentLoaded", () => {
  const breakpoint = 980;
  const desktopNav = document.querySelector(".desktop-nav");
  if (!desktopNav) return;

  const isDesktop = () => window.innerWidth > breakpoint;

  const items = desktopNav.querySelectorAll("li.menu-item-has-children");
  if (!items.length) return;

  const CLOSE_DELAY = 320;
  let closeTimer = null;

  function open(li) {
    if (!isDesktop()) return;
    clearTimeout(closeTimer);
    items.forEach((x) => {
      if (x !== li) x.classList.remove("is-open");
    });
    li.classList.add("is-open");
  }

  function scheduleClose(li) {
    if (!isDesktop()) return;
    clearTimeout(closeTimer);
    closeTimer = setTimeout(() => li.classList.remove("is-open"), CLOSE_DELAY);
  }

  function cancelClose() {
    clearTimeout(closeTimer);
  }

  items.forEach((li) => {
    const submenu = li.querySelector(".sub-menu");

    li.addEventListener("mouseenter", () => open(li));
    li.addEventListener("mouseleave", () => scheduleClose(li));

    if (submenu) {
      submenu.addEventListener("mouseenter", () => {
        cancelClose();
        open(li);
      });
      submenu.addEventListener("mouseleave", () => scheduleClose(li));
    }
  });

  // Клік поза меню — закрити
  document.addEventListener("mousemove", (e) => {
    if (!isDesktop()) return;

    const anyOpen = desktopNav.querySelector("li.is-open");
    if (!anyOpen) return;

    const submenu = anyOpen.querySelector(".sub-menu");
    if (!desktopNav.contains(e.target) && submenu && !submenu.contains(e.target)) {
      scheduleClose(anyOpen);
    }
  });

  // ESC — закрити
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      items.forEach((li) => li.classList.remove("is-open"));
    }
  });

  // Якщо зменшили вікно до мобілки — закрити
  window.addEventListener("resize", () => {
    if (!isDesktop()) {
      items.forEach((li) => li.classList.remove("is-open"));
    }
  });
});

/* =========================
   4) Mobile Nav Submenu Toggle
   ========================= */
document.addEventListener("DOMContentLoaded", () => {
  const breakpoint = 980;

  const mobileNav = document.querySelector(".mobile-nav");
  if (!mobileNav) return;

  const isMobile = () => window.innerWidth <= breakpoint;

  // Додаємо кнопки-стрілки до пунктів з підменю ТІЛЬКИ в мобільному меню
  const items = mobileNav.querySelectorAll("li.menu-item-has-children");

  items.forEach((li) => {
    const link = li.querySelector(":scope > a");
    const sub = li.querySelector(":scope > .sub-menu");
    if (!link || !sub) return;

    // якщо кнопка вже існує — не дублюємо
    if (li.querySelector(":scope > .submenu-toggle")) return;

    const btn = document.createElement("button");
    btn.type = "button";
    btn.className = "submenu-toggle";
    btn.setAttribute("aria-label", "Відкрити підменю");

    // вставляємо кнопку ПІСЛЯ лінка (тобто справа в рядку)
    link.insertAdjacentElement("afterend", btn);

    btn.addEventListener("click", (e) => {
      if (!isMobile()) return;
      e.preventDefault();
      e.stopPropagation();
      li.classList.toggle("is-open");
    });
  });

  // Якщо повернули екран/розширили — закриваємо відкриті підменю
  window.addEventListener("resize", () => {
    if (!isMobile()) {
      mobileNav
        .querySelectorAll("li.is-open")
        .forEach((li) => li.classList.remove("is-open"));
    }
  });
});
