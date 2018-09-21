
jQuery(document).ready(function(){
 /** Variables from Customizer for Slider settings */
    if( preschool_and_kindergarten_data.auto == '1' ){
        var slider_auto = true;
    }else{
        slider_auto = false;
    }
    
    if( preschool_and_kindergarten_data.loop == '1' ){
        var slider_loop = true;
    }else{
        var slider_loop = false;
    }
    
    if( preschool_and_kindergarten_data.control == '1' ){
        var slider_control = true;
    }else{
        var slider_control = false;
    }

    if( preschool_and_kindergarten_data.animation == 'slide' ){
        var animation = '';
    }else{
        var animation = preschool_and_kindergarten_data.animation;
    }

    if( preschool_and_kindergarten_data.rtl == '1' ){
        var rtl = true;
    }else{
        var rtl = false;
    }

        //testimonials sections
    if( preschool_and_kindergarten_data.t_auto == '1' ){
        var slider_testimonial_auto = true;
    }else{
        slider_testimonial_auto = false;
    }

    /** Home Page Slider */
    jQuery('.banner-slider').owlCarousel({
        items         : 1,
        autoplay      : slider_auto,
        loop          : slider_loop,
        nav           : slider_control,
        animateOut    : animation,
        autoplaySpeed : preschool_and_kindergarten_data.speed,
        navSpeed      : preschool_and_kindergarten_data.a_speed,
        lazyLoad      : true,
        rtl           : rtl
    });

    jQuery("#lightSlider").owlCarousel({
        
        items          : 1,// slidemove will be 1 if loop is true
        margin   : 0,
        dots         : false,
        nav: true,
        rtl           : rtl,
        mouseDrag    : false,
        autoplay          :slider_testimonial_auto,
    });
        

    jQuery('#responsive-menu-button').sidr({
        name  : 'sidr-main',
        source: '#site-navigation',
        side  : 'right'
    
    });

});
