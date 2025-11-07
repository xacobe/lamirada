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

/* modules/contrib/gin_lb/templates/toolbar--gin-lb.html.twig */
class __TwigTemplate_3e7eb67c55985f36e6e7acbc8164d8f0 extends Template
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
        // line 7
        try {
            $_v0 = $this->loadTemplate("@gin/navigation/toolbar--gin.html.twig", "modules/contrib/gin_lb/templates/toolbar--gin-lb.html.twig", 7);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 8
        yield "<div class=\"gin-secondary-toolbar gin-secondary-toolbar--frontend\">
  <div class=\"gin-secondary-toolbar__layout-container\">
    <div class=\"gin-breadcrumb-wrapper\">
      <div class=\"region-breadcrumb\">
        <nav class=\"gin-breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
          <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breadcrumb")));
        yield "</h2>
          <ol class=\"gin-breadcrumb__list\">
            <li class=\"gin-breadcrumb__item\">
              ";
        // line 16
        if ((($context["entity_edit_url"] ?? null) && ($context["entity_title"] ?? null))) {
            // line 17
            yield "                <a class=\"gin-breadcrumb__link gin-back-to-admin\"
                   href=\"";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["entity_edit_url"] ?? null), "html", null, true));
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Edit %title", ["%title" => ($context["entity_title"] ?? null)])));
            yield "</a>
              ";
        } else {
            // line 20
            yield "                <a class=\"gin-breadcrumb__link gin-back-to-admin\"
                   href=\"";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("system.admin_content")));
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Back to Administration")));
            yield "</a>
              ";
        }
        // line 23
        yield "            </li>
            ";
        // line 24
        if ((($context["entity_view_url"] ?? null) && ($context["entity_title"] ?? null))) {
            // line 25
            yield "              <li class=\"gin-breadcrumb__item\">
                <a class=\"gin-breadcrumb__link\"
                   href=\"";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["entity_view_url"] ?? null), "html", null, true));
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("View %title", ["%title" => ($context["entity_title"] ?? null)])));
            yield "</a>
              </li>
            ";
        }
        // line 30
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["toolbar_links"] ?? null), "html", null, true));
        yield "
          </ol>
        </nav>
      </div>
    </div>
    <div class=\"toolbar-secondary toolbar\" id=\"toolbar-administration-secondary\">
      <div class=\"toolbar-bar\">
        ";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["toolbar_tabs"] ?? null), "html", null, true));
        yield "
        <div class=\"toolbar-tab\">
          <div
            class=\"toolbar-icon trigger toolbar-item\" id=\"toolbar-item-display-options\"
            data-toolbar-tray=\"toolbar-item-shortcuts-tray\" role=\"button\">";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Display options")));
        yield "
          </div>
          <div data-toolbar-tray=\"toolbar-item-display-options\" class=\"toolbar-tray\">
            <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
              <h3 class=\"toolbar-tray-name visually-hidden\">";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Display options")));
        yield "</h3>
              <ul class=\"toolbar-menu\">
                <li>
                  ";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["preview_region"] ?? null), "html", null, true));
        yield "
                </li>
                <li>";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["preview_content"] ?? null), "html", null, true));
        yield "</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class=\"";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->ginClasses(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "addClass", ["region region-sticky"], "method", false, false, true, 57)), "html", null, true));
        yield "\">
      <div class=\"gin-sticky form-wrapper glb-region-sticky__items__inner gin-sticky form-wrapper\">
        <input data-drupal-selector=\"edit-submit\" type=\"submit\" name=\"op\"
               value=\"";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Save")));
        yield "\" class=\"glb-primary-save js-glb-primary-save glb-button glb-button--primary form-submit\">
        <a href=\"#toggle-sidebar\" class=\"meta-sidebar__trigger trigger\" role=\"button\"
           title=\"";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hide sidebar panel")));
        yield "\" aria-controls=\"gin_sidebar\" aria-expanded=\"true\"><span class=\"visually-hidden\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hide sidebar panel")));
        yield "</span></a>
      </div>
    </div>
  </div>
</div>
";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, ($context["toolbar_bottom"] ?? null), "html", null, true));
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["entity_edit_url", "entity_title", "entity_view_url", "toolbar_links", "toolbar_tabs", "preview_region", "preview_content", "toolbar_bottom"]);        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["entity_edit_url", "entity_title", "entity_view_url", "toolbar_links", "toolbar_tabs", "preview_region", "preview_content", "toolbar_bottom"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/gin_lb/templates/toolbar--gin-lb.html.twig";
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
        return array (  173 => 67,  163 => 62,  158 => 60,  152 => 57,  142 => 50,  137 => 48,  131 => 45,  124 => 41,  117 => 37,  106 => 30,  98 => 27,  94 => 25,  92 => 24,  89 => 23,  82 => 21,  79 => 20,  72 => 18,  69 => 17,  67 => 16,  61 => 13,  54 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/gin_lb/templates/toolbar--gin-lb.html.twig", "/var/www/html/web/modules/contrib/gin_lb/templates/toolbar--gin-lb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 7, "if" => 16];
        static $filters = ["t" => 13, "escape" => 18];
        static $functions = ["path" => 21, "glb_classes" => 57, "create_attribute" => 57];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['t', 'escape'],
                ['path', 'glb_classes', 'create_attribute'],
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
