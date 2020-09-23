$(document).ready(function (){

//banner owl carousel
$("#banner-area .owl-carousel").owlCarousel({
    dots: true,
    items: 1,
    autoplay: true
});

// top sale owl carousel
$("#top-sale .owl-carousel").owlCarousel({
loop: true,
nav: true,
dots:false,
navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
responsive:{
    0:{
        items: 1                   
    },
    600:{
        items:3 
    },
    1200:{
        items:5
    }
}
});

//isotope filter
var $grid =$(".grid").isotope({
    itemSelector: '.grid-item',
    layoutMode: 'fitRows'
});
//filter items on button click
$(".button-group").on("click","button",function () {
    var filterValue= $(this).attr('data-filter');
    $grid.isotope({ filter:filterValue });
    })

    // new laptop owl carousel
$("#new-phones .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots:false,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive:{
        0:{
            items: 1                   
        },
        600:{
            items:3 
        },
        1200:{
            items:5
        }
    }
    });
        // Blogs owl carousel
$("#blogs .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots:false,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive:{
        0:{
            items: 1                   
        },
        600:{
            items:3 
        },
 
    }
    });

    //product quantity selection
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    //  let $input = $(".qty .qty_input");

    //click on quantity up button
    $qty_up.click(function (e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val()>=1 && $input.val()<=9){
            $input.val(function(i,oldval){
                return ++oldval;
            })
        }
    });

    //click on quantity down button
    $qty_down.click(function (e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val()>1 && $input.val()<=10){
            $input.val(function(i,oldval){
                return --oldval;
            })
        }
    });

});