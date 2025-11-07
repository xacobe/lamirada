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

/* themes/lamirada/templates/views/views-view--services_photography.html.twig */
class __TwigTemplate_50574bafece569bb763a5ec07f33bc29 extends Template
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
            // line 43
            yield "  ";
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
        return "themes/lamirada/templates/views/views-view--services_photography.html.twig";
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
        return array (  167 => 85,  162 => 83,  160 => 82,  157 => 81,  151 => 79,  148 => 78,  142 => 76,  139 => 75,  136 => 74,  131 => 72,  129 => 71,  126 => 70,  120 => 68,  118 => 67,  115 => 66,  112 => 65,  107 => 63,  105 => 62,  103 => 61,  98 => 60,  96 => 59,  93 => 58,  90 => 57,  85 => 55,  83 => 54,  80 => 53,  77 => 52,  72 => 50,  70 => 49,  67 => 48,  61 => 46,  58 => 45,  56 => 44,  53 => 43,  51 => 42,  49 => 41,  44 => 40,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/lamirada/templates/views/views-view--services_photography.html.twig", "/var/www/html/web/themes/lamirada/templates/views/views-view--services_photography.html.twig");
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
