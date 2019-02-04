function getAnswer()
{
    $.get('Interface.php?request=a', function(data)
    {
        $('#answer').text(data);
    });
}

function getQuestion()
{
    $.get('Interface.php?request=q', function(data)
    {
        $('#question').text(data);
    });
}
