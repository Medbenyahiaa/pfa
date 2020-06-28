@component('mail::message')
# NOUVELLE DEMANDE POUR PUBLIER UNE ANNONCE :

NOM : {{$nom}}
PRENOM : {{$prenom}}
EMAIL : {{$email}}
ROLE : {{$role}}


@component('mail::button', ['url' => ''])
VOIR DEMANDE
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
