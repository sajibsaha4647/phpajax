$(document).ready(function () {

    //check user name is available or not
    $('#username').blur(function () {
        var username = $(this).val();
        console.log(username)
        $.ajax({
            url: "checkfunctions/checkusername.php",
            type: "POST",
            data: { username: username },
            success: function (data) {
                $('#userstatus').html(data)
            }
        })
    })


    //autoComplete Textbox
    $("#skill").keyup(function (e) {
        var skill = $(this).val();
        // alert(skill)
        if (skill !== '') {
            $.ajax({
                url: "checkfunctions/checkskill.php",
                type: "POST",
                data: { skill: skill },
                success: function (data) {
                    $('#skilltest').fadeIn()
                    $('#skilltest').html(data)

                }
            })
        } else {
            $('#skilltest').fadeOut().html("")
        }
    });



    //get target name on the input field
    $('#skilltest').click(function (e) {
        e.preventDefault();
        const target = $(e.target);
        if (target.is("li") && target.data("name")) {
            $("#skill").val(target.text());
            $("#skilltest").fadeOut()
        }
    });

    //get show password
    $("#showpassword").click(function (e) {
        e.preventDefault();
        let pass = $("#password");
        let fieldtype = pass.attr('type');
        // alert(fieldtype)
        if (fieldtype === 'password') {
            $('#password').show();
            let y = pass.prop('type', 'text');
            $(this).text("hide password")
            console.log(y)
        } else {
            pass.prop('type', 'password');
            $(this).text("show password")
        }
    });

    $("#submit").click(function (e) {
        e.preventDefault();
        var name = $('#name').val();
        if ($.trim(name) != '') {
            $.ajax({
                url: "checkfunctions/checkautorefresh.php",
                type: "POST",
                data: { name: name },
                success: function (data) {
                    $('#shoeres').html(data)
                }
            });
            // return false

        } else {
            alert("field is empty")
        }
    });



    setInterval(function () {
        // $('#shoeres').load("checkfunctions/getdataRefresh.php").fadeIn()
        $("#shoeres").load("checkfunctions/getdataRefresh.php", function (e) {
            // alert("Load was performed.");
        }).fadeIn()
    }, 1000);























})
