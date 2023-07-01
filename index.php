<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .my-auto {
            margin-top: auto;
            margin-bottom: auto;
        }
    </style>
    <link rel="stylesheet" href="sty.css" />
</head>

<body id="">
    <header class="hero">
        <div class="container">
            <div class="row h-100">
                <div class="col-sm-12 my-auto">
                    <div class="card mx-auto" style="width: 400px;">
                        <div class="card-body">
                            <div class="center">
                                <h3>แบบฟอร์มเก็บข้อมูลนิสิต</h3><br>
                                <a href='home.php'><input type="submit" value="เพิ่มข้อมูล"></a><br><br>
                                <form action="student.php">
                                    <tr>
                                        <input type="hidden" name="mode" value="show">
                                        <input type="submit" value="แสดงข้อมูลนิสิต"><br><br>
                                    </tr>
                                    <tr>
                                        <input type="submit" name="mode" value="edit"><br><br>
                                    </tr>
                                    <tr>
                                        <label><input type="text" name="id" placeholder="ใส่รหัสนิสิตที่ต้องการลบ" aria-describedby="helpId"></label>
                                        <label><input type="hidden" name="prefix"></label>
                                        <label><input type="hidden" name="name"></label>
                                        <label><input type="hidden" name="lastname"></label>
                                        <label><input type="hidden" name="year"></label>
                                        <label><input type="hidden" name="gpa"></label>
                                        <label><input type="hidden" name="birthday"></label>
                                    </tr>
                                        <tr>
                                            <input type="submit" name="mode" value="delete"><br>
                                        </tr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
</body>

</html>