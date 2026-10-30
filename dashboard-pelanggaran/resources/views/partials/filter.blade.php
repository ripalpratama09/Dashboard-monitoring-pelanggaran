<form method="GET" action="{{ route('statistik') }}">

    <div class="card shadow-sm border-0 mb-4">

        <div class="card-body">

            <div class="row g-3 align-items-end">

                {{-- Tahun --}}
                <div class="col-md-3">

                    <label class="form-label fw-semibold">
                        Tahun
                    </label>

                    <div class="custom-dropdown" id="dropdownTahun">
                        <input type="hidden" name="tahun" id="inputTahun" value="{{ $tahun }}">

                        <button type="button" class="custom-dropdown-toggle" id="btnDropdownTahun" aria-expanded="false">
                            <span class="custom-dropdown-text">{{ $tahun ?: 'Semua Tahun' }}</span>
                            <i class="bi bi-chevron-down custom-dropdown-icon"></i>
                        </button>

                        <ul class="custom-dropdown-menu" id="menuDropdownTahun">
                            <li class="custom-dropdown-item {{ empty($tahun) ? 'active' : '' }}" data-value="">
                                <span>Semua Tahun</span>
                                @if(empty($tahun))
                                <i class="bi bi-check2"></i>
                                @endif
                            </li>
                            @foreach($tahunList as $itemTahun)
                            <li class="custom-dropdown-item {{ $tahun == $itemTahun ? 'active' : '' }}" data-value="{{ $itemTahun }}">
                                <span>{{ $itemTahun }}</span>
                                @if($tahun == $itemTahun)
                                <i class="bi bi-check2"></i>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>

                </div>


                {{-- Jenis Pelanggaran --}}
                <div class="col-md-3">

                    <label class="form-label fw-semibold">
                        Jenis Pelanggaran
                    </label>

                    @php
                    $activeJenisLabel = 'Semua Jenis Pelanggaran';
                    if ($jenis) {
                    $namaJ = $jenis;
                    if (str_contains($jenis, 'gelandangan dan pengemis')) {
                    $namaJ = 'Gelandangan & Pengemis';
                    } elseif (str_contains($jenis, 'lingkungan')) {
                    $namaJ = 'Lingkungan';
                    } elseif (str_contains($jenis, 'minuman berakohol')) {
                    $namaJ = 'Minuman Beralkohol';
                    } elseif (str_contains($jenis, 'pedagang kaki lima')) {
                    $namaJ = 'Pedagang Kaki Lima';
                    } elseif (str_contains($jenis, 'pelacuran')) {
                    $namaJ = 'Pelacuran';
                    } elseif (str_contains($jenis, 'reklame')) {
                    $namaJ = 'Reklame';
                    } elseif (str_contains($jenis, 'sampah')) {
                    $namaJ = 'Sampah';
                    } elseif (str_contains($jenis, 'trantibum')) {
                    $namaJ = 'Trantibum';
                    }
                    $activeJenisLabel = $namaJ;
                    }
                    @endphp

                    <div class="custom-dropdown" id="dropdownJenis">
                        <input type="hidden" name="jenis" id="inputJenis" value="{{ $jenis }}">

                        <button type="button" class="custom-dropdown-toggle" id="btnDropdownJenis" aria-expanded="false">
                            <span class="custom-dropdown-text">{{ $activeJenisLabel }}</span>
                            <i class="bi bi-chevron-down custom-dropdown-icon"></i>
                        </button>

                        <ul class="custom-dropdown-menu" id="menuDropdownJenis">
                            <li class="custom-dropdown-item {{ empty($jenis) ? 'active' : '' }}" data-value="">
                                <span>Semua Jenis Pelanggaran</span>
                                @if(empty($jenis))
                                <i class="bi bi-check2"></i>
                                @endif
                            </li>

                            @foreach($jenisList as $itemJenis)
                            @php
                            $namaJenis = $itemJenis;
                            if (str_contains($itemJenis, 'gelandangan dan pengemis')) {
                            $namaJenis = 'Gelandangan & Pengemis';
                            } elseif (str_contains($itemJenis, 'lingkungan')) {
                            $namaJenis = 'Lingkungan';
                            } elseif (str_contains($itemJenis, 'minuman berakohol')) {
                            $namaJenis = 'Minuman Beralkohol';
                            } elseif (str_contains($itemJenis, 'pedagang kaki lima')) {
                            $namaJenis = 'Pedagang Kaki Lima';
                            } elseif (str_contains($itemJenis, 'pelacuran')) {
                            $namaJenis = 'Pelacuran';
                            } elseif (str_contains($itemJenis, 'reklame')) {
                            $namaJenis = 'Reklame';
                            } elseif (str_contains($itemJenis, 'sampah')) {
                            $namaJenis = 'Sampah';
                            } elseif (str_contains($itemJenis, 'trantibum')) {
                            $namaJenis = 'Trantibum';
                            }
                            @endphp

                            <li class="custom-dropdown-item {{ $jenis == $itemJenis ? 'active' : '' }}" data-value="{{ $itemJenis }}">
                                <span>{{ $namaJenis }}</span>
                                @if($jenis == $itemJenis)
                                <i class="bi bi-check2"></i>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>

                </div>


                {{-- Tingkat Wilayah --}}
                <div class="col-md-2">

                    <label class="form-label fw-semibold">
                        Tingkat Wilayah
                    </label>

                    <div class="custom-dropdown" id="dropdownTingkatWilayah">
                        <input type="hidden" name="tingkat_wilayah" id="inputTingkatWilayah" value="{{ $tingkatWilayah }}">

                        <button type="button" class="custom-dropdown-toggle" id="btnDropdownTingkatWilayah" aria-expanded="false">
                            <span class="custom-dropdown-text">{{ $tingkatWilayah == 'Kalurahan' ? 'Kalurahan' : 'Kapanewon' }}</span>
                            <i class="bi bi-chevron-down custom-dropdown-icon"></i>
                        </button>

                        <ul class="custom-dropdown-menu" id="menuDropdownTingkatWilayah">
                            <li class="custom-dropdown-item {{ $tingkatWilayah == 'Kapanewon' ? 'active' : '' }}" data-value="Kapanewon">
                                <span>Kapanewon</span>
                                @if($tingkatWilayah == 'Kapanewon')
                                <i class="bi bi-check2"></i>
                                @endif
                            </li>
                            <li class="custom-dropdown-item {{ $tingkatWilayah == 'Kalurahan' ? 'active' : '' }}" data-value="Kalurahan">
                                <span>Kalurahan</span>
                                @if($tingkatWilayah == 'Kalurahan')
                                <i class="bi bi-check2"></i>
                                @endif
                            </li>
                        </ul>
                    </div>

                </div>


                {{-- Wilayah --}}
                <div class="col-md-2">

                    <label class="form-label fw-semibold">
                        Wilayah
                    </label>

                    @php
                    $wilayahLabel = 'Semua Kapanewon';
                    if ($tingkatWilayah === 'Kalurahan') {
                    $wilayahLabel = 'Semua Kalurahan';
                    } elseif ($wilayah) {
                    $wilayahLabel = $wilayah;
                    }
                    @endphp

                    <div class="custom-dropdown" id="dropdownWilayah"
                        data-kapanewon='@json($wilayahList)'
                        data-selected="{{ $wilayah }}">
                        <input type="hidden" name="wilayah" id="inputWilayah" value="{{ $tingkatWilayah === 'Kalurahan' ? '' : $wilayah }}">

                        <button type="button" class="custom-dropdown-toggle" id="btnDropdownWilayah"
                            {{ $tingkatWilayah === 'Kalurahan' ? 'disabled' : '' }}
                            title="{{ $tingkatWilayah === 'Kalurahan' ? 'Tingkat Kalurahan otomatis menampilkan seluruh wilayah kalurahan' : '' }}"
                            aria-expanded="false">
                            <span class="custom-dropdown-text">{{ $wilayahLabel }}</span>
                            <i class="bi bi-chevron-down custom-dropdown-icon"></i>
                        </button>

                        <ul class="custom-dropdown-menu" id="menuDropdownWilayah">
                            @if($tingkatWilayah === 'Kalurahan')
                            <li class="custom-dropdown-item active" data-value="">
                                <span>Semua Kalurahan</span>
                                <i class="bi bi-check2"></i>
                            </li>
                            @else
                            <li class="custom-dropdown-item {{ empty($wilayah) ? 'active' : '' }}" data-value="">
                                <span>Semua Kapanewon</span>
                                @if(empty($wilayah))
                                <i class="bi bi-check2"></i>
                                @endif
                            </li>
                            @foreach($wilayahList as $itemWilayah)
                            <li class="custom-dropdown-item {{ $wilayah == $itemWilayah ? 'active' : '' }}" data-value="{{ $itemWilayah }}">
                                <span>{{ $itemWilayah }}</span>
                                @if($wilayah == $itemWilayah)
                                <i class="bi bi-check2"></i>
                                @endif
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>

                </div>


                {{-- Tombol Tampilkan Statistik + Dropdown Reset --}}
                <div class="col-md-2">

                    <div class="btn-split-statistik">

                        <button
                            type="submit"
                            class="btn-split-main"
                            title="Tampilkan Statistik">

                            <i class="bi bi-bar-chart-line"></i>

                            <span>Tampilkan Statistik</span>

                        </button>

                        <div class="btn-split-divider"></div>

                        <button
                            type="button"
                            id="btnToggleResetDropdown"
                            class="btn-split-toggle"
                            aria-expanded="false"
                            title="Pilihan Reset">

                            <i class="bi bi-chevron-down"></i>

                        </button>

                        <ul id="resetDropdownMenu" class="btn-split-dropdown">

                            <li>

                                <a
                                    href="{{ route('statistik') }}"
                                    class="dropdown-item">

                                    <i class="bi bi-arrow-clockwise"></i>

                                    <span>Reset</span>

                                </a>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Helper to setup a custom dropdown
        function setupCustomDropdown(dropdownEl, onSelect) {
            if (!dropdownEl) return;
            const toggleBtn = dropdownEl.querySelector('.custom-dropdown-toggle');
            const textSpan = dropdownEl.querySelector('.custom-dropdown-text');
            const inputHidden = dropdownEl.querySelector('input[type="hidden"]');
            const menu = dropdownEl.querySelector('.custom-dropdown-menu');

            toggleBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                if (toggleBtn.disabled) return;

                // Close all other dropdowns
                document.querySelectorAll('.custom-dropdown.show, .btn-split-dropdown.show').forEach(el => {
                    if (el !== dropdownEl) el.classList.remove('show');
                });

                dropdownEl.classList.toggle('show');
            });

            menu.addEventListener('click', function(e) {
                const item = e.target.closest('.custom-dropdown-item');
                if (!item) return;
                e.stopPropagation();

                const value = item.dataset.value;
                const label = item.querySelector('span') ? item.querySelector('span').textContent.trim() : item.textContent.trim();

                inputHidden.value = value;
                textSpan.textContent = label;

                menu.querySelectorAll('.custom-dropdown-item').forEach(i => {
                    i.classList.remove('active');
                    const checkIcon = i.querySelector('.bi-check2');
                    if (checkIcon) checkIcon.remove();
                });

                item.classList.add('active');
                if (!item.querySelector('.bi-check2')) {
                    const check = document.createElement('i');
                    check.className = 'bi bi-check2';
                    item.appendChild(check);
                }

                dropdownEl.classList.remove('show');

                if (typeof onSelect === 'function') {
                    onSelect(value, label);
                }
            });
        }

        // Setup each dropdown
        setupCustomDropdown(document.getElementById('dropdownTahun'));
        setupCustomDropdown(document.getElementById('dropdownJenis'));

        const dropdownTingkatWilayah = document.getElementById('dropdownTingkatWilayah');
        const dropdownWilayah = document.getElementById('dropdownWilayah');

        let kapanewonList = [];
        if (dropdownWilayah) {
            try {
                kapanewonList = JSON.parse(dropdownWilayah.dataset.kapanewon || '[]');
            } catch (e) {
                kapanewonList = [];
            }
        }

        setupCustomDropdown(dropdownTingkatWilayah, function(tingkatValue) {
            if (!dropdownWilayah) return;
            const wilayahToggle = dropdownWilayah.querySelector('.custom-dropdown-toggle');
            const wilayahText = dropdownWilayah.querySelector('.custom-dropdown-text');
            const wilayahInput = dropdownWilayah.querySelector('input[type="hidden"]');
            const wilayahMenu = dropdownWilayah.querySelector('.custom-dropdown-menu');

            if (tingkatValue === 'Kalurahan') {
                wilayahToggle.disabled = true;
                wilayahToggle.title = 'Tingkat Kalurahan otomatis menampilkan seluruh wilayah kalurahan';
                wilayahText.textContent = 'Semua Kalurahan';
                wilayahInput.value = '';
                wilayahMenu.innerHTML = `
                    <li class="custom-dropdown-item active" data-value="">
                        <span>Semua Kalurahan</span>
                        <i class="bi bi-check2"></i>
                    </li>
                `;
            } else {
                wilayahToggle.disabled = false;
                wilayahToggle.removeAttribute('title');
                wilayahText.textContent = 'Semua Kapanewon';
                wilayahInput.value = '';

                let html = `
                    <li class="custom-dropdown-item active" data-value="">
                        <span>Semua Kapanewon</span>
                        <i class="bi bi-check2"></i>
                    </li>
                `;
                kapanewonList.forEach(function(kapanewon) {
                    html += `
                        <li class="custom-dropdown-item" data-value="${kapanewon}">
                            <span>${kapanewon}</span>
                        </li>
                    `;
                });
                wilayahMenu.innerHTML = html;
            }
        });

        setupCustomDropdown(dropdownWilayah);

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(e) {
            document.querySelectorAll('.custom-dropdown.show').forEach(el => {
                if (!el.contains(e.target)) {
                    el.classList.remove('show');
                }
            });
        });

        // Handle Split Button Reset Dropdown Toggle
        const btnToggleReset = document.getElementById('btnToggleResetDropdown');
        const resetDropdownMenu = document.getElementById('resetDropdownMenu');

        if (btnToggleReset && resetDropdownMenu) {
            btnToggleReset.addEventListener('click', function(e) {
                e.stopPropagation();
                e.preventDefault();
                document.querySelectorAll('.custom-dropdown.show').forEach(el => el.classList.remove('show'));
                resetDropdownMenu.classList.toggle('show');
            });

            document.addEventListener('click', function(e) {
                if (!resetDropdownMenu.contains(e.target) && e.target !== btnToggleReset && !btnToggleReset.contains(e.target)) {
                    resetDropdownMenu.classList.remove('show');
                }
            });
        }
    });
</script>