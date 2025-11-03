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

/* modules/contrib/gin_lb/templates/form/fieldset--gin-lb.html.twig */
class __TwigTemplate_1fffdff3b4f8cbe5383875061a2f7c2b extends Template
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
        // line 11
        $context["classes"] = ["fieldset", ((CoreExtension::getAttribute($this->env, $this->source,         // line 13
($context["attributes"] ?? null), "hasClass", ["fieldgroup"], "method", false, false, true, 13)) ? ("fieldset--group") : ("")), "js-form-item", "form-item", "js-form-wrapper", "form-wrapper"];
        // line 21
        $context["wrapper_classes"] = ["fieldset__wrapper", ((CoreExtension::getAttribute($this->env, $this->source,         // line 23
($context["attributes"] ?? null), "hasClass", ["fieldgroup"], "method", false, false, true, 23)) ? ("fieldset__wrapper--group") : (""))];
        // line 27
        $context["legend_span_classes"] = ["fieldset__label", ((CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["attributes"] ?? null), "hasClass", ["fieldgroup"], "method", false, false, true, 29)) ? ("fieldset__label--group") : ("")), ((        // line 30
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 31
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 35
        $context["legend_classes"] = ["fieldset__legend", (((CoreExtension::getAttribute($this->env, $this->source,         // line 37
($context["attributes"] ?? null), "hasClass", ["fieldgroup"], "method", false, false, true, 37) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["form-composite"], "method", false, false, true, 37))) ? ("fieldset__legend--group") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["attributes"] ?? null), "hasClass", ["form-composite"], "method", false, false, true, 38)) ? ("fieldset__legend--composite") : ("")), (((        // line 39
($context["title_display"] ?? null) == "invisible")) ? ("fieldset__legend--invisible") : ("fieldset__legend--visible"))];
        // line 43
        $context["description_classes"] = ["fieldset__description"];
        // line 47
        yield "
<fieldset";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->ginClasses(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 48)), "html", null, true));
        yield ">
  ";
        // line 50
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 50)) {
            // line 51
            yield "    <legend";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->ginClasses(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 51), "addClass", [($context["legend_classes"] ?? null)], "method", false, false, true, 51)), "html", null, true));
            yield ">
      <span";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->ginClasses(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 52), "addClass", [($context["legend_span_classes"] ?? null)], "method", false, false, true, 52)), "html", null, true));
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 52), "html", null, true));
            yield "</span>
    </legend>
  ";
        }
        // line 55
        yield "
  <div";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->ginClasses(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["wrapper_classes"] ?? null)], "method", false, false, true, 56)), "html", null, true));
        yield ">
    ";
        // line 57
        if (($context["inline_items"] ?? null)) {
            // line 58
            yield "    <div class=\"container-inline\">
      ";
        }
        // line 60
        yield "
      ";
        // line 61
        if (($context["prefix"] ?? null)) {
            // line 62
            yield "        <span class=\"fieldset__prefix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            yield "</span>
      ";
        }
        // line 64
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        yield "
      ";
        // line 65
        if (($context["suffix"] ?? null)) {
            // line 66
            yield "        <span class=\"fieldset__suffix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            yield "</span>
      ";
        }
        // line 68
        yield "      ";
        if (($context["errors"] ?? null)) {
            // line 69
            yield "        <div class=\"fieldset__error-message\">
          ";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            yield "
        </div>
      ";
        }
        // line 73
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 73)) {
            // line 74
            yield "        <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->ginClasses(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 74), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 74)), "html", null, true));
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 74), "html", null, true));
            yield "</div>
      ";
        }
        // line 76
        yield "
      ";
        // line 77
        if (($context["inline_items"] ?? null)) {
            // line 78
            yield "    </div>
    ";
        }
        // line 80
        yield "  </div>
</fieldset>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "required", "title_display", "legend", "legend_span", "content_attributes", "inline_items", "prefix", "children", "suffix", "errors", "description"]);        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "required", "title_display", "legend", "legend_span", "content_attributes", "inline_items", "prefix", "children", "suffix", "errors", "description"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/gin_lb/templates/form/fieldset--gin-lb.html.twig";
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
        return array (  154 => 80,  150 => 78,  148 => 77,  145 => 76,  137 => 74,  134 => 73,  128 => 70,  125 => 69,  122 => 68,  116 => 66,  114 => 65,  109 => 64,  103 => 62,  101 => 61,  98 => 60,  94 => 58,  92 => 57,  88 => 56,  85 => 55,  77 => 52,  72 => 51,  69 => 50,  65 => 48,  62 => 47,  60 => 43,  58 => 39,  57 => 38,  56 => 37,  55 => 35,  53 => 31,  52 => 30,  51 => 29,  50 => 27,  48 => 23,  47 => 21,  45 => 13,  44 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/gin_lb/templates/form/fieldset--gin-lb.html.twig", "/var/www/html/web/modules/contrib/gin_lb/templates/form/fieldset--gin-lb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 11, "if" => 50];
        static $filters = ["escape" => 48];
        static $functions = ["glb_classes" => 48];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
