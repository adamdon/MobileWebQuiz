function startSession()
{
    //let strURL = "Interface.php?request=startSession&p1=0&p2=0";
    let strURL = getURL("startSession", "0", "0");
    requestContent(strURL);
}

function logIn()
{
    let strEmail = $('#email').val();
    let strPassword= $('#pass').val();

    //let strURL = "Interface.php?request=logIn&p1=" + strEmail + "&p2=" + strPassword;
    let strURL = getURL("logIn", strEmail, strPassword);
    requestContent(strURL);
}

function startGame()
{
    let intRoundsSelectedNum = $('#selectRounds').val();
    let strRoundsSelectedNum = intRoundsSelectedNum.toString();
    let strCategorySelected = $('#selectCategory').val();

    //let strURL = "Interface.php?request=newGame&p1=" + strRoundsSelectedNum + "&p2=" + strCategorySelected;
    let strURL = getURL("newGame", strRoundsSelectedNum, strCategorySelected);
    requestContent(strURL);
}

function submitAnswer()
{
    let radioSelected = $('input[name=options]:checked').val();

    //let strURL = "Interface.php?request=submitAnswer&p1=" + radioSelected + "&p2=0";
    let strURL = getURL("submitAnswer", radioSelected, "0");
    requestContent(strURL);
}

function nextRound()
{
    //let strURL = "Interface.php?request=nextRound&p1=0&p2=0";
    let strURL = getURL("nextRound", "0", "0");
    requestContent(strURL);
}

function loadRegisterPage()
{
    //let strURL = "Interface.php?request=loadRegisterPage&p1=0&p2=0";
    let strURL = getURL("loadRegisterPage", "0", "0");
    requestContent(strURL);
}

function loadLogin()
{
    //let strURL = "Interface.php?request=loadLogin&p1=0&p2=0";
    let strURL = getURL("loadRegisterPage", "0", "0");
    requestContent(strURL);
}

function registerNewDetails()
{
    let strEmailReg = $('#email').val();
    let strPasswordReg = $('#pass1').val();

    //let strURL = "Interface.php?request=registerNewDetails&p1=" + strEmailReg + "&p2=" + strPasswordReg;

    let strURL = getURL("registerNewDetails", strEmailReg, strPasswordReg);


    requestContent(strURL);
}

function logOut()
{
    //let strURL = "Interface.php?request=logOut&p1=0&p2=0";

    let strURL = getURL("logOut", "0", "0");
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

//makes url with notation: "Interface.php?request=logOut&p1=0&p2=0"
function getURL(request, parameterVar1, parameterVar2)
{
    let stringToReturn = "";

    stringToReturn += "Interface.php?request="
    stringToReturn += request;

    stringToReturn += "&p1=";
    stringToReturn += parameterVar1;

    stringToReturn += "&p2="
    stringToReturn += parameterVar2;

    return stringToReturn;
}