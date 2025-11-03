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

/* modules/contrib/gin_lb/templates/form/input--gin-lb.html.twig */
class __TwigTemplate_524dae9847900d56fe990ea3e9596d9a extends Template
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
        // line 15
        $context["classes"] = [((((CoreExtension::getAttribute($this->env, $this->source,         // line 16
($context["attributes"] ?? null), "type", [], "any", false, false, true, 16) != "submit") && (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "type", [], "any", false, false, true, 16) != "radio"))) ? ("form-element") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 17
($context["attributes"] ?? null), "type", [], "any", false, false, true, 17) == "radio")) ? ("form-boolean--type-radio") : (""))];
        // line 20
        yield "<input";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->ginClasses(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 20)), "html", null, true));
        yield " />";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "children"]);        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "children"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/gin_lb/templates/form/input--gin-lb.html.twig";
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
        return array (  48 => 20,  46 => 17,  45 => 16,  44 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/gin_lb/templates/form/input--gin-lb.html.twig", "/var/www/html/web/modules/contrib/gin_lb/templates/form/input--gin-lb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 15];
        static $filters = ["escape" => 20];
        static $functions = ["glb_classes" => 20];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['glb_classes'],
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
