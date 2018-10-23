jQuery(document).ready(function () {
    jQuery("#gallery-extra-small").unitegallery({
        gallery_theme: "compact",
        //theme options

        theme_panel_position: "bottom", //top, bottom, left, right - thumbs panel position
        theme_hide_panel_under_width: "null", //hide panel under certain browser width, if null, don't hide

        //THUMBS OPTIONS - RELATING TO BOTH, STRIP AND GRID PANELS

        thumb_width: 60, //thumb width
        thumb_height: 130, //thumb height

        //STRIP THUMBS PANEL OPTIONS          

        strippanel_padding_top: 2, //space from top of the panel
        strippanel_padding_bottom: 2, //space from bottom of the panel

        strippanel_padding_left: 0, //space from left of the panel
        strippanel_padding_right: 0, //space from right of the panel
        strip_space_between_thumbs: 2, //space between thumbs

        // gallery options

        gallery_autoplay: true, //true / false - begin slideshow autoplay on start
        gallery_play_interval: 3000, //play interval of the slideshow
        gallery_pause_on_mouseover: false, //true,false - pause on mouseover when playing slideshow true/false

        gallery_height: $(window).height() - 67, //gallery height
        gallery_width: "auto", //gallery width

        gallery_min_height: $(window).height() - 67, //gallery minimal height when resizing

        gallery_control_thumbs_mousewheel: false, //true,false - change this option, add more mousewheel choices
        gallery_control_keyboard: false, //true,false - enable / disble keyboard controls
        gallery_carousel: true, //true,false - next button on last image goes to first image.

        gallery_preserve_ratio: true, //true, false - preserver ratio when on window resize

        //slider options:

        slider_control_zoom: false, //true, false - enable zooming control
        slider_transition: "slide", //fade, slide - the transition of the slide change
        slider_transition_speed: 300                //transition duration of slide change

    });
    /***********************************gallery-small****************************************************/
    jQuery("#gallery-small").unitegallery({
        gallery_theme: "compact",
        //theme options

        theme_panel_position: "bottom", //top, bottom, left, right - thumbs panel position
        theme_hide_panel_under_width: "null", //hide panel under certain browser width, if null, don't hide

        //THUMBS OPTIONS - RELATING TO BOTH, STRIP AND GRID PANELS

        thumb_width: 176, //thumb width
        thumb_height: 95, //thumb height

        //STRIP THUMBS PANEL OPTIONS          

        strippanel_padding_top: 8, //space from top of the panel
        strippanel_padding_bottom: 8, //space from bottom of the panel

        strippanel_padding_left: 0, //space from left of the panel
        strippanel_padding_right: 0, //space from right of the panel
        strip_space_between_thumbs: 8, //space between thumbs

        // gallery options

        gallery_autoplay: true, //true / false - begin slideshow autoplay on start
        gallery_play_interval: 3000, //play interval of the slideshow
        gallery_pause_on_mouseover: false, //true,false - pause on mouseover when playing slideshow true/false

        gallery_height: $(window).height() - 115, //gallery height
        gallery_width: "auto", //gallery width

        gallery_min_height: $(window).height() - 115, //gallery minimal height when resizing

        gallery_control_thumbs_mousewheel: false, //true,false - change this option, add more mousewheel choices
        gallery_control_keyboard: false, //true,false - enable / disble keyboard controls
        gallery_carousel: true, //true,false - next button on last image goes to first image.

        gallery_preserve_ratio: true, //true, false - preserver ratio when on window resize

        //slider options:

        slider_control_zoom: false, //true, false - enable zooming control
        slider_transition: "slide", //fade, slide - the transition of the slide change
        slider_transition_speed: 300              //transition duration of slide change

    });
    /*******************************gallery-medium*******************************************************************/
    jQuery("#gallery-medium").unitegallery({
        gallery_theme: "compact",
        //theme options

        theme_panel_position: "bottom", //top, bottom, left, right - thumbs panel position
        theme_hide_panel_under_width: "null", //hide panel under certain browser width, if null, don't hide

        //THUMBS OPTIONS - RELATING TO BOTH, STRIP AND GRID PANELS

        thumb_width: 176, //thumb width
        thumb_height: 95, //thumb height

        //STRIP THUMBS PANEL OPTIONS          

        strippanel_padding_top: 15, //space from top of the panel
        strippanel_padding_bottom: 79, //space from bottom of the panel

        strippanel_padding_left: 0, //space from left of the panel
        strippanel_padding_right: 0, //space from right of the panel
        strip_space_between_thumbs: 8, //space between thumbs

        // gallery options

        gallery_autoplay: true, //true / false - begin slideshow autoplay on start
        gallery_play_interval: 3000, //play interval of the slideshow
        gallery_pause_on_mouseover: false, //true,false - pause on mouseover when playing slideshow true/false

        gallery_height: $(window).height() - 180, //gallery height
        gallery_width: "auto", //gallery width

        gallery_min_height: $(window).height() - 180, //gallery minimal height when resizing

        gallery_control_thumbs_mousewheel: false, //true,false - change this option, add more mousewheel choices
        gallery_control_keyboard: false, //true,false - enable / disble keyboard controls
        gallery_carousel: true, //true,false - next button on last image goes to first image.

        gallery_preserve_ratio: true, //true, false - preserver ratio when on window resize

        //slider options:

        slider_control_zoom: false, //true, false - enable zooming control
        slider_transition: "slide", //fade, slide - the transition of the slide change
        slider_transition_speed: 300                //transition duration of slide change

    });
    /*******************************gallery-medium-large************************************************************/
    jQuery("#gallery-medium-large").unitegallery({
        gallery_theme: "compact",
        //theme options

        theme_panel_position: "right", //top, bottom, left, right - thumbs panel position
        theme_hide_panel_under_width: "null", //hide panel under certain browser width, if null, don't hide

        //THUMBS OPTIONS - RELATING TO BOTH, STRIP AND GRID PANELS

        thumb_width: 160, //thumb width
        thumb_height: 99, //thumb height

        //STRIP THUMBS PANEL OPTIONS          

        strippanel_padding_top: 0, //space from top of the panel
        strippanel_padding_bottom: 0, //space from bottom of the panel

        strippanel_padding_left: 9, //space from left of the panel
        strippanel_padding_right: 0, //space from right of the panel
        strip_space_between_thumbs: 8,
        // gallery options

        gallery_autoplay: true, //true / false - begin slideshow autoplay on start
        gallery_play_interval: 3000, //play interval of the slideshow
        gallery_pause_on_mouseover: false, //true,false - pause on mouseover when playing slideshow true/false

        gallery_height: $(window).height() - 215, //gallery height
        gallery_min_height: $(window).height() - 215,
        gallery_width: "auto", //gallery width

        gallery_control_thumbs_mousewheel: false, //true,false - change this option, add more mousewheel choices
        gallery_control_keyboard: false, //true,false - enable / disble keyboard controls
        gallery_carousel: true, //true,false - next button on last image goes to first image.

        gallery_preserve_ratio: true, //true, false - preserver ratio when on window resize

        //slider options:

        slider_control_zoom: false, //true, false - enable zooming control
        slider_transition: "slide", //fade, slide - the transition of the slide change
        slider_transition_speed: 300                //transition duration of slide change

    });
    /*************************************gallery-large********************************************************************/
    jQuery("#gallery-large").unitegallery({
        gallery_theme: "compact",
        //theme options

        theme_panel_position: "right", //top, bottom, left, right - thumbs panel position
        theme_hide_panel_under_width: "null", //hide panel under certain browser width, if null, don't hide

        //THUMBS OPTIONS - RELATING TO BOTH, STRIP AND GRID PANELS

        thumb_width: 190, //thumb width
        thumb_height: 102, //thumb height

        //STRIP THUMBS PANEL OPTIONS          

        strippanel_padding_top: 0, //space from top of the panel
        strippanel_padding_bottom: 0, //space from bottom of the panel

        strippanel_padding_left: 15, //space from left of the panel
        strippanel_padding_right: 0, //space from right of the panel
        strip_space_between_thumbs: 8,
        // gallery options

        gallery_autoplay: true, //true / false - begin slideshow autoplay on start
        gallery_play_interval: 3000, //play interval of the slideshow
        gallery_pause_on_mouseover: false, //true,false - pause on mouseover when playing slideshow true/false

        gallery_height: $(window).height() - 230, //gallery height
        gallery_min_height: $(window).height() - 230,
        gallery_width: "auto", //gallery width

        gallery_control_thumbs_mousewheel: true, //true,false - change this option, add more mousewheel choices
        gallery_control_keyboard: false, //true,false - enable / disble keyboard controls
        gallery_carousel: true, //true,false - next button on last image goes to first image.

        gallery_preserve_ratio: true, //true, false - preserver ratio when on window resize

        //slider options:

        slider_control_zoom: false, //true, false - enable zooming control
        slider_transition: "slide", //fade, slide - the transition of the slide change
        slider_transition_speed: 300                //transition duration of slide change

    });
    /***************************************gallery******************************************************************/
    jQuery("#gallery").unitegallery({
        gallery_theme: "compact",
        //theme options

        theme_panel_position: "right", //top, bottom, left, right - thumbs panel position
        theme_hide_panel_under_width: "null", //hide panel under certain browser width, if null, don't hide

        //THUMBS OPTIONS - RELATING TO BOTH, STRIP AND GRID PANELS

        thumb_width: 250, //thumb width
        thumb_height: 120, //thumb height

        //STRIP THUMBS PANEL OPTIONS          

        strippanel_padding_top: 0, //space from top of the panel
        strippanel_padding_bottom: 0, //space from bottom of the panel

        strippanel_padding_left: 20, //space from left of the panel
        strippanel_padding_right: 0, //space from right of the panel
        strip_space_between_thumbs: 11,
        // gallery options

        gallery_autoplay: true, //true / false - begin slideshow autoplay on start
        gallery_play_interval: 3000, //play interval of the slideshow
        gallery_pause_on_mouseover: false, //true,false - pause on mouseover when playing slideshow true/false

        gallery_height: $(window).height() - 288, //gallery height
        gallery_width: "auto", //gallery width

        gallery_control_thumbs_mousewheel: true, //true,false - change this option, add more mousewheel choices
        gallery_control_keyboard: false, //true,false - enable / disble keyboard controls
        gallery_carousel: true, //true,false - next button on last image goes to first image.

        gallery_preserve_ratio: true, //true, false - preserver ratio when on window resize

        //slider options:

        slider_control_zoom: false, //true, false - enable zooming control
        slider_transition: "slide", //fade, slide - the transition of the slide change
        slider_transition_speed: 300                //transition duration of slide change

    });
    /***************************************gallery-big******************************************************************/
    jQuery("#gallery-big").unitegallery({
        gallery_theme: "compact",
        //theme options

        theme_panel_position: "right", //top, bottom, left, right - thumbs panel position
        theme_hide_panel_under_width: "null", //hide panel under certain browser width, if null, don't hide

        //THUMBS OPTIONS - RELATING TO BOTH, STRIP AND GRID PANELS

        thumb_width: 250, //thumb width
        thumb_height: 138, //thumb height

        //STRIP THUMBS PANEL OPTIONS          

        strippanel_padding_top: 0, //space from top of the panel
        strippanel_padding_bottom: 0, //space from bottom of the panel

        strippanel_padding_left: 20, //space from left of the panel
        strippanel_padding_right: 0, //space from right of the panel
        strip_space_between_thumbs: 8,
        // gallery options

        gallery_autoplay: true, //true / false - begin slideshow autoplay on start
        gallery_play_interval: 3000, //play interval of the slideshow
        gallery_pause_on_mouseover: false, //true,false - pause on mouseover when playing slideshow true/false

        gallery_height: $(window).height() - 323, //gallery height
        gallery_width: "auto", //gallery width

        gallery_control_thumbs_mousewheel: true, //true,false - change this option, add more mousewheel choices
        gallery_control_keyboard: false, //true,false - enable / disble keyboard controls
        gallery_carousel: true, //true,false - next button on last image goes to first image.

        gallery_preserve_ratio: true, //true, false - preserver ratio when on window resize

        //slider options:

        slider_control_zoom: false, //true, false - enable zooming control
        slider_transition: "slide", //fade, slide - the transition of the slide change
        slider_transition_speed: 300                //transition duration of slide change

    });
    /***************************************gallery-extra-big******************************************************************/
    jQuery("#gallery-extra-big").unitegallery({
        gallery_theme: "compact",
        //theme options

        theme_panel_position: "right", //top, bottom, left, right - thumbs panel position
        theme_hide_panel_under_width: "null", //hide panel under certain browser width, if null, don't hide

        //THUMBS OPTIONS - RELATING TO BOTH, STRIP AND GRID PANELS

        thumb_width: 250, //thumb width
        thumb_height: 142, //thumb height

        //STRIP THUMBS PANEL OPTIONS          

        strippanel_padding_top: 0, //space from top of the panel
        strippanel_padding_bottom: 0, //space from bottom of the panel

        strippanel_padding_left: 10, //space from left of the panel
        strippanel_padding_right: 0, //space from right of the panel
        strip_space_between_thumbs: 10,
        // gallery options

        gallery_autoplay: true, //true / false - begin slideshow autoplay on start
        gallery_play_interval: 3000, //play interval of the slideshow
        gallery_pause_on_mouseover: false, //true,false - pause on mouseover when playing slideshow true/false

        gallery_height: $(window).height() - 323, //gallery height
        gallery_width: "auto", //gallery width

        gallery_control_thumbs_mousewheel: true, //true,false - change this option, add more mousewheel choices
        gallery_control_keyboard: false, //true,false - enable / disble keyboard controls
        gallery_carousel: true, //true,false - next button on last image goes to first image.

        gallery_preserve_ratio: true, //true, false - preserver ratio when on window resize

        //slider options:

        slider_control_zoom: false, //true, false - enable zooming control
        slider_transition: "slide", //fade, slide - the transition of the slide change
        slider_transition_speed: 300                //transition duration of slide change

    });
    
    if ($(window).width() < 576) {
        $("#gallery-extra-small").show();
        $("#gallery-small").hide();
        $("#gallery-medium").hide();
        $("#gallery-medium-large").hide();
        $("#gallery-large").hide();
        $("#gallery").hide();
        $("#gallery-big").hide();
        $("#gallery-extra-big").hide();
    }
    if ($(window).width() >= 576 && $(window).width() < 768) {
        $("#gallery-extra-small").hide();
        $("#gallery-small").show();
        $("#gallery-medium").hide();
        $("#gallery-medium-large").hide();
        $("#gallery-large").hide();
        $("#gallery").hide();
        $("#gallery-big").hide();
        $("#gallery-extra-big").hide();
    }
    if ($(window).width() >= 768 && $(window).width() < 960) {
        $("#gallery-extra-small").hide();
        $("#gallery-small").hide();
        $("#gallery-medium").show();
        $("#gallery-medium-large").hide();
        $("#gallery-large").hide();
        $("#gallery").hide();
        $("#gallery-big").hide();
        $("#gallery-extra-big").hide();
    }
    if ($(window).width() >= 960 && $(window).width() < 992) {
        $("#gallery-extra-small").hide();
        $("#gallery-small").hide();
        $("#gallery-medium").hide();
        $("#gallery-medium-large").show();
        $("#gallery-large").hide();
        $("#gallery").hide();
        $("#gallery-big").hide();
        $("#gallery-extra-big").hide();
    }
    if ($(window).width() >= 992 && $(window).width() < 1200) {
        $("#gallery-extra-small").hide();
        $("#gallery-small").hide();
        $("#gallery-medium").hide();
        $("#gallery-medium-large").hide();
        $("#gallery-large").show();
        $("#gallery").hide();
        $("#gallery-big").hide();
        $("#gallery-extra-big").hide();
    }
    if ($(window).width() >= 1200 && $(window).width() < 1400) {
        $("#gallery-extra-small").hide();
        $("#gallery-small").hide();
        $("#gallery-medium").hide();
        $("#gallery-medium-large").hide();
        $("#gallery-large").hide();
        $("#gallery").show();
        $("#gallery-big").hide();
        $("#gallery-extra-big").hide();
    }
    if ($(window).width() >= 1400 && $(window).width() < 1600) {
        $("#gallery-extra-small").hide();
        $("#gallery-small").hide();
        $("#gallery-medium").hide();
        $("#gallery-medium-large").hide();
        $("#gallery-large").hide();
        $("#gallery").hide();
        $("#gallery-big").show();
        $("#gallery-extra-big").hide();
    }
    if ($(window).width() >= 1600) {
        $("#gallery-extra-small").hide();
        $("#gallery-small").hide();
        $("#gallery-medium").hide();
        $("#gallery-medium-large").hide();
        $("#gallery-large").hide();
        $("#gallery").hide();
        $("#gallery-big").hide();
        $("#gallery-extra-big").show();
    }
});