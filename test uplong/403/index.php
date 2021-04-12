<?php/

# 1.验证文件是否合法或是否满足上传要求(包括上传失败等等处理)
    # code

# 2.将用户上传的文件移动到userImage文件夹中(用move_uploaded_file()函数)
$file = $_FILES['file']['tmp_name'];//上传的文件
$fileName = $_FILES['file']['name'];//文件的名称(用来做文件名)
$path = "userImage/";//文件保存位置

/* 
* @ 第一个参数是要移动的文件
* @ 第二个参数是文件上传后的完整路径(不能直接以 'userImage/' 写入该参数)
*/
move_uploaded_file($file, $path . $fileName);//移动API
?>
