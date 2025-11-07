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

/* themes/lamirada/templates/views/views-view--services.html.twig */
class __TwigTemplate_899e358f16a906c47d6077e5e852b3c3 extends Template
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
        // line 40
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        yield "
  ";
        // line 41
        if (($context["title"] ?? null)) {
            // line 42
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            yield "
  ";
        }
        // line 44
        yield "  ";
        // line 45
        yield "  ";
        if (($context["header"] ?? null)) {
            // line 46
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
            yield "
  ";
        }
        // line 48
        yield "  ";
        if (($context["exposed"] ?? null)) {
            // line 49
            yield "    ";
            // line 50
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            yield "
    ";
            // line 52
            yield "  ";
        }
        // line 53
        yield "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 54
            yield "    ";
            // line 55
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
            yield "
    ";
            // line 57
            yield "  ";
        }
        // line 58
        yield "
  ";
        // line 59
        if (($context["rows"] ?? null)) {
            // line 60
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            yield "
  ";
        } elseif (        // line 61
($context["empty"] ?? null)) {
            // line 62
            yield "    ";
            // line 63
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
            yield "
    ";
            // line 65
            yield "  ";
        }
        // line 66
        yield "
  ";
        // line 67
        if (($context["pager"] ?? null)) {
            // line 68
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            yield "
  ";
        }
        // line 70
        yield "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 71
            yield "    ";
            // line 72
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
            yield "
    ";
            // line 74
            yield "  ";
        }
        // line 75
        yield "  ";
        if (($context["more"] ?? null)) {
            // line 76
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true));
            yield "
  ";
        }
        // line 78
        yield "  ";
        if (($context["footer"] ?? null)) {
            // line 79
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
            yield "
  ";
        }
        // line 81
        yield "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 82
            yield "    ";
            // line 83
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true));
            yield "
    ";
            // line 85
            yield "  ";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_prefix", "title", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_prefix", "title", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/lamirada/templates/views/views-view--services.html.twig";
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
        return array (  168 => 85,  163 => 83,  161 => 82,  158 => 81,  152 => 79,  149 => 78,  143 => 76,  140 => 75,  137 => 74,  132 => 72,  130 => 71,  127 => 70,  121 => 68,  119 => 67,  116 => 66,  113 => 65,  108 => 63,  106 => 62,  104 => 61,  99 => 60,  97 => 59,  94 => 58,  91 => 57,  86 => 55,  84 => 54,  81 => 53,  78 => 52,  73 => 50,  71 => 49,  68 => 48,  62 => 46,  59 => 45,  57 => 44,  51 => 42,  49 => 41,  44 => 40,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/lamirada/templates/views/views-view--services.html.twig", "/var/www/html/web/themes/lamirada/templates/views/views-view--services.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 41];
        static $filters = ["escape" => 40];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
