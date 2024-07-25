<form action="{{route('set-dates', $entry->id)}}" method="POST" id="set_dates_form">
    @csrf
    <div class="d-flex gap-2">
        <input type="date" name="active_from" id="active_from"
            class="form-control form-control-sm text-primary border border-info p-1 px-2"
            value="{{$entry->active_from}}">
        <input type="date" name="active_to" id="active_to"
            class="form-control form-control-sm text-primary border border-info p-1 px-2" value="{{$entry->active_to}}">
        <button class="btn btn-sm btn-primary p-1 px-2" type="submit">Időzítés</button>
    </div>
</form>