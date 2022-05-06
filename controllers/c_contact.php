<?php
class C_contact
{
    public function Hien_thi()
    {
        // Models
        $kq = "";
        if(isset($_POST["submit"]))
        {
            include("models/m_lien_he.php");
            $m_lien_he=new M_lien_he();
            // ma_lien_he, ho_ten, email, noi_dung, ngay_gui, trang_thai
            $name = $_POST["name"];
            $email = $_POST["email"];
            $content = $_POST["content"];
            $kq = $m_lien_he->Them_lien_he($name, $email,$content);
            if($kq)
            {
                    echo "<script>alert('Cám ơn quý khách đã gửi liên hệ')</script>";
            }
            else
            {
                echo "<script>alert('Đã có lỗi khi gửi liên hệ')</script>";
            }
        }
        // Views
        $view = 'views/contact/v_contact.php';
        include('templates/frontend/contact/layout.php');

    }

}
?>

