$(function(){
  var iColumns = 1;
  var cont = document.getElementById('text');
    
  var h = $('#text').outerHeight();
//     alert(h);
    
  var wh = $(window).height();
//     alert(wh);
  
  var html_org = $('#text').html();
  
  var maxWidth = 0;
  var widestPar = null;
  var $element;
  $("#text > p > tt").each(function(){
    $element = $(this);
    if($element.width() > maxWidth){
      maxWidth = $element.width();
      widestPar = $element; 
    }

  });
  console.log(maxWidth);
  console.log(widestPar);
  
  $('#text').html(html_org);
  

  if (wh < h) {
    iColumns = Math.ceil(h/wh); // decreasing amount of columns
    while (iColumns * maxWidth > $(window).width() && iColumns > 1) {
      iColumns--;
    }
    console.log(iColumns);
    cont.style.MozColumnCount = iColumns; // apply styles
    cont.style.WebkitColumnCount = iColumns;
  }
});
