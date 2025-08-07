use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\IuranController;
use App\Http\Controllers\KasController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\InventarisController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Semua route di bawah hanya bisa diakses jika sudah login
Route::middleware(['auth'])->group(function () {
    // PROFILE
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // KEPALA KELUARGA & ANGGOTA KELUARGA
    Route::resource('/keluarga', KeluargaController::class);

    // IURAN BULANAN
    Route::resource('/iuran', IuranController::class);

    // KAS (PEMASUKAN & PENGELUARAN)
    Route::resource('/kas', KasController::class);

    // PENCATATAN KEMATIAN & SANTUNAN
    Route::resource('/kematian', KematianController::class);

    // INVENTARIS (PERLENGKAPAN JENAZAH & TAKZIAH)
    Route::resource('/inventaris', InventarisController::class);
});

require __DIR__.'/auth.php';
