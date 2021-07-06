<div class="row-fluid">
    <div class="span4"></div>
    <div class="span4">
        <form class="form-horizontal" method="post" action="<?php echo site_url('login/action'); ?>">
            <div class="control-group">
                <label class="control-label" for="inputEmail">Email</label>
                <div class="controls">
                    <input type="text" name="email" placeholder="Email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Password</label>
                <div class="controls">
                    <input type="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn">Logar</button>
                    <a href="<?php echo site_url('users/list'); ?>" class="btn btn-primary">Usuários</a>
                </div>
            </div>
        </form>
    </div>
    <div class="span4"></div>
</div>