<?php
    $users = [
        ['id'=>1,'name'=>'John Doe','email'=>'john@example.com'],
        ['id'=>2,'name'=>'Phuong','email'=>'Phuong@example.com'],
        ['id'=>3,'name'=>'Nam','email'=>'Nam@example.com']
    ];
    // hien thi danh sach nguoi dung
    foreach($users as $user){
        echo '<li>'.$user['name'].' - '.$user['email'].'<button onclick="deleteUser('.$user['id'].')">Xoa</button><li>';
    }
?>