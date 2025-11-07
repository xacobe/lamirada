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

/* modules/contrib/gin_lb/templates/status-messages--gin-lb.html.twig */
class __TwigTemplate_206d423870791812e75181674623eef8 extends Template
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
        // line 25
        yield "<div data-drupal-messages class=\"glb-messages-list";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["toastify"] ?? null)) ? (" glb-toastify") : (""))));
        yield "\">
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            yield "    ";
            // line 28
            $context["classes"] = ["messages-list__item", "messages", ("messages--" .             // line 31
$context["type"])];
            // line 34
            yield "    ";
            // line 35
            $context["is_message_with_title"] = (($_v0 = ($context["status_headings"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 35));
            // line 37
            yield "    ";
            // line 38
            $context["is_message_with_icon"] = CoreExtension::inFilter($context["type"], ["error", "status", "warning"]);
            // line 40
            yield "
    <div role=\"contentinfo\" aria-labelledby=\"";
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, (($_v1 = ($context["title_ids"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["title_ids"] ?? null), $context["type"], [], "array", false, false, true, 41)), "html", null, true));
            yield "\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->ginClasses($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 41), "role", "aria-label")), "html", null, true));
            yield ">
      ";
            // line 42
            if (($context["type"] == "error")) {
                // line 43
                yield "      <div role=\"glb-alert\">
        ";
            }
            // line 45
            yield "        ";
            if ((($context["is_message_with_title"] ?? null) || ($context["is_message_with_icon"] ?? null))) {
                // line 46
                yield "          <div class=\"glb-messages__header\">
            ";
                // line 47
                if (($context["is_message_with_title"] ?? null)) {
                    // line 48
                    yield "              <div id=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, (($_v2 = ($context["title_ids"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["title_ids"] ?? null), $context["type"], [], "array", false, false, true, 48)), "html", null, true));
                    yield "\" class=\"glb-messages__title\">
                ";
                    // line 49
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, (($_v3 = ($context["status_headings"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 49)), "html", null, true));
                    yield "
              </div>
            ";
                }
                // line 52
                yield "          </div>
        ";
            }
            // line 54
            yield "        <div class=\"glb-messages__content\">
          ";
            // line 55
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["messages"]) > 1)) {
                // line 56
                yield "            <ul class=\"glb-messages__list\">
              ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 58
                    yield "                <li class=\"glb-messages__item\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $context["message"], "html", null, true));
                    yield "</li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                yield "            </ul>
          ";
            } else {
                // line 62
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["messages"]), "html", null, true));
                yield "
          ";
            }
            // line 64
            yield "        </div>
        ";
            // line 65
            if (($context["type"] == "error")) {
                // line 66
                yield "      </div>
      ";
            }
            // line 68
            yield "    </div>
    ";
            // line 70
            yield "    ";
            $context["attributes"] = $this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->ginClasses(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["classes"] ?? null)], "method", false, false, true, 70));
            // line 71
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["toastify", "message_list", "status_headings", "title_ids", "attributes"]);        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["toastify", "message_list", "status_headings", "title_ids", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/gin_lb/templates/status-messages--gin-lb.html.twig";
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
        return array (  156 => 72,  150 => 71,  147 => 70,  144 => 68,  140 => 66,  138 => 65,  135 => 64,  129 => 62,  125 => 60,  116 => 58,  112 => 57,  109 => 56,  107 => 55,  104 => 54,  100 => 52,  94 => 49,  89 => 48,  87 => 47,  84 => 46,  81 => 45,  77 => 43,  75 => 42,  69 => 41,  66 => 40,  64 => 38,  62 => 37,  60 => 35,  58 => 34,  56 => 31,  55 => 28,  53 => 27,  49 => 26,  44 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/gin_lb/templates/status-messages--gin-lb.html.twig", "/var/www/html/web/modules/contrib/gin_lb/templates/status-messages--gin-lb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 26, "set" => 28, "if" => 42];
        static $filters = ["escape" => 41, "without" => 41, "length" => 55, "first" => 62];
        static $functions = ["glb_classes" => 41];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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
