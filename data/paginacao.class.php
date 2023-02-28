<?php 

class Paginacao {

private $conexao;
private $tabela;
private $registrosPorPagina;
private $paginaAtual;

public function __construct($conexao, $tabela, $registrosPorPagina = 10, $paginaAtual = 1) {
  $this->conexao = $conexao;
  $this->tabela = $tabela;
  $this->registrosPorPagina = $registrosPorPagina;
  $this->paginaAtual = $paginaAtual;
}

public function getRegistros() {
  $inicio = ($this->paginaAtual - 1) * $this->registrosPorPagina;
  $query = "SELECT tbl_noticias.*, tbl_categoria.titulo as nomeCategoria FROM {$this->tabela} LEFT JOIN categorias as tbl_categoria ON tbl_noticias.categoria = tbl_categoria.id  LIMIT {$inicio}, {$this->registrosPorPagina}";
  $resultado = $this->conexao->query($query);
  return $resultado->fetchAll(PDO::FETCH_ASSOC);
}

public function getPaginacao() {
  $query = "SELECT COUNT(*) AS total FROM {$this->tabela}";
  $resultado = $this->conexao->query($query);
  $totalRegistros = $resultado->fetch(PDO::FETCH_ASSOC)['total'];
  $totalPaginas = ceil($totalRegistros / $this->registrosPorPagina);
  $paginacao = array(
    'paginaAtual' => $this->paginaAtual,
    'totalPaginas' => $totalPaginas,
    'registrosPorPagina' => $this->registrosPorPagina,
    'totalRegistros' => $totalRegistros
  );
  return $paginacao;
}

}
