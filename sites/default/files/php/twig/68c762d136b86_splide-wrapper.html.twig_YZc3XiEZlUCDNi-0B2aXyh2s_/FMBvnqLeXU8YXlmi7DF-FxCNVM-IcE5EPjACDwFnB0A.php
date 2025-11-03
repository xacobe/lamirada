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

/* modules/contrib/splide/templates/splide-wrapper.html.twig */
class __TwigTemplate_e44b5934b113fbe27ab5eadcfe765a6c extends Template
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
        // line 16
        $context["classes"] = ["splide-wrapper", ((CoreExtension::getAttribute($this->env, $this->source,         // line 18
($context["settings"] ?? null), "skin", [], "any", false, false, true, 18)) ? (("splide-wrapper--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "skin", [], "any", false, false, true, 18)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 19
($context["settings"] ?? null), "skin_nav", [], "any", false, false, true, 19)) ? (("splide-wrapper--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "skin_nav", [], "any", false, false, true, 19)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 20
($context["settings"] ?? null), "vertical", [], "any", false, false, true, 20)) ? ("is-wrapper-vertical") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 21
($context["settings"] ?? null), "vertical_nav", [], "any", false, false, true, 21)) ? ("is-wrapper-vertical--nav") : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 22
($context["blazies"] ?? null), "is", [], "any", false, false, true, 22), "nav", [], "any", false, false, true, 22)) ? ("is-wrapper-nav") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 23
($context["settings"] ?? null), "navpos", [], "any", false, false, true, 23)) ? (("is-wrapper-nav--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "navpos", [], "any", false, false, true, 23)))) : ("")), ((CoreExtension::inFilter("over", CoreExtension::getAttribute($this->env, $this->source,         // line 24
($context["settings"] ?? null), "navpos", [], "any", false, false, true, 24))) ? ("is-wrapper-nav--overlay") : ("")), ((CoreExtension::inFilter("over", CoreExtension::getAttribute($this->env, $this->source,         // line 25
($context["settings"] ?? null), "navpos", [], "any", false, false, true, 25))) ? (("is-wrapper-nav--" . Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "navpos", [], "any", false, false, true, 25), ["over-" => ""]))) : (""))];
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blazies"] ?? null), "is", [], "any", false, false, true, 28), "nav", [], "any", false, false, true, 28)) {
            // line 29
            yield "<div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 29), "id"), "html", null, true));
            yield ">";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["items"] ?? null), "html", null, true));
            // line 31
            yield "</div>
";
        } else {
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["items"] ?? null), "html", null, true));
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["settings", "blazies", "attributes", "items"]);        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["settings", "blazies", "attributes", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/splide/templates/splide-wrapper.html.twig";
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
        return array (  66 => 33,  62 => 31,  60 => 30,  56 => 29,  54 => 28,  52 => 25,  51 => 24,  50 => 23,  49 => 22,  48 => 21,  47 => 20,  46 => 19,  45 => 18,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/splide/templates/splide-wrapper.html.twig", "/var/www/html/web/modules/contrib/splide/templates/splide-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 16, "if" => 28];
        static $filters = ["clean_class" => 18, "replace" => 25, "escape" => 29, "without" => 29];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'replace', 'escape', 'without'],
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
