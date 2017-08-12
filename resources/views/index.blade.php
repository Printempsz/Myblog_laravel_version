<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div class="container" align="center">
            <div class="new">
                <form action = "new" method="post">
                {{ csrf_field() }}
                <table>
                    <tr>
                        <td><label>title:</label></td>
                        <td><input name="title" placeholder="title"></td>
                    </tr>
                    <tr>
                        <td><label>content:</label></td>
                        <td><input name="content" placeholder="content" type="textarea"></td>
                    </tr>
                    <tr>
                        <td><input type="submit"></td>
                    </tr>
                </table>
                </form>
            </div>
            <div class="list">
                <table>
                    @foreach($articles as $article)
                        <tr>
                            <td><h3>{{ $article->title }}</h3></td>
                        </tr>
                        <tr>
                            <td><p style="width:300px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">{{ $article->content }}</p></td>
                        </tr>
                        <tr>
                            <td><a href="article/{{ $article->id }}">查看详情</a></td>
                        </tr>
                    @endforeach
                </table>
                {{ $articles->links() }}
            </div>
        </div>
    </body>
</html>