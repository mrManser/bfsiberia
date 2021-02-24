$(document).ready(function () {
///////////////////////////////////////////////////////////////////////////////////////////////////////////

    // отправка почты
    $("#mail_button").click(function() {
        if ($("#mail_form .name_text_box").val() != "" && $("#mail_form .email_text_box").val() != "" && $("#mail_form textarea").text() != "")
        {

            $.ajax({
                url: "../send.php", 
                type: "POST", //метод отправки
                dataType: "html",
                data: $("#mail_form").serialize(),
                success: function(response) {
                    ShowMessage(response);
                },
                error: function(response) {
                    ShowMessage(response);
                }
            });

            $("#mail_form .name_text_box").val("");
            $("#mail_form .email_text_box").val("");
            $("#mail_form textarea").text("");

        }
        return false;
    });

///////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Логотип. Плавный переход наверх
    $(".logo").click(function () {
        //if ($(window).width() < 992){
            destination = $("#home").offset().top;
            $("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 800);

            //скрыть меню если открыто
            navbarToggler = $(".navbar-toggler");
            navbarTogglerTarget = $("#"+navbarToggler.attr("aria-controls"));
            if (!navbarToggler.hasClass("collapsed")) {
            navbarToggler.addClass("collapsed");
            navbarToggler.attr("aria-expanded", "false");
            navbarTogglerTarget.animate({height: "0"}, 300,"linear", function(){
                navbarTogglerTarget.removeClass("show");
            });
            
            return false;
        }
        //}
    });
    // Меню topmenu. Плавный переход по ссылкам меню
    $(".navbar .nav-link").click(function () {
        elementClick = $(this).attr("href")
        destination = $(elementClick).offset().top;
        $("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 800);

        //скрыть меню если открыто
        navbarToggler = $(".navbar-toggler");
        navbarTogglerTarget = $("#"+navbarToggler.attr("aria-controls"));
        if (!navbarToggler.hasClass("collapsed")) {
            navbarToggler.addClass("collapsed");
            navbarToggler.attr("aria-expanded", "false");
            navbarTogglerTarget.animate({height: "0"}, 300,"linear", function(){
                navbarTogglerTarget.removeClass("show");
            });
        }

        return false;
    });

///////////////////////////////////////////////////////////////////////////////////////////////////////////
});