@extends('layouts.admin')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css" />
@endsection

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Berita</h1>
    </div>
    
    <div class="card shadow mb-4">
        <div class="card-header py-3 border-bottom-primary">
            <h6 class="m-0 font-weight-bold text-primary">Tambahkan Berita</h6>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data" id="edit-form">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label text-lg">Judul</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="title" placeholder="Input Judul">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="event" class="col-sm-2 col-form-label text-lg">Kategori</label>
                    <div class="col-sm-3">
                        <select name="event_id" class="form-control" required>
                            <option value="disabled" disabled selected>Pilih Nama Event</option>
                            @foreach($events as $event)
                                <option value="{{ $event->id }}">{{ $event->title }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="text-lg">Deskripsi</label>
                    <div class="form-control" style="height: 240px;" class="mb-3" id="description"></div>
                    <input type="hidden" name="description">
                </div>

                <div class="custom-file col-sm-4">
                    <input type="file" accept="image/*" class="custom-file-input" id="customFile" name="image">
                    <label class="custom-file-label" for="customFile">Upload Gambar</label>
                    <div class="text-center my-2">
                        <img id="output" class="img-fluid img-thumbnail">
                    </div>

                    <div class="my-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.js"></script>
<script>
    $("#nav-media").addClass("active");

    $('.custom-file-input').on('change', function() { 
        let fileName = $(this).val().split('\\').pop(); 
        $(this).next('.custom-file-label').addClass("selected").html(fileName); 
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#output')
                .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
        else {
            $('#output').attr('src', '');
        }
    }

    $("#customFile").change(function() {
        readURL(this);
    });

    const toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],
        ['blockquote', 'code-block'],
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'script': 'sub'}, { 'script': 'super' }],
        ['clean']
    ];
    
    const quill2 = new Quill('#description', {
        theme: 'snow',
        modules: {
          toolbar: toolbarOptions
        },
        placeholder: '   Tambahkan deskripsi disini',
      });

      $("#edit-form").submit(function(e) {
        var editor = document.querySelector('#description')
        var html = editor.children[0].innerHTML
        if (!html.length) {
          alert("Cannot be empty!");
          e.preventDefault();
          return false;
        }
        $("input[name='description']").val(html);
      });
</script>
@endsection