@extends('layouts/master')

@section('content')
    <x-dashboard>

        <livewire:twitter position="a1:a16" />

        <livewire:team-member
            position="b1:b8"
            name="adriaan"
            :avatar="gravatar('adriaan@spatie.be')"
            birthday="1995-10-22"
        />
        <livewire:team-member
            position="c1:c8"
            name="alex"
            :avatar="gravatar('alex@spatie.be')"
            birthday="1996-02-05"
        />
        <livewire:team-member
            name="brent"
            :avatar="gravatar('brent@spatie.be')"
            birthday="1994-07-30"
            position="b9:b16"
        />
        <livewire:team-member
            name="freek"
            :avatar="gravatar('freek@spatie.be')"
            birthday="1979-09-22"
            position="c9:c16"
        />
        <livewire:team-member
            name="rias"
            :avatar="gravatar('rias@spatie.be')"
            birthday="1992-05-25"
            position="a17:a24"
        />
        <livewire:team-member
            name="ruben"
            :avatar="gravatar('ruben@spatie.be')"
            birthday="1994-05-16"
            position="b17:b24"
        />
        <livewire:team-member
            name="sebastian"
            display-name="seb"
            :avatar="gravatar('sebastian@spatie.be')"
            birthday="1992-02-01" position="c17:c24"
            nickName="seb"
        />
        <livewire:team-member
            name="jef"
            :avatar="gravatar('jef@spatie.be')"
            birthday="1975-03-28"
            position="d11:d13"
        />
        <livewire:team-member
            name="wouter"
            :avatar="gravatar('wouter@spatie.be')"
            birthday="1991-03-15"
            position="d14:d16"
        />
        <livewire:team-member
            name="willem"
            :avatar="gravatar('willem@spatie.be')"
            birthday="1975-09-03"
            position="d17:d24"
        />

        <livewire:calendar position="e7:e16" :calendar-id="config('google-calendar.calendar_id')" />

        <livewire:velo position="e17:e24" />

        <livewire:statistics position="d1:d10" />

        <livewire:uptime position="d1:d10" />

        <livewire:train-connections position="a1:a24" />

        <livewire:time-weather position="e1:e6" />
    </x-dashboard>

@endsection
