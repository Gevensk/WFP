<h3>Update Food</h3>
<form method="POST" action="{{ route('foods.update',$data->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" value = "{{ $data->nama }}" placeholder="Enter food name">

        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" aria-describedby="deskriprsi" placeholder="Enter description">{{ $data->deskripsi }}</textarea>

        <label for="nutrition_facts">Nutrition Facts</label>
        <textarea class="form-control" id="nutrition_facts" name="nutrition_facts" aria-describedby="nutrition_facts" placeholder="Enter nutrition facts (tekan 'Enter' untuk baris baru)">{{ $data->nutrition_facts }}</textarea>

        <label for="ingredients">Ingredients</label>
        <textarea class="form-control" id="ingredients" name="ingredients" aria-describedby="ingredients" placeholder="Enter ingredients (tekan 'Enter' untuk baris baru)">{{ $data->ingredients }}</textarea>

        <label for="harga">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" aria-describedby="harga" value = "{{ $data->harga }}" placeholder="Enter price">

        <p>Porsi</p>
        <input type="radio" id="radioKecil" name="porsi" value="kecil" {{ $data->porsi == 'kecil' ? 'checked' : '' }}>
        <label for="radioKecil">Kecil</label><br>
        <input type="radio" id="radioSedang" name="porsi" value="sedang" {{ $data->porsi == 'sedang' ? 'checked' : '' }}>
        <label for="radioSedang">Sedang</label><br>
        <input type="radio" id="radioBesar" name="porsi" value="besar" {{ $data->porsi == 'besar' ? 'checked' : '' }}>
        <label for="radioBesar">Besar</label>

        <label for="category">Kategori</label>
        <select class="form-control" name="category_id" id="category">
            @foreach ($category as $c)
                <option value="{{ $c->id }}" {{ $data->category_id == $c->id ? 'selected' : '' }}>{{ $c->nama }}</option>
            @endforeach
        </select>

        <label for="image">Image</label>
        <input type="text" class="form-control" id="image" name="image" value="{{ $data->image }}">
        <small class="form-text text-muted">Enter image URL here!</small>

        <div id="image-preview-container">
            <img id="image-preview" src="" alt="Image preview" style="max-width: 100%; display: none; border: 1px solid #ccc; margin-top: 10px;" />
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const imageInput = document.getElementById("image");
        const imagePreview = document.getElementById("image-preview");

        imageInput.addEventListener("input", function () {
        const url = imageInput.value.trim();

        if (url) {
            imagePreview.src = url;
            imagePreview.style.display = "block";
        } else {
            imagePreview.src = "";
            imagePreview.style.display = "none";
        }
    });
    });
</script>