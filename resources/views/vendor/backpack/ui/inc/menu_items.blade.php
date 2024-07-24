{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{
        trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Question sets" icon="la la-question" :link="backpack_url('question-set')" />
<x-backpack::menu-item title="Questions" icon="la la-question" :link="backpack_url('question')" />
<x-backpack::menu-item title="Answers" icon="la la-question" :link="backpack_url('answer')" />

<x-backpack::menu-item title="Users" icon="la la-user" :link="backpack_url('user')" />
<x-backpack::menu-item title="Roles" icon="la la-group" :link="backpack_url('role')" />
<x-backpack::menu-item title="Permissions" icon="la la-key" :link="backpack_url('permission')" />