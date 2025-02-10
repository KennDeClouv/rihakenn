const container = document.querySelector("#bareng");
fetch("/assets/config.json")
  .then((response) => response.json())
  .then((response) => {
    const data = response["bareng"];
    let content = "";
    data.forEach((e) => {
      content = `
      <div role="listitem" class="w-dyn-item">
        <div
          class="column-card w-inline-block">
          <div class="column-image">
            <div class="aspect-ratio-1-1"><img
                src="${e.image}"
                loading="lazy" alt=""
                sizes="(max-width: 479px) 100vw, (max-width: 767px) 47vw, (max-width: 991px) 39vw, 48vw"
                srcset="${e.image} 1597w"
                class="image border-radius_20"></div>
            <div class="column-tag">
              <div>${e.title}</div>
            </div>
          </div>
          <div class="column-title">
            <div gsap-textscroll-paragraph="" gsap-textscroll-split="">${e.content}</div>
          </div>
        </div>
      </div>
      `;
      container.innerHTML += content;
    });
  });
