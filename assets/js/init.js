
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

        jQuery('.gallery a').each(function() {
            jQuery(this).attr({ 'data-lightbox': jQuery(this).parent().parent().parent().attr('id') });
        });

        jQuery('.wp-block-gallery a').each(function(index) {
            jQuery(this).attr({ 'data-lightbox': 'image-' + index });
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
