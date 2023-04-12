<table>
{section name=id loop=$titles}
    <tr>
        <td><img src={$images[id]}></td>
        <td>Tytu³: {$titles[id]}<br/>
            Cena: {$prices[id]}<br/>
            Autor: {$authors[id]}</td>
    </tr>
{/section}