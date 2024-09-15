<?php
$title = "Detail Recipe";
require_once APPROOT . '/src/views/include/header.php';
?>
<main>
    <article>
        <section class="section hero has-bg-image" aria-label="about-us"
            style="background-image: url('<?= URLROOT ?>/<?= $data["details"]->image  ?>')">
            <div class="center-container">
                <h1 class="h1 hero-title "> <?= $title  ?> </h1>
            </div>
        </section>

        <section class="section container">
            <iframe id="ckeditorFrame" width="100%" height="100%" style="border:none;"></iframe>
        </section>

        <section class="comments container">
            <?php if(isset($_SESSION["user"])&&$_SESSION["user"]): ?>

            <form class="comment-form" action="<?= URLROOT ?>/recipe/addComment" method="POST">
                <input type="hidden" name="id" value="<?= $data["details"]->id ?>">
                <div class="comments-block">
                    <div class="comments-header">
                        <div class="comments-title">
                            <h2>Comments</h2>
                            <div class="tag"><?= count($data["comments"]) ?></div>
                        </div>
                    </div>
                    <div class="comments-writing">
                        <textarea class="textarea" autofocus spellcheck="false" name="comment" required></textarea>
                        <div class="comments-footer">
                            <div class="group-button">
                                <button class="btn btn-primary" type="submit">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php endif; ?>
            <div class="wrapper">
                <?php foreach ($data["comments"] as $comment): ?>
                    <div class="comment">
                        <div>
                            <div class="content">
                                <div class="avatar">
                                <figure >
                                    <img src="<?= URLROOT ?>/img/user-default.png" loading="lazy" alt="<?= $comment->username ?>">
                                </figure>
                                   
                                </div>
                                <div class="content-comment">
                                    <div class="user">
                                        <h5><?= $comment->username ?></h5>
                                        <span class="is-mute"><?= $comment->created_at ?></span>
                                        <?php if(isset($_SESSION["user"]) && ($_SESSION["user"]["role"] === "admin" || $comment->username === $_SESSION["user"]["username"])): ?>
                                            <a style="color:red" href="<?= URLROOT ?>/recipe/removeComment/<?= $comment -> id ?>"> Xoá comment</a>
                                        <?php endif; ?>
                                    </div>
                                    <p><?= $comment->comment ?></p>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </article>
</main>

<script type="text/javascript">
    var iframe = document.getElementById('ckeditorFrame');
    var content = <?= json_encode($data["details"]->instruction) ?>;
    iframe.contentWindow.document.open();
    iframe.contentWindow.document.write('<html><head><link rel="stylesheet" type="text/css" href="path/to/ckeditor.css"></head><body>' + content + '</body></html>');
    iframe.contentWindow.document.close();

    function adjustIframeHeight() {
        iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
    }
    iframe.onload = adjustIframeHeight;
</script>

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>