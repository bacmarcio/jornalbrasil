-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03/03/2023 às 22:58
-- Versão do servidor: 10.4.22-MariaDB
-- Versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pico_solar`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contadores_paginas`
--

CREATE TABLE `contadores_paginas` (
  `id` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `ip` varchar(200) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `pagina` int(11) DEFAULT NULL,
  `id_campanha` int(11) DEFAULT NULL,
  `veio_de_onde` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `postado_por` varchar(250) DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `breve` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `foto1` varchar(250) DEFAULT NULL,
  `url_amigavel` text DEFAULT NULL,
  `descricao_imagem` varchar(250) DEFAULT NULL,
  `legenda_imagem` varchar(250) DEFAULT NULL,
  `embed` varchar(150) DEFAULT NULL,
  `pdf` varchar(150) DEFAULT NULL,
  `audio` varchar(150) DEFAULT NULL,
  `ativo` enum('S','N') DEFAULT 'N',
  `principal` enum('S','N') DEFAULT 'N',
  `destaque` enum('S','N') DEFAULT 'N',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `titulo`, `postado_por`, `conteudo`, `foto`, `breve`, `meta_title`, `meta_keywords`, `meta_description`, `foto1`, `url_amigavel`, `descricao_imagem`, `legenda_imagem`, `embed`, `pdf`, `audio`, `ativo`, `principal`, `destaque`, `created_at`, `updated_at`) VALUES
