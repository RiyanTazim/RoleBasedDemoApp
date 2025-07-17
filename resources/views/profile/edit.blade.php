@extends('Backend.Master.master')

@section('content')
    <div class="pc-container">
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <h2 class="font-semibold text-xl text-light mb-4">
                    {{ __('Edit Profile') }}
                </h2>

                <div class="p-4 sm:p-8 bg-[#0f172a] shadow sm:rounded-lg text-white"> {{-- background same as header --}}
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-[#0f172a] shadow sm:rounded-lg text-white">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-[#0f172a] shadow sm:rounded-lg text-white">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
