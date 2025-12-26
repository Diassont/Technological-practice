document.addEventListener("DOMContentLoaded", () => {
  const bar = document.getElementById("filterBar");
  const grid = document.getElementById("products");
  if (!bar || !grid) return;

  const cards = Array.from(grid.querySelectorAll(".p-card"));
  const empty = document.getElementById("filterEmpty");

  // ✅ Конфіг фільтрів під тип сторінки (19 сторінок)
  // Правило:
  // - key = dataset-ключ (data-brand -> "brand", data-socket -> "socket")
  // - якщо атрибут у HTML через дефіс (data-cable-type) => додаємо dataKey: "cable-type"
  const FILTERS = {

    // 1) Ноутбуки
    laptops: [
      { key: "brand",  label: "Бренд", type: "select" },
      { key: "ram",    label: "RAM",   type: "select" },
      { key: "screen", label: "Екран", type: "select" },
      { key: "price",  label: "Ціна",  type: "price"  },
    ],

    // 2) Комп’ютери
    computers: [
      { key: "brand",  label: "Бренд",      type: "select" },   // наприклад: dell, hp, lenovo, custom
      { key: "cpu",    label: "Процесор",   type: "select" },   // intel, amd або i5, r5 і т.д.
      { key: "ram",    label: "RAM",        type: "select" },
      { key: "price",  label: "Ціна",       type: "price" },
    ],

    // 3) Клавіатури
    keyboards: [
      { key: "type",       label: "Тип",        type: "select" }, // mechanical, membrane
      { key: "layout",     label: "Розкладка",  type: "select" }, // ua, us, uk
      { key: "connection", label: "Зв’язок",    type: "select" }, // usb, wireless, bt
      { key: "price",      label: "Ціна",       type: "price" },
    ],

    // 4) Мишки
    mice: [
      { key: "type",       label: "Тип",        type: "select" }, // gaming, office
      { key: "sensor",     label: "Сенсор",     type: "select" }, // optical, laser
      { key: "connection", label: "Зв’язок",    type: "select" }, // usb, wireless, bt
      { key: "price",      label: "Ціна",       type: "price" },
    ],

    // 5) Навушники
    headphones: [
      { key: "type",       label: "Тип",        type: "select" }, // in-ear, over-ear, on-ear
      { key: "connection", label: "Зв’язок",    type: "select" }, // wired, bt
      { key: "micro",      label: "Мікрофон",   type: "select" }, // yes, no
      { key: "price",      label: "Ціна",       type: "price" },
    ],

    // 6) Мікрофони
    microphones: [
      { key: "type",       label: "Тип",        type: "select" }, // condenser, dynamic
      { key: "connection", label: "Зв’язок",    type: "select" }, // usb, xlr
      { key: "pattern",    label: "Спрям.",     type: "select" }, // cardioid, omni
      { key: "price",      label: "Ціна",       type: "price" },
    ],

    // 7) Монітори
    monitors: [
      { key: "size",     label: "Діагональ", type: "select" }, // 24, 27, 32
      { key: "res",      label: "Роздільна", type: "select" }, // 1080p, 1440p, 4k
      { key: "hz",       label: "Hz",        type: "select" }, // 60, 144, 165
      { key: "price",    label: "Ціна",      type: "price" },
    ],

    // 8) Материнські плати
    motherboards: [
      { key: "socket",  label: "Socket",    type: "select" }, // am4, am5, lga1700
      { key: "chipset", label: "Чипсет",    type: "select" }, // b550, x570, b760
      { key: "form",    label: "Форм-фактор", type: "select" }, // atx, matx, itx
      { key: "price",   label: "Ціна",      type: "price" },
    ],

    // 9) Процесори
    processors: [
      { key: "brand",   label: "Бренд",   type: "select" }, // amd, intel
      { key: "socket",  label: "Socket",  type: "select" },
      { key: "cores",   label: "Ядра",    type: "select" }, // 4,6,8,12,16
      { key: "price",   label: "Ціна",    type: "price" },
    ],

    // 10) Відеокарти
    "graphics-cards": [
      { key: "brand",   label: "Бренд",   type: "select" }, // nvidia, amd, intel
      { key: "vram",    label: "VRAM",    type: "select" }, // 8, 12, 16
      { key: "series",  label: "Серія",   type: "select" }, // rtx40, rtx30, rx7000...
      { key: "price",   label: "Ціна",    type: "price" },
    ],

    // 11) ОЗП
    ram: [
      { key: "type",   label: "Тип",     type: "select" }, // ddr4, ddr5
      { key: "size",   label: "Обсяг",   type: "select" }, // 8,16,32,64
      { key: "mhz",    label: "Частота", type: "select" }, // 3200, 3600, 6000
      { key: "price",  label: "Ціна",    type: "price" },
    ],

    // 12) Накопичувачі
    storage: [
      { key: "type",   label: "Тип",     type: "select" }, // ssd, hdd, nvme
      { key: "size",   label: "Обсяг",   type: "select" }, // 256,512,1000...
      { key: "iface",  label: "Інтерфейс", type: "select" }, // sata, m2
      { key: "price",  label: "Ціна",    type: "price" },
    ],

    // 13) Блоки живлення
    "power-supplies": [
      { key: "watt",   label: "Потужність", type: "select" }, // 500,650,750
      { key: "cert",   label: "Сертифікат", type: "select" }, // bronze,gold
      { key: "mod",    label: "Модульність", type: "select" }, // yes,no
      { key: "price",  label: "Ціна",       type: "price" },
    ],

    // 14) Системи охолодження
    "cooling-systems": [
      { key: "type",   label: "Тип",     type: "select" }, // air, aio
      { key: "socket", label: "Socket",  type: "select" },
      { key: "size",   label: "Розмір",  type: "select" }, // 120,240,360 (для AIO) або tower
      { key: "price",  label: "Ціна",    type: "price" },
    ],

    // 15) Корпуси
    "pc-cases": [
      { key: "form",   label: "Форм-фактор", type: "select" }, // atx, matx, itx
      { key: "size",   label: "Розмір",      type: "select" }, // mid, full, mini
      { key: "glass",  label: "Скло",        type: "select" }, // yes,no
      { key: "price",  label: "Ціна",        type: "price" },
    ],

    // 16) Кабелі мультимедійні
    "multimedia-cables": [
      { key: "cableType", label: "Тип", type: "select", dataKey: "cable-type" }, // hdmi, dp, usb-c
      { key: "length",    label: "Довжина (м)", type: "select" },                 // 1,2,3,5
      { key: "version",   label: "Версія", type: "select" },                      // 2.0,2.1,1.4...
      { key: "price",     label: "Ціна", type: "price" },
    ],

    // 17) Принтери
    printers: [
      { key: "type",    label: "Тип",    type: "select" }, // inkjet, laser
      { key: "color",   label: "Колір",  type: "select" }, // mono, color
      { key: "format",  label: "Формат", type: "select" }, // a4, a3
      { key: "price",   label: "Ціна",   type: "price" },
    ],

    // 18) Акустичні системи
    "acoustic-systems": [
      { key: "type",       label: "Тип",     type: "select" }, // 2.0,2.1,5.1,soundbar
      { key: "connection", label: "Зв’язок", type: "select" }, // bt, aux, usb
      { key: "power",      label: "Потужн.", type: "select" }, // 10,20,50,100
      { key: "price",      label: "Ціна",    type: "price" },
    ],

    // 19) Портативні системи
    "portable-systems": [
      { key: "type",       label: "Тип",     type: "select" }, // speaker, radio, party
      { key: "battery",    label: "Батарея", type: "select" }, // 6h,10h,20h
      { key: "connection", label: "Зв’язок", type: "select" }, // bt, aux, usb
      { key: "price",      label: "Ціна",    type: "price" },
    ],
  };

  const type = bar.dataset.filter || "laptops";
  const config = FILTERS[type] || FILTERS.laptops;

  // helpers
  const el = (tag, cls) => {
    const x = document.createElement(tag);
    if (cls) x.className = cls;
    return x;
  };

  // Build UI
  bar.innerHTML = "";
  bar.style.display = "grid";

  // Search always
  const search = el("input", "filter-input");
  search.type = "search";
  search.placeholder = "Пошук (назва/модель)...";
  search.id = "fSearch";
  bar.appendChild(search);

  const controls = [];

  config.forEach(f => {
    if (f.type === "price") {
      const sel = el("select", "filter-select");
      sel.innerHTML = `
        <option value="">${f.label}: будь-яка</option>
        <option value="0-25000">до 25 000</option>
        <option value="25000-40000">25 000 – 40 000</option>
        <option value="40000-999999">від 40 000</option>
      `;
      sel.dataset.key = "price";
      bar.appendChild(sel);
      controls.push(sel);
      return;
    }

    if (f.type === "select") {
      const sel = el("select", "filter-select");
      sel.dataset.key = f.dataKey || f.key; // може бути "cable-type"
      sel.innerHTML = `<option value="">${f.label}: всі</option>`;
      bar.appendChild(sel);
      controls.push(sel);
    }
  });

  const reset = el("button", "btn btn-outline");
  reset.type = "button";
  reset.textContent = "Скинути";
  bar.appendChild(reset);

  // Fill selects from cards (auto options)
  controls.forEach(sel => {
    const key = sel.dataset.key;
    if (key === "price") return;

    const values = new Set();
    cards.forEach(card => {
      const jsKey = key.replace(/-([a-z])/g, (_, a) => a.toUpperCase());
      const v = (card.dataset[jsKey] || "").trim();
      if (v) values.add(v);
    });

    Array.from(values).sort().forEach(v => {
      const opt = document.createElement("option");
      opt.value = v;
      opt.textContent = v.toUpperCase();
      sel.appendChild(opt);
    });
  });

  const inPriceRange = (price, range) => {
    if (!range) return true;
    const [min, max] = range.split("-").map(Number);
    return price >= min && price <= max;
  };

  function apply() {
    const q = search.value.trim().toLowerCase();
    let shown = 0;

    cards.forEach(card => {
      const title = (card.dataset.title || "").toLowerCase();
      const price = Number(card.dataset.price || "0");

      let ok = !q || title.includes(q);

      controls.forEach(sel => {
        if (!ok) return;

        const key = sel.dataset.key;
        const val = sel.value;

        if (key === "price") {
          ok = inPriceRange(price, val);
          return;
        }

        const jsKey = key.replace(/-([a-z])/g, (_, a) => a.toUpperCase());
        const cardVal = (card.dataset[jsKey] || "").trim();

        if (val) ok = cardVal === val;
      });

      card.style.display = ok ? "" : "none";
      if (ok) shown++;
    });

    if (empty) empty.hidden = shown !== 0;
  }

  // events
  search.addEventListener("input", apply);
  controls.forEach(sel => sel.addEventListener("change", apply));

  reset.addEventListener("click", () => {
    search.value = "";
    controls.forEach(sel => sel.value = "");
    apply();
  });

  // initial
  apply();
});
