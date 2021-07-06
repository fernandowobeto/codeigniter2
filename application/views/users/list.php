<div class="row-fluid">
    <div class="span12">
        <table class="table table-bordered table-striped table-header table-hover table-ellipsis" id="">
            <thead>
            <tr>
                <th>Código</th>
                <th>Login</th>
                <th>E-mail</th>
                <th colspan="2">#</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?php echo $user->codigo;?></td>
                <td><?php echo $user->login;?></td>
                <td><?php echo $user->email;?></td>
                <td>
                    <a href="<?php echo site_url("users/form/{$user->codigo}");?>">
                        <i class="icon-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="<?php echo site_url("users/delete/{$user->codigo}");?>">
                        <i class="icon-remove"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>