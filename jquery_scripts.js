function getAnswer()
{
    //document.getElementById("answer").innerHTML = "5";
    $.get('logic.php', function(data)
    {
        $('#answer').text(data);
    });

}