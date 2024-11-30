<?php
$kolomData = [
    'Nama Lengkap' => $dataMagangSiswa->student->user->name,
    'Pembimbing' => $dataMagangSiswa->mentor->user->name,
    'Unit' => $dataMagangSiswa->work_unit->name,
    'Lokasi' => $dataMagangSiswa->work_unit->placement_location->name,
    'Mulai dari' => $dataMagangSiswa->start_at,
    'Selesai pada' => $dataMagangSiswa->end_at
];
?>
<x-filament-panels::page>
    <x-filament::section>
    <x-slot name="heading">
        Data Magang Anda
    </x-slot>
        <div style="display: table; width: 100%; border-spacing: 0 10px;">
            @foreach ($kolomData as $label => $value)
                <div style="display: table-row;">
                    <div style="display: table-cell; width: 30%;">{{ $label }}</div>
                    <div style="display: table-cell; text-align: center; width: 5%;">:</div>
                    <div style="display: table-cell;">{!! $value !!}</div>
                </div>
            @endforeach
        </div>
    </x-filament::section>

    <x-filament::section>
        <x-slot name="heading">
            Peraturan Umum
        </x-slot>
            <p>
                @foreach ($generalRules as $g)
                    <ul>
                        {{$g->description}}
                    </ul>
                @endforeach
            </p>
    </x-filament::section>
    <x-filament::section>
        <x-slot name="heading">
            Peraturan Unit
        </x-slot>
            <p>
                @foreach ($unitRules as $p)
                    <ul>
                        {{$p->description}}
                    </ul>
                @endforeach
            </p>
    </x-filament::section>
</x-filament-panels::page>
