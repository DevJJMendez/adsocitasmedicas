
@props(['user'])
<a href="#"
class="focus:outline-none xl:mb-0 mb-8 rounded-xl overflow-hidden shadow-xs bg-white">

<div>
    por
    @foreach ($user->users as $author)
    <span>{{ $author->email }}

    </span>
@endforeach()
</div>
</a>
