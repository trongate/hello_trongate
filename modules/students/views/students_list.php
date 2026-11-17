<h1><?= $headline ?></h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>City</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $counter = 0;
        foreach($students as $student) { 
            $counter++;
        ?>
        <tr>
            <td class="text-center"><?= $counter ?></td>
            <td><?= $student['first_name'] ?></td>
            <td><?= $student['last_name'] ?></td>
            <td><?= $student['city'] ?></td>
        </tr><?php
        }
        ?>
    </tbody>
</table>
