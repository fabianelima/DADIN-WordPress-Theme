# TEMA DADIN 1.0
Tema de wordpress desenvolvido para o site do Departamento Acadêmico de Desenho Industrial ([DADIN](http://dadin.ct.utfpr.edu.br/)) da Universidade Tecnológica Federal do Paraná. 

Versão 1.0 - Julho 2018
------

## Objetivo
O tema Dadin foi criado a partir do template da professora Eunice Liu do DADIN pela professora Fabiane Lima, como forma de revitalização do site do departamento. 

## Estrutura
O tema conta com um header que mostra imagens do departamento, laboratórios utilizados pelos alunos, áreas da universidade. O corpo do tema conta com três colunas de contéudo, tendo o [Bootstrap v3.3.7](http://getbootstrap.com) como base para o código.
A coluna da esquerda possui uma sidebar com links para as páginas de informação sobre o departamento. Os posts criados no wordpress se localizam na coluna do meio, e demais links úteis aparecem na sidebar da direita, junto ao calendário. 
As páginas do menu possuem um template simples, o page.php, alterado do index.php que comanda o conteúdo o template geral. De acordo com a necessidade, podem ser criadas arquivos específicos para páginas diferentes, como foi criado para a página do corpo docente.

## Plugins 

------

### Event CLNDR
Calendário customizado para se adequar ao template inicial. O widget é chamado pelo arquivo agenda.php, funcionando como um sidebar. 

### ADL Team
Plugin costumizado para a página "Corpo Docente", mostrando a lista de professores e a página específica de cada um dos funcionários. O arquivo page-corpo-docente.php foi criado especificamente para dar mais liberdade para a customização do css de ambas as páginas nas quais o plugin atua.

## Manutenção do site
No momento, o principal arquivo utilizado para manutenção do site é o style.css para estilização do tema. 

## Necessidades do tema

------

### Modelo para posts e páginas
Criação de um modelo de regras a serem seguidas para a produção de posts e conteúdos das páginas. No momento, as páginas e posts não possuem uma diagramação geral para o conteúdo, apenas para o layout. 

### Sidebar da esquerda
Os links para as páginas do menu da esquerda (com exceção da "home" e "UTFPR") são gerados automaticamente pela função do wordpress wp_list_pages, que busca as páginas criadas dentro do admin do site, junto com a hierarquia as quais foram impostas, e gera os permalinks para o menu. Apesar de funcionar como o esperado, a parte de customização ainda requere uma pesquisa mais específica de como aplicar o css para que ele respeite o template inicial. O problema, no momento, é a aplicação do estilo quando uma página possui filhos, na qual o "parent" não está obedecendo alguns atributos do css separadamente dos filhos. 
