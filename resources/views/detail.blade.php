<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <div class="container">
            <div>
                <h3 align="center">{{ $detail->title }}</h3>
                <p align="center">{{ $username }}</p>
                <p align="center">{{ $detail->content }}</p>
            </div>
            <div>
                <form action="comment" method="post">
                    {{ csrf_field() }}
                    <table>
                        <tr>
                            <td><label>发评论：</label></td>
                            <td><input name="content"></td>
                            <td><input type="submit"></td>
                            <td><input style="display: none" name="article_id" value="{{ $detail->id }}"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div>
                <table>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->content }}</td>
                            <td>{{ $comment->create_at }}</td>
                            <td>{{ $comment->user()->first()->username }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>