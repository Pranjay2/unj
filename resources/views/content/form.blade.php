    
    <div class="form-floating">
        {{ Form::select('category', $category, $content->category, ['class' => 'form-select mb-5' . ($errors->has('category') ? ' is-invalid' : ''), 'placeholder' => 'Select Category', 'required']) }}
        {{ Form::label('category') }}
        {!! $errors->first('category', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-floating mb-5">
        {{ Form::text('subtitle', $content->subtitle, ['class' => 'form-control' . ($errors->has('subtitle') ? ' is-invalid' : ''), 'placeholder' => 'Nama Barang']) }}
        {{ Form::label('nama barang') }}
        {!! $errors->first('subtitle', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-floating mb-5">
        {{ Form::text('title', $content->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
        {{ Form::label('title') }}
        {!! $errors->first('title', '<p class="invalid-feedback">:message</p>') !!}
    </div>
    <div class="form-floating mb-5">
        {{ Form::textarea('body', $content->body, ['id' => 'body', 'class' => 'form-control' . ($errors->has('body') ? ' is-invalid' : ''), 'placeholder' => 'Body']) }}
        {{ Form::label('body') }}
        {!! $errors->first('body', '<p class="invalid-feedback">:message</p>') !!}
    </div>
<button type="submit" class="btn btn-primary">Submit</button>
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.7.0/tinymce.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content_type').change(function() {
                var contentType = $(this).val();
                if (contentType == 'files') {
                    $('#gallery-files').show();
                } else {
                    $('#gallery-files').hide();
                }
            });
            $('.btn-delete-content-file').click(function (e) { 
                e.preventDefault();

                var id = $(this).data('id');
                var this2 = $(this);

                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Tindakan ini tidak bisa diurungkan.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Lanjutkan!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "get",
                            url: "{{ route('content.destroy-content-file', '') }}/" + id,
                            dataType: "json",
                            success: function (r) {
                                Swal.fire({
                                    icon: 'success',
                                    title: r.message
                                });

                                this2.closest('.btn-group').remove();
                            },
                            error: function (e) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Terjadi kesalahan'
                                });
                            },
                        });
                    }
                })
            });
            {!! $content->content_type == 'files' ? "$('#gallery-files').show();" : "$('#gallery-files').hide();" !!}
        });

        tinymce.init({
            selector: '#body',
            height: 500,
            plugins: 'image link media table lists code',
            toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | link image media | code',
            relative_urls: false,
            remove_script_host: false,
            document_base_url: '{{ url('/') }}/',
            automatic_uploads: false,
            images_upload_handler: function (blobInfo, success, failure) {
                failure("Upload gambar dimatikan. Gunakan URL gambar dari Google Drive.");
            }
        });



    </script>
@endsection
