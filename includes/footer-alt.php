<ol class="pagination">
    <li>
        <?php if (!empty($strPrev)) : ?>
            <a href="<?= strtolower(str_replace(' ', '-', $strPrev)) ?>.php">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="icon icon--onLeft"><path d="M24 40.55 7.45 24 24 7.45 27.35 10.75 16.5 21.65H40.55V26.35H16.5L27.35 37.2Z"></path></svg>
                <?php if (!empty($strParent) && $strParent !== $strPrev) : ?>
                    <?= htmlspecialchars($strParent) ?>:
                <?php endif; ?>
                <?= htmlspecialchars($strPrev) ?>
            </a>
        <?php else : ?>
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="icon icon--onLeft"><path d="M24 40.55 7.45 24 24 7.45 27.35 10.75 16.5 21.65H40.55V26.35H16.5L27.35 37.2Z"></path></svg>
                Homepage
            </a>
        <?php endif; ?>
    </li>

    <li>
        <?php if (!empty($strNext)) : ?>
            <a href="<?= strtolower(str_replace(' ', '-', $strNext)) ?>.php">
                <?php if (!empty($strParent) && $strParent !== $strNext) : ?>
                    <?= htmlspecialchars($strParent) ?>:
                <?php endif; ?>
                <?= htmlspecialchars($strNext) ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="icon icon--onRight"><path d="M24 40.55 20.65 37.15 31.5 26.35H7.45V21.65H31.5L20.65 10.8L24 7.45L40.55 24Z"></path></svg>
            </a>
        <?php else : ?>
            <a href="index.php">
                Homepage
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="icon icon--onRight"><path d="M24 40.55 20.65 37.15 31.5 26.35H7.45V21.65H31.5L20.65 10.8L24 7.45L40.55 24Z"></path></svg>
            </a>
        <?php endif; ?>
    </li>
</ol>
