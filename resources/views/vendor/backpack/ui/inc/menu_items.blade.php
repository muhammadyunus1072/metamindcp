{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-dropdown title="Service" icon="la la-chevron-circle-down">
    <x-backpack::menu-dropdown-item title="Services" icon="la la-hand-holding-heart" :link="backpack_url('service')" />
    <x-backpack::menu-dropdown-item title="Service Contents" icon="la la-hand-holding-heart" :link="backpack_url('service-content')" />
</x-backpack::menu-dropdown>

<x-backpack::menu-dropdown title="Coaching" icon="la la-chevron-circle-down">
    <x-backpack::menu-dropdown-item title="Coachings" icon="la la-school" :link="backpack_url('coaching')" />
</x-backpack::menu-dropdown>

<x-backpack::menu-dropdown title="Training" icon="la la-chevron-circle-down">
    <x-backpack::menu-dropdown-item title="Trainers" icon="la la-user-graduate" :link="backpack_url('trainer')" />
    <x-backpack::menu-dropdown-item title="Training Groups" icon="la la-user-friends" :link="backpack_url('training-group')" />
    <x-backpack::menu-dropdown-item title="Trainings" icon="la la-user-tag" :link="backpack_url('training')" />
</x-backpack::menu-dropdown>

<x-backpack::menu-dropdown title="Event" icon="la la-chevron-circle-down">
    <x-backpack::menu-dropdown-item title="Events" icon="la la-calendar-week" :link="backpack_url('event')" />
    <x-backpack::menu-dropdown-item title="Event Content" icon="la la-calendar-day" :link="backpack_url('event-detail')" />
</x-backpack::menu-dropdown>

<x-backpack::menu-dropdown-item title="Banners" icon="la la-image" :link="backpack_url('banner')" />
<x-backpack::menu-dropdown-item title="Clients" icon="la la-user" :link="backpack_url('client')" />
<x-backpack::menu-dropdown-item title="FAQs" icon="la la-question-circle" :link="backpack_url('faq')" />
<x-backpack::menu-dropdown-item title="Testimonies" icon="la la-certificate" :link="backpack_url('testimony')" />
<x-backpack::menu-dropdown-item title="Tentang Kami" icon="la la-info" :link="backpack_url('about')" />
<x-backpack::menu-dropdown-item title="Informasi Umum" icon="la la-info" :link="backpack_url('setting')" />
<x-backpack::menu-dropdown-item title="Users" icon="la la-users" :link="backpack_url('user')" />
