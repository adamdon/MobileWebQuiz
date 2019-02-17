function startSession()
{
    let strURL = "Interface.php?request=startSession&p1=0";

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

    let strURL = "Interface.php?request=newGame&p1=" + strRoundsSelectedNum;

    $.get
    (strURL, function(data)
    {
        $('#content').html(data);
    });
}

function submitAnswer()
{
    let radioSelected = $('input[name=options]:checked').val();


    let strURL = "Interface.php?request=submitAnswer&p1=" + radioSelected;

    $.get
    (strURL, function(data)
    {
        $('#content').html(data);
    });
}

function nextRound()
{
    let strURL = "Interface.php?request=nextRound&p1=0";

    $.get
    (strURL, function(data)
    {
        $('#content').html(data);
    });
}
