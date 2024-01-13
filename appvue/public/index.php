<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Generation</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<div id="result"></div>

<script>
    $(document).ready(function(){
        $.ajax({
            url: 'generate_array.php',
            type: 'GET',
            success: function(data) {
                $('#result').html(data);
            },
            error: function() {
                alert('Error occurred while generating array');
            }
        });
    });
</script>

</body>
</html>