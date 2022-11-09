<x-mail::message>
    # Welcome

    Hi {{ $user->name }},
    Welcome to Laracamp, your account has been created successfully. Now you can choose your best match camp!
    <x-mail::button :url="{{ route('/') }}">
        Login Here!
    </x-mail::button>

    Thanks,
    {{ config('app.name') }}
</x-mail::message>
