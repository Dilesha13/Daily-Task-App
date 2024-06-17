<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Daily Tasks</h1>
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="/saveTask">
                            {{csrf_field()}}
                            <input type="text" class="form-control" name="task" placeholder="Enter Your Name">
                            <br>
                            <input type="submit" class="btn btn-primary" value="save">
                            <input type="button" class="btn btn-warning" value="clear">
                        </form>
                        <table class="table table-dark">
                            <th>ID</th>
                            <th>Task</th>
                            <th>Completed</th>
                            <tr>
                                <td>1</td>
                                <td>I have to learn laravel today</td>
                                <td>Not yet</td>
                            </tr>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>