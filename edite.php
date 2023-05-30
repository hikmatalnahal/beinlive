<?php
include_once ('includess/conniction.php');


if ($_SERVER['REQUEST_METHOD']=="POST") {
    $team= $_POST['team'];
    $date= $_POST['date'];
    $result3= $_POST['result'];
    $Link= $_POST['Link'];
    $stats= $_POST['stats'];
}
if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $qurey = "SELECT team , date, result ,Link , stats from matchs  where id = '$id'";
    $result = mysqli_query($link,$qurey);
    $row = mysqli_fetch_assoc($result);
if ($_SERVER['REQUEST_METHOD'] == "POST"){
     $qurey2= "UPDATE matchs set team = '$team' ,`date` ='$date' , `result` = '$result3' , Link = '$Link' ,stats = '$stats'   where id = '$id';";  
      $result2 = mysqli_query($link,$qurey2);
        if ($result2) {
        header('Location:tabel2.php');
    }
}

}
?>
<!DOCTYPE html>
<html dir="rtl">

<head>
    <title>dashboard matchs</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport' />
    <link crossorigin='anonymous' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
        rel='stylesheet' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css' rel='stylesheet' />
    <link href='https://cdn.rawgit.com/abdelalilebbihi/techabdou/fe375e69/abdou-neo.css' rel='stylesheet' />

    <style type='text/css'>
        body {
            color: #485e74;
            line-height: 1.6;
            font-family: 'neo', Tahoma, Geneva, Verdana, sans-serif;
            padding: 1em;
            background-image: url(https://rawgit.com/abdelalilebbihi/abdou_tech/master/gadget/svg/r-bg.svg);
            background-repeat: no-repeat;
            background-size: 222%
        }

        .container {
            max-width: 1170px;
            margin-left: auto;
            margin-right: auto;
            padding: 1em
        }

        ul {
            list-style: none;
            padding: 0
        }

        .brand {
            text-align: center
        }

        .brand span {
            color: #fff
        }

        .wrapper {
            box-shadow: 0 0 20px 0 rgba(72, 94, 116, 0.7)
        }

        .wrapper>* {
            padding: 1em
        }

        .dashboard-info {
            color: #fff;
            background: linear-gradient(90deg, rgba(41, 133, 253, 1) 0%, rgba(42, 93, 159, 1) 100%)
        }

        .dashboard-info h3,
        .dashboard-info ul {
            text-align: center;
            margin: 0 0 1rem 0
        }

        .dashboard {
            background: #f9feff
        }

        .wrapper .dashboard {
            float: right;
            width: 100%;
            position: relative
        }

        .dashboard-info i {
            text-align: center;
            font-size: 50px;
            margin: 5px auto;
            width: 100%
        }

        .wrapper .dashboard-info {
            width: 100%;
            float: left
        }

        .link-dashboard {
            position: fixed;
            bottom: 30px;
            right: 20px;
            z-index: 99999999;
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }

        #link-dashboard {
            color: #fff;
            padding: 12px 18px 14px 18px;
            font-size: 18px;
            border-radius: 3px;
            box-shadow: 0 1.5px 4px rgba(0, 0, 0, 0.24), 0 1.5px 6px rgba(0, 0, 0, 0.12);
            display: inline-block;
            background: linear-gradient(90deg, rgba(41, 133, 253, 1) 0%, rgba(42, 93, 159, 1) 100%)
        }

        a#link-dashboard.show {
            background: #fff;
            color: #2985fd
        }

        /* FORM STYLES */
        .dashboard form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px
        }

        .dashboard form label {
            display: block;
            margin-bottom: 5px
        }

        .dashboard form p {
            margin: 0
        }

        .dashboard form .full {
            grid-column: 1 / 3
        }

        .dashboard form button,
        .dashboard form input,
        .dashboard form textarea {
            font-family: neo;
            width: 100%;
            padding: 1em;
            border: 1px solid #c9e6ff
        }

        .dashboard form button {
            text-transform: uppermicrophone;
            background: linear-gradient(90deg, rgba(41, 133, 253, 1) 0%, rgba(42, 93, 159, 1) 100%);
            border: 0;
            color: #fff;
            border-radius: 100px;
            -moz-border-radius: 100px;
            -webkit-border-radius: 100px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15) !important
        }

        .dashboard form button i {
            margin-left: 9px;
            transition: all .4s ease-in-out
        }

        .dashboard form button span {
            transition: all .4s ease-in-out
        }

        .dashboard form button:hover i {
            transform: translate(-290%, 0px)
        }

        .dashboard form button:hover span {
            opacity: 0
        }

        .dashboard form button:hover,
        .dashboard form button:focus {
            background: #2985fd;
            color: #fff;
            outline: 0
        }

        .notif-succcess {
            box-shadow: 0 1.5px 4px rgba(0, 0, 0, 0.24), 0 1.5px 6px rgba(0, 0, 0, 0.12);
            display: inline-block;
            background: #404040;
            padding: 16px;
            margin: 0 0 16px 16px;
            border-radius: 3px;
            color: #FFF;
            font: 16px neo;
            line-height: 20px;
            white-space: nowrap;
            pointer-events: auto;
            overflow: hidden;
            position: fixed;
            top: 16%;
            right: -100%;
            transition: .3s;
            z-index: 999
        }

        .notif-succcess.show {
            right: 2%
        }

        .notif-succcess i {
            float: left;
            margin: 2px 10px 0 0;
            color: #fff
        }

        /* LARGE SCREENS */
        @media(min-width:700px) {
            .wrapper {
                display: grid
            }

            .wrapper>* {
                padding: 2em
            }

            .dashboard-info h3,
            .dashboard-info ul {
                text-align: center
            }
        }

        /* Material Design Effect */
        .waves-effect {
            position: relative;
            cursor: pointer;
            display: inline-block;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
            vertical-align: middle;
            z-index: 1;
            will-change: opacity, transform;
            -webkit-transition: all .3s ease-out;
            -moz-transition: all .3s ease-out;
            -o-transition: all .3s ease-out;
            -ms-transition: all .3s ease-out;
            transition: all .3s ease-out
        }

        .waves-effect .waves-ripple {
            position: absolute;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            margin-top: -10px;
            margin-left: -10px;
            opacity: 0;
            background: rgba(0, 0, 0, 0.2);
            -webkit-transition: all 0.7s ease-out;
            -moz-transition: all 0.7s ease-out;
            -o-transition: all 0.7s ease-out;
            -ms-transition: all 0.7s ease-out;
            transition: all 0.7s ease-out;
            -webkit-transition-property: -webkit-transform, opacity;
            -moz-transition-property: -moz-transform, opacity;
            -o-transition-property: -o-transform, opacity;
            transition-property: transform, opacity;
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            pointer-events: none
        }

        .waves-effect.waves-light .waves-ripple {
            background-color: rgba(255, 255, 255, 0.45)
        }

        .waves-notransition {
            -webkit-transition: none !important;
            -moz-transition: none !important;
            -o-transition: none !important;
            -ms-transition: none !important;
            transition: none !important
        }

        .waves-circle {
            -webkit-transform: translateZ(0);
            -moz-transform: translateZ(0);
            -ms-transform: translateZ(0);
            -o-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-mask-image: -webkit-radial-gradient(circle, white 100%, black 100%)
        }

        .waves-input-wrapper {
            border-radius: 0.2em;
            vertical-align: bottom;
            width: 100%
        }

        .waves-input-wrapper .waves-button-input {
            position: relative;
            top: 0;
            left: 0;
            z-index: 1
        }

        .waves-circle {
            text-align: center;
            width: 2.5em;
            height: 2.5em;
            line-height: 2.5em;
            border-radius: 50%;
            -webkit-mask-image: none
        }

        .waves-block {
            display: block
        }

        a.waves-effect .waves-ripple {
            z-index: -1
        }

        .ripple {
            display: inline-block;
            text-decoration: none;
            overflow: hidden;
            position: relative;
            z-index: 0
        }

        .ink {
            display: block;
            position: absolute;
            background: rgba(255, 255, 255, 0.4);
            border-radius: 100%;
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0)
        }

        .animate {
            -webkit-animation: ripple .55s linear;
            -moz-animation: ripple .55s linear;
            -ms-animation: ripple .55s linear;
            -o-animation: ripple .55s linear;
            animation: ripple .55s linear
        }

        @-webkit-keyframes ripple {
            100% {
                opacity: 0;
                -webkit-transform: scale(2.5)
            }
        }

        @-moz-keyframes ripple {
            100% {
                opacity: 0;
                -moz-transform: scale(2.5)
            }
        }

        @-o-keyframes ripple {
            100% {
                opacity: 0;
                -o-transform: scale(2.5)
            }
        }

        @keyframes ripple {
            100% {
                opacity: 0;
                transform: scale(2.5)
            }
        }

        .resultscode {
            position: absolute;
            top: -200%;
            z-index: 999;
            left: 0;
            right: 0;
            margin: 0 auto;
            text-align: center;
            background: #2985fd66;
            height: 100%;
            width: 100%;
            opacity: 0;
            visibility: hidden;
            transition: .3s all ease
        }

        .resultscode textarea {
            margin: 14% 0 auto;
            text-align: center;
            border: 2px solid #2985fd;
            max-width: 343px;
            width: 100%
        }

        .resultscode button {
            overflow: hidden;
            border: 0;
            background: #ffffff;
            color: #2985fd;
            font-family: inherit;
            padding: 20px;
            display: block;
            margin: 0 auto;
            cursor: pointer;
            border-bottom: 4px solid #2985fd
        }

        .resultscode.show {
            top: 0;
            visibility: inherit;
            opacity: 1
        }

        .btnshowcode {
            display: none
        }
    </style>
