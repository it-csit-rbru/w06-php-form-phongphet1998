<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>ระบบเสนอหัวข้อโครงงาน</h1>
    <form action="project_data.php" method="get">
        <fieldset id="sec1">
        <legend>ส่วนที่ 1 ช้อมูลผู้จัดทำโครงงาน</legend>
            <label for="sid">รหัสนักศึกษา</label><input type="text" name="sid">
            <label for="fname">ชื่อ</label><input type="text" name="fname">
            <label for="lname">นามสกุล</label><input type="text" name="lname"><br>
            <label for="program">สาชาวิชา</label>
                <select name="program">
                        <option value="1">วิทยาการคอมพิวเตอร์</option>
                        <option value="2">เทคโนโลยีสารสนเทศ</option>
                        <option value="3">เทคโนโลยีเครือข่ายคอมพิวเตอร์</option>
                        <option value="4">ภูมิสารสนเทศ</option>
                        <option value="5">คอมพิวเตอร์ศึกษา</option>
                </select>
            <label for="faculty">คณะ</label>
                <select name="faculty">
                        <option value="1">วิทยาการคอมพิวเตอร์</option>
                        <option value="2">ครุศาสตร์</option>
                </select>
            <label for="std_year">ชั้นปี</label>
                <input type="radio" name="std_year" value="1"><label>ปี 1</label>
                <input type="radio" name="std_year" value="2"><label>ปี 2</label>
                <input type="radio" name="std_year" value="3"><label>ปี 3</label>
                <input type="radio" name="std_year" value="4"><label>ปี 4</label>
                <input type="radio" name="std_year" value="5"><label>ปี 5</label>
    </fieldset>
    <fieldset id="sec2">
            <label for="prj_name_th">ชื่อโครงงาน ( ไทย )</label><textarea name="prj_name_th"></textarea><br>
            <label for="prj_name_en">ชื่อโครงงาน ( อังกฤษ )</label><textarea name="prj_name_en"></textarea><br>
            <label for="prj_type">ประเภทโครงงาน</label>
                <select name="prj_type">
                        <option value="1">ฐานข้อมูล</option>
                        <option value="2">เกมส์</option>
                        <option value="2">สื่อการสอน</option>
                        <option value="2">CAI</option>
                </select><br>
            <label for="prj_tool">เครื่องมือที่ใช้</label>
                <input type="checkbox" name="prj_tool[]"value="html"><label>HTML</label>
                <input type="checkbox" name="prj_tool[]"value="css"><label>CSS</label>
                <input type="checkbox" name="prj_tool[]"value="javascript"><label>JavaScript</label>
                <input type="checkbox" name="prj_tool[]"value="bootstrap"><label>Bootstrap</label>
                <input type="checkbox" name="prj_tool[]"value="material design"><label>Material Design</label>
                <input type="checkbox" name="prj_tool[]"value="angular"><label>Angular</label>
                <input type="checkbox" name="prj_tool[]"value="react"><label>React</label>
                <input type="checkbox" name="prj_tool[]"value="php"><label>PHP</label>
                <input type="checkbox" name="prj_tool[]"value="mysql"><label>MySQL</label>
                <input type="checkbox" name="prj_tool[]"value="chartjs"><label>ChartJS</label><br>
            <label for="prj_advisor">อาจารย์ที่ปรึกษา</label>
                <select name="prj_advisor">
                    <option value="1">ผศ.บุญเรือน พฤกษ์ศศิธร</option>
                    <option value="1">ผศ.ทิพย์วรรณ ฟูเฟื่อง</option>
                </select><br>
    </fieldset>
    <input type="submit" value="GO...">
    </form>
    
</body>
</html>