<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


include "data/acesso.class.php";
$acesso = Acesso::getInstance(Conexao::getInstance());

include "data/apoiadores.class.php";
$apoiadores = Apoiadores::getInstance(Conexao::getInstance());

include "data/artigos.class.php";
$artigos = Artigos::getInstance(Conexao::getInstance());

include "data/textos.class.php";
$textos = Textos::getInstance(Conexao::getInstance());

include "data/newsletter.class.php";
$newsletters = Newsletter::getInstance(Conexao::getInstance());

include "data/categorias.class.php";
$categorias = Categorias::getInstance(Conexao::getInstance());

include "data/banners.class.php";
$banners = Banners::getInstance(Conexao::getInstance());

include "data/noticias.class.php";
$noticias = Noticias::getInstance(Conexao::getInstance());

include "data/paginacao.class.php";
$paginacao = new Paginacao($conexao, 'tbl_noticias', 100, $_GET['pagina'] ?? 1);

// Busca dos registros da página atual
$registros = $paginacao->getRegistros();



//define('SITE_URL', 'https://'.$_SERVER['HTTP_HOST'].'/projetos/thailand');
?>