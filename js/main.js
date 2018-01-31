$( document ).ready(function() {

    function otv() {
        var otvet = $("input[name~='otvet']").val();
        var otvet1 = $("input[name~='otvet1']").val();
        var otvet2 = $("input[name~='otvet2']").val();
        $.ajax({
            type: "POST",
            url: 'php/obr.php',
            data: {
                otvet: otvet,
                otvet1: otvet1,
                otvet2: otvet2
            },
            success: function(data){
                var answer = jQuery.parseJSON(data);
                $('.message').hide();
                $('.appet').text('');
                $("input[name~='otvet']").val('');
                $("input[name~='otvet1']").val('');
                $("input[name~='otvet2']").val('');
                if (answer.status === 200) {
                    $('.appet').text(answer.text);
                    $('.message#success').show(500);
                    setTimeout(function(){
                        $('.message').hide();
                        if ($(".block1").is(":visible")){
                            $('.block1').hide();
                            $('.block3').hide();
                            $('.block2').show(500);
                        } else if ($(".block2").is(":visible")){
                            $('.block1').hide();
                            $('.block2').hide();
                            $('.block3').show(500);
                        } else {
                            $('.block1').hide();
                            $('.block2').hide();
                            $('.block3').hide();
                            $('.starter-template').append('<div><b>Успех!!!</b></div>')
                        }
                    },1000);
                }
                if (answer.status === 400) {
                    $('.appet').text(answer.text);
                    $('.message#error').show(500);

                }
            }
        });
    }
    $( 'html' ).keydown(function( event ){ // задаем функцию при нажатиии любой клавиши клавиатуры на элементе
        if (event.which == 13){
            otv();
        }
    });
    $(':submit').click( function () {
        otv();
    });
});