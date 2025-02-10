const papContainer = document.querySelector("#pap-container");
fetch('/assets/config.json')
  .then(response => response.json())
  .then(data => {
    const pap = data['pap'];
    if (!Array.isArray(pap)) {
      throw new TypeError("pap is not an array");
    }
    let content1 = '';
    let content2 = '';
    let content3 = '';
    let type = '';
    pap.forEach((e) => {
      type = e.type;
      content1 = `
        <div role="listitem" class="cms-item is-collegas w-dyn-item">
          <div class="collega-cards-wrapper">
            <div class="collega-card is-01">
              <div class="card-title_wrap">
                <div>${e.title}</div>
              </div>
              <div class="card-image_wrap"><img loading="lazy" alt=""
                  src="${e.image}"
                  sizes="(max-width: 479px) 77vw, (max-width: 991px) 49vw, 25vw"
                  srcset=" ${e.image} 1434w"
                  class="image border-radius_30"></div>
              <div class="card-name_wrapper">
                <div class="card-name is-01">
                  <div class="card-name_arrow">
                    <div data-is-ix2-target="1" class="card-name_arrow-lottie is-01"
                      data-w-id="39dddd5d-effb-7363-7276-e82581532a54" data-animation-type="lottie"
                      data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64b58c4bbe2b65200b1e48c2_arrow-01.json"
                      data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                      data-default-duration="2.2" data-duration="0" data-ix2-initial-state="0"></div>
                  </div>
                  <div
                    style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="card-name_title is-01">
                    <div>${e.name}</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="collega-card is-02 w-condition-invisible">
              <div class="card-title_wrap">
                <div>${e.title}</div>
              </div>
              <div class="card-image_wrap"><img loading="lazy" alt=""
                  src="${e.image}"
                  sizes="100vw"
                  srcset=" ${e.image} 1434w"
                  class="image border-radius_30"></div>
              <div class="card-name_wrapper">
                <div class="card-name is-02">
                  <div class="card-name_arrow">
                    <div data-is-ix2-target="1" class="card-name_arrow-lottie is-02"
                      data-w-id="c38ee6e5-e6c9-6d6b-e2a5-8e4933273b92" data-animation-type="lottie"
                      data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64b58c4b8ddfff539dc760fa_arrow-02.json"
                      data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                      data-default-duration="2.2" data-duration="0" data-ix2-initial-state="0"></div>
                  </div>
                  <div
                    style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="card-name_title is-02">
                    <div>${e.name}</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="collega-card is-03 w-condition-invisible">
              <div class="card-title_wrap">
                <div>${e.title}</div>
              </div>
              <div class="card-image_wrap"><img loading="lazy" alt=""
                  src="${e.image}"
                  sizes="100vw"
                  srcset=" ${e.image} 1434w"
                  class="image border-radius_30"></div>
              <div class="card-name_wrapper">
                <div class="card-name is-03">
                  <div class="card-name_arrow">
                    <div data-is-ix2-target="1" class="card-name_arrow-lottie is-03"
                      data-w-id="0f984399-b6e6-d4ed-9bdb-9beac5ba25bc" data-animation-type="lottie"
                      data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64b58c4bd077681e367715db_arrow-03.json"
                      data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                      data-default-duration="2.2" data-duration="0" data-ix2-initial-state="0"></div>
                  </div>
                  <div
                    style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="card-name_title is-03">
                    <div>${e.name}</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="collega-card is-04 w-condition-invisible">
              <div class="card-title_wrap">
                <div>${e.title}</div>
              </div>
              <div class="card-image_wrap"><img loading="lazy" alt=""
                  src="${e.image}"
                  sizes="100vw"
                  srcset=" ${e.image} 1434w"
                  class="image border-radius_30"></div>
              <div class="card-name_wrapper">
                <div class="card-name is-04">
                  <div class="card-name_arrow is-01">
                    <div data-is-ix2-target="1" class="card-name_arrow-lottie is-04"
                      data-w-id="32f302a0-9fca-f559-51b3-909bea33edd2" data-animation-type="lottie"
                      data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64b58c4bebaeb2f3b9569caa_arrow-04.json"
                      data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                      data-default-duration="2.2" data-duration="0" data-ix2-initial-state="0"></div>
                  </div>
                  <div
                    style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="card-name_title is-04">
                    <div>${e.name}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>`;

      content2 = `
      <div role="listitem" class="cms-item is-collegas w-dyn-item">
        <div class="collega-cards-wrapper">
          <div class="collega-card is-01 w-condition-invisible">
            <div class="card-title_wrap">
              <div>${e.title}</div>
            </div>
            <div class="card-image_wrap"><img loading="lazy" alt=""
                src="${e.image}"
                sizes="(max-width: 479px) 77vw, (max-width: 991px) 49vw, 25vw"
                srcset=" ${e.image} 1380w"
                class="image border-radius_30"></div>
            <div class="card-name_wrapper">
              <div class="card-name is-01">
                <div class="card-name_arrow">
                  <div data-is-ix2-target="1" class="card-name_arrow-lottie is-01"
                    data-w-id="39dddd5d-effb-7363-7276-e82581532a54" data-animation-type="lottie"
                    data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64b58c4bbe2b65200b1e48c2_arrow-01.json"
                    data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                    data-default-duration="2.2" data-duration="0" data-ix2-initial-state="0"></div>
                </div>
                <div
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="card-name_title is-01">
                  <div>${e.name}</div>
                </div>
              </div>
            </div>
          </div>
          <div class="collega-card is-02">
            <div class="card-title_wrap">
              <div>${e.title}</div>
            </div>
            <div class="card-image_wrap"><img loading="lazy" alt=""
                src="${e.image}"
                sizes="100vw"
                srcset=" ${e.image} 1380w"
                class="image border-radius_30"></div>
            <div class="card-name_wrapper">
              <div class="card-name is-02">
                <div class="card-name_arrow">
                  <div data-is-ix2-target="1" class="card-name_arrow-lottie is-02"
                    data-w-id="c38ee6e5-e6c9-6d6b-e2a5-8e4933273b92" data-animation-type="lottie"
                    data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64b58c4b8ddfff539dc760fa_arrow-02.json"
                    data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                    data-default-duration="2.2" data-duration="0" data-ix2-initial-state="0"></div>
                </div>
                <div
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="card-name_title is-02">
                  <div>${e.name}</div>
                </div>
              </div>
            </div>
          </div>
          <div class="collega-card is-03 w-condition-invisible">
            <div class="card-title_wrap">
              <div>${e.title}</div>
            </div>
            <div class="card-image_wrap"><img loading="lazy" alt=""
                src="${e.image}"
                sizes="100vw"
                srcset=" ${e.image} 1380w"
                class="image border-radius_30"></div>
            <div class="card-name_wrapper">
              <div class="card-name is-03">
                <div class="card-name_arrow">
                  <div data-is-ix2-target="1" class="card-name_arrow-lottie is-03"
                    data-w-id="0f984399-b6e6-d4ed-9bdb-9beac5ba25bc" data-animation-type="lottie"
                    data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64b58c4bd077681e367715db_arrow-03.json"
                    data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                    data-default-duration="2.2" data-duration="0" data-ix2-initial-state="0"></div>
                </div>
                <div
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="card-name_title is-03">
                  <div>${e.name}</div>
                </div>
              </div>
            </div>
          </div>
          <div class="collega-card is-04 w-condition-invisible">
            <div class="card-title_wrap">
              <div>${e.title}</div>
            </div>
            <div class="card-image_wrap"><img loading="lazy" alt=""
                src="${e.image}"
                sizes="100vw"
                srcset=" ${e.image} 1380w"
                class="image border-radius_30"></div>
            <div class="card-name_wrapper">
              <div class="card-name is-04">
                <div class="card-name_arrow is-01">
                  <div data-is-ix2-target="1" class="card-name_arrow-lottie is-04"
                    data-w-id="32f302a0-9fca-f559-51b3-909bea33edd2" data-animation-type="lottie"
                    data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64b58c4bebaeb2f3b9569caa_arrow-04.json"
                    data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                    data-default-duration="2.2" data-duration="0" data-ix2-initial-state="0"></div>
                </div>
                <div
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="card-name_title is-04">
                  <div>${e.name}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>`;

      content3 = `
      <div role="listitem" class="cms-item is-collegas w-dyn-item">
        <div class="collega-cards-wrapper">
          <div class="collega-card is-01 w-condition-invisible">
            <div class="card-title_wrap">
              <div>${e.title}</div>
            </div>
            <div class="card-image_wrap"><img loading="lazy" alt=""
                src="${e.image}"
                sizes="(max-width: 479px) 77vw, (max-width: 991px) 49vw, 25vw"
                srcset=" ${e.image} 1215w"
                class="image border-radius_30"></div>
            <div class="card-name_wrapper">
              <div class="card-name is-01">
                <div class="card-name_arrow">
                  <div data-is-ix2-target="1" class="card-name_arrow-lottie is-01"
                    data-w-id="39dddd5d-effb-7363-7276-e82581532a54" data-animation-type="lottie"
                    data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64b58c4bbe2b65200b1e48c2_arrow-01.json"
                    data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                    data-default-duration="2.2" data-duration="0" data-ix2-initial-state="0"></div>
                </div>
                <div
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="card-name_title is-01">
                  <div>${e.name}</div>
                </div>
              </div>
            </div>
          </div>
          <div class="collega-card is-02 w-condition-invisible">
            <div class="card-title_wrap">
              <div>${e.title}</div>
            </div>
            <div class="card-image_wrap"><img loading="lazy" alt=""
                src="${e.image}"
                sizes="100vw"
                srcset=" ${e.image} 1215w"
                class="image border-radius_30"></div>
            <div class="card-name_wrapper">
              <div class="card-name is-02">
                <div class="card-name_arrow">
                  <div data-is-ix2-target="1" class="card-name_arrow-lottie is-02"
                    data-w-id="c38ee6e5-e6c9-6d6b-e2a5-8e4933273b92" data-animation-type="lottie"
                    data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64b58c4b8ddfff539dc760fa_arrow-02.json"
                    data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                    data-default-duration="2.2" data-duration="0" data-ix2-initial-state="0"></div>
                </div>
                <div
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="card-name_title is-02">
                  <div>${e.name}</div>
                </div>
              </div>
            </div>
          </div>
          <div class="collega-card is-03">
            <div class="card-title_wrap">
              <div>${e.title}</div>
            </div>
            <div class="card-image_wrap"><img loading="lazy" alt=""
                src="${e.image}"
                sizes="100vw"
                srcset=" ${e.image} 1215w"
                class="image border-radius_30"></div>
            <div class="card-name_wrapper">
              <div class="card-name is-03">
                <div class="card-name_arrow">
                  <div data-is-ix2-target="1" class="card-name_arrow-lottie is-03"
                    data-w-id="0f984399-b6e6-d4ed-9bdb-9beac5ba25bc" data-animation-type="lottie"
                    data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64b58c4bd077681e367715db_arrow-03.json"
                    data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                    data-default-duration="2.2" data-duration="0" data-ix2-initial-state="0"></div>
                </div>
                <div
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="card-name_title is-03">
                  <div>${e.name}</div>
                </div>
              </div>
            </div>
          </div>
          <div class="collega-card is-04 w-condition-invisible">
            <div class="card-title_wrap">
              <div>${e.title}</div>
            </div>
            <div class="card-image_wrap"><img loading="lazy" alt=""
                src="${e.image}"
                sizes="100vw"
                srcset=" ${e.image} 1215w"
                class="image border-radius_30"></div>
            <div class="card-name_wrapper">
              <div class="card-name is-04">
                <div class="card-name_arrow is-01">
                  <div data-is-ix2-target="1" class="card-name_arrow-lottie is-04"
                    data-w-id="32f302a0-9fca-f559-51b3-909bea33edd2" data-animation-type="lottie"
                    data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64b58c4bebaeb2f3b9569caa_arrow-04.json"
                    data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                    data-default-duration="2.2" data-duration="0" data-ix2-initial-state="0"></div>
                </div>
                <div
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="card-name_title is-04">
                  <div>${e.name}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      `;

      content4 = `
       <div role="listitem" class="cms-item is-collegas w-dyn-item">
        <div class="collega-cards-wrapper">
          <div class="collega-card is-01 w-condition-invisible">
            <div class="card-title_wrap">
              <div>${e.title}</div>
            </div>
            <div class="card-image_wrap"><img loading="lazy" alt=""
                src="${e.image}"
                sizes="(max-width: 479px) 77vw, (max-width: 991px) 49vw, 25vw"
                srcset=" ${e.image} 1140w"
                class="image border-radius_30"></div>
            <div class="card-name_wrapper">
              <div class="card-name is-01">
                <div class="card-name_arrow">
                  <div data-is-ix2-target="1" class="card-name_arrow-lottie is-01"
                    data-w-id="39dddd5d-effb-7363-7276-e82581532a54" data-animation-type="lottie"
                    data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64b58c4bbe2b65200b1e48c2_arrow-01.json"
                    data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                    data-default-duration="2.2" data-duration="0" data-ix2-initial-state="0"></div>
                </div>
                <div
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="card-name_title is-01">
                  <div>${e.name}</div>
                </div>
              </div>
            </div>
          </div>
          <div class="collega-card is-02 w-condition-invisible">
            <div class="card-title_wrap">
              <div>${e.title}</div>
            </div>
            <div class="card-image_wrap"><img loading="lazy" alt=""
                src="${e.image}" sizes="100vw"
                srcset=" ${e.image} 1140w"
                class="image border-radius_30"></div>
            <div class="card-name_wrapper">
              <div class="card-name is-02">
                <div class="card-name_arrow">
                  <div data-is-ix2-target="1" class="card-name_arrow-lottie is-02"
                    data-w-id="c38ee6e5-e6c9-6d6b-e2a5-8e4933273b92" data-animation-type="lottie"
                    data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64b58c4b8ddfff539dc760fa_arrow-02.json"
                    data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                    data-default-duration="2.2" data-duration="0" data-ix2-initial-state="0"></div>
                </div>
                <div
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="card-name_title is-02">
                  <div>${e.name}</div>
                </div>
              </div>
            </div>
          </div>
          <div class="collega-card is-03 w-condition-invisible">
            <div class="card-title_wrap">
              <div>${e.title}</div>
            </div>
            <div class="card-image_wrap"><img loading="lazy" alt=""
                src="${e.image}" sizes="100vw"
                srcset=" ${e.image} 1140w"
                class="image border-radius_30"></div>
            <div class="card-name_wrapper">
              <div class="card-name is-03">
                <div class="card-name_arrow">
                  <div data-is-ix2-target="1" class="card-name_arrow-lottie is-03"
                    data-w-id="0f984399-b6e6-d4ed-9bdb-9beac5ba25bc" data-animation-type="lottie"
                    data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64b58c4bd077681e367715db_arrow-03.json"
                    data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                    data-default-duration="2.2" data-duration="0" data-ix2-initial-state="0"></div>
                </div>
                <div
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="card-name_title is-03">
                  <div>${e.name}</div>
                </div>
              </div>
            </div>
          </div>
          <div class="collega-card is-04">
            <div class="card-title_wrap">
              <div>${e.title}</div>
            </div>
            <div class="card-image_wrap"><img loading="lazy" alt=""
                src="${e.image}" sizes="100vw"
                srcset=" ${e.image} 1140w"
                class="image border-radius_30"></div>
            <div class="card-name_wrapper">
              <div class="card-name is-04">
                <div class="card-name_arrow is-01">
                  <div data-is-ix2-target="1" class="card-name_arrow-lottie is-04"
                    data-w-id="32f302a0-9fca-f559-51b3-909bea33edd2" data-animation-type="lottie"
                    data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64b58c4bebaeb2f3b9569caa_arrow-04.json"
                    data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                    data-default-duration="2.2" data-duration="0" data-ix2-initial-state="0"></div>
                </div>
                <div
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="card-name_title is-04">
                  <div>${e.name}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>`;

      if (type === 1) {
        papContainer.innerHTML += content1;
      } else if (type === 2) {
        papContainer.innerHTML += content2;
      } else if (type === 3) {
        papContainer.innerHTML += content3;
      } else if (type === 4) {
        papContainer.innerHTML += content4;
      }
    })
  })
