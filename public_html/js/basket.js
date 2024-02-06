function addToBasket(id){
    $.ajax({
        url: `/basketadd/${id}`,
        method: "get",
        success: function(data) {
            getBasketNotif()
            
        },
        error: function(error) {
        console.log('خطا',error);       
        }
      });
}

function getBasketNotif(){

    $.ajax({
        url: `/basketdata`,
        method: "get",
        success: function(data) {
            $('#basketNumber').html(data);
        },
        error: function(error) {
          
        console.log('خطا',error);

        }
      });

    


//     $('#basketNotif').html(`
    
//     <div class="dropdown-cart-products">


//     <div class="product">
//         <div class="product-cart-details">
//             <h4 class="product-title">
//                 <a href="product.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">کفش دونده الاستیک بافتنی بژ</font></font></a>
//             </h4>

//             <span class="cart-product-info">
//                 <span class="cart-product-qty"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
//                 x 84.00 دلار
//             </font></font></span>
//         </div><!-- End .product-cart-details -->

//         <figure class="product-image-container">
//             <a href="product.html" class="product-image">
//                 <img src="assets/images/products/cart/product-1.jpg" alt="تولید - محصول">
//             </a>
//         </figure>
//         <a href="#" class="btn-remove" title="محصول را حذف کنید"><i class="icon-close"></i></a>
//     </div><!-- End .product -->

    
// </div><!-- End .cart-product -->


// <div class="dropdown-cart-total">
//     <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">جمع</font></font></span>

//     <span class="cart-total-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">160.00 دلار</font></font></span>
// </div><!-- End .dropdown-cart-total -->


// <div class="dropdown-cart-action">
//     <a href="cart.html" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">مشاهده سبد خرید</font></font></a>
//     <a href="checkout.html" class="btn btn-outline-primary-2"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">وارسی</font></font></span><i class="icon-long-arrow-right"></i></a>
// </div><!-- End .dropdown-cart-total -->
    
//     `)
}

getBasketNotif();