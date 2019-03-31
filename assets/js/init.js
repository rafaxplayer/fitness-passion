
    var $header = jQuery('header'),
            $adminbar = jQuery('#wpadminbar'),
            $nav = $header.find('#site-navigation'),
            $buttonUp = jQuery('.button-up'),
            $mainContent = jQuery('.site-main'),
            $headerOffSet = $header.outerHeight(true) - $nav.innerHeight();
           

    jQuery(window).on('scroll', function() {

        var $top = jQuery(this).scrollTop();
        
        if ($top >= $header.outerHeight(true)) {
            $buttonUp.css({ 'right': '0' });
        } else {
            $buttonUp.css({ 'right': '-80px' });
        }

    });
    

    jQuery(window).on('load', function() {
            

        $buttonUp.on('click', function() {
            jQuery('html,body').animate({ scrollTop: 0 }, 500);
        });
        

        if(!jQuery('#secondary').length){
            if(!jQuery('.content-area').hasClass('full')){
                $mainContent.removeClass('col-md-8').addClass('col-md-12');
            }
        }
        if(jQuery('#slider')){

            jQuery( '#slider' ).on( 'cycle-before', function(event, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {
                jQuery(incomingSlideEl).find('.slide-content').hide();
                
            });
            
            jQuery( '#slider' ).on( 'cycle-after', function(event, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {
                jQuery(incomingSlideEl).find('.slide-content').show();
                jQuery(incomingSlideEl).find('.slide-content').removeClass("fadeInUp").addClass("fadeInUp");
                
            });
        }

        AOS.init();
    }); 
