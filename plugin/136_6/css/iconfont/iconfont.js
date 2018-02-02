;(function(window) {

  var svgSprite = '<svg>' +
    '' +
    '<symbol id="icon-yisheng" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M697.278797 113.412003C621.128443 23.379477 485.407342 36.824697 429.563476 87.487563c-8.571213 7.760754-73.945129-1.110287-103.089913 27.03575-29.131481 28.116361-66.081021 78.764901-66.081021 164.311253s43.685965 139.338489 43.685965 139.338489-0.86981-6.094812-1.877767-15.358803c-2.615571-24.14184-6.217608-70.363558 1.877767-91.362824 11.544941-23.439852 87.372953-32.616862 141.156904-123.775025 35.846416 64.138786 222.947721 102.396111 245.342778 121.55445 18.187221 15.533788 17.682731 101.371782 20.773116 118.543883 0.716314 3.989871 1.614777 4.281513 3.010567-0.876973 7.357572-27.370371 45.657876-81.688487 46.790676-112.055099C762.285347 284.460704 773.47213 203.431226 697.278797 113.412003z"  ></path>' +
    '' +
    '<path d="M699.067536 333.562005c-2.2656-7.117095-5.02648-12.700253-8.490372-15.665795C668.182109 298.737872 481.080803 260.481569 445.234387 196.35711c-34.911114 59.140958-78.984912 83.734076-108.869546 100.130512-16.074094 9.221012-41.12156 78.913281-9.162684 159.460782 30.951943 70.524217 86.23299 132.119063 182.66732 132.119063 87.73725 0 141.43422-50.92688 173.70725-113.210411 0 0 0.01535-0.058328 0.029676-0.071631 1.489934-2.879584 2.828418-5.831822 4.223185-8.754385C702.122105 431.865915 707.733916 367.158171 699.067536 333.562005z"  ></path>' +
    '' +
    '<path d="M644.23879 573.615313 511.864924 723.240075C572.808948 723.123418 634.45496 641.187291 644.23879 573.615313z"  ></path>' +
    '' +
    '<path d="M511.864924 723.240075l-132.3534-149.566434C389.30968 641.259946 450.942389 723.123418 511.864924 723.240075z"  ></path>' +
    '' +
    '<path d="M676.789137 582.208015c-12.691043 76.369342-76.711126 161.03872-147.959843 173.079964-0.182149 0.058328-0.342808 0.073678-0.524956 0.116657-4.479011 116.482945-59.849086 185.587835-150.299121 185.587835-81.651648 0-111.857601-53.104475-116.422569-81.219813-0.227174-1.417279 0.035816-2.747577 0.167822-4.120854-47.682999-7.832386-84.121909-49.145303-84.121909-99.047854 0-55.501058 45.016263-100.510158 100.487645-100.510158 55.487755 0 100.496855 45.0091 100.496855 100.510158 0 49.758264-36.226063 90.981131-83.71361 98.989525 1.966795 8.826016 15.052834 51.907207 83.105766 51.907207 96.178503 0 114.38619-96.755648 116.900453-152.212704-71.233368-12.041244-135.217634-96.637967-147.94654-173.006286C204.743104 623.738897 43.033096 719.367885 43.033096 907.499659c0 6.91141 0 13.005198 0 18.675338 0 27.751041 22.50455 50.240241 50.247404 50.240241l421.856957 0 415.58102 0c27.742854 0 50.247404-22.4892 50.247404-50.240241 0-5.67014 0-11.762905 0-18.675338C980.965881 719.266577 819.058374 623.592564 676.789137 582.208015z"  ></path>' +
    '' +
    '<path d="M278.380218 721.940476c-18.500353 0-33.493835 15.007809-33.493835 33.492812 0 18.501376 14.993482 33.493835 33.493835 33.493835 18.501376 0 33.500998-14.992459 33.500998-33.493835C311.881217 736.947262 296.881594 721.940476 278.380218 721.940476z"  ></path>' +
    '' +
    '<path d="M278.380218 689.409572c-36.979216 0-66.99381 30.001291-66.99381 66.98767 0 37.030381 30.014594 67.016323 66.99381 67.016323 37.001729 0 66.995857-29.985942 66.995857-67.016323C345.375052 719.410863 315.381947 689.409572 278.380218 689.409572zM278.380218 805.674553c-27.706015 0-50.240241-22.534226-50.240241-50.241264 0-27.706015 22.534226-50.255591 50.240241-50.255591 27.707039 0 50.247404 22.549575 50.247404 50.255591C328.627622 783.140327 306.087257 805.674553 278.380218 805.674553z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-shentimei" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M644.455731 852.758917c-21.900799-35.980469-59.44488-168.948877-68.831668-220.572628-9.385764-51.623751-7.822153-208.057593-3.128247-219.007993 4.692882-10.9504 32.851199-51.623751 0-73.52455 0 0-9.385764-18.772552 3.128247-20.336164 12.515035-1.564635 48.494481-48.494481 53.187363-82.910315 4.692882-34.415834-6.257517-95.42535 3.128247-106.375749 9.385764-10.9504 17.207917-51.623751 4.692882-62.574151-12.515035-10.9504-25.029046 20.336164-29.722952 37.544081-4.692882 17.207917 4.692882 73.52455-3.128247 114.196879-7.822153 40.673351-32.851199 62.574151-43.801599 68.831668-10.9504 6.257517-21.900799-9.385764-14.078647-42.236963 7.822153-32.851199-12.515035-56.316633-34.415834-57.881268-21.900799-1.564635-57.881268 40.673351-56.316633 84.47495 1.564635 43.801599 15.643282 54.751998-6.257517 70.39528s-71.837118 63.515592-90.608647 85.416392c-23.237237 27.110451-56.04648 27.782763-54.751998 42.236963 1.970888 22.01234 21.10262 12.212136 38.894845-5.578042 10.147104-10.146081 12.728906-10.06524 28.372188-21.015639 15.643282-10.9504 70.272483-54.129828 79.658248-54.129828s18.772552 18.772552 26.593681 29.722952c7.822153 10.9504 6.257517 59.44488-1.564635 75.088162-7.822153 15.643282-118.889761 118.889761-126.711913 154.87023-7.822153 35.979446 64.137763 26.593681 87.603197 23.465434 23.465434-3.128247 50.059116-6.257517 42.236963 17.207917-7.822153 23.465434-21.900799 101.682867-26.593681 153.305595-4.692882 51.623751 1.564635 65.702398 34.415834 71.959915 32.851199 6.257517 54.751998-10.9504 50.059116-23.465434-4.692882-12.515035-31.286564 4.692882-39.108716-23.465434-7.822153-28.158317 12.515035-120.454396 20.336164-140.791583 7.822153-20.336164 21.900799-35.980469 28.158317-3.128247 6.257517 32.851199 48.494481 112.633267 65.702398 153.305595 17.207917 40.673351 31.286564 71.959915 48.494481 79.782068 0 0 21.900799 6.257517 26.593681-23.465434C691.3866 904.382669 666.35653 888.739387 644.455731 852.758917z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-jiankangguanli1" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M682.929486 706.104813c15.388479-15.667841 30.775934-33.152051 46.164413-52.302203 15.419178-19.180851 29.729092-40.337707 42.990117-63.403029 13.228279-23.12979 24.609491-47.737234 33.983999-73.889871 9.435906-26.181289 14.987343-53.628408 16.71366-82.400708 1.695618-28.741601 0-57.113789-5.149277-84.959997-5.119601-27.940352-14.740726-52.764738-28.865421-74.567299-14.123672-21.803585-33.151028-40.121789-57.081043-54.893214-23.099091-14.308891-67.969021-20.785396-86.59524-20.785396-0.678452 0-1.326205 0.01535-1.942235 0.031722-24.855084 0.708128-47.891753 3.453658-73.703629 15.140839-24.178679 10.94733-43.452651 23.868617-62.294788 39.596833-22.234397 18.287505-62.385862 49.865711-62.385862 49.865711-27.631314-20.723997-46.658669-35.927257-72.316026-55.109132-22.234397-16.560164-45.794999-28.371164-72.747861-40.121789-16.09763-7.061836-40.799218-10.962679-63.866586-10.962679-15.541975 0-30.314423 1.75804-41.231053 5.536087-25.071002 8.665357-33.552164 12.828167-51.161217 25.287943-21.340027 15.111163-40.213887 32.010041-55.17053 52.949956-14.956643 20.938891-26.27441 44.684712-33.982976 71.26816-7.709589 26.614148-10.701736 54.738695-9.005095 84.343967 0.86367 30.53034 6.815219 59.086723 17.978467 85.669148 11.101849 26.582425 24.578792 51.006697 40.399105 73.209372 15.819291 22.267143 32.720216 42.742477 50.667983 61.46284 17.978467 18.717294 34.230616 35.495422 48.787146 50.297546 23.067368 22.726607 46.165436 45.146223 69.263503 67.444065 23.098068 22.171975 44.900629 41.815361 65.439408 58.776661 20.507056 17.023722 39.134299 30.716582 55.786561 41.231053 16.683984 10.393721 30.129204 15.667841 40.428781 15.667841 8.543583 0 22.019503-5.027503 40.399105-15.080463 18.412348-9.959839 39.104623-23.49818 62.201667-40.49018 23.12979-16.990976 47.491641-36.604686 73.15002-58.84113C635.437845 753.842047 659.831418 730.529085 682.929486 706.104813z"  ></path>' +
    '' +
    '<path d="M970.74561 349.149005c-5.118578-27.940352-14.710027-52.764738-28.864398-74.567299-14.124695-21.803585-33.151028-40.121789-57.082066-54.893214-23.960715-14.832823-53.875025-23.560602-89.832981-26.181289-14.586207-1.047866-28.865421 0.832971-42.834574 4.965082 21.216207 4.441149 40.059368 11.348466 56.034201 21.216207 23.931039 14.772448 42.957371 33.089629 57.08309 54.893214 14.123672 21.802562 23.744797 46.626947 28.863375 74.567299 5.149277 27.847232 6.845918 56.218396 5.149277 84.959997-1.695618 28.7723-7.27673 56.218396-16.71366 82.400708-9.374508 26.151613-20.723997 50.760081-33.985022 73.889871-13.258978 23.065322-27.567869 44.222177-42.98807 63.403029-15.388479 19.150152-30.746258 36.635385-46.165436 52.302203-23.097044 24.424272-47.459918 47.737234-73.147974 69.971631-25.65838 22.23542-50.021254 41.84913-73.118298 58.84113-23.098068 16.991999-43.822065 30.53034-62.201667 40.49018-0.617054 0.369414-0.986467 0.462534-1.541099 0.771573 15.32708 9.250688 28.062126 14.308891 37.745672 14.308891 8.574283 0 22.018479-5.027503 40.428781-15.080463 18.380626-9.959839 39.104623-23.49818 62.201667-40.49018 23.098068-16.990976 47.461965-36.604686 73.118298-58.84113 25.689079-22.234397 50.051953-45.547359 73.148997-69.971631 15.419178-15.667841 30.775934-33.152051 46.196135-52.302203 15.389502-19.180851 29.697369-40.337707 42.990117-63.403029 13.229303-23.12979 24.578792-47.737234 33.983999-73.889871 9.405207-26.181289 14.987343-53.628408 16.683984-82.400708C977.591529 405.367401 975.895911 376.995213 970.74561 349.149005z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-7" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M524.26586 122.377188c-103.703897 0-199.541639 44.965098-277.568736 111.110587-39.959084 33.891901-53.479005 89.793072-33.314757 138.149407l47.618531 114.201995c45.51973-100.012831 146.269341-169.549557 263.263939-169.549557 119.853715 0 222.658126 72.904427 266.493493 176.771029l50.733475-121.723296c20.071128-48.172139 6.828522-103.750969-32.80822-137.711432C729.528803 165.751045 631.107213 122.377188 524.26586 122.377188zM581.642638 252.266467l-33.406854 0 0 35.045167-46.648436 0 0-35.045167L466.495108 252.266467l0-46.719044 35.091216 0 0-35.06768 46.648436 0 0 35.06768 33.406854 0L581.641615 252.266467z"  ></path>' +
    '' +
    '<path d="M652.608923 386.079102c-0.022513 0.022513-0.068562 0.069585-0.068562 0.092098 0 0-83.377966 130.697691-226.303142 178.10849-5.744841 1.914606-12.043291-0.231267-15.45704-5.260817-3.368724-5.006014-3.045359-11.673877 0.87595-16.287965 6.29845-7.429203 12.688997-15.688307 18.318204-24.38641 4.129041-6.390547 3.89982-14.673188-0.576121-20.832468-4.475941-6.160303-12.298094-8.905834-19.679202-6.921643-43.927465 11.813047-114.985848 44.897559-138.495284 136.811946 11.165294 129.9824 120.176057 232.025471 253.043157 232.025471 140.341329 0 254.080789-113.740484 254.080789-254.080789C778.346649 511.862877 727.797369 430.191786 652.608923 386.079102z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-food" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M1017.6 409.6c0-14.2-3-28-8.8-41.6-9-30.4-24.6-49-46-59.4-27.8-24-65-45.4-109.8-63.4 85.2-60.8 174.8-72.2 152.4-119.4-21.8-45.8-175.2 6-234.2 76.4-3.8 4.4-7.4 9-10.8 13.6-73.4-18.2-158-28.6-248.4-28.6-196.6 0-367 49.4-450.6 121.6-21.4 10.4-37 29-46 59.4-5.8 13.4-8.8 27.4-8.8 41.6 0 3.6 0.2 7.2 0.6 10.8-0.4 7-0.6 14.2-0.6 21.8 0 261.2 226.4 473 505.6 473 279.2 0 505.6-211.8 505.6-473 0-7.6-0.2-15-0.6-21.8C1017.4 416.8 1017.6 413.2 1017.6 409.6zM512 569.8c-230 0-416.6-71.6-416.6-160.2 0-88.4 186.4-160.2 416.6-160.2 77.4 0 149.8 8.2 212 22.2-29.8 52.4-49.6 101.6-68.8 115.6-62.2 45.2-103.2 7-202 59-98.8 51.8-100.4 62-100.4 62s166.4 13 258.4 5.4c101.2-8.2 98.8-6 95.2-22.8-10.8-50.2 33-127.4 86.4-190.8 2-2.2 4-4.6 5.8-6.8 80 29.2 129.8 70.4 129.8 116.2C928.6 498.2 742 569.8 512 569.8z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '</svg>'
  var script = function() {
    var scripts = document.getElementsByTagName('script')
    return scripts[scripts.length - 1]
  }()
  var shouldInjectCss = script.getAttribute("data-injectcss")

  /**
   * document ready
   */
  var ready = function(fn) {
    if (document.addEventListener) {
      if (~["complete", "loaded", "interactive"].indexOf(document.readyState)) {
        setTimeout(fn, 0)
      } else {
        var loadFn = function() {
          document.removeEventListener("DOMContentLoaded", loadFn, false)
          fn()
        }
        document.addEventListener("DOMContentLoaded", loadFn, false)
      }
    } else if (document.attachEvent) {
      IEContentLoaded(window, fn)
    }

    function IEContentLoaded(w, fn) {
      var d = w.document,
        done = false,
        // only fire once
        init = function() {
          if (!done) {
            done = true
            fn()
          }
        }
        // polling for no errors
      var polling = function() {
        try {
          // throws errors until after ondocumentready
          d.documentElement.doScroll('left')
        } catch (e) {
          setTimeout(polling, 50)
          return
        }
        // no errors, fire

        init()
      };

      polling()
        // trying to always fire before onload
      d.onreadystatechange = function() {
        if (d.readyState == 'complete') {
          d.onreadystatechange = null
          init()
        }
      }
    }
  }

  /**
   * Insert el before target
   *
   * @param {Element} el
   * @param {Element} target
   */

  var before = function(el, target) {
    target.parentNode.insertBefore(el, target)
  }

  /**
   * Prepend el to target
   *
   * @param {Element} el
   * @param {Element} target
   */

  var prepend = function(el, target) {
    if (target.firstChild) {
      before(el, target.firstChild)
    } else {
      target.appendChild(el)
    }
  }

  function appendSvg() {
    var div, svg

    div = document.createElement('div')
    div.innerHTML = svgSprite
    svgSprite = null
    svg = div.getElementsByTagName('svg')[0]
    if (svg) {
      svg.setAttribute('aria-hidden', 'true')
      svg.style.position = 'absolute'
      svg.style.width = 0
      svg.style.height = 0
      svg.style.overflow = 'hidden'
      prepend(svg, document.body)
    }
  }

  if (shouldInjectCss && !window.__iconfont__svg__cssinject__) {
    window.__iconfont__svg__cssinject__ = true
    try {
      document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>");
    } catch (e) {
      console && console.log(e)
    }
  }

  ready(appendSvg)


})(window)