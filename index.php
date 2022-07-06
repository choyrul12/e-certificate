<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Take Screenshots using Javascript</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Niconne&family=Pacifico&display=swap" rel="stylesheet">
    <script src="js/html2canvas.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>
        function getScreen() {
            const caption = $('#caption-input').val();
            const canva = document.getElementById("bg")
            $("#caption-text").html(caption);
            $("#panel").hide();
            html2canvas(canva, {
                dpi: 192,
                onrendered: function(canvas) {
                    $("#blank").attr('href', canvas.toDataURL("image/png"));
                    $("#blank").attr('download', caption + '.png');
                    $("#blank")[0].click();
                }
            });
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="bg" id="bg">
            <div class="caption" id="caption">
                <div id="panel">
                    <input type="text" name="caption-input" id="caption-input" placeholder="Type Your Name" value="" class="form-control" autofocus="autofocus">
                    <br>
                    <a href="javascript:getScreen();" class="btn">DOWNLOAD</a>
                    <a href="" id="blank"></a>
                </div>
                <span id="caption-text" class="border" style="text-align: center;"></span>
            </div>
        </div>
    </div>
</body>

</html>