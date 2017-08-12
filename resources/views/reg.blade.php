<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <h1 align="center">注册博客</h1>
        <div class="containner">
            <form action = "reg" method = post>
            {{ csrf_field() }}
            <table>
                <tr>
                    <td><label>username:</label></td>
                    <td><input name="username" placeholder="username"></td>
                </tr>
                <tr>
                    <td><label>password:</label></td>
                    <td><input name="password" type="password" placeholder="password"></td>
                </tr>
                <tr>
                    <td><button type="submit">注册</button></td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html>