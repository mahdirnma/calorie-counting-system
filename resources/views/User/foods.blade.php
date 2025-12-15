@extends('layout.app2')
@section('title')
    foods
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <form action="{{route('user.foods')}}" method="get" class="w-full flex flex-row-reverse justify-center gap-x-7">
                    <select name="food_id" id="food_id" class="w-52 h-10 rounded border pl-2">
                        @foreach($foods as $food)
                            <option value="{{$food->id}}">{{$food->name}}</option>
                        @endforeach
                    </select>
                    <input type="number" name="weight" id="weight" min="1" step="1" placeholder="weight (gram)" class="w-52 h-10 rounded border pl-2">
                    <button type="submit" class="rounded-2xl w-32 h-10 cursor-pointer bg-gray-200">add food</button>
                </form>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">date</td>
                        <td class="text-center">calorie</td>
                        <td class="text-center">weight</td>
                        <td class="text-center">food's title</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->foods as $food)
                        <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                            <td class="text-center">{{$food->pivot->date}}</td>
                            <td class="text-center">{{$food->pivot->weight*$food->calories}}</td>
                            <td class="text-center">{{$food->pivot->weight}}</td>
                            <td class="text-center">{{$food->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="w-[90%] h-[100px] flex flex-col gap-y-4">
                <p class="text-xl">Daily calorie allowance : <span>{{$tdee}}</span></p>
                <p class="text-xl">Calories consumed : <span>{{$calories}}</span></p>
            </div>
        </div>
@endsection
