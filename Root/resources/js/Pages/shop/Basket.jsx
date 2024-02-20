import {BasketRow} from './components';
export default function  Basket({products,signedUrl}){
    let total=0;
    return (
        <div className="">
  <div className="sso-checkout-container js-sso-checkout-experiment">
    <section
      data-analytics-page-id="shopping cart page"
      data-view="cartPage"
      className="page-section js-adi-data-wrapper adi-variant-2"
    >
      <div className="grid-container">
        <section className="layout -sidebar-right">
          <div className="layout__main-content">
            <div className="cart-header">
              <span className="cart-header__left">
                <a
                  className="btn js-cart__continue-shopping"
                  data-google-analytics-placement="top"
                  data-position="top"
                  href="/shop"
                >
                  <font >
                    <font >
                      به خرید ادامه دهید
                    </font>
                  </font>
                </a>
              </span>
              <span className="cart-header__summary  is-hidden-desktop">
                You have 1 item in your cart
              </span>
              <form
                className="cart-header__right"
                action="/cart/clear"
                acceptCharset="UTF-8"
                method="post"
              >
                <input
                  type="hidden"
                  name="authenticity_token"
                  defaultValue="4J1R-A3N2nqbLJPRgGyCqJJOdaoyAU4TW72Gb1WP0acn4o_zIrEXT67Rh-P9n5qBMbGrHnuiPcbcqevpUTH6yQ"
                  autoComplete="off"
                />
             
                <a   className="js-cart__empty e-btn -color-dark" href='http://127.0.0.1:8000/basketforget'>خالی کردن سبد خرید</a>
               
              </form>
            </div>
            <div className="shopping-cart" id="shopping-cart">
              <div className="shopping-cart__group">
                <article className="shopping-cart__entry">
                 
                    {console.log(products)}
                    {products?.map(
                        function(product) {
                            total += product.price;
                           return(
                               <BasketRow product={product}></BasketRow>
                           )}
                    )}


                  <form
                    data-view="cartSupportUpgrade"
                    data-entry-id={71402733}
                    data-path="/cart/71402733"
                    data-google-analytics-payload='{"actionData":null,"productsArray":[{"id":48947458,"name":"InFo | Personal Portfolio Resume Template","variant":"regular","category":"themeforest.net/category/site-templates/personal/virtual-business-card","brand":"crowdyflow","price":"16.00","quantity":"1","dimension14":"bundle_6month"}],"timestamp":1703049320}'
                    action="/cart/71402733"
                    acceptCharset="UTF-8"
                    method="post"
                  >
                    <input
                      type="hidden"
                      name="_method"
                      defaultValue="put"
                      autoComplete="off"
                    />
                    <input
                      type="hidden"
                      name="authenticity_token"
                      defaultValue="4J1R-A3N2nqbLJPRgGyCqJJOdaoyAU4TW72Gb1WP0acn4o_zIrEXT67Rh-P9n5qBMbGrHnuiPcbcqevpUTH6yQ"
                      autoComplete="off"
                    />
                   
                  </form>{" "}
                  <div className="item-upgrade__error">
                    Something went wrong with your request, please try again.
                  </div>
                </article>
              </div>
            </div>
            <footer className="cart-footer is-hidden-desktop">
              <div className="cart-footer__subtotal">
                <span className="t-heading -size-s -weight-normal">Total:</span>
                <span className="t-heading -size-l">
                  US$ <span className="js-item-upgrade__cart-total">32</span>
                </span>
              </div>
              <div className="cart-footer__controls">
                <span className="cart-footer__continue">
                  <a
                    className="btn js-cart__continue-shopping"
                    data-google-analytics-placement="bottom"
                    data-position="bottom"
                    href="//themeforest.net/category/site-templates/personal/virtual-business-card"
                  >
                    Continue Shopping
                  </a>
                </span>
                <span className="cart-footer__checkout">
                  <form
                    className="js-cart__checkout"
                    data-google-analytics-payload='{"actionData":null,"productsArray":[{"id":48947458,"name":"InFo | Personal Portfolio Resume Template","variant":"regular","category":"themeforest.net/category/site-templates/personal/virtual-business-card","brand":"crowdyflow","price":"16.00","quantity":"1","dimension14":"bundle_6month"},{"id":48947458,"name":"InFo | Personal Portfolio Resume Template","variant":"regular","category":"themeforest.net/category/site-templates/personal/virtual-business-card","brand":"crowdyflow","price":"16.00","quantity":"1","dimension14":"bundle_6month"}],"timestamp":1703049320}'
                    method="post"
                    action="/checkout/from_cart/2749520554"
                  >
                    <input
                      className="e-btn--3d -color-primary -width-full"
                      data-disable-with="Processing..."
                      data-google-analytics-placement="bottom"
                      type="submit"
                      defaultValue="Secure Checkout"
                    />
                    <input
                      type="hidden"
                      name="authenticity_token"
                      defaultValue="4J1R-A3N2nqbLJPRgGyCqJJOdaoyAU4TW72Gb1WP0acn4o_zIrEXT67Rh-P9n5qBMbGrHnuiPcbcqevpUTH6yQ"
                      autoComplete="off"
                    />
                  </form>
                </span>
              </div>
              <div className="is-hidden-tablet-and-above t-body -size-s h-mt3 h-mb0 h-text-align-center">
                Price displayed excludes any applicable
                <a
                  href="javascript:void(0)"
                  data-view="modalInline"
                  data-html=".handling-fee__information-modal"
                  data-redirect-conditions="{}"
                  data-hide-close-button="true"
                >
                  taxes and a handling fee.
                </a>
                <div
                  className="handling-fee__information-modal e-modal"
                  data-view="modalInternalControls"
                  data-google-analytics-event-type="handlingFee"
                  data-google-analytics-placement="CartTotal"
                >
                  <header className="e-modal__header">Fee</header>
                  <div className="e-modal__section">
                    <div className="taxes__information h-mb1">
                      Taxes will be calculated depending on location.
                    </div>
                    <table className="table-general -striped -light -bordered h-m0">
                      <caption className="h-mb1">
                        A handling fee is calculated per order (not per item).
                      </caption>
                      <thead>
                        <tr>
                          <th>Your Order</th>
                          <th>Handling Fee</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Less than $10</td>
                          <td>$1</td>
                        </tr>
                        <tr>
                          <td>$10 - $150</td>
                          <td>$3</td>
                        </tr>
                        <tr>
                          <td>Above $150</td>
                          <td>Free</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <footer className="e-modal__footer">
                    <div className="e-modal__footer-cta -align-right">
                      <a
                        className="js-modal-close google-analytics-event e-btn--3d -color-primary -size-s"
                        title="Close (Esc)"
                        href="#"
                        data-google-analytics-event-label="Got it"
                      >
                        Got it
                      </a>
                    </div>
                  </footer>
                  <button
                    title="Close (Esc)"
                    type="button"
                    className="mfp-close google-analytics-event"
                    data-google-analytics-event-label="X button"
                  >
                    ×
                  </button>
                </div>
              </div>
            </footer>
          </div>
          <aside className="layout__sidebar">
            <div className="box -radius-all is-hidden-tablet-and-below">
              <div className="shopping-cart__checkout-primary">
                <h3 className="t-heading -size-s -weight-normal">
                  <font >
                    <font >
                      مجموع سبد خرید شما
                    </font>
                  </font>
                </h3>
                <h4 className="t-heading -size-xl h-mb2">
                  <font >
                    <span className="js-item-upgrade__cart-total">
                      <font >{total}</font>
                    </span>
                    <font >
                      تومان
                    </font>
                  </font>
                  <span className="js-item-upgrade__cart-total">
                    <font  />
                  </span>
                </h4>
                <form
                  className="js-cart__checkout"
                  data-google-analytics-payload='{"actionData":null,"productsArray":[{"id":48947458,"name":"InFo | Personal Portfolio Resume Template","variant":"regular","category":"themeforest.net/category/site-templates/personal/virtual-business-card","brand":"crowdyflow","price":"16.00","quantity":"1","dimension14":"bundle_6month"},{"id":48947458,"name":"InFo | Personal Portfolio Resume Template","variant":"regular","category":"themeforest.net/category/site-templates/personal/virtual-business-card","brand":"crowdyflow","price":"16.00","quantity":"1","dimension14":"bundle_6month"}],"timestamp":1703049320}'
                  method="post"
                  action="/checkout/from_cart/2749520554"
                >
                  <font >
                    <font >
                      <a href={signedUrl}   className="e-btn--3d -color-primary -width-full -size-l">
                      رفتن به درگاه پرداخت

                      </a>
                   
                    </font>
                  </font>
                  <input
                    type="hidden"
                    name="authenticity_token"
                    defaultValue="4J1R-A3N2nqbLJPRgGyCqJJOdaoyAU4TW72Gb1WP0acn4o_zIrEXT67Rh-P9n5qBMbGrHnuiPcbcqevpUTH6yQ"
                    autoComplete="off"
                  />
                </form>
                <div className="h-mt1">
                  <small className="t-body -size-s h-m0">
                    <font >
                      <font >
                        قیمت نمایش داده شده شامل هرگونه
                      </font>
                    </font>
                    <a
                      href="javascript:void(0)"
                      data-view="flyout"
                      data-google-analytics-event-type="handlingFee"
                      data-google-analytics-placement="CartTotal"
                    >
                      <font >
                        <font >
                          مالیات قابل اجرا و هزینه رسیدگی نمی شود.
                        </font>
                      </font>
                      <div className="js-flyout__body flyout__body">
                        <span className="flyout__triangle" />
                        <div className="taxes__information h-mb1">
                          <font >
                            <font >
                              مالیات بسته به محل محاسبه خواهد شد.
                            </font>
                          </font>
                        </div>
                        <div className="handling-fee__information">
                          <table className="table-general -striped -light -bordered h-m0">
                            <caption className="h-mb1">
                              <font >
                                <font >
                                  هزینه جابجایی به ازای هر سفارش (نه برای هر
                                  مورد) محاسبه می شود.
                                </font>
                              </font>
                            </caption>
                            <thead>
                              <tr>
                                <th>
                                  <font >
                                    <font >
                                      سفارش شما
                                    </font>
                                  </font>
                                </th>
                                <th>
                                  <font >
                                    <font >
                                      کارمزد
                                    </font>
                                  </font>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <font >
                                    <font >
                                      کمتر از 10 دلار
                                    </font>
                                  </font>
                                </td>
                                <td>
                                  <font >
                                    <font >
                                      1 دلار
                                    </font>
                                  </font>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <font >
                                    <font >
                                      10 تا 150 دلار
                                    </font>
                                  </font>
                                </td>
                                <td>
                                  <font >
                                    <font >
                                      3 دلار
                                    </font>
                                  </font>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <font >
                                    <font >
                                      بالای 150 دلار
                                    </font>
                                  </font>
                                </td>
                                <td>
                                  <font >
                                    <font >
                                      رایگان
                                    </font>
                                  </font>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </a>
                  </small>
                </div>
              </div>
            </div>
            <div className="h-text-align-center">
              <span className="secure-checkout-banner__body -size-m">
                <i className="e-icon -icon-lock" />
                <font >
                  <font >
                    تسویه حساب ایمن
                  </font>
                </font>
              </span>
            </div>
          </aside>
        </section>
      </div>
    </section>
  </div>
</div>

    )
}
  