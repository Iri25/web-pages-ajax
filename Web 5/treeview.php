<?php
$directory = "TreeView";
$g = $_GET['g'];
if( $g == "0"){
    getDirectories();
}
if( $g == "1"){
    $dir = $_GET['dir'];
    if ($dir == "Proiect")
        echo "Fisier1.txt, Fisier2.txt, Fisier3.txt";
    if ($dir == "Important")
        echo "Fisier1.txt, Fisier2.txt, Fisier3.txt";
    if ($dir == "Info")
        echo "Fisier1.txt, Fisier3.txt";
}
function getNodes($directory)
{
    $result_array = array();
    $dirs = "";
    if (is_dir($directory)) {
        if ($handel = opendir($directory)) {
            while (($file = readdir($handel)) != FALSE) {
                $result_array[] = $file;
            }
            closedir($handel);
        }
    }

    foreach ($result_array as $value) {
        if (strpos($value, '.') === FALSE)
            $dirs .= $value . '<br />';
    }
    echo $dirs;
}

function getFiles($directory){
    $tx = "";
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory)) as $filename)
    {
        if ($filename->isDir()) continue;

        $tx .= $filename;
    }
    echo $tx;
}

function getDirectories(){
    echo "Info, Important, Proiect";
}

?>