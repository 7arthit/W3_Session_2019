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
<?php
session_start();
if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = array();
}
class Student
{
    public $id;
    public $prefix;
    public $fullname;
    public $lastname;
    public $year;
    public $gpa;
    public $birthday;
    public function __construct($id, $prefix, $name, $lastname, $year, $gpa, $birthday)
    {
        $this->id = $id;
        $this->prefix = $prefix;
        $this->fullname = $name;
        $this->lastname = $lastname;
        $this->year = $year;
        $this->gpa = $gpa;
        $this->birthday = $birthday;
    }
}

$id = $_GET['id'];
$prefix = $_GET['prefix'];
$fullname = $_GET['name'];
$lastname = $_GET['lastname'];
$year = $_GET['year'];
$gpa = $_GET['gpa'];
$birthday = $_GET['birthday'];
$mode = $_GET['mode'];

if ($mode == "add") {
    $student = new Student($id, $prefix, $fullname, $lastname, $year, $gpa, $birthday);
    array_push($_SESSION['students'], $student);
}
if ($mode == "show") {
?><header class="center"><br>
        <h3>แสดงข้อมูลนิสิตทั้งหมด</h3>
        <a href="index.php">กลับไปหน้าแรก </a>
        <?php
        print "<br><br>มีข้อมูลนิสิต&nbsp" . count($_SESSION['students']) . "&nbspคน<br>";
        foreach ($_SESSION['students'] as $s) {
        ?>

            <body>
                <table border="1px" width="90%" align="center">
                    <tr align="center">
                        <th>รหัสนิสิต</th>
                        <th>คำนำหน้า</th>
                        <th>ชื่อนิสิต</th>
                        <th>นามสกุลนิสิต</th>
                        <th>ชั้นปี</th>
                        <th>เกรด</th>
                        <th>วันเกิด</th><br>
                    </tr>
                    <tr align="center">
                        <td><?php echo $s->id ?></td>
                        <td><?php echo $s->prefix ?></td>
                        <td><?php echo $s->fullname ?></td>
                        <td><?php echo $s->lastname ?></td>
                        <td><?php echo $s->year ?></td>
                        <td><?php echo $s->gpa ?></td>
                        <td><?php echo $s->birthday ?></td>
                    </tr>
                </table>
            </body>
        <?php
        }
    } elseif ($mode == "delete") {
        $idx = 0;
        foreach ($_SESSION['students'] as $s) {
            if ($s->id == $id) {
                array_splice($_SESSION['students'], $idx, 1);
            } else {
                $idx++;
            }
        }
    } elseif ($mode == "edit") {
        ?>

        <body id="">
            <header class="center"><br>
                <h3>แก้ไขข้อมูลนิสิตทั้งหมด</h3>
                <a href="index.php">กลับไปหน้าแรก </a>
                <br><br>
                <?php
                foreach ($_SESSION['students'] as $s) {
                ?>
                    <form action="student.php" >
                        <input type="hidden" name="mode" value="save">
                        <table border="1px" align="center">
                            <tr>
                                <td><br>
                                    <label>รหัสนิสิต </label>
                                    <label><input type="text" name="id" value="<?= $s->id ?>"></label>
                                    <label>คำนำหน้า</label>
                                    <select name="prefix" value="<?= $s->prefix ?>">
                                        <option value=""></option>
                                        <option value="นาย">นาย</option>
                                        <option value="นางสาว">นางสาว</option>
                                    </select>
                                    <label>ชื่อนิสิต</label>
                                    <label><input type="text" name="name" value="<?= $s->fullname ?>"></label>
                                    <label>นามสกุลนิสิต</label>
                                    <label><input type="text" name="lastname" value="<?= $s->lastname ?>"></label>
                                    <label>ชั้นปี</label>
                                    <select name="year" id="year" value="<?= $s->year ?>">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                    <label>เกรดเฉลี่ย</label>
                                    <label><input type="text" name="gpa" value="<?= $s->gpa ?>"></label>
                                    <label>วันเกิด</label>
                                    <label><input type="date" id="birthday" name="birthday" value="<?= $s->birthday ?>"></label><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                        <input type="submit" value="บันทึก"><br><br>
                                </td>
                            </tr>
                        </table>
                    </form>
            </header>
        </body>

<?php
                }
            } elseif ($mode == "save") {
                foreach ($_SESSION['students'] as $s) {
                    if ($s->id == $id) {
                        $s->id = $id;
                        $s->prefix = $prefix;
                        $s->fullname = $fullname;
                        $s->lastname = $lastname;
                        $s->year = $year;
                        $s->gpa = $gpa;
                        $s->birthday = $birthday;
                    }
                }
            }
?>