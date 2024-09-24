<x-layout>
    <x-slot:heading>
        Halaman List Kerja Seorang Penyamun bernama Lintang Mukti Nugroho
    </x-slot:heading>
    <ul>
        @foreach ( $pekerjaan as $kerja )
        <a href="listkerja/ {{ $kerja['id']}}" class="text-blue-600 hover:underline">
            <li>
                <b>{{$kerja["judul"]}} :</b>
                {{ $kerja ["gaji"]}} /bulan 
            </li>
        </a>
        @endforeach
    </ul>
</x-layout>