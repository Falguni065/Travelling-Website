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
        <li><a href="home2.php">HOME</a></li>
        <li><a href="#">DESTINATION</a>
            <ul>
                <li><a href="cox's_bazar.html">COX'S BAZAR</a></li>
                <li><a href="rangamati.html">RANGAMATI</a></li>
                <li><a href="sundarban.html">SUNDARBAN</a></li>
                <li><a href="bandarban.html">BANDARBAN</a></li>
                <li><a href="saint_martin.html">SAINT MARTIN</a></li>
                <li><a href="sylhet.html">SYLHET</a></li>
                <li><a href="sitakunda.html">SITAKUNDU</a></li>
                <li><a href="ratargul.html">RATARGUL</a></li>

            </ul>
        </li>
        <li><a href="member2.php">MEMBERS</a></li>
        <li><a href="#">HOTEL</a>
            <ul>
                <li><a href="cox_hotel.html">COX'S BAZAR</a></li>
                <li><a href="rang_hotel.html">RANGAMATI</a></li>
                <li><a href="sun_hotel.html">SUNDARBAN</a></li>
                <li><a href="ban_hotel.html">BANDARBAN</a></li>
                <li><a href="st_hotel.html">SAINT MARTIN</a></li>
                <li><a href="syl_hotel.html">SYLHET</a></li>
                <li><a href="sita_hotel.html">SITAKUNDU</a></li>
                <li><a href="rat_hotel.html">RATARGUL</a></li>

            </ul>
        </li>

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
        <img src="https://farm4.staticflickr.com/3909/15182329579_3f575fd1b8_b.jpg">
    </div>





    <div class="slide-1">
        <img src="http://3.bp.blogspot.com/-Cbdk7Frudng/UA0jN_YSk3I/AAAAAAAABIs/JByJ6RMwBjE/s1600/Amazing+view+of+hanging+bridge+in+Rangamati.jpg">
    </div>


    <div class="slide-1">
        <img src="http://priobangla.net/responsive/images/spot/58/4.jpg">
    </div>


    <div class="slide-1">
        <img src="https://farm1.staticflickr.com/567/20999596246_aa17fcb78a_b.jpg">
    </div>

    <div class="slide-1">
        <img src="https://c1.staticflickr.com/9/8240/8592434717_8023296e12_b.jpg">
    </div>

    <div class="slide-1">
        <img src="https://c4.staticflickr.com/8/7563/15449489624_fbdc93e7b1_b.jpg">
    </div>

    <div class="slide-1">
        <img src="https://c2.staticflickr.com/6/5483/9977838746_96648b690a_b.jpg">
    </div>
    <div class="slide-1">
        <img src="https://c2.staticflickr.com/6/5483/9977838746_96648b690a_b.jpg">
    </div>
    <div class="slide-1">
        <img src="https://farm6.staticflickr.com/5013/5570832698_d4179d850b_b.jpg">
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

        <table>
            <td id="s2">Search</td>
            <td><input type="search" name="search_text" id="search_text"></td>

        </table>

        <div id="result"></div>

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
            <a href="cox's_bazar.html"><img src=http://coxsbazar-bd.com/img/gallery/f_1.jpg width="300px" height="250px"></a>

        </div>
    </li>


    <li>
        <div>
            <h2>BANDARBAN</h2>
            <a href="bandarban.html"><img src="https://i.pinimg.com/236x/2b/aa/de/2baade3e43462c4c24d92edd97466513--bangladesh-ranges.jpg" width="300px" height="250px" ></a>

        </div>
    </li>


    <li>
        <div>
            <h2>SYLHET</h2>
            <a href="sylhet.html"><img src="https://i.pinimg.com/236x/19/ba/0d/19ba0df5b7791992c413257c94f147ef--nd-floor-bangladesh.jpg" width="300" height="250"></a>

        </div>
    </li>



    <li>
        <div>
            <h2>SITAKUNDA</h2>
            <a href="sitakunda.html"><img src="https://i.pinimg.com/236x/8b/3a/b7/8b3ab7a356e2d0c42f1aa7bb6e5058c4--bangladesh-waterfall.jpg" width="300" height="250"></a>

        </div>
    </li>

    <li>
        <div>
            <h2>RATARGUL</h2>
            <a href="ratargul.html"><img src="https://c2.staticflickr.com/6/5507/10721343194_0022c86057_b.jpg"></a>
        </div>
    </li>

    <li>
        <div>
            <h2>SAINT MARTIN</h2>
            <a href="saint_martin.html"><img src="http://media2.picsearch.com/is?qQELf5rz2w2JXeZifsbkTugH0v2nfVY9iJRvvtis0Ic&height=255" width="300" height="250"></a>
        </div>
    </li>

    <li>
        <div>
            <h2>RANGAMATI</h2>
            <a href="rangamati.html"><img src="https://2.bp.blogspot.com/-Er9hSrr3TAE/WjazFQjsGCI/AAAAAAAACNc/T7xtA8BxAyQZqyyebfeEpruDatY6P3s4ACLcBGAs/s1600/Rangamati.jpg-2.jpg" width="300" height="250"></a>
        </div>
    </li>

    <li>
        <div>
            <h2>SUNDARBAN</h2>
            <a href="sundarban.html"><img alt="" src="https://media-cdn.tripadvisor.com/media/photo-s/03/5d/e7/40/sundarban.jpg"/></a>
        </div>
    </li>
</ul>


</body>
</html>
