<?php

namespace App\DataTables;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class UserOrdersDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->editColumn('thumbnail', fn($order) => view('orders.datatable.thumbnail', compact('order')))
            ->editColumn('from', fn($order) => $order->from->format('d-m-Y'))
            ->editColumn('to', fn($order) => $order->to->format('d-m-Y'))
            ->editColumn('total_price', fn($order) => view('orders.datatable.price', compact('order')))
            ->rawColumns(['actions', 'total_price']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Order $model): QueryBuilder
    {
        return $model->newQuery()->with(["orderable" => function (MorphTo $morphTo) {
            $morphTo->morphWith([Book::class]);
        }])->whereId(Auth::id());
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('datatable')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->responsive()
            ->orderBy(2)
            ->autoWidth(false)
            ->columnDefs([
                [
                    'width' => '5%',
                    'targets' => [0]
                ],
                [
                    'width' => '30%',
                    'targets' => [1]
                ],
                [
                    'width' => '20%',
                    'targets' => [2]
                ],
                [
                    'width' => '10%',
                    'targets' => [3, 4]
                ],
                [
                    'width' => '5%',
                    'targets' => [5]
                ]
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('DT_RowIndex')
                ->title('#')
                ->orderable(false)
                ->searchable(false),
            Column::make('orderable.name')->title('book name')->orderable(false),
            Column::make('thumbnail')->searchable(false)->orderable(false),
            Column::make('from')->searchable(false),
            Column::make('to')->searchable(false),
            Column::make('total_price')->title('total price')->searchable(false)->orderable(false)
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'UserOrders_' . date('YmdHis');
    }
}
