<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="fs-1 fw-bold text-center mb-2">Bai Tap Thuc Hanh</h1>
        <table class="table mt-5 table-hover text-center">
            <tr>
                <thead class="fs-5">
                    <th>Id</th>
                    <th>Ten</th>
                    <th>Ngay Sinh</th>
                    <th>Dia chi</th>
                    <th>Action</th>
                </thead>
            </tr>
            @foreach ($user as $item)
                <tr>
                    <tbody>
                        <td>{{$item->id}}</td>
                        <td>{{$item->fullname}}</td>
                        <td>{{$item->birthday}}</td>
                        <td>{{$item->address}}</td>
                        <td>
                            <a class="p-2 text-center fs-5" style="text-decoration:none; color:green; background:#cccc; border-radius:5px" href="{{route('user.edit',['id'=>$item->id])}}">Sua</a>
                            <a class="p-2 text-center fs-5" style="text-decoration:none; color:white;background:red; border-radius:5px" href="#">Xoa</a>
                        </td>
                    </tbody>
                </tr>
            @endforeach
        </table>

    </div>
</body>
</html>