<?php
require_once ("database.php");
class M_loai_san_pham extends database{
    public function Doc_ma_loai_san_pham($ma_loai)
    {
        $sql= "select * from loai_san_pham where ma_loai=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_loai));
    }
}
?>