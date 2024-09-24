<x-layout>
    <x-slot:heading>
        Halaman LIST KERJA HASSAN
    </x-slot:heading>
    <ul>
        @foreach ($pekerjaan as $kerja)
        <a href="listkerja/{{ $kerja['id'] }}" class="text-blue-600 hover:underline">
            <li><b>{{ $kerja['judul'] }} :</b> {{ $kerja['gaji'] }} / bulan </li>
        </a>
        @endforeach
    </ul>
</x-layout>
