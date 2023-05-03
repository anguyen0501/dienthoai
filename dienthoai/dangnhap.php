<?php
session_start();
include("include/connect.php");
if(isset($_POST['login']))
{
    $username = $_POST['user'];
    $password = MD5($_POST['pass']);
    $sql_check = mysql_query("select * from nguoidung where username = '$username'");
    $dem = mysql_num_rows($sql_check);
    if($dem == 0)
    {
        $_SESSION['thongbaolo'] = "Tài khoản không thồn tại";
		echo "
							<script language='javascript'>
								alert('Tài khoản không tồn tại');
								window.open('index.php','_self', 1);
							</script>
						";
    }
    else
    {
        $sql_check2 = mysql_query("select * from nguoidung where username = '$username' and password = '$password'");
        $dem2 = mysql_num_rows($sql_check2);
        if($dem2 == 0)
			echo "
							<script language='javascript'>
								alert('Mật khẩu đăng nhập không đúng');
								window.open('index.php','_self', 1);
							</script>
						";
        else
        {
            $row = mysql_fetch_array($sql_check2);
            
                $_SESSION['username'] = $username;
				$_SESSION['phanquyen'] = $row['phanquyen'];
				$_SESSION['idnd'] = $row['idnd'];
                
                if($_SESSION['phanquyen'] ==0)
					{
						
						echo "
							<script language='javascript'>
								alert('Đăng nhập thành công');
								window.open('admin/admin.php','_self', 1);
							</script>
						";
					}
                else
                {
                   
                   echo "
							<script language='javascript'>
								alert('Đăng nhập thành công');
								window.open('index.php','_self', 1);
							</script>
						";
                }
            }
        }
    }

?>