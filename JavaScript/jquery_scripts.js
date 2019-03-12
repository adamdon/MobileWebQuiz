function startSession()
{
    let strURL = "Interface.php?request=startSession&p1=0&p2=0";
    requestContent(strURL);
}

function logIn()
{
    let strEmail = $('#email').val();
    let strPassword= $('#pass').val();

    let strURL = "Interface.php?request=logIn&p1=" + strEmail + "&p2=" + strPassword;

    requestContent(strURL);
}

function startGame()
{
    let intRoundsSelectedNum = $('#selectRounds').val();
    let strRoundsSelectedNum = intRoundsSelectedNum.toString();
    let strCategorySelected = $('#selectCategory').val();

    let strURL = "Interface.php?request=newGame&p1=" + strRoundsSelectedNum + "&p2=" + strCategorySelected;

    requestContent(strURL);
}

function submitAnswer()
{
    let radioSelected = $('input[name=options]:checked').val();

    let strURL = "Interface.php?request=submitAnswer&p1=" + radioSelected + "&p2=0";

    requestContent(strURL);
}

function nextRound()
{
    let strURL = "Interface.php?request=nextRound&p1=0&p2=0";

    requestContent(strURL);
}

function loadRegisterPage()
{
    let strURL = "Interface.php?request=loadRegisterPage&p1=0&p2=0";

    requestContent(strURL);
}

function loadLogin()
{
    let strURL = "Interface.php?request=loadLogin&p1=0&p2=0";

    requestContent(strURL);
}

function registerNewDetails()
{
    let strEmailReg = $('#email').val();
    let strPasswordReg = $('#pass1').val();

    let strURL = "Interface.php?request=registerNewDetails&p1=" + strEmailReg + "&p2=" + strPasswordReg;


    requestContent(strURL);
}

function logOut()
{
    let strURL = "Interface.php?request=logOut&p1=0&p2=0";

    requestContent(strURL);
}


function requestContent(strURL)
{
    $.get
    (strURL, function(data)
    {
        $('#content').html(data);
    });
}