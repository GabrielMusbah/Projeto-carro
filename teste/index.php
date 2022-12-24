<?php

echo $_POST['admin'];

?>

<form method="POST">
    <label class="input-group-text" for="admin">Modo</label>
    <select class="form-select" name="admin" id="admin" required>
        <option value="true">Admin</option>
        <option value="false">Normal</option>
    </select>

    <button class="btn btn-primary mt-3">
                            Salvar
    </button>
</form>