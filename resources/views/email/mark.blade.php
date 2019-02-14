@component('mail::message')
# Hello Jermaine

You have just received a message from **{{$email}}**

## Here is what the message states

### {{$subject}}

{{$body}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
