<?php
class file {
public $name;
public $size;
public function __construct($name,$size)
{
$this->name=$name;
$this->size=$size;
}
public static function calculateTotalsize($files){
$total=0;
foreach($files as $file){
$total+=$file->size;
}
return $total;
}
}
$file1=new file("document.txt",500);
$file2=new file("image.jpg",1200);
$file3=new file("video.mp4",3000);
$allfiles=[$file1,$file2,$file3];
$totalsize=file::calculateTotalsize($allfiles);
echo "Total File size:". $totalsize."KB";
?>