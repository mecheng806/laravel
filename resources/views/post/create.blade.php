<html>
    <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <form action="/post" method="post">
       @csrf
            姓名：<input type="text" name="username"></input><br />
            性别：<input type="text" name="sex"></input><br />
            年龄：<input type="text" name="age"></input><br />
            <input type="submit"></input>
        </form>
    </body>
<html>