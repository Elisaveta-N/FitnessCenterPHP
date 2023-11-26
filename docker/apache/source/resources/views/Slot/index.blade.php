@extends('layouts.base')

@section('content')

    {{-- @foreach (array_keys($sheduler) as $keyDay)
        <p>{{ $keyDay }} </p>
    @endforeach
    @foreach ($user_slots as $user_slot)
        <p>{{ $user_slot->id }}. {{ $user_slot->day }} {{ $user_slot->time }} {{ $user_slot->activity->title }}</p>
    @endforeach

    @foreach ($slots as $slot)
        <p>{{ $slot->id }}. {{ $slot->day }} {{ $slot->activity->title }}</p>
    @endforeach --}}

    <p></p>
    <!-- Main Container -->
    <div class="container">
        <div class="row">
            @foreach ($shedulers as $day=>$day_slots)

                <div class="col">

                        <div class="card"  style="width: 11rem;">
                            <h5 class="card-header" >{{ $day }}</h5>

                            @foreach ($day_slots as $slot)

                                <div class="card-body">
                                    <h5 class="card-title">{{ $slot->activity->title }}</h5>
                                    <form action="{{ route('userslots.store') }}" method="POST">
                                    @csrf
                                        <div class=" form-check form-switch">
                                            <p class="d-inline">{{ $slot->time }}</p>
                                            <input name="slot_id" id="slot_id" value="{{ $slot->id }}" hidden />
                                            <input name="user_id" id="user_id" value="{{ $user_id }}" hidden />

                                            <input name="check" id="check" onChange='submit();' class="d-inline form-check-input" type="checkbox" role="switch"
                                                @foreach ($user_slots as $user_slot)
                                                {{
                                                    $user_slot->id == $slot->id ? "checked" : ""
                                                }}
                                                @endforeach
                                            >
                                        </div>
                                    </form>
                                </div>

                            @endforeach
                        </div>

                </div>

            @endforeach
        </div>
    </div>
    <!-- Main Container -->
    <p></p>

@endsection
