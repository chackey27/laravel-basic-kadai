<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel課題</title>
</head>
<body>
  <h1>投稿</h1>
  <table>
    <th>ID</th>
    <td>{{ $post->id }}</td>
    <tr>
    <th>タイトル</th>
    <td>{{ $post->title }}</td>
    </tr>
    <tr>
    <th>本文</th>
    <td>{{ $post->content }}</td>
    </tr>
    <tr>
    <th>作成日時</th>
    <td>{{ $post->created_at }}</td>
    </tr>
    <tr>
    <th>更新日時</th>
    <td>{{ $post->updated_at }}</td>
    </tr>
  </table>
</body>
</html>