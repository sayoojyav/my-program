<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Form') }}
        </h2>
    </x-slot>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <form action="{{ route('store') }}" method="POST">
    	@csrf
    	<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900 p-1">Create User</h3>
                    <hr class="border-0 bg-gray-500 text-gray-500 h-px">
                </div>
                <div class="mt-8 -mx-3 md:flex mb-6">
                    <div class="md:w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="name">{{ __('Name') }}<span style="color:red;"> * </span></label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="name" type="text" placeholder="Name" name="full_name">
                    </div>
                </div>
                <div class="mt-8 -mx-3 md:flex mb-6">
                    <div class="md:w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="user_login">{{ __('User Login') }}</label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="user_login" type="text" placeholder="User Login" name="user_login">
                    </div>
                </div>
                <div class="mt-8 -mx-3 md:flex mb-6">
                    <div class="md:w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="description">{{ __('Description') }}</label>
                        <textarea class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="description" type="text" placeholder="Description" name="description"></textarea>
                    </div>
                </div>
                 <div class="mt-8 -mx-3 md:flex mb-6">
                    <div class="md:w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="number_of_stars">{{ __('Number Of Stars') }}</label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="number_of_stars" type="number" placeholder="Number Of Stars" name="number_of_stars">
                    </div>
                </div>
                <div class="mt-8 -mx-3 md:flex mb-6">
                    <div class="md:w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="user_login">{{ __('Notes') }}</label>
                        <textarea  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="notes" type="text" placeholder="Note" name="notes"></textarea>
                    </div>
                </div>
                <div class="col-xs-13 col-sm-13 col-md-13 text-center">
                	<button type="submit" class="bg-blue-700 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div> 
        </div>
    </form>
</x-app-layout>