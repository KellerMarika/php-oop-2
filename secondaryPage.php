<?php
require_once "encodeJsonFunction.php";

$newUser = [
  "title" => "title",
  "content" => "content",
  "category" => "generic",
  "createdAt" => date('Y-m-d H:i:s'),
  "updatedAt" => "",
  "id" => uniqid()
];
encodeJsonWOW($newUser, "dbJson/users.json"); 