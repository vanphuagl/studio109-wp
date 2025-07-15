document.addEventListener("DOMContentLoaded", function () {
  const loadMoreBtn = document.getElementById("load-more");

  if (loadMoreBtn) {
    loadMoreBtn.addEventListener("click", function () {
      const btn = this;
      const page = parseInt(btn.getAttribute("data-page"));
      const taxonomy = btn.getAttribute("data-taxonomy") || ""; // Get data-taxonomy, defaults to '' if none

      fetch(news_loadmore.ajax_url, {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `action=load_more_news&page=${page}&taxonomy=${taxonomy}`, // Add taxonomy to body
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.html) {
            document
              .getElementById("news-posts")
              .insertAdjacentHTML("beforeend", data.html);

            const newItems = document.querySelectorAll(
              ".c-news_items:not(.fade-in)"
            );
            newItems.forEach((item, i) => {
              item.classList.add("fade-in");
              setTimeout(() => {
                item.classList.add("show");
              }, 50 * i);
            });

            const nextPage = page + 1;
            btn.setAttribute("data-page", nextPage);
            if (nextPage > data.max) {
              btn.style.display = "none";
            }
          }
        });
    });
  }
});
