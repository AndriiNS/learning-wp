"use strict";

// BURGER MENU
document.addEventListener("click", handleClick);

function handleClick(e) {
  const targetElement = e.target;
  if (targetElement.closest(".header__burger")) {
    document.body.classList.toggle("burger-open");
    document.body.classList.toggle("no-scroll");
  }
}

// SLIDER TESTIMONIALS

document.addEventListener("DOMContentLoaded", function () {
  const testimonialsSlider = document.querySelector(".testimonials__container");
  if (testimonialsSlider) {
    new Swiper(".testimonials__container", {
      loop: true,
      autoHeight: true,
      speed: 1000,
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      }
    });
  }
});

// TABS
document.addEventListener("click", (e) => {
  const button = e.target.closest("[data-tabs-button]");
  if (!button) return;

  const tabSlug = button.querySelector("button").dataset.tab;
  const TabsParent = button.closest("[data-tabs]");

  TabsParent.querySelectorAll("[data-tabs-button]").forEach((el) => el.classList.remove("active"));
  button.classList.add("active");

  const container = TabsParent.querySelector(".tabs__body-element");
  const items = Array.from(container.querySelectorAll(".tabs__item-element"));

  const matched = [];
  const unmatched = [];

  items.forEach((item) => {
    const tags = item.dataset.tags.split(" ");
    if (tabSlug === "all" || tags.includes(tabSlug)) {
      matched.push(item);
    } else {
      unmatched.push(item);
    }
  });

  container.innerHTML = "";
  matched.concat(unmatched).forEach((item) => container.appendChild(item));
});
// SLIDER BLOG
document.addEventListener("DOMContentLoaded", function () {
  const blogSlider = document.querySelector(".blog");
  if (blogSlider) {
    new Swiper(".blog__body", {
      loop: true,
      autoHeight: true,
      speed: 1000,
      slidesPerView: 2,
      spaceBetween: 57,

      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },

      breakpoints: {
        320: {
          slidesPerView: 1
        },

        768: {
          slidesPerView: 2
        }
      }
    });
  }
});

// COUNTER WHEN IN VIEWPORT

document.addEventListener("DOMContentLoaded", function () {
  // Функция для анимации счетчика
  function animateCounter(element, start, end, duration) {
    let startTime = null;

    function step(timestamp) {
      if (!startTime) startTime = timestamp;
      const progress = timestamp - startTime;
      const value = Math.min(start + (end - start) * (progress / duration), end);

      // Пока анимация идет, показываем без запятых
      element.textContent = Math.floor(value);

      if (progress < duration) {
        window.requestAnimationFrame(step);
      } else {
        // После завершения анимации добавляем запятые
        element.textContent = Math.floor(value).toLocaleString();
      }
    }

    window.requestAnimationFrame(step);
  }

  // Функция, которая будет отслеживать попадание во вьюпорт
  function handleIntersection(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // Запуск анимации, когда элемент становится видимым
        const counter = entry.target.querySelector(".counter");

        // Убираем запятые из строки для расчета числа
        const endValue = parseInt(counter.textContent.replace(/,/g, ""), 10);

        animateCounter(counter, 0, endValue, 2000); // 2000 ms (2 секунды)
        observer.unobserve(entry.target); // Остановить отслеживание после анимации
      }
    });
  }

  // Создаем новый IntersectionObserver
  const observer = new IntersectionObserver(handleIntersection, {
    threshold: 0.5 // Элемент считается видимым, когда 50% его площади видны в окне
  });

  // Получаем все элементы с классом 'num' и начинаем их отслеживать
  const proofItems = document.querySelectorAll(".facts__item");
  proofItems.forEach((item) => {
    observer.observe(item);
  });
});

document.querySelectorAll(".card-prices__name").forEach(function (el) {
  if (el.textContent.trim() === "PREMIUM") {
    el.classList.add("card-prices__name--red");
  }
});
