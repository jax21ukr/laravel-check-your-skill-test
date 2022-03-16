<!-- TODO Blade Задание 2: Изменить реализацию этой view, расширить ее с использованием layout  -->
<!-- layouts/app.blade.php  -->
@extends('layouts.app')

<!-- TODO Blade Задание 6: В эту view с контроллера передается collection c users в переменной data -->
<!-- Выполнить foreach loop в одну строку -->
@foreach ($data as $user)
<!-- Используйте view shared/user.blade.php для item (переменная user во item view) -->
    @include('shared.user', ['user' => $user])
@endforeach

<!-- Используйте view shared/empty.blade.php для состояния когда нет элементов в колекции -->
@if($data->isEmpty())
    @include('shared.empty')
@endif

<!-- TODO Blade Задание 7: Здесь сделайте классический foreach loop -->
@foreach($data as $user)
    <!-- Выведите div с $user->name -->
    <!-- Воспользуйтесь переменной $loop и у нечетных div выведите класс - bg-red-500 -->
    <div {{ $loop->odd ? 'class="bg-red-500"' : '' }}>{{ $user->name }}</div>
@endforeach
