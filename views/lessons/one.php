<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Журнал АТС</title>
</head>
<body>
<table border="1" width="800px">
    <tr><th>Заголовок</th>
        <th>Дата</th>
        <th>Описание</th>
        <th>Текст</th>
        <th>Автор</th>




    <tr>
        <td><?php echo $item->title; ?></td>
        <td><?php echo $item->data; ?></td>
        <td><?php echo $item->description; ?></td>
        <td><?php echo $item->text; ?></td>
        <td><?php echo $item->author; ?></td>


    </tr>





</table>




</body>
</html>
