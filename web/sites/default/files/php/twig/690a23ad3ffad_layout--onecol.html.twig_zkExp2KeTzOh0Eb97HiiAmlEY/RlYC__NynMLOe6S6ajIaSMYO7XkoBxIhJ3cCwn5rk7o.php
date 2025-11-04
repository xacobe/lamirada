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

/* themes/lamirada/templates/layout/layout--onecol.html.twig */
class __TwigTemplate_d179d9807d2de7f825e8c326520baa1c extends Template
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
        // line 12
        $context["section_name"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["content"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#settings"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#settings", [], "array", false, false, true, 12)), "label", [], "any", false, false, true, 12));
        // line 14
        $context["classes"] = ["section", ("section--" .         // line 16
($context["section_name"] ?? null)), "layout--onecol"];
        // line 20
        yield "
";
        // line 21
        if (($context["content"] ?? null)) {
            // line 22
            yield "  <section id=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["section_name"] ?? null), "html", null, true));
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 22), "html", null, true));
            yield ">
    ";
            // line 24
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, true, 24), "html", null, true));
            yield "
    ";
            // line 26
            yield "  </section>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "attributes"]);        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/lamirada/templates/layout/layout--onecol.html.twig";
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
        return array (  66 => 26,  61 => 24,  54 => 22,  52 => 21,  49 => 20,  47 => 16,  46 => 14,  44 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/lamirada/templates/layout/layout--onecol.html.twig", "/var/www/html/web/themes/lamirada/templates/layout/layout--onecol.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 12, "if" => 21];
        static $filters = ["lower" => 12, "escape" => 22];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['lower', 'escape'],
                [],
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
