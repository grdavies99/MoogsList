<?php
include 'simple_html_dom.php';
function scraper($isbn){
$url = 'https://www.campusbooks.com/search/'.$isbn.'?buysellrent=buy';
$dom = file_get_html($url,false);
$i =1;
$price = [];
$title =[];
$author =[];
$temp = [];
$img = $dom->find('section.block-cb-search-bookimage-block');
    $imgOut = $img[0]->children(0)->src;
    $fuc = ' ';
    $you = '/';
    echo '<img class="card-img col-5 pl-0 float-left src="'.str_replace($imgOut, $fuc, $you).'">';
    echo '<div class="card">
                <div class="card-body d-flex flex-column">';
    foreach($dom->find('h1.page-header') as $title){
    echo '<h1 class="card-header">'.$title->plaintext.'</h1>';
    }
    
    $author =$dom->find('dl.col-xs-8');
        echo '<h3>'.$author[0]->children(0).'</h3>';
        echo '<h4>'.$author[0]->children(3).'<h4>';
        echo $author[0]->children(1);
foreach($dom->find('td.total') as $price){
    if($i > 3 ){
        $I = 1;
        break;
    }
    $i++;
}
echo '<button class="card-footer bg-primary"><h3>sell for '.$price.'</h3></button></div>
</div>';


    }

?>
