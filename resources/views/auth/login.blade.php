<x-layout>
    <x-page-heading>Log In</x-page-heading>

    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="password" name="password" type="password"/>

        <x-forms.button>Create Account</x-forms.button>

    </x-forms.form>
</x-layout>