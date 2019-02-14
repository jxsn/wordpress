<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
$(function() {
    var navigation_bar_bordered = $(".navigation-bar bordered");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 200) {
            navigation_bar_bordered.removeClass('navigation-bar bordered fixto-fixed').addClass("navigation-bar bordered");
        }
    });
});</script>
<!-- end Simple Custom CSS and JS -->
