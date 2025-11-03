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

/* themes/lamirada/templates/content/splide.html.twig */
class __TwigTemplate_1d7e9946464e7fe08bc08b6808841861 extends Template
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
            'splide_content' => [$this, 'block_splide_content'],
            'splide_progress' => [$this, 'block_splide_progress'],
            'splide_autoplay' => [$this, 'block_splide_autoplay'],
            'splide_arrow' => [$this, 'block_splide_arrow'],
            'splide_pagination' => [$this, 'block_splide_pagination'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        $context["classes"] = [((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["splides"] ?? null), "is", [], "any", false, false, true, 38), "unsplide", [], "any", false, false, true, 38)) ? ("unsplide") : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["blazies"] ?? null), "is", [], "any", false, false, true, 39), "nav", [], "any", false, false, true, 39)) ? (("splide--" . \Drupal\Component\Utility\Html::getClass(($context["display"] ?? null)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["settings"] ?? null), "skin", [], "any", false, false, true, 40)) ? (("splide--skin--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "skin", [], "any", false, false, true, 40)))) : ("")), ((CoreExtension::inFilter("boxed", CoreExtension::getAttribute($this->env, $this->source,         // line 41
($context["settings"] ?? null), "skin", [], "any", false, false, true, 41))) ? ("splide--skin--boxed") : ("")), ((CoreExtension::inFilter("split", CoreExtension::getAttribute($this->env, $this->source,         // line 42
($context["settings"] ?? null), "skin", [], "any", false, false, true, 42))) ? ("splide--skin--split") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 43
($context["settings"] ?? null), "optionset", [], "any", false, false, true, 43)) ? (("splide--optionset--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "optionset", [], "any", false, false, true, 43)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["splides"] ?? null), "transition", [], "any", false, false, true, 44)) ? (("splide--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["splides"] ?? null), "transition", [], "any", false, false, true, 44)))) : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["settings"] ?? null), "perPage", [], "any", false, false, true, 45) > 1)) ? ("is-carousel") : ("is-slider")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["settings"] ?? null), "fullwidth", [], "any", false, false, true, 46)) ? ("is-fullwidth") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["blazies"] ?? null), "count", [], "any", false, false, true, 47) <= CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "perPage", [], "any", false, false, true, 47))) ? ("is-less") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["settings"] ?? null), "vertical", [], "any", false, false, true, 48)) ? ("is-vertical") : ("")), ((((        // line 49
($context["display"] ?? null) == "main") && CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "media_switch", [], "any", false, false, true, 49))) ? (("is-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "media_switch", [], "any", false, false, true, 49)))) : ("")), ((((        // line 50
($context["display"] ?? null) == "nav") && CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "nav_caption", [], "any", false, false, true, 50))) ? ("is-captioned") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 51
($context["settings"] ?? null), "skin_arrows", [], "any", false, false, true, 51) || array_key_exists("arrow_down_attributes", $context))) ? ("is-arrowed") : ("")), ((        // line 52
array_key_exists("arrow_down_attributes", $context)) ? ("is-arrowed--down") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 53
($context["settings"] ?? null), "skin_arrows", [], "any", false, false, true, 53)) ? (("is-arrowed--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "skin_arrows", [], "any", false, false, true, 53)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 54
($context["splides"] ?? null), "use", [], "any", false, false, true, 54), "autoplay", [], "any", false, false, true, 54)) ? ("is-autoplay") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 55
($context["settings"] ?? null), "autoscroll", [], "any", false, false, true, 55)) ? ("is-autoscroll") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 56
($context["settings"] ?? null), "pagination", [], "any", false, false, true, 56)) ? ("is-paginated") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 57
($context["settings"] ?? null), "pagination_fx", [], "any", false, false, true, 57)) ? (("is-paginated--fx-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "pagination_fx", [], "any", false, false, true, 57)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 58
($context["settings"] ?? null), "pagination_tab", [], "any", false, false, true, 58)) ? ("is-paginated--tab") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 59
($context["settings"] ?? null), "pagination_pos", [], "any", false, false, true, 59)) ? (("is-paginated--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "pagination_pos", [], "any", false, false, true, 59)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 60
($context["settings"] ?? null), "skin_dots", [], "any", false, false, true, 60)) ? (("is-paginated--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "skin_dots", [], "any", false, false, true, 60)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 61
($context["settings"] ?? null), "attributes", [], "any", false, false, true, 61), "class", [], "any", false, false, true, 61)) ? (Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "attributes", [], "any", false, false, true, 61), "class", [], "any", false, false, true, 61), " ")) : (""))];
        // line 64
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 64), "html", null, true));
        yield ">
  ";
        // line 65
        yield from $this->unwrap()->yieldBlock('splide_content', $context, $blocks);
        // line 71
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["splides"] ?? null), "use", [], "any", false, false, true, 71), "slider", [], "any", false, false, true, 71)) {
            // line 72
            yield "<div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["splide__slider"], "method", false, false, true, 72), "html", null, true));
            yield ">";
        }
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["splides"] ?? null), "use", [], "any", false, false, true, 80), "progress", [], "any", false, false, true, 80)) {
            // line 81
            yield from $this->unwrap()->yieldBlock('splide_progress', $context, $blocks);
        }
        // line 85
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["splides"] ?? null), "use", [], "any", false, false, true, 85), "autoplay", [], "any", false, false, true, 85)) {
            // line 86
            yield from $this->unwrap()->yieldBlock('splide_autoplay', $context, $blocks);
        }
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["splides"] ?? null), "use", [], "any", false, false, true, 94), "slider", [], "any", false, false, true, 94)) {
            // line 95
            yield "</div>";
        }
        // line 98
        yield from $this->unwrap()->yieldBlock('splide_arrow', $context, $blocks);
        // line 107
        yield "  ";
        yield from $this->unwrap()->yieldBlock('splide_pagination', $context, $blocks);
        // line 110
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["splides", "blazies", "display", "settings", "arrow_down_attributes", "attributes", "content_attributes", "list_attributes", "items", "arrows_attributes", "pagination_attributes"]);        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["splides", "blazies", "display", "settings", "arrow_down_attributes", "attributes", "content_attributes", "list_attributes", "items", "arrows_attributes", "pagination_attributes"]);        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_splide_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "    <div class=\"splide__track\">
      <ul";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["list_attributes"] ?? null), "html", null, true));
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["items"] ?? null), "html", null, true));
        yield "</ul>
    </div>
  ";
        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_splide_progress(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        yield "      <div class=\"splide__progress\"><div class=\"splide__progress__bar\"></div></div>
    ";
        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_splide_autoplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        yield "      <button class=\"splide__toggle\" type=\"button\" aria-controls=\"toggle-track\" aria-label=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pause autoplay")));
        yield "\">
        <svg class=\"splide__toggle__play\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m22 12-20 11v-22l10 5.5z\"></path></svg>
        <svg class=\"splide__toggle__pause\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m2 1v22h7v-22zm13 0v22h7v-22z\"></path></svg>
      </button>
    ";
        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_splide_arrow(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 99
        yield "    <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["arrows_attributes"] ?? null), "html", null, true));
        yield "></div>";
        // line 100
        if (array_key_exists("arrow_down_attributes", $context)) {
            // line 101
            yield "<button";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["arrow_down_attributes"] ?? null), "addClass", ["splide__arrow--down"], "method", false, false, true, 101), "setAttribute", ["type", "button"], "method", false, false, true, 101), "setAttribute", ["data-target", CoreExtension::getAttribute($this->env, $this->source,             // line 103
($context["settings"] ?? null), "downTarget", [], "any", false, false, true, 103)], "method", false, false, true, 102), "setAttribute", ["data-offset", CoreExtension::getAttribute($this->env, $this->source,             // line 104
($context["settings"] ?? null), "downOffset", [], "any", false, false, true, 104)], "method", false, false, true, 103), "html", null, true));
            yield "></button>";
        }
        yield from [];
    }

    // line 107
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_splide_pagination(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 108
        yield "    <ul";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["pagination_attributes"] ?? null), "html", null, true));
        yield "></ul>
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/lamirada/templates/content/splide.html.twig";
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
        return array (  198 => 108,  191 => 107,  184 => 104,  183 => 103,  181 => 101,  179 => 100,  175 => 99,  168 => 98,  157 => 87,  150 => 86,  144 => 82,  137 => 81,  127 => 67,  124 => 66,  117 => 65,  109 => 110,  106 => 107,  104 => 98,  101 => 95,  99 => 94,  96 => 86,  94 => 85,  91 => 81,  89 => 80,  84 => 72,  82 => 71,  80 => 65,  75 => 64,  73 => 61,  72 => 60,  71 => 59,  70 => 58,  69 => 57,  68 => 56,  67 => 55,  66 => 54,  65 => 53,  64 => 52,  63 => 51,  62 => 50,  61 => 49,  60 => 48,  59 => 47,  58 => 46,  57 => 45,  56 => 44,  55 => 43,  54 => 42,  53 => 41,  52 => 40,  51 => 39,  50 => 38,  49 => 37,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/lamirada/templates/content/splide.html.twig", "/var/www/html/web/themes/lamirada/templates/content/splide.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 37, "block" => 65, "if" => 71];
        static $filters = ["clean_class" => 39, "join" => 61, "escape" => 64, "t" => 87];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'join', 'escape', 't'],
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
