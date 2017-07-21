'use strict';
let MainApp = (function () {
    let ajax = function (url, data = null, before, func) {
        data = JSON.stringify(data);
        before();
        $.ajax({
            url: url,
            type: "POST",
            data: "r="+data,
            success: function(result){
                func(result);
            }
        });
    };
   return {
       init: function () {
           new WOW().init();
           $('.countdown').final_countdown();
           $(".menu").changeActiveNav();
           this.event();
       },
       event: function () {
           let self = this;
            this.bindAnchors();
            $('.products').on('click','button',function (e) {
                e.preventDefault();
                self.openPopup(this);
            });
            $(".equipment")
                .on('mouseover', 'li', (event) => this.equipmentOver(event.currentTarget))
                .on('mouseout','li', (event) => this.equipmentOut(event.currentTarget));
            $(".equipment-img")
                .on('mouseover', 'i', (event) => this.equipmentImageOver(event.currentTarget))
                .on('mouseout', 'i',(event) => this.equipmentImageOut(event.currentTarget));
           $(".colors")
               .on('click','i',(event) => this.changeModel(event.currentTarget))
               .children('i:first-child').addClass('active');
           $("form").on('submit',function (e) {
               e.preventDefault();
               self.sendMessage(this);
           });
           $('.popup').on('click',function (event) {
               self.closePopup(event);
           })
       },
       equipmentOver : function (element) {
           let i = $(element).find('i');
           let number = $(i).data('number')
           $(i).addClass('active');
           $('.equipment-img').find('i[data-number="'+number+'"]').addClass('active');
       },
       equipmentOut : function (element) {
           let i = $(element).find('i');
           let number = $(i).data('number')
           $(i).removeClass('active');
           $('.equipment-img').find('i[data-number="'+number+'"]').removeClass('active');
       },
       equipmentImageOver : function (element) {
           let i = element;
           let number = $(i).data('number')
           $(i).addClass('active');
           $('.equipment ul').find('i[data-number="'+number+'"]').addClass('active');
       },
       equipmentImageOut : function (element) {
           let i = element;
           let number = $(i).data('number')
           $(i).removeClass('active');
           $('.equipment ul').find('i[data-number="'+number+'"]').removeClass('active');
       },
       sendMessage : function (form) {
           let data = {
             name: $(form).find('input').is('[name="name"]') ? $(form).find('[name="name"]').val() : '',
             email: $(form).find('input').is('[name="email"]') ? $(form).find('[name="email"]').val() : '',
             phone: $(form).find('input').is('[name="phone"]') ? $(form).find('[name="phone"]').val() : '',
             description: $(form).find('textarea').is('[name="description"]') ? $(form).find('[name="description"]').val() : '',
             color: $(form).find('select').is('[name="color"]') ? $(form).find('[name="color"]').val() : '',
             model: $(form).find('select').is('[name="model"]') ? $(form).find('[name="model"]').val() : '',
           };
           let span = $(form).find('.result');
           ajax('/site/send',data,function () {
               $(span).text('Заявка отправляется');
           } , function (result) {
               $(span).addClass('success');
               $(span).text(result);
           });
       },
       openPopup : function (element) {
            let info = $(element).parent();
            let popup = $('.popup');
            let color = $(info).find('.colors .active').data('color');
            let model = $(info).find('h3').text();
            $(popup).find('#model option[value="'+model+'"]').prop('selected',true);
            $(popup).find('#color option[value="'+color+'"]').prop('selected',true);
            $(popup).css({'display':'flex'});
            $(popup).animate({'opacity':'1'},500);
       },
       closePopup : function (event) {
           let element = event.toElement;
           if($(element).hasClass('popup')){
               $(element).fadeOut(500,function () {
                   $(element).css('opacity','0');
                   $(element).find('form')[0].reset();
               });
           }
       },
       bindAnchors : function () {
           $('a[href*=\\#]').bind("click", function(e){
               let anchor = $(this);
               $('html, body').stop().animate({
                   scrollTop: $(anchor.attr('href')).offset().top
               }, 1000);
               e.preventDefault();
           });
           return false;
       },
       changeModel : function (element) {
           if(!$(element).hasClass('active')){
               $(element).parent().find('.active').removeClass('active');
               $(element).addClass('active');
               let parent = $(element).parents('.product');
               let img = $(parent).find('img');
               let nameModel = $(parent).find('h3').text();
               let src = '/web/img/gallery/'+nameModel+'/'+$(element).data('color')+'.jpg';
               $(img).animate({opacity: 0},500, function () {
                   $(img).attr('src',src);
                   $(img).animate({opacity: 1},500);
               });
           }
       }
   }
})();
MainApp.init();

