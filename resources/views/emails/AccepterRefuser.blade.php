@component('mail::message')
# BONJOUR : 

@if ($AR == 'accepter')
Votre Demande Est <strong><span style="color: green;">ACCEPTER</span></strong>.
@elseif ($AR == 'refuser')
Votre Demande Est <strong><span style="color: red;">REFUSER</span></strong>.
@endif


Thanks,<br>
{{ config('app.name') }}
@endcomponent
