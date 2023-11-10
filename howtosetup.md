https://www.apachefriends.org/download.html

<PORTUGUESE></PORTUGUESE> 1-# 
<ENGLISH><ENGLISH>2-#

#


Para começar adicione os arquivos principais para o htdocs do xampp apague todas MENOS a "xampp" e coloque os arquivos dentro do htdocs


 
1.a-  Para login e registro funcionarem adicionar dados as variaveis $host de acordo com os nomes das variaveis. <<--- no caso os arquivos q tera que alterar as variaveis são os seguintes:"processarlogin.php"
                                        "processar_registro.php"

2.a- database dos arquivos php deve conter usuario senha email para funcionar, type VARCHAR255 por causa da encryptação da senha.
2-PT-B você deve adicionar as variaveis dos arquivos ditos anteriormente, especificamente a "$banco" vai ser o nome da sua database

3.a- Se vc quiser você pode adicionar a variavel " try {
    // Verificar se o e-mail já existe na tabela
    $verificarEmail = "SELECT * FROM "AQUI O NOME DA COLUNA"<<<<""" WHERE email = ?";"

                                                                         OR
3.b-¹- Dentro do php my admin do xampp crie uma database com o nome de "site1"
       ² use esse comando
       ³         ³ 
CREATE TABLE IF NOT EXISTS `site1` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `usuario` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL
) ENGINE=InnoDB;
}
4- Abra o xampp inicie o php my admin e o apache e veja seu site funcionando
#
<h1>      ENGLISH </h1>



 1.BEGIN DOWNLOAD XAMPP AND ADD THE "main" file to the htdocs and erase the other files besides "xampp" paste, and paste the main in there
 2.For login and register work add data to the variables $host... accordingly with the name of the variables. <<--- in the case you have to
add data to the variables in the following filenames:"processarlogin.php"
                                                     "processar_registro.php
3.a. The database must have colunms name usuario senha email to work typestring varchar255 because of the encrypt password to works.
3.b-, you should add the variables from the files mentioned earlier, specifically, "$banco" will be the name of your database.
4.a- If u want u can change the variable     $verificarEmail = "SELECT * FROM ""<<<(HEAR THE NAME OF THE COLUM INSIDE THE QUOTATION) WHERE email = ?";
4.b- 3-EN-B-¹-Inside php my admin xampp create a database name site1
       ² use this command
       ³ CREATE TABLE IF NOT EXISTS `site1` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `usuario` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL
) ENGINE=InnoDB;
}
5.a- Inside the xampp program init the xampp apache and mysql, join localhost and see your site working.








