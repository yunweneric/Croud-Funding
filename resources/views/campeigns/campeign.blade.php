@extends('layouts.app2')
@section('title')
    Campeigns
@endsection
@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-6 rounded-lg">
            <button
                class="group relative w-3/12 flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white primary-bg hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                <a href="{{ route('addcampeign') }}">Create Campeign</a>
            </button>

            <h1 class="font-bold my-4 mt-6 text-blue-500">ALL CAMPEIGNS</h1>

            @if ($posts->count())
                <div>
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    ID
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Donator
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Campeign Name
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Amount
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Created
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Actions
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($posts as $post)

                                                <tr>


                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            {{ $post->id }}

                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">

                                                            <div class="ml-4">

                                                                <div class="text-sm text-gray-500">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full"
                                                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">

                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    {{ $post->donatorname }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            {{ $post->cname }}
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                            {{ $post->amount }}
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            {{ $post->created_at->diffForHumans() }}
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">

                                                        <div class="flex justify-evenly">

                                                            <span>

                                                                <form action="{{ route('viewcampeign', $post->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <button
                                                                        class="group relative w-10/12 flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white primary-bg hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                                                        type="submit">
                                                                        Donate
                                                                        {{-- <i class="fa fa-eye" aria-hidden="true"></i> --}}
                                                                    </button>
                                                                </form>
                                                            </span>
                                                             {{-- <span>

                                                                <form action="{{ route('paynow', $post->amount) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <button
                                                                        class="group relative w-2/12 flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                                                        type="submit">
                                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                                    </button>
                                                                </form>
                                                            </span> --}}

                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{ $posts->links() }}

            @else
                <p class="text-gray-500 text-sm">There are no Campeigns!</p>

            @endif
        </div>
    </div>
@endsection
