<?php

$car = [
    ['id'=>1, 'model'=>'Tesla', 'price'=>1000],
    ['id'=>2, 'model'=>'Tesla X', 'price'=>10000]
];

$sortArray = [];

foreach ($car as $item){
    foreach ($item as $key => $value){
        if(!isset ($sortArray[$key])){
            $sortArray[$key] = [];
        }
        $sortArray[$key][] = $value;
    }
}

array_multisort($sortArray['price'], SORT_DESC, $car);

?><table><?php
foreach ($car as $key => $value) : ?>
    <tr>
        <td><?= $value['id']; ?></td>
        <td><a href="info.php?model = <?= $value['model']; ?>"></a></td>
        <td><?= $value['price']; ?></td>
    </tr>
<?php endforeach;
?></table>