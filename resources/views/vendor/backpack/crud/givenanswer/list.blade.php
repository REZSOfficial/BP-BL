@extends(backpack_view('blank'))

@section('header')
<section class="header-operation container-fluid animated fadeIn d-flex mb-2 align-items-baseline d-print-none"
    bp-section="page-header">
    <h1>Helyes Válaszok</h1>
</section>
@endsection

@section('content')
<div class="row" bp-section="crud-operation-list">
    <div class="{{ backpack_theme_config('classes.tableWrapper') }}">
        <table id="crudTable"
            class="{{ backpack_theme_config('classes.table') ?? 'table table-striped table-hover nowrap rounded card-table table-vcenter card d-table shadow-xs border-xs' }}">
            <thead>
                <tr>
                    <th>Név</th>
                    <th>E-mail</th>
                    <th>Tel.</th>
                    <th>Kérdéssor</th>
                    <th><i class="la la-check text-success"></i></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                <tr class="h3">
                    <td>{{ $row->username }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->phone }}</td>
                    <td><a href="{{ route('question-set.show', $row->questionset_id) }}">{{ $row->questionset_title
                            }}</a></td>
                    <td>
                        <span class=" badge bg-success">{{ $row->correct_answers }}</span>
                        <span>/</span>
                        <span class=" badge bg-info">{{ $row->total_answers }}</span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection