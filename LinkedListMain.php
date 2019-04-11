<?php
include_once('LinkedList.php');
$linkedList = new LinkedList();
$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$totalNodes = $linkedList->totalNodes();
echo "Total node: " . $totalNodes . "<br>";
$linkData = $linkedList->readList();
echo implode('-', $linkData);