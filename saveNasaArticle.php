<?php
    $articleName = str_replace(".", "'", $_POST["articleName"]);

    $nasaFile = simplexml_load_file("https://www.nasa.gov/rss/dyn/breaking_news.rss");
    $nasaFile->asXML("NasaBreakingNews.xml");

    if(file_exists("NasaSave.xml"))
    {
        $nasaSave = new DOMDocument();
        $nasaSave->load("NasaSave.xml");

        foreach($nasaFile->channel->item as $item)
        {
            if($item->title == $articleName)
            {
                $itemDOM = dom_import_simplexml($item);

                $nasaSave->documentElement->appendChild($nasaSave->importNode($itemDOM, true));
                break;
            }
        }
    }
    else
    {
        exit("Failed to open NasaSave.xml");
    }

    $nasaSave->save("NasaSave.xml");

    echo "<script> location.href='NasaSaves.php'; </script>";
    exit;
?>