<?php
spl_autoload_register(
    function(string $namespaceClasses): void {
        $caminho = "/src";
        $diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClasses);
        @include_once getcwd(). $caminho . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
    }
);