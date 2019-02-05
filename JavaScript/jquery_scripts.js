function getQuestion()
{
    // let selector = document.getElementById("selectQu");
    // let strElementSelected = selector.options[selector.selectedIndex].text;
    //var $element = $('#selectQu').val();

    //. $('#selectQu').val().toString()
    $.get('Interface.php?request=question&q=2', function(data)
    {
        $('#question').text(data);
    });
}

function getAnswer()
{
    $.get
    ('Interface.php?request=answer&q=2', function(data)
    {
        $('#answer').text(data);
    });
}
