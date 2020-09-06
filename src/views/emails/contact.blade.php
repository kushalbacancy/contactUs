@component('mail::message')
# Introduction
Hello, we got the query from  {{ $mail_content['name'] }} <br/>
Message: - <br/>
{{ $mail_content['message'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
