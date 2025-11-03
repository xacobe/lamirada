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

/* modules/contrib/splide/templates/splide-minimal.html.twig */
class __TwigTemplate_2032fe87affcd2e8c0dcfab087ce9cd2 extends Template
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
            'splide_minimal' => [$this, 'block_splide_minimal'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        $context["classes"] = [("slide--" .         // line 25
($context["delta"] ?? null))];
        // line 28
        $context["use_blazy"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blazies"] ?? null), "use", [], "any", false, false, true, 28), "theme_thumbnail", [], "any", false, false, true, 28);
        // line 29
        yield from $this->unwrap()->yieldBlock('splide_minimal', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["delta", "blazies", "settings", "attributes", "item"]);        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["delta", "blazies", "settings", "attributes", "item"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_splide_minimal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "wrapper", [], "any", false, false, true, 30)) {
            yield "<li";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 30), "html", null, true));
            yield ">";
        }
        // line 31
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "current_item", [], "any", false, false, true, 31) == "nav")) {
            // line 33
            if (($context["use_blazy"] ?? null)) {
                // line 34
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["item"] ?? null), "html", null, true));
            } else {
                // line 36
                yield "        ";
                // line 37
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "slide", [], "any", false, false, true, 37))) {
                    // line 38
                    yield "<div class=\"slide__thumbnail\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "slide", [], "any", false, false, true, 38), "html", null, true));
                    yield "</div>";
                }
                // line 40
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caption", [], "any", false, false, true, 40))) {
                    // line 41
                    yield "<div class=\"slide__caption\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caption", [], "any", false, false, true, 41), "html", null, true));
                    yield "</div>";
                }
            }
        } else {
            // line 45
            yield "      ";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["item"] ?? null), "html", null, true));
        }
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "wrapper", [], "any", false, false, true, 48)) {
            yield "</li>";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/splide/templates/splide-minimal.html.twig";
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
        return array (  99 => 48,  96 => 46,  94 => 45,  87 => 41,  85 => 40,  80 => 38,  78 => 37,  76 => 36,  73 => 34,  71 => 33,  69 => 31,  63 => 30,  50 => 29,  48 => 28,  46 => 25,  45 => 24,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/splide/templates/splide-minimal.html.twig", "/var/www/html/web/modules/contrib/splide/templates/splide-minimal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 24, "block" => 29, "if" => 30];
        static $filters = ["escape" => 30];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape'],
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
