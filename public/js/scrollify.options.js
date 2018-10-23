
    $(document).ready(function(){
        $.scrollify({
            section : ".section",
            sectionName : "section-name",
            interstitialSection : ".section",
            scrollSpeed: 450,
            scrollbars: false,
            setHeights: false,
            afterRender:function() {
                $(".scroll").on("click",function() {
                $.scrollify.move("#seccion");
                });
            }
        });
    });