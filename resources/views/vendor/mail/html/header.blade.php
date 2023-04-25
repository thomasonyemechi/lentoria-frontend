{{--@formatter:off--}}
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@elseif(trim($slot) === config('app.name'))
<img src="https://lentoria.com/assets/images/logo2.png" class="logo" alt="{{config('app.name') .'Logo'}}">
{{--{{ $slot }}--}}
@endif
</a>
</td>
</tr>
