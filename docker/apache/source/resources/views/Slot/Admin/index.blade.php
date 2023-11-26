@extends('layouts.base')
@section('content')
    <!-- Main Container -->
    <div class="container mb140 mt40">
        <div class="table-responsive px-md-5">
            <table class="table table-striped px-md-5">
                <thead>
                    <tr>
                        <th scope="col">День</th>
                        <th scope="col">Время</th>
                        <th scope="col">Занятие</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slots as $slot)
                        <form action="{{ route('admin.slots.destroy', $slot->id) }}" method="post">
                            @method('delete')
                            @csrf

                            <tr th:each="scheduler, itemStat : ${schedulers}">
                                <td class="align-middle">{{ $slot->day }}</td>
                                <td class="align-middle">{{ $slot->time }}</td>
                                <td class="align-middle">{{ $slot->activity->title }}</td>
                                {{-- <td class="align-middle"> <a th:href="@{/admin_scheduler/{id}(id=${scheduler.id})}" class="btn btn-danger w-50">Remove</a> </td> --}}
                                <td class="align-middle"> <button type="button" class="btn btn-outline-danger" onClick='submit();'>Удалить</button></td>

                            </tr>

                        </form>
                    @endforeach

                    <form action="{{ route('admin.slots.store') }}" method="post">
                        @csrf
                        <tr>
                            <td class="align-middle">
                                <select name="day" id="day" class="form-select form-select-sm" aria-label=".form-select-sm">
                                    <option value="Понедельник" selected>День недели</option>
                                    <option value="Понедельник">Понедельник</option>
                                    <option value="Вторник">Вторник</option>
                                    <option value="Среда">Среда</option>
                                    <option value="Четверг">Четверг</option>
                                    <option value="Пятница">Пятница</option>
                                    <option value="Суббота">Суббота</option>
                                </select>
                            </td>
                            <td class="align-middle">
                                <select name="time" id="time" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option value="08:00" selected>Время</option>
                                    <option value="08:00">08:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="20:00">20:00</option>
                                </select>
                            </td>
                            <td class="align-middle">
                                <select name="activity_id" id="activity_id" class="form-select form-select-sm" aria-label=".form-select-sm">
                                    <option th:value="Бег" selected>Выбирете Занятие</option>
                                    @foreach ($activities as $activity)
                                        <p th:each="workout : ${workouts}">
                                            <option value="{{ $activity->id }}">{{ $activity->title }}</option>
                                        </p>
                                    @endforeach
                                </select>
                            </td>
                            <td class="align-middle">
                                <button class="btn btn-outline-success " onClick='submit();'>Добавить</button>
                            </td>
                        </tr>
                    </form>

                </tbody>
            </table>
        </div>
    </div>
    <!-- Main Container -->
    <p></p>

@endsection
