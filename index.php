<?php
include_once "app/Node.php";
include_once "app/LinkList.php";

$linkedList = new LinkList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertFirst(33);
$linkedList->insertFirst(44);
$linkedList->insertFirst(55);
$linkedList->insertLast(12);
$linkedList->insertLast(13);
$linkedList->insertLast(14);
$linkedList->insertLast(15);
$linkedList->insertLast(16);
$totalNodes = $linkedList->totalNode();
$linkData = $linkedList->readList();

echo $totalNodes;
echo "<br>";
echo implode(" ", $linkData);