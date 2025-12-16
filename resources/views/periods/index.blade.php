@extends('layout.app2')
@section('title')
    periods
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('periods.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add period +</a>
                <h2 class="text-xl">periods</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
{{--                        <td class="text-center">delete</td>--}}
{{--                        <td class="text-center">update</td>--}}
                        <td class="text-center">is completed</td>
                        <td class="text-center">days</td>
                        <td class="text-center">start date</td>
                        <td class="text-center">age</td>
                        <td class="text-center">activity</td>
                        <td class="text-center">target weight</td>
                        <td class="text-center">current weight</td>
                        <td class="text-center">title</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($periods as $period)
                        <tr>
{{--
                            <td class="text-center">
                                <form action="{{route('courses.destroy',compact('course'))}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-green-600 cursor-pointer">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('courses.edit',compact('course'))}}" method="get">
                                    @csrf
                                    @can('manage-courses',compact('course'))
                                        <button type="submit" class="text-cyan-600 cursor-pointer">update</button>
                                    @endcan
                                </form>
                            </td>
--}}
                            <td class="text-center">{{$period->is_completed?'yes':'no'}}</td>
                            <td class="text-center">{{$period->days}}</td>
                            <td class="text-center">{{$period->start_date}}</td>
                            <td class="text-center">{{$period->age}}</td>
                            <td class="text-center">{{$period->activity}}</td>
                            <td class="text-center">{{$period->target_weight}}</td>
                            <td class="text-center">{{$period->current_weight}}</td>
                            <td class="text-center">{{$period->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
{{--            <div class="mt-5">{{$courses->links()}}</div>--}}
        </div>
@endsection
