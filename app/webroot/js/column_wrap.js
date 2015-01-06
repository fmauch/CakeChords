$(function(){
  var iColumns = 1;
  var cont = document.getElementById('text');
    
  var h = $('#text').outerHeight();
//     alert(h);
    
  var wh = $(window).height();
//     alert(wh);
  
  var html_org = $('#text > p').html();
  var html_calc = '<span>' + html_org + '</span>';
  $('#text > p').html(html_calc);
  var width = $('#text > p').find('span:first').width();
  $('#text > p').html(html_org);
  
  console.log(width);

  if (wh < h) {
    iColumns = Math.ceil(h/wh); // decreasing amount of columns
    while (iColumns * width > $(window).width() && iColumns > 1) {
      iColumns--;
    }
    cont.style.MozColumnCount = iColumns; // apply styles
    cont.style.WebkitColumnCount = iColumns;
  }
});
