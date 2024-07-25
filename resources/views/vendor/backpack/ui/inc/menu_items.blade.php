{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i
            class="la la-home nav-icon"></i>Főoldal</a></li>

<x-backpack::menu-item title="Kérdéssorok" icon="la la-question-circle" :link="backpack_url('question-set')" />
<x-backpack::menu-item title="Adott válaszok" icon="la la-check" :link="backpack_url('givenanswers')" />

@if(backpack_user()->hasRole('admin'))
<x-backpack::menu-item title="Kérdések" icon="la la-question" :link="backpack_url('question')" />
<x-backpack::menu-item title="Válaszok" icon="la la-tasks" :link="backpack_url('answer')" />

<x-backpack::menu-dropdown title="Admin" icon="la la-cog">
    <x-backpack::menu-dropdown-item title="Users" icon="la la-user" :link="backpack_url('user')" />
    <x-backpack::menu-dropdown-item title="Roles" icon="la la-group" :link="backpack_url('role')" />
    <x-backpack::menu-dropdown-item title="Permissions" icon="la la-key" :link="backpack_url('permission')" />
</x-backpack::menu-dropdown>
@endif