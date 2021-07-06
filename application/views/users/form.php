<div class="row-fluid">
    <div class="span12">
        <form action="<?php echo site_url('users/save'); ?>" method="post">
            <input type="hidden" name="codigo" value="<?php echo $user->codigo; ?>">
            <div class="control-group">
                <label class="control-label" for="">Login</label>
                <div class="controls">
                    <input type="text" id="" name="login" value="<?php echo $user->login; ?>" class="input-medium"
                           maxlength="" tabindex="">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="">E-mail</label>
                <div class="controls">
                    <input type="text" id="" name="email" value="<?php echo $user->email; ?>" class="input-large"
                           maxlength="" tabindex="">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>