<x-user-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
    <a href="/user/create">
        <x-primary-button class="text-3xl text-blue-500 hover:text-blue-700" >
            Create User
        </x-primary-button>
        </a>

        @foreach ($taskusers as $userdata)
            <div class="border-b border-gray-300 py-4">
                <p class="text-lg font-medium">Name: {{ $userdata->name }}</p>
                <p class="text-lg text-gray-700">Email: {{ $userdata->email }}</p>
                <div class="flex space-x-6 mt-2">
                    <form method="POST" action="{{ route('user.destroy', $userdata->id) }}">
                        @csrf
                        @method('delete')

                        <x-primary-button>
                            {{ __('Delete') }}
                        </x-primary-button>
                    </form>

                    <a href="{{ route('user.edit', $userdata->id) }}" class="px-4">
                        <x-primary-button>
                            {{ __('Edit') }}
                        </x-primary-button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</x-user-layout>
