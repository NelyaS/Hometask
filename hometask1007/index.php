<?php

ini_set("display_errors", 1);

function getComment()
{
    $data = unserialize(file_get_contents('db.txt'));
    if (!is_array($data) || empty($data)) {
        $data = [];
    }
    return $data;
}

function saveComment (array $array)
{
    file_put_contents('db.txt', serialize($array));
}

$allComments = [];
if (isset($_POST['action'])) {
    $allComments = getComment();
    $newComment = [
        'user' => $_POST['user_name'],
        'title' => censor ($_POST['title']),
        'body' => censor ($_POST['body'])
    ];

    array_unshift($allComments, $newComment);
    saveComment($allComments);
}

if (!empty($allComments)) {
    $commentData = $allComments;
} else {
    $commentData = getComment();
}


function censor($string)
{
    $stopList =['1', '2', '3'];
    return str_replace($stopList, '[censored]', $string);
}


?>


<form action="" method='post'>
    <label>Имя :</label>
    <input type='text' name='user_name' placeholder='Имя'>
    <br>
    <label>Тема :</label>
    <input type='text' name='title' placeholder='Тема'>
    <br>
    <label>Текст :</label>
    <input name="body">
    <br>
    <input type="submit" value="Отправить">
    <input type="hidden" name="action" value="save">
</form>


<?php foreach ($commentData as $comment) : ?>
    <p><?=$comment['user']?></p>
    <p><?=$comment['title']?></p>
    <p><?=$comment['body']?></p>
    <p>----------------------</p>
<?php endforeach; ?>

    
