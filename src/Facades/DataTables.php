<?php

namespace Fluent\DataTables\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @mixin \Fluent\DataTables\DataTables
 *
 * @method static \Fluent\DataTables\EloquentDatatable eloquent($builder)
 * @method static \Fluent\DataTables\QueryDataTable query($builder)
 * @method static \Fluent\DataTables\CollectionDataTable collection($collection)
 *
 * @see \Fluent\DataTables\DataTables
 */
class DataTables extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'datatables';
    }
}
