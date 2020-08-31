
<?
$b_path = "photo/big/".$_FILES['photo']['name'];

$s_path = "photo/small/".$_FILES['photo']['name'];
if (move_uploaded_file($_FILES['photo']['tmp_name'],$b_path)){

    copy($b_path,$s_path);
    resize($s_path,100);
    echo 'load';
}else{
    echo 'error';
}
?>
