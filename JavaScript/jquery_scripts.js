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
    let intRoundsSelectedNum = $('#selectRounds').val();
    let strRoundsSelectedNum = intRoundsSelectedNum.toString();

    let strURL = "Interface.php?request=newGame&q=" + strRoundsSelectedNum;

    $.get
    (strURL, function(data)
    {
        $('#content').html(data);
    });
}

function submitAnswer()
{
    let radioSelected = $('input[name=options]:checked').val();


    let strURL = "Interface.php?request=submitAnswer&q=" + radioSelected;

    $.get
    (strURL, function(data)
    {
        $('#content').html(data);
    });
}
