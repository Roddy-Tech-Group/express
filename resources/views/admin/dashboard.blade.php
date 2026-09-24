@extends('layouts.app1')
@section('content')

<style>
/* Modern Elegant Dashboard Styles */
.hero-banner {
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    border-radius: 20px;
    color: white;
    padding: 40px;
    box-shadow: 0 10px 30px rgba(0, 242, 254, 0.3);
    position: relative;
    overflow: hidden;
}
.hero-banner::after {
    content: '';
    position: absolute;
    top: -50%;
    right: -10%;
    width: 300px;
    height: 300px;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
}
.hero-title {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 10px;
}
.hero-subtitle {
    font-size: 16px;
    opacity: 0.9;
    font-weight: 300;
}
.btn-glass {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.4);
    color: white;
    border-radius: 50px;
    padding: 10px 24px;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
}
.btn-glass:hover {
    background: rgba(255, 255, 255, 0.3);
    color: white;
    transform: translateY(-2px);
    text-decoration: none;
}
.stat-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 24px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.03);
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.02);
}
.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.08);
}
.stat-icon {
    width: 50px;
    height: 50px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 16px;
}
.icon-blue { background: #e0f2fe; color: #0284c7; }
.icon-green { background: #dcfce7; color: #16a34a; }
.icon-purple { background: #f3e8ff; color: #9333ea; }
.icon-orange { background: #ffedd5; color: #ea580c; }

.stat-value {
    font-size: 32px;
    font-weight: 800;
    color: #1e293b;
    margin-bottom: 4px;
}
.stat-label {
    font-size: 14px;
    color: #64748b;
    font-weight: 500;
}
.modern-card {
    background: #ffffff;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.03);
    border: 1px solid rgba(0,0,0,0.02);
    overflow: hidden;
}
.modern-card-header {
    padding: 24px 24px 0 24px;
    border-bottom: none;
    background: transparent;
}
.modern-card-title {
    font-size: 18px;
    font-weight: 700;
    color: #1e293b;
}
.activity-feed-item {
    display: flex;
    align-items: center;
    padding: 20px 24px;
    border-bottom: 1px solid rgba(0,0,0,0.04);
    transition: all 0.2s ease;
    text-decoration: none !important;
}
.activity-feed-item:last-child {
    border-bottom: none;
}
.activity-feed-item:hover {
    background: #f8fafc;
    transform: translateX(4px);
}
.activity-icon-box {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: #f1f5f9;
    color: #64748b;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-right: 16px;
    flex-shrink: 0;
}
.activity-icon-box.active { background: #dcfce7; color: #16a34a; }
.activity-icon-box.blocked { background: #ffedd5; color: #ea580c; }

.activity-content {
    flex-grow: 1;
}
.activity-tracking {
    font-size: 16px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 2px;
}
.activity-email {
    font-size: 13px;
    color: #64748b;
}
.status-badge {
    padding: 6px 12px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
}
.status-active { background: #dcfce7; color: #16a34a; }
.status-pending { background: #ffedd5; color: #ea580c; }
.status-delivered { background: #e0f2fe; color: #0284c7; }
@media (min-width: 992px) {
    .activity-feed-item {
        padding: 28px 32px;
    }
    .activity-icon-box {
        width: 56px;
        height: 56px;
        font-size: 24px;
        margin-right: 20px;
    }
    .activity-tracking {
        font-size: 18px;
    }
}
</style>

<div class="mt-4 mb-5 hero-banner">
    <div class="d-flex align-items-center justify-content-between flex-wrap">
        <div class="mb-3 mb-md-0 position-relative" style="z-index: 10;">
            <h1 class="hero-title">Welcome back, {{ Auth('admin')->User()->firstName }}! 👋</h1>
            <p class="hero-subtitle">Here's what's happening with your logistics today.</p>
        </div>
        @if (Auth('admin')->User()->type == 'Super Admin' || Auth('admin')->User()->type == 'Admin')
            <div class="d-flex position-relative" style="z-index: 10;">
                <a href="{{ route('admin.shipments.create') }}" class="btn-glass mr-2">
                    <i class="fas fa-plus mr-1"></i> New Shipment
                </a>
                <a href="{{ route('admin.shipments') }}" class="btn-glass">
                    <i class="fas fa-box mr-1"></i> Manage
                </a>
            </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-md-3 mb-4">
        <div class="stat-card">
            <div class="stat-icon icon-blue">
                <i class="fas fa-shipping-fast"></i>
            </div>
            <div class="stat-value">{{ number_format($numberOfUsers) }}</div>
            <div class="stat-label">Total Shipments</div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3 mb-4">
        <div class="stat-card">
            <div class="stat-icon icon-green">
                <i class="fas fa-check-circle"></i>
            </div>
            <div class="stat-value">{{ number_format($active_users) }}</div>
            <div class="stat-label">Active Shipments</div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3 mb-4">
        <div class="stat-card">
            <div class="stat-icon icon-orange">
                <i class="fas fa-pause-circle"></i>
            </div>
            <div class="stat-value">{{ number_format($blockedusers) }}</div>
            <div class="stat-label">On Hold / Blocked</div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3 mb-4">
        <div class="stat-card">
            <div class="stat-icon icon-purple">
                <i class="fas fa-money-check-alt"></i>
            </div>
            <div class="stat-value">{{ $settings->currency }}{{ number_format($total_deposited) }}</div>
            <div class="stat-label">Processed Payments</div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-7 col-lg-6 mb-4">
        <div class="modern-card h-100">
            <div class="modern-card-header d-flex justify-content-between align-items-center">
                <h4 class="modern-card-title">Shipment Analytics</h4>
                <span class="text-muted"><i class="far fa-calendar-alt mr-1"></i> {{ now()->format('Y') }}</span>
            </div>
            <div class="card-body">
                <div class="chart-container" style="min-height: 350px">
                    <canvas id="modernLineChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-5 col-lg-6 mb-4">
        <div class="modern-card h-100">
            <div class="modern-card-header pb-0">
                <h4 class="modern-card-title mb-3">Latest Activity</h4>
            </div>
            <div class="card-body p-0">
                @forelse ($latestUsers as $user)
                    <a href="{{ route('viewuser', ['id' => $user->id]) }}" class="activity-feed-item">
                        <div class="activity-icon-box {{ $user->status == 'active' ? 'active' : ($user->status == 'blocked' ? 'blocked' : '') }}">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-tracking">{{ $user->trackingnumber ?? 'No Tracking' }}</div>
                            <div class="activity-email">{{ $user->email }}</div>
                        </div>
                        <div>
                            @if($user->status == 'active')
                                <span class="status-badge status-active"><i class="fas fa-circle mr-1" style="font-size: 8px"></i> Active</span>
                            @elseif($user->status == 'blocked')
                                <span class="status-badge status-pending"><i class="fas fa-circle mr-1" style="font-size: 8px"></i> On Hold</span>
                            @else
                                <span class="status-badge status-delivered">{{ ucfirst($user->status) }}</span>
                            @endif
                        </div>
                    </a>
                @empty
                    <div class="p-4 text-center text-muted">
                        <i class="fas fa-inbox fa-3x mb-3 text-light"></i>
                        <p>No recent shipments found.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var userStats = {{ Illuminate\Support\Js::from($usersData) }};
        var ctx = document.getElementById('modernLineChart').getContext('2d');
        
        // Create a gorgeous gradient for the line chart
        var gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(79, 172, 254, 0.4)');
        gradient.addColorStop(1, 'rgba(79, 172, 254, 0.0)');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Shipments",
                    data: userStats,
                    borderColor: '#4facfe',
                    backgroundColor: gradient,
                    borderWidth: 3,
                    pointBackgroundColor: '#ffffff',
                    pointBorderColor: '#4facfe',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6,
                    fill: true,
                    tension: 0.4 // This makes the line smooth and elegant
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false // Hide legend for cleaner look
                    },
                    tooltip: {
                        backgroundColor: '#1e293b',
                        padding: 12,
                        titleFont: { size: 14 },
                        bodyFont: { size: 14 },
                        displayColors: false,
                        cornerRadius: 8,
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            color: '#94a3b8'
                        }
                    },
                    y: {
                        grid: {
                            color: '#f1f5f9',
                            drawBorder: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            color: '#94a3b8',
                            padding: 10
                        }
                    }
                }
            }
        });
    });
</script>
@endpush
