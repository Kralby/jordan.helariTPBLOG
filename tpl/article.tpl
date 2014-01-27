
<h3>{$article.titre}</h3>ecrit le {$article.publie|date_format}<BR><BR><BR>
{$article.texte|escape:html}
<img src="{$article.image}"/>
{if $connect == true}
<BR><BR><a href="article.php?id={$article.id}" class="btn btn-primary">Modifier</a>
<a href="supprimer_article.php?id={$article.id}" class="btn btn-primary">Supprimer</a>
{/if}
