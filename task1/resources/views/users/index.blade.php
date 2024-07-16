<x-user-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1>Hello</h1>
        @foreach ($taskusers as $userdata)
            <div>
                <p>Name: {{ $userdata->name }}</p>
                <p>Email: {{ $userdata->email }}</p>
                <form method="POST" action="{{ route('user.destroy', $userdata->id) }}">
                    @csrf
                    @method('delete')

                    <x-primary-button class="ms-4">
                        {{ __('Delete') }}
                    </x-primary-button>
                </form>

                <a href="{{ route('user.edit', $userdata->id) }}">
                    <x-primary-button class="ms-4">
                        {{ __('Edit') }}
                    </x-primary-button>
                </a>
            </div>
        @endforeach
    </div>
</x-user-layout>
