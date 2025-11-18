<?php

if (isset($_GET['category'])) {
    $cat = $_GET['category'];
    $sort = $_GET['sort'];
    echo "Category: " . htmlspecialchars($cat) . "<br>";
    echo "Sort: " . htmlspecialchars($sort) . "<br>";
} else {
    echo "Nothing found !";
}



