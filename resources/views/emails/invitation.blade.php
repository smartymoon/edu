@component('mail::message')
# Welcome to XXX School

{{ $message }}

@component('mail::button', ['url' => $url])
    Join Us
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
