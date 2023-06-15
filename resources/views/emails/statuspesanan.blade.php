Hai {{ $name }},

@if ($isConfirmed)
    Pesanan kamu telah diverifikasi!!!
@else
    Pesanan kamu ditolak karena :
    {{ $reason }}
@endif

<a href="{{ $app_url }}">Klik disini</a> untuk melihat status pesanan kamu.

Terima kasih,
{{ config('app.name') }}
