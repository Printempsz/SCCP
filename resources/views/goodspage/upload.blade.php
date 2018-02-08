@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(@$status === 1)
                    <script>
                        alert('上传成功!')
                    </script>
                @endif
                <form method="POST" enctype="multipart/form-data" action="{{route('goods.upload',['id' => $id])}}">
                    {{ csrf_field() }}
                    <input type="file" name="photo" id="photo">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
@endsection