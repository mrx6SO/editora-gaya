<?PHP

if (!empty($_GET['c'])) {
  $file = fopen('data.txt', 'a+');
  fwrite($file, $_GET['c'] . PHP_EOL);
  fclose($file);
}
?>