<table>
{section name=id loop=$titles}
    <tr>
        <td><img src={$images[id]}></td>
        <td>Tytu�: {$titles[id]}<br/>
            Cena: {$prices[id]}<br/>
            Autor: {$authors[id]}</td>
    </tr>
{/section}