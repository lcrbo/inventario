@props(['color'=>'text-gray-900', 'bcolor'=>''])

<td class="px-6 py-1 whitespace-nowrap">
    <div class="text-sm {{$color}} {{$bcolor}}" > {{ $slot }}</div>
</td>