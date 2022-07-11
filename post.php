<?php
    
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }

?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"> <?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, possimus quibusdam ad totam voluptate non consequatur ducimus laboriosam debitis sunt maiores in sit perferendis, quidem illo doloribus officiis ipsa. Quod!
        Consectetur quod officiis rerum iusto. Omnis vero eos molestias tenetur dolores, a sit, tempora aperiam beatae ullam libero explicabo quia ipsum sint incidunt blanditiis sapiente distinctio dolore repudiandae labore? Ullam!
        Nemo dolorem maiores temporibus blanditiis suscipit accusantium odio! Dicta temporibus pariatur enim nostrum illum autem eum, laborum, rem expedita quo sunt dolorum ipsam tenetur iste nobis voluptate architecto aliquid deleniti?
        Praesentium animi, beatae quia nam eius nulla rem, quaerat voluptates quos ab sunt ipsa. Provident, debitis, odit tempore perferendis minus, velit aliquam consequuntur natus laboriosam obcaecati dolor facilis neque eaque?
        Assumenda placeat illo omnis? Et neque praesentium, temporibus doloribus alias dolore, iste tenetur voluptatem inventore deserunt ullam repellendus corrupti reprehenderit aperiam voluptate nihil expedita numquam nisi, totam quos explicabo voluptates.
        </p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, possimus quibusdam ad totam voluptate non consequatur ducimus laboriosam debitis sunt maiores in sit perferendis, quidem illo doloribus officiis ipsa. Quod!
        Consectetur quod officiis rerum iusto. Omnis vero eos molestias tenetur dolores, a sit, tempora aperiam beatae ullam libero explicabo quia ipsum sint incidunt blanditiis sapiente distinctio dolore repudiandae labore? Ullam!
        Nemo dolorem maiores temporibus blanditiis suscipit accusantium odio! Dicta temporibus pariatur enim nostrum illum autem eum, laborum, rem expedita quo sunt dolorum ipsam tenetur iste nobis voluptate architecto aliquid deleniti?
        Praesentium animi, beatae quia nam eius nulla rem, quaerat voluptates quos ab sunt ipsa. Provident, debitis, odit tempore perferendis minus, velit aliquam consequuntur natus laboriosam obcaecati dolor facilis neque eaque?
        Assumenda placeat illo omnis? Et neque praesentium, temporibus doloribus alias dolore, iste tenetur voluptatem inventore deserunt ullam repellendus corrupti reprehenderit aperiam voluptate nihil expedita numquam nisi, totam quos explicabo voluptates.
        </p>
    </div>

    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php include_once("templates/footer.php") ?>