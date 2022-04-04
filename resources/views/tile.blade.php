<x-dashboard-tile :position="$position" :refresh-interval="$refreshIntervalInSeconds">
    <div class="flex items-center justify-center w-10 h-10 rounded-full" style="background-color: rgba(255, 255, 255, .9)">
        <div class="text-3xl leading-none -mt-1">
            📅
        </div>
    </div>
    <div class="grid {{ isset($title) ? 'grid-rows-auto-auto gap-2' : '' }} h-full">
        <ul class="divide-y-2 divide-canvas">
            @foreach($events as $event)
                <li class="py-1">
                    <div class="my-2">
                        <div class="{{ $event['withinWeek'] ? 'font-bold' : '' }}">{{ $event['name'] }}</div>
                        <div class="text-sm text-dimmed">
                            <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-blue-100 bg-blue-600 rounded-full">
                                                            {{ $event['presentableDate'] }}
                                                        </span>
                            @if (!$event['is_all_day'])
                                {{ $event['time'] }}
                            @else
                                Toute la journée
                            @endif
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-dashboard-tile>
