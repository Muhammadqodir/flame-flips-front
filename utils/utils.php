<?php

define('BASE_URL', 'https://abduvoitov.uz/projects/edison-ai/');

function getRoute($url)
{
  return BASE_URL . $url;
}

function route($url)
{
  echo BASE_URL . $url;
}