# Teste de PHP (Back-End)
##### Objetivo
Criar um sistema simples, totalmente desenvolvido em PHP e MySQL, sem a utilização de nenhum framework, onde será possível Criar/Editar/Excluir/Listar usuários/Pesquisar usuários (por qualquer parametro). O sistema também deve possuir a possibilidade de vincular/desvincular várias cores ao usuário.

##### Estrutura de banco de dados
A seguinte estrutura será utilizada para persistência dos dados, podendo ser alterada a qualquer momento para melhor funcionamento do sistema:

```sql
    tabela: users
        id      int not null auto_increment primary key
        name    varchar(100) not null
        email   varchar(100) not null
        idade   int not null
        fone    int not null
```
```sql
    tabela: colors
        id      int not null auto_increment primary key
        name    varchar(50) not null
```

##### Start
Para início das atividades, use como base o arquivo `connection.php`, este é apenas um arquivo exemplo onde é aberta conexão com o banco de dados e lista os usuários do banco.

##### Envio do teste
Você deve criar um fork deste repositório com o seu nome ex.: `/back-end-php-teste/seunome/` e além de colocar os arquivos deve colocar o .sql numa pasta chamada `/db/`. Para deixar observações, você pode deixar um arquivo chamado `observacoes.md` e nos informar através do email. **Após a finalização do teste, enviar um email para o colaborador responsável por sua contratação na Melhor Comunicação.**

##### Boa Sorte
Use seu conhecimento, consulte a documentação e o google, caso ainda houver dúvidas, nos pergunte. Boa sorte!
