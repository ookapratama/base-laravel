<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class MakeFeature extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:feature {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate CRUD structure (Controller, Service, Repository, Request)';

    protected Filesystem $files;
    protected string $feature;
    protected string $subDir = '';
    protected string $namespaceSuffix = '';
    protected string $pathSuffix = '';


    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }


    /**
     * Execute the console command.
     */
    public function handle()
    {
        $input = str_replace('\\', '/', $this->argument('name'));
        $segments = explode('/', $input);
        
        $this->feature = Str::studly(array_pop($segments));
        
        if (!empty($segments)) {
            $this->subDir = implode('/', array_map(fn($s) => Str::studly($s), $segments));
            $this->namespaceSuffix = '\\' . str_replace('/', '\\', $this->subDir);
            $this->pathSuffix = '/' . $this->subDir;
        }

        $this->makeDirectories();
        $this->makeRepository();
        $this->makeService();
        $this->makeController();
        $this->makeRequest();
        $this->makeViews();

        $this->newLine();
        $this->info("✅ CRUD {$this->feature} generated successfully!");
        $this->showBindingHint();
    }

    /**
     * ===============================
     * DIRECTORIES
     * ===============================
     */
    protected function makeDirectories()
    {
        $viewFolder = Str::snake($this->feature, '-');
        $viewSubPath = !empty($this->subDir) ? Str::lower($this->subDir) . '/' : '';
        
        $dirs = [
            app_path("Repositories{$this->pathSuffix}"),
            app_path("Services{$this->pathSuffix}"),
            app_path("Interfaces/Repositories{$this->pathSuffix}"),
            app_path("Http/Controllers{$this->pathSuffix}"),
            app_path("Http/Requests{$this->pathSuffix}"),
            resource_path("views/pages/{$viewSubPath}{$viewFolder}"),
        ];

        foreach ($dirs as $dir) {
            if (! $this->files->exists($dir)) {
                $this->files->makeDirectory($dir, 0755, true);
            }
        }
    }

    /**
     * ===============================
     * REPOSITORY + INTERFACE
     * ===============================
     */
    protected function makeRepository(): void
    {
        $repositoryPath = app_path("Repositories{$this->pathSuffix}/{$this->feature}Repository.php");
        $interfacePath  = app_path("Interfaces/Repositories{$this->pathSuffix}/{$this->feature}RepositoryInterface.php");

        if (! $this->files->exists($interfacePath)) {
            $this->files->put($interfacePath, <<<PHP
<?php

namespace App\Interfaces\Repositories{$this->namespaceSuffix};

interface {$this->feature}RepositoryInterface
{
}
PHP);
        }

        if (! $this->files->exists($repositoryPath)) {
            $this->files->put($repositoryPath, <<<PHP
<?php

namespace App\Repositories{$this->namespaceSuffix};

use App\Models\\{$this->feature};
use App\Repositories\BaseRepository;
use App\Interfaces\Repositories{$this->namespaceSuffix}\\{$this->feature}RepositoryInterface;

class {$this->feature}Repository extends BaseRepository implements {$this->feature}RepositoryInterface
{
    public function __construct({$this->feature} \$model)
    {
        \$this->model = \$model;
    }
}
PHP);
        }
    }

    /**
     * ===============================
     * SERVICE
     * ===============================
     */
    protected function makeService(): void
    {
        $servicePath = app_path("Services{$this->pathSuffix}/{$this->feature}Service.php");

        if ($this->files->exists($servicePath)) return;

        $this->files->put($servicePath, <<<PHP
<?php

namespace App\Services{$this->namespaceSuffix};

use App\Services\BaseService;
use App\Repositories{$this->namespaceSuffix}\\{$this->feature}Repository;

class {$this->feature}Service extends BaseService
{
    public function __construct({$this->feature}Repository \$repository)
    {
        parent::__construct(\$repository);
    }
}
PHP);
    }

    /**
     * ===============================
     * REQUEST
     * ===============================
     */
    protected function makeRequest(): void
    {
        $requestPath = app_path("Http/Requests{$this->pathSuffix}/{$this->feature}Request.php");

        if ($this->files->exists($requestPath)) return;

        $this->files->put($requestPath, <<<PHP
<?php

namespace App\Http\Requests{$this->namespaceSuffix};

use App\Http\Requests\BaseRequest;

class {$this->feature}Request extends BaseRequest
{
    public function rules(): array
    {
        return [
            // 'name' => 'required|string|max:255',
        ];
    }
}
PHP);
    }

    /**
     * ===============================
     * CONTROLLER
     * ===============================
     */
    protected function makeController(): void
    {
        $controllerPath = app_path("Http/Controllers{$this->pathSuffix}/{$this->feature}Controller.php");
        
        $subDirKebab = !empty($this->subDir) ? str_replace('/', '.', Str::lower($this->subDir)) . '.' : '';
        $slug = $subDirKebab . Str::kebab($this->feature);
        
        $viewSubPath = !empty($this->subDir) ? str_replace('/', '.', Str::lower($this->subDir)) . '.' : '';
        $viewPath = $viewSubPath . Str::snake($this->feature, '-');

        if ($this->files->exists($controllerPath)) return;

        $this->files->put($controllerPath, <<<PHP
<?php

namespace App\Http\Controllers{$this->namespaceSuffix};

use App\Http\Controllers\Controller;
use App\Services{$this->namespaceSuffix}\\{$this->feature}Service;
use App\Http\Requests{$this->namespaceSuffix}\\{$this->feature}Request;
use Illuminate\Http\Request;

class {$this->feature}Controller extends Controller
{
    public function __construct(
        protected {$this->feature}Service \$service
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        \$data = \$this->service->all();
        return view('pages.{$viewPath}.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.{$viewPath}.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store({$this->feature}Request \$request)
    {
        \$data = \$request->validated();
        \$this->service->create(\$data);

        return redirect()->route('{$slug}.index')
            ->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(\$id)
    {
        \$data = \$this->service->find(\$id);
        return view('pages.{$viewPath}.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(\$id)
    {
        \$data = \$this->service->find(\$id);
        return view('pages.{$viewPath}.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update({$this->feature}Request \$request, \$id)
    {
        \$data = \$request->validated();
        \$this->service->update(\$id, \$data);

        return redirect()->route('{$slug}.index')
            ->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(\$id)
    {
        \$this->service->delete(\$id);

        return redirect()->route('{$slug}.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
PHP);

        $this->info("💡 Jangan lupa tambahkan route di routes/web.php:");
        $this->line("   Route::resource('{$slug}', \\App\\Http\\Controllers{$this->namespaceSuffix}\\{$this->feature}Controller::class);");
    }

    /**
     * ===============================
     * VIEWS
     * ===============================
     */
    protected function makeViews(): void
    {
        $viewFolder = Str::snake($this->feature, '-');
        $viewSubDir = !empty($this->subDir) ? Str::lower($this->subDir) . '/' : '';
        
        $subDirDot = !empty($this->subDir) ? str_replace('/', '.', Str::lower($this->subDir)) . '.' : '';
        $slug = $subDirDot . Str::kebab($this->feature);
        $title = Str::headline($this->feature);

        // Directories already created by makeDirectories

        // 1. Index View
        $indexPath = resource_path("views/pages/{$viewSubDir}{$viewFolder}/index.blade.php");
        if (!$this->files->exists($indexPath)) {
            $this->files->put($indexPath, $this->getIndexTemplate($title, $slug));
        }

        // 2. Create View
        $createPath = resource_path("views/pages/{$viewSubDir}{$viewFolder}/create.blade.php");
        if (!$this->files->exists($createPath)) {
            $this->files->put($createPath, $this->getCreateTemplate($title, $slug));
        }

        // 3. Edit View
        $editPath = resource_path("views/pages/{$viewSubDir}{$viewFolder}/edit.blade.php");
        if (!$this->files->exists($editPath)) {
            $this->files->put($editPath, $this->getEditTemplate($title, $slug));
        }

        // 4. Show View
        $showPath = resource_path("views/pages/{$viewSubDir}{$viewFolder}/show.blade.php");
        if (!$this->files->exists($showPath)) {
            $this->files->put($showPath, $this->getShowTemplate($title, $slug));
        }
    }

    protected function getIndexTemplate($title, $slug)
    {
        return <<<BLADE
@extends('layouts/layoutMaster')

@section('title', '{$title}')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold mb-0">
            <span class="text-muted fw-light">Manajemen /</span> Daftar {$title}
        </h4>
        <a href="{{ route('{$slug}.create') }}" class="btn btn-primary">
            <i class="ri-add-line me-1"></i> Tambah {$title}
        </a>
    </div>

    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-0">Daftar {$title}</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 50px">#</th>
                        <th>Keterangan</th>
                        <th>Tanggal Dibuat</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse(\$data as \$index => \$item)
                        <tr>
                            <td>{{ \$index + 1 }}</td>
                            <td>
                                <span class="fw-bold">{{ \$item->name ?? 'N/A' }}</span>
                            </td>
                            <td>{{ \$item->created_at->format('d M Y H:i') }}</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('{$slug}.show', \$item->id) }}" class="btn btn-sm btn-outline-info">
                                        <i class="ri-eye-line"></i>
                                    </a>
                                    <a href="{{ route('{$slug}.edit', \$item->id) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="ri-pencil-line"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger delete-record" 
                                            data-id="{{ \$item->id }}" 
                                            data-name="{{ \$item->name ?? 'Data' }}">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-5">
                                <div class="text-muted">
                                    <i class="ri-file-search-line ri-3x mb-2"></i>
                                    <p>Belum ada data {$title} yang tersedia.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('page-script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('.delete-record').on('click', function() {
            let id = $(this).data('id');
            let name = $(this).data('name');
            let url = "{{ route('{$slug}.destroy', ':id') }}".replace(':id', id);

            window.AlertHandler.confirm(
                'Hapus Data?',
                `Apakah Anda yakin ingin menghapus "\${name}"?`,
                'Ya, Hapus!',
                function() {
                    $.ajax({
                        url: url,
                        method: 'DELETE',
                        data: { _token: '{{ csrf_token() }}' },
                        success: function(response) {
                            window.AlertHandler.handle(response);
                            setTimeout(() => { window.location.reload(); }, 1500);
                        }
                    });
                }
            );
        });
    });
</script>
@endsection
BLADE;
    }

    protected function getCreateTemplate($title, $slug)
    {
        return <<<BLADE
@extends('layouts/layoutMaster')

@section('title', 'Tambah {$title}')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold mb-4">
        <span class="text-muted fw-light">Manajemen / <a href="{{ route('{$slug}.index') }}">{$title}</a> /</span> Tambah
    </h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Form Tambah {$title}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('{$slug}.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Nama {$title}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ \$message }}</div>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary me-2">Simpan</button>
                            <a href="{{ route('{$slug}.index') }}" class="btn btn-outline-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
BLADE;
    }

    protected function getEditTemplate($title, $slug)
    {
        return <<<BLADE
@extends('layouts/layoutMaster')

@section('title', 'Edit {$title}')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold mb-4">
        <span class="text-muted fw-light">Manajemen / <a href="{{ route('{$slug}.index') }}">{$title}</a> /</span> Edit
    </h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Data: {{ \$data->name ?? 'N/A' }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('{$slug}.update', \$data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label" for="name">Nama {$title}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', \$data->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ \$message }}</div>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary me-2">Update Data</button>
                            <a href="{{ route('{$slug}.index') }}" class="btn btn-outline-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
BLADE;
    }

    protected function getShowTemplate($title, $slug)
    {
        return <<<BLADE
@extends('layouts/layoutMaster')

@section('title', 'Detail {$title}')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold mb-4">
        <span class="text-muted fw-light">Manajemen / <a href="{{ route('{$slug}.index') }}">{$title}</a> /</span> Detail
    </h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card p-4">
                <div class="d-flex justify-content-between align-items-start border-bottom pb-3 mb-3">
                    <div>
                        <h4 class="mb-1 text-primary">{{ \$data->name ?? 'Detail Data' }}</h4>
                        <p class="text-muted mb-0">ID: {{ \$data->id }}</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('{$slug}.edit', \$data->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('{$slug}.index') }}" class="btn btn-outline-secondary">Kembali</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <tr>
                                <th width="150" class="text-muted">Dibuat Pada</th>
                                <td>: {{ \$data->created_at->format('d F Y H:i') }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Update Terakhir</th>
                                <td>: {{ \$data->updated_at->format('d F Y H:i') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
BLADE;
    }

    /**
     * ===============================
     * AUTO BINDING HINT
     * ===============================
     */
    protected function showBindingHint(): void
    {
        $this->newLine();
        $this->info("📌 Tambahkan binding di AppServiceProvider::register():");
        $this->line("   \$this->app->bind(");
        $this->line("       \\App\\Interfaces\\Repositories{$this->namespaceSuffix}\\{$this->feature}RepositoryInterface::class,");
        $this->line("       \\App\\Repositories{$this->namespaceSuffix}\\{$this->feature}Repository::class");
        $this->line("   );");
    }
}
