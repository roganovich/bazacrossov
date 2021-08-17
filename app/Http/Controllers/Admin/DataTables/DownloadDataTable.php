<?php

namespace App\Http\Controllers\Admin\DataTables;

use App\Base\Controllers\DataTableController;
use App\Models\Download;

class DownloadDataTable extends DataTableController
{
    /**
     * @var string
     */
    protected $model = Download::class;

    /**
     * Columns to show
     *
     * @var array
     */
    protected $columns = ['download_at','link','ip'];

    /**
     * Columns of relations, relation name as key, relation property as value
     *
     * @var array
     */
    protected $eager_columns = ['user' => 'email', 'article'=>'title'];

    /**
     * Common columns for translation
     *
     * @var array
     */
    protected $common_columns = [];

    /**
     * @var bool
     */
    protected $ops = false;

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return $this->applyScopes(Download::with('article','user'));
    }
}
