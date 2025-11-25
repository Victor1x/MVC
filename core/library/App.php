<?php

namespace core\library;

use DI\Container;
use DI\ContainerBuilder;
use Dotenv\Dotenv;
use Spatie\Ignition\Ignition;

class App
{
    public readonly Container $container;

    public static function create(): self
    {
        return new self;
    }

    public function withErrorPage() //page de erro para dev igual do laravel
    {
        Ignition::make()
            ->setTheme("dark")
            ->shouldDisplayException(env("ENV") === "development") // se a variable de ambinete env for dev development o page de errors nao vai apace
            ->register();

        return $this;
    }

    public function withContainer() //php-di
    {
        $builder = new ContainerBuilder();
        $this->container = $builder->build();

        return $this;
    }

    public function withEnvironmentVariables()// para o env
    {
        try {
            $dotenv = Dotenv::createImmutable(BASE_PATH);
            $dotenv->load();
            return $this;
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function withTemplateEngine(string $engine) // template
    {
        setBind("templateEngine", $engine);
        return $this;
    }
}
