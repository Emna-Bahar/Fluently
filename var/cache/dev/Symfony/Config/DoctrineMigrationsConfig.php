<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DoctrineMigrations'.\DIRECTORY_SEPARATOR.'StorageConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DoctrineMigrationsConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $enableServiceMigrations;
    private $migrationsPaths;
    private $services;
    private $factories;
    private $storage;
    private $migrations;
    private $connection;
    private $em;
    private $allOrNothing;
    private $checkDatabasePlatform;
    private $customTemplate;
    private $organizeMigrations;
    private $enableProfiler;
    private $transactional;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Whether to enable fetching migrations from the service container.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableServiceMigrations($value): static
    {
        $this->_usedProperties['enableServiceMigrations'] = true;
        $this->enableServiceMigrations = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @return $this
     */
    public function migrationsPath(string $namespace, mixed $value): static
    {
        $this->_usedProperties['migrationsPaths'] = true;
        $this->migrationsPaths[$namespace] = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @return $this
     */
    public function services(string $service, mixed $value): static
    {
        $this->_usedProperties['services'] = true;
        $this->services[$service] = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @return $this
     */
    public function factories(string $factory, mixed $value): static
    {
        $this->_usedProperties['factories'] = true;
        $this->factories[$factory] = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Storage to use for migration status metadata.
     * @default {"table_storage":{"table_name":null,"version_column_name":null,"version_column_length":null,"executed_at_column_name":null,"execution_time_column_name":null}}
    */
    public function storage(array $value = []): \Symfony\Config\DoctrineMigrations\StorageConfig
    {
        if (null === $this->storage) {
            $this->_usedProperties['storage'] = true;
            $this->storage = new \Symfony\Config\DoctrineMigrations\StorageConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "storage()" has already been initialized. You cannot pass values the second time you call storage().');
        }
<<<<<<< HEAD
    
        return $this->storage;
    }
    
=======

        return $this->storage;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function migrations(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['migrations'] = true;
        $this->migrations = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Connection name to use for the migrations database.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connection($value): static
    {
        $this->_usedProperties['connection'] = true;
        $this->connection = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Entity manager name to use for the migrations database (available when doctrine/orm is installed).
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function em($value): static
    {
        $this->_usedProperties['em'] = true;
        $this->em = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Run all migrations in a transaction.
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function allOrNothing($value): static
    {
        $this->_usedProperties['allOrNothing'] = true;
        $this->allOrNothing = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Adds an extra check in the generated migrations to allow execution only on the same platform as they were initially generated on.
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function checkDatabasePlatform($value): static
    {
        $this->_usedProperties['checkDatabasePlatform'] = true;
        $this->checkDatabasePlatform = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Custom template path for generated migration classes.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function customTemplate($value): static
    {
        $this->_usedProperties['customTemplate'] = true;
        $this->customTemplate = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Organize migrations mode. Possible values are: "BY_YEAR", "BY_YEAR_AND_MONTH", false
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function organizeMigrations($value): static
    {
        $this->_usedProperties['organizeMigrations'] = true;
        $this->organizeMigrations = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Whether or not to enable the profiler collector to calculate and visualize migration status. This adds some queries overhead.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableProfiler($value): static
    {
        $this->_usedProperties['enableProfiler'] = true;
        $this->enableProfiler = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Whether or not to wrap migrations in a single transaction.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function transactional($value): static
    {
        $this->_usedProperties['transactional'] = true;
        $this->transactional = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function getExtensionAlias(): string
    {
        return 'doctrine_migrations';
    }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('enable_service_migrations', $value)) {
            $this->_usedProperties['enableServiceMigrations'] = true;
            $this->enableServiceMigrations = $value['enable_service_migrations'];
            unset($value['enable_service_migrations']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('migrations_paths', $value)) {
            $this->_usedProperties['migrationsPaths'] = true;
            $this->migrationsPaths = $value['migrations_paths'];
            unset($value['migrations_paths']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('services', $value)) {
            $this->_usedProperties['services'] = true;
            $this->services = $value['services'];
            unset($value['services']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('factories', $value)) {
            $this->_usedProperties['factories'] = true;
            $this->factories = $value['factories'];
            unset($value['factories']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('storage', $value)) {
            $this->_usedProperties['storage'] = true;
            $this->storage = new \Symfony\Config\DoctrineMigrations\StorageConfig($value['storage']);
            unset($value['storage']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('migrations', $value)) {
            $this->_usedProperties['migrations'] = true;
            $this->migrations = $value['migrations'];
            unset($value['migrations']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('connection', $value)) {
            $this->_usedProperties['connection'] = true;
            $this->connection = $value['connection'];
            unset($value['connection']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('em', $value)) {
            $this->_usedProperties['em'] = true;
            $this->em = $value['em'];
            unset($value['em']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('all_or_nothing', $value)) {
            $this->_usedProperties['allOrNothing'] = true;
            $this->allOrNothing = $value['all_or_nothing'];
            unset($value['all_or_nothing']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('check_database_platform', $value)) {
            $this->_usedProperties['checkDatabasePlatform'] = true;
            $this->checkDatabasePlatform = $value['check_database_platform'];
            unset($value['check_database_platform']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('custom_template', $value)) {
            $this->_usedProperties['customTemplate'] = true;
            $this->customTemplate = $value['custom_template'];
            unset($value['custom_template']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('organize_migrations', $value)) {
            $this->_usedProperties['organizeMigrations'] = true;
            $this->organizeMigrations = $value['organize_migrations'];
            unset($value['organize_migrations']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('enable_profiler', $value)) {
            $this->_usedProperties['enableProfiler'] = true;
            $this->enableProfiler = $value['enable_profiler'];
            unset($value['enable_profiler']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('transactional', $value)) {
            $this->_usedProperties['transactional'] = true;
            $this->transactional = $value['transactional'];
            unset($value['transactional']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enableServiceMigrations'])) {
            $output['enable_service_migrations'] = $this->enableServiceMigrations;
        }
        if (isset($this->_usedProperties['migrationsPaths'])) {
            $output['migrations_paths'] = $this->migrationsPaths;
        }
        if (isset($this->_usedProperties['services'])) {
            $output['services'] = $this->services;
        }
        if (isset($this->_usedProperties['factories'])) {
            $output['factories'] = $this->factories;
        }
        if (isset($this->_usedProperties['storage'])) {
            $output['storage'] = $this->storage->toArray();
        }
        if (isset($this->_usedProperties['migrations'])) {
            $output['migrations'] = $this->migrations;
        }
        if (isset($this->_usedProperties['connection'])) {
            $output['connection'] = $this->connection;
        }
        if (isset($this->_usedProperties['em'])) {
            $output['em'] = $this->em;
        }
        if (isset($this->_usedProperties['allOrNothing'])) {
            $output['all_or_nothing'] = $this->allOrNothing;
        }
        if (isset($this->_usedProperties['checkDatabasePlatform'])) {
            $output['check_database_platform'] = $this->checkDatabasePlatform;
        }
        if (isset($this->_usedProperties['customTemplate'])) {
            $output['custom_template'] = $this->customTemplate;
        }
        if (isset($this->_usedProperties['organizeMigrations'])) {
            $output['organize_migrations'] = $this->organizeMigrations;
        }
        if (isset($this->_usedProperties['enableProfiler'])) {
            $output['enable_profiler'] = $this->enableProfiler;
        }
        if (isset($this->_usedProperties['transactional'])) {
            $output['transactional'] = $this->transactional;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
