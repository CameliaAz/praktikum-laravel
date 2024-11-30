<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
// use Yajra\DataTables\DataTables;
use App\Models\UserModel;
// use App\Models\LevelModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //menampilkan halaman awal user
    public function index()
    {
    //     $breadcrumb = (object)[
    //         'title' => 'Daftar User',
    //         'list' => ['Home', 'User']
    //     ];

    //     $page = (object) [
    //         'title' => 'Daftar user ynag terdaftar dalam sistem'
    //     ];

    //     $activeMenu = 'user'; //set menu yang sedang aktif

    //     return view('user.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    // }
    // // Ambil data user dalam bentuk json untuk datatables
    
    // public function list(Request $request)
    // {
    //     $users = UserModel::select('user_id', 'username', 'nama', 'level_id')->with('level');

    //     if ($request->level_id) {
    //         $users->where('level_id', $request->level_id);
    //     }

    //     return DataTables::of($users)
    //         ->addIndexColumn() // Menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
    //         ->addColumn('aksi', function ($user) { // Menambahkan kolom aksi
    //             $btn = '<a href="' . url('/user/' . $user->user_id) . '" class="btn btn-info btn-sm">Detail</a> ';
    //             $btn .= '<a href="' . url('/user/' . $user->user_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a> ';
    //             $btn .= '<form class="d-inline-block" method="POST" action="' . url('/user/' . $user->user_id) . '">'
    //                 . csrf_field() . method_field('DELETE') .
    //                 '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>';

    //             return $btn;
    //         })
    //         ->rawColumns(['aksi']) // Memberitahu bahwa kolom aksi adalah HTML
    //         ->make(true);

    //tambah data user dengan Eloquement Model
    // $data = [
    //     'username'=> 'customer-1',
    //     'nama'=> 'pelanggan',
    //     'password'=> Hash::make('12345'),
    //     'level_id'=> 3
    // ];
    $data = [
        'username'=> 'Pelanggan Pertama'
    ];
    // UserModel::insert($data); //tambahkan data ke table m_user
    UserModel::where('username','customer-1')->update($data); //update data user

    //coba akses user model
    $user = UserModel::all(); //ambil semua data dari m_user
    return view ('user', ['data' => $user]);
    }
}
