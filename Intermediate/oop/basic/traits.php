<?php
/** Created a Trait */ 
trait Logger {
    public function log() {
        echo "Activity Logged<br>";
    }

    public function generateId() {
        return random_int(1000, 9999);
    }
}

/** trait use in User class */
class User {
    use Logger;
}

/** trait use in student class */
class Student {
    use Logger;
}

$user = new User();
$student = new Student();
$user->log();


/** File UPlod System by Trait */
trait UploadFile {
    public function upload(string $file):void {
        echo "Uploading" . $file;
    }
}

/** Use trait for StudentRegistration class */
class StudentRegistration {
    use UploadFile;
}

/** Use trait for TeacherRegistration */
class TeacherRegistration {
    use UploadFile;
}

$student_registration = new StudentRegistration();
$student_registration->upload("37474949.jpg");
$teacher_regi = new TeacherRegistration();
$teacher_regi->upload("99000030.png");





















