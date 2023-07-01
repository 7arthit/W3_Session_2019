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
                                <h3>เพิ่มข้อมูลนิสิตใหม่</h3>
                                <a href="index.php">กลับไปหน้าแรก</a><br><br>
                                <form action="student.php">
                                    <input type="hidden" name="mode" value="add">
                                    <table>
                                        <tr>
                                            <td>
                                                <label>รหัสนิสิต </label>
                                                <label><input type="text" name="id"></label><br><br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>คำนำหน้า</label>
                                                <select name="prefix">
                                                    <option value=""></option>
                                                    <option value="นาย">นาย</option>
                                                    <option value="นางสาว">นางสาว</option>
                                                </select><br><br>
                                                <label>ชื่อนิสิต</label>
                                                <label><input type="text" name="name"></label><br><br>
                                                <label>นามสกุลนิสิต</label>
                                                <label><input type="text" name="lastname"></label><br><br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>ชั้นปี</label>
                                                <select name="year" id="year">
                                                    <option value=""></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select><br><br>
                                                <label>เกรดเฉลี่ย</label>
                                                <label><input type="text" name="gpa"></label><br><br>
                                                <label>วันเกิด</label>
                                                <label><input type="date" id="birthday" name="birthday"></label><br><br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <table align="center">
                                                <input type="submit" value="เพิ่มข้อมูล">
                                            </table>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

</html>