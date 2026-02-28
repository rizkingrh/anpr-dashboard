<div wire:poll.3s="loadHistory">
    @if ($history)
        <div class="row align-items-center">
            {{-- Vehicle Image --}}
            <div class="col-lg-4 col-md-5 mb-3 mb-md-0">
                @if ($history['vehicle_image'])
                    <a href="{{ asset('storage/' . $history['vehicle_image']) }}" data-lity>
                        <img src="{{ asset('storage/' . $history['vehicle_image']) }}" alt="Vehicle"
                            class="rounded shadow-sm w-100" style="max-height: 220px; object-fit: cover;">
                    </a>
                @else
                    <div class="bg-light rounded d-flex align-items-center justify-content-center"
                        style="height: 180px;">
                        <i class="fa fa-car fa-3x text-muted"></i>
                    </div>
                @endif
            </div>

            {{-- Details --}}
            <div class="col-lg-5 col-md-4 mb-3 mb-md-0">
                <div class="d-flex align-items-center mb-2">
                    <h3 class="mb-0 me-3 fw-bold">{{ $history['number_plate'] }}</h3>
                    @if ($history['tenant'] === 'yes')
                        <span class="badge bg-success rounded-pill fs-6">Tenant</span>
                    @else
                        <span class="badge bg-danger rounded-pill fs-6">Non Tenant</span>
                    @endif
                </div>
                <div class="text-muted mb-1">
                    <i class="fa fa-car me-1"></i> {{ strtoupper($history['vehicle_type']) }}
                </div>
                <div class="text-muted">
                    <i class="fa fa-clock me-1"></i>
                    {{ \Carbon\Carbon::parse($history['created_at'])->format('d M Y, H:i:s') }}
                    <span
                        class="ms-2 text-primary">({{ \Carbon\Carbon::parse($history['created_at'])->diffForHumans() }})</span>
                </div>
            </div>

            {{-- Plate Image --}}
            <div class="col-lg-3 col-md-3">
                @if ($history['plate_image'])
                    <a href="{{ asset('storage/' . $history['plate_image']) }}" data-lity>
                        <img src="{{ asset('storage/' . $history['plate_image']) }}" alt="Plate"
                            class="rounded shadow-sm w-100" style="max-height: 120px; object-fit: contain; background: #f0f0f0;">
                    </a>
                @else
                    <div class="bg-light rounded d-flex align-items-center justify-content-center"
                        style="height: 100px;">
                        <i class="fa fa-image fa-2x text-muted"></i>
                    </div>
                @endif
            </div>
        </div>
    @else
        <div class="text-center text-muted py-4">
            <i class="fa fa-inbox fa-3x mb-3 d-block"></i>
            <p class="mb-0">No history data available.</p>
        </div>
    @endif
</div>
