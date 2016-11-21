<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.11.16
 * Time: 19:56
 */

?>

<html>
    <head>
        <link href="lib/bootstrap4/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <form enctype="multipart/form-data" method="post" action="">
        <div class="card text-xs-center" style="width: 20%;height: auto;margin: 150px auto;">
           <div class="card-header">
                V1.0
           </div>
           <div class="card-block" >
               <h4 class="card-title">Авторизация</h4>

                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                         <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    </span>
                    <input type="text" name="user" class="form-control" placeholder="Ваш логин" aria-describedby="basic-addon1">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                         <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                    </span>
                    <input type="password" name="pass" class="form-control" placeholder="Ваш пароль" aria-describedby="basic-addon1">
                </div>
                <br>
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary" style="width: 100%; height: auto; margin: 5px auto; border-radius: 3px">Войти</button>
                </div>

            </div>
            <div class="card-footer text-muted">
                Пожалуйста авторизируйтесь!
            </div>
        </div>
    </form>
    </body>
</html>
