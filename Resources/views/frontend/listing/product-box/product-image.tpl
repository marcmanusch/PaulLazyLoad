{extends file="parent:frontend/listing/product-box/product-image.tpl"}

{block name='frontend_listing_box_article_image_picture_element'}
    <img src="{link file='frontend/_public/src/img/no-picture.jpg'}" data-src="{$sArticle.image.thumbnails[0].source}"
         alt="{$desc}"
         title="{$desc|truncate:160}" />
{/block}