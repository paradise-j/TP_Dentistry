<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
    session_start();
    require_once "connect.php";

    // $Fname = $_POST['Fname'];
    // $Lname = $_POST['Lname'];
    // $name = $Fname." ".$Lname;


    if (isset($_POST['submit'])) {
        $prename = $_POST['prename'];
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $name = $Fname." ".$Lname;
        $Bdate = $_POST['Bdate'];
        $personid = $_POST['personid'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $Homenumber = $_POST['Homenumber'];
        $moo = $_POST['moo'];
        $provinces = $_POST['provinces'];
        $amphures = $_POST['amphures'];
        $districts = $_POST['districts'];
        $zipcode = $_POST['zipcode'];
        $username = $_POST['personid'];
        $password = $_POST['tel'];
        $sql = $db->prepare("INSERT INTO `tp_member`(`mem_pre`, `mem_name`, 
                                                     `mem_mail`, `mem_tel`, 
                                                     `mem_Bdate`, `mem_perid`, `mem_homenum`, 
                                                     `mem_moo`, `mem_subdis`, `mem_dis`, 
                                                     `mem_province`, `mem_zipcode`, `mem_username`, `mem_password`)
                                                     VALUES ('$prename','$name','$email','$tel',
                                                             '$Bdate','$personid','$Homenumber','$moo','$districts',
                                                             '$amphures','$provinces','$zipcode','$username','$password')");

        $sql->execute();

        if ($sql) {
            $_SESSION['success'] = "เพิ่มข้อมูลเรียบร้อยแล้ว";
            echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        title: 'สำเร็จ',
                        text: 'เพิ่มข้อมูลเรียบร้อยแล้ว',
                        icon: 'success',
                        timer: 5000,
                        showConfirmButton: false
                    });
                })
            </script>";
            header("refresh:1; url=index.php");
        } else {
            $_SESSION['error'] = "เพิ่มข้อมูลเรียบร้อยไม่สำเร็จ";
            header("location: index.php");
        }
    }
?>