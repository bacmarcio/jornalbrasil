<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include "Class/config.class.php";
$infoSistema = ConfigSistema::getInstance(Conexao::getInstance())->rsDados();

include "Class/metasTags.class.php";
$metastags = MetasTags::getInstance(Conexao::getInstance())->rsDados();

include "Class/textos.class.php";
$textos = Textos::getInstance(Conexao::getInstance());

include "Class/newsletters.class.php";
$newsletters = Newsletters::getInstance(Conexao::getInstance());

include "Class/blogs.class.php";
$blogs = Blogs::getInstance(Conexao::getInstance());

include "Class/categorias.class.php";
$categorias = Categorias::getInstance(Conexao::getInstance());

include "Class/paginacao.class.php";
$paginacao = Paginacao::getInstance(Conexao::getInstance());

define('SITE_URL', 'https://' . $_SERVER['HTTP_HOST']);
