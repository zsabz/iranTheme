export  function  SingleProduct(){
    return(
        <div className="col-6 col-md-4 col-lg-4">
  <div className="product product-7 text-center">
    <figure className="product-media">
      <span className="product-label label-new">
        <font style={{ verticalAlign: "inherit" }}>
          <font style={{ verticalAlign: "inherit" }}>جدید</font>
        </font>
      </span>
      <a href="product.html">
        <img
          src="assets/images/products/product-4.jpg"
          alt="تصویر محصول"
          className="product-image"
        />
      </a>
      <div className="product-action-vertical">
        <a href="#" className="btn-product-icon btn-wishlist btn-expandable">
          <span>
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>
                به لیست علاقه مندی ها اضافه کنید
              </font>
            </font>
          </span>
        </a>
        <a
          href="popup/quickView.html"
          className="btn-product-icon btn-quickview"
          title="مشاهده سریع"
        >
          <span>Quick view</span>
        </a>
        <a
          href="#"
          className="btn-product-icon btn-compare"
          title="مقایسه کنید"
        >
          <span>Compare</span>
        </a>
      </div>
      {/* End .product-action-vertical */}
      <div className="product-action">
        <a href="#" className="btn-product btn-cart">
          <span>
            <font style={{ verticalAlign: "inherit" }}>
              <font style={{ verticalAlign: "inherit" }}>
                به سبد خرید اضافه کنید
              </font>
            </font>
          </span>
        </a>
      </div>
      {/* End .product-action */}
    </figure>
    {/* End .product-media */}
    <div className="product-body">
      <div className="product-cat">
        <a href="#">
          <font style={{ verticalAlign: "inherit" }}>
            <font style={{ verticalAlign: "inherit" }}>زنان</font>
          </font>
        </a>
      </div>
      {/* End .product-cat */}
      <h3 className="product-title">
        <a href="product.html">
          <font style={{ verticalAlign: "inherit" }}>
            <font style={{ verticalAlign: "inherit" }}>
              دامن مدادی دور کمر کیف کاغذی قهوه ای
            </font>
          </font>
        </a>
      </h3>
      {/* End .product-title */}
      <div className="product-price">
        <font style={{ verticalAlign: "inherit" }}>
          <font style={{ verticalAlign: "inherit" }}>60.00 دلار</font>
        </font>
      </div>
      {/* End .product-price */}
      <div className="ratings-container">
        <div className="ratings">
          <div className="ratings-val" style={{ width: "20%" }} />
          {/* End .ratings-val */}
        </div>
        {/* End .ratings */}
        <span className="ratings-text">
          <font style={{ verticalAlign: "inherit" }}>
            <font style={{ verticalAlign: "inherit" }}>( 2 نظر )</font>
          </font>
        </span>
      </div>
      {/* End .rating-container */}
      <div className="product-nav product-nav-thumbs">
        <a href="#" className="active">
          <img
            src="assets/images/products/product-4-thumb.jpg"
            alt="توصیف محصول"
          />
        </a>
        <a href="#">
          <img
            src="assets/images/products/product-4-2-thumb.jpg"
            alt="توصیف محصول"
          />
        </a>
        <a href="#">
          <img
            src="assets/images/products/product-4-3-thumb.jpg"
            alt="توصیف محصول"
          />
        </a>
      </div>
      {/* End .product-nav */}
    </div>
    {/* End .product-body */}
  </div>
  {/* End .product */}
</div>

    )
}