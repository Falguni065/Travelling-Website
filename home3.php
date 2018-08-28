<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beautiful Bangladesh</title>
    <script src="jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="try2.css">
    <link rel="stylesheet" type="text/css" href="nav.css" >
    <link rel="stylesheet" type="text/css" href="new css.css" >
</head>
<body>

<div id="nav1">
    <h1 id="header">...BEAUTIFUL BANGLADESH...</h1>

</div>


<div class="navbar">
    <ul>
        <li><a href="home3.php">HOME</a></li>
        <li><a href="member2.php">MEMBERS</a></li>

        <li><a href="guide2.php">GUIDES</a> </li>



        <li><a id="reg_btn" href="3rd_reg.php"> Register </a></li>
        <?php if (isset($_SESSION['loggedin'])) : ?>
            <li><a id="out_btn" href="profile2.php"> <?php echo $_SESSION['name'] ?> </a></li>
        <?php endif; ?>

        <li><a id="log_btn" href="new_login.php"> Log In </a></li>




    </ul>

</div>

<br><br>




<div class="slide-home">


    <div class="slide-1">
        <img src="pic1.jpg">
    </div>





    <div class="slide-1">
        <img src="pic2.jpg">
    </div>


    <div class="slide-1">
        <img src="pic3.jpg">
    </div>


    <div class="slide-1">
        <img src="pic4.jpg">
    </div>

    <div class="slide-1">
        <img src="pic5.jpg">
    </div>

    <div class="slide-1">
        <img src="pic6.jpg">
    </div>


    <div class="slide-1">
        <img src="pic7.jpg">
    </div>
    <div class="slide-1">
        <img src="pic8.jpg">
    </div>

</div>


<script type="text/javascript">
    var index = 0;
    show();

    function show()
    {
        var i;
        var slides = document.getElementsByClassName("slide-1");
        for(i = 0;i < slides.length; i++)
        {
            slides[i].style.display = "none";
        }

        index++;
        if(index > slides.length)
        {
            index = 1
        }

        slides[index-1].style.display = "block";
        setTimeout(show,5000);
    }

    function loadLogin() {
        document.getElementById('body_id').innerHTML = "<object type='text/html' data='form.html'></object>";
    }
</script>






<h1 id="header">...Let's Start Your Journey...</h1>

        <div id="crop">

            <table>
                <td id="s2">Search</td>
                <td><input type="search" name="search_text" id="search_text" placeholder="Search for a place"></td>
            </table>


            <div id="result"></div>
        </div>


        <script>
            $(document).ready(function () {
                $('#search_text').keyup(function () {
                    var txt = $(this).val()
                    if(txt !== '')
                    {
                        $.ajax({
                            url:"fetch2.php",
                            method:"post",
                            data:{search:txt},
                            dataType:"text",
                            success:function (data) {
                                $("#result").html(data);

                            }
                        });
                    }
                    else
                    {
                        $("#result").html('');
                    }


                });

            });
        </script>


<ul id="image_gallery">

    <li>
        <div>
            <h2>COX'S BAZAR</h2>
            <a href="coxs_bazar.html"><img src="pic9.jpg" width="300px" height="250px"></a>

        </div>
    </li>


    <li>
        <div>
            <h2>BANDARBAN</h2>
            <a href="bandarban.html"><img src="pic10.jpg" width="300px" height="250px" ></a>

        </div>
    </li>


    <li>
        <div>
            <h2>SYLHET</h2>
            <a href="sylhet.html"><img src="pic11.jpg" width="300" height="250"></a>

        </div>
    </li>



    <li>
        <div>
            <h2>SITAKUNDA</h2>
            <a href="sitakunda.html"><img src="pic12.jpg" width="300" height="250"></a>

        </div>
    </li>

    <li>
        <div>
            <h2>RATARGUL</h2>
            <a href="ratargul.html"><img src="pic13.jpg"></a>
        </div>
    </li>

    <li>
        <div>
            <h2>SAINT MARTIN</h2>
            <a href="saint_martin.html"><img src="pic14.jpg" width="300" height="250"></a>
        </div>
    </li>

    <li>
        <div>
            <h2>RANGAMATI</h2>
            <a href="rangamati.html"><img src="pic15.jpg" width="300" height="250"></a>
        </div>
    </li>

    <li>
        <div>
            <h2>SUNDARBAN</h2>
            <a href="sundarban.html"><img alt="" src="pic16.jpg"/></a>
        </div>
    </li>
</ul>


</body>
</html>
