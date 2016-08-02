<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('blog/create'); ?>
    
    <label for="title">Title</label>
    <input type="input" name="title" /><br/>

    <label for="text">Text</label>
    <textarea name="text"></textarea><br/>

    <label for="writer">Writer</label>
    <input type="input" name="writer"/><br/>

    <input type="submit" value="发表"/>

</form>