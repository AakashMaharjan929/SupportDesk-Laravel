@extends('layouts.app')

@section('title', 'Dashboard')

@section('content',)

<h1 class="text-3xl font-bold">Dashboard</h1>
<h2 class="text-[20px] font-semibold mt-4">Ticket status</h2>

{{-- kpi cards --}}

@php
$ticketStats = [
['title' => 'Open Tickets', 'count' => 124, 'bg' => 'bg-blue-400', 'color' => 'white'],
['title' => 'In Progress', 'count' => 45, 'bg' => 'bg-blue-200', 'color' => 'black'],
['title' => 'Resolved', 'count' => 312, 'bg' => 'bg-green-200', 'color' => 'black'],
['title' => 'Closed', 'count' => 89, 'bg' => 'bg-red-200', 'color' => 'black'],
];
@endphp

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 pt-4 pr-4 pb-4 gap-4">
    @foreach($ticketStats as $stat)
    <div
        class="h-40 {{ $stat['bg'] }} rounded-2xl p-4 border-2 border-gray-200 hover:shadow-2xl flex flex-col gap-4 transition-all">
        <p class="text-xl font-normal text-{{ $stat['color'] }}">{{ $stat['title'] }}</p>
        <p class="text-4xl font-semibold text-{{ $stat['color'] }}">{{ $stat['count'] }}</p>
    </div>
    @endforeach
</div>

{{-- recent tickets --}}
<h2 class="text-[20px] font-semibold mt-4 mb-4">Recent Tickets</h2>
<div class="overflow-x-auto border rounded-2xl border-gray-200 shadow-sm">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-blue-200">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Ticket No.</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Customer</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Priority</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Assigned To</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Status</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            <tr class="hover:bg-gray-100">
                <td class="px-6 py-4 font-medium text-gray-900">1</td>
                <td class="px-6 py-4 font-medium text-gray-900">Frontend Developer</td>
                <td class="px-6 py-4">
                    <span
                        class="inline-flex items-center rounded-full bg-red-300 px-2 py-1 text-xs font-medium text-black ring-1 ring-inset ring-red-600/20">High</span>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900">Alex Rivera</td>
                <td class="px-6 py-4 font-medium text-gray-900">Open</td>
            </tr>
            <tr class="hover:bg-gray-100">
                <td class="px-6 py-4 font-medium text-gray-900">2</td>
                <td class="px-6 py-4 font-medium text-gray-900">Frontend Developer</td>
                <td class="px-6 py-4">
                    <span
                        class="inline-flex items-center rounded-full bg-green-300 px-2 py-1 text-xs font-medium text-black ring-1 ring-inset ring-green-600/20">Low</span>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900">Alex Rivera</td>
                <td class="px-6 py-4 font-medium text-gray-900">Open</td>
            </tr>
            <tr class="hover:bg-gray-100">
                <td class="px-6 py-4 font-medium text-gray-900">3</td>
                <td class="px-6 py-4 font-medium text-gray-900">Frontend Developer</td>
                <td class="px-6 py-4">
                    <span
                        class="inline-flex items-center rounded-full bg-yellow-300 px-2 py-1 text-xs font-medium text-black ring-1 ring-inset ring-yellow-600/20">Medium</span>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900">Alex Rivera</td>
                <td class="px-6 py-4 font-medium text-gray-900">Open</td>
            </tr>
            <tr class="hover:bg-gray-100">   
                <td class="px-6 py-4 font-medium text-gray-900">4</td>
                <td class="px-6 py-4 font-medium text-gray-900">Frontend Developer</td>
                <td class="px-6 py-4">
                    <span
                        class="inline-flex items-center rounded-full bg-yellow-300 px-2 py-1 text-xs font-medium text-black ring-1 ring-inset ring-yellow-600/20">Medium</span>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900">Alex Rivera</td>
                <td class="px-6 py-4 font-medium text-gray-900">Open</td>
            </tr>
            <tr class="hover:bg-gray-100">
                <td class="px-6 py-4 font-medium text-gray-900">5</td>
                <td class="px-6 py-4 font-medium text-gray-900">Frontend Developer</td>
                <td class="px-6 py-4">
                    <span
                        class="inline-flex items-center rounded-full bg-green-300 px-2 py-1 text-xs font-medium text-black ring-1 ring-inset ring-green-600/20">Low</span>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900">Alex Rivera</td>
                <td class="px-6 py-4 font-medium text-gray-900">Open</td>
            </tr>
        </tbody>

    </table>

</div>

@endsection