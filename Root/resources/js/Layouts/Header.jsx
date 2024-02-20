import { Link } from '@inertiajs/react'
export function Header(props) {
 var basketCount= 0;
  $.ajax({
    url: `/basketdata`,
    method: "get",
    success: function(data) {
     basketCount= 10;
     alert(data)
    },
    error: function(error) {
      
    console.log('خطا',error);

    }
  });
  return (
  <header>
    <div className="shared-global_header-global_header_component__desktopHeader shared-global_header-global_header_component__bannerPlaceholder">
      <div className="shared-global_header-logo_bar_component__headerTopWrapper">

     
        <div className="shared-global_header-logo_bar_component__gridWideSection">

          <h2 class='header_title' >ایران تم</h2>
          <nav
            className="shared-global_header-logo_bar_component__nav"
            aria-label="account"
            data-turbo="false"
          >
               <a
              className="shared-global_header-logo_bar_component__menuLink"
              href="/basket"
              data-action="analytics-event#send"
              data-analytics-event='{"hitType":"event","eventCategory":"page-header-top","eventAction":"click;link","eventLabel":"forums"}'
            >
               سبد خرید 
               

               {/* <span id='basketNumber' className="shared-global_header-cart_link_component__userCartCount" data-controller="cart-icon" >{basketCount}</span> */}
            </a>
            <a
              className="shared-global_header-logo_bar_component__menuLink"
              href="/register"
              data-action="analytics-event#send"
              data-analytics-event='{"hitType":"event","eventCategory":"page-header-top","eventAction":"click;link","eventLabel":"forums"}'
            >
              ثبت نام
            </a>
         
            {/* <div
            className="shared-global_header-dropdown_component__guestUserMenuWrapper"
            data-turbo="false"
          >
            <a
              className="shared-global_header-our_products_component__ourProductMenuLink"
              href="#"
            >
              <span className="shared-global_header-our_products_component__menuDropdownIconWrapper">
                <svg width="100%" height="100%">
                  <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#dialer" />
                </svg>
              </span>
              <span className="shared-global_header-our_products_component__menuLinkText">
                Our Products
              </span>
            </a>
            <div className="shared-global_header-dropdown_component__dropdownWrapper">
              <div className="shared-global_header-dropdown_component__dropdown">
                <nav
                  className="shared-global_header-our_products_component__dropdownListWrapper"
                  aria-label="our products"
                >
                  <a
                    className="shared-global_header-our_products_component__dropdownLink"
                    title="Digital assets subscription"
                    rel="noopener"
                    target="_blank"
                    href="https://elements.envato.com/?utm_source=Market&utm_medium=promos&utm_campaign=elements_mkt-headernav_our_products&utm_content=headernav"
                    data-action="analytics-event#send"
                    data-analytics-event='{"hitType":"event","eventCategory":"page-header-top","eventAction":"click;link","eventLabel":"our products;envato elements"}'
                  >
                    <div className="shared-global_header-our_products_component__dropdownLinkLogo">
                      <img
                        loading="lazy"
                        alt="Envato Elements"
                        width={118}
                        height={16}
                        src="https://assets.market-storefront.envato-static.com/storefront/assets/logos/envato-elements-93296989e268af4b90133a4016d66fa11eeab8340c5c90d9a172427209e8d492.svg"
                      />
                    </div>
                    <span className="shared-global_header-our_products_component__dropdownText">
                      Digital assets subscription
                    </span>
                  </a>
                  <a
                    className="shared-global_header-our_products_component__dropdownLink"
                    title="Tutorials & courses"
                    rel="noopener"
                    target="_blank"
                    href="https://tutsplus.com"
                    data-action="analytics-event#send"
                    data-analytics-event='{"hitType":"event","eventCategory":"page-header-top","eventAction":"click;link","eventLabel":"our products;envato tuts+"}'
                  >
                    <div className="shared-global_header-our_products_component__dropdownLinkLogo">
                      <img
                        loading="lazy"
                        alt="Envato Tuts+"
                        width={92}
                        height={16}
                        src="https://assets.market-storefront.envato-static.com/storefront/assets/logos/envato-tutsplus-e52509c744445cddb9bab8c35b1c96b0eaae3263798d941f3f8d8eb3ec0f3d82.svg"
                      />
                    </div>
                    <span className="shared-global_header-our_products_component__dropdownText">
                      Tutorials &amp; courses
                    </span>
                  </a>
                  <a
                    className="shared-global_header-our_products_component__dropdownLink"
                    title="Create designs, videos & mockups"
                    rel="noopener"
                    target="_blank"
                    href="https://placeit.net/?utm_medium=promos&utm_source=envatomarket&utm_campaign=placeit_mkt-headernav&utm_content=headernav_our_products"
                    data-action="analytics-event#send"
                    data-analytics-event='{"hitType":"event","eventCategory":"page-header-top","eventAction":"click;link","eventLabel":"our products;envato placeit"}'
                  >
                    <div className="shared-global_header-our_products_component__dropdownLinkLogo">
                      <img
                        loading="lazy"
                        alt="Envato Placeit"
                        width={130}
                        height={20}
                        src="https://assets.market-storefront.envato-static.com/storefront/assets/logos/envato-placeit-fe4aedefd74733b2d72b8ded47cdfa0887a2bf5bd1494af6c797e79e36c75ab3.svg"
                      />
                    </div>
                    <span className="shared-global_header-our_products_component__dropdownText">
                      Create designs, videos &amp; mockups
                    </span>
                  </a>
                </nav>
                <div className="shared-global_header-our_products_component__navFooter">
                  <ul className="shared-global_header-our_products_component__navFooterListWrapper">
                    <li className="shared-global_header-our_products_component__footerItem">
                      Join the
                      <a
                        className="shared-global_header-our_products_component__footerLink"
                        href="https://community.envato.com"
                        target="_blank"
                        rel="noopener"
                      >
                        Envato community
                      </a>
                    </li>
                    <li className="shared-global_header-our_products_component__footerItem">
                      Learn from others in
                      <a
                        className="shared-global_header-our_products_component__footerLink"
                        href="https://forums.envato.com"
                        target="_blank"
                        rel="noopener"
                      >
                        the forums
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div> */}

            <span
              className="shared-global_header-logo_bar_component__usernameWrapper"
              id="tlp-header-user-nav"
              data-turbo-permanent=""
              data-controller="fragment-loader"
              data-fragment-loader-session-required-value="true"
              data-fragment-loader-url-value="/my/user_nav"
            >
              <div
                className="shared-global_header-dropdown_component__guestUserMenuWrapper shared-global_header-dropdown_component__disabled"
                data-turbo="false"
              >
                <a
                  className="shared-global_header-user_nav_component__guestUserMenuLink"
                  href="/login"
                  data-turbo="false"
                  data-controller="modal-commander"
                  data-action="modal-commander#open analytics-event#send"
                  data-modal-commander-url-value="/storefront/sign_in"
                  data-analytics-event='{"hitType":"event","eventCategory":"page-header-top","eventAction":"click;link","eventLabel":"sign in"}'
                >
                  <span className="shared-global_header-user_nav_component__guestUserMenuText">
                    ورود
                  </span>
                </a>
                <div className="shared-global_header-dropdown_component__dropdownWrapper">
                  <div className="shared-global_header-dropdown_component__dropdown"></div>
                </div>
              </div>
            </span>
          </nav>
        </div>

      </div>
      <div
        className="shared-global_header-mobile_menu_component__headerTopMobileWrapper"
        data-controller="mobile-menu"
      >
        <div className="shared-global_header-mobile_menu_component__headerMobile">
          <div className="shared-global_header-mobile_menu_component__accountButton">
            <div>
              <div className="shared-global_header-cart_mini_link_component__cartButton">
                <a
                  className="shared-global_header-cart_mini_link_component__linkButton"
                  href="/cart"
                  title="Cart"
                  data-action="click->analytics-event#sendMiniCartEvent"
                  data-analytics-event='{"hitType":"event","eventAction":"click;link","eventLabel":"cart"}'
                  data-turbo="false"
                >
                  <span className="shared-global_header-cart_mini_link_component__userCartIcon">
                    <svg width="100%" height="100%">
                      <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#cart_mobile" />
                    </svg>
                  </span>
                  <span
                    className="shared-global_header-cart_mini_link_component__userCartCount"
                    data-controller="cart-icon"
                    data-action="cartStoreUpdated@window->cart-icon#updateFromStore"
                  />
                </a>
              </div>
            </div>
            <a
              className="shared-global_header-mobile_menu_component__linkButton"
              title="Open account menu"
              data-action="click->mobile-menu#openUserMenu"
              href="#"
            >
              <span className="shared-global_header-mobile_menu_component__linkIcon">
                <svg width="100%" height="100%">
                  <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#person" />
                </svg>
              </span>
            </a>
          </div>
          <div className="shared-global_header-mobile_menu_component__categoriesButton">
            <a
              className="shared-global_header-mobile_menu_component__linkButton"
              title="Open site menu"
              data-action="click->mobile-menu#openCategoriesMenu"
              href="#"
            >
              <span className="shared-global_header-mobile_menu_component__linkIcon">
                <svg width="100%" height="100%">
                  <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#hamburger" />
                </svg>
              </span>
            </a>
          </div>
          <div>
            <a
              className="shared-global_header-mobile_menu_component__baseLogo"
              href="/"
            >
              <picture>
                <source
                  srcSet="https://assets.market-storefront.envato-static.com/storefront/assets/logos/themeforest-dd57a83e1947d49586491f03d1c3eedc4c6a438d2740328c5277e6b67bc46ad9.webp"
                  type="image/webp"
                />
                <img
                  loading="lazy"
                  src="https://assets.market-storefront.envato-static.com/storefront/assets/logos/themeforest-15052b5a8846d9acfb6183725cf28b5a4218288c307e0cd3628e9b7631e6dd0e.png"
                  alt="ThemeForest"
                  className="shared-global_header-mobile_menu_component__logo"
                />
              </picture>
            </a>
          </div>
        </div>
        <div
          className="shared-global_header-mobile_menu_component__offCanvasBackground"
          data-mobile-menu-target="categoriesMenu"
        >
          <div
            className="shared-global_header-mobile_menu_component__overlay"
            data-action="click->mobile-menu#closeMenu"
          />
          <template data-mobile-menu-target="categoriesTemplate" />
        </div>
        <div
          className="shared-global_header-mobile_menu_component__offCanvasBackground"
          data-mobile-menu-target="userMenu"
        >
          <div
            className="shared-global_header-mobile_menu_component__overlay"
            data-action="click->mobile-menu#closeMenu"
          />
          <div className="shared-global_header-mobile_menu_component__offCanvasWrapper shared-global_header-mobile_menu_component__right">
            <div
              className="shared-global_header-mobile_menu_component__offCanvasGuestUserMenuWrapper"
              data-controller="fragment-loader"
              data-fragment-loader-session-required-value="true"
              data-fragment-loader-url-value="/my/user_nav?mobile=true"
            >
              <a
                className="shared-global_header-mobile_menu_user_nav_component__link"
                href="/cart"
                data-turbo="false"
              >
                Guest Cart
                <span className="shared-global_header-mobile_menu_user_nav_component__iconWrapper">
                  <svg width="100%" height="100%">
                    <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#cart_mobile" />
                  </svg>
                </span>
                <span
                  className="shared-global_header-mobile_menu_user_nav_component__userCartCount"
                  data-controller="cart-icon"
                  data-action="cartStoreUpdated@window->cart-icon#updateFromStore"
                />
              </a>
              <a
                className="shared-global_header-mobile_menu_user_nav_component__link"
                href="/sign_up?to=themeforest"
                data-turbo="false"
              >
                Create an Envato Account
                <span className="shared-global_header-mobile_menu_user_nav_component__iconWrapper">
                  <svg width="100%" height="100%">
                    <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#envato_mobile_menu_logo" />
                  </svg>
                </span>
              </a>
              <a
                className="shared-global_header-mobile_menu_user_nav_component__link"
                href="/sign_in?to=themeforest"
                data-turbo="false"
              >
                Sign In
                <span className="shared-global_header-mobile_menu_user_nav_component__iconWrapper">
                  <svg width="100%" height="100%">
                    <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#envato_mobile_login" />
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div className="shared-global_header-markets_nav_component__headerBottomWrapper">
        <div className="shared-global_header-markets_nav_component__gridWide">
          <nav
            aria-label="markets"
            className="shared-global_header-markets_nav_component__navWithLabelWrapper"
          >
            <Link
              className="shared-global_header-markets_nav_component__siteLink shared-global_header-markets_nav_component__active"
              // data-action="analytics-event#send"
              // data-analytics-event='{"hitType":"event","eventCategory":"MarketNav","eventAction":"click","eventLabel":"ThemeForest"}'
              href="/"
            >
              صفحه نخست
            </Link>
            <Link
              
              href="shop"
            >
              فروشگاه
            </Link>
            <a
              className="shared-global_header-markets_nav_component__siteLink"
              data-action="analytics-event#send"
              data-analytics-event='{"hitType":"event","eventCategory":"MarketNav","eventAction":"click","eventLabel":"VideoHive"}'
              href="/blog"
            >
              وبلاگ
            </a>
            <a
              className="shared-global_header-markets_nav_component__siteLink"
              data-action="analytics-event#send"
              data-analytics-event='{"hitType":"event","eventCategory":"MarketNav","eventAction":"click","eventLabel":"AudioJungle"}'
              href="/about_us"
            >
              درباره ی ما
            </a>
            <a
              className="shared-global_header-markets_nav_component__siteLink"
              data-action="analytics-event#send"
              data-analytics-event='{"hitType":"event","eventCategory":"MarketNav","eventAction":"click","eventLabel":"GraphicRiver"}'
              href="/contact_us"
            >
              تماس با ما
            </a>


            {/* <div className="shared-global_header-elements_nav_component__root">
            <a
              className="shared-global_header-elements_nav_component__mainLink"
              href="https://elements.envato.com/?utm_campaign=elements_mkt-switcher_link&utm_medium=referral&utm_source=themeforest.net&utm_content=tf_search"
              target="_blank"
            >
              <span
                data-action="mouseover->analytics-event#send click->analytics-event#sendAlt"
                data-analytics-event='{"hitType":"event","eventCategory":"site switcher","eventAction":"hover","eventLabel":"Site switcher;envato elements"}'
                data-analytics-event-alt='{"hitType":"event","eventCategory":"site switcher","eventAction":"click","eventLabel":"Unlimited Downloads"}'
              >
                Unlimited Downloads
              </span>
            </a>
            <div className="shared-global_header-elements_nav_component__dropdownContainer shared-global_header-elements_nav_component__uniqueSellingPointVariant">
              <a
                className="shared-global_header-elements_nav_component__mainPanel"
                href="https://elements.envato.com/?utm_campaign=elements_mkt-switcher_lhs-panel&utm_medium=referral&utm_source=themeforest.net&utm_content=tf_search"
                target="_blank"
                data-action="analytics-event#send"
                data-analytics-event='{"hitType":"event","eventCategory":"site switcher","eventAction":"click","eventLabel":"cta;Get Unlimited Downloads"}'
              >
                <div>
                  <img
                    className="shared-global_header-elements_nav_component__elementsLogo"
                    loading="lazy"
                    src="https://assets.market-storefront.envato-static.com/storefront/assets/logos/envato-elements-93296989e268af4b90133a4016d66fa11eeab8340c5c90d9a172427209e8d492.svg"
                    alt="Elements logo"
                  />
                </div>
                <strong className="shared-global_header-elements_nav_component__punchLine">
                  Everything you need for your creative projects, for one low cost
                </strong>
                <img
                  className="shared-global_header-elements_nav_component__itemsCollage"
                  loading="lazy"
                  src="https://assets.market-storefront.envato-static.com/storefront/assets/elements-items-collage-068b6a0e859dc995a5892aedc327396630e7868b1bc969c219375e4b3db87ca5.jpg"
                  alt="Items Collage"
                />
              </a>
              <div className="shared-global_header-elements_nav_component__secondaryPanel">
                <ul className="shared-global_header-elements_nav_component__sellingPoints">
                  <li> Millions of creative assets</li>
                  <li> Unlimited downloads</li>
                  <li> Simple commercial licensing</li>
                  <li> One low cost</li>
                  <li> Cancel any time</li>
                </ul>
                <div className="shared-global_header-elements_nav_component__cta">
                  <a
                    href="https://elements.envato.com/?utm_campaign=elements_mkt-switcher_cta&utm_medium=referral&utm_source=themeforest.net&utm_content=tf_search"
                    target="_blank"
                    data-action="analytics-event#send"
                    data-analytics-event='{"hitType":"event","eventCategory":"site switcher","eventAction":"click","eventLabel":"cta;Get Unlimited Downloads"}'
                  >
                    Get Unlimited Downloads&nbsp;
                  </a>
                </div>
              </div>
            </div>
          </div> */}
            <div className="shared-global_header-markets_nav_component__siteLogoWrapper">
              <picture>
                <source
                  srcSet="/img/icons/logo.png"
                  type="image/webp"
                />
                <img
                  src="/img/icons/logo.png"
                  alt="ThemeForest"
                  className="shared-global_header-markets_nav_component__siteLogo"
                  width={115}
                />
              </picture>
            </div>
          </nav>
        </div>
      </div>
    
    </div>

</header>

  )
}