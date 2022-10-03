

<!DOCTYPE html>
<html>
<head>
{*<link rel="stylesheet" href="../../css/sorep_catalogslider.css" />*}
{* <title>Catalog Slider</title> *}
</head>
<body>
{$accessory_data|dump}
<h1>Catálogos</h1>
{* {foreach $accessory_data as $productsData} *}
{* <ul class="side-by-side-list">
<li class="products-list">
<div class="background-family-carousel"> 
<img class="product-example-carousel" src={$productsData->images["0"]}  />
<h4 class="product-type-title" style="margin-bottom:5%;">{$productsData->name["1"]}</h4>
<h6 class="product-type-subtitle">{$productsData->description_short["1"]}</h6>
</div>
</li> *}
{* {/foreach} *}


</body>
</html>
