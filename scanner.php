<?php

function scanFolder($path) {
    
    // Get all files and folders inside the given path
    $items = scandir($path);

    foreach ($items as $item) {

        // Skip . (current folder) and .. (parent folder)
        if ($item === "." || $item === ".." || $item === ".git") {
            continue;
        }

        $fullPath = $path . "/" . $item;

        if (is_dir($fullPath)) {
            // It's a folder — print it and call itself again (recursion)
            echo "Folder: " . $item . "<br>";
        
            scanFolder($fullPath);

        } else {
            // It's a file — just print it
            echo "File: " . $item . "<br>";
        }
    }
}



?>