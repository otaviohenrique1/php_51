<?php

spl_autoload_register(function(string $classname) {
  $caminho = str_replace('ScreenMatch', '/src', $classname) . '.php';
  $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $caminho);
  $caminho_completo = __DIR__ . DIRECTORY_SEPARATOR . $caminho;
  if (file_exists($caminho_completo)) {
    require_once $caminho_completo;
  }
});
