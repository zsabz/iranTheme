export  function  BasketRow({product}){
    return (
        <div className="shopping-cart__group">
        <article className="shopping-cart__entry">
          <div
            data-analytics-section-id="grouped entry section"
            data-view="groupedEntry"
            data-props='{"entryId":"71561303"}'
            className="item-result"
            id="item-result-71561303"
          >
            <div>
              <div className=" cart-entry__remove-quantity-selectorr">
                <form
                  action={"/basket/remove/"+product.id}
                  acceptCharset="UTF-8"
                  method="post"
                >
                 
                  <button
                    name="button"
                    type="submit"
                    className="js-cart__remove-entry btn-link"  
                  >
                    <span>
                      <font style={{ verticalAlign: "inherit" }}>
                        <font style={{ verticalAlign: "inherit" }}>حذف</font>
                      </font>
                    </span>
                    <i className="e-icon -icon-cancel -margin-left" />
                  </button>
                </form>{" "}
              </div>
            </div>
            <div className="item-result__thumbnail">
              <a href="https://themeforest.net/item/geekfolio-creative-agency-portfolio-template/45360728">
                <img
                  width={80}
                  height={80}
                  alt="Geekfolio - آژانس خلاق و الگوی نمونه کارها"
                  src={`/img/products/mainimg/${product.img}`}
                />
              </a>
            </div>
            <div className="item-result__details">
              <div className="cart-entry">
                <div className="cart-entry__title">
                  <h5 className="t-body -weight-bold h-m0">
                    <a href="https://themeforest.net/item/geekfolio-creative-agency-portfolio-template/45360728">
                      <font style={{ verticalAlign: "inherit" }}>
                        <font style={{ verticalAlign: "inherit" }}>
                          {product.title}
                        </font>
                      </font>
                    </a>
                  </h5>
                </div>
              
                <div className="cart-entry__information">
                  <div className="cart-entry__license">
                    <p className="t-body -size-s h-m0">
                      <strong>
                        <font style={{ verticalAlign: "inherit" }}>
                          <font style={{ verticalAlign: "inherit" }}>مجوز: </font>
                        </font>
                      </strong>
                      <font style={{ verticalAlign: "inherit" }}>
                        <a
                          title="Change license"
                          className="t-link"
                          data-view="modalAjax"
                          href="/cart/edit/71561303?on_cart_page=true"
                        >
                          <span className="cart_entry__information-detail">
                            <font style={{ verticalAlign: "inherit" }}>
                              مجوز معمولی
                            </font>
                          </span>
                        </a>
                      </font>
                      <a
                        title="تغییر مجوز"
                        className="t-link"
                        data-view="modalAjax"
                        href="/cart/edit/71561303?on_cart_page=true"
                      >
                        <span className="cart_entry__information-detail">
                          <font style={{ verticalAlign: "inherit" }} />
                        </span>
                      </a>{" "}
                    </p>
                  </div>
                  <div className="cart-entry__support">
                    <p className="t-body -size-s h-m0">
                      <strong>
                        <font style={{ verticalAlign: "inherit" }}>
                          <font style={{ verticalAlign: "inherit" }}>پشتیبانی: </font>
                        </font>
                      </strong>
                      <a
                        title="تغییر مجوز"
                        className="js-cart-variant__output-support t-link"
                        data-view="modalAjax"
                        href="/cart/edit/71561303?on_cart_page=true"
                      >
                        <font style={{ verticalAlign: "inherit" }}>
                          <font style={{ verticalAlign: "inherit" }}>
                            6 ماه پشتیبانی
                          </font>
                        </font>
                      </a>{" "}
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div
              data-analytics-element-id="quantity select element"
              className="item-result__quantity_select"
            >
              <div className="cart-entry__quantity_select_form">
                <form
                  className="quantity-form"
                  id="quantity-form-71561303"
                  action="/cart/add_or_remove_entries/71561303"
                  acceptCharset="UTF-8"
                  method="post"
                >
                  <input
                    type="hidden"
                    name="authenticity_token"
                    defaultValue="B0n2chnuHP-b7vQ1zSDGZ7HP8r6ylaExb52puoHrXHzANih5NpLRyq4T4Aew095OEjAsCvs20uToicQ8hVV3Eg"
                    autoComplete="off"
                  />
                  <label htmlFor="qty">
                    <font style={{ verticalAlign: "inherit" }}>
                      <font style={{ verticalAlign: "inherit" }}>تعداد</font>
                    </font>
                  </label>
                  <input
                    type="number"
                    name="quantity"
                    id="quantity-input-71561303"
                    defaultValue={1}
                    min={0}
                    max={50}
                    className="quantity-input"
                  />
                </form>{" "}
              </div>
              <a
                className="cart-entry__update-link -size-m btn-link"
                id="quantity-form-update-link-71561303"
                href="#"
              >
                <font style={{ verticalAlign: "inherit" }}>
                  <font style={{ verticalAlign: "inherit" }}>به روز رسانی</font>
                </font>
              </a>
            </div>
            <div className="item-result__price">
              <div className="cart-entry__price">
                <h6 className="t-heading -size-l h-m0">
                  <b className="">
                    <font style={{ verticalAlign: "inherit" }}>
                      <font style={{ verticalAlign: "inherit" }}>{product.price} تومان</font>
                    </font>
                  </b>
                </h6>
              </div>
            </div>
          </div>
          <form
            data-view="cartSupportUpgrade"
            data-entry-id={71561303}
            data-path="/cart/71561303"
            data-google-analytics-payload='{"actionData":null,"productsArray":[{"id":45360728,"name":"Geekfolio - Creative Agency \u0026 Portfolio Template","variant":"regular","category":"themeforest.net/category/site-templates/creative/portfolio","brand":"UI-ThemeZ","price":"14.00","quantity":"1","dimension14":"bundle_6month"}],"timestamp":1703051524}'
            action="/cart/71561303"
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
              defaultValue="B0n2chnuHP-b7vQ1zSDGZ7HP8r6ylaExb52puoHrXHzANih5NpLRyq4T4Aew095OEjAsCvs20uToicQ8hVV3Eg"
              autoComplete="off"
            />
          </form>{" "}
          <div className="item-upgrade__error">
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>
                مشکلی در درخواست شما پیش آمد، لطفاً دوباره امتحان کنید.
              </font>
            </font>
          </div>
        </article>
      </div>
      
    )
}