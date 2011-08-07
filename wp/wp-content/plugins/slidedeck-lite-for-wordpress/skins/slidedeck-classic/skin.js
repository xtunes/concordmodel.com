(function($){
    function Fancyvert( thisDeck ){
        var el = $(thisDeck);
        var slidedeck = el.find('.slidedeck');
        var deck = slidedeck.slidedeck();
        
        var sizeDeckFrame = function(){
            if( slidedeck.width() && slidedeck.height() ){
                el.css({
                    width: slidedeck.width(),
                    height: slidedeck.height()
                });
            }
        };

		deck.loaded(function(){
	        sizeDeckFrame();
		});
                
        return true;
    };
    
    $(document).ready(function(){
        for(var i=0, decks=$('.slidedeck_frame.skin-slidedeck-classic'); i<decks.length; i++){
            var thisDeck = decks[i];
            
            if(typeof(thisDeck.SlideDeck_skinFancyvert) == 'undefined'){
                thisDeck.SlideDeck_skinFancyvert = Fancyvert(thisDeck);
            }
        }
    });    
})(jQuery);
