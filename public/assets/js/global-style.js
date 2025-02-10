document.querySelector("#global-styles").innerHTML = `
  <div class="cms-behaviour w-embed">
      <style>
        /* Set attribute to the element which needs to hide when the collection inside is empty */
        [cms-component="true"] .collection-list-wrapper:empty {
          display: none;
        }

        /* Automatically sets the CMS Empty state to display none when empty */
        .collection-list-wrapper:empty .collection-empty-state {
          display: none;
        }
      </style>
    </div>
    <div class="container-alignment w-embed">
      <style>
        /* Make sure containers never lose their center alignment */
        .container-column-12,
        .container-column-10,
        .container-column-08,
        .container-column-06,
        .container-column-04 {
          margin-right: auto !important;
          margin-left: auto !important;
        }
      </style>
    </div>
    <div class="current-state-styling w-embed">
      <style>
        /* Hides .nav-link_underline-fill-current element */
        .nav-link.w-inline-block .nav-link_underline-current {
          display: none;
        }

        /* Shows .nav-link_underline-fill-current element when parent .nav-link de class gets 'w--current' */
        .nav-link.w-inline-block.w--current>.nav-link_underline-current {
          display: block;
        }
      </style>
    </div>
    <div class="cursor-beyond-viewport w-embed">
      <style>
        /*Cursor hover out of viewport*/
        body:hover .cursor {
          opacity: 1.0;
        }
      </style>
    </div>
    <div class="cursor-selection-color w-embed">
      <style>
        /* Cursor Selection */
        ::selection {
          background: black;
          color: white;
        }

        ::-moz-selection {
          /* Code for Firefox */
          background: black;
          color: white;
        }
      </style>
    </div>
    <div class="display-settings w-embed">
      <style>
        /* These classes are never overwritten */
        .hide {
          display: none !important;
        }

        @media screen and (min-width: 992px) {

          .hide,
          .hide-desktop {
            display: none !important;
          }
        }

        @media screen and (min-width: 480px) {

          .hide,
          .hide-desktop-tablet {
            display: none !important;
          }
        }

        @media screen and (max-width: 991px) {

          .hide,
          .hide-tablet-mobile {
            display: none !important;
          }
        }

        @media screen and (max-width: 767px) {
          .hide-mobile-landscape {
            display: none !important;
          }
        }

        @media screen and (max-width: 479px) {
          .hide-mobile {
            display: none !important;
          }
        }
      </style>
    </div>
    <div class="div-dimensions w-embed">
      <style>
        /* Create a class of .div-square which maintains a 1:1 dimension of a div */
        .div-square::after {
          content: "";
          display: block;
          padding-bottom: 100%;
        }
      </style>
    </div>
    <div class="fluid-responsiveness w-embed"><!-- REM Revolution -->

      <style>
        html {
          font-size: calc(0.0010322580645161228rem + 0.8324731182795699vw);
        }

        /* Desktop */
        @media screen and (max-width:1920px) {
          html {
            font-size: calc(0.0010322580645160118rem + 0.83247311827957vw);
          }
        }

        /* Tablet */
        @media screen and (max-width:991px) {
          html {
            font-size: calc(0.001039628180039165rem + 1.6144814090019568vw);
          }
        }

        /* Mobile Portrait */
        @media screen and (max-width:479px) {
          html {
            font-size: calc(-0.00008786610878652734rem + 3.340585774058577vw);
          }
        }

        /* Minimum Width */
        @media screen and (max-width:240px) {
          html {
            font-size: 0.501rem;
          }
        }


        .wf-1q1o3en,
        .wf-17o1b5s {
          font-size: 14px !important;
        }
      </style>
    </div>
    <div class="focus-state w-embed">
      <style>
        /* Focus state style for keyboard navigation for the focusable elements */
        *[tabindex]:focus-visible,
        input[type='file']:focus-visible {
          outline: 0.125rem solid #4d65ff;
          outline-offset: 0.125rem;
        }
      </style>
    </div>
    <div class="global-scrollbar w-embed">
      <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        .ctb-nav__item-wrapper::-webkit-scrollbar {
          display: none;
        }

        /* Hide scrollbar for Internet Explorer, Edge and Firefox */
        .ctb-nav__item-wrapper {
          -ms-overflow-style: none;
          /* IE and Edge */
          scrollbar-width: none;
          /* Firefox */
        }
      </style>
    </div>
    <div class="inline-flex w-embed">
      <style>
        /* Adds inline flex display */
        .display-inlineflex {
          display: inline-flex;
        }
      </style>
    </div>
    <div class="pointer-events w-embed">
      <style>
        /* Prevent all click and hover interaction with an element */
        .pointer-events-off {
          pointer-events: none;
        }

        /* Enables all click and hover interaction with an element */
        .pointer-events-on {
          pointer-events: auto;
        }
      </style>
    </div>
    <div class="rich-text-reset w-embed">
      <style>
        /* Get rid of top margin on first element in any rich text element */
        .w-richtext> :not(div):first-child,
        .w-richtext>div:first-child> :first-child {
          margin-top: 0 !important;
        }

        /* Get rid of bottom margin on last element in any rich text element */
        .w-richtext>:last-child,
        .w-richtext ol li:last-child,
        .w-richtext ul li:last-child {
          margin-bottom: 0;
        }
      </style>
    </div>
    <div class="spacing w-embed">
      <style>
        /* These classes are never overwritten */
        .margin-0 {
          margin: 0rem !important;
        }

        .padding-0 {
          padding: 0rem !important;
        }

        .margin-top {
          margin-right: 0rem !important;
          margin-bottom: 0rem !important;
          margin-left: 0rem !important;
        }

        .padding-top {
          padding-right: 0rem !important;
          padding-bottom: 0rem !important;
          padding-left: 0rem !important;
        }

        .margin-right {
          margin-top: 0rem !important;
          margin-bottom: 0rem !important;
          margin-left: 0rem !important;
        }

        .padding-right {
          padding-top: 0rem !important;
          padding-bottom: 0rem !important;
          padding-left: 0rem !important;
        }

        .margin-bottom {
          margin-top: 0rem !important;
          margin-right: 0rem !important;
          margin-left: 0rem !important;
        }

        .padding-bottom {
          padding-top: 0rem !important;
          padding-right: 0rem !important;
          padding-left: 0rem !important;
        }

        .margin-left {
          margin-top: 0rem !important;
          margin-right: 0rem !important;
          margin-bottom: 0rem !important;
        }

        .padding-left {
          padding-top: 0rem !important;
          padding-right: 0rem !important;
          padding-bottom: 0rem !important;
        }

        .margin-horizontal {
          margin-top: 0rem !important;
          margin-bottom: 0rem !important;
        }

        .padding-horizontal {
          padding-top: 0rem !important;
          padding-bottom: 0rem !important;
        }

        .margin-vertical {
          margin-right: 0rem !important;
          margin-left: 0rem !important;
        }

        .padding-vertical {
          padding-right: 0rem !important;
          padding-left: 0rem !important;
        }
      </style>
    </div>
    <div class="tap-select-prevention w-embed">
      <style>
        /* Remove all highlights when tapping links on mobile */
        body {
          -webkit-tap-highlight-color: transparent;
        }

        :focus {
          outline: 0;
        }
      </style>
    </div>
    <div class="text-clarity w-embed">
      <style>
        /* Make text look crisper and more legible in all browsers */
        body {
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;
          font-smoothing: antialiased;
          text-rendering: optimizeLegibility;
        }
      </style>
    </div>
    <div class="w-embed"><!-- Text Line Clamp -->

      <style>
        /*Apply "..." after 1 line of text */
        .text-clamp-line-01 {
          display: -webkit-box;
          overflow: hidden;
          -webkit-line-clamp: 1;
          -webkit-box-orient: vertical;
        }

        /*Apply "..." after 2 lines of text */
        .text-clamp-line-02 {
          display: -webkit-box;
          overflow: hidden;
          -webkit-line-clamp: 2;
          -webkit-box-orient: vertical;
        }

        /*Apply "..." after 3 lines of text */
        .text-clamp-line-03 {
          display: -webkit-box;
          overflow: hidden;
          -webkit-line-clamp: 3;
          -webkit-box-orient: vertical;
        }

        /*Apply "..." after 4 lines of text */
        .text-clamp-line-04 {
          display: -webkit-box;
          overflow: hidden;
          -webkit-line-clamp: 4;
          -webkit-box-orient: vertical;
        }
      </style>
    </div>
    <div class="viewport-clip w-embed"><!-- Overflow Clip -->
      <style>
        /* Prevents horizontal overflow without destroying sticky functionality */
        .page-wrapper {
          overflow: clip;
        }
      </style>
    </div>
    <div class="_w-style-override w-embed">
      <style>
        /* 
Make the following elements inherit typography styles from the parent and not have hardcoded values. 
Important: You will not be able to style for example "All Links" in Designer with this CSS applied.
Uncomment this CSS to use it in the project. Leave this message for future hand-off.
*/
        a,
        .w-input,
        .w-select,
        .w-tab-link,
        .w-nav-link,
        .w-dropdown-btn,
        .w-dropdown-toggle,
        .w-dropdown-link {
          color: inherit;
          text-decoration: inherit;
          font-size: inherit;
        }
      </style>
    </div>
    <div class="gsap-text-stagger w-embed"><!-- Split type: Styling -->

      <style>
        [gsap-textscroll-paragraph] .line {
          overflow: hidden;
          display: inline-block;
        }
      </style>
    </div>
`;