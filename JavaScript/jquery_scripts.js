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
