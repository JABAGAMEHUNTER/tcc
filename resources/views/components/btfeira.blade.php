
<form method="POST" action="{{ route('logout') }}">
@csrf
<x-button class="p-6 bg-green-500 hover-red border-b border-gray-200">
<a :href="route('logout')"
onclick="event.preventDefault();
this.closest('form').submit();">{{ __('Log Out') }}</x-button></a>
</form>
