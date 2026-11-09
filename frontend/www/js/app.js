















$(document).ready(function() {

  $('.types__item').click(function(event) {
    $('.types__item-active').removeClass('types__item-active');
    $(this).toggleClass('types__item-active');

    if ($(this).hasClass('types__item1')) {
      $('.block_visible').removeClass('block_visible');
      $('.block1').addClass('block_visible');
      $('#order__num').html('1');
      $('#order__sum').html('15000');
    } else if ($(this).hasClass('types__item2')) {
      $('.block_visible').removeClass('block_visible');
      $('.block2').addClass('block_visible');
      $('#order__num').html('2');
      $('#order__sum').html('29000');
    } else {
      $('.block_visible').removeClass('block_visible');
      $('.block3').addClass('block_visible');
      $('#order__num').html('3');
      $('#order__sum').html('79000');
    }

  });

});