@extends('layout.app2')
@section('title')
    add period
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add period</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('periods.store')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="title" class="font-semibold ml-5">: title</label>
                            <input type="text" name="title" value="{{old('title')}}" id="title" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('title')
                                <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="current_weight" class="font-semibold ml-5">: current weight</label>
                            <input type="number" name="current_weight" min="10" max="120" value="{{old('current_weight')}}" id="current_weight" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('current_weight')
                                <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="target_weight" class="font-semibold ml-5">: target weight</label>
                            <input type="number" name="target_weight" min="10" max="120" value="{{old('target_weight')}}" id="target_weight" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('target_weight')
                                <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="days" class="font-semibold ml-5">: days</label>
                            <input type="number" name="days" min="1" max="365" value="{{old('days')}}" id="days" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('days')
                                <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <input type="submit" value="Add" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="age" class="font-semibold ml-5">: age</label>
                            <input type="number" name="age" min="10" max="70" value="{{old('age')}}" id="age" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('age')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="activity" class="font-semibold ml-5">: activity</label>
                            <select name="activity" id="activity" class="w-2/5 h-8 rounded outline-0 px-2 border border-gray-400">
                                <option value="1.2">Little to no exercise; desk job; most of the day spent sitting.</option>
                                <option value="1.375">Light exercise or sports 1–3 days per week.</option>
                                <option value="1.55">Moderate exercise or sports 3–5 days per week.</option>
                                <option value="1.725">Hard exercise or sports 6–7 days per week.</option>
                                <option value="1.9">Very hard daily exercise, physical labor, or pro athlete training.</option>
                            </select>
                            @error('activity')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
