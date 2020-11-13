@include('includes.menu')
@include('includes.usercatalog')
<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div style="width:70% ; float:right ; margin-right:17% ">

        @livewire('profile.update-profile-information-form')
    </div>

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))

    <div style="width:70% ; float:right ; margin-right:17% ; ">

        @livewire('profile.update-password-form')
    </div>
    @endif
    <div style="width:70% ; float:right ; margin-right:17% ; padding-bottom:100px">
        @livewire('profile.delete-user-form')
    </div>
</x-app-layout>