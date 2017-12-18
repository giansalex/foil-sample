<?php
require 'vendor/autoload.php';

$engine = Foil\engine([
  'folders' => ['./templates']
]);

$html = $engine->render('hello', ['name' => 'Giancarlos']);

file_put_contents('index.html', $html);