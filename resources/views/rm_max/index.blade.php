@extends('layouts.auth-master')

@section('content')
<title>Calculadora-RM</title>
    <form method="post" action="{{ route('rmmax.rmcalculator') }}">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('gymnotes.ico') !!}" alt="GymNotes logo">
        
        <h1 class="h3 mb-3 fw-normal">Descubre tu RM</h1>

        {{-- @include('layouts.partials.messages') --}}

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="peso" value="{{ old('peso') }}" placeholder="peso" required="required" autofocus>
            <label for="floatingName">Introduce el peso</label>
            @if ($errors->has('peso'))
                <span class="text-danger text-left">{{ $errors->first('peso') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="rep" value="{{ old('rep') }}" placeholder="rep" required="required">
            <label for="floatingPassword">Introduce las repeticiones</label>
            @if ($errors->has('rep'))
                <span class="text-danger text-left">{{ $errors->first('rep') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-danger" type="submit">Descubre tu RM</button>
        
        @include('auth.partials.copy')
    </form>
@endsection