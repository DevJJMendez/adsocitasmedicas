{{-- tipo de documento --}}
{{-- <div class="form-group">
  <label for="document_type">Tipo de Documento</label>
  <select name="document_type" class="form-control" required>
    @forelse ($documentType as $documenttype)
    <option value="{{$documenttype->detail_id}}">{{$documenttype->name}}</option>
    @empty
    <option value="">No data found</option>
    @endforelse
  </select>
</div> --}}
@foreach ($tds as $td)
<ul>
  <li>
    {{$td->identification_number}}
  </li>
</ul>
@endforeach