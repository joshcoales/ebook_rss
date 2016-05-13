<?php
include_once 'dir/Directory.php';
include_once 'dir/File.php';
include_once 'rss/Feed.php';
include_once 'rss/Item.php';

$dirName = "store/";
if(key_exists("dir", $_GET)) {
    // TODO: Safely allow subdirectories of store/
}

$dir = \dir\Directory::loadDirectory($dirName);
$rss = \rss\Feed::fromDirectory($dir);
echo $rss->toXml();
?>