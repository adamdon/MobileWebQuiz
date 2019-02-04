function getAnswer()
{
    $.get('logic.php?request=a', function(data)
    {
        $('#answer').text(data);
    });
}

function getQuestion()
{
    $.get('logic.php?request=q', function(data)
    {
        $('#question').text(data);
    });
}
