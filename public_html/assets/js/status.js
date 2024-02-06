function ajax_change_statue(e, this_id, status, model) {
  $(e.target).attr("disabled", "disabled");
  var prefix, url;
  prefix = window.location.href.split("/")[3];

  switch (prefix) {
    case "ad":
      url = "/ad/active";
      break;

    default:
      url = "active";
      break;
  }
  // alert(url)
  $.ajax({
    url: url,
    type: "get",
    data: {
      id: this_id,
      status: status,
      model: model,
    },
    success: function (response) {
      // console.log(response);
      switch (response.status) {
        case 200:
          $(e.target).html(response.txt);
          $("div.alert-success").fadeIn(800).children().html(response.message);
          break;
        case 500:
          break;

        default:
          break;
      }
    },
    complete: function () {
      $(e.target).removeAttr("disabled");
      $(`${e.target} .loaderBtn`).css("display", "none");
      // $(`${e.target} .loader`).css({'display': 'none', 'margin': '4em'});
      setTimeout(() => {
        $("div.alert.position-fixed").fadeOut(1000);
      }, 4000);
    },
  });
}

// function search_box() {
//   // alert();
//   result = $(".hero__search .search_result");
//   input = $(".hero__search__form input");
//   input.on({
//     click: function () {

//       alert(input.val)
//       if (input.val().length < 2) {
//         result.find("span").css("display", "block");
//       }
//       result.slideDown();
//     },
//     keyup: function () {
//       if (event.key == "Backspace" || event.key.length === 1) {
//         if ($(this).val().length > 1) {
//           url = $(this).closest("form").attr("action");
//           data = $(this).closest("form").serializeArray();
//           $.ajax({
//             type: "get",
//             url: url,
//             data: data,
//             success: function (response) {
//               if (response.status == 200) {
//                 result.find("span").css("display", "none");
//                 result.find(".search-result").html("");
//                 if (
//                   response.result.blogs.length > 0 ||
//                   response.result.products.length > 0
//                 ) {
//                   if (response.result.blogs.length > 0) {
//                     result
//                       .find(".search-result")
//                       .append("<span> در مقالات:</span>");
//                     $.each(response.result.blogs, function () {
//                       result.find(".search-result").append(`
//                       <a href="/blogs/${this.id}">${this.title}</a>
//                       `);
//                     });
//                     result.find(".search-result").append("<br>");
//                   }
//                   if (response.result.products.length > 0) {
//                     result
//                       .find(".search-result")
//                       .append("<span> در محصولات:</span>");
//                     $.each(response.result.products, function () {
//                       result.find(".search-result").append(`
//                       <a href="/products/${this.id}">${this.title}</a>
//                       `);
//                     });
//                     result.find(".search-result").append("<br>");
//                   }
//                   // if (response.result.keywords.length > 0) {
//                   //   result
//                   //     .find(".search-result")
//                   //     .append("<span> در کلمات کلیدی:</span>");
//                   //   $.each(response.result.keywords, function () {
//                   //     result.find(".search-result").append(`
//                   //     <a href="#">${this.title}</a>
//                   //     `);
//                   //   });
//                   //   result.find(".search-result").append("<br>");
//                   // }
//                   // if (response.result.psubjects.length > 0) {
//                   //   result
//                   //     .find(".search-result")
//                   //     .append("<span> در موضوع محصولات:</span>");
//                   //   $.each(response.result.psubjects, function () {
//                   //     result.find(".search-result").append(`
//                   //     <a href="#">${this.title}</a>
//                   //     `);
//                   //   });
//                   //   result.find(".search-result").append("<br>");
//                   // }
//                   // if (response.result.bsubjects.length > 0) {
//                   //   result
//                   //     .find(".search-result")
//                   //     .append("<span> در موضوع مقالات:</span>");
//                   //   $.each(response.result.bsubjects, function () {
//                   //     result.find(".search-result").append(`
//                   //     <a href="#">${this.title}</a>
//                   //     `);
//                   //   });
//                   //   result.find(".search-result").append("<br>");
//                   // }
//                 } else {
//                   result.find("span").css("display", "block");
//                   result.find("span").text("موردی یافت نشد");
//                 }
//               }
//             },
//             error: function (error) {
//               if (error.status == 422) {
//                 result.find("span").text(error.responseJSON.message);
//               }
//             },
//           });
//         } else {
//           result.find("span").css("display", "block");
//           result.find("span").text("برای جستجو، حداقل 2 کاراکتر را درج کنید.");
//           result.find(".search-result").html("");
//         }
//       }
//     },
//   });
//   $(document).on({
//     mouseup: function (e) {
//       if (!input.is(e.target) && input.has(e.target).length === 0) {
//         result.slideUp();
//       }
//     },
//   });
//   $(".hero__search__form form").on("submit", function (e) {
//     e.preventDefault();
//   });
// }

$(document).ready(function(){
    
  $('#body').click( function(e) {
  // alert('oo')
  $(".hero__search__form  .dropdown-menu").fadeOut(500);
  }
  )
}
)

$(".search-input").on({
  keyup: function () {
    $(".hero__search__form  .dropdown-menu").fadeIn(500);
    $(".result").html("");

    search($(this));
  },
});

const search = (input) => {
  // alert(input.val())
  var word = input.val();
  if (word.length < 1) {
    $(".result").html("در جستجوی چه هستی؟ کافیست بنویسی ...");
    return;
  }
  $.ajax({
    url: "/ad/search",
    method: "GET",
    data: {
      word: word,
    },
    success: function (response) {
      console.log(response);
      if (
        response.result.products.length < 1 &&
        response.result.keys.length < 1
      ) {
        $(".result").html("<h3 style=color:red>موردی یافت نشد</h3>");
        return;
      }
      $(".result").html(`<div id="accordion-1">
  <div class="head" onclick="accordionToggle(event)">
    <h2>محصولات</h2>
  </div>
  <div class="content">
    </div>
</div>

<br>

<div id="accordion-2">
  <div class="head" onclick="accordionToggle(event)">
    <h2>کلمات کلیدی</h2>
  </div>
  <div class="content">
  </div>
</div>`);
      setTimeout(() => {
        if (response.result.products.length > 0) {
          response.result.products.map((item) => {
            $("#accordion-1 .content").append(
              `<a href="" class="position-relative"> ${item.name} </a>`
            );
          });
        } else {
          $("#accordion-1 .content").html("<h3 style=color:red>موردی یافت نشد</h3>");
        }

        if (response.result.keys.length > 0) {
          response.result.keys.map((item) => {
            $("#accordion-2 .content").append(
              `<a href="" class="position-relative"> ${item.name} </a>`
            );
          });
        } else {
          $("#accordion-2 .content").html("<h3 style=color:red>موردی یافت نشد</h3>");
        }
      }, 100);
    },
  });
};

$(document).ready(function () {
  $(".select2").each(function () {
    $(this).select2({
      placeholder: $(this).attr("data-label"),
    });
  });
});

const accordionToggle = (e) => {
  $(e.target).toggleClass("active");
  $(e.target).parent().find(".content").slideToggle(280);

  // if ($(e.target).parent().after().attr("content") == "-") {
  //   $(e.target).parent().find('h2::after').attr("content", "+");
  // } else {
  //   $(e.target).parent().find('h2::after').attr("content", "-");
  // }
};



  function myDelete() {
      if(!confirm("ایا از حذف مطمئن هستید ؟"))
      event.preventDefault();
  }
function del()
{
  alert('حذف انجام شد')
}