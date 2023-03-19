<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include "../Class/acesso.class.php";
$verificaRestrito = Acesso::getInstance(Conexao::getInstance());
$usuarios = Acesso::getInstance(Conexao::getInstance());

include "../Class/config.class.php";
$infoSistema = ConfigSistema::getInstance(Conexao::getInstance())->rsDados();
$acessosSite = ConfigSistema::getInstance(Conexao::getInstance());

include "../Class/metasTags.class.php";
$metastags = MetasTags::getInstance(Conexao::getInstance());

include "../Class/categorias.class.php";
$categorias = Categorias::getInstance(Conexao::getInstance());

include "../Class/testemunhos.class.php";
$testemunhos = Testemunhos::getInstance(Conexao::getInstance());

include "../Class/textos.class.php";
$textos = Textos::getInstance(Conexao::getInstance());

include "../Class/blogs.class.php";
$blogs = Blogs::getInstance(Conexao::getInstance());

include "../Class/galerias.class.php";
$galerias = Galerias::getInstance(Conexao::getInstance());

include "../Class/newsletters.class.php";
$newsletters = Newsletters::getInstance(Conexao::getInstance());

$verificaRestrito->restritoAdmin();
$dadosUsuarioLogado = $verificaRestrito->rsDados($_SESSION['dadosLogado']->id);

function get_url(){ 
    return $_SERVER['SCRIPT_NAME'].$_SERVER['REQUEST_URI'];
  }
  
  define('SITE_URL', 'https://'.$_SERVER['HTTP_HOST'].'/projects/gorilla');

?>
