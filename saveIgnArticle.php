<?php
    $articleName = str_replace(".", "'", $_POST["articleName"]);

    $ignFile = simplexml_load_file("http://feeds.ign.com/ign/games-all");
    $ignFile->asXML("IGNGameFeed.xml");

    if(file_exists("IgnSave.xml"))
    {
        $ignSave = new DOMDocument();
        $ignSave->load("IgnSave.xml");

        foreach($ignFile->channel->item as $item)
        {
            if($item->title == $articleName)
            {
                $itemDOM = dom_import_simplexml($item);

                $ignSave->documentElement->appendChild($ignSave->importNode($itemDOM, true));
                break;
            }
        }
    }
    else
    {
        exit("Failed to open IgnSave.xml");
    }

    $ignSave->save("IgnSave.xml");

    echo "<script> location.href='IgnSaves.php'; </script>";
    exit;
?>