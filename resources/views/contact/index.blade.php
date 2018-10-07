@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contacts</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @component('components.table', ['headers' => ['Name', 'Email', 'Notes'], 'rows' => $contacts])

                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection