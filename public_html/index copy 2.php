<link rel="stylesheet" media="all" href="https://public-assets.envato-static.com/assets/market/core/index-00ad47df0491a88d8ee7580820c200b2d57bca4af355868798a4d283578ac8f6.css" />
<link rel="stylesheet" media="all" href="https://public-assets.envato-static.com/assets/market/pages/buying/index-41c20a3d0cd3750879a64cd301e3107e9790b42332041cd5ad5f29cfa0440c73.css" />
<link rel="stylesheet" href="/style/main.css" media="all" data-turbo-track="reload" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../Root/storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../Root/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../Root/bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
?>
  <!-- <script>
//<![CDATA[
    window.datadogEnvironment = 'production'
    window.datadogSampleRate = 2
    window.datadogVersion = '6f9c76cf18d94d6d7f7d2e94e2dde97c6ac93e02'

//]]>
</script>
  <script src="https://assets.market-storefront.envato-static.com/storefront/assets/datadog-e934a4de5684e1bf38e7f5dda9fe23b24ed4bd7d553fa965221b1fc0dd9bf145.js" crossorigin="anonymous"></script>
  <script type="text/javascript" data-turbo-eval="false">
  window.addEventListener("CookiebotOnDialogDisplay", (event) => {
    const cookieDialog = event.srcElement.CookieConsentDialog.DOM
    cookieDialog.dataset.turbo = false

    const observer = new MutationObserver((mutations) => {
      mutations.forEach(() => {
        if (!cookieDialog.style.transform.match(cookieDialog.style.top)) {
          cookieDialog.style.setProperty("transform", `translateY(${cookieDialog.style.top})`)
          cookieDialog.style.setProperty("opacity", "1", "important")
        }
      })
    })

    observer.observe(cookieDialog, { attributes: true, attributeFilter: ["style"] })
  })
</script>
<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="58b7468f-7dba-4036-baad-925e721641e5" type="text/javascript" defer="true"></script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "name": "ThemeForest",
  "url": "https://themeforest.net"
}
</script>
<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "ThemeForest",
    "url": "https://themeforest.net",
    "sameAs": [
      "https://www.facebook.com/envato",
      "https://twitter.com/envato",
      "https://www.youtube.com/user/Envato/",
      "https://www.instagram.com/envato/",
      "https://www.pinterest.com/envato/"
    ],
    "logo": "https://assets.market-storefront.envato-static.com/storefront/assets/logos/envato-market-black-06774bb701d51345b2a508555ca3a0ce796eb0e9e3c01c6f7ab5425a80e4ac9f.svg"
  }
</script>

  <script>
//<![CDATA[
  var rollbarClientToken = "0924cd7a408b49498096b5c1ade65966"
  var rollbarEnvironment = "production"

//]]>
</script>


  <script src="https://assets.market-storefront.envato-static.com/storefront/assets/rollbar-3c7a82d8fe30ae3149d62b878f0a05e525d27b4cc1807c94686f54afdfa0072b.js" crossorigin="anonymous" data-turbo-track="reload" defer="defer"></script>
  <script src="https://assets.market-storefront.envato-static.com/storefront/assets/legacy-c78019dde98fee5c3919b045272801da37c2511ae4094013d59761fed3a2bf64.js" crossorigin="anonymous" data-turbo-track="reload" nomodule="nomodule"></script>
  <script src="https://assets.market-storefront.envato-static.com/storefront/assets/application-cb339702c4aea9c3d7da6756cd87ca060bbc3e74d9af8e93fa8fac9eadac2bbd.js" crossorigin="anonymous" data-turbo-track="reload" defer="defer"></script>
  <script>
//<![CDATA[
  (function() {
    function normalizeAttributeValue(value) {
      if (value === undefined) return undefined
      if (value === null) return undefined

      let normalizedValue

      if (Array.isArray(value)) {
        normalizedValue = normalizedValue || value
          .map(normalizeAttributeValue)
          .filter(Boolean)
          .join(', ')
      }

      normalizedValue = normalizedValue || value
        .toString()
        .toLowerCase()
        .trim()
        .replace(/&amp;/g, '&')
        .replace(/&#39;/g, "'")
        .replace(/\s+/g, ' ')

      if (normalizedValue === '') return undefined
      return normalizedValue
    }

    function parseSignedInUserIdsFromCookie() {
      if (!document.cookie) return { envatoId: undefined, marketId: undefined };

      var prefix = "statistics_info=";
      var cookie = document.cookie.split('; ').find(function(part) {
        return part.startsWith(prefix);
      })

      if (cookie === undefined) return { envatoId: undefined, marketId: undefined };

      var ids = decodeURIComponent(cookie.substring(prefix.length)).split(":");

      return { envatoId: ids[0], marketId: ids[1] };
    }

    if (document.documentElement.hasAttribute('data-turbo-preview')) return

    window.dataLayer = window.dataLayer || [];

    var gaParam = (new URL(window.location)).searchParams.get("_ga")
    var signedInUserIds = parseSignedInUserIdsFromCookie();
    var pageAttributes = {
      app_name: normalizeAttributeValue('market-storefront'),
      app_env: normalizeAttributeValue('production'),
      app_version: normalizeAttributeValue('6f9c76cf18d94d6d7f7d2e94e2dde97c6ac93e02'),
      page_type: normalizeAttributeValue('item catalogue'),
      ga_param: normalizeAttributeValue(gaParam ? '_ga='+gaParam : undefined),
      event_attributes: null,
      user_attributes: {
        user_id: normalizeAttributeValue(signedInUserIds.envatoId),
        market_user_id: normalizeAttributeValue(signedInUserIds.marketId),
      }
    };
    dataLayer.push(pageAttributes)

    dataLayer.push({
      event: 'analytics_ready',
      event_attributes: {
        event_type: 'user',
        custom_timestamp: Date.now()
      }
    })
  })();

//]]>
</script> -->
<script src="/js/jquery.js"></script>
    <SCRIPT src='/js/basket.js'></SCRIPT>
