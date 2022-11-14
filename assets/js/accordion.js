$(function(){

  $('.title').on('click', function() {

    const findElm = $(this).next(".box");
    $(findElm).slideToggle();
      
    if($(this).hasClass('close')){
      $(this).removeClass('close');
    }else{
      $(this).addClass('close');
    }

  });

  //ページが読み込まれた際にopenクラスをつけ、openがついていたら開く動作※不必要なら下記全て削除
  $(window).on('load', function(){

    $('.accordion-area li:first-of-type section').addClass("open"); 
    $(".open").each(function(index, element){ 
      const Title =$(element).children('.title'); 
      $(Title).addClass('close');
      const Box =$(element).children('.box'); 
      $(Box).slideDown(500);
    });
    
  });

});