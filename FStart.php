<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">RSS Feeder Menu</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="FStart.php">Home</a></li>
                <li><a href="NasaRssReader.php">NASA Feed</a></li>
                <li><a href="IgnRssReader.php">IGN Feed</a></li>
                <li><a href="CnnRssReader.php">CNN Feed</a></li>
                <li><a href="NasaSaves.php">NASA Saves</a></li>
                <li><a href="IgnSaves.php">IGN Saves</a></li>
                <li><a href="CnnSaves.php">CNN Saves</a></li>
            </ul>
        </div>
    </nav>

    <div style="margin-top: 80px; margin-left: 36%; margin-bottom: 40px">
        <header>
            <h1>John's RSS Feeds</h1>
        </header>
    </div>

    <div>
        <h2 style="margin-left: 23%">There are three RSS feeds located in the navbar.</h2>
        <h2 style="margin-left: 22%">Choose to view the articles of NASA, IGN, or CNN!!</h2>
        <h2 style="margin-left: 16%">Feel free to save any article and view the view saved ones later!</h2>
    </div>
</body>
</html>