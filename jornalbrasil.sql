-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05/04/2023 às 02:52
-- Versão do servidor: 8.0.30
-- Versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jornalbrasil`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contadores_paginas`
--

CREATE TABLE `contadores_paginas` (
  `id` int NOT NULL,
  `quantidade` int DEFAULT NULL,
  `ip` varchar(200) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `pagina` int DEFAULT NULL,
  `id_campanha` int DEFAULT NULL,
  `veio_de_onde` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int NOT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `postado_por` varchar(250) DEFAULT NULL,
  `conteudo` text,
  `foto` varchar(250) DEFAULT NULL,
  `breve` text,
  `id_categoria` int DEFAULT NULL,
  `meta_title` text,
  `meta_keywords` text,
  `meta_description` text,
  `foto1` varchar(250) DEFAULT NULL,
  `url_amigavel` text,
  `descricao_imagem` varchar(250) DEFAULT NULL,
  `legenda_imagem` varchar(250) DEFAULT NULL,
  `embed` varchar(150) DEFAULT NULL,
  `pdf` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `audio` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ativo` enum('S','N') DEFAULT 'N',
  `principal` enum('S','N') DEFAULT 'N',
  `destaque` enum('S','N') DEFAULT 'N',
  `cat_destaque` enum('S','N') DEFAULT 'N',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `titulo`, `postado_por`, `conteudo`, `foto`, `breve`, `id_categoria`, `meta_title`, `meta_keywords`, `meta_description`, `foto1`, `url_amigavel`, `descricao_imagem`, `legenda_imagem`, `embed`, `pdf`, `audio`, `ativo`, `principal`, `destaque`, `cat_destaque`, `created_at`, `updated_at`) VALUES
(7, 'Diferenças entre a energia solar térmica e a fotovoltaica', 'Pico Solar', '<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">A energia solar cresce em ritmo progressivo, sendo considerada, hoje, uma das fontes mais usadas de energias renováveis, podendo ser utilizada tanto em indústrias como em residências. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">O que é energia solar</span></span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">A energia solar é a energia gerada a partir da luz do sol e que pode ser aproveitada por diferentes tecnologias, como: aquecimento solar, energia solar fotovoltaica e energia heliotérmica.</span></span></span></p>\r\n\r\n<h6 dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">É uma energia: </span></span></h6>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Alternativa </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Renovável </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Sustentável </span></span></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\"><strong>Alternativa:</strong> que vem de várias fontes de energia renováveis, como: </span></span></span></p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Energia solar </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Eólica </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Hídrica (ou hidráulica) </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Geotérmica.</span></span></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\"><strong>Renovável:</strong> obtida de recursos naturais que são naturalmente reabastecidos, como: </span></span></span></p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Chuva</span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Sol </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Marés </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Vento </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Energia Geotérmica. </span></span></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\"><strong>Sustentável:</strong> é a energia elétrica obtida de fontes renováveis e gerada sem grandes impactos ao meio ambiente, como: emissão de gases ou agravamento dos impactos ambientais.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">Características da energia solar</span></span></h5>\r\n\r\n<h6 dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">Além das já citadas, as outras características da energia solar são:</span></span></h6>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Não gera resíduos, por isso, energia limpa</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">É uma fonte de energia gratuita</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Gera economia de mais de 90% na conta de luz</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Possui vida útil de mais de 20 anos, com pouca ou nenhuma manutenção.</span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">A energia do sol é considerada inesgotável e incomparável com todas as outras fontes de energia, pela qualidade e capacidade ilimitada de fornecimento. </span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">O conceito de energia solar confunde-se com o da energia fotovoltaica, que é a geração de energia elétrica usando a luz do sol como fonte. Podendo-se dizer serem a mesma coisa.</span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Na energia solar fotovoltaica, a luz do sol é captada por painéis solares e transformada em corrente elétrica. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">A energia solar térmica</span></span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">A energia solar térmica usa o sol para aquecer fluidos e costuma ser usada para aquecer ambientes ou processos industriais. É extremamente eficiente e reduz o consumo de energia em aproximadamente 80%.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">A energia solar fotovoltaica</span></span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Em um sistema fotovoltaico, as células de silício dos painéis geram corrente elétrica ao serem expostas ao sol. Esta energia é tratada por equipamentos elétricos, para que ela fique com as características certas para o consumo.</span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">O sistema solar fotovoltaico é composto por:</span></span></p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Painéis solares</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Inversor Solar</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Sistema de fixação das placas solares</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Cabeamentos</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Conectores, etc.</span></span></span></li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Em conclusão, a energia solar térmica é destinada ao aquecimento e a energia solar fotovoltaica vai gerar eletricidade. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">Como usar </span></span></h5>\r\n\r\n<h6 dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\">Existem inúmeras formas de aproveitamento da energia solar, são elas:</span></span></h6>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Aquecimento de água</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Geração de energia elétrica</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Iluminação pública</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">Sistemas de uso coletivo, tais como geração de energia elétrica para escolas, postos de saúde e centros comunitários.</span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#7f8c8d\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"font-size:18px\">A Pico Solar conta com tecnologia de ponta, profissionais altamente qualificados, instalação rápida e projetos individualizados. </span></span></span><br />\r\n </p>\r\n', '1610051681.6-foto-N.jpg', 'Você sabe o que diferencia cada uma das fontes mais usadas de energia solar? Confira o post para saber mais.', 6, 'Diferenças entre a energia solar térmica e a fotovoltaica - Pico Solar | (61) 98296-5547', '', '                                    A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia.                               ', NULL, 'diferencas-entre-energia-solar-termica-fotovoltaica', NULL, '', NULL, '', '', 'S', 'N', 'N', 'S', '2023-03-01 18:01:19', '2023-03-01 18:01:19'),
(8, 'Reciclagem de placas solares ', 'Pico Solar', '<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">As fontes alternativas de geração de energia têm ganhado bastante importância nos últimos anos. Uma destas alternativas é a energia solar, fonte sustentável, limpa e inesgotável, além de gerar baixo impacto ambiental comparado a outras fontes de energia. </span></span></span></p>\r\n\r\n<p> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\">Materiais que compõem a placa solar</span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">A coleta dessa energia vinda do sol e a sua conversão em energia elétrica são feitas através das placas fotovoltaicas, que são placas solares feitas de polímeros plásticos, alumínio, silício, cobre, prata, estanho, zinco e chumbo. Materiais nobres com alto valor de mercado. </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Após o período de vida útil, uma vez que esses painéis solares tem cerca de 25 a 35 anos de funcionamento perfeito (e alguns modelos podem chegar aos 40 anos), as placas e seus componentes podem ser quase que totalmente reciclados, ao invés de se tornarem resíduos de lixo eletrônico. </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">A reciclagem é a última etapa para o ciclo sustentável da energia solar e o seu custo é considerado bastante baixo, além da eficiência de recuperação dos materiais ser satisfatória.</span></span></span></p>\r\n\r\n<p> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\">A vida útil das placas solares</span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Como dissemos acima, a média é de 30 anos de vida útil dos painéis fotovoltaicos, mas a maioria dos fabricantes afirma ocorrer uma diminuição de 20% na capacidade de energia por volta dos 25 anos.</span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">É comum ocorrer uma queda de 6 a 8% após 20 anos de uso das placas, mas o tempo de utilização, de forma eficiente, é muito maior do que o afirmado pelos fabricantes. Aqueles de alta qualidade podem chegar aos 30 a 40 anos e continuarem funcionando normalmente, embora com eficácia decrescente.</span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\"> </span></span><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\"> </span></span></span></p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\">A legislação</span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">No Brasil, acordos estão sendo feitos para que haja o correto descarte dos painéis fotovoltaicos, a fim de que a expansão do mercado de energia solar cresça de forma consistente e equilibrada. </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Especialistas do setor estudam a criação de uma nova lei que classifique os resíduos fotovoltaicos como especiais, além da implementação e fiscalização pelo IBAMA. </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">No momento, a lei 12.305/2010 trata da política nacional de resíduos sólidos e os resíduos de painéis fotovoltaicos ainda se enquadram na classificação geral de resíduos. Existe uma única exceção onde são definidos como lixo eletrônico, na Diretiva de Resíduos de Equipamentos Elétricos e Eletrônicos. </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Os fabricantes de placas solares estão obrigados por lei a cumprir requisitos legais específicos e padrões de reciclagem para garantir que os painéis não se tornem um fardo para o meio ambiente.</span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Outras leis falam de isenções de impostos e compensação de energia solar.</span></span></span></p>\r\n\r\n<p> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\">A reciclagem </span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">O processo de reciclagem traz uma série de benefícios para o meio ambiente. Por meio dele, grandes quantidades de plástico, metais e vidro podem ser recuperados e reinseridos na composição de novos produtos. Isso significa que o processo seria ainda mais sustentável e ecológico.</span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">De acordo com o programa da Agência Internacional de Energia Renovável (IRENA), até 2050 os painéis fotovoltaicos poderão ser reciclados e recuperados em cerca de 2 milhões de unidades.  </span></span></span></p>\r\n\r\n<h5 dir=\"ltr\"> </h5>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\">Existem dois processos utilizados para a reciclagem de placas solares: </span></h5>\r\n\r\n<ul dir=\"ltr\" style=\"margin-left:40px\">\r\n	<li><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Térmico </span></span></span></li>\r\n	<li><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Mecânico.</span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\"> </span></span></span></p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\">Reciclagem térmica</span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Essa técnica de reciclagem é baseada no tratamento térmico e envolve a queima. É aplicável à 80% do painel. </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Após isso, diferentes processos químicos são realizados para remover a camada anti-reflexo e separar os contatos de metal. As borrachas de silicone também podem ser reutilizadas e, inclusive, recicladas mais de uma vez.</span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\"> </span></span></span></p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#7f8c8d\">Reciclagem mecânica</span></h5>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Esta segunda técnica consiste em moer todo o painel transparente de sua estrutura e aplicar processos químicos. O material é triturado e depois processado. A reciclagem mecânica é realizada em usinas de reciclagem.</span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\"> </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">A Pico Solar conta com tecnologia de ponta, profissionais altamente qualificados, instalação rápida e projetos individualizados. </span></span></span></p>\r\n', '1610395954.4-foto-N.jpg', 'Você sabe como funciona a tecnologia para a reciclagem de painéis solares? Confira o post para saber mais.', 7, 'Reciclagem de placas solares  - Pico Solar  | (61) 98296-5547', '', '                                    A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia.                              ', NULL, 'reciclagem-placas-solares', NULL, '', NULL, '', '', 'S', 'N', 'N', 'S', '2023-03-01 18:01:19', '2023-03-01 18:01:19'),
(9, 'Métodos de obtenção de energia solar', 'Pico Solar', '<h5 dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\">Os principais benefícios da energia solar</span></span></h5>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Os sistemas de geração de energia solar utilizam energia limpa e renovável do sol, transformada em energia elétrica. Painéis solares ajudam a evitar e combater as emissões de gases do efeito estufa e, a longo prazo, reduzir drasticamente a nossa dependência de combustíveis fósseis, como o petróleo.</span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><strong><span style=\"font-size:18px\">Em  comparação:</span></strong></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Um sistema fotovoltaico de 6kWp seria equivalente a 10 campos de futebol em árvores, ou a água de 6 piscinas olímpicas, ou 79 toneladas de carvão queimado, ou 500.000 km rodados de gasolina.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\">Os métodos de obtenção da energia fotovoltaica podem ser classificados em: </span></span></h5>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Diretos ou indiretos </span></span></span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Passivos ou ativos.</span></span></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\">A classificação da energia solar</span></span></h5>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><strong><span style=\"font-size:18px\">Primária ou secundária </span></strong></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">A energia solar é energia primária, porque não precisa ser transformada ou convertida, para funcionar. As fontes de energia primária consistem em toda forma de energia vinda da natureza, como a luz do sol.</span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">E elas não necessitam de outra alternativa para a sua geração energética. Por isso, seu custo-benefício já sai na frente de muitas outras fontes, em virtude da economia e simplicidade no processo de produção de energia.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\">A produção de energia solar quando não tem sol</span></span></h5>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Os painéis solares também funcionam em dias nublados e chuvosos, já que mesmo nessas condições, há incidência de raios violetas. A produção varia em dias cinzentos, mas não deixa de existir. </span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">À noite, não há captação, mas o armazenamento de energia é feito por meio de baterias.</span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Em conclusão, a energia solar é captada dos raios ultravioleta e não do calor do sol, mas, quando há incidência solar o rendimento é bem maior. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\">A expertise de um profissional</span></span></h5>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">É necessário que um profissional avalie a média de insolação da região onde será feita a instalação e calcule a capacidade energética. Com isso, será possível evitar um baixo desempenho em dias nublados ou chuvosos, já que o cálculo será feito com base na posição do sol, no índice solar durante o ano e na duração do dia.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\">Sistemas Diretos e Indiretos</span></span></h5>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><strong><span style=\"font-size:18px\">Direto</span></strong></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Os métodos diretos são aqueles que precisam de apenas uma etapa para obter a energia do sol e transformá-la em elétrica. </span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Exemplo: Energia Solar Fotovoltaica, a energia solar é obtida quando atinge uma célula fotovoltaica, criando eletricidade.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><strong><span style=\"font-size:18px\">Indireto</span></strong></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Os métodos indiretos são os que precisam de duas ou mais etapas para converter a energia solar em energia utilizável. </span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Exemplo: Energia heliotérmica, a energia solar atinge os espelhos refletores, que concentram o calor em um tubo a vácuo, por onde passa água e esta é transformada em vapor, alimentando uma turbina que gera energia elétrica.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<h5 dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\">Sistema Passivos e Ativos de Energia Solar</span></span></h5>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><strong><span style=\"font-size:18px\">Passivo</span></strong></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Os sistemas passivos de energia solar são normalmente diretos. </span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Exemplo: uma estufa que transfere o calor do sol para o ar, mantendo o ambiente quente. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><strong><span style=\"font-size:18px\">Ativo</span></strong></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Os sistemas ativos de energia solar funcionam com o auxílio de dispositivos mecânicos para melhorar o desempenho da coleta da energia solar. </span></span></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">Exemplo: sistema de aquecimento solar que utiliza uma bomba para forçar a circulação de água. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">A energia solar é uma das alternativas mais econômicas e sustentáveis, contando com instalação simples e manutenção mínima. E com anos e anos de vida útil.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"> </p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-family:Open Sans,sans-serif\"><span style=\"color:#7f8c8d\"><span style=\"font-size:18px\">A Pico Solar conta com tecnologia de ponta, profissionais altamente qualificados, instalação rápida e projetos individualizados. </span></span></span></p>\r\n\r\n<p> </p>\r\n', '1610396143.29-foto-N.jpg', 'Você sabe quais são os métodos de obtenção de energia solar? Confira o post para saber mais.', 8, 'Métodos de obtenção de energia solar - Pico Solar | (61) 98296-5547', '', '                                    A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia.                              ', NULL, 'metodos-obtencao-energia-solar', NULL, '', NULL, '', '', 'S', 'N', 'N', 'S', '2023-03-01 18:01:19', '2023-03-01 18:01:19'),
(10, 'Conhecendo o conceito Net Metering', 'Pico Solar', '<p dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">O que sobra da sua energia fotovoltaica transformada em créditos.</span></span></span></p>\r\n\r\n<p> </p>\r\n\r\n<p><br />\r\n<span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">O Brasil vem criando oportunidades para aumentar a popularidade e conhecimento da energia fotovoltaica no âmbito da energia nacional. Atualmente, já somos mais familiarizados com os conceitos de energias alternativas, e muitas residências já fazem uso dessas tecnologias. </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Nesse segmento, surge o <em>net metering</em>: traduzido como <strong>Sistema de Compensação de Energia</strong>, ele incentiva o uso de fontes de energias renováveis seguindo um sistema que permite que a energia excedente da que foi absorvida, e não utilizada, seja transformada em créditos que servem de descontos no consumo da energia elétrica em uma residência, por exemplo. </span></span></span></p>\r\n\r\n<p> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#999999\"> <span style=\"font-family:Open Sans,sans-serif\">Como funciona?</span> </span></h5>\r\n\r\n<p dir=\"ltr\"> </p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Essa energia que sobra é injetada na rede distribuidora, que armazena esse excedente tal qual uma bateria. O momento em que a energia injetada for maior que a energia consumida, é quando o consumidor recebe o crédito em energia, que pode ser usado para diminuir o consumo em termos de tarifa e, se ainda sobrarem créditos, podem ser usados para abastecer outra propriedade.</span></span></span></p>\r\n\r\n<p> </p>\r\n\r\n<h5 dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:14px\"><span style=\"font-family:Open Sans,sans-serif\">Por que contar com o Net Metering?</span></span></span></h5>\r\n\r\n<p dir=\"ltr\"> </p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Ao proporcionar mais autonomia ao consumidor, a compensação de energia torna o usuário menos dependente das distribuidoras de energia convencionais.<br />\r\nAlém de causar menos impacto ao meio ambiente, por fazer uso de uma energia renovável e ilimitada, o fator mais estimulante é enxergar o <em>net metering</em> como um investimento. </span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Sabendo que existe a possibilidade de uso dos créditos extras em outras residências, a economia financeira é real e contábil. A TUST e a TUSD, tarifas pagas na compra da energia elétrica diretamente dos agentes de comercialização ou de geração no mercado livre de energia elétrica, podem ser reduzidas em até metade de seus valores quando usadas por instalações que geram sua própria energia. O net metering é vantajoso para residências, indústrias e comércio.</span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">É bom destacar que os créditos são em quilowatts-hora, e não em dinheiro. A forma de fazer economia é em termos de energia; quando o consumidor da compensação de energia possui imóveis na mesma titularidade, pode transferir esses créditos para a sua rede, desde que façam parte da mesma distribuidora de energia pública.</span></span></span></p>\r\n\r\n<p> </p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Aos poucos as alternativas em energia se mostram mais presentes no Brasil, apresentando benefícios e resultados positivos.</span></span></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"color:#999999\"><span style=\"font-size:18px\"><span style=\"font-family:Open Sans,sans-serif\">Aqui na Pico Solar, nossos profissionais estão prontos e qualificados para te ajudar no processo de investir em economia e independência energética.</span></span></span></p>\r\n', '1680567614.1403-foto-N.jpg', 'Você conhece o termo Net Metering e suas vantagens? Confira o post para saber mais.', 10, 'Conhecendo o conceito Net Metering - Pico Solar  | (61) 98296-5547', '', '                                                A Pico Solar fornece soluções completas em Energia Solar Fotovoltaica. Energia alternativa, renovável, limpa e inesgotável. Energia solar convertida em economia.                                         ', NULL, 'conhecendo-conceito-net-metering', NULL, '', NULL, '1680567614.141-pdf-N.jpeg', '', 'S', 'N', 'N', 'S', '2023-03-01 18:01:19', '2023-03-01 18:01:19'),
(12, 'Informação sobre Visto', 'teste', '<p>teste</p>\r\n', '1680575689.6804-foto-N.jpeg', 'teste', 9, 'teste', 'teste', '            teste          ', NULL, 'informacao-sobre-visto', NULL, '', NULL, '', '1680575689.6811-audio-N.jpg', 'S', 'S', 'N', 'S', '2023-04-04 02:34:49', '2023-04-04 02:34:49'),
(13, 'Entenda por que Trump não foi fotografado ao ser acusado, como é comum nos EUA', 'g1', '<p>Durante os dias que antecederam a aparição de <a href=\"https://g1.globo.com/tudo-sobre/donald-trump/\">Donald Trump</a> em um tribunal de Nova York, um dos temas discutidos foi se o ex-presidente seria fotografado ao ser registrado no sistema.</p>\r\n\r\n<p>Nos Estados Unidos, essa foto de entrada nos registros da Justiça criminal tem um nome específico: é o mug shot.</p>\r\n\r\n<p>Há mug shots de figuras históricas dos EUA, como do reverendo Martin Luther King Jr..</p>\r\n\r\n<p>Nesta terça-feira (4), pegaram as digitais de Trump e a inseriram no sistema da Justiça criminal do estado de Nova York, mas não foi divulgada uma fotografia.</p>\r\n\r\n<p>Os agentes da corte abriram uma ficha para o ex-presidente com nome completo, data de nascimento, altura e peso; eles recolheram o registro das digitais e checaram o sistema para ver se havia algum mandado de prisão em aberto.</p>\r\n\r\n<p> </p>\r\n\r\n<blockquote>No entanto, não foi feita uma fotografia para o sistema da Justiça, de acordo com o jornal \"Washigton Post\" e com a agência Associated Press, no caso de Trump.</blockquote>\r\n\r\n<p> </p>\r\n\r\n<p>LEIA TAMBÉM</p>\r\n\r\n<p> </p>\r\n\r\n<ul>\r\n	<li><a href=\"https://g1.globo.com/mundo/noticia/2023/04/04/trump-indiciamento-tribunal-nova-york.ghtml\">Em tribunal de Nova York, Trump recebe 34 acusações e se declara inocente em caso relacionado a suborno para atriz pornô</a></li>\r\n	<li><a href=\"https://g1.globo.com/mundo/noticia/2023/04/04/entenda-quais-sao-as-34-acusacoes-recebidas-por-donald-trump.ghtml\">Entenda quais são as 34 acusações recebidas por Donald Trump</a></li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<h2>Por que não teve foto?</h2>\r\n\r\n<p> </p>\r\n\r\n<p>Segundo o “New Times”, uma fotografia, neste caso, é totalmente dispensável para fins práticos.</p>\r\n\r\n<p>O propósito das mug shots é ajudar os policiais a reconhecer um acusado de um crime para localizá-lo, se ele, eventualmente, fugir.</p>\r\n\r\n<p>Essas fotografias são distribuídas também para a imprensa, para que a imagem seja divulgada e o rosto do suspeito seja reconhecido em público.</p>\r\n\r\n<p>No entanto, neste caso, não se considera que Trump pode fugir e, além disso, o rosto dele já é reconhecido.</p>\r\n\r\n<p> </p>\r\n\r\n<h2>Fotos falsas</h2>\r\n\r\n<p> </p>\r\n\r\n<p>Apesar disso, surgiram \"mug shots\" de Trump nas redes sociais. De acordo com a AP, são imagens manipuladas.</p>\r\n\r\n<p>Depois que Trump foi levado sob custódia na terça-feira, as impressões digitais de Trump foram tiradas como parte do processo de registro, mas sua foto não foi tirada, de acordo com dois policiais. Os agentes não deram declarações públicas sobre esse processo e só falaram com a agência de notícias AP sob condição de anonimato. Ainda assim, mais de 10 imagens fabricadas com a intenção de mostrar a foto da polícia de Trump circularam no Twitter, Facebook, Instagram e TikTok na terça-feira.</p>\r\n', '1680653901.0401-foto-N.png', 'De acordo com a mídia dos EUA, não foi feita uma fotografia de acusado de Donald Trump. Mesmo assim, surgiram imagens', 5, 'Entenda por que Trump não foi fotografado ao ser acusado, como é comum nos EUA', '', 'De acordo com a mídia dos EUA, não foi feita uma fotografia de acusado de Donald Trump. Mesmo assim, surgiram imagens', NULL, 'entenda-por-que-trump-nao-foi-fotografado-ao-ser-acusado,-como-comum-nos-eua', 'Donald Trump se declara inocente à Justiça de NY', NULL, NULL, NULL, NULL, 'S', 'S', 'N', 'S', '2023-04-05 00:18:21', '2023-04-05 00:18:21'),
(14, 'MEC decide suspender cronograma de implementação do Novo Ensino Médio', 'g1', '<p>O ministro da Educação, Camilo Santana, afirmou nesta terça-feira (4) que decidiu suspender o cronograma de implementação do Novo Ensino Médio.</p>\r\n\r\n<p>Camilo fez o anúncio durante entrevista em Brasília. Ele afirmou que vai assinar nesta terça uma portaria prevendo a suspensão.</p>\r\n\r\n<p>\"Hoje estou assinando uma portaria – já na segunda-feira eu tinha anunciado na imprensa<a href=\"https://g1.globo.com/pe/pernambuco/educacao/noticia/2023/04/03/ministro-da-educacao-diz-avaliar-possibilidade-de-suspender-implementacao-do-novo-ensino-medio.ghtml\"> em entrevista que dei</a> – que nós vamos suspender a portaria 521, que aplica o cronograma de aplicação do Novo Ensino Médio\", afirmou o ministro.</p>\r\n\r\n<p>\"Principalmente, por causa do Enem. Porque o Novo Ensino Médio previa que em 2024 nós tivéssemos um novo Enem. Como há ainda esse novo processo de discussão, nós vamos suspender essa portaria para que, a partir dessa finalização dessa discussão, a gente possa tomar as decisões em relação ao Ensino Médio\", completou Camilo Santana.</p>\r\n\r\n<p>A portaria 521 de 13 de julho de 2021, que será suspensa, foi publicada no governo Jair Bolsonaro e estabelece prazos para que políticas nacionais (como a de distribuição de livros didáticos a escolas públicas) e avaliações, como o Enem e o Sistema de Avaliação da Educação Básica (Saeb), sejam modificadas pelas diretrizes do Novo Ensino Médio.</p>\r\n\r\n<p> </p>\r\n\r\n<ul>\r\n	<li><a href=\"https://g1.globo.com/educacao/noticia/2023/04/04/mec-pode-travar-cronograma-mas-novo-ensino-medio-segue-nas-escolas-com-impacto-na-preparacao-para-o-enem-entenda.ghtml\">MEC pode travar cronograma, mas Novo Ensino Médio segue nas escolas</a></li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<p>Na avaliação do titular do <a href=\"https://g1.globo.com/tudo-sobre/ministerio-da-educacao/\">MEC</a>, não houve um debate aprofundado sobre a implementação do Novo Ensino Médio e a gestão anterior da pasta foi \"omissa\" em relação ao tema.</p>\r\n\r\n<p>Camilo Santana ressaltou que a medida anunciada nesta terça não interfere no Exame Nacional do Ensino Médio (Enem) deste ano. Ele também afirmou que as escolas que começaram a implementar o Novo Ensino Médio vão continuar com o processo.</p>\r\n\r\n<p>\"Nós vamos apenas suspender as questões que vão definir um novo Enem em 2024 por 60 dias. E vamos ampliar a discussão. O ideal é que, num processo democrático, a gente possa escutar a todos. Principalmente, quem tá lá na ponta, que são os alunos, os professores e aqueles que executam a política, que são os estados\", declarou o ministro.</p>\r\n\r\n<p> </p>\r\n\r\n<h2>O Novo Ensino Médio</h2>\r\n\r\n<p> </p>\r\n\r\n<p>Proposto pelo ex-presidente Michel Temer, o Novo Ensino Médio foi aprovado pelo Congresso em 2017.</p>\r\n\r\n<p>É um novo modelo obrigatório a ser seguido no ensino médio por todas as escolas do país, públicas e privadas.</p>\r\n\r\n<p>A lei estipula aumento progressivo da carga horária. Antes, no modelo anterior, eram, no mínimo, 800 horas-aula por ano (total de 2.400 no ensino médio inteiro). No novo modelo, a carga deve chegar a 3.000 horas ao final dos três anos.</p>\r\n\r\n<p>Desde 2022, as disciplinas tradicionais passaram a ser agrupadas em áreas do conhecimento (linguagens, matemática, ciências da natureza e ciências humanas).</p>\r\n\r\n<p>A partir deste ano, cada estudante passou a poder montar seu próprio ensino médio, escolhendo as áreas (os chamados \"itinerários formativos\") nas quais se aprofundará.</p>\r\n', '1680654108.124-foto-N.png', 'Suspensão por 60 dias de portaria que estabelece o cronograma de implantação do novo modelo foi anunciada pelo ministro da Educação, Camilo Santana, nesta terça-feira (4).', 8, 'MEC decide suspender cronograma de implementação do Novo Ensino Médio', '', '            Suspensão por 60 dias de portaria que estabelece o cronograma de implantação do novo modelo foi anunciada pelo ministro da Educação, Camilo Santana, nesta terça-feira (4).          ', NULL, 'mec-decide-suspender-cronograma-implementacao-novo-ensino-medio', NULL, '', NULL, '', '', 'S', 'S', 'N', 'N', '2023-04-05 00:21:20', '2023-04-05 00:21:20'),
(15, 'Haddad diz que conversou com Campos Neto sobre possibilidade de se parcelar compras via PIX', 'Jéssica Sant&#39;Ana, g1 — Brasília', '<p>O ministro da Fazenda, <a href=\"https://g1.globo.com/politica/politico/fernando-haddad/\">Fernando Haddad</a>, afirmou nesta terça-feira (4) que conversou com o presidente do Banco Central, Roberto Campos Neto, sobre a possibilidade de parcelamento de operações feitas no débito com utilização do PIX.</p>\r\n\r\n<p>Lançado pelo Banco Central em 2020, o PIX é um sistema instantâneo de pagamentos.</p>\r\n\r\n<p>A possibilidade de parcelamento via PIX foi discutida entre Haddad e Campos Neto nesta segunda-feira (3), quando eles tiveram uma reunião no <a href=\"https://g1.globo.com/tudo-sobre/ministerio-da-fazenda/\">Ministério da Fazenda</a>. Outros assuntos também foram tratados, segundo Haddad.</p>\r\n\r\n<p>Para o titular da Fazenda, o parcelamento de compras com o PIX pode melhorar as condições de crédito no país.</p>\r\n\r\n<p>\"Falava ontem com Roberto Campos Neto sobre o parcelamento de débito pelo PIX que pode ser uma grande inovação do nosso sistema bancário, você parcelar usando essa ferramenta e melhorando as condições de competitividade, de crédito no país\", afirmou Haddad durante evento promovido por um banco nesta terça.</p>\r\n\r\n<p>O Banco Central, dentro da sua agenda de inovação, já estudar formas de incluir no sistema do PIX a possibilidade de parcelamento. Porém, não há uma data prevista.</p>\r\n\r\n<p> </p>\r\n\r\n<h2>Inovações</h2>\r\n\r\n<p> </p>\r\n\r\n<p>Em mais de dois anos desde o seu lançamento, o PIX já passou por algumas inovações.</p>\r\n\r\n<p>Entre elas, o PIX Saque - que permite o saque em dinheiro em estabelecimentos comerciais – e o PIX Troco – que também permite o saque, mas associado a uma compra ou à prestação de um serviço.</p>\r\n\r\n<p>O Banco Central também estuda outras inovações, <a href=\"https://g1.globo.com/economia/pix/noticia/2021/11/16/pix-permitira-pagamentos-instantaneos-a-outros-paises-no-medio-prazo-diz-presidente-do-bc.ghtml\">como PIX em operações internacionais e pagamentos por aproximação usando somente o PIX</a>.</p>\r\n', '1680654273.3491-foto-N.png', 'Ideia já é debatida no Banco Central. Para ministro, modalidade seria &#39;grande inovação&#39; no sistema bancário do país. Haddad e Campos Neto se reuniram nesta segunda-feira (3).', 5, 'Haddad diz que conversou com Campos Neto sobre possibilidade de se parcelar compras via PIX', '', 'Ideia já é debatida no Banco Central. Para ministro, modalidade seria &#39;grande inovação&#39; no sistema bancário do país. Haddad e Campos Neto se reuniram nesta segunda-feira (3).', NULL, 'haddad-diz-que-conversou-campos-neto-sobre-possibilidade-se-parcelar-compras-via-pix', 'O ministro da Fazenda, Fernando Haddad, durante entrevista no Ministério da Fazenda na semana passada — Foto: Fátima Meira/Futura Press/Estadão Conteúdo', NULL, NULL, NULL, NULL, 'S', 'S', 'N', 'N', '2023-04-05 00:24:33', '2023-04-05 00:24:33');
INSERT INTO `tbl_blog` (`id`, `titulo`, `postado_por`, `conteudo`, `foto`, `breve`, `id_categoria`, `meta_title`, `meta_keywords`, `meta_description`, `foto1`, `url_amigavel`, `descricao_imagem`, `legenda_imagem`, `embed`, `pdf`, `audio`, `ativo`, `principal`, `destaque`, `cat_destaque`, `created_at`, `updated_at`) VALUES
(16, 'Na véspera de depoimento para a PF, Bolsonaro entrega terceiro kit de joias', '', '<p>A defesa de Jair Bolsonaro (PL) entregou nesta terça-feira (4) um pacote de joias recebidas pelo ex-presidente em 2019, em viagem feita ao Catar e à Arábia Saudita. O pacote inclui abotoaduras, anel e outros itens de ouro e brilhantes.</p>\r\n\r\n<p> </p>\r\n\r\n<ul>\r\n	<li><a href=\"https://api.whatsapp.com/send?text=https://g1.globo.com/politica/blog/julia-duailibi/post/2023/04/04/na-vespera-de-depoimento-para-a-pf-bolsonaro-entrega-terceiro-kit-de-joias.ghtml?utm_source%3Dwhatsapp%26utm_medium%3Dshare-engagement%26utm_campaign%3Dte-materias\" target=\"_blank\">Compartilhe no WhatsApp</a></li>\r\n	<li><a href=\"https://telegram.me/share/url?url=https://g1.globo.com/politica/blog/julia-duailibi/post/2023/04/04/na-vespera-de-depoimento-para-a-pf-bolsonaro-entrega-terceiro-kit-de-joias.ghtml?utm_source%3Dtelegram%26utm_medium%3Dshare-engagement%26utm_campaign%3Dte-materias\" target=\"_blank\">Compartilhe no Telegram</a></li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<p>Os itens foram entregues na mesma agência bancária em que, no final de março, <a href=\"https://g1.globo.com/politica/blog/julia-duailibi/post/2023/03/24/defesa-de-bolsonaro-joias-em-brasilia.ghtml\">a defesa devolveu um outro conjunto de joias e armas recebidas por Bolsonaro</a>.</p>\r\n\r\n<p><img alt=\"Joias e Rolex de Bolsonaro — Foto: Reprodução\" src=\"https://s2.glbimg.com/1iw2xE06nOtUnBAvYFeeUKWyhVQ=/0x0:1135x638/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2023/A/b/sJ7BrWQ76QBcLSTEXALA/joias-rolex.jpg\" /></p>\r\n\r\n<p>Joias e Rolex de Bolsonaro — Foto: Reprodução</p>\r\n\r\n<p>Os advogados de Bolsonaro já tinham avisado o <a href=\"https://g1.globo.com/tudo-sobre/tribunal-de-contas-da-uniao/\">Tribunal de Contas da União</a> (TCU) que devolveriam as joias até que haja uma decisão final sobre qual deve ser o destino dos itens, <a href=\"https://g1.globo.com/politica/blog/julia-duailibi/post/2023/03/31/bolsonaro-rolex-sauditas-tcu.ghtml\">como publicou o <strong>blog</strong></a>.</p>\r\n\r\n<p>Este conjunto foi <a href=\"https://g1.globo.com/politica/blog/andreia-sadi/post/2023/03/28/bolsonaro-ficou-outro-conjunto-de-joias-sauditas.ghtml\">recebido em mãos pelo próprio Bolsonaro</a>. O estojo inclui um relógio da marca Rolex, uma caneta, abotoaduras e outros itens em ouro e brilhantes. O pacote, estimado em pelo menos R$ 500 mil, ficou guardado em <a href=\"https://g1.globo.com/politica/blog/andreia-sadi/post/2023/03/29/bolsonaro-guardou-conjunto-de-joias-em-fazenda-de-nelson-piquet.ghtml\">uma fazenda do ex-piloto Nelson Piquet, em Brasília</a>.</p>\r\n\r\n<p>Em petição direcionada ao ministro Augusto Nardes, a defesa do ex-presidente afirmou que esse novo conjunto de joias, cuja existência foi revelada pela imprensa, não eram objeto da representação original do TCU, que versava sobre joias recebidas por comitiva que foi à Arábia Saudita em 2021.</p>\r\n', '1680655053.1003-foto-N.png', 'A defesa do ex-presidente entregou nesta terça-feira (4) um pacote de joias recebidas em 2019, no mesmo local em que foi devolvido outro pacote em março, em Brasília.', 6, 'Na véspera de depoimento para a PF, Bolsonaro entrega terceiro kit de joias', '', 'A defesa do ex-presidente entregou nesta terça-feira (4) um pacote de joias recebidas em 2019, no mesmo local em que foi devolvido outro pacote em março, em Brasília.', NULL, 'na-vespera-depoimento-pf,-bolsonaro-entrega-terceiro-kit-joias', 'Defesa de Bolsonaro entrega terceiro pacote com joias sauditas em agência da Caixa', NULL, NULL, NULL, NULL, 'S', 'S', 'N', 'N', '2023-04-05 00:37:33', '2023-04-05 00:37:33'),
(17, 'Na véspera de depoimento para a PF, Bolsonaro entrega terceiro kit de joias', '', '<p>A defesa de Jair Bolsonaro (PL) entregou nesta terça-feira (4) um pacote de joias recebidas pelo ex-presidente em 2019, em viagem feita ao Catar e à Arábia Saudita. O pacote inclui abotoaduras, anel e outros itens de ouro e brilhantes.</p>\r\n\r\n<p> </p>\r\n\r\n<ul>\r\n	<li><a href=\"https://api.whatsapp.com/send?text=https://g1.globo.com/politica/blog/julia-duailibi/post/2023/04/04/na-vespera-de-depoimento-para-a-pf-bolsonaro-entrega-terceiro-kit-de-joias.ghtml?utm_source%3Dwhatsapp%26utm_medium%3Dshare-engagement%26utm_campaign%3Dte-materias\" target=\"_blank\">Compartilhe no WhatsApp</a></li>\r\n	<li><a href=\"https://telegram.me/share/url?url=https://g1.globo.com/politica/blog/julia-duailibi/post/2023/04/04/na-vespera-de-depoimento-para-a-pf-bolsonaro-entrega-terceiro-kit-de-joias.ghtml?utm_source%3Dtelegram%26utm_medium%3Dshare-engagement%26utm_campaign%3Dte-materias\" target=\"_blank\">Compartilhe no Telegram</a></li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<p>Os itens foram entregues na mesma agência bancária em que, no final de março, <a href=\"https://g1.globo.com/politica/blog/julia-duailibi/post/2023/03/24/defesa-de-bolsonaro-joias-em-brasilia.ghtml\">a defesa devolveu um outro conjunto de joias e armas recebidas por Bolsonaro</a>.</p>\r\n\r\n<p><img alt=\"Joias e Rolex de Bolsonaro — Foto: Reprodução\" src=\"https://s2.glbimg.com/1iw2xE06nOtUnBAvYFeeUKWyhVQ=/0x0:1135x638/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2023/A/b/sJ7BrWQ76QBcLSTEXALA/joias-rolex.jpg\" /></p>\r\n\r\n<p>Joias e Rolex de Bolsonaro — Foto: Reprodução</p>\r\n\r\n<p>Os advogados de Bolsonaro já tinham avisado o <a href=\"https://g1.globo.com/tudo-sobre/tribunal-de-contas-da-uniao/\">Tribunal de Contas da União</a> (TCU) que devolveriam as joias até que haja uma decisão final sobre qual deve ser o destino dos itens, <a href=\"https://g1.globo.com/politica/blog/julia-duailibi/post/2023/03/31/bolsonaro-rolex-sauditas-tcu.ghtml\">como publicou o <strong>blog</strong></a>.</p>\r\n\r\n<p>Este conjunto foi <a href=\"https://g1.globo.com/politica/blog/andreia-sadi/post/2023/03/28/bolsonaro-ficou-outro-conjunto-de-joias-sauditas.ghtml\">recebido em mãos pelo próprio Bolsonaro</a>. O estojo inclui um relógio da marca Rolex, uma caneta, abotoaduras e outros itens em ouro e brilhantes. O pacote, estimado em pelo menos R$ 500 mil, ficou guardado em <a href=\"https://g1.globo.com/politica/blog/andreia-sadi/post/2023/03/29/bolsonaro-guardou-conjunto-de-joias-em-fazenda-de-nelson-piquet.ghtml\">uma fazenda do ex-piloto Nelson Piquet, em Brasília</a>.</p>\r\n\r\n<p>Em petição direcionada ao ministro Augusto Nardes, a defesa do ex-presidente afirmou que esse novo conjunto de joias, cuja existência foi revelada pela imprensa, não eram objeto da representação original do TCU, que versava sobre joias recebidas por comitiva que foi à Arábia Saudita em 2021.</p>\r\n', '1680655650.5092-foto-N.png', 'A defesa do ex-presidente entregou nesta terça-feira (4) um pacote de joias recebidas em 2019, no mesmo local em que foi devolvido outro pacote em março, em Brasília.', 6, 'Na véspera de depoimento para a PF, Bolsonaro entrega terceiro kit de joias', '', 'A defesa do ex-presidente entregou nesta terça-feira (4) um pacote de joias recebidas em 2019, no mesmo local em que foi devolvido outro pacote em março, em Brasília.', NULL, 'na-vespera-depoimento-pf,-bolsonaro-entrega-terceiro-kit-joias', 'Defesa de Bolsonaro entrega terceiro pacote com joias sauditas em agência da Caixa', NULL, NULL, NULL, NULL, 'S', 'S', 'N', 'N', '2023-04-05 00:47:30', '2023-04-05 00:47:30'),
(18, 'Na véspera de depoimento para a PF, Bolsonaro entrega terceiro kit de joias', '', '<p>A defesa de Jair Bolsonaro (PL) entregou nesta terça-feira (4) um pacote de joias recebidas pelo ex-presidente em 2019, em viagem feita ao Catar e à Arábia Saudita. O pacote inclui abotoaduras, anel e outros itens de ouro e brilhantes.</p>\r\n\r\n<p> </p>\r\n\r\n<ul>\r\n	<li><a href=\"https://api.whatsapp.com/send?text=https://g1.globo.com/politica/blog/julia-duailibi/post/2023/04/04/na-vespera-de-depoimento-para-a-pf-bolsonaro-entrega-terceiro-kit-de-joias.ghtml?utm_source%3Dwhatsapp%26utm_medium%3Dshare-engagement%26utm_campaign%3Dte-materias\" target=\"_blank\">Compartilhe no WhatsApp</a></li>\r\n	<li><a href=\"https://telegram.me/share/url?url=https://g1.globo.com/politica/blog/julia-duailibi/post/2023/04/04/na-vespera-de-depoimento-para-a-pf-bolsonaro-entrega-terceiro-kit-de-joias.ghtml?utm_source%3Dtelegram%26utm_medium%3Dshare-engagement%26utm_campaign%3Dte-materias\" target=\"_blank\">Compartilhe no Telegram</a></li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<p>Os itens foram entregues na mesma agência bancária em que, no final de março, <a href=\"https://g1.globo.com/politica/blog/julia-duailibi/post/2023/03/24/defesa-de-bolsonaro-joias-em-brasilia.ghtml\">a defesa devolveu um outro conjunto de joias e armas recebidas por Bolsonaro</a>.</p>\r\n\r\n<p><img alt=\"Joias e Rolex de Bolsonaro — Foto: Reprodução\" src=\"https://s2.glbimg.com/1iw2xE06nOtUnBAvYFeeUKWyhVQ=/0x0:1135x638/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2023/A/b/sJ7BrWQ76QBcLSTEXALA/joias-rolex.jpg\" /></p>\r\n\r\n<p>Joias e Rolex de Bolsonaro — Foto: Reprodução</p>\r\n\r\n<p>Os advogados de Bolsonaro já tinham avisado o <a href=\"https://g1.globo.com/tudo-sobre/tribunal-de-contas-da-uniao/\">Tribunal de Contas da União</a> (TCU) que devolveriam as joias até que haja uma decisão final sobre qual deve ser o destino dos itens, <a href=\"https://g1.globo.com/politica/blog/julia-duailibi/post/2023/03/31/bolsonaro-rolex-sauditas-tcu.ghtml\">como publicou o <strong>blog</strong></a>.</p>\r\n\r\n<p>Este conjunto foi <a href=\"https://g1.globo.com/politica/blog/andreia-sadi/post/2023/03/28/bolsonaro-ficou-outro-conjunto-de-joias-sauditas.ghtml\">recebido em mãos pelo próprio Bolsonaro</a>. O estojo inclui um relógio da marca Rolex, uma caneta, abotoaduras e outros itens em ouro e brilhantes. O pacote, estimado em pelo menos R$ 500 mil, ficou guardado em <a href=\"https://g1.globo.com/politica/blog/andreia-sadi/post/2023/03/29/bolsonaro-guardou-conjunto-de-joias-em-fazenda-de-nelson-piquet.ghtml\">uma fazenda do ex-piloto Nelson Piquet, em Brasília</a>.</p>\r\n\r\n<p>Em petição direcionada ao ministro Augusto Nardes, a defesa do ex-presidente afirmou que esse novo conjunto de joias, cuja existência foi revelada pela imprensa, não eram objeto da representação original do TCU, que versava sobre joias recebidas por comitiva que foi à Arábia Saudita em 2021.</p>\r\n', '1680655710.0308-foto-N.png', 'A defesa do ex-presidente entregou nesta terça-feira (4) um pacote de joias recebidas em 2019, no mesmo local em que foi devolvido outro pacote em março, em Brasília.', 6, 'Na véspera de depoimento para a PF, Bolsonaro entrega terceiro kit de joias', '', 'A defesa do ex-presidente entregou nesta terça-feira (4) um pacote de joias recebidas em 2019, no mesmo local em que foi devolvido outro pacote em março, em Brasília.', NULL, 'na-vespera-depoimento-pf,-bolsonaro-entrega-terceiro-kit-joias', 'Defesa de Bolsonaro entrega terceiro pacote com joias sauditas em agência da Caixa', NULL, NULL, NULL, NULL, 'S', 'S', 'N', 'S', '2023-04-05 00:48:30', '2023-04-05 00:48:30'),
(19, 'Sobe e desce: veja quem está mais rico e quem perdeu dinheiro entre os bilionários de tecnologia em 2023', 'g1', '<p>A Forbes divulgou nesta terça-feira (4) o <a href=\"https://g1.globo.com/economia/noticia/2023/04/04/forbes-divulga-ranking-anual-de-bilionarios-para-2023-com-bernard-arnault-no-topo.ghtml\">ranking das pessoas mais ricas do mundo em 2023</a>. A lista concentra alguns bilionários do setor da tecnologia, como <a href=\"https://g1.globo.com/tudo-sobre/elon-musk/\">Elon Musk</a>, <a href=\"https://g1.globo.com/tudo-sobre/mark-zuckerberg/\">Mark Zuckerberg</a>, <a href=\"https://g1.globo.com/tudo-sobre/jeff-bezos/\">Jeff Bezos</a>, <a href=\"https://g1.globo.com/tudo-sobre/bill-gates/\">Bill Gates</a> e <a href=\"https://g1.globo.com/tudo-sobre/larry-page/\">Larry Page</a>.</p>\r\n\r\n<p>Segundo a publicação, o clube dos bilionários está mais pobre, devido ao aumento das taxas de juros e a desvalorização das ações.</p>\r\n\r\n<p>Só na tecnologia, dos oito primeiros colocados, apenas um ganhou mais dinheiro. <strong>Confira a seguir o sobe e desce:</strong></p>\r\n\r\n<p> </p>\r\n\r\n<h2>Elon Musk</h2>\r\n\r\n<p> </p>\r\n\r\n<p><img alt=\"Elon Musk; Twitter; tecnologia — Foto: Robyn Beck/Pool via REUTERS/File Photo\" src=\"https://s2.glbimg.com/bNjODo2v7E5t212otW7AgE6p1nE=/0x0:4000x2662/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/J/M/ZNjBvaQpyUEBCnAVo97w/2022-11-15t231949z-1146041284-rc2omx9vpiy7-rtrmadp-3-tesla-compensation-trial.jpg\" /></p>\r\n\r\n<p>Elon Musk; Twitter; tecnologia — Foto: Robyn Beck/Pool via REUTERS/File Photo</p>\r\n\r\n<p>Dono do Twitter, da Tesla e da SpaceX, Elon Musk é hoje a segunda pessoa mais rica do mundo, atrás apenas do francês Bernard Arnault, presidente do grupo de luxo LVMH.</p>\r\n\r\n<p>Musk viu sua fortuna crescer entre 2020 e 2022, mas ela caiu de US$ 219 bilhões no ano passado para US$ 180 bilhões em 2023.</p>\r\n\r\n<p> </p>\r\n\r\n<ul>\r\n	<li><a href=\"https://g1.globo.com/tecnologia/noticia/2022/05/20/quem-e-elon-musk.ghtml\">Quem é Elon Musk</a></li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<p>Segunda a Forbes, a queda foi motivada após Musk <a href=\"https://g1.globo.com/tecnologia/noticia/2022/10/27/musk-conclui-compra-do-twitter-por-u-44-bilhoes-presidente-e-diretores-ja-foram-demitidos.ghtml\">desembolsar US$ 44 bilhões para adquirir o Twitter</a>. A compra fez com que as ações da Tesla despencassem, afetando sua riqueza.</p>\r\n\r\n<p> </p>\r\n\r\n<h2>Jeff Bezos</h2>\r\n\r\n<p> </p>\r\n\r\n<p><img alt=\"Jeff Bezos sofreu perdas bilionárias com queda das ações da Amazon — Foto: Pablo Martinez Monsivais/AP Photo\" src=\"https://s2.glbimg.com/i4VsDdmI2hKKIXXU2vrMFcYKZAg=/0x0:4896x3250/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/6/j/FImG0EQyC2xAnzKxNF8w/ap21266597518487.jpg\" /></p>\r\n\r\n<p>Jeff Bezos sofreu perdas bilionárias com queda das ações da Amazon — Foto: Pablo Martinez Monsivais/AP Photo</p>\r\n\r\n<p>Jeff Bezos, fundador da gigante do varejo Amazon e terceiro homem mais rico do mundo, também teve uma queda expressiva: em 2022, Bezos acumulava US$ 171 bilhões e, hoje, sua fortuna está em US$ 114 bilhões, segundo o ranking da Forbes.</p>\r\n\r\n<p>Bezos já foi o homem mais rico do mundo em julho de 2017 e entre 2018 e 2021. Ele já caiu para o quarto lugar, mas voltou para o terceiro em 25 de janeiro de 2023, quando a fortuna do indiano Gautam Adani - anteriormente o terceiro mais rico - caiu.</p>\r\n\r\n<p> </p>\r\n\r\n<h2><a href=\"https://g1.globo.com/tudo-sobre/larry-ellison/\">Larry Ellison</a></h2>\r\n\r\n<p> </p>\r\n\r\n<p><img alt=\"Larry Ellison, fundador da Oracle. — Foto: Oracle PR via Hartmann Studios\" src=\"https://s2.glbimg.com/TJKC6f0LJ1pd2InAPnkrk5zpJ5M=/0x0:2047x1365/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/P/K/r02FsiQaAsylp5QvqpKg/larry-ellison.jpg\" /></p>\r\n\r\n<p>Larry Ellison, fundador da Oracle. — Foto: Oracle PR via Hartmann Studios</p>\r\n\r\n<p>Larry Ellison, cofundador da empresa de softwares Oracle, ocupa a quarta colocação como pessoa mais rica do planeta. Para se ter ideia da evolução, o empresário estava em oitavo lugar na lista dos mais ricos em 2022.</p>\r\n\r\n<p>Comparado a outros bilionários da tecnologia, Larry está em uma situação melhor, sem registrar queda no patrimônio. Ele tem hoje uma fortuna de US$ 107 bilhões, contra US$ 106 bilhões em 2022.</p>\r\n\r\n<p>Assim como Musk, ele investiu na montadora Tesla e atuou no conselho da empresa de 2018 até 2022.</p>\r\n\r\n<p> </p>\r\n\r\n<h2>Bill Gates</h2>\r\n\r\n<p> </p>\r\n\r\n<p><img alt=\"Bill Gates durante o Fórum Econômico Mundial, em maio de 2022 — Foto: Reuters/Arnd Wiegmann\" src=\"https://s2.glbimg.com/Az-yPW2jtlffEm79Br7v2ISZDTg=/0x0:5471x3643/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/0/D/DW6qwwQ5uBLdkyFEQJjQ/bill-gates.jpg\" /></p>\r\n\r\n<p>Bill Gates durante o Fórum Econômico Mundial, em maio de 2022 — Foto: Reuters/Arnd Wiegmann</p>\r\n\r\n<p>Bill Gates é outro nome conhecido que também viu sua riqueza despencar. O fundador da Microsoft tinha US$ 129 bilhões no ano passado e hoje acumula uma fortuna de US$ 104 bilhões.</p>\r\n\r\n<p>Gates foi presidente-executivo da Microsoft por 25 anos, permaneceu como presidente até 2014 e deixou o conselho em 2020. Atualmente, ele tem investimentos em dezenas de empresas e é um dos maiores proprietários de terras agrícolas nos EUA.</p>\r\n\r\n<p>Ele já foi a pessoa mais rica do mundo entre 1995 e 2017, com intervalos em 2008, 2010 e 2013. Perdeu o posto definitivamente quando foi ultrapassado por Jeff Bezos.</p>\r\n\r\n<p> </p>\r\n\r\n<h2><a href=\"https://g1.globo.com/tudo-sobre/steve-ballmer/\">Steve Ballmer</a></h2>\r\n\r\n<p> </p>\r\n\r\n<p><img alt=\"Steve Ballmer — Foto: Arquivo pessoal\" src=\"https://s2.glbimg.com/VhSI3CDbh9QO0tEbKPPb416SB-s=/0x0:1024x731/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/M/1/qs3nVIRMeqAt3cS85h7g/ballmer.jfif\" /></p>\r\n\r\n<p>Steve Ballmer — Foto: Arquivo pessoal</p>\r\n\r\n<p>Steve Ballmer, ex-presidente-executivo da Microsoft, figura no ranking da Forbes na 10ª colocação, com US$ 80,7 bilhões em fortuna em 2023. Assim como a maioria dos bilionários de tecnologia, o ex-Microsoft também viu sua riqueza encolher: em 2022, ele tinha 91,4 bilhões.</p>\r\n\r\n<p>Ballmer liderou a Microsoft no período de 2000 a 2014. Após a sua saída, Ballmer focou na filantropia, doando mais de US$ 2 bilhões em um fundo recomendado por doadores, segundo a Forbes.</p>\r\n\r\n<p> </p>\r\n\r\n<h2>Larry Page</h2>\r\n\r\n<p> </p>\r\n\r\n<p><img alt=\"Larry Page — Foto: Photo credit: niallkennedy ></p>\r\n\r\n<p>Larry Page — Foto: Photo credit: niallkennedy on Visualhunt.com</p>\r\n\r\n<p>Larry Page é cofundador do Google e tem uma fortuna de US$ 79,2 bilhões em 2023 e ocupando o 12º lugar na lista. No ano passo, ele chegou a ficar em 6º lugar com US$ 111 bilhões.</p>\r\n\r\n<p>Page deixou de ser CEO da controladora do Google, a Alphabet, em 2019, mas permaneceu como membro do conselho e acionista controlador.</p>\r\n\r\n<p>Hoje, ele é um investidor fundador da empresa de exploração espacial Planetary Resources e financia as startups de carros voadores Kitty Hawk e Opener.</p>\r\n\r\n<p> </p>\r\n\r\n<h2><a href=\"https://g1.globo.com/tudo-sobre/sergey-brin/\">Sergey Brin</a></h2>\r\n\r\n<p> </p>\r\n\r\n<p><img alt=\"Sergey Brin, em foto de 27 de junho de 2012 — Foto: Paul Sakuma/AP Photo\" src=\"https://s2.glbimg.com/4LPBAW1VjITLSzW3m3kbILcqwF8=/0x0:1024x683/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/F/F/41WVTPQOOtl0PgVieNQg/ap120627166628.jpg\" /></p>\r\n\r\n<p>Sergey Brin, em foto de 27 de junho de 2012 — Foto: Paul Sakuma/AP Photo</p>\r\n\r\n<p>Fundador do Google junto a Page, Sergey Brin caiu de 10° para 14° homem mais rico do mundo, com uma fortuna de US$ 76 bilhões. No ano passado, ele tinha US$ 107 bilhões.</p>\r\n\r\n<p>Brin deixou o cargo de presidente da Alphabet em dezembro de 2019, mas continuou como acionista controlador e membro do conselho.</p>\r\n\r\n<p>Fugindo do antissemitismo, Brin migrou da Rússia para os Estados Unidos aos 6 anos. Ele é, hoje, um dos imigrantes mais ricos do país.</p>\r\n\r\n<p> </p>\r\n\r\n<h2>Mark Zuckerberg</h2>\r\n\r\n<p> </p>\r\n\r\n<p><img alt=\"Mark Zuckerberg, presidente-executivo da Meta.  — Foto: Getty Images via BBC\" src=\"https://s2.glbimg.com/dOpGd-N2FJxG-808h390ogcv6Wo=/0x0:640x360/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/I/W/Qyh7oFSeqcvMpkB5fypA/114386914-zuckerberg.jpg\" /></p>\r\n\r\n<p>Mark Zuckerberg, presidente-executivo da Meta. — Foto: Getty Images via BBC</p>\r\n\r\n<p>O presidente-executivo da Meta (Facebook, Instagram e WhatsApp), Mark Zuckerberg, viu sua fortuna cair de US$ 67,3 bilhões em 2022 para US$ 64,4 bilhões em 2023.</p>\r\n\r\n<p>Em 2014, ele chegou a ser o terceiro homem mais rico do setor de tecnologia dos Estados Unidos. Na época, ele tinha uma fortuna avaliada em US$ 34 bilhões.</p>\r\n\r\n<p>Zuckerberg, acumula perdas bilionárias no último ano com a desvalorização da Meta.</p>\r\n', '1680655878.5583-foto-N.png', 'Ranking da Forbes mostra que os poderosos da tecnologia estão &#39;mais pobres&#39; em 2023. De oito nomes, apenas um não teve perda.', 5, 'Sobe e desce: veja quem está mais rico e quem perdeu dinheiro entre os bilionários de tecnologia em 2023', '', 'Ranking da Forbes mostra que os poderosos da tecnologia estão &#39;mais pobres&#39; em 2023. De oito nomes, apenas um não teve perda.', NULL, 'sobe-desce-veja-quem-esta-mais-rico-quem-perdeu-dinheiro-entre-os-bilionarios-tecnologia-2023', 'Montagem com fotos dos bilionários da tecnologia Elon Musk, Jeff Bezos, Larry Ellison, Bill Gates, Larry Page e Sergey Brin — Foto: Reuters, Pablo Martinez Monsivais/AP, Commons Wikimédia, niallkennedy e Paul Sakuma/AP', NULL, NULL, NULL, NULL, 'S', 'S', 'N', 'N', '2023-04-05 00:51:18', '2023-04-05 00:51:18'),
(20, 'VÍDEOS: pescadora desaparecida é achada à deriva com corpo do marido em barco no AM', 'g1 AM*', '<p>Após uma semana do desaparecimento do <a href=\"https://g1.globo.com/am/amazonas/noticia/2023/04/03/casal-de-pescadores-desaparece-no-am-e-canoa-e-encontrada-amarrada-a-arvore.ghtml\">casal de pescadores José Nilson de Souza Bernardo e Maria das Graças Mota Bernardo, ambos de 68 anos</a>, a Marinha localizou, nesta terça-feira (4), a embarcação deles à deriva no Rio Negro, em <a href=\"https://g1.globo.com/am/amazonas/cidade/iranduba/\">Iranduba</a> (a 27 quilômetros de Manaus). O sumiço ocorreu na zona rural de <a href=\"https://g1.globo.com/am/amazonas/cidade/novo-airao/\">Novo Airão</a>, município da região metropolitana da capital.</p>\r\n\r\n<p>De acordo com a Marinha, a mulher foi resgatada com vida e o companheiro dela estava morto dentro da embarcação.</p>\r\n\r\n<p><img alt=\"José Nilson e Maria Graça desapareceram após saírem para pescar na Zona Rural de Novo Airão.  — Foto: Arquivo pessoal\" src=\"https://s2.glbimg.com/24u56dQsklsYQ1m8c2SEz9YA7cI=/0x0:900x500/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2023/m/3/B5TSZRQRGbFLNTRszcbg/casal-pescadores.jpg\" /></p>\r\n\r\n<p>José Nilson e Maria Graça desapareceram após saírem para pescar na Zona Rural de Novo Airão. — Foto: Arquivo pessoal</p>\r\n\r\n<p>De acordo com o delegado titular da 77ª Delegacia Interativa de Polícia (DIP) de Novo Airão, as informações preliminares dão conta que José Nilson teria morrido depois de sofrer um infarto durante a pescaria. Desde então, Maria das Graças ficou dentro da embarcação à deriva pelo rio, até serem localizados, na manhã desta terça.</p>\r\n\r\n<p>O helicóptero da Marinha localizou o barco dos pescadores e fez o resgate de Maria das Graças por meio da técnica de helocasting (onde o tripulante de resgate é lançado na água e segue a nado para a embarcação).</p>\r\n\r\n<p><img alt=\"Marinha resgata pescadora à deriva no Rio Negro, no Amazonas\" src=\"https://s03.video.glbimg.com/x240/11507378.jpg\" title=\"Marinha resgata pescadora à deriva no Rio Negro, no Amazonas\" /></p>\r\n\r\n<p>Reproduzir vídeo</p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p>Reproduzir</p>\r\n\r\n<p>--:--/--:--</p>\r\n\r\n<p>Silenciar som</p>\r\n\r\n<p>Tela cheia</p>\r\n\r\n<p>Marinha resgata pescadora à deriva no Rio Negro, no Amazonas</p>\r\n\r\n<p>Ainda conforme a Marinha, a mulher recebeu os primeiros socorros e atendimento e depois helitransportada até Manaus, onde foi encaminhada para hospital de referência da rede pública de saúde.</p>\r\n\r\n<p>O corpo de José Nilton foi transportado pelos Bombeiros ao necrotério do hospital de Novo Airão e depois deve ser encaminhado ao Instituto Médico Legal (IML), em Manaus.</p>\r\n\r\n<p>A Marinha informou que será instaurado Inquérito para investigar o caso.</p>\r\n\r\n<p><img alt=\"Helicóptero da Marinha fez o resgate da pescadora no Rio Negro.  — Foto: Divulgação/Marinha\" src=\"https://s2.glbimg.com/QmNCHjxG4jbw3wym81Bt7F8mQJY=/0x0:900x500/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2023/e/p/xRYKsoRMAEiStbzJqC1Q/resgate-marinha-pescadores.jpg\" /></p>\r\n\r\n<p>Helicóptero da Marinha fez o resgate da pescadora no Rio Negro. — Foto: Divulgação/Marinha</p>\r\n\r\n<p> </p>\r\n\r\n<h2>O caso</h2>\r\n\r\n<p> </p>\r\n\r\n<p>José Nilson e Maria Graça saíram para pescar na terça-feira (28) e iriam retornar na quinta (30).</p>\r\n\r\n<p>O casal<a href=\"https://g1.globo.com/am/amazonas/noticia/2023/04/03/casal-de-pescadores-desaparece-no-am-e-canoa-e-encontrada-amarrada-a-arvore.ghtml\"> utilizava duas embarcações durante a pescaria</a>. Um barco que servia como base para os dois, e uma canoa menor era utilizada pelo casal para auxiliar na pescaria na parte baixa do igapó - uma região de floresta alagada.</p>\r\n\r\n<p><img alt=\"Canoa do casal foi encontrada presa em árvore com peixes podres. — Foto: Divulgação\" src=\"https://s2.glbimg.com/fKyz5qLOr8oBJsu3N9M1_ewHXuc=/0x0:1600x720/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2023/s/8/UyF3agQMAJS1Cydd3qVA/canoa-e-encontrada-amarrada-em-arvore.jpeg\" /></p>\r\n\r\n<p>Canoa do casal foi encontrada presa em árvore com peixes podres. — Foto: Divulgação</p>\r\n\r\n<p>Como os pescadores não retornaram, parentes e vizinhos começaram a fazer buscas pelos dois, quando encontraram a embarcação menor amarrada a uma árvore com alguns peixes podres dentro. As malhadeiras - redes de pesca - também estavam no local, estiradas na água.</p>\r\n\r\n<p>Logo após o desaparecimento ser registrado pela Polícia Civil, a Marinha intensificou as buscas, com apoio do Corpo de Bombeiros, até a localização do casal.</p>\r\n', '1680659059.8953-foto-N.png', 'Casal estava desaparecido há uma semana. De acordo com a polícia, a mulher foi resgatada com vida e o companheiro teria morrido depois de sofrer um infarto durante a pescaria.', 8, 'VÍDEOS: pescadora desaparecida é achada à deriva com corpo do marido em barco no AM', '', '            Casal estava desaparecido há uma semana. De acordo com a polícia, a mulher foi resgatada com vida e o companheiro teria morrido depois de sofrer um infarto durante a pescaria.          ', NULL, 'vIdeos-pescadora-desaparecida-achada-deriva-corpo-marido-barco-no-am', NULL, '', NULL, '', '', 'S', 'S', 'S', 'N', '2023-04-05 01:43:38', '2023-04-05 01:43:38');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_cargo`
--

CREATE TABLE `tbl_cargo` (
  `id` int NOT NULL,
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
  `id` int NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `url_amigavel` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`id`, `nome`, `foto`, `url_amigavel`) VALUES
(3, 'PODER JUDICIÁRIO', NULL, 'poder-judiciario'),
(4, 'EVENTOS E CURSOS', NULL, 'eventos-cursos'),
(5, 'GERAL', NULL, 'geral'),
(6, 'PODER LEGISLATIVO', NULL, 'poder-legislativo'),
(7, 'ENTREVISTA &#38; DEBATE', NULL, 'entrevista-debate'),
(8, 'EDUCAÇÃO', NULL, 'educacao'),
(9, 'SINDICATOS', NULL, 'sindicatos'),
(10, 'ARTIGOS', NULL, 'artigos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_cliente`
--

CREATE TABLE `tbl_cliente` (
  `id` int NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `telefone` varchar(40) DEFAULT NULL,
  `sexo` varchar(2) DEFAULT NULL,
  `senha` varchar(80) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `endereco` varchar(250) DEFAULT NULL,
  `id_estado` int DEFAULT NULL,
  `id_cidade` int DEFAULT NULL,
  `bairro` varchar(250) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `complemento` varchar(250) DEFAULT NULL,
  `cpf` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_config`
--

CREATE TABLE `tbl_config` (
  `id` int NOT NULL,
  `id_campanha` int DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `id` int NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `telefone` varchar(40) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_frases`
--

CREATE TABLE `tbl_frases` (
  `id` int NOT NULL,
  `frase` text
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
  `id` int NOT NULL,
  `meta_title_principal` text,
  `meta_keywords_principal` text,
  `meta_description_principal` text,
  `meta_title_blog` text,
  `meta_keywords_blog` text,
  `meta_description_blog` text,
  `meta_title_contato` text,
  `meta_keywords_contato` text,
  `meta_description_contato` text,
  `meta_title_parceria` text,
  `meta_keywords_parceria` text,
  `meta_description_parceria` text,
  `meta_title_sobre` text,
  `meta_keywords_sobre` text,
  `meta_description_sobre` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `id` int NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `id` int NOT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `descricao` text,
  `texto` text,
  `foto` varchar(250) DEFAULT NULL,
  `meta_title` text,
  `meta_keywords` text,
  `meta_description` text,
  `pagina_referencia` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `id` int NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `telefone` varchar(250) DEFAULT NULL,
  `endereco` varchar(250) DEFAULT NULL,
  `cpf` varchar(100) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `id_cargo` int DEFAULT NULL,
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
  `id_frase` int DEFAULT NULL,
  `frase_lida` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `tbl_cargo`
--
ALTER TABLE `tbl_cargo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_config`
--
ALTER TABLE `tbl_config`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbl_contato`
--
ALTER TABLE `tbl_contato`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_frases`
--
ALTER TABLE `tbl_frases`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `tbl_metas_tags`
--
ALTER TABLE `tbl_metas_tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbl_textos`
--
ALTER TABLE `tbl_textos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
