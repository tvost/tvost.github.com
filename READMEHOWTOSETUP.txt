https://www.apachefriends.org/download.html
TO BEGIN DOWNLOAD XAMPP AND ADD THE "main" file to the htdocs and erase the other files besides "xampp" paste, and paste the main in there

---------------------------------------------------------------------------------------------------------------------------------------------  
1-PT-A-Para login e registro funcionarem adicionar dados as variaveis $host de acordo com os nomes das variaveis. <<--- no caso os arquivos q tera
q alterar as variaveis são os seguintes:processarlogin.php
                                        processar_registro.php
---------------------------------------------------------------------------------------------------------------------------------------------  
1-EN-A-For login and register work add data to the variables $host... accordingly with the name of the variables. <<--- in the case you have to
add data to the variables in the following filenames:processarlogin.php
                                                     processar_registro.php
---------------------------------------------------------------------------------------------------------------------------------------------
2-PT-A database dos arquivos php deve conter usuario senha email para funcionar, type VARCHAR255 por causa da encryptação da senha.
2-PT-B você deve adicionar as variaveis dos arquivos ditos anteriormente, especificamente a "$banco" vai ser o nome da sua database



---------------------------------------------------------------------------------------------------------------------------------------------

2-EN-A The database must have colunms name usuario senha email to work typestring varchar255 because of the encrypt password to works.
2-EN-B, you should add the variables from the files mentioned earlier, specifically, "$banco" will be the name of your database.
---------------------------------------------------------------------------------------------------------------------------------------------

3-PT-A- Se vc quiser você pode adicionar a variavel try {
    // Verificar se o e-mail já existe na tabela
    $verificarEmail = "SELECT * FROM ""<<<<aqui o nome da coluna WHERE email = ?";

---------------------------------------------------------------------------------------------------------------------------------------------

3-EN-A If u want u can change the variable     $verificarEmail = "SELECT * FROM ""<<<(HEAR THE NAME OF THE COLUM INSIDE THE QUOTATION) WHERE email = ?";

---------------------------------------------------------------------------------------------------------------------------------------------
                                                                         OR
3-PT-B-¹- Dentro do php my admin do xampp crie uma database com o nome de "site1"
       ² use esse comando
       ³         ³ 
CREATE TABLE IF NOT EXISTS `site1` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `usuario` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL
) ENGINE=InnoDB;
}
---------------------------------------------------------------------------------------------------------------------------------------------
3-EN-B-¹-Inside php my admin xampp create a database name site1
       ² use this command
       ³ CREATE TABLE IF NOT EXISTS `site1` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `usuario` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL
) ENGINE=InnoDB;
}





        







