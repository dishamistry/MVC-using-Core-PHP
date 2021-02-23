<?php require_once 'partials/head.php'; ?>

    <h2>All Users</h2>

        <h2>submit form</h2>
        <form method="post" action="/users">
            <input name="user_name">
            <button type="submit">submit</button>
        </form>

        <ol type="1">
            <?php foreach ($users as $user) : ?>

                <li><?= $user->user_name; ?></li>

            <?php endforeach; ?>
        </ol>

<?php require_once 'partials/footer.php'; ?>