<?php
    $articleName = str_replace(".", "'", $_POST["articleName"]);

    $cnnFile = simplexml_load_file("http://rss.cnn.com/rss/cnn_topstories.rss");
    $cnnFile->asXML("CnnTopStories.xml");

    if(file_exists("CnnSave.xml"))
    {
        $cnnSave = new DOMDocument();
        $cnnSave->load("CnnSave.xml");

        foreach($cnnFile->channel->item as $item)
        {
            if($item->title == $articleName)
            {
                $itemDOM = dom_import_simplexml($item);

                $cnnSave->documentElement->appendChild($cnnSave->importNode($itemDOM, true));
                break;
            }
        }
    }
    else
    {
        exit("Failed to open CnnSave.xml");
    }

    $cnnSave->save("CnnSave.xml");

    echo "<script> location.href='CnnSaves.php'; </script>";
    exit;
?>