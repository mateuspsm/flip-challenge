<?php
$site = file_get_contents("https://bc-v2.pressmatrix.com/pt-BR/profiles/c9e49eb97a66/editions/13e7845d8934afa67619/pages/toc");

if (preg_match_all('/<img src="(.*?)"/', $site, $links)) {
    foreach ($links[1] as $indice => $img) {
        $img = preg_replace('#grid#is', 'device', $img);
        exec('wget -P /home/mattw/projects/www/desafio/imagens ' . $img);
    }
}
