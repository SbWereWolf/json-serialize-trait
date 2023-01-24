<?php

use SbWereWolf\JsonSerializable\JsonSerializeTrait;

$pathParts = [__DIR__, '..', 'vendor', 'autoload.php',];
$path = implode(DIRECTORY_SEPARATOR, $pathParts);
require_once($path);

class TraitTest implements JsonSerializable
{
    use JsonSerializeTrait;

    public $publicProp = 'public class member';
    protected $protectedProp = 'protected property value';
    private $privateProp = 'privateProp';
}

echo json_encode(new TraitTest(), JSON_PRETTY_PRINT);
