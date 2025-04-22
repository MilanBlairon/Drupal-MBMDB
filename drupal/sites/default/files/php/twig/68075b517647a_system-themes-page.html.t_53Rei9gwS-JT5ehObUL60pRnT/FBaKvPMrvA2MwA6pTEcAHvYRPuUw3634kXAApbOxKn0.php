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

/* themes/contrib/stable/templates/admin/system-themes-page.html.twig */
class __TwigTemplate_f9a0e8e2e8996b56c69676b5e8f5c42b extends Template
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
        // line 32
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["theme_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 34
            yield "    ";
            // line 35
            $context["theme_group_classes"] = ["system-themes-list", ("system-themes-list-" . CoreExtension::getAttribute($this->env, $this->source,             // line 37
$context["theme_group"], "state", [], "any", false, false, true, 37)), "clearfix"];
            // line 41
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["theme_group"], "attributes", [], "any", false, false, true, 41), "addClass", [($context["theme_group_classes"] ?? null)], "method", false, false, true, 41), "html", null, true);
            yield ">
      <h2 class=\"system-themes-list__header\">";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme_group"], "title", [], "any", false, false, true, 42), "html", null, true);
            yield "</h2>
      ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["theme_group"], "themes", [], "any", false, false, true, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 44
                yield "        ";
                // line 45
                $context["theme_classes"] = [((CoreExtension::getAttribute($this->env, $this->source,                 // line 46
$context["theme"], "is_default", [], "any", false, false, true, 46)) ? ("theme-default") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                 // line 47
$context["theme"], "is_admin", [], "any", false, false, true, 47)) ? ("theme-admin") : ("")), "theme-selector", "clearfix"];
                // line 52
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "attributes", [], "any", false, false, true, 52), "addClass", [($context["theme_classes"] ?? null)], "method", false, false, true, 52), "html", null, true);
                yield ">
          ";
                // line 53
                if (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "screenshot", [], "any", false, false, true, 53)) {
                    // line 54
                    yield "            ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "screenshot", [], "any", false, false, true, 54), "html", null, true);
                    yield "
          ";
                }
                // line 56
                yield "          <div class=\"theme-info\">
            <h3 class=\"theme-info__header\">";
                // line 58
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, true, 58), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "version", [], "any", false, false, true, 58), "html", null, true);
                // line 59
                if (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "notes", [], "any", false, false, true, 59)) {
                    // line 60
                    yield "                (";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "notes", [], "any", false, false, true, 60), ", "));
                    yield ")";
                }
                // line 62
                yield "</h3>
            <div class=\"theme-info__description\">";
                // line 63
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "description", [], "any", false, false, true, 63), "html", null, true);
                yield "</div>
            ";
                // line 64
                if (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "module_dependencies", [], "any", false, false, true, 64)) {
                    // line 65
                    yield "              <div class=\"theme-info__requires\">
                ";
                    // line 66
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Requires: @module_dependencies", ["@module_dependencies" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "module_dependencies", [], "any", false, false, true, 66))]));
                    yield "
              </div>
            ";
                }
                // line 69
                yield "            ";
                // line 70
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "incompatible", [], "any", false, false, true, 70)) {
                    // line 71
                    yield "              <div class=\"incompatible\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "incompatible", [], "any", false, false, true, 71), "html", null, true);
                    yield "</div>
            ";
                } else {
                    // line 73
                    yield "              ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "operations", [], "any", false, false, true, 73), "html", null, true);
                    yield "
            ";
                }
                // line 75
                yield "          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['theme_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "theme_groups"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/stable/templates/admin/system-themes-page.html.twig";
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
        return array (  154 => 80,  147 => 78,  139 => 75,  133 => 73,  127 => 71,  124 => 70,  122 => 69,  116 => 66,  113 => 65,  111 => 64,  107 => 63,  104 => 62,  99 => 60,  97 => 59,  93 => 58,  90 => 56,  84 => 54,  82 => 53,  77 => 52,  75 => 47,  74 => 46,  73 => 45,  71 => 44,  67 => 43,  63 => 42,  58 => 41,  56 => 37,  55 => 35,  53 => 34,  49 => 33,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/stable/templates/admin/system-themes-page.html.twig", "/opt/drupal/web/themes/contrib/stable/templates/admin/system-themes-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 33, "set" => 35, "if" => 53];
        static $filters = ["escape" => 32, "safe_join" => 60, "t" => 66, "render" => 66];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'safe_join', 't', 'render'],
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
