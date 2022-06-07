$(function(){
    var count = 0;
    var per = 0;
    var increase = setInterval(animate,75);
    function animate() {
        if(count >=100 && per >= 100)
        {
            clearInterval(increase);
            $('#notice').text("Complete");
            $('#loader-wrapper').slideUp(2000);
        }else{
            count = count + 2;
            per = per + 2;
            $('#progress-bar').width(`${per}%`);
            $('#progress-counter').text(`${count}%`); 
        }
    } 
    $('#search-task-finder').hover(function(){
        $('#search-task-finder').css({
            'color':'red'
        });
        $('#search-task').slideDown(2000);
    });
    $('#x-search-task').click(function(){
        $('#search-task').slideUp(2000);
    }); 
});