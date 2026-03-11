$(document).ready(function(){
  //Инициализируем галерею портфолио
  new Photostack(document.getElementById('photostack-1'));
  
  $("#photostack-1").click();
  
  //Плавный переход по якорям
  $('a[href^="#"]').on('click', function(event) {
    var target = this.hash;

    if (target !== "" && $(target).length) {
      event.preventDefault();

      $('html, body').stop().animate({
        scrollTop: $(target).offset().top
      }, 600, 'swing', function() {
        window.location.hash = target;
      });
    }
  });
  
  //Переход по якорной ссылке 1
  $("body").on("click",".go_to_link_ya",function(){
    var p_link=$(this).attr("p_link");
    var target=$(p_link);
    if (target.length) {
      $('html, body').stop().animate({
        scrollTop: target.offset().top
      }, 1000);
    }
  });
  
  //Отправка формы 1
  $("body").on("click","#id_but_form_1",function(){
    var form_data=$('#id_form_1').serializeArray();
    
    var p_name=form_data[1]["value"];
    var p_phone=form_data[0]["value"];
    var p_sogl="";
    if (form_data[2]) {
      p_sogl=form_data[2]["value"];
    }
    
    $.ajax({
      url: '/local/ajax/main.php',
      method: 'POST',
      data: {
        type: "send_form_1",
        name: p_name,
        phone: p_phone,
        sogl: p_sogl,
      },
      success: function(data) {
        console.log(data);
      },
    });
  });
});