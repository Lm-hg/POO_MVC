<?php include __DIR__. '/./header.php';?>
<form action="ajouter" method="post">
    <div style="margin-bottom: 10px;">
        <label for="nom" style="font-weight: bold;">NOM:</label><br>
        <input type="text" name="nom" id="nom" style="padding: 5px; width: 200px; border-radius: 5px; border: 1px solid #ccc;">
    </div>
    <div style="margin-bottom: 10px;">
        <label for="formule" style="font-weight: bold;">Formule:</label><br>
        <input type="text" name="formule" id="formule" style="padding: 5px; width: 200px; border-radius: 5px; border: 1px solid #ccc;">
    </div>
    <div>
        <input type="submit" value="Ajouter" style="padding: 8px 16px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
    </div>
</form>

<?php include __DIR__. '/./footer.php';?>