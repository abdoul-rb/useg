<?php

namespace App\Console\Commands\Maker;

use Illuminate\Console\Command;

class GenerateServiceClass extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:own:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Service class in the app/Services directory';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $name = str_replace('\\', '/', $name);
        $serviceFilename = base_path("app/Services/{$name}Service.php");
        $directory = dirname($serviceFilename);

        if (! file_exists($directory)) {
            mkdir($directory, 0755, true);
        }

        if (! file_exists($serviceFilename)) {
            $template = $this->createServiceTemplate($name);
            file_put_contents($serviceFilename, $template);

            $this->info("Custom console command [{$name}.php] created successfully.");
        } else {
            $this->warn("Service {$name}.php already exists.");
        }

        return Command::SUCCESS;
    }

    protected function createServiceTemplate(string $name)
    {
        $name = str_replace('\\\\', '/', $name);
        $namespacePath = str_replace('/', '\\', $name);
        $className = basename(str_replace('\\', '/', $name));
        $baseNamespace = 'App\\Services';

        if (str_contains($namespacePath, '\\')) {
            $pathForNamespace = trim(substr($namespacePath, 0, strrpos($namespacePath, '\\')));
            $namespace = "{$baseNamespace}\\{$pathForNamespace}";
        } else {
            $namespace = $baseNamespace;
        }

        return <<<EOT
        <?php

        namespace $namespace;

        class {$className}Service
        {
            //
        }
        EOT;
    }
}
