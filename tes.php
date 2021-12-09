<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="data.php">
        <label for="hojo"></label>
        <input id="hojo" name="hojo" type="text">
    </form>
    <div id="hasil"></div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    // ajax live search on change
    $('#hojo').on('keyup', function() {
        var hojo = $(this).val();
        $('.hehe').remove();
        $.ajax({
            url: 'data.php',
            type: 'POST',
            dataType: 'json',
            data: {
                hojo: hojo
            },
            success: function(data) {
                console.log(data);
                for (let index = 0; index < data.length; index++) {
                    $('#hasil').append('<h3 class = "hehe">' + data[index]['name'] + '</h3>');
                }
            },
            error: function(data) {
                // $('.hehe').remove();
                console.log(data);

            }
        });
    });
</script>

</html>