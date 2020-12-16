## Sobre o Mini-Projeto

Este script foi feito em PHP, foi desenvolvido foi desenvolvido a partir de um desafio lançado pra meu supervisor da empresa a qual estágio.

A ideia era Criem um script em PHP, que seja capaz de:

1. Identificar os links das imagens e retorná-los em um array.
2. Parsear/Iterar o array com as imagens e ter acesso a cada uma delas.
3. substituir a parte "grid" por "device" na url da imagem, a fim de pegar a melhor qualidade.
4. No diretório do script, criem uma pasta chamada "imagens"
5. Fazer o download das páginas no diretório descrito acima.

## 1 - Identificar os links das imagens e retorná-los em um array.

Obtive todo o conteudo usando a tag
```
file_get_contents
```

## 2 - Parsear/Iterar o array com as imagens e ter acesso a cada uma delas.

Logo em seguida utilizei uma função do PHP que trabalha com regex, e retorna os resultados em um array.
```
preg_match_all('/<img src="(.*?)"/', $site, $links)
```
Agora tenho o controle dos links das imagens a minha disposição

## 3 - substituir a parte "grid" por "device" na url da imagem, a fim de pegar a melhor qualidade.

Aqui eu utilizei uma outra função do PHP que trabalha com regex, e a partir de ocorrencias faz uma substituição no texto alvo.
```
preg_replace('#grid#is', 'device', $links[1][$i])
```
Coloquei o retorno dessa função no próprio indice no array, já que está sendo executado dentro de um foreach

## 4 - No diretório do script, criem uma pasta chamada "imagens"

Aqui somente criei um diretorio com o nome imagens para posteriormente salva-las.

## 5 - Fazer o download das páginas no diretório descrito acima.

Executei um comando do php que executa um programa externo, no caso um comando no terminal. Na execução uso o comando wget pra baixar as imagens dentro do array de imagens, especificando o diretório para download.
```
exec('wget -P /home/mattw/projects/www/desafio/imagens '.$links[1][$i]);
```

## Pré-requisitos

Basta ter um servidor web, como o » Apache, e claro o » PHP.

## Ferramentas utilizadas
 - Visual Studio Code
 - Git e Github

## Como rodar o Mini-Projeto

Estando o projeto no diretorio do apache, no meu caso o www/, basta abrir a pagina no navegador.
Acessando localhost/

## Autor

* **Mateus Perera** - *Student* - [Linkedin](https://www.linkedin.com/in/mateus-pereira-971946197/)

## Referencias

Na construção do projeto fiz algumas pesquisas que ajudaram muito as quais destaco:
 - Exec [PHP.NET](https://www.php.net/manual/pt_BR/function.exec.php)
 - Preg_match_all [PHP.NET](https://www.php.net/manual/pt_BR/function.preg-match-all)
 - Preg_replace [PHP.NET](https://www.php.net/manual/pt_BR/function.file-get-contents)
 - Wget [Hostinger](https://www.hostinger.com.br/tutoriais/wget-o-que-e-como-instalar-comandos-wget)

## Licença

[MIT](https://opensource.org/licenses/mit-license.php) &copy; Mateus Pereira - Brasil

## Obrigado!
