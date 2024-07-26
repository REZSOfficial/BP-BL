@extends(backpack_view('blank'))

@php
if (backpack_theme_config('show_getting_started')) {
$widgets['before_content'][] = [
'type' => 'view',
'view' => backpack_view('inc.getting_started'),
];
} else {
$widgets['before_content'][] = [
'type' => 'jumbotron',
'heading_class' => 'display-3 '.(backpack_theme_config('layout') === 'horizontal_overlap' ? ' text-white' : ''),
'content_class' => backpack_theme_config('layout') === 'horizontal_overlap' ? 'text-white' : '',
'button_text' => trans('backpack::base.logout'),
];
}
@endphp

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col">
            <x-dashboard-card title="Kérdéssorok" iconClass="la la-question-circle"
                :route="backpack_url('question-set')" />
        </div>

        <div class="col">
            <x-dashboard-card title="Adott válaszok" iconClass="la la-check" :route="backpack_url('givenanswers')" />
        </div>
    </div>
    @if(backpack_user()->hasRole('admin'))
    <div class="row mb-3">
        <div class="col">
            <x-dashboard-card title="Válaszok" iconClass="la la-tasks" :route="backpack_url('answer')" />
        </div>
        <div class="col">
            <x-dashboard-card title="Kérdések" iconClass="la la-question" :route="backpack_url('question')" />
        </div>
    </div>
    <div class="row">
        <div class="col">
            <x-dashboard-card title="Felhasználók" iconClass="la la-user" :route="backpack_url('user')" />
        </div>
        <div class="col">
            <x-dashboard-card title="Szerepek" iconClass="la la-group" :route="backpack_url('role')" />
        </div>
        <div class="col">
            <x-dashboard-card title="Engedélyek" iconClass="la la-key" :route="backpack_url('permission')" />
        </div>
    </div>
    @endif
</div>
@endsection