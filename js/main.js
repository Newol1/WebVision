var state;$(function(){$(".size-prop .size").click(change_size),$(".description-images > div").click(change_active_image),$(".main-nav li").click(change_page),$(".resized-nav ul li").click(change_page),$(".resized-nav-button").click(toggle_resized_nav),$(".resized-nav .cross").click(toggle_resized_nav)});function change_size(){$(this).parent().find(".size").removeClass("active-size"),$(this).addClass("active-size")}function change_active_image(){return $(this).hasClass("image-active")?0:void($(this).parent().find("div").removeClass("image-active"),$(this).addClass("image-active"))}function change_page(){var a=$(".resized-nav ul li").removeClass("active-li"),b=$(".main-nav li").removeClass("active-li");let c=$(this).text();for(let b=0;b<a.length;b++)$(a[b]).text()===c&&$(a[b]).addClass("active-li");for(let a=0;a<b.length;a++)$(b[a]).text()===c&&$(b[a]).addClass("active-li")}function toggle_resized_nav(){if("run"===state)return 0;state="run";let a=$(".resized-nav");$(a).hasClass("active-resized-nav")?$(a).removeClass("active-resized-nav"):$(a).addClass("active-resized-nav"),setTimeout(()=>{state="stop"},500)}(function(){var a=$(".quantity-arrow-minus"),b=$(".quantity-arrow-plus");a.click(function(){var a=$(this).parent().find(".quantity-num");0<a.val()&&a.val(+a.val()-1)}),b.click(function(){var a=$(this).parent().find(".quantity-num");9<=a.val()&&a.val(+a.val()-1),a.val(+a.val()+1)})})();