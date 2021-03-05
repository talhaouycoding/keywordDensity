@extends('layouts.app')
@section('content')
   <form id="keywordDensityInputForm" action="{{ route('tool.calculate') }}" method="POST">
    @csrf
        <div class="form-group">
            <label for="keywordDensityInput">HTML or Text</label>
            <textarea class="form-control" name="content" id="keywordDensityInput" rows="12"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Get Keyword Densities</button>
    </form>

@endsection
