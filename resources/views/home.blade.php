<x-layout>
    <x-slot:heading>
        Halaman Home
    </x-slot:heading>
    @foreach ($pekerjaan as $kerja)
    <li>{{$kerja['judul']}} </li>
@endforeach
</x-layout>
