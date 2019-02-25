function startSession()
{
    let strURL = "Interface.php?request=startSession&p1=0&p2=0";

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

    let strCategorySelected = $('#selectCategory').val();

    let strURL = "Interface.php?request=newGame&p1=" + strRoundsSelectedNum + "&p2=" + strCategorySelected;

    $.get
    (strURL, function(data)
    {
        $('#content').html(data);
    });
}

function submitAnswer()
{
    let radioSelected = $('input[name=options]:checked').val();


    let strURL = "Interface.php?request=submitAnswer&p1=" + radioSelected + "&p2=0";

    $.get
    (strURL, function(data)
    {
        $('#content').html(data);
    });
}

function nextRound()
{
    let strURL = "Interface.php?request=nextRound&p1=0&p2=0";

    $.get
    (strURL, function(data)
    {
        $('#content').html(data);
    });
}
