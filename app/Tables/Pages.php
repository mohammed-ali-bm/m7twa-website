<?php

namespace App\Tables;

use App\Models\Page;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class Pages extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return Page::query();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['id', 'name', 'phone', 'address', 'status'])
            ->column('id', sortable: true)
            ->column('title', sortable: true, label: __("all.title"), classes: "max-200")
            ->column('slung', label: __("all.slung"))
            ->column('created_at', sortable: true, label: __("all.created_at"))

            ->column('actions', label: __("all.actions"), exportAs: false)


            // ->searchInput()
            // ->selectFilter()
            // ->withGlobalSearch()

            ->bulkAction($label = __("all.delete"), $action = function (Page $business) {
                $business->delete();
            })
            ->export()
            ->paginate(50);
    }
}
