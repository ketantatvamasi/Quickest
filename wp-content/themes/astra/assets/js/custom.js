// $(document).ready(function() {
(function($) {

    /* ------------------------------
       On features list hover image will be show of relavent feature
     ------------------------------- */
    $(window).on("resize load",function() {

        var sync1 = $("#app-features-list");
        var sync2 = $(".feature-list");

        sync1.owlCarousel({
            singleItem : true,
            slideSpeed : 1000,
            navigation: false,
            pagination:false,
            dots: false,
            nav: false,
            margin:10,
            responsiveRefreshRate : 300,
            afterAction : syncPosition,
            afterInit : function(el){
                $(".feature-list").find(".item").eq(0).addClass("synced");
            }

        });
        if($(window).width() < 1023) {
            sync2.owlCarousel({
                items :10,
                itemsDesktop      : [1199,10],
                itemsDesktopSmall : [1023,1],
                itemsTablet       : [768,1],
                itemsMobile       : [767,1],
                pagination:false,
                navigation:false,
                dots: false,
                nav: false,
                responsiveRefreshRate : 300,
                afterAction : syncPosition2,
                afterInit : function(el){
                    el.find(".item").eq(0).addClass("synced");
                }
            });

        }else {
            if(sync2.hasClass("owl-theme")){
                sync2.data('owlCarousel').destroy();
            }
        }

        function syncPosition(el){
            var current = this.currentItem;
            $(".feature-list .item").removeClass("synced");
            $(".feature-list").find(".item").eq(current).addClass("synced");
            $(".feature-list").find(".owl-item").removeClass("synced").eq(current).addClass("synced");

            if($(".feature-list").data("owlCarousel") !== undefined){
                center(current)
            }
        }

        function syncPosition2(el){
            var current = this.currentItem;
            $("#app-features-list").find(".owl-item").removeClass("synced").eq(current).addClass("synced")
            if($("#app-features-list").data("owlCarousel") !== undefined){
                center2(current)
            }
        }
        if($(window).width() > 1023) {
            $(".feature-list").on("click mouseenter", ".item", function(){
                var number = $(this).index();
                sync1.trigger("owl.goTo",number);
            });
        }

        function center(number){
            var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
            var num = number;
            var found = false;
            for(var i in sync2visible){
                if(num === sync2visible[i]){
                    var found = true;
                }
            }

            if(found===false){
                if(num>sync2visible[sync2visible.length-1]){
                    sync2.trigger("owl.goTo", num - sync2visible.length+2)
                }else{
                    if(num - 1 === -1){
                        num = 0;
                    }
                    sync2.trigger("owl.goTo", num);
                }
            } else if(num === sync2visible[sync2visible.length-1]){
                sync2.trigger("owl.goTo", sync2visible[1])
            } else if(num === sync2visible[0]){
                sync2.trigger("owl.goTo", num-1)
            }

        }

        function center2(number){
            var sync2visible = sync1.data("owlCarousel").owl.visibleItems;
            var num = number;
            var found = false;
            for(var i in sync2visible){
                if(num === sync2visible[i]){
                    var found = true;
                }
            }

            if(found===false){
                if(num>sync2visible[sync2visible.length-1]){
                    sync1.trigger("owl.goTo", num - sync2visible.length+2)
                }else{
                    if(num - 1 === -1){
                        num = 0;
                    }
                    sync1.trigger("owl.goTo", num);
                }
            } else if(num === sync2visible[sync2visible.length-1]){
                sync1.trigger("owl.goTo", sync2visible[1])
            } else if(num === sync2visible[0]){
                sync1.trigger("owl.goTo", num-1)
            }

        }
    });
})(jQuery);
// });
