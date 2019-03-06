$(document).ready(function(){
  let $card = $('.card form');
  let cardHeight = $card[0].offsetHeight;
  $card.height(0);
  
  $('.card form').delay(400).animate({
    height: cardHeight
  }, {
    complete: function() {
      $card.height('auto');
    }
  })
})