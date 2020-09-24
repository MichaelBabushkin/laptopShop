$(document).ready(function () {

    //banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1,
        loop: true,
        autoplay: true
    });



    // top sale owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1200: {
                items: 5
            }
        }
    });

    //isotope filter
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });
    //filter items on button click
    $(".button-group").on("click", "button", function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    })

    // new laptop owl carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1200: {
                items: 5
            }
        }
    });
    // Blogs owl carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },

        }
    });

    //product quantity selection
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    var sum = $("#deal-price").text();
    // let $input = $(".qty .qty_input");

    // click on qty up button
    $qty_up.click(function (e) {

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);
        // change product price using ajax call
        alert(sum);
        $.ajax({
            url: "Template/ajax.php",
            type: 'post',
            data: {
                itemid: $(this).data("id")
            },
            success: function (result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if ($input.val() >= 1 && $input.val() <= 9) {
                    $input.val(function (i, oldval) {
                        return ++oldval;
                    });

                    // increase price of the product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }

            }
        }); // closing ajax request
    }); // closing qty up button

    // click on qty down button
    $qty_down.click(function (e) {

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({
            url: "template/ajax.php",
            type: 'post',
            data: {
                itemid: $(this).data("id")
            },
            success: function (result) {
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if ($input.val() > 1 && $input.val() <= 10) {
                    $input.val(function (i, oldval) {
                        return --oldval;
                    });


                    // increase price of the product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                    
                }

            }
        }); // closing ajax request
    
    }); // closing qty down button

});


$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

});

$(function() {
    $('[data-toggle="tooltip"]').tooltip()
    })

// function myFunction() {
//     var number=document.getElementById("cart").value;
//            alert(number);
//       };