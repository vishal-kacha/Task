<x-user-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1>Edit User</h1>
            <form method="POST" action="{{ route('user.update', $taskuser->id) }}">
            @csrf
            @method('put')

            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value={{$taskuser->name}} >
            </div>

          
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$taskuser->email}}" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


                <x-primary-button type="submit">
                    Update
                </x-primary-button>
        </form>
    </div>
</x-user-layout>
