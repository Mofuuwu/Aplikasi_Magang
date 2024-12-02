<x-filament-panels::page>
    <x-filament::section>
        
        <x-slot name="heading">
            Data Diri
        </x-slot>
        <x-slot name="description">
            Berikut adalah informasi pengguna dan data siswa.
        </x-slot>

        <p><b>Nama Lengkap: </b>{{ $userName }}</p>

        @if ($studentData)
            <p><b>Kelas: </b>{{ $studentData->class }}</p>
            <p><b>Jurusan: </b>{{ $studentData->major ? $studentData->major->name : 'Belum diisi'}}</p>
            <p><b>Sekolah: </b>{{ $studentData->school_id }}</p>
        @else
            <p><b>Kelas: </b><span style="color: red;">Belum diisi</span></p>
            <p><b>Jurusan: </b><span style="color: red;">Belum diisi</span></p>
            <p><b>Sekolah: </b><span style="color: red;">Belum diisi</span></p>
            <p><b>Nomor HP: </b><span style="color: red;">Belum diisi</span></p>
            <p><b>Alamat: </b><span style="color: red;">Belum diisi</span></p>
        @endif
    </x-filament::section>
    <x-filament::section>
        
        <x-slot name="heading">
            Data Diri
        </x-slot>
        <x-slot name="description">
            Berikut adalah informasi pengguna dan data siswa.
        </x-slot>
    </x-filament::section>

</x-filament-panels::page>
