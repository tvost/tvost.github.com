


#

https://www.apachefriends.org/download.html

<h1>Baixe o XAMPP</h1>

<h2>Para começar adicione os arquivos principais para o htdocs a pasta dentro da pasta do xampp apague todas MENOS a "xampp" e coloque os arquivos dentro do htdocs </h2>

<h3> Para login e registro funcionarem adicionar dados as variaveis $host de acordo com os nomes das variaveis. <<--- no caso os arquivos q tera que alterar as variaveis são os seguintes:"processarlogin.php"
                                        "processar_registro.php"</h3> 

<h4>A database dos arquivos php deve conter usuario senha email para funcionar, type VARCHAR255 por causa da encryptação da senha.</h4>
<h4>você deve adicionar as variaveis dos arquivos ditos anteriormente, especificamente a "$banco" vai ser o nome da sua database</h4>

<h1>Se vc quiser você pode adicionar a variavel </h1>
" try {
    // Verificar se o e-mail já existe na tabela
    $verificarEmail = "SELECT * FROM "O NOME DA COLUNA DA DATABASE CONTENDO USUARIO SENHA E EMAIL"<<<<""" WHERE email = ?";"
<h1>OU</h1>

<h1> Dentro do php my admin do xampp crie uma database com o nome de "site1"</h1>
       ² use esse comando
       ³         ³ 
CREATE TABLE IF NOT EXISTS `site1` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `usuario` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL
) ENGINE=InnoDB;
}
<h3> Abra o xampp inicie o php my admin e o apache e veja seu site funcionando </h3>
#
<h1>      ENGLISH </h1>



<h1>BEGIN DOWNLOAD XAMPP AND ADD THE "main" file to the htdocs and erase the other files besides "xampp" paste, and paste the main in there</h1>
 2
<h2>For login and register work add data to the variables $host... accordingly with the name of the variables. <<--- in the case you have to
add data to the variables in the following filenames:"processarlogin.php"
                                                     "processar_registro.php</h2>

<h3>3.a. The database must have colunms name usuario senha email to work typestring varchar255 because of the encrypt password to works.</h3>
<h3>3.b-, you should add the variables from the files mentioned earlier, specifically, "$banco" will be the name of your database.</h3>
<h1> If u want u can change the variable</h1>
 $verificarEmail = "SELECT * FROM ""<<<(HEAR THE NAME OF THE COLUM OF DATABASE INSIDE THE QUOTATION) WHERE email = ?";
   <h1>OR</h1>
<h1>THIS</h1>
 -Inside php my admin xampp create a database name site1
       ² use this command
       ³ CREATE TABLE IF NOT EXISTS `site1` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `usuario` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL
) ENGINE=InnoDB;
}

<h2> Inside the xampp program init the xampp apache and mysql, join localhost and see your site working.</h2>








