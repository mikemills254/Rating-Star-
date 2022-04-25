<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Rate</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' type='text/css' media='screen' href='rate.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    </head>
<body>
        <form action="Uni.php" method="post" class="parent">
                            <i class="bi bi-star-fill star"></i>
                            <i class="bi bi-star-fill star"></i>
                            <i class="bi bi-star-fill star"></i>
                            <i class="bi bi-star-fill star"></i>
                            <span class="rate" id="ratings" name="rating"></span>
                            <br><br>
                            <input name="comment" type="text" class="rate--comments" placeholder="Add Comment..."><br><br>
                            <button class="rate--submits" type="Submit" name="submit">submit</button>
                        </form>

<script src="main.js"></script>
</body>
</html>