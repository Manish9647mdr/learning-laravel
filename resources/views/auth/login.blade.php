<x-layouts.layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-6">
                    <x-forms.field>
                        <x-forms.label for="email">Email</x-forms.label>
                        <div class="mt-2">
                            <x-forms.input id="email" name="email" placeholder="Please enter your email" type="email"  required/>
                            <x-forms.error name="email" />
                        </div>
                    </x-forms.field>

                    <x-forms.field>
                        <x-forms.label for="password">Password</x-forms.label>
                        <div class="mt-2">
                            <x-forms.input id="password" name="password" placeholder="Please enter your password" type="password" required/>
                            <x-forms.error name="password" />
                        </div>
                    </x-forms.field>
                </div>
            </div>
        </div>

        <div class="mt-4 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-forms.button>Log In</x-forms.button>
        </div>
    </form>

</x-layouts.layout>
