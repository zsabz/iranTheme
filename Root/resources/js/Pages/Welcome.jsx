export default function Welcome() {
    return (
      <>
        <section className="home-hero_component__root">
  <div className="home-hero_component__wrapper">
    <div className="home-hero_component__autosuggestWrapper">
      <div className="home-hero_component__headerWrapper">
        <div className="home-heading_component__root">
          <h1 className="home-heading_component__heading home-heading_component__small">
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>
                قالب های حرفه ای وردپرس و قالب های وب سایت برای هر پروژه
              </font>
            </font>
          </h1>
          <h2 className="home-heading_component__subheading">
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>
                هزاران طرح زمینه، الگوها و محصولات CMS را که توسط توسعه دهندگان
                در سطح جهانی ساخته شده اند، کشف کنید.
              </font>
            </font>
          </h2>
        </div>
      </div>
      <form
        role="search"
        method="get"
        action="/search"
        className="shared-autosuggest_component__root shared-autosuggest_component__compactLayoutStyle"
        data-controller="autosuggest"
        data-action="submit->autosuggest#onSubmit"
        data-autosuggest-target="form"
        data-autosuggest-result-class="shared-autosuggest_component__searchItem"
        data-autosuggest-result-category-class="shared-autosuggest_component__searchItemCategory"
        data-autosuggest-result-separator-class="shared-autosuggest_component__searchItemSeparator"
        data-autosuggest-category-value=""
        data-autosuggest-suggestions-count-value={8}
      >
        <input
          type="hidden"
          name="category"
          data-autosuggest-target="category"
          defaultValue=""
        />
        <div className="shared-autosuggest_component__searchInputWrapper">
          <input
            className="shared-autosuggest_component__searchInput"
            placeholder="به عنوان مثال وردپرس واکنش گرا"
            name="term"
            autoComplete="off"
            type="search"
            aria-label="جستجو کردن"
            data-search-term=""
            data-action="keydown->autosuggest#onKeydown blur->autosuggest#onInputBlur focus->autosuggest#onInputFocus input->autosuggest#onInputChange"
            data-autosuggest-target="input"
            spellCheck="false"
            defaultValue=""
          />
          <nav
            className="shared-autosuggest_component__searchSuggestions"
            data-autosuggest-target="results"
          />
          <button
            className="shared-autosuggest_component__searchBtn"
            aria-label="جستجو کردن"
            data-action="click->analytics-event#send"
            data-autosuggest-target="submit"
            data-analytics-event='{"hitType":"event","eventAction":"click;button","eventLabel":"Search bar","eventCategory":"Block interaction; Search"}'
          >
            <span className="shared-autosuggest_component__searchBtnIcon">
              <svg width="100%" height="100%">
                <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#search" />
              </svg>
            </span>
            <span className="shared-autosuggest_component__searchBtnLabel">
              <font style={{ verticalAlign: "inherit" }}>
                <font style={{ verticalAlign: "inherit" }}>جستجو کردن</font>
              </font>
            </span>
          </button>
        </div>
      </form>
    </div>
    <div className="home-hero_component__imageWrapper">
      <picture>
        <source
          srcSet="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/experiments/hero-image--popular-items-2963d5759f434e6691a0bb5363bf2d1707c8885ab10b6dba3b0648f8c5f94da5.webp"
          type="image/webp"
        />
        <img
          src="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/experiments/hero-image--popular-items-45e049c6e45b12f43ecafdc960d7bb581203b40857dfce5938af6f43627731d4.png"
          loading="eager"
          alt="ThemeForest: قالب های حرفه ای وردپرس و قالب های وب سایت برای هر پروژه"
          width={758}
          height={407}
          className="home-hero_image_component__image"
        />
      </picture>
    </div>
  </div>
</section>





<section className="home-category_tiles_block_component__root">
  <div className="home-category_tiles_block_component__wrapper">
    <div className="home-category_tiles_block_component__tiles">
      <div className="home-category_tile_component__root">
        <div className="home-category_tile_component__tileDetail">
          <h2>
            <a
              className="home-category_tile_component__tileTitle"
              title="تم های وردپرس را مشاهده کنید"
              data-action="analytics-event#send"
              data-analytics-event='{"eventLabel":"wordpress: link","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
              href="/category/wordpress"
            >
              <font style={{ verticalAlign: "inherit" }}>
                <font style={{ verticalAlign: "inherit" }}>
                  قالب های وردپرس
                </font>
              </font>
            </a>
          </h2>
          <p className="home-category_tile_component__tileSubtitle">
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>
                هزاران قالب وردپرس
              </font>
            </font>
          </p>
          <a
            className="home-category_tile_component__tileLink"
            title="جدیدترین قالب های وردپرس"
            data-action="analytics-event#send"
            data-analytics-event='{"eventLabel":"wordpress: newest","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
            href="/category/wordpress?sort=date"
          >
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>جدیدترین </font>
            </font>
          </a>
          <a
            className="home-category_tile_component__tileLink"
            title="پرفروش ترین قالب های وردپرس"
            data-action="analytics-event#send"
            data-analytics-event='{"eventLabel":"wordpress: bestsellers","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
            href="/category/wordpress?sort=sales"
          >
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>پرفروش ها</font>
            </font>
          </a>
        </div>
        <a
          className="home-category_tile_component__tileArt"
          title="تم های وردپرس را مشاهده کنید"
          data-action="analytics-event#send"
          data-analytics-event='{"eventLabel":"wordpress: image","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
          href="/category/wordpress"
        >
          <div className="home-category_tile_component__imageIconWrapper">
            <picture className="home-category_tile_component__imageWrapper">
              <source
                srcSet="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-wordpress-81f6cf6d35ddcf9be55d8d515d7772a57f45fa280dd5ae187bd93db56916228c.avif"
                type="image/avif"
              />
              <source
                srcSet="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-wordpress-2af40372a7bb63bd626066949511b2a39c8f56264091be4dc80cf36af8a9d655.webp"
                type="image/webp"
              />
              <img
                src="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-wordpress-594088e5f1d5c3316f598da7a29ca7f8a976ad81da98316d3c198660cd7bdf74.png"
                alt="قالب های وردپرس"
                loading="lazy"
                width={345}
                height={175}
                className="home-category_tile_component__tileImage"
              />
            </picture>
            <div className="home-category_tile_component__tileIcon">
              <img
                alt="قالب های وردپرس"
                width={64}
                height={64}
                loading="lazy"
                src="https://assets.market-storefront.envato-static.com/storefront/assets/category-icons/themeforest/wordpress-c4a4c90a55e94cdf642e0d8e6b58795b144aa04d143ac4f010058190a543122f.svg"
              />
            </div>
          </div>
        </a>
      </div>
      <div className="home-category_tile_component__root">
        <div className="home-category_tile_component__tileDetail">
          <h2>
            <a
              className="home-category_tile_component__tileTitle"
              title="مشاهده الگوهای تجارت الکترونیک"
              data-action="analytics-event#send"
              data-analytics-event='{"eventLabel":"ecommerce: link","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
              href="/category/ecommerce"
            >
              <font style={{ verticalAlign: "inherit" }}>
                <font style={{ verticalAlign: "inherit" }}>
                  قالب های تجارت الکترونیک
                </font>
              </font>
            </a>
          </h2>
          <p className="home-category_tile_component__tileSubtitle">
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>
                قالب های زیبای وب سایت
              </font>
            </font>
          </p>
          <a
            className="home-category_tile_component__tileLink"
            title="جدیدترین قالب های تجارت الکترونیک"
            data-action="analytics-event#send"
            data-analytics-event='{"eventLabel":"ecommerce: newest","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
            href="/category/ecommerce?sort=date"
          >
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>جدیدترین </font>
            </font>
          </a>
          <a
            className="home-category_tile_component__tileLink"
            title="پرفروش ترین قالب های تجارت الکترونیک"
            data-action="analytics-event#send"
            data-analytics-event='{"eventLabel":"ecommerce: bestsellers","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
            href="/category/ecommerce?sort=sales"
          >
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>پرفروش ها</font>
            </font>
          </a>
        </div>
        <a
          className="home-category_tile_component__tileArt"
          title="مشاهده الگوهای تجارت الکترونیک"
          data-action="analytics-event#send"
          data-analytics-event='{"eventLabel":"ecommerce: image","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
          href="/category/ecommerce"
        >
          <div className="home-category_tile_component__imageIconWrapper">
            <picture className="home-category_tile_component__imageWrapper">
              <source
                srcSet="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-ecommerce-84898b44e9c7818c07191e345b4ae21a9421231cc78003fdf7f92dae0d5df948.avif"
                type="image/avif"
              />
              <source
                srcSet="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-ecommerce-5c380e7b069e965d986da64ffb0f4a2013dea48d197117ae92ee57b5361f4493.webp"
                type="image/webp"
              />
              <img
                src="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-ecommerce-163a1f2d0029f3b77f6f252c9abbeb94bb3ad9c61bfdbdb38cca1e5c8496a992.png"
                alt="قالب های تجارت الکترونیک"
                loading="lazy"
                width={345}
                height={175}
                className="home-category_tile_component__tileImage"
              />
            </picture>
            <div className="home-category_tile_component__tileIcon">
              <img
                alt="قالب های تجارت الکترونیک"
                width={64}
                height={64}
                loading="lazy"
                src="https://assets.market-storefront.envato-static.com/storefront/assets/category-icons/themeforest/ecommerce-d29cfac809c6b1f7ccc32afc149bef5f1e2a401138811b817a2dee80215c8bc9.svg"
              />
            </div>
          </div>
        </a>
      </div>
      <div className="home-category_tile_component__root">
        <div className="home-category_tile_component__tileDetail">
          <h2>
            <a
              className="home-category_tile_component__tileTitle"
              title="مشاهده قالب های سایت"
              data-action="analytics-event#send"
              data-analytics-event='{"eventLabel":"site-templates: link","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
              href="/category/site-templates"
            >
              <font style={{ verticalAlign: "inherit" }}>
                <font style={{ verticalAlign: "inherit" }}>قالب های سایت</font>
              </font>
            </a>
          </h2>
          <p className="home-category_tile_component__tileSubtitle">
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>
                HTML و قالب های وب سایت
              </font>
            </font>
          </p>
          <a
            className="home-category_tile_component__tileLink"
            title="جدیدترین قالب های سایت"
            data-action="analytics-event#send"
            data-analytics-event='{"eventLabel":"site-templates: newest","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
            href="/category/site-templates?sort=date"
          >
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>جدیدترین </font>
            </font>
          </a>
          <a
            className="home-category_tile_component__tileLink"
            title="پرفروش ترین قالب های سایت"
            data-action="analytics-event#send"
            data-analytics-event='{"eventLabel":"site-templates: bestsellers","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
            href="/category/site-templates?sort=sales"
          >
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>پرفروش ها</font>
            </font>
          </a>
        </div>
        <a
          className="home-category_tile_component__tileArt"
          title="مشاهده قالب های سایت"
          data-action="analytics-event#send"
          data-analytics-event='{"eventLabel":"site-templates: image","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
          href="/category/site-templates"
        >
          <div className="home-category_tile_component__imageIconWrapper">
            <picture className="home-category_tile_component__imageWrapper">
              <source
                srcSet="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-site-templates-f28b23bdd838629d4aaf9f4b376cd0ff8b2482c9f287565b08be499f216b6234.avif"
                type="image/avif"
              />
              <source
                srcSet="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-site-templates-9e494a7713a2de4e8e58ff97649742978e00647c5608b711d5da8c33f576a047.webp"
                type="image/webp"
              />
              <img
                src="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-site-templates-2435295dad697854145e340d3dc130f2265e14881d9f936bee34dfc73b3a6c73.png"
                alt="قالب های سایت"
                loading="lazy"
                width={345}
                height={175}
                className="home-category_tile_component__tileImage"
              />
            </picture>
            <div className="home-category_tile_component__tileIcon">
              <img
                alt="قالب های سایت"
                width={64}
                height={64}
                loading="lazy"
                src="https://assets.market-storefront.envato-static.com/storefront/assets/category-icons/themeforest/site-templates-45d4d1c09aed48fb32c10ff9ae265250c62023e584a98fc80280f0014ff922ad.svg"
              />
            </div>
          </div>
        </a>
      </div>
      <div className="home-category_tile_component__root">
        <div className="home-category_tile_component__tileDetail">
          <h2>
            <a
              className="home-category_tile_component__tileTitle"
              title="مشاهده الگوهای بازاریابی"
              data-action="analytics-event#send"
              data-analytics-event='{"eventLabel":"marketing: link","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
              href="/category/marketing"
            >
              <font style={{ verticalAlign: "inherit" }}>
                <font style={{ verticalAlign: "inherit" }}>
                  قالب های بازاریابی
                </font>
              </font>
            </a>
          </h2>
          <p className="home-category_tile_component__tileSubtitle">
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>
                الگوهای ایمیل، خبرنامه و صفحه فرود.
              </font>
            </font>
          </p>
          <a
            className="home-category_tile_component__tileLink"
            title="جدیدترین قالب های بازاریابی"
            data-action="analytics-event#send"
            data-analytics-event='{"eventLabel":"marketing: newest","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
            href="/category/marketing?sort=date"
          >
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>جدیدترین </font>
            </font>
          </a>
          <a
            className="home-category_tile_component__tileLink"
            title="پرفروش ترین قالب های بازاریابی"
            data-action="analytics-event#send"
            data-analytics-event='{"eventLabel":"marketing: bestsellers","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
            href="/category/marketing?sort=sales"
          >
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>پرفروش ها</font>
            </font>
          </a>
        </div>
        <a
          className="home-category_tile_component__tileArt"
          title="مشاهده الگوهای بازاریابی"
          data-action="analytics-event#send"
          data-analytics-event='{"eventLabel":"marketing: image","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
          href="/category/marketing"
        >
          <div className="home-category_tile_component__imageIconWrapper">
            <picture className="home-category_tile_component__imageWrapper">
              <source
                srcSet="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-marketing-d5d4374d3dc42264dad31afcf5663ebd5c9831b7826f77ac02bc41f6369a50cf.avif"
                type="image/avif"
              />
              <source
                srcSet="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-marketing-32c4d9bd58203fa035bb3fa95436ad6d42ec39545129d9e760cf7ca6fb7eb11f.webp"
                type="image/webp"
              />
              <img
                src="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-marketing-f496a6f8c6684f9becb4f9bcdad23734ae8801663f31b1d9048763ddb1dcddf4.png"
                alt="قالب های بازاریابی"
                loading="lazy"
                width={345}
                height={175}
                className="home-category_tile_component__tileImage"
              />
            </picture>
            <div className="home-category_tile_component__tileIcon">
              <img
                alt="قالب های بازاریابی"
                width={64}
                height={64}
                loading="lazy"
                src="https://assets.market-storefront.envato-static.com/storefront/assets/category-icons/themeforest/marketing-6da58cc5ee144983487963114930eb683157422436d12076b8c4a7f36df14d89.svg"
              />
            </div>
          </div>
        </a>
      </div>
      <div className="home-category_tile_component__root">
        <div className="home-category_tile_component__tileDetail">
          <h2>
            <a
              className="home-category_tile_component__tileTitle"
              title="مشاهده قالب های CMS"
              data-action="analytics-event#send"
              data-analytics-event='{"eventLabel":"cms-themes: link","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
              href="/category/cms-themes"
            >
              <font style={{ verticalAlign: "inherit" }}>
                <font style={{ verticalAlign: "inherit" }}>قالب های CMS</font>
              </font>
            </a>
          </h2>
          <p className="home-category_tile_component__tileSubtitle">
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>
                بیش از 1700 قالب وب سایت CMS
              </font>
            </font>
          </p>
          <a
            className="home-category_tile_component__tileLink"
            title="جدیدترین قالب های CMS"
            data-action="analytics-event#send"
            data-analytics-event='{"eventLabel":"cms-themes: newest","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
            href="/category/cms-themes?sort=date"
          >
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>جدیدترین </font>
            </font>
          </a>
          <a
            className="home-category_tile_component__tileLink"
            title="پرفروش ترین قالب های CMS"
            data-action="analytics-event#send"
            data-analytics-event='{"eventLabel":"cms-themes: bestsellers","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
            href="/category/cms-themes?sort=sales"
          >
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>پرفروش ها</font>
            </font>
          </a>
        </div>
        <a
          className="home-category_tile_component__tileArt"
          title="مشاهده قالب های CMS"
          data-action="analytics-event#send"
          data-analytics-event='{"eventLabel":"cms-themes: image","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
          href="/category/cms-themes"
        >
          <div className="home-category_tile_component__imageIconWrapper">
            <picture className="home-category_tile_component__imageWrapper">
              <source
                srcSet="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-cms-themes-e23d5363dd1bbc9caa746719fbcba1b706e40af2c3aa40b45abb46b497762833.avif"
                type="image/avif"
              />
              <source
                srcSet="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-cms-themes-9a3ba47a9279b75830ddec968dfcdd35a03c9ee4f32fff2a1e17a0a8a543d802.webp"
                type="image/webp"
              />
              <img
                src="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-cms-themes-35746d842196e741e0fadfdcb8cf32383392137c46da0cfe0413ca4620cbab2f.png"
                alt="قالب های CMS"
                loading="lazy"
                width={345}
                height={175}
                className="home-category_tile_component__tileImage"
              />
            </picture>
            <div className="home-category_tile_component__tileIcon">
              <img
                alt="قالب های CMS"
                width={64}
                height={64}
                loading="lazy"
                src="https://assets.market-storefront.envato-static.com/storefront/assets/category-icons/themeforest/cms-themes-8fd2d0354a939e03d55825ef92e579367d60c1c051a3fe588295cea21cfbedd8.svg"
              />
            </div>
          </div>
        </a>
      </div>
      <div className="home-category_tile_component__root">
        <div className="home-category_tile_component__tileDetail">
          <h2>
            <a
              className="home-category_tile_component__tileTitle"
              title="مشاهده وبلاگ نویسی"
              data-action="analytics-event#send"
              data-analytics-event='{"eventLabel":"blogging: link","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
              href="/category/blogging"
            >
              <font style={{ verticalAlign: "inherit" }}>
                <font style={{ verticalAlign: "inherit" }}>وبلاگ نویسی</font>
              </font>
            </a>
          </h2>
          <p className="home-category_tile_component__tileSubtitle">
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>
                قالب ها و تم های بلاگر
              </font>
            </font>
          </p>
          <a
            className="home-category_tile_component__tileLink"
            title="جدیدترین وبلاگ نویسی"
            data-action="analytics-event#send"
            data-analytics-event='{"eventLabel":"blogging: newest","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
            href="/category/blogging?sort=date"
          >
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>جدیدترین </font>
            </font>
          </a>
          <a
            className="home-category_tile_component__tileLink"
            title="پرفروش ترین وبلاگ نویسی"
            data-action="analytics-event#send"
            data-analytics-event='{"eventLabel":"blogging: bestsellers","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
            href="/category/blogging?sort=sales"
          >
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>پرفروش ها</font>
            </font>
          </a>
        </div>
        <a
          className="home-category_tile_component__tileArt"
          title="مشاهده وبلاگ نویسی"
          data-action="analytics-event#send"
          data-analytics-event='{"eventLabel":"blogging: image","eventAction":"click;link","hitType":"event","eventCategory":"Block interaction;Category"}'
          href="/category/blogging"
        >
          <div className="home-category_tile_component__imageIconWrapper">
            <picture className="home-category_tile_component__imageWrapper">
              <source
                srcSet="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-blogging-5618700ca9a234347b66ac44d361a5f05dc0dde5731e82126e4c8a3c93c876e6.avif"
                type="image/avif"
              />
              <source
                srcSet="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-blogging-ce769371cbd33cf57025c513f433153ef29f38bbda53668944be362a707cdae5.webp"
                type="image/webp"
              />
              <img
                src="https://assets.market-storefront.envato-static.com/storefront/assets/home/themeforest/category-tiles-blogging-7b37c1a9941589af94f8d4225c9fbad018a541c60338704506b00d7005b159bc.png"
                alt="وبلاگ نویسی"
                loading="lazy"
                width={345}
                height={175}
                className="home-category_tile_component__tileImage"
              />
            </picture>
            <div className="home-category_tile_component__tileIcon">
              <img
                alt="وبلاگ نویسی"
                width={64}
                height={64}
                loading="lazy"
                src="https://assets.market-storefront.envato-static.com/storefront/assets/category-icons/themeforest/blogging-a66e0853408aee82becbeb35f98f8edc35dee1a9475682b7fbc7428ff547400d.svg"
              />
            </div>
          </div>
        </a>
      </div>
    </div>
    <div className="home-category_tiles_block_component__cta">
      <a
        rel=""
        className="shared-cta_button_component__root shared-cta_button_component__large"
        data-action="analytics-event#send"
        data-analytics-event='{"hitType":"event","eventCategory":"Block interaction;Category Tiles","eventAction":"click;button","eventLabel":"View all categories"}'
        href="/category/all"
      >
        <font style={{ verticalAlign: "inherit" }}>
          <font style={{ verticalAlign: "inherit" }}>مشاهده همه دسته ها</font>
        </font>
      </a>
    </div>
  </div>
</section>



<section className="home-quality_items_block_component__root">
  <header className="home-quality_items_block_component__mobileHeader">
    <h2 className="home-quality_items_block_component__title">
      <font style={{ verticalAlign: "inherit" }}>
        <font style={{ verticalAlign: "inherit" }}>
          تم ها و قالب های منحصر به فرد برای هر بودجه و هر پروژه.
        </font>
      </font>
    </h2>
  </header>
  <div className="home-quality_items_block_component__slide">
    <div className="home-quality_items_block_component__slideInner">
      <div
        data-controller="analytics-item-impressions"
        className="home-quality_items_block_component__itemsGrid"
      >
        <div
          className="home-minimal_cards-image_card_component__root"
          data-analytics-item-impressions-target="item"
          data-item-id={24276567}
          data-impression-position={1}
          data-impression-name="Avone - Multipurpose Shopify Theme OS 2.0"
          data-impression-list="Homepage: Unique themes and templates for every budget and every project."
          data-impression-brand="adornthemes"
          data-impression-category="themeforest.net/ecommerce/shopify/fashion"
        >
          <a
            href="https://themeforest.net/item/avone-multipurpose-shopify-theme/24276567"
            data-turbo="false"
            data-action="analytics-event#send"
            data-analytics-event='{"hitType":"event","eventCategory":"Block interaction;Quality Items","eventAction":"click;link","eventLabel":24276567,"eventValue":0}'
          >
            <div className="shared-item_preview_component__root">
              <img
                loading="lazy"
                src="https://themeforest.img.customer.envatousercontent.com/files/455346084/Preview.png?auto=compress%2Cformat&fit=crop&crop=top&w=590&h=300&s=003afb9de3d5708a7ebbd7a81c28a2d5"
                alt="Avone - چند منظوره Shopify Theme OS 2.0"
                className="shared-item_preview_component__image"
                title="Avone - چند منظوره Shopify Theme OS 2.0"
              />
            </div>
          </a>
          <div className="home-minimal_cards-image_card_component__info">
            <div className="home-minimal_cards-info_component__root">
              <div className="home-minimal_cards-info_component__linkArea">
                <a
                  className="home-minimal_cards-info_component__itemLink home-minimal_cards-info_component__link"
                  data-turbo="false"
                  data-action="analytics-event#send"
                  data-analytics-event='{"hitType":"event","eventCategory":"Block interaction;Quality Items","eventAction":"click;link","eventLabel":24276567,"eventValue":0}'
                  href="https://themeforest.net/item/avone-multipurpose-shopify-theme/24276567"
                >
                  <font style={{ verticalAlign: "inherit" }}>
                    <font style={{ verticalAlign: "inherit" }}>
                      Avone - چند منظوره Shopify Theme OS 2.0
                    </font>
                  </font>
                </a>
              </div>
              <div className="home-minimal_cards-info_component__author">
                <font style={{ verticalAlign: "inherit" }}>
                  <font style={{ verticalAlign: "inherit" }}>توسط </font>
                </font>
                <a
                  className="home-minimal_cards-info_component__authorLink home-minimal_cards-info_component__link"
                  data-turbo="false"
                  data-action="analytics-event#send"
                  data-analytics-event='{"hitType":"event","eventCategory":"Block interaction;Quality Items","eventAction":"click;link","eventLabel":24276567,"eventValue":0}'
                  href="https://themeforest.net/user/adornthemes"
                >
                  <font style={{ verticalAlign: "inherit" }}>
                    <font style={{ verticalAlign: "inherit" }}>تزئینات</font>
                  </font>
                </a>
              </div>
              <div className="home-minimal_cards-info_component__rating">
                <div className="shared-stars_rating_component__root">
                  <div
                    className="shared-stars_rating_component__starRating"
                    role="img"
                    aria-label="امتیاز 5.0 از 5، 476 نظر"
                  >
                    <span className="shared-stars_rating_component__star">
                      <svg width="100%" height="100%">
                        <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#stars_5.0" />
                      </svg>
                    </span>
                  </div>
                  <span
                    aria-hidden="true"
                    className="shared-stars_rating_component__starRatingCount"
                  >
                    <font style={{ verticalAlign: "inherit" }}>
                      <font style={{ verticalAlign: "inherit" }}>(476)</font>
                    </font>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          className="home-minimal_cards-image_card_component__root"
          data-analytics-item-impressions-target="item"
          data-item-id={19281265}
          data-impression-position={2}
          data-impression-name="Discy - Social Questions and Answers WordPress Theme"
          data-impression-list="Homepage: Unique themes and templates for every budget and every project."
          data-impression-brand="2codeThemes"
          data-impression-category="themeforest.net/wordpress/miscellaneous"
        >
          <a
            href="https://themeforest.net/item/discy-social-questions-and-answers-wordpress-theme/19281265"
            data-turbo="false"
            data-action="analytics-event#send"
            data-analytics-event='{"hitType":"event","eventCategory":"Block interaction;Quality Items","eventAction":"click;link","eventLabel":19281265,"eventValue":1}'
          >
            <div className="shared-item_preview_component__root">
              <img
                loading="lazy"
                src="https://themeforest.img.customer.envatousercontent.com/files/479869732/01_preview.png?auto=compress%2Cformat&fit=crop&crop=top&w=590&h=300&s=ea07576716c18a464beaa88e448e9cfd"
                alt="Discy - سوالات و پاسخ های اجتماعی قالب وردپرس"
                className="shared-item_preview_component__image"
                title="Discy - سوالات و پاسخ های اجتماعی قالب وردپرس"
              />
            </div>
          </a>
          <div className="home-minimal_cards-image_card_component__info">
            <div className="home-minimal_cards-info_component__root">
              <div className="home-minimal_cards-info_component__linkArea">
                <a
                  className="home-minimal_cards-info_component__itemLink home-minimal_cards-info_component__link"
                  data-turbo="false"
                  data-action="analytics-event#send"
                  data-analytics-event='{"hitType":"event","eventCategory":"Block interaction;Quality Items","eventAction":"click;link","eventLabel":19281265,"eventValue":1}'
                  href="https://themeforest.net/item/discy-social-questions-and-answers-wordpress-theme/19281265"
                >
                  <font style={{ verticalAlign: "inherit" }}>
                    <font style={{ verticalAlign: "inherit" }}>
                      Discy - سوالات و پاسخ های اجتماعی قالب وردپرس
                    </font>
                  </font>
                </a>
              </div>
              <div className="home-minimal_cards-info_component__author">
                <font style={{ verticalAlign: "inherit" }}>
                  <font style={{ verticalAlign: "inherit" }}>توسط </font>
                </font>
                <a
                  className="home-minimal_cards-info_component__authorLink home-minimal_cards-info_component__link"
                  data-turbo="false"
                  data-action="analytics-event#send"
                  data-analytics-event='{"hitType":"event","eventCategory":"Block interaction;Quality Items","eventAction":"click;link","eventLabel":19281265,"eventValue":1}'
                  href="https://themeforest.net/user/2codethemes"
                >
                  <font style={{ verticalAlign: "inherit" }}>
                    <font style={{ verticalAlign: "inherit" }}>
                      2codeThemes
                    </font>
                  </font>
                </a>
              </div>
              <div className="home-minimal_cards-info_component__rating">
                <div className="shared-stars_rating_component__root">
                  <div
                    className="shared-stars_rating_component__starRating"
                    role="img"
                    aria-label="امتیاز 5.0 از 5، 421 نظر"
                  >
                    <span className="shared-stars_rating_component__star">
                      <svg width="100%" height="100%">
                        <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#stars_5.0" />
                      </svg>
                    </span>
                  </div>
                  <span
                    aria-hidden="true"
                    className="shared-stars_rating_component__starRatingCount"
                  >
                    <font style={{ verticalAlign: "inherit" }}>
                      <font style={{ verticalAlign: "inherit" }}>(421)</font>
                    </font>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          className="home-minimal_cards-image_card_component__root"
          data-analytics-item-impressions-target="item"
          data-item-id={31941062}
          data-impression-position={3}
          data-impression-name="Restly - IT Solutions & Technology WordPress Theme"
          data-impression-list="Homepage: Unique themes and templates for every budget and every project."
          data-impression-brand="themepul"
          data-impression-category="themeforest.net/wordpress/technology"
        >
          <a
            href="https://themeforest.net/item/restly-it-solutions-technology-wordpress-theme/31941062"
            data-turbo="false"
            data-action="analytics-event#send"
            data-analytics-event='{"hitType":"event","eventCategory":"Block interaction;Quality Items","eventAction":"click;link","eventLabel":31941062,"eventValue":2}'
          >
            <div className="shared-item_preview_component__root">
              <img
                loading="lazy"
                src="https://themeforest.img.customer.envatousercontent.com/files/469082136/theme+preview/Preview-01.jpg?auto=compress%2Cformat&fit=crop&crop=top&w=590&h=300&s=f7a5d5d71230d0c87f21a01c09eda893"
                alt="Restly - IT Solutions & Technology قالب وردپرس"
                className="shared-item_preview_component__image"
                title="Restly - IT Solutions & Technology قالب وردپرس"
              />
            </div>
          </a>
          <div className="home-minimal_cards-image_card_component__info">
            <div className="home-minimal_cards-info_component__root">
              <div className="home-minimal_cards-info_component__linkArea">
                <a
                  className="home-minimal_cards-info_component__itemLink home-minimal_cards-info_component__link"
                  data-turbo="false"
                  data-action="analytics-event#send"
                  data-analytics-event='{"hitType":"event","eventCategory":"Block interaction;Quality Items","eventAction":"click;link","eventLabel":31941062,"eventValue":2}'
                  href="https://themeforest.net/item/restly-it-solutions-technology-wordpress-theme/31941062"
                >
                  <font style={{ verticalAlign: "inherit" }}>
                    <font style={{ verticalAlign: "inherit" }}>
                      Restly - IT Solutions &amp; Technology قالب وردپرس
                    </font>
                  </font>
                </a>
              </div>
              <div className="home-minimal_cards-info_component__author">
                <font style={{ verticalAlign: "inherit" }}>
                  <font style={{ verticalAlign: "inherit" }}>توسط </font>
                </font>
                <a
                  className="home-minimal_cards-info_component__authorLink home-minimal_cards-info_component__link"
                  data-turbo="false"
                  data-action="analytics-event#send"
                  data-analytics-event='{"hitType":"event","eventCategory":"Block interaction;Quality Items","eventAction":"click;link","eventLabel":31941062,"eventValue":2}'
                  href="https://themeforest.net/user/themepul"
                >
                  <font style={{ verticalAlign: "inherit" }}>
                    <font style={{ verticalAlign: "inherit" }}>themepul</font>
                  </font>
                </a>
              </div>
              <div className="home-minimal_cards-info_component__rating">
                <div className="shared-stars_rating_component__root">
                  <div
                    className="shared-stars_rating_component__starRating"
                    role="img"
                    aria-label="امتیاز 5.0 از 5، 282 نظر"
                  >
                    <span className="shared-stars_rating_component__star">
                      <svg width="100%" height="100%">
                        <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#stars_5.0" />
                      </svg>
                    </span>
                  </div>
                  <span
                    aria-hidden="true"
                    className="shared-stars_rating_component__starRatingCount"
                  >
                    <font style={{ verticalAlign: "inherit" }}>
                      <font style={{ verticalAlign: "inherit" }}>(282)</font>
                    </font>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          className="home-minimal_cards-image_card_component__root"
          data-analytics-item-impressions-target="item"
          data-item-id={22629398}
          data-impression-position={4}
          data-impression-name="Elessi 3 - Responsive Shopify Theme"
          data-impression-list="Homepage: Unique themes and templates for every budget and every project."
          data-impression-brand="The4"
          data-impression-category="themeforest.net/ecommerce/shopify/fashion"
        >
          <a
            href="https://themeforest.net/item/elessi-responsive-shopify-theme/22629398"
            data-turbo="false"
            data-action="analytics-event#send"
            data-analytics-event='{"hitType":"event","eventCategory":"Block interaction;Quality Items","eventAction":"click;link","eventLabel":22629398,"eventValue":3}'
          >
            <div className="shared-item_preview_component__root">
              <img
                loading="lazy"
                src="https://themeforest.img.customer.envatousercontent.com/files/397577009/Elessi-3.0.jpg?auto=compress%2Cformat&fit=crop&crop=top&w=590&h=300&s=31ecf36265161ec6957cfff58bdc6496"
                alt="Elessi 3 - تم Shopify پاسخگو"
                className="shared-item_preview_component__image"
                title="Elessi 3 - تم Shopify پاسخگو"
              />
            </div>
          </a>
          <div className="home-minimal_cards-image_card_component__info">
            <div className="home-minimal_cards-info_component__root">
              <div className="home-minimal_cards-info_component__linkArea">
                <a
                  className="home-minimal_cards-info_component__itemLink home-minimal_cards-info_component__link"
                  data-turbo="false"
                  data-action="analytics-event#send"
                  data-analytics-event='{"hitType":"event","eventCategory":"Block interaction;Quality Items","eventAction":"click;link","eventLabel":22629398,"eventValue":3}'
                  href="https://themeforest.net/item/elessi-responsive-shopify-theme/22629398"
                >
                  <font style={{ verticalAlign: "inherit" }}>
                    <font style={{ verticalAlign: "inherit" }}>
                      Elessi 3 - تم Shopify پاسخگو
                    </font>
                  </font>
                </a>
              </div>
              <div className="home-minimal_cards-info_component__author">
                <font style={{ verticalAlign: "inherit" }}>
                  <font style={{ verticalAlign: "inherit" }}>توسط </font>
                </font>
                <a
                  className="home-minimal_cards-info_component__authorLink home-minimal_cards-info_component__link"
                  data-turbo="false"
                  data-action="analytics-event#send"
                  data-analytics-event='{"hitType":"event","eventCategory":"Block interaction;Quality Items","eventAction":"click;link","eventLabel":22629398,"eventValue":3}'
                  href="https://themeforest.net/user/the4"
                >
                  <font style={{ verticalAlign: "inherit" }}>
                    <font style={{ verticalAlign: "inherit" }}>The4</font>
                  </font>
                </a>
              </div>
              <div className="home-minimal_cards-info_component__rating">
                <div className="shared-stars_rating_component__root">
                  <div
                    className="shared-stars_rating_component__starRating"
                    role="img"
                    aria-label="امتیاز 5.0 از 5، 206 نظر"
                  >
                    <span className="shared-stars_rating_component__star">
                      <svg width="100%" height="100%">
                        <use xlinkHref="/storefront/assets/icon_spritesheet-f6681e837aa64f7d66888c6082f81eaf79ab4d26ac5dfb502549ed602e1d1f5e.svg#stars_5.0" />
                      </svg>
                    </span>
                  </div>
                  <span
                    aria-hidden="true"
                    className="shared-stars_rating_component__starRatingCount"
                  >
                    <font style={{ verticalAlign: "inherit" }}>
                      <font style={{ verticalAlign: "inherit" }}>(206)</font>
                    </font>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div className="home-quality_items_block_component__textContent">
    <header className="home-quality_items_block_component__desktopHeader">
      <h2 className="home-quality_items_block_component__title">
        <font style={{ verticalAlign: "inherit" }}>
          <font style={{ verticalAlign: "inherit" }}>
            تم ها و قالب های منحصر به فرد برای هر بودجه و هر پروژه.
          </font>
        </font>
      </h2>
    </header>
    <footer className="home-quality_items_block_component__footer">
      <a
        rel=""
        className="shared-cta_button_component__root shared-cta_button_component__large"
        data-action="analytics-event#send"
        data-analytics-event='{"hitType":"event","eventCategory":"Block interaction;Quality Items","eventAction":"click;link","eventLabel":"View all themes"}'
        href="/search?sort=rating"
      >
        <font style={{ verticalAlign: "inherit" }}>
          <font style={{ verticalAlign: "inherit" }}>مشاهده تمام تم ها</font>
        </font>
      </a>
    </footer>
  </div>
</section>


      </>
    );
}


