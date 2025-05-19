const swiper = new Swiper(".mySwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
  },
});


const listItems = document.querySelectorAll(".widget ul li");

listItems.forEach(function (item) {
  const link = item.querySelector("a");
  const span = item.querySelector("span");

  if (link && span) {
    span.style.cursor = "pointer"; // カーソルをポインターに
    span.addEventListener("click", function () {
      const href = link.getAttribute("href");
      if (href) {
        window.location.href = href;
      }
    });
  }
});


const currentPath = window.location.pathname.replace(/\/+$/, ""); // 末尾のスラッシュ除去
const menuLinks = document.querySelectorAll(".menu a");

menuLinks.forEach(link => {
  const linkPath = new URL(link.href).pathname.replace(/\/+$/, "");
  if (linkPath === currentPath) {
    link.classList.add("active");
  }
});

