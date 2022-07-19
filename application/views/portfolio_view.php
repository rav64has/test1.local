<?php
    require "lib/db.php";
        
    $sql = 'SELECT * FROM `uchet`';
    $query = $conn-> query($sql);
    if ($result = $conn->query($sql)) {
?>
<br/>
<br/>
<br/>
<br/>
<table class='table'>
    <thead>
        <tr>
            <th> №  </th>
            <th>Тип</th>
            <th>Дата</th>
            <th>Наименование </th>
            <th>Стоимость, сум.</th>
            <th>Количеств</th>
            <th>Удалить</th>
            <th>Редактировать</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $row):?>
    <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['type'];?></td>
    <td><?php echo $row['date'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['summ'];?></td>
    <td><?php echo $row['amout'];?></td>
    <td><a href="del.php?del=<?=$row ['id']?>">delete</a></td>
    <td><a href="edit.php?edit=<?php echo $row['id'];?>">edit</a></td>
    </tr>
    
    <?php endforeach; ?>
</table>
        </tbody>
<?php
}
?>
	<br/>
<form action="/add.php" target="_blank">
    <button>Дабавить</button>
</form> 