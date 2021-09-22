CREATE TABLE IF NOT EXISTS `tb_livro`(
  `livro_id` int(11) NOT NULL,
  `livro_nome` varchar(100) NOT NULL,
  `livro_autor` varchar(50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `tb_livro`
ADD PRIMARY KEY (`livro_id`);
  
  
ALTER TABLE `tb_livro`
MODIFY `livro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;