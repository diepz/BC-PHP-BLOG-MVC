<h2>Create new post</h2>

<?php
if (isset($message)) {
    echo '<p>$message</p>';
}
?>

<form action="/index.php?page=add" method="post">
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" class="form-controll">
    </div>
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" class="form-controll">
    </div>
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" class="form-controll">
    </div>
</form>
