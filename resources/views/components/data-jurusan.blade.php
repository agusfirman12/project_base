@foreach ($jurusan as $item)    
<li><a class="dropdown-item" href="/alumni/{{ $item->nama_jurusan }}">Jurusan {{ $item->nama_jurusan }}</a></li>
@endforeach
