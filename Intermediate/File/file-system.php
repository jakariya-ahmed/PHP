<?php
/**  Basic File Operation * 
 * 1. fopen(),  2. fwrite(),  3. fread(),  4. unlink()
 * 
 */


// File create and write something
/*
$file = fopen("data.txt", "w");  // w=write mode(create new file which is not exists)
$text = "Hellow Jakariya!\nThis is a test file.\nThis is fun.";

fwrite($file, $text); // write data in file
fclose($file); // always close file 

*/

// File Path
$dataFile = "data.txt";
$createFile = fopen($dataFile, "w");
$logFile = "data_log.txt";
$deletedLogFile = "deleted_log.txt";

// --- Function to add a line ---
function addLine($line) {

    global $dataFile, $logFile;

   /* $fileHandle = fopen($dataFile, "a");
    fwrite($fileHandle, $line);
    fclose($fileHandle);
    */

    // Append the line to data.txt
    file_put_contents($dataFile, $line . "\n", FILE_APPEND);

    // Log this addition
    $log = date("Y-m-d H:i:s") . " - Added: " . trim($line) . "\n";
    file_put_contents($logFile, $log, FILE_APPEND);
}

// --- Function to delete the file ---
function deleteFile() {
    global $dataFile, $deletedLogFile;
    
    if (file_exists($dataFile)) {
        $content = file_get_contents($dataFile);
        
        // Log the deleted content
        $log = date("Y-m-d H:i:s") . " - Deleted Content:\n" . $content . "\n";
        file_put_contents($deletedLogFile, $log, FILE_APPEND);
        
        // Delete the file
        unlink($dataFile);
        
        echo "File deleted and logged!";
    } else {
        echo "File not found!";
    }
}

// --- Usage ---
// 1. Add a line
addLine("Updated This is a new line");
addLine("Added another line ");

// 2. Delete file
// deleteFile();

?>