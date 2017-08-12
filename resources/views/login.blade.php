<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <h1 align="center">登录博客</h1>
        <div class="containner">
            <form action = "sign_in" method="post">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td><label>username:</label></td>
                    <td><input name="username"></td>
                </tr>
                <tr>
                    <td><label>password:</label></td>
                    <td><input name="password"></td>
                </tr>
                <tr>
                    <td><button type="submit">登录</button></td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html>