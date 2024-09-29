<?php
require __DIR__ . '/../vendor/autoload.php';  // Ensure correct path to vendor/autoload.php

use PhpParser\Error;
use PhpParser\NodeDumper;
use PhpParser\ParserFactory;

if ($argc < 3) {
    echo "Usage: php parser.php <input_file.php> <output_file.txt>\n";
    exit(1);
}

$inputFile = $argv[1];
$outputFile = $argv[2];

// Check if the input file exists
if (!file_exists($inputFile)) {
    echo "Input file not found: $inputFile\n";
    exit(1);
}

// Read the code from the input file
$code = file_get_contents($inputFile);

// Create the parser for the newest supported PHP version
$parser = (new ParserFactory())->createForNewestSupportedVersion();

try {
    // Parse the PHP code into an AST
    $ast = $parser->parse($code);
} catch (Error $error) {
    echo "Parse error: {$error->getMessage()}\n";
    return;
}

// Dump the AST as a string
$dumper = new NodeDumper;
$astDump = $dumper->dump($ast) . "\n";

// Write the AST dump to the output file
file_put_contents($outputFile, $astDump);

echo "AST has been written to $outputFile\n";
