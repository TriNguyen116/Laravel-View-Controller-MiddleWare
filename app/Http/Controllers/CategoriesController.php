<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct()
    {
    }
    // Hiển thị danh sách chuyên mục(Phương thức Get)
    public function index()
    {
        return view('clients/categories/list');
    }

    // Lấy ra 1 chuyên mục theo id(Phương thức Get)
    public function getCategory($id)
    {
        return view('clients/categories/edit');
    }

    //sửa 1 chuyên mục(Phước thức POST)
    public function updateCategory($id)
    {
        return 'submit sua chuyen muc:' . $id;
    }

    //show form thêm dữ liệu(GET)
    public function addCategory()
    {
        return view('clients/categories/add');
    }

    //Thêm dữ liệu vào chuyên mục(Phuong thức POST)
    public function handleAddCategory()
    {
        return redirect(route('categories.add'));
        //return 'Submit them chuyen muc';
    }

    //Xoa dữ liệu(Phương thức Delete)
    public function deleteCategory($id)
    {
        return 'Submit them xoa muc' . $id;
    }
}
