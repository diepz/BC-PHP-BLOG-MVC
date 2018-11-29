<p>
    <a href="index.php?page=add">Create new post</a>
</p>

<ul>
    <?php foreach ($posts as $post): ?>
    <li>
        <h2><a href="index.php?page=view$id"><?php echo $post->id; ?></a></h2>
        <span><?php echo $post->create; ?></span>
        <p><?php echo $post->teaser; ?></p>
        <a href="index.php?page=edit&id=<?php echo $post->id; ?>">EDIT</a>
        <a href="index.php?page=delete&id=<?php echo $post->id; ?>"DELETE</a>
    </li>
    <?php endforeach; ?>
</ul>