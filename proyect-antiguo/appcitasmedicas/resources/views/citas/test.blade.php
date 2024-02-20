<div class="form-group">
  <label for="document_type">Tipo de Documento</label>
  <select name="document_type" class="form-control" required>
    @forelse ($document as $documenttype)
    <option value="{{$documenttype->detail_id}}">{{$documenttype->name}}</option>
    @empty
    <option value="">No data found</option>
    @endforelse
  </select>
</div>

<div class="form-group col-md-6">
  <label for="gender_id">Género</label>
  @error('gender_id')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
  <select id="gender_id" name="gender_id" class="form-control">
    @forelse ($gende as $gender)
    <option value="{{$gender->detail_id}}">{{$gender->name}}</option>
    @empty
    <option value="#">No data found</option>
    @endforelse
  </select>
</div>
</div>