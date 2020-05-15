$('.list-group .directionSource').click(function(){
    $(this).parent().find('.directionSource').removeClass('selected');
    $(this).addClass('selected');

});
$('.list-group .directionTarget').click(function(){
    $(this).parent().find('.directionTarget').removeClass('selected');
    $(this).addClass('selected');

});