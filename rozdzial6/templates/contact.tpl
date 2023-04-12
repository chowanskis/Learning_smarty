{include file="header.tpl"}
{include file="navigation.tpl" page_title="Napisz do nas"}

<form method="post" action="contact_us.php">
<p>
    <b>Nazwisko:</bxbr />
    <input type="text" name="name" size="40">
</p>

<p>
    <b>Adres e-mail:</b><br />
    <input type="text" name="email" size="40">
</p>

<p>
    <b>Treœæ wiadomoœci:</b><br />
    <textarea name="message" cols="40" rows="10"></textarea>
</p>

<input type="submit" value="Wyœlij wiadomoœæ">
</form>

{include file="footer.tpl"}
