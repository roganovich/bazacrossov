<?php

namespace App\Http\Controllers\Admin;

use App\Base\Controllers\AdminController;
use App\Http\Controllers\Admin\DataTables\DownloadDataTable;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;

class DownloadController extends AdminController
{

    /**
     * @param \App\Http\Controllers\Admin\DataTables\DownloadDataTable $dataTable
     *
     * @return mixed
     */
    public function index(DownloadDataTable $dataTable)
    {
        return $dataTable->render('admin.table');
    }

    
}
