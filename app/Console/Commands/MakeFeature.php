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
        $this->feature = Str::studly($this->argument('name'));

        $this->makeDirectories();
        $this->makeRepository();
        $this->makeService();
        $this->makeController();
        $this->makeRequest();

        $this->info("CRUD {$this->feature} generated successfully");
    }

    /**
     * ===============================
     * DIRECTORIES
     * ===============================
     */
    protected function makeDirectories()
    {
        $dirs = [
            app_path('Repositories'),
            app_path('Services'),
            app_path('Interfaces/Repositories'),
            app_path('Http/Controllers'),
            app_path('Http/Requests'),
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
        $repositoryPath = app_path("Repositories/{$this->feature}Repository.php");
        $interfacePath  = app_path("Interfaces/Repositories/{$this->feature}RepositoryInterface.php");

        if (! $this->files->exists($interfacePath)) {
            $this->files->put($interfacePath, <<<PHP
<?php

namespace App\Interfaces\Repositories;

interface {$this->feature}RepositoryInterface
{
}
PHP);
        }

        if (! $this->files->exists($repositoryPath)) {
            $this->files->put($repositoryPath, <<<PHP
<?php

namespace App\Repositories;

use App\Models\\{$this->feature};
use App\Interfaces\Repositories\\{$this->feature}RepositoryInterface;

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
        $servicePath = app_path("Services/{$this->feature}Service.php");

        if ($this->files->exists($servicePath)) return;

        $this->files->put($servicePath, <<<PHP
<?php

namespace App\Services;

use App\Repositories\\{$this->feature}Repository;

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
        $requestPath = app_path("Http/Requests/{$this->feature}Request.php");

        if ($this->files->exists($requestPath)) return;

        $this->files->put($requestPath, <<<PHP
<?php

namespace App\Http\Requests;

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
        $controllerPath = app_path("Http/Controllers/{$this->feature}Controller.php");

        if ($this->files->exists($controllerPath)) return;

        $this->files->put($controllerPath, <<<PHP
<?php

namespace App\Http\Controllers;

use App\Services\\{$this->feature}Service;
use App\Http\Requests\\{$this->feature}Request;

class {$this->feature}Controller extends BaseCrudController
{
    public function __construct({$this->feature}Service \$service)
    {
        \$this->service = \$service;
    }
}
PHP);
    }
}
