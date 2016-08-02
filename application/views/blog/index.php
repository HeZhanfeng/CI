<!-- <h2>
    <?php 
        echo $title;
    ?>
</h2> -->

<?php foreach ($blog as $blog_item): ?>

    <h3><?php echo $blog_item['title']; ?></h3>
    <div class="main">
        <?php echo $blog_item['text']; ?>
    </div>
    <p><a href="/">点击查看</a></p>

<?php endforeach; ?>