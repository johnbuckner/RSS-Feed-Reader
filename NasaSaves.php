<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RSS Feed Formatter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src=""></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">RSS Feeder Menu</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="FStart.php">Home</a></li>
                <li><a href="NasaRssReader.php">NASA Feed</a></li>
                <li><a href="IgnRssReader.php">IGN Feed</a></li>
                <li><a href="CnnRssReader.php">CNN Feed</a></li>
                <li class="active"><a href="NasaSaves.php">NASA Saves</a></li>
                <li><a href="IgnSaves.php">IGN Saves</a></li>
                <li><a href="CnnSaves.php">CNN Saves</a></li>
            </ul>
        </div>
    </nav>

    <?php
        $nasaFile = simplexml_load_file("NasaSave.xml");
        
        feedStart();
        displayItems();

        function feedStart()
        {
            echo "<div style='margin-bottom: 10px; margin-top: 80px'>";
            echo "<h3 style='margin-left: 20px;'>Current NASA Saves</h3>";
            echo "<hr width='95%' color='gray'>";
            echo "<hr width='95%' color='gray'>";
            echo "</div>";
        }

        function displayItems()
        {
            global $nasaFile;

            foreach($nasaFile->item as $item)
            {
                echo "<form action='saveNasaArticle.php' method='POST'>";
                echo "<div class='container' style='margin-left: 4px; margin-bottom: 50px'>";
                    echo "<div style=''>";
                    echo "<h3><a href='$item->link'>$item->title</a><h3>";
                    echo "</div>";

                    echo "<div style=''>";
                    $sourceURL = $item->source["url"];
                    echo "<label style='color: black'>Posted:</label> <label style='color: gray'>$item->pubDate</label><a href='$sourceURL'>$item->source</a><br />";
                    echo "<label style='font-size: large; margin-bottom: 40px'><b>$item->description</b></label>";
                    echo "<hr width='100%' color='gray'>";
                    echo "</div>";
                echo "</div>";
                echo "</form>";
            }
        }
    ?>
</body>
</html>
