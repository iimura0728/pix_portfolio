$(function () {
  const $header = $("header");

  function getWindowHeight() {
    let windowHeight = $(window).height();
    document.documentElement.style.setProperty(
      "--vh-window",
      windowHeight + "px"
    );
  }

  function activeUnderLine() {
    const $glbNav = $(".glbNav");
    const $listItem = $glbNav.find(".item");
    const duration = 200;
    let $this = "";

    function changeLineWidth($this, value) {
      if (!$this.hasClass("current_page_item")) {
        $this
          .find(".line")
          .stop()
          .animate({ width: value + "%" }, duration);
      }
    }

    function activeLineWidth() {
      $this = $(this);
      changeLineWidth($this, 140);
    }

    function resetLineWidth() {
      changeLineWidth($this, 0);
    }

    $listItem.on({
      mouseenter: activeLineWidth,
      mouseleave: resetLineWidth,
    });
  }

  function showSpNav() {
    const $toggle = $(".toggle");
    const $nav = $header.find(".glbNav");
    const $mask = $(".mask");

    function activeSpNav() {
      if (!$nav.is(":animated")) {
        $header.toggleClass("is-active");
        $toggle.toggleClass("is-active");
        $nav.toggleClass("is-active").fadeToggle(300);
        $mask.toggleClass("is-hide");
      }
    }

    function resetShownNav() {
      const breakPoint = 767;
      let windowWidth = $(window).width();

      if (windowWidth > breakPoint) {
        $toggle.removeClass("is-active");
        $nav.removeClass("is-active").show();
        $mask.removeClass("is-hide");
      } else if (!$nav.hasClass("is-active")) {
        $nav.hide();
      }
    }

    function init() {
      $toggle.on("click", activeSpNav);
      $(window).on("resize", resetShownNav);
    }

    init();
  }

  function fadeBody() {
    function hideBody() {
      $(".bodyInner").addClass("is-hide");
    }

    function showBody() {
      $(".bodyInner").addClass("is-show");
    }

    function refreshPage() {
      if (event.persisted) {
        window.location.reload();
      }
    }

    function init() {
      const $validate = $('a[target != "_blank"]');
      $validate.on("click", hideBody);
      $(window).on({
        load: showBody,
        pageshow: refreshPage,
      });
    }
    init();
  }

  function changeHeader() {
    let scrollPos = $(window).scrollTop();

    if (scrollPos > 30) {
      $header.addClass("is-changed");
    } else {
      $header.removeClass("is-changed");
    }
  }

  function eventSet() {
    $(window).on({
      scroll: changeHeader,
      resize: changeHeader,
      resize: getWindowHeight,
      load: changeHeader,
    });
  }

  function init() {
    getWindowHeight();
    activeUnderLine();
    showSpNav();
    eventSet();
    fadeBody();
  }

  init();
});