(7, 'Diferenças entre a energia solar térmica e a fotovoltaica', 'Pico Solar', '<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">A energia solar cresce em ritmo progressivo, sendo considerada, hoje, uma das fontes mais usadas de energias renováveis, podendo ser utilizada tanto em indústrias como em residências. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">O que é energia solar</span></span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">A energia solar é a energia gerada a partir da luz do sol e que pode ser aproveitada por diferentes tecnologias, como: aquecimento solar, energia solar fotovoltaica e energia heliotérmica.</span></span></span></p>\r\n\r\n<h6 dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">É uma energia: </span></span></h6>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Alternativa </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Renovável </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Sustentável </span></span></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\"><strong>Alternativa:</strong> que vem de várias fontes de energia renováveis, como: </span></span></span></p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Energia solar </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Eólica </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Hídrica (ou hidráulica) </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Geotérmica.</span></span></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\"><strong>Renovável:</strong> obtida de recursos naturais que são naturalmente reabastecidos, como: </span></span></span></p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Chuva</span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Sol </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Marés </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Vento </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Energia Geotérmica. </span></span></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\"><strong>Sustentável:</strong> é a energia elétrica obtida de fontes renováveis e gerada sem grandes impactos ao meio ambiente, como: emissão de gases ou agravamento dos impactos ambientais.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">Características da energia solar</span></span></h5>\r\n\r\n<h6 dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">Além das já citadas, as outras características da energia solar são:</span></span></h6>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Não gera resíduos, por isso, energia limpa</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">É uma fonte de energia gratuita</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Gera economia de mais de 90% na conta de luz</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Possui vida útil de mais de 20 anos, com pouca ou nenhuma manutenção.</span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">A energia do sol é considerada inesgotável e incomparável com todas as outras fontes de energia, pela qualidade e capacidade ilimitada de fornecimento. </span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">O conceito de energia solar confunde-se com o da energia fotovoltaica, que é a geração de energia elétrica usando a luz do sol como fonte. Podendo-se dizer serem a mesma coisa.</span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Na energia solar fotovoltaica, a luz do sol é captada por painéis solares e transformada em corrente elétrica. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">A energia solar térmica</span></span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">A energia solar térmica usa o sol para aquecer fluidos e costuma ser usada para aquecer ambientes ou processos industriais. É extremamente eficiente e reduz o consumo de energia em aproximadamente 80%.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">A energia solar fotovoltaica</span></span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Em um sistema fotovoltaico, as células de silício dos painéis geram corrente elétrica ao serem expostas ao sol. Esta energia é tratada por equipamentos elétricos, para que ela fique com as características certas para o consumo.</span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">O sistema solar fotovoltaico é composto por:</span></span></p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Painéis solares</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Inversor Solar</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Sistema de fixação das placas solares</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Cabeamentos</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Conectores, etc.</span></span></span></li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Em conclusão, a energia solar térmica é destinada ao aquecimento e a energia solar fotovoltaica vai gerar eletricidade. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">Como usar </span></span></h5>\r\n\r\n<h6 dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">Existem inúmeras formas de aproveitamento da energia solar, são elas:</span></span></h6>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Aquecimento de água</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Geração de energia elétrica</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Iluminação pública</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Sistemas de uso coletivo, tais como geração de energia elétrica para escolas, postos de saúde e centros comunitários.</span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">A Pico Solar conta com tecnologia de ponta, profissionais altamente qualificados, instalação rápida e projetos individualizados. </span></span></span><br />\r\n </p>\r\n', '1610051681.6-foto-N.jpg', 'Você sabe o que diferencia cada uma das fontes mais usadas de energia solar? Confira o post para saber mais.', 'Diferenças entre a energia solar térmica e a fotovoltaica - Pico Solar | (61) 98296-5547', '', 'A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia. ', NULL, 'diferencas-entre-energia-solar-termica-fotovoltaica', '', '', NULL, NULL, NULL, 'N', 'N', 'N', '2023-03-01 18:01:19', '2023-03-01 18:01:19'),
(8, 'Reciclagem de placas solares ', 'Pico Solar', '<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">As fontes alternativas de geração de energia têm ganhado bastante importância nos últimos anos. Uma destas alternativas é a energia solar, fonte sustentável, limpa e inesgotável, além de gerar baixo impacto ambiental comparado a outras fontes de energia. </span></span></span></p>\r\n\r\n<p> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\">Materiais que compõem a placa solar</span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">A coleta dessa energia vinda do sol e a sua conversão em energia elétrica são feitas através das placas fotovoltaicas, que são placas solares feitas de polímeros plásticos, alumínio, silício, cobre, prata, estanho, zinco e chumbo. Materiais nobres com alto valor de mercado. </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Após o período de vida útil, uma vez que esses painéis solares tem cerca de 25 a 35 anos de funcionamento perfeito (e alguns modelos podem chegar aos 40 anos), as placas e seus componentes podem ser quase que totalmente reciclados, ao invés de se tornarem resíduos de lixo eletrônico. </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">A reciclagem é a última etapa para o ciclo sustentável da energia solar e o seu custo é considerado bastante baixo, além da eficiência de recuperação dos materiais ser satisfatória.</span></span></span></p>\r\n\r\n<p> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\">A vida útil das placas solares</span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Como dissemos acima, a média é de 30 anos de vida útil dos painéis fotovoltaicos, mas a maioria dos fabricantes afirma ocorrer uma diminuição de 20% na capacidade de energia por volta dos 25 anos.</span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">É comum ocorrer uma queda de 6 a 8% após 20 anos de uso das placas, mas o tempo de utilização, de forma eficiente, é muito maior do que o afirmado pelos fabricantes. Aqueles de alta qualidade podem chegar aos 30 a 40 anos e continuarem funcionando normalmente, embora com eficácia decrescente.</span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\"> </span></span><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\"> </span></span></span></p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\">A legislação</span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">No Brasil, acordos estão sendo feitos para que haja o correto descarte dos painéis fotovoltaicos, a fim de que a expansão do mercado de energia solar cresça de forma consistente e equilibrada. </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Especialistas do setor estudam a criação de uma nova lei que classifique os resíduos fotovoltaicos como especiais, além da implementação e fiscalização pelo IBAMA. </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">No momento, a lei 12.305/2010 trata da política nacional de resíduos sólidos e os resíduos de painéis fotovoltaicos ainda se enquadram na classificação geral de resíduos. Existe uma única exceção onde são definidos como lixo eletrônico, na Diretiva de Resíduos de Equipamentos Elétricos e Eletrônicos. </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Os fabricantes de placas solares estão obrigados por lei a cumprir requisitos legais específicos e padrões de reciclagem para garantir que os painéis não se tornem um fardo para o meio ambiente.</span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Outras leis falam de isenções de impostos e compensação de energia solar.</span></span></span></p>\r\n\r\n<p> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\">A reciclagem </span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">O processo de reciclagem traz uma série de benefícios para o meio ambiente. Por meio dele, grandes quantidades de plástico, metais e vidro podem ser recuperados e reinseridos na composição de novos produtos. Isso significa que o processo seria ainda mais sustentável e ecológico.</span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">De acordo com o programa da Agência Internacional de Energia Renovável (IRENA), até 2050 os painéis fotovoltaicos poderão ser reciclados e recuperados em cerca de 2 milhões de unidades.  </span></span></span></p>\r\n\r\n<h5 dir=\"ltr\"> </h5>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\">Existem dois processos utilizados para a reciclagem de placas solares: </span></h5>\r\n\r\n<ul dir=\"ltr\" style=\"margin-left:40px\">\r\n	<li><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Térmico </span></span></span></li>\r\n	<li><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Mecânico.</span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\"> </span></span></span></p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\">Reciclagem térmica</span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Essa técnica de reciclagem é baseada no tratamento térmico e envolve a queima. É aplicável à 80% do painel. </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Após isso, diferentes processos químicos são realizados para remover a camada anti-reflexo e separar os contatos de metal. As borrachas de silicone também podem ser reutilizadas e, inclusive, recicladas mais de uma vez.</span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\"> </span></span></span></p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\">Reciclagem mecânica</span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Esta segunda técnica consiste em moer todo o painel transparente de sua estrutura e aplicar processos químicos. O material é triturado e depois processado. A reciclagem mecânica é realizada em usinas de reciclagem.</span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\"> </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">A Pico Solar conta com tecnologia de ponta, profissionais altamente qualificados, instalação rápida e projetos individualizados. </span></span></span></p>\r\n', '1610395954.4-foto-N.jpg', 'Você sabe como funciona a tecnologia para a reciclagem de painéis solares? Confira o post para saber mais.', 'Reciclagem de placas solares  - Pico Solar  | (61) 98296-5547', '', 'A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia.', NULL, 'reciclagem-placas-solares', '', '', NULL, NULL, NULL, 'N', 'N', 'N', '2023-03-01 18:01:19', '2023-03-01 18:01:19'),
(9, 'Métodos de obtenção de energia solar', 'Pico Solar', '<h5 dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\">Os principais benefícios da energia solar</span></span></h5>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Os sistemas de geração de energia solar utilizam energia limpa e renovável do sol, transformada em energia elétrica. Painéis solares ajudam a evitar e combater as emissões de gases do efeito estufa e, a longo prazo, reduzir drasticamente a nossa dependência de combustíveis fósseis, como o petróleo.</span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><strong><span style=\"font-size:18px\">Em  comparação:</span></strong></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Um sistema fotovoltaico de 6kWp seria equivalente a 10 campos de futebol em árvores, ou a água de 6 piscinas olímpicas, ou 79 toneladas de carvão queimado, ou 500.000 km rodados de gasolina.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\">Os métodos de obtenção da energia fotovoltaica podem ser classificados em: </span></span></h5>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Diretos ou indiretos </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Passivos ou ativos.</span></span></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\">A classificação da energia solar</span></span></h5>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><strong><span style=\"font-size:18px\">Primária ou secundária </span></strong></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">A energia solar é energia primária, porque não precisa ser transformada ou convertida, para funcionar. As fontes de energia primária consistem em toda forma de energia vinda da natureza, como a luz do sol.</span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">E elas não necessitam de outra alternativa para a sua geração energética. Por isso, seu custo-benefício já sai na frente de muitas outras fontes, em virtude da economia e simplicidade no processo de produção de energia.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\">A produção de energia solar quando não tem sol</span></span></h5>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Os painéis solares também funcionam em dias nublados e chuvosos, já que mesmo nessas condições, há incidência de raios violetas. A produção varia em dias cinzentos, mas não deixa de existir. </span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">À noite, não há captação, mas o armazenamento de energia é feito por meio de baterias.</span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Em conclusão, a energia solar é captada dos raios ultravioleta e não do calor do sol, mas, quando há incidência solar o rendimento é bem maior. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\">A expertise de um profissional</span></span></h5>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">É necessário que um profissional avalie a média de insolação da região onde será feita a instalação e calcule a capacidade energética. Com isso, será possível evitar um baixo desempenho em dias nublados ou chuvosos, já que o cálculo será feito com base na posição do sol, no índice solar durante o ano e na duração do dia.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\">Sistemas Diretos e Indiretos</span></span></h5>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><strong><span style=\"font-size:18px\">Direto</span></strong></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Os métodos diretos são aqueles que precisam de apenas uma etapa para obter a energia do sol e transformá-la em elétrica. </span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Exemplo: Energia Solar Fotovoltaica, a energia solar é obtida quando atinge uma célula fotovoltaica, criando eletricidade.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><strong><span style=\"font-size:18px\">Indireto</span></strong></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Os métodos indiretos são os que precisam de duas ou mais etapas para converter a energia solar em energia utilizável. </span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Exemplo: Energia heliotérmica, a energia solar atinge os espelhos refletores, que concentram o calor em um tubo a vácuo, por onde passa água e esta é transformada em vapor, alimentando uma turbina que gera energia elétrica.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\">Sistema Passivos e Ativos de Energia Solar</span></span></h5>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><strong><span style=\"font-size:18px\">Passivo</span></strong></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Os sistemas passivos de energia solar são normalmente diretos. </span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Exemplo: uma estufa que transfere o calor do sol para o ar, mantendo o ambiente quente. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><strong><span style=\"font-size:18px\">Ativo</span></strong></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Os sistemas ativos de energia solar funcionam com o auxílio de dispositivos mecânicos para melhorar o desempenho da coleta da energia solar. </span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Exemplo: sistema de aquecimento solar que utiliza uma bomba para forçar a circulação de água. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">A energia solar é uma das alternativas mais econômicas e sustentáveis, contando com instalação simples e manutenção mínima. E com anos e anos de vida útil.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">A Pico Solar conta com tecnologia de ponta, profissionais altamente qualificados, instalação rápida e projetos individualizados. </span></span></span></p>\r\n\r\n<p> </p>\r\n', '1610396143.29-foto-N.jpg', 'Você sabe quais são os métodos de obtenção de energia solar? Confira o post para saber mais.', 'Métodos de obtenção de energia solar - Pico Solar | (61) 98296-5547', '', 'A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia.', NULL, 'metodos-obtencao-energia-solar', '', '', NULL, NULL, NULL, 'N', 'N', 'N', '2023-03-01 18:01:19', '2023-03-01 18:01:19'),
(10, 'Conhecendo o conceito Net Metering', 'Pico Solar', '<p dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">O que sobra da sua energia fotovoltaica transformada em créditos.</span></span></span></p>\r\n\r\n<p> </p>\r\n\r\n<p><br />\r\n<span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">O Brasil vem criando oportunidades para aumentar a popularidade e conhecimento da energia fotovoltaica no âmbito da energia nacional. Atualmente, já somos mais familiarizados com os conceitos de energias alternativas, e muitas residências já fazem uso dessas tecnologias. </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Nesse segmento, surge o <em>net metering</em>: traduzido como <strong>Sistema de Compensação de Energia</strong>, ele incentiva o uso de fontes de energias renováveis seguindo um sistema que permite que a energia excedente da que foi absorvida, e não utilizada, seja transformada em créditos que servem de descontos no consumo da energia elétrica em uma residência, por exemplo. </span></span></span></p>\r\n\r\n<p> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#999999\"> <span style=\"font-family:Open Sans,sans-serif\">Como funciona?</span> </span></h5>\r\n\r\n<p dir=\"ltr\"> </p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Essa energia que sobra é injetada na rede distribuidora, que armazena esse excedente tal qual uma bateria. O momento em que a energia injetada for maior que a energia consumida, é quando o consumidor recebe o crédito em energia, que pode ser usado para diminuir o consumo em termos de tarifa e, se ainda sobrarem créditos, podem ser usados para abastecer outra propriedade.</span></span></span></p>\r\n\r\n<p> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:14px\"><span style=\"font-family:Open Sans,sans-serif\">Por que contar com o Net Metering?</span></span></span></h5>\r\n\r\n<p dir=\"ltr\"> </p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Ao proporcionar mais autonomia ao consumidor, a compensação de energia torna o usuário menos dependente das distribuidoras de energia convencionais.<br />\r\nAlém de causar menos impacto ao meio ambiente, por fazer uso de uma energia renovável e ilimitada, o fator mais estimulante é enxergar o <em>net metering</em> como um investimento. </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Sabendo que existe a possibilidade de uso dos créditos extras em outras residências, a economia financeira é real e contábil. A TUST e a TUSD, tarifas pagas na compra da energia elétrica diretamente dos agentes de comercialização ou de geração no mercado livre de energia elétrica, podem ser reduzidas em até metade de seus valores quando usadas por instalações que geram sua própria energia. O net metering é vantajoso para residências, indústrias e comércio.</span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">É bom destacar que os créditos são em quilowatts-hora, e não em dinheiro. A forma de fazer economia é em termos de energia; quando o consumidor da compensação de energia possui imóveis na mesma titularidade, pode transferir esses créditos para a sua rede, desde que façam parte da mesma distribuidora de energia pública.</span></span></span></p>\r\n\r\n<p> </p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Aos poucos as alternativas em energia se mostram mais presentes no Brasil, apresentando benefícios e resultados positivos.</span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Aqui na Pico Solar, nossos profissionais estão prontos e qualificados para te ajudar no processo de investir em economia e independência energética.</span></span></span></p>\r\n', '1615475970.64-foto-N.jpg', 'Você conhece o termo Net Metering e suas vantagens? Confira o post para saber mais.', 'Conhecendo o conceito Net Metering - Pico Solar  | (61) 98296-5547', '', 'A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia. ', NULL, 'conhecendo-conceito-net-metering', '', '', NULL, NULL, NULL, 'N', 'N', 'N', '2023-03-01 18:01:19', '2023-03-01 18:01:19');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_cargo`
--

CREATE TABLE `tbl_cargo` (
  `id` int(11) NOT NULL,
  `cargo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tbl_cargo`
--

INSERT INTO `tbl_cargo` (`id`, `cargo`) VALUES
(1, 'Lider Comercial'),
(2, 'Consultor'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `url_amigavel` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_cliente`
--

