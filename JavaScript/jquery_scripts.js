function startSession()
{
    let strURL = "Interface.php?request=startSession&q=0";

    $.get
    (strURL, function(data)
    {
        $('#content').html(data);
    });
}

function startGame()
{
    let strURL = "Interface.php?request=newGame&q=0";

    $.get
    (strURL, function(data)
    {
        $('#content').html(data);
    });
}


function getQuestion()
{
    let intQuestionNum = $('#selectQu').val();
    let strQuestionNum = intQuestionNum.toString();
    let strURL = "Interface.php?request=question&q=" + strQuestionNum;

    $.get(strURL, function(data)
    {
        $('#question').text(data);
    });
}

function getAnswer()
{
    let intQuestionNum = $('#selectQu').val();
    let strQuestionNum = intQuestionNum.toString();
    let strURL = "Interface.php?request=answer&q=" + strQuestionNum;

    $.get
    (strURL, function(data)
    {
        $('#answer').text(data);
    });
}
