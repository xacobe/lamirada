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

/* themes/lamirada/templates/field/field--paragraph--field-view--view.html.twig */
class __TwigTemplate_0d06d8db6e7cf4269757a892e78fb5b2 extends Template
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
        // line 55
        yield "
<div class=\"section--servicios\">
";
        // line 57
        if (($context["label_hidden"] ?? null)) {
            // line 58
            yield "  ";
            if (($context["multiple"] ?? null)) {
                // line 59
                yield "    ";
                // line 60
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 61
                    yield "        ";
                    // line 62
                    yield "        ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 62), "html", null, true));
                    yield "
        ";
                    // line 64
                    yield "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                yield "    ";
                // line 66
                yield "  ";
            } else {
                // line 67
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 68
                    yield "      ";
                    // line 69
                    yield "      ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 69), "html", null, true));
                    yield "
      ";
                    // line 71
                    yield "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                yield "  ";
            }
        } else {
            // line 74
            yield "  ";
            // line 75
            yield "    ";
            // line 76
            yield "    ";
            // line 77
            yield "    ";
            // line 78
            yield "    ";
            if (($context["multiple"] ?? null)) {
                // line 79
                yield "      ";
                // line 80
                yield "    ";
            }
            // line 81
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 82
                yield "      ";
                // line 83
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 83), "html", null, true));
                yield "
      ";
                // line 85
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "    ";
            if (($context["multiple"] ?? null)) {
                // line 87
                yield "      ";
                // line 88
                yield "    ";
            }
            // line 89
            yield "  ";
        }
        // line 91
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["label_hidden", "multiple", "items"]);        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["label_hidden", "multiple", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/lamirada/templates/field/field--paragraph--field-view--view.html.twig";
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
        return array (  145 => 91,  142 => 89,  139 => 88,  137 => 87,  134 => 86,  128 => 85,  123 => 83,  121 => 82,  116 => 81,  113 => 80,  111 => 79,  108 => 78,  106 => 77,  104 => 76,  102 => 75,  100 => 74,  96 => 72,  90 => 71,  85 => 69,  83 => 68,  78 => 67,  75 => 66,  73 => 65,  67 => 64,  62 => 62,  60 => 61,  55 => 60,  53 => 59,  50 => 58,  48 => 57,  44 => 55,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/lamirada/templates/field/field--paragraph--field-view--view.html.twig", "/var/www/html/web/themes/lamirada/templates/field/field--paragraph--field-view--view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 57, "for" => 60];
        static $filters = ["escape" => 62];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
