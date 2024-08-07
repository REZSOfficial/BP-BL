@if ($crud->hasAccess('create'))
<a href="{{ url($crud->route.'/create') }}" class="btn btn-primary" data-style="zoom-in">
    <span><i class="la la-plus"></i> Hozzáadás </span>
</a>
@endif