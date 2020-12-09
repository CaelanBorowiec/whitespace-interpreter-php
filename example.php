<?php
include('whitespace.inc.php');

$file = "examples/helloworld.ws";
if (file_exists($file)) {
    $code = file_get_contents($file);
} elseif (file_exists(__DIR__.'/'.$file)) {
    $code = file_get_contents(__DIR__.'/'.$file);
} else {
    exit("Could not open file: $file\n");
}

$tokenizer = new Tokenizer($code);
$interpreter = new Interpreter($tokenizer->get_tokens());
$x = $interpreter->run();
echo ($x);
