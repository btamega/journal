@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('messages.verifyEmail')}}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                        {{__('messages.resentEmail')}}
                        </div>
                    @endif
                    {{__('messages.beforeProceeding')}}
                    {{__('messages.emailNotReceive')}},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{__('messages.clickRequest')}}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
