@component('mail::message')
# Introduction

The body of your message.
{{$project->title}}

@component('mail::button', ['url' =>url('/projects/'.$project->id)])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
