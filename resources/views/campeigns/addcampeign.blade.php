@extends('layouts.app2')
@section('title')
    Campeign
@endsection
@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h1 class="flex justify-center">REGISTER YOUR CAMPEIGN NOW!</h1>
            <form class="mt-2 space-y-6" action="{{ route('campeign') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="donator" class="sr-only">Your Name</label>
                    <input id="name" name="donatorname" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm @error('password') border border-red-300
                                                            @enderror " placeholder="Donator Name">
                    @error('donatorname')
                        <div class="text-red-500 mt-2 text-small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="cname" class="sr-only">Campeign Name</label>
                    <input id="cname" name="cname" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm @error('password') border border-red-300
                                                            @enderror " placeholder="Campeign Name">
                    @error('cname')
                        <div class="text-red-500 mt-2 text-small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="url" class="sr-only">Campeign Name</label>
                    <input id="url" name="url" type="url" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm @error('password') border border-red-300
                                                            @enderror " placeholder="Url">
                    @error('url')
                        <div class="text-red-500 mt-2 text-small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="amount" class="sr-only">Amount</label>
                    <input id="amount" name="amount" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm @error('password') border border-red-300
                                                            @enderror " placeholder="Amount">
                    @error('cname')
                        <div class="text-red-500 mt-2 text-small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="campeigndate" class="sr-only">Campeign Date</label>
                    <input id="campeigndate" name="campeigndate" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm @error('password') border border-red-300
                                                            @enderror " placeholder="campeigndate">
                    @error('campeigndate')
                        <div class="text-red-500 mt-2 text-small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>

                    <textarea name="body" id="body" cols="30" rows="10" placeholder="Reasons for Campeign" class="rounded-none relative block w-full px-3 py-2 border border-gray-300 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm 
                                                        @error('body') border border-red-300 
                                                        @enderror "></textarea>
                    @error('body')
                        <div class="text-red-500 mt-2 text-small">{{ $message }}</div>
                    @enderror
                </div>


                <div>
                    <button type="submit"
                        class="group relative w-2/12 flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white primary-bg hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    @endsection
