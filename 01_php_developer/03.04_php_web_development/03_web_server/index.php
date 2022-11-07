<?php

$links = [
    ['url' => 'https://google.com', 'name' => 'Google'],
    ['url' => 'https://yandex.com', 'name' => 'Yandex'],
    ['url' => 'https://bingo.com', 'name' => 'Bingo']
];

?>

<?php echo $links[0]['url'] ?>

<?php foreach ($links as $link) : ?>
    <?= $link['name'] ?>
<?php endforeach; ?>
