@extends(backpack_view('blank'))

@section('header')
<section class="header-operation container-fluid animated fadeIn d-flex mb-2 align-items-baseline d-print-none"
    bp-section="page-header">
    <h1>Adott válaszok</h1>
</section>
@endsection

@section('content')
<div class="row" bp-section="crud-operation-list">
    <div class="col-md-12 d-flex border gap-3 justify-content-between">
        <button id="copyButton" class="btn btn-primary mb-3 w-full">Másolás</button>
        <button id="exportButton" class="btn btn-primary mb-3 w-full">Excel</button>
        <button id="printButton" class="btn btn-primary mb-3 w-full">Nyomtatás</button>
        <button id="pdfButton" class="btn btn-primary mb-3 w-full">PDF</button>
    </div>
    <div class="{{ backpack_theme_config('classes.tableWrapper') }}">
        <table id="crudTable"
            class="{{ backpack_theme_config('classes.table') ?? 'table table-striped table-hover nowrap rounded card-table table-vcenter card d-table shadow-xs border-xs' }}">
            <thead>
                <tr>
                    <th>Név</th>
                    <th>E-mail</th>
                    <th>Tel.</th>
                    <th>Kérdéssor</th>
                    <th>Helyes</th>
                    <th>Összes</th>
                </tr>
                <tr>
                    <th><input class="form-control" type="text" placeholder="Szűrés név szerint"></th>
                    <th><input class="form-control" type="text" placeholder="Szűrés e-mail szerint"></th>
                    <th><input class="form-control" type="text" placeholder="Szűrés telefon szerint"></th>
                    <th><input class="form-control" type="text" placeholder="Szűrés kérdéssor szerint"></th>
                    <th><input class="form-control" type="text" placeholder="Szűrés helyes válaszok szerint"></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $row)
                <tr class="h3">
                    <td>{{ $row->username }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->phone }}</td>
                    <td><a href="{{ route('question-set.show', $row->questionset_id) }}">{{ $row->questionset_title
                            }}</a></td>
                    <td>
                        <span class="badge bg-success">{{ $row->correct_answers }}</span>
                    </td>
                    <td>
                        <span class="badge bg-info">{{ $row->total_answers }}</span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">Nincsenek adatok.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('before_styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@endsection

@section('after_scripts')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/vfs_fonts.js"></script>
<script>
    $(document).ready(function() {
        // Initialize DataTable
        let table = $('#crudTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf', 'print'
            ]
        });

        // Apply the search
        table.columns().every(function() {
            let that = this;

            $('input', this.header()).on('keyup change clear', function() {
                if (that.search() !== this.value) {
                    that
                        .search(this.value)
                        .draw();
                }
            });
        });

        // Export button functionality
        $('#exportButton').on('click', function() {
            table.button('.buttons-excel').trigger(); // Export to Excel
        });
        $('#copyButton').on('click', function() {
            table.button('.buttons-copy').trigger(); // Copy to clipboard
        });
        $('#pdfButton').on('click', function() {
            table.button('.buttons-pdf').trigger(); // Export to PDF
        });
        $('#printButton').on('click', function() {
            table.button('.buttons-print').trigger(); // Print table
        });
    });
</script>
@endsection