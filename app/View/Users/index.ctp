<h1>Users List</h1>

<?php echo $this->Html->link(
    'Add Users',
    array('controller' => 'users', 'action' => 'add')
); ?>







<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Role</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['User']['id']; ?></td>
            <td><?php echo $user['User']['username']; ?></td>
            <td><?php echo $user['User']['role']; ?></td>
            <td><?php echo $user['User']['created']; ?></td>
        </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>