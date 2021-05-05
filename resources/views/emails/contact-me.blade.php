@component('mail::message')
#{{$mail->firstName}} {{$mail->name}} : 

{{$mail->message}}

#Vous pouvez recontacter cette personne a l'adresse suivante: 
{{$mail ->email}}

@endcomponent
