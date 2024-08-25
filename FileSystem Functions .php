<?php
$file = 'example.txt';
if (file_exists($file)) {
    readfile($file);
} else {
    echo "File does not exist.\n";
}
?>


<?php
$file = 'example.txt';
if (file_exists($file)) {
    echo "File exists.\n";
} else {
    echo "File does not exist.\n";
}
?>


<?php
$source = 'example.txt';
$destination = 'example_copy.txt';
if (copy($source, $destination)) {
    echo "File copied successfully.\n";
} else {
    echo "Failed to copy file.\n";
}
?>


<?php
$oldName = 'example.txt';
$newName = 'example_renamed.txt';
if (rename($oldName, $newName)) {
    echo "File renamed successfully.\n";
} else {
    echo "Failed to rename file.\n";
}
?>


<?php
$dir = 'new_directory';
if (mkdir($dir)) {
    echo "Directory created successfully.\n";
} else {
    echo "Failed to create directory.\n";
}
?>



<?php
$dir = 'new_directory';
if (rmdir($dir)) {
    echo "Directory removed successfully.\n";
} else {
    echo "Failed to remove directory.\n";
}
?>


<?php
$file = 'example_renamed.txt';
if (unlink($file)) {
    echo "File deleted successfully.\n";
} else {
    echo "Failed to delete file.\n";
}
?>


<?php
$file = 'example.txt';
if (file_exists($file)) {
    $size = filesize($file);
    echo "File size: $size bytes.\n";
} else {
    echo "File does not exist.\n";
}
?>


<?php
$file = 'example.txt';
if (file_exists($file)) {
    $type = filetype($file);
    echo "File type: $type.\n";
} else {
    echo "File does not exist.\n";
}
?>

<?php
$file = 'example.txt';
$realPath = realpath($file);
if ($realPath) {
    echo "Real path: $realPath.\n";
} else {
    echo "File does not exist.\n";
}
?>


<?php
$file = 'example.txt';
$pathInfo = pathinfo($file);
echo "Filename: " . $pathInfo['basename'] . "\n";
echo "Directory: " . $pathInfo['dirname'] . "\n";
echo "Extension: " . $pathInfo['extension'] . "\n";
echo "Filename without extension: " . $pathInfo['filename'] . "\n";
?>


<?php
$file = '/path/to/example.txt';
$dirName = dirname($file);
echo "Directory name: $dirName.\n";
?>


<?php
$file = '/path/to/example.txt';
$baseName = basename($file);
echo "Base name: $baseName.\n";
?>


<?php
$path = 'example_directory';
if (is_dir($path)) {
    echo "$path is a directory.\n";
} else {
    echo "$path is not a directory.\n";
}
?>


<?php
$path = 'example_file.txt';
if (is_file($path)) {
    echo "$path is a file.\n";
} else {
    echo "$path is not a file.\n";
}
?>


<?php
$path = 'example_file.txt';
if (is_readable($path)) {
    echo "$path is readable.\n";
} else {
    echo "$path is not readable.\n";
}
?>


<?php
$path = 'example_file.txt';
if (is_writable($path)) {
    echo "$path is writable.\n";
} else {
    echo "$path is not writable.\n";
}
?>

<?php
$path = 'example_file.txt';
if (is_writeable($path)) {
    echo "$path is writable.\n";
} else {
    echo "$path is not writable.\n";
}
?>


<?php
$path = 'example_script.sh';
if (is_executable($path)) {
    echo "$path is executable.\n";
} else {
    echo "$path is not executable.\n";
}
?>


