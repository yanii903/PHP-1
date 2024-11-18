<?php

// Khai báo class WatchController
class WatchController
{
    // Khai báo thuộc tính
    // Code...


    // Khai báo phương thức 
    public function __construct()
    {
        // Code...
    }


    public function __destruct()
    {
        // Code...
    }


    public function showList()
    {
        // Code...

        // Hiển thị file view
        include "view/watch/list.php";
    } // END showList()


    public function showCreate()
    {
        // Code...

        // Hiển thị file view
        include "view/watch/create.php";
    } // END showCreate()


    public function delete($id)
    {
        // Kiểm tra giá trị id trước khi xử lý logic
        if ($id !== "") {
            // Code...

        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }
    }


    public function showUpdate($id)
    {
        // Kiểm tra giá trị id trước khi xử lý logic
        if ($id !== "") {
            // Code...

            // Hiển thị file view
            include "view/watch/update.php";
        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }
    } // END showUpdate()


}
