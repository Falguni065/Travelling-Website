<html>
    <head>
        <script src="jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="try1.css">



    </head>

    <body>
         <div id="search">search</div>
        <div id="crop">

            <input type="search" name="search_text" id="search_text">
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


                });

            });
        </script>
    </body>
</html>

