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

/* themes/lamirada/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_8ef8fbbdf0ea13a74a8b9e3dfc2ed018 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["container-lg"], "method", false, false, true, 17);
        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/lamirada/templates/block/block--system-branding-block.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "site_name", "site_slogan"]);    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "  ";
        if (($context["site_logo"] ?? null)) {
            // line 22
            yield "    <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" rel=\"home\" class=\"site-logo\">
      <img src=\"";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" fetchpriority=\"high\" />
    </a>
  ";
        }
        // line 26
        yield "  ";
        if (($context["site_name"] ?? null)) {
            // line 27
            yield "    <div class=\"site-name\">
      <a href=\"";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" rel=\"home\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
            yield "</a>
    </div>
  ";
        }
        // line 31
        yield "  ";
        if (($context["site_slogan"] ?? null)) {
            // line 32
            yield "    <div class=\"site-slogan\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true);
            yield "</div>
  ";
        }
        // line 34
        yield "  <div class=\"burger-container\">
    <div id=\"burger\">
      <div class=\"bar topBar\"></div>
      <div class=\"bar btmBar\"></div>
    </div>
  </div>
  <ul class=\"menu-mobile\">
      <li class=\"menu-item\"><a href=\"/servicios\">Servicios</a></li>
      <li class=\"menu-item\"><a href=\"/contacto\">Contacto</a></li>
      <li class=\"menu-item\"><a href=\"/video/videoclips\">Vídeos</a></li>
      <li class=\"menu-item\"><a href=\"/fotografia/reportajes\">Fotografía</a></li>
      ";
        // line 59
        yield "    </ul>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/lamirada/templates/block/block--system-branding-block.html.twig";
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
        return array (  116 => 59,  103 => 34,  97 => 32,  94 => 31,  86 => 28,  83 => 27,  80 => 26,  72 => 23,  67 => 22,  64 => 21,  57 => 20,  51 => 1,  49 => 17,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/lamirada/templates/block/block--system-branding-block.html.twig", "/var/www/html/web/themes/lamirada/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1, "set" => 17, "if" => 21];
        static $filters = ["escape" => 23, "t" => 23];
        static $functions = ["path" => 22];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'set', 'if'],
                ['escape', 't'],
                ['path'],
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
