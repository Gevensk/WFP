<h3>Update Category</h3>
<form id="formUpdateKategori" method="POST" action="{{ route('categories.update',$data->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="enama" name="nama" aria-describedby="nama" placeholder="Enter Category Name" value="{{ $data->nama }}">

        <label for="image">Image</label>
        <input type="file" class="form-control" id="eimage" name="image" aria-describedby="image" placeholder="Enter Category Image">
        <small id="name" class="form-text text-muted">Kosongkan jika tidak ingin mengubah file gambar.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
</form>