CREATE TABLE `tbl_cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `telefone` varchar(40) DEFAULT NULL,
  `sexo` varchar(2) DEFAULT NULL,
  `senha` varchar(80) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `endereco` varchar(250) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `id_cidade` int(11) DEFAULT NULL,
  `bairro` varchar(250) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `complemento` varchar(250) DEFAULT NULL,
  `cpf` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_config`
--

CREATE TABLE `tbl_config` (
  `id` int(11) NOT NULL,
  `id_campanha` int(11) DEFAULT NULL,
  `favicon` varchar(250) DEFAULT NULL,
  `facebook` varchar(250) DEFAULT NULL,
  `twitter` varchar(250) DEFAULT NULL,
  `instagram` varchar(250) DEFAULT NULL,
  `youtube` varchar(250) DEFAULT NULL,
  `linkedln` varchar(250) DEFAULT NULL,
  `nome_empresa` varchar(250) DEFAULT NULL,
  `telefone1` varchar(40) DEFAULT NULL,
  `telefone2` varchar(40) DEFAULT NULL,
  `email1` varchar(250) DEFAULT NULL,
  `email2` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tbl_config`
--

INSERT INTO `tbl_config` (`id`, `id_campanha`, `favicon`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedln`, `nome_empresa`, `telefone1`, `telefone2`, `email1`, `email2`) VALUES
(1, NULL, '1609955165.1366-favicon-N.png', 'https://www.facebook.com/picosolardf', '', 'https://www.instagram.com/picosolar/', '', 'https://www.linkedin.com/company/hooglimkt/', 'Pico Solar', '(61) 98296-5547', '', 'contato@picosolar.com.br', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_contato`
--

CREATE TABLE `tbl_contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `telefone` varchar(40) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_frases`
--

CREATE TABLE `tbl_frases` (
  `id` int(11) NOT NULL,
  `frase` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tbl_frases`
--

INSERT INTO `tbl_frases` (`id`, `frase`) VALUES
(1, 'Levanta, sacode a poeira, dá a volta por cima.'),
(2, 'Nem todos os dias são bons, mas há algo bom em cada dia.'),
(3, 'Suba o primeiro degrau com fé. Não é necessário que você veja toda a escada, apenas dê o primeiro passo.'),
(4, 'Toda manhã você tem duas escolhas: continuar dormindo com seus sonhos ou acordar e persegui-los!'),
(5, 'A cada novo dia, a cada momento, temos a nossa disposição a maravilhosa possibilidade do encontro, que traz em si infinitas oportunidades. Precisamos apenas estar atentos.'),
(6, 'O otimismo é a fé em ação. Nada se pode levar a efeito sem otimismo.'),
(7, 'A sua irritação não solucionará problema algum. O seu mau humor não modifica a vida. Não estrague o seu dia.'),
(8, 'Vamos inventar o amanhã no lugar de se preocupar com o que aconteceu ontem.'),
(9, 'As pessoas mais felizes não têm as melhores coisas. Elas sabem fazer o melhor das oportunidades que aparecem em seus caminhos.'),
(10, 'Ninguém, além de você, está no controle de sua felicidade. Portanto, ajuste as velas e corrija e rumo.'),
(11, '“A arte de ser ora audacioso, ora prudente, é a arte de vencer”. (Napoleão Bonaparte)'),
(12, '“Não somos responsáveis apenas pelo que fazemos, mas também pelo que deixamos de fazer”. (Moliere)'),
(13, '“Um negócio nunca é bom se com ele conseguimos um inimigo”. (Hugh Prather)'),
(14, '“Se você quiser ir daqui para lá no mundo dos negócios, não encontrará nenhuma linha reta para levá-lo”. (William Ahmanson)'),
(15, '“Existe o risco que você jamais pode correr. Existe o risco que você jamais pode deixar de correr”. (Peter Drucker)'),
(16, '“A qualidade do seu trabalho tem tudo a ver com a qualidade da sua vida”. (Orison Swett Marden)'),
(17, '“Nunca se esqueça de um cliente; e nunca deixe que um cliente esqueça você”. (Walter Reuther)'),
(18, '“Persistência é irmã gêmea da excelência. Uma é mãe da qualidade, a outra a mãe do tempo”. (Marabel Morgan)'),
(19, '“Comemore os seus sucessos. Veja com humor os seus fracassos”. (Sam Walton)'),
(20, '“É tentando o impossível que se chega à realização do possível”. (Henri Barbusse)'),
(21, '“Toda empresa precisa ter gente que erra, que não tem medo de errar e que aprende com erro”. (Bill Gates)'),
(22, '“Aquele que pretende ser um líder tem que ser uma ponte”. (Provérbio Galês)'),
(23, '“Muda tuas ideias e mudarás teu mundo”. (Norman Vincent Peale)'),
(24, '“As pessoas estão atentas a você. A qualidade está no seu coração”. (Steven Leonard Jr.)'),
(25, '“Nossa paciência conquistará mais do que a nossa força”. (Edmund Burke)'),
(26, '“Se os clientes não estão reclamando você está perdendo a oportunidade de ser melhor”. (Karl Albrecht)'),
(27, '“Você pode mudar sem crescer, mas não pode crescer sem mudar”. (Larry Wilson)'),
(28, '“Você não crescerá a não ser que tente algo além daquilo que já domina”. (Ronald Osborn)'),
(29, '“Tudo o que você sempre quis está do outro lado do seu medo”. (George Addair)'),
(30, '“Nada contribui tanto para clarear a mente do que um objetivo claro”. (Marry W. Shelley)'),
(31, '“Só serão felizes aqueles que procurarem e encontrarem um meio de servir”. (Albert Schweitzer)'),
(32, '“O mais corajoso dos atos ainda é pensar com a própria cabeça”. (Coco Chanel)'),
(33, '“Nada que valha a pena acontece a alguém exceto o resultado do trabalho árduo”. (Booker T. Washington)'),
(34, '“A melhor forma de ter clientes para sempre é oferecer a eles um negócio irrecusável”. (Don Peppers)'),
(35, '“Mestre não é quem sempre ensina, mas quem de repente aprende”. (João Guimarães Rosa)'),
(36, '“Espíritos grandiosos sempre encontraram oposição violenta de mentes medíocres”. (Albert Einstein)'),
(37, '“A busca da qualidade é um estado de espírito”. (Cesare Romiti)'),
(38, '“É importante aprender a não se aborrecer com opiniões diferentes das suas”. (Bertrand Russell)'),
(39, '“Ter problemas na vida é inevitável. Ser derrotado por eles é opcional”. (Roger Crowford)'),
(40, '“Você nunca pode atravessar o oceano até que você tenha coragem de perder de vista a costa”. (Cristóvão Colombo)'),
(41, '“Toma conta do teu negócio ou ele tomará conta de ti”. (Benjamin Franklin)'),
(42, '“Combata a mediocridade – em si e nos outros”. (Claus Moller)'),
(43, '“Lembre-se que não conseguir o que você quer é algumas vezes um lance de sorte”. (Dalai Lama)'),
(44, '“Você pode tudo se tiver entusiasmo”. (Henry Ford)'),
(45, '“O insucesso é uma oportunidade para recomeçar com mais inteligência”. (Henry Ford)'),
(46, '“Escreva algo que valha a pena ler, ou faça alguma coisa que valha a pena escrever”. (Benjamin Franklin)'),
(47, '“É preciso ter dúvidas. Só os estúpidos têm uma confiança absoluta em si mesmos”. (Orson Welles)'),
(48, '“Tudo tem beleza. Mas nem todos podem ver”. (Confúcio)'),
(49, '“Use bom senso em todas as situações; não espere por regras novas, pois não virão”. (Manual da Nordstrom)'),
(50, '“Todo mundo tem talento, é só uma questão de se mexer até descobrir qual”. (George Lucas)');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_metas_tags`
--

CREATE TABLE `tbl_metas_tags` (
  `id` int(11) NOT NULL,
  `meta_title_principal` text DEFAULT NULL,
  `meta_keywords_principal` text DEFAULT NULL,
  `meta_description_principal` text DEFAULT NULL,
  `meta_title_blog` text DEFAULT NULL,
  `meta_keywords_blog` text DEFAULT NULL,
  `meta_description_blog` text DEFAULT NULL,
  `meta_title_contato` text DEFAULT NULL,
  `meta_keywords_contato` text DEFAULT NULL,
  `meta_description_contato` text DEFAULT NULL,
  `meta_title_parceria` text DEFAULT NULL,
  `meta_keywords_parceria` text DEFAULT NULL,
  `meta_description_parceria` text DEFAULT NULL,
  `meta_title_sobre` text DEFAULT NULL,
  `meta_keywords_sobre` text DEFAULT NULL,
  `meta_description_sobre` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tbl_metas_tags`
--

INSERT INTO `tbl_metas_tags` (`id`, `meta_title_principal`, `meta_keywords_principal`, `meta_description_principal`, `meta_title_blog`, `meta_keywords_blog`, `meta_description_blog`, `meta_title_contato`, `meta_keywords_contato`, `meta_description_contato`, `meta_title_parceria`, `meta_keywords_parceria`, `meta_description_parceria`, `meta_title_sobre`, `meta_keywords_sobre`, `meta_description_sobre`) VALUES
(1, 'Pico Solar | Energia Solar em Brasília -DF | (61) 98296-5547', '', 'A Pico Solar fornece soluções completas em Energia Solar em Brasília - DF. Energia  renovável, limpa e inesgotável. Energia solar convertida em economia.', 'Blog - Pico Solar | Energia Solar em Brasília -DF | (61) 98296-5547', '', 'O Blog da Pico Solar traz informações importantes sobre a utilização da Energia Solar  em Brasília - DF', 'Contato - Pico Solar | Energia Solar em Brasília -DF | (61) 98296-5547', '', 'Fale com a Pico Solar para saber mais sobre as soluções em painéis de energia solar em Brasilia -DF', 'Pico Solar | Luz convertida em economia | (61) 98296-5547', '', 'A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia. ', 'Quem Somos - Pico Solar | Energia Solar em Brasília -DF | (61) 98296-5547', '', 'A Pico Solar surgiu para oferecer aos consumidores de Brasília - DF a oportunidade de economizar no custo da energia elétrica.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_newsletter`
--

CREATE TABLE `tbl_newsletter` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`id`, `nome`, `email`) VALUES
(1, 'Jane Smith', 'jane@boss.com.br');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_textos`
--

CREATE TABLE `tbl_textos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `texto` text DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `pagina_referencia` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tbl_textos`
--

INSERT INTO `tbl_textos` (`id`, `titulo`, `descricao`, `texto`, `foto`, `meta_title`, `meta_keywords`, `meta_description`, `pagina_referencia`) VALUES
(1, 'Sobre Nós', '', '<p><span style=\"font-size:20px\"><span style=\"font-family:Open Sans,sans-serif\">A Pico Solar surgiu para oferecer aos consumidores a oportunidade de economizar no custo da energia elétrica, possibilitando a instalação de um sistema particular de geração de energia solar. </span></span><br />\r\n </p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"font-family:Open Sans,sans-serif\">A independência energética é o que todos buscam: empresas, residências, áreas rurais, indústrias e agronegócio, todos podem se beneficiar.</span></span></p>\r\n', '1610391857.93-foto-N.jpg', 'Pico Solar | Luz convertida em economia | (61) 98296-5547', '', 'A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia. ', 'Sobre'),
(4, 'Quem Somos Rodapé', '', '<p><span style=\"font-size:14px\"><span style=\"font-family:Open Sans,sans-serif\">A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia. </span></span></p>\r\n', '1607956555.72-foto-N.png', 'Pico Solar | Luz convertida em economia | (61) 98296-5547', '', 'A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia. ', 'Sobre Rodapé'),
(13, 'Com energia solar, você tem muito mais economia', '', '<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa, inesgotável</span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">e com inúmeros benefícios.</span></span></p>\r\n', '', 'Pico Solar | Luz convertida em economia | (61) 98296-5547', '', 'A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia. ', 'Principal'),
(14, 'Como funciona a geração de Energia Solar', '', '<p style=\"text-align:justify\"><span style=\"font-size:18px\">O sistema de geração de energia solar utiliza os painéis solares para captar a energia, que é enviada em corrente contínua via cabos para o inversor, transformando a energia em corrente alternada e que atende o consumo. O excedente de energia gerado durante o dia é enviado para a rede elétrica, gerando créditos que podem ser gastos à noite ou em dias em que o consumo esteja maior.</span></p>\r\n', '1610459209.74-foto-N.png', 'Pico Solar | Luz convertida em economia | (61) 98296-5547', '', 'A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia. ', 'Principal'),
(15, 'Simulador Solar', '', '<p><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Descubra quanto você pode economizar instalando um sistema de geração solar. Simule qual o sistema fotovoltaico adequado para você e quanto você ganhará por adotar essa revolução.</span></span></p>\r\n', '1608314673.81-foto-N.jpg', 'Pico Solar | Luz convertida em economia | (61) 98296-5547', '', 'A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia. ', 'Principal'),
(17, 'O Que Oferecemos', '', '<p><span style=\"color:#ffffff\"><span style=\"font-size:22px\"><span style=\"font-family:Open Sans,sans-serif\">A Pico Solar surgiu para oferecer aos consumidores a oportunidade de economizar no custo da energia elétrica, possibilitando a instalação de um sistema particular de geração de energia solar.</span></span></span></p>\r\n', '1610388303.7-foto-N.jpg', 'Pico Solar | Luz convertida em economia | (61) 98296-5547', '', 'A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia. ', 'Principal'),
(18, 'Blog', '', '<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">A energia solar é uma das opções mais inteligentes de fonte de energia e que é capaz de criar uma realidade mais sustentável. Quer saber mais sobre isso? Confira o nosso Blog.</span></span></p>\r\n\r\n<p style=\"text-align:center\"> </p>\r\n', '', 'Pico Solar | Luz convertida em economia | (61) 98296-5547', '', 'A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia. ', 'Principal'),
(19, 'Quer economizar nas suas contas de luz?', '', '<p><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Fale com a Pico Solar para saber mais sobre as soluções em painéis de energia alternativa, renovável, limpa e inesgotável.</span></span></p>\r\n', '', 'Pico Solar | Luz convertida em economia | (61) 98296-5547', '', 'A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia. ', 'Contato'),
(20, 'Nosso Trabalho', '', '<p><span style=\"font-size:20px\"><span style=\"font-family:Open Sans,sans-serif\">A Pico Solar se insere como uma alternativa para a geração da sua própria necessidade energética, trazendo</span></span><span style=\"font-size:20px\"><span style=\"font-family:Open Sans,sans-serif\"> preços acessíveis ao público. </span></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"font-family:Open Sans,sans-serif\">O objetivo maior é levar o conhecimento da energia renovável diretamente ao cliente, explicando o funcionamento do sistema e o porquê de investir na tecnologia de energia solar. </span></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"font-family:Open Sans,sans-serif\">A  gestão da empresa é feita por uma equipe  com bastante experiência e formação de alto nível, possuidora de grande conhecimento nesse ramo. </span></span></p>\r\n', '1610391873.32-foto-N.jpg', 'Pico Solar | Luz convertida em economia | (61) 98296-5547', '', 'A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia. ', 'Sobre');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `telefone` varchar(250) DEFAULT NULL,
  `endereco` varchar(250) DEFAULT NULL,
  `cpf` varchar(100) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `id_cargo` int(11) DEFAULT NULL,
  `sexo` varchar(2) DEFAULT NULL,
  `perm_cad_usuario` varchar(2) DEFAULT NULL,
  `perm_relatorio` varchar(2) DEFAULT NULL,
  `perm_add_usuario` varchar(2) DEFAULT NULL,
  `perm_edit_usuario` varchar(2) DEFAULT NULL,
  `perm_del_usuario` varchar(2) DEFAULT NULL,
  `perm_cad_contato` varchar(2) DEFAULT NULL,
  `perm_edit_contato` varchar(2) DEFAULT NULL,
  `perm_del_contato` varchar(2) DEFAULT NULL,
  `perm_edit_contato_nf` varchar(3) DEFAULT NULL,
  `perm_pag_principal_rm` varchar(2) DEFAULT NULL,
  `perm_pag_principal_uc` varchar(2) DEFAULT NULL,
  `admin_geral` varchar(2) DEFAULT NULL,
  `data_frase` date DEFAULT NULL,
  `id_frase` int(11) DEFAULT NULL,
  `frase_lida` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `nome`, `email`, `telefone`, `endereco`, `cpf`, `login`, `senha`, `foto`, `id_cargo`, `sexo`, `perm_cad_usuario`, `perm_relatorio`, `perm_add_usuario`, `perm_edit_usuario`, `perm_del_usuario`, `perm_cad_contato`, `perm_edit_contato`, `perm_del_contato`, `perm_edit_contato_nf`, `perm_pag_principal_rm`, `perm_pag_principal_uc`, `admin_geral`, `data_frase`, `id_frase`, `frase_lida`) VALUES
(1, 'Administrador', 'adm@adm.com', NULL, NULL, NULL, 'admin', '1234', NULL, NULL, 'M', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S', NULL, '2023-01-27', 44, 'N');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `contadores_paginas`
--
ALTER TABLE `contadores_paginas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbl_cargo`
--
ALTER TABLE `tbl_cargo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbl_contato`
--
ALTER TABLE `tbl_contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbl_frases`
--
ALTER TABLE `tbl_frases`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbl_metas_tags`
--
ALTER TABLE `tbl_metas_tags`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbl_textos`
--
ALTER TABLE `tbl_textos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contadores_paginas`
--
ALTER TABLE `contadores_paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbl_cargo`
--
ALTER TABLE `tbl_cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_config`
--
ALTER TABLE `tbl_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbl_contato`
--
ALTER TABLE `tbl_contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_frases`
--
ALTER TABLE `tbl_frases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `tbl_metas_tags`
--
ALTER TABLE `tbl_metas_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbl_textos`
--
ALTER TABLE `tbl_textos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
