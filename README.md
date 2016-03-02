# Formulário de contato

- Mensagens são enviadas para o banco de dados

> É necessário configurar o banco de dados e criar a tabela descrita abaixo.

```sql
CREATE TABLE testmails (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone INT(15),
  specify CHAR(127) NOT NULL,
  city CHAR(63),
  uf CHAR(4),
  message TEXT,
  created DATETIME,
  modified DATETIME
);
```
