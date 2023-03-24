<?php
$PaginacaoInstanciada = '';
if (empty($PaginacaoInstanciada)) {
  if (file_exists('Connection/conexao.php')) {
    require_once('Connection/con-pdo.php');
    require_once('funcoes.php');
  } else {
    require_once('../Connection/con-pdo.php');
    require_once('../funcoes.php');
  }

  class Paginacao
  {

    private $pdo = null;

    private static $Paginacao = null;

    private function __construct($conexao)
    {
      $this->pdo = $conexao;
    }



    public static function getInstance($conexao)
    {
      if (!isset(self::$Paginacao)) :
        self::$Paginacao = new Paginacao($conexao);
      endif;
      return self::$Paginacao;
    }

    private $itens_por_pagina;
    private $pagina_atual;
    private $total_itens;
    private $base_url;

    public function cria_itens($itens_por_pagina, $pagina_atual, $total_itens, $base_url)
    {
      $this->itens_por_pagina = $itens_por_pagina;
      $this->pagina_atual = $pagina_atual;
      $this->total_itens = $total_itens;
      $this->base_url = $base_url;
    }

    public function calcular_paginas()
    {
      $total_paginas = ceil($this->total_itens / $this->itens_por_pagina);
      $primeiro_item = ($this->pagina_atual - 1) * $this->itens_por_pagina;

      $dados = $this->obter_dados($primeiro_item, $this->itens_por_pagina);

      $html = '<ul class="pagination">';
      for ($i = 1; $i <= $total_paginas; $i++) {
        $html .= '<li class="page-item';
        if ($i == $this->pagina_atual) {
          $html .= ' active';
        }
        $html .= '"><a class="page-link" href="' . $this->base_url . '/' . $i . '">' . $i . '</a></li>';
      }
      $html .= '</ul>';

      return [$dados, $html];
    }

    private function obter_dados($primeiro_item, $itens_por_pagina)
    {
      $dados = array();

      $sql = "SELECT * FROM tbl_blog LIMIT :inicio, :quantidade";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':inicio', $primeiro_item, PDO::PARAM_INT);
      $stmt->bindValue(':quantidade', $itens_por_pagina, PDO::PARAM_INT);
      $stmt->execute();
      $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
      

      return $dados;
    }
  }

  $PaginacaoInstanciada = 'S';
}
