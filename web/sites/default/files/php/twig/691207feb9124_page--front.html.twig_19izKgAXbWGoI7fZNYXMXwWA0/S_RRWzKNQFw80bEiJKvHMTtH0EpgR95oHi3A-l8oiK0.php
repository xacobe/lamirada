<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/lamirada/templates/layout/page--front.html.twig */
class __TwigTemplate_1db58c2bb686af231ea96831176eb81d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("laborda/slider-click-to-scroll"), "html", null, true);
        yield "
    <header role=\"banner\" class=\"header\">
      ";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 47), "html", null, true);
        yield "
    </header>

    <main role=\"main\" class=\"\">
      <a id=\"main-content\" tabindex=\"-1\"></a>
    <nav class=\"main-menu fs-xxl\">
      <li class=\"main-menu__li\">
        <a id=\"showVideos\" class=\"btn-transparent main-menu__item\">Vídeo</a>
      </li>
      <li class=\"main-menu__li\">
        <a id=\"showPhotos\" class=\"btn btn-transparent main-menu__item\">Fotografía</a>
      </li>
    </nav>
      ";
        // line 61
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 61), "html", null, true);
        yield "
     <a class=\"btn btn-action btn-service\"  href=\"#contacto\">
      Servicios
<?xml
    version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?>
    <svg viewBox=\"0 0 20 20\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
      <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
        <g id=\"Dribbble-Light-Preview\" transform=\"translate(-180.000000, -6639.000000)\" fill=\"currentColor\">
          <g id=\"icons\" transform=\"translate(56.000000, 160.000000)\">
            <path d=\"M134,6479 L132.565,6480.393 L140.172,6488 L124,6488 L124,6490 L140.172,6490 L132.586,6497.586 L134,6499 C137.661,6495.339 140.496,6492.504 144,6489 L134,6479\" id=\"arrow_right-[#349]\"></path>
          </g>
        </g>
      </g>
    </svg>
      </a>
    </main>

    ";
        // line 78
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 78)) {
            // line 79
            yield "      <footer role=\"contentinfo\" class=\"container-lg\">
        ";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 80), "html", null, true);
            yield "
      </footer>
    ";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/lamirada/templates/layout/page--front.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  92 => 80,  89 => 79,  87 => 78,  66 => 61,  50 => 47,  44 => 45,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/lamirada/templates/layout/page--front.html.twig", "/var/www/html/web/themes/lamirada/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 78];
        static $filters = ["escape" => 45];
        static $functions = ["attach_library" => 45];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