</head>

<body>

    <div class='container'>
        <div class='wrapper'>
            <div class='dashboard-info'>
                <i class='fa fa-futbol-o fa-spin'></i>
                <h3>
                    dashboard matchs
                </h3>
            </div>
            <div class='dashboard'>
            <form class="needs-validation" novalidate action="<?php echo  $_SERVER['PHP_SELF']."?id=$id" ?>" 
                                method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label" for="validationCustom011">اسم الفريق
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input name="team" type="text" class="form-control" id="validationCustom011"
                                        placeholder="Enter a team Name.." required value="<?php echo $row['team']; ?>">
                                   
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label" for="validationCustom00">ساعة بدء المباراة
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input name="date" type="text" class="form-control" id="validationCustom00"
                                        placeholder="Enter a date.." required value="<?php echo $row['date']; ?>">
                                   
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label" for="validationCustom01">النتيجة
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input name="result" type="text" class="form-control" id="validationCustom01"
                                        placeholder="Enter a Result.." required value="<?php echo $row['result']; ?>">
                                   
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label" for="validationCustom02">رابط البث
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input name="Link" type="text" class="form-control" id="validationCustom02"
                                        placeholder="Enter a Link.." required value="<?php echo $row['Link']; ?>">
                                    
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label" for="validationCustom013">حالة المباراة
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input name="stats" type="text" class="form-control" id="validationCustom013"
                                        placeholder="Enter a stats.." required value="<?php echo $row['stats']; ?>">
                                  </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-lg-8 ms-auto">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </div>
                                                
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>



            <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

            <script type='text/javascript'>



                function getInputVal(id) {
                    return document.getElementById(id).value;
                }
                $("#dashboardForm").submit(function (event) {
                    event.preventDefault();

                    var team = getInputVal('team');
                    var team2 = getInputVal('team2');
                    var team_image = getInputVal('team_image');
                    var team_image2 = getInputVal('team_image2');
                    var result = getInputVal('result');
                    var time = getInputVal('time');
                    var channels = getInputVal('channels');
                    var champion = getInputVal('champion');
                    var linkmatch = getInputVal('linkmatch');
                    var microphone = getInputVal('microphone');

                    var natija = result;
                    var splitnatija = natija.split("-");
                    var right = splitnatija[0],
                        left = splitnatija[1],
                        splittime = time.split(" "),
                        pmtime = splittime[1];

                    var code = '<li class="alba_sports_events-event_item"><a href="' + linkmatch + '" target="_blank" title="' + team + ' VS ' + team2 + '"><div class="alba_sports_events-event_mask"><div class="event_mask_inner"><div class="h3 alba_sports_events-event_mask_inner_text gray">شاهد المباراة</div></div></div><div class="event_inner"><div class="col-xs-2 shampion"><span><i aria-hidden="true" class="fa fa-trophy"></i>' + champion + '</span></div><div class="center-col"><div class="col-xs-3 team-aria team-first"><div class="alba-team_logo"><img alt="' + team + '" height="150" src="' + team_image + '" width="150"></div><div class="alba_sports_events-team_title">' + team + '</div></div><div class="col-xs-2 event_title_wrapper"><div class="events-team_score">' + right + '</div><div class="event_status_inner_coming">' + time + '</div><div class="events-team_score">' + left + '</div></div><div class="col-xs-3 team-aria team-second"><div class="h2 alba_sports_events-team_title">' + team2 + '</div><div class="alba-team_logo"><img alt="' + team2 + '" height="150" src="' + team_image2 + '" width="150"></div></div></div><div class="col-xs-2 chanels-fix"><span><i aria-hidden="true" class="fa fa-microphone"></i>' + microphone + '</span><span><i aria-hidden="true" class="fa fa-television"></i> ' + channels + '</span></div></div></a></li>';






                    $('.resultscode textarea').val($('.resultscode textarea').val() + code + "<!-- match -->");


                    // Show alert
                    $('.notif-succcess').addClass('show');

                    // Hide alert after 3 seconds
                    setTimeout(function () {
                        $('.notif-succcess').removeClass('show');
                    }, 3000);
                    $('.btnshowcode').show();

                    // Clear form
                    document.getElementById('dashboardForm').reset();



                });





                $('.btnshowcode').on('click', function () {
                    $('.resultscode').toggleClass("show");

                });

                $('.resultscode button').on('click', function () {
                    $('.resultscode').toggleClass("show");
                    document.execCommand('copy')
                    alert('تم نسخ');



                });


                function copyToClipboard() {
                    var textBox = document.getElementById("resultscodetext");
                    textBox.select();
                    document.execCommand("copy");
                    alert('تم نسخ');
                }


                // New Waves

                !function (t) { "use strict"; function e(t) { return null !== t && t === t.window } function n(t) { return e(t) ? t : 9 === t.nodeType && t.defaultView } function a(t) { var e, a, i = { top: 0, left: 0 }, o = t && t.ownerDocument; return e = o.documentElement, void 0 !== t.getBoundingClientRect && (i = t.getBoundingClientRect()), a = n(o), { top: i.top + a.pageYOffset - e.clientTop, left: i.left + a.pageXOffset - e.clientLeft } } function i(t) { var e = ""; for (var n in t) t.hasOwnProperty(n) && (e += n + ":" + t[n] + ";"); return e } function o(t) { if (!1 === d.allowEvent(t)) return null; for (var e = null, n = t.target || t.srcElement; null !== n.parentElement;) { if (!(n instanceof SVGElement || -1 === n.className.indexOf("waves-effect"))) { e = n; break } if (n.classList.contains("waves-effect")) { e = n; break } n = n.parentElement } return e } function r(e) { var n = o(e); null !== n && (c.show(e, n), "ontouchstart" in t && (n.addEventListener("touchend", c.hide, !1), n.addEventListener("touchcancel", c.hide, !1)), n.addEventListener("mouseup", c.hide, !1), n.addEventListener("mouseleave", c.hide, !1)) } var s = s || {}, u = document.querySelectorAll.bind(document), c = { duration: 750, show: function (t, e) { if (2 === t.button) return !1; var n = e || this, o = document.createElement("div"); o.className = "waves-ripple", n.appendChild(o); var r = a(n), s = t.pageY - r.top, u = t.pageX - r.left, d = "scale(" + n.clientWidth / 100 * 10 + ")"; "touches" in t && (s = t.touches[0].pageY - r.top, u = t.touches[0].pageX - r.left), o.setAttribute("data-hold", Date.now()), o.setAttribute("data-scale", d), o.setAttribute("data-x", u), o.setAttribute("data-y", s); var l = { top: s + "px", left: u + "px" }; o.className = o.className + " waves-notransition", o.setAttribute("style", i(l)), o.className = o.className.replace("waves-notransition", ""), l["-webkit-transform"] = d, l["-moz-transform"] = d, l["-ms-transform"] = d, l["-o-transform"] = d, l.transform = d, l.opacity = "1", l["-webkit-transition-duration"] = c.duration + "ms", l["-moz-transition-duration"] = c.duration + "ms", l["-o-transition-duration"] = c.duration + "ms", l["transition-duration"] = c.duration + "ms", l["-webkit-transition-timing-function"] = "cubic-bezier(0.250, 0.460, 0.450, 0.940)", l["-moz-transition-timing-function"] = "cubic-bezier(0.250, 0.460, 0.450, 0.940)", l["-o-transition-timing-function"] = "cubic-bezier(0.250, 0.460, 0.450, 0.940)", l["transition-timing-function"] = "cubic-bezier(0.250, 0.460, 0.450, 0.940)", o.setAttribute("style", i(l)) }, hide: function (t) { d.touchup(t); var e = this, n = (e.clientWidth, null), a = e.getElementsByClassName("waves-ripple"); if (!(a.length > 0)) return !1; var o = (n = a[a.length - 1]).getAttribute("data-x"), r = n.getAttribute("data-y"), s = n.getAttribute("data-scale"), u = 350 - (Date.now() - Number(n.getAttribute("data-hold"))); u < 0 && (u = 0), setTimeout(function () { var t = { top: r + "px", left: o + "px", opacity: "0", "-webkit-transition-duration": c.duration + "ms", "-moz-transition-duration": c.duration + "ms", "-o-transition-duration": c.duration + "ms", "transition-duration": c.duration + "ms", "-webkit-transform": s, "-moz-transform": s, "-ms-transform": s, "-o-transform": s, transform: s }; n.setAttribute("style", i(t)), setTimeout(function () { try { e.removeChild(n) } catch (t) { return !1 } }, c.duration) }, u) }, wrapInput: function (t) { for (var e = 0; e < t.length; e++) { var n = t[e]; if ("input" === n.tagName.toLowerCase()) { var a = n.parentNode; if ("i" === a.tagName.toLowerCase() && -1 !== a.className.indexOf("waves-effect")) continue; var i = document.createElement("i"); i.className = n.className + " waves-input-wrapper"; var o = n.getAttribute("style"); o || (o = ""), i.setAttribute("style", o), n.className = "waves-button-input", n.removeAttribute("style"), a.replaceChild(i, n), i.appendChild(n) } } } }, d = { touches: 0, allowEvent: function (t) { var e = !0; return "touchstart" === t.type ? d.touches += 1 : "touchend" === t.type || "touchcancel" === t.type ? setTimeout(function () { d.touches > 0 && (d.touches -= 1) }, 500) : "mousedown" === t.type && d.touches > 0 && (e = !1), e }, touchup: function (t) { d.allowEvent(t) } }; s.displayEffect = function (e) { "duration" in (e = e || {}) && (c.duration = e.duration), c.wrapInput(u(".waves-effect")), "ontouchstart" in t && document.body.addEventListener("touchstart", r, !1), document.body.addEventListener("mousedown", r, !1) }, s.attach = function (e) { "input" === e.tagName.toLowerCase() && (c.wrapInput([e]), e = e.parentElement), "ontouchstart" in t && e.addEventListener("touchstart", r, !1), e.addEventListener("mousedown", r, !1) }, t.Waves = s, document.addEventListener("DOMContentLoaded", function () { s.displayEffect() }, !1) }(window);


//]]>
            </script>











</body>

</html>