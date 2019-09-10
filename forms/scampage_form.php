<fieldset>
    <div class="form-group">
        <label for="absolute_url">Absolute URL *</label>
        <input type="text" name="absolute_url" value="<?php echo htmlspecialchars($edit ? $customer['absolute_url'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Absolute URL" class="form-control" required="required" id="absolute_url">
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <i class="glyphicon glyphicon-send"></i></button>
    </div>
</fieldset>
