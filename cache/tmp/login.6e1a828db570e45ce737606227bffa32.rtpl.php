<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "header" );?>

<div class="row">

<div class="span6 center">

<h1 class="align-center">Identification</h1>
<p class="align-center">Vous devez vous identifier pour acceder à cette section</p>

    <form class="form-horizontal" method="POST" action="action.php?action=login">
    <div class="control-group">
    <label class="control-label" for="login">Identifiant</label>
    <div class="controls">
    <input type="text" id="login" name="login" placeholder="Identifiant">
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="password">Mot de passe</label>
    <div class="controls">
    <input type="password" id="password" name="password" placeholder="Mot de passe">
    </div>
    </div>
    <div class="control-group">
    <div class="controls">
    <label class="checkbox">
    <input type="checkbox"> Se souvenir de moi
    </label>
     <button type="submit" class="btn btn-info">Connexion</button>
<button type="button" class="btn">Abandon</button>
    </div>
    </div>
    </form>





 

</div>

</div>

<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "footer" );?>
   