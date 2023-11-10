


#

# https://www.apachefriends.org/download.html</h1>

# Baixe o XAMPP<h1>

Para começar adicione os arquivos principais para o htdocs a pasta dentro da pasta do xampp apague todas MENOS a "xampp
e coloque os arquivos dentro do htdocs para o login e registro funcionarem adicionar dados as variaveis $host de acordo com os nomes das variaveis.
os arquivos q tera que alterar as variaveis são os seguintes.
  
  # "processarlogin.php"</h4>
 # "processar_registro.php"</h4>

#Você deve adicionar as variaveis dos arquivos ditos anteriormente, especificamente a "$banco" vai ser o nome da sua database
Se vc quiser você pode adicionar a variavel nos arquivos processarlogin.php e processar_registro.php
altere em ambos os arquivos de acordo com o funcionamento desejado e de acordo com a database, ambas variaveis
 listadas aqui estao nos 2 arquivos mencionados anteriormente.

```php

$sql = "SELECT * FROM site1 WHERE email = ?"
$sql = "SELECT * FROM site1 WHERE email = ?";

```

# OU</h1>

# Dentro do php my admin do xampp crie uma database com o nome de "site1"</h1>
      use esse comando:

```php
CREATE TABLE IF NOT EXISTS `site1` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `usuario` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL
) ENGINE=InnoDB;
}
```
## Abra o xampp inicie o php my admin e o apache e veja seu site funcionando <h2>
#




#      ENGLISH </h1>

# https://www.apachefriends.org/download.html</h1>

# BEGIN DOWNLOAD XAMPP <h1>

## AND ADD THE "main" file to the htdocs and erase the other files besides "xampp" paste, and paste the main in there <h2>

# For login and register work add data to the variables $host... accordingly with the name of the variables in the case you have to add data to the variables in the following filenames <h1>
  # "processarlogin.php"</h4>
 # "processar_registro.php"</h4>

 The database must have colunms name usuario senha email to work typestring varchar255 because of the encrypt
 password to works you should add the variables from the files mentioned earlier, specifically, "$banco" will be the name of your database
 If u want u can change the variable in the files mentioned before

```php

"$sql = "SELECT * FROM site1 WHERE email = ?""
"$sql = "SELECT * FROM site1 WHERE email = ?";"
```


# OR<h1>

# THIS <h1>

 -Inside php my admin xampp create a database name site1
  use this command
       
       ```php

  CREATE TABLE IF NOT EXISTS `site1` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `usuario` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL
) ENGINE=InnoDB;
}
```

<h1> Inside the xampp program init the xampp apache and mysql, join localhost and see your site working.</h1>








