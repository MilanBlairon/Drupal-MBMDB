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

/* themes/contrib/magazine_lite/templates/page.html.twig */
class __TwigTemplate_56df3b5d4997254b0c21cee76ca2039a extends Template
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
        // line 77
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 77)) {
            // line 78
            yield "  ";
            // line 79
            yield "  <div class=\"clearfix slideout ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slideout_background_color"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
    ";
            // line 81
            yield "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 83
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 83), "html", null, true);
            yield "
      </div>
    </div>
    ";
            // line 87
            yield "  </div>
  ";
            // line 89
            yield "
  ";
            // line 91
            yield "  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fa fa-align-justify\"></i></button>
  ";
        }
        // line 94
        yield "
";
        // line 96
        yield "<div class=\"page-container\">

  ";
        // line 98
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 98)) {
            // line 99
            yield "    ";
            // line 100
            yield "    <div class=\"clearfix pre-header ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pre_header_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pre_header_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["pre_header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["pre_header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 101
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pre_header_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 103
            yield "        <div class=\"clearfix pre-header__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix pre-header__section\">
                ";
            // line 107
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 107), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 113
            yield "      </div>
    </div>
    ";
            // line 116
            yield "  ";
        }
        // line 117
        yield "
  ";
        // line 118
        if (((((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 118) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 118)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 118)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 118)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 118)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 118)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 118))) {
            // line 119
            yield "    ";
            // line 120
            yield "    <div class=\"header-container\">

      ";
            // line 122
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 122) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 122))) {
                // line 123
                yield "        ";
                // line 124
                yield "        <div class=\"clearfix header-top-highlighted ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_highlighted_background_color"] ?? null), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                yield "\">
          <div class=\"";
                // line 125
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_highlighted_layout_container"] ?? null), "html", null, true);
                yield "\">
            ";
                // line 127
                yield "            <div class=\"clearfix header-top-highlighted__container";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                yield "\"
              ";
                // line 128
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 129
                    yield "                data-animate-effect=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_highlighted_animation_effect"] ?? null), "html", null, true);
                    yield "\"
              ";
                }
                // line 130
                yield ">
              <div class=\"row\">
                ";
                // line 132
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 132)) {
                    // line 133
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_highlighted_first_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 135
                    yield "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 136
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 136), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 139
                    yield "                  </div>
                ";
                }
                // line 141
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 141)) {
                    // line 142
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_highlighted_second_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 144
                    yield "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 145
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 145), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 148
                    yield "                  </div>
                ";
                }
                // line 150
                yield "              </div>
            </div>
            ";
                // line 153
                yield "          </div>
        </div>
        ";
                // line 156
                yield "      ";
            }
            // line 157
            yield "
      ";
            // line 158
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 158) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 158))) {
                // line 159
                yield "        ";
                // line 160
                yield "        <div class=\"clearfix header-top ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_background_color"] ?? null), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                yield "\">
          <div class=\"";
                // line 161
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_layout_container"] ?? null), "html", null, true);
                yield "\">
            ";
                // line 163
                yield "            <div class=\"clearfix header-top__container";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                yield "\"
              ";
                // line 164
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 165
                    yield "                data-animate-effect=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_animation_effect"] ?? null), "html", null, true);
                    yield "\"
              ";
                }
                // line 166
                yield ">
              <div class=\"row\">
                ";
                // line 168
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 168)) {
                    // line 169
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_first_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 171
                    yield "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 172
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 172), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 175
                    yield "                  </div>
                ";
                }
                // line 177
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 177)) {
                    // line 178
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_second_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 180
                    yield "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 181
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 181), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 184
                    yield "                  </div>
                ";
                }
                // line 186
                yield "              </div>
            </div>
            ";
                // line 189
                yield "          </div>
        </div>
        ";
                // line 192
                yield "      ";
            }
            // line 193
            yield "
      ";
            // line 194
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 194) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 194)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 194))) {
                // line 195
                yield "        ";
                // line 196
                yield "        <header role=\"banner\" class=\"clearfix header ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_background_color"] ?? null), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_layout_container_class"] ?? null), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_layout_columns_class"] ?? null), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                yield "\">

          ";
                // line 198
                if ((($context["mt_site_name"] ?? null) || ($context["mt_logo"] ?? null))) {
                    // line 199
                    yield "            <div class=\"onscroll-site-name-site-logo-container\">
              ";
                    // line 200
                    if (($context["mt_logo"] ?? null)) {
                        // line 201
                        yield "                <div class=\"onscroll-logo\">
                  <a href=\"";
                        // line 202
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                        yield "\" title=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                        yield "\" rel=\"home\"><img class=\"img-responsive\" src=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["mt_logo"] ?? null), "html", null, true);
                        yield "\" /></a>
                </div>
              ";
                    }
                    // line 205
                    yield "              ";
                    if (($context["mt_site_name"] ?? null)) {
                        // line 206
                        yield "                <div class=\"onscroll-site-name site-name\">
                  <a href=\"";
                        // line 207
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                        yield "\" title=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                        yield "\" rel=\"home\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["mt_site_name"] ?? null), "html", null, true);
                        yield "</a>
                </div>
              ";
                    }
                    // line 210
                    yield "            </div>
          ";
                }
                // line 212
                yield "
          <div class=\"";
                // line 213
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_layout_container"] ?? null), "html", null, true);
                yield "\">
            ";
                // line 215
                yield "            <div class=\"clearfix header__container\">
              <div class=\"row\">
                ";
                // line 217
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 217)) {
                    // line 218
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_third_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 220
                    yield "                    <div class=\"clearfix header__section header-third\">
                      ";
                    // line 221
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 221), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 224
                    yield "                  </div>
                ";
                }
                // line 226
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 226)) {
                    // line 227
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_first_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 229
                    yield "                    <div class=\"clearfix header__section header-first\">
                      ";
                    // line 230
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 230), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 233
                    yield "                  </div>
                ";
                }
                // line 235
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 235)) {
                    // line 236
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_second_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 238
                    yield "                    <div class=\"clearfix header__section header-second\">
                      ";
                    // line 239
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 239), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 242
                    yield "                  </div>
                ";
                }
                // line 244
                yield "              </div>
            </div>
            ";
                // line 247
                yield "          </div>
        </header>
        ";
                // line 250
                yield "      ";
            }
            // line 251
            yield "
    </div>
    ";
            // line 254
            yield "  ";
        }
        // line 255
        yield "
  ";
        // line 256
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 256)) {
            // line 257
            yield "    ";
            // line 258
            yield "    <div class=\"clearfix banner ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["banner_background_color"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 259
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["banner_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 261
            yield "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"banner__section\">
                ";
            // line 265
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 265), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 271
            yield "      </div>
    </div>
    ";
            // line 274
            yield "  ";
        }
        // line 275
        yield "
  ";
        // line 277
        yield "  <div id=\"page-start\" class=\"clearfix page-start\"></div>

  ";
        // line 279
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 279)) {
            // line 280
            yield "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 284
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 284), "html", null, true);
            yield "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 290
        yield "
  ";
        // line 291
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 291)) {
            // line 292
            yield "    ";
            // line 293
            yield "    <div class=\"clearfix highlighted-top ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_top_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_top_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 294
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_top_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 296
            yield "        <div class=\"clearfix highlighted-top__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 297
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 298
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_top_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 299
            yield ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 303
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 303), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 309
            yield "      </div>
    </div>
    ";
            // line 312
            yield "  ";
        }
        // line 313
        yield "
  ";
        // line 314
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 314)) {
            // line 315
            yield "    ";
            // line 316
            yield "    <div class=\"clearfix highlighted ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 317
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 319
            yield "        <div class=\"clearfix highlighted__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 320
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 321
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 322
            yield ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 326
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 326), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 332
            yield "      </div>
    </div>
    ";
            // line 335
            yield "  ";
        }
        // line 336
        yield "
  ";
        // line 337
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 337)) {
            // line 338
            yield "    ";
            // line 339
            yield "    <div class=\"clearfix content-top ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_background_color"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 340
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 342
            yield "        <div class=\"clearfix content-top__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 343
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 344
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 345
            yield ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top__section\">
                ";
            // line 349
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 349), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 355
            yield "      </div>
    </div>
    ";
            // line 358
            yield "  ";
        }
        // line 359
        yield "
  ";
        // line 360
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 360)) {
            // line 361
            yield "    ";
            // line 362
            yield "    <div class=\"clearfix content-top-highlighted ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_highlighted_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_highlighted_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 363
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_highlighted_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 365
            yield "        <div class=\"clearfix content-top-highlighted__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 366
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 367
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_highlighted_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 368
            yield ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 372
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 372), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 378
            yield "      </div>
    </div>
    ";
            // line 381
            yield "  ";
        }
        // line 382
        yield "
  ";
        // line 383
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pre_content_first", [], "any", false, false, true, 383) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pre_content_second", [], "any", false, false, true, 383))) {
            // line 384
            yield "    ";
            // line 385
            yield "    <div class=\"clearfix pre-content ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pre_content_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pre_content_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["pre_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["pre_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 386
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pre_content_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 388
            yield "        <div class=\"clearfix pre-content__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["pre_content_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 389
            if ((($context["pre_content_animations"] ?? null) == "enabled")) {
                // line 390
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pre_content_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 391
            yield ">
          <div class=\"row\">
            ";
            // line 393
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pre_content_first", [], "any", false, false, true, 393)) {
                // line 394
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pre_content_first_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 396
                yield "                <div class=\"clearfix pre-content__section pre-content-first\">
                  ";
                // line 397
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pre_content_first", [], "any", false, false, true, 397), "html", null, true);
                yield "
                </div>
                ";
                // line 400
                yield "              </div>
            ";
            }
            // line 402
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pre_content_second", [], "any", false, false, true, 402)) {
                // line 403
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pre_content_second_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 405
                yield "                <div class=\"clearfix pre-content__section pre-content-second\">
                  ";
                // line 406
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pre_content_second", [], "any", false, false, true, 406), "html", null, true);
                yield "
                </div>
                ";
                // line 409
                yield "              </div>
            ";
            }
            // line 411
            yield "          </div>
        </div>
        ";
            // line 414
            yield "      </div>
    </div>
    ";
            // line 417
            yield "  ";
        }
        // line 418
        yield "
  ";
        // line 420
        yield "  <div class=\"clearfix main-content region--dark-typography region--white-background  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_content_separator"] ?? null), "html", null, true);
        yield "\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"";
        // line 424
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_grid_class"] ?? null), "html", null, true);
        yield "\">
            ";
        // line 426
        yield "            <div class=\"clearfix main-content__section";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        yield "\"
              ";
        // line 427
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 428
            yield "                data-animate-effect=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_content_animation_effect"] ?? null), "html", null, true);
            yield "\"
              ";
        }
        // line 429
        yield ">
              ";
        // line 430
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 430)) {
            // line 431
            yield "                ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 431), "html", null, true);
            yield "
              ";
        }
        // line 433
        yield "            </div>
            ";
        // line 435
        yield "          </section>
          ";
        // line 436
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 436)) {
            // line 437
            yield "            <aside class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_grid_class"] ?? null), "html", null, true);
            yield "\">
              ";
            // line 439
            yield "              <section class=\"sidebar__section sidebar-first clearfix";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\"
                ";
            // line 440
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 441
                yield "                  data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_animation_effect"] ?? null), "html", null, true);
                yield "\"
                ";
            }
            // line 442
            yield ">
                ";
            // line 443
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 443), "html", null, true);
            yield "
              </section>
              ";
            // line 446
            yield "            </aside>
          ";
        }
        // line 448
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 448)) {
            // line 449
            yield "            <aside class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_grid_class"] ?? null), "html", null, true);
            yield "\">
              ";
            // line 451
            yield "              <section class=\"sidebar__section sidebar-second clearfix";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\"
                ";
            // line 452
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 453
                yield "                  data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_animation_effect"] ?? null), "html", null, true);
                yield "\"
                ";
            }
            // line 454
            yield ">
                ";
            // line 455
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 455), "html", null, true);
            yield "
              </section>
              ";
            // line 458
            yield "            </aside>
          ";
        }
        // line 460
        yield "        </div>
      </div>
    </div>
  </div>
  ";
        // line 465
        yield "
  ";
        // line 466
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 466) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 466))) {
            // line 467
            yield "    ";
            // line 468
            yield "    <div class=\"clearfix content-bottom ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 469
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 471
            yield "        <div class=\"clearfix content-bottom__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 472
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 473
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 474
            yield ">
          <div class=\"row\">
            ";
            // line 476
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 476)) {
                // line 477
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_first_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 479
                yield "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 480
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 480), "html", null, true);
                yield "
                </div>
                ";
                // line 483
                yield "              </div>
            ";
            }
            // line 485
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 485)) {
                // line 486
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_second_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 488
                yield "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 489
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 489), "html", null, true);
                yield "
                </div>
                ";
                // line 492
                yield "              </div>
            ";
            }
            // line 494
            yield "          </div>
        </div>
        ";
            // line 497
            yield "      </div>
    </div>
    ";
            // line 500
            yield "  ";
        }
        // line 501
        yield "
  ";
        // line 502
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 502)) {
            // line 503
            yield "    ";
            // line 504
            yield "    <div class=\"clearfix featured-top ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_top_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_top_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 505
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_top_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 507
            yield "        <div class=\"clearfix featured-top__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 508
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 509
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_top_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 510
            yield ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 514
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 514), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 520
            yield "      </div>
    </div>
    ";
            // line 523
            yield "  ";
        }
        // line 524
        yield "
  ";
        // line 525
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 525)) {
            // line 526
            yield "    ";
            // line 527
            yield "    <div class=\"clearfix featured ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 528
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 530
            yield "        <div class=\"clearfix featured__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 531
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 532
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 533
            yield ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 537
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 537), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 543
            yield "      </div>
    </div>
    ";
            // line 546
            yield "  ";
        }
        // line 547
        yield "
  ";
        // line 548
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 548)) {
            // line 549
            yield "    ";
            // line 550
            yield "    <div class=\"clearfix featured-bottom ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_bottom_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_bottom_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 551
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_bottom_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 553
            yield "        <div class=\"clearfix featured-bottom__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 554
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 555
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_bottom_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 556
            yield ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 560
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 560), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 566
            yield "      </div>
    </div>
    ";
            // line 569
            yield "  ";
        }
        // line 570
        yield "
  ";
        // line 571
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 571)) {
            // line 572
            yield "    ";
            // line 573
            yield "    <div class=\"clearfix sub-featured ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sub_featured_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sub_featured_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 574
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sub_featured_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 576
            yield "        <div class=\"clearfix sub-featured__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 577
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 578
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sub_featured_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 579
            yield ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 583
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 583), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 589
            yield "      </div>
    </div>
    ";
            // line 592
            yield "  ";
        }
        // line 593
        yield "
  ";
        // line 594
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 594) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 594))) {
            // line 595
            yield "    ";
            // line 596
            yield "    <div class=\"clearfix footer-top ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_regions"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 597
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 599
            yield "        <div class=\"clearfix footer-top__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 600
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 601
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 602
            yield ">
          <div class=\"row\">
            ";
            // line 604
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 604)) {
                // line 605
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_first_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 607
                yield "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 608
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 608), "html", null, true);
                yield "
                </div>
                ";
                // line 611
                yield "              </div>
            ";
            }
            // line 613
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 613)) {
                // line 614
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_second_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 616
                yield "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 617
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 617), "html", null, true);
                yield "
                </div>
                ";
                // line 620
                yield "              </div>
            ";
            }
            // line 622
            yield "          </div>
        </div>
        ";
            // line 625
            yield "      </div>
    </div>
    ";
            // line 628
            yield "  ";
        }
        // line 629
        yield "
  ";
        // line 630
        if (((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 630) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 630)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 630)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 630)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 630))) {
            // line 631
            yield "    ";
            // line 632
            yield "    <footer class=\"clearfix footer ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_separator"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["scroll_to_top_region"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      ";
            // line 633
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-to-top-enabled"))) {
                // line 634
                yield "        <div class=\"to-top\"><i class=\"fa ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["scroll_to_top_icon"] ?? null), "html", null, true);
                yield "\"></i></div>
      ";
            }
            // line 636
            yield "      <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_layout_container"] ?? null), "html", null, true);
            yield "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 639
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 639)) {
                // line 640
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_first_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 642
                yield "                <div class=\"clearfix footer__section footer-first";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                yield "\"
                  ";
                // line 643
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 644
                    yield "                    data-animate-effect=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true);
                    yield "\"
                  ";
                }
                // line 645
                yield ">
                  ";
                // line 646
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 646), "html", null, true);
                yield "
                </div>
                ";
                // line 649
                yield "              </div>
            ";
            }
            // line 651
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 651)) {
                // line 652
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_second_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 654
                yield "                <div class=\"clearfix footer__section footer-second";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                yield "\"
                  ";
                // line 655
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 656
                    yield "                    data-animate-effect=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true);
                    yield "\"
                  ";
                }
                // line 657
                yield ">
                  ";
                // line 658
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 658), "html", null, true);
                yield "
                </div>
                ";
                // line 661
                yield "              </div>
            ";
            }
            // line 663
            yield "            <div class=\"clearfix ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_4_columns_clearfix_first"] ?? null), "html", null, true);
            yield "\"></div>
            ";
            // line 664
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 664)) {
                // line 665
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_third_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 667
                yield "                <div class=\"clearfix footer__section footer-third";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                yield "\"
                  ";
                // line 668
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 669
                    yield "                    data-animate-effect=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true);
                    yield "\"
                  ";
                }
                // line 670
                yield ">
                  ";
                // line 671
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 671), "html", null, true);
                yield "
                </div>
                ";
                // line 674
                yield "              </div>
            ";
            }
            // line 676
            yield "            <div class=\"clearfix ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_4_columns_clearfix_second"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_5_columns_clearfix"] ?? null), "html", null, true);
            yield "\"></div>
            ";
            // line 677
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 677)) {
                // line 678
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_fourth_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 680
                yield "                <div class=\"clearfix footer__section footer-fourth";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                yield "\"
                  ";
                // line 681
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 682
                    yield "                    data-animate-effect=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true);
                    yield "\"
                  ";
                }
                // line 683
                yield ">
                  ";
                // line 684
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 684), "html", null, true);
                yield "
                </div>
                ";
                // line 687
                yield "              </div>
            ";
            }
            // line 689
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 689)) {
                // line 690
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_fifth_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 692
                yield "                <div class=\"clearfix footer__section footer-fifth";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                yield "\"
                  ";
                // line 693
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 694
                    yield "                    data-animate-effect=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true);
                    yield "\"
                  ";
                }
                // line 695
                yield ">
                  ";
                // line 696
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 696), "html", null, true);
                yield "
                </div>
                ";
                // line 699
                yield "              </div>
            ";
            }
            // line 701
            yield "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 706
            yield "  ";
        }
        // line 707
        yield "
  ";
        // line 708
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 708) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 708))) {
            // line 709
            yield "    ";
            // line 710
            yield "    <div class=\"clearfix footer-bottom ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_bottom_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_bottom_separator"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["scroll_to_top_region"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      ";
            // line 711
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-bottom-to-top-enabled"))) {
                // line 712
                yield "        <div class=\"to-top\"><i class=\"fa ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["scroll_to_top_icon"] ?? null), "html", null, true);
                yield "\"></i></div>
      ";
            }
            // line 714
            yield "      <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_bottom_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 716
            yield "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            ";
            // line 718
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 718)) {
                // line 719
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_bottom_first_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 721
                yield "                <div class=\"clearfix footer-bottom__section footer-bottom-first\">
                  ";
                // line 722
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 722), "html", null, true);
                yield "
                </div>
                ";
                // line 725
                yield "              </div>
            ";
            }
            // line 727
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 727)) {
                // line 728
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_bottom_second_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 730
                yield "                <div class=\"clearfix footer-bottom__section footer-bottom-first\">
                  ";
                // line 731
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 731), "html", null, true);
                yield "
                </div>
                ";
                // line 734
                yield "              </div>
            ";
            }
            // line 736
            yield "          </div>
        </div>
        ";
            // line 739
            yield "      </div>
    </div>
    ";
            // line 742
            yield "  ";
        }
        // line 743
        yield "
  ";
        // line 744
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 744) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 744))) {
            // line 745
            yield "    ";
            // line 746
            yield "    <div class=\"clearfix subfooter ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_separator"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["scroll_to_top_region"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      ";
            // line 747
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "subfooter-to-top-enabled"))) {
                // line 748
                yield "        <div class=\"to-top\"><i class=\"fa ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["scroll_to_top_icon"] ?? null), "html", null, true);
                yield "\"></i></div>
      ";
            }
            // line 750
            yield "      <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 752
            yield "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 754
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 754)) {
                // line 755
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_first_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 757
                yield "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 758
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 758), "html", null, true);
                yield "
                </div>
                ";
                // line 761
                yield "              </div>
            ";
            }
            // line 763
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 763)) {
                // line 764
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_second_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 766
                yield "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 767
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 767), "html", null, true);
                yield "
                </div>
                ";
                // line 770
                yield "              </div>
            ";
            }
            // line 772
            yield "          </div>
        </div>
        ";
            // line 775
            yield "      </div>
    </div>
    ";
            // line 778
            yield "  ";
        }
        // line 779
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "slideout_background_color", "slideout_blocks_paddings", "slideout_region_paddings", "pre_header_background_color", "pre_header_separator", "pre_header_blocks_paddings", "pre_header_region_paddings", "pre_header_layout_container", "header_top_highlighted_background_color", "header_top_highlighted_blocks_paddings", "header_top_highlighted_region_paddings", "header_top_highlighted_layout_container", "header_top_highlighted_animations", "header_top_highlighted_animation_effect", "header_top_highlighted_first_grid_class", "header_top_highlighted_second_grid_class", "header_top_background_color", "header_top_blocks_paddings", "header_top_region_paddings", "header_top_layout_container", "header_top_animations", "header_top_animation_effect", "header_top_first_grid_class", "header_top_second_grid_class", "header_background_color", "header_layout_container_class", "header_layout_columns_class", "header_blocks_paddings", "header_region_paddings", "mt_site_name", "mt_logo", "header_layout_container", "header_third_grid_class", "header_first_grid_class", "header_second_grid_class", "banner_background_color", "banner_blocks_paddings", "banner_region_paddings", "banner_layout_container", "highlighted_top_background_color", "highlighted_top_separator", "highlighted_top_blocks_paddings", "highlighted_top_region_paddings", "highlighted_top_layout_container", "highlighted_top_animations", "highlighted_top_animation_effect", "highlighted_background_color", "highlighted_separator", "highlighted_blocks_paddings", "highlighted_region_paddings", "highlighted_layout_container", "highlighted_animations", "highlighted_animation_effect", "content_top_background_color", "content_top_blocks_paddings", "content_top_region_paddings", "content_top_layout_container", "content_top_animations", "content_top_animation_effect", "content_top_highlighted_background_color", "content_top_highlighted_separator", "content_top_highlighted_blocks_paddings", "content_top_highlighted_region_paddings", "content_top_highlighted_layout_container", "content_top_highlighted_animations", "content_top_highlighted_animation_effect", "pre_content_background_color", "pre_content_separator", "pre_content_blocks_paddings", "pre_content_region_paddings", "pre_content_layout_container", "pre_content_animations", "pre_content_animation_effect", "pre_content_first_grid_class", "pre_content_second_grid_class", "main_content_separator", "main_grid_class", "main_content_animations", "main_content_blocks_paddings", "main_content_region_paddings", "main_content_animation_effect", "sidebar_first_grid_class", "sidebar_first_animations", "sidebar_first_blocks_paddings", "sidebar_first_region_paddings", "sidebar_first_animation_effect", "sidebar_second_grid_class", "sidebar_second_animations", "sidebar_second_blocks_paddings", "sidebar_second_region_paddings", "sidebar_second_animation_effect", "content_bottom_background_color", "content_bottom_separator", "content_bottom_blocks_paddings", "content_bottom_region_paddings", "content_bottom_layout_container", "content_bottom_animations", "content_bottom_animation_effect", "content_bottom_first_grid_class", "content_bottom_second_grid_class", "featured_top_background_color", "featured_top_separator", "featured_top_blocks_paddings", "featured_top_region_paddings", "featured_top_layout_container", "featured_top_animations", "featured_top_animation_effect", "featured_background_color", "featured_separator", "featured_blocks_paddings", "featured_region_paddings", "featured_layout_container", "featured_animations", "featured_animation_effect", "featured_bottom_background_color", "featured_bottom_separator", "featured_bottom_blocks_paddings", "featured_bottom_region_paddings", "featured_bottom_layout_container", "featured_bottom_animations", "featured_bottom_animation_effect", "sub_featured_background_color", "sub_featured_separator", "sub_featured_blocks_paddings", "sub_featured_region_paddings", "sub_featured_layout_container", "sub_featured_animations", "sub_featured_animation_effect", "footer_top_regions", "footer_top_background_color", "footer_top_separator", "footer_top_blocks_paddings", "footer_top_region_paddings", "footer_top_layout_container", "footer_top_animations", "footer_top_animation_effect", "footer_top_first_grid_class", "footer_top_second_grid_class", "footer_background_color", "footer_separator", "scroll_to_top_region", "footer_blocks_paddings", "footer_region_paddings", "scroll_to_top_display", "scroll_to_top_icon", "footer_layout_container", "footer_first_grid_class", "footer_animations", "footer_animation_effect", "footer_second_grid_class", "footer_4_columns_clearfix_first", "footer_third_grid_class", "footer_4_columns_clearfix_second", "footer_5_columns_clearfix", "footer_fourth_grid_class", "footer_fifth_grid_class", "footer_bottom_background_color", "footer_bottom_separator", "footer_bottom_blocks_paddings", "footer_bottom_region_paddings", "footer_bottom_layout_container", "footer_bottom_first_grid_class", "footer_bottom_second_grid_class", "subfooter_background_color", "subfooter_separator", "subfooter_bottom_blocks_paddings", "subfooter_bottom_region_paddings", "subfooter_layout_container", "subfooter_first_grid_class", "subfooter_second_grid_class"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/magazine_lite/templates/page.html.twig";
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
        return array (  1709 => 779,  1706 => 778,  1702 => 775,  1698 => 772,  1694 => 770,  1689 => 767,  1686 => 766,  1681 => 764,  1678 => 763,  1674 => 761,  1669 => 758,  1666 => 757,  1661 => 755,  1659 => 754,  1655 => 752,  1650 => 750,  1644 => 748,  1642 => 747,  1631 => 746,  1629 => 745,  1627 => 744,  1624 => 743,  1621 => 742,  1617 => 739,  1613 => 736,  1609 => 734,  1604 => 731,  1601 => 730,  1596 => 728,  1593 => 727,  1589 => 725,  1584 => 722,  1581 => 721,  1576 => 719,  1574 => 718,  1570 => 716,  1565 => 714,  1559 => 712,  1557 => 711,  1546 => 710,  1544 => 709,  1542 => 708,  1539 => 707,  1536 => 706,  1530 => 701,  1526 => 699,  1521 => 696,  1518 => 695,  1512 => 694,  1510 => 693,  1505 => 692,  1500 => 690,  1497 => 689,  1493 => 687,  1488 => 684,  1485 => 683,  1479 => 682,  1477 => 681,  1472 => 680,  1467 => 678,  1465 => 677,  1458 => 676,  1454 => 674,  1449 => 671,  1446 => 670,  1440 => 669,  1438 => 668,  1433 => 667,  1428 => 665,  1426 => 664,  1421 => 663,  1417 => 661,  1412 => 658,  1409 => 657,  1403 => 656,  1401 => 655,  1396 => 654,  1391 => 652,  1388 => 651,  1384 => 649,  1379 => 646,  1376 => 645,  1370 => 644,  1368 => 643,  1363 => 642,  1358 => 640,  1356 => 639,  1349 => 636,  1343 => 634,  1341 => 633,  1330 => 632,  1328 => 631,  1326 => 630,  1323 => 629,  1320 => 628,  1316 => 625,  1312 => 622,  1308 => 620,  1303 => 617,  1300 => 616,  1295 => 614,  1292 => 613,  1288 => 611,  1283 => 608,  1280 => 607,  1275 => 605,  1273 => 604,  1269 => 602,  1263 => 601,  1261 => 600,  1256 => 599,  1252 => 597,  1241 => 596,  1239 => 595,  1237 => 594,  1234 => 593,  1231 => 592,  1227 => 589,  1219 => 583,  1213 => 579,  1207 => 578,  1205 => 577,  1200 => 576,  1196 => 574,  1187 => 573,  1185 => 572,  1183 => 571,  1180 => 570,  1177 => 569,  1173 => 566,  1165 => 560,  1159 => 556,  1153 => 555,  1151 => 554,  1146 => 553,  1142 => 551,  1133 => 550,  1131 => 549,  1129 => 548,  1126 => 547,  1123 => 546,  1119 => 543,  1111 => 537,  1105 => 533,  1099 => 532,  1097 => 531,  1092 => 530,  1088 => 528,  1079 => 527,  1077 => 526,  1075 => 525,  1072 => 524,  1069 => 523,  1065 => 520,  1057 => 514,  1051 => 510,  1045 => 509,  1043 => 508,  1038 => 507,  1034 => 505,  1025 => 504,  1023 => 503,  1021 => 502,  1018 => 501,  1015 => 500,  1011 => 497,  1007 => 494,  1003 => 492,  998 => 489,  995 => 488,  990 => 486,  987 => 485,  983 => 483,  978 => 480,  975 => 479,  970 => 477,  968 => 476,  964 => 474,  958 => 473,  956 => 472,  951 => 471,  947 => 469,  938 => 468,  936 => 467,  934 => 466,  931 => 465,  925 => 460,  921 => 458,  916 => 455,  913 => 454,  907 => 453,  905 => 452,  898 => 451,  893 => 449,  890 => 448,  886 => 446,  881 => 443,  878 => 442,  872 => 441,  870 => 440,  863 => 439,  858 => 437,  856 => 436,  853 => 435,  850 => 433,  844 => 431,  842 => 430,  839 => 429,  833 => 428,  831 => 427,  824 => 426,  820 => 424,  812 => 420,  809 => 418,  806 => 417,  802 => 414,  798 => 411,  794 => 409,  789 => 406,  786 => 405,  781 => 403,  778 => 402,  774 => 400,  769 => 397,  766 => 396,  761 => 394,  759 => 393,  755 => 391,  749 => 390,  747 => 389,  742 => 388,  738 => 386,  729 => 385,  727 => 384,  725 => 383,  722 => 382,  719 => 381,  715 => 378,  707 => 372,  701 => 368,  695 => 367,  693 => 366,  688 => 365,  684 => 363,  675 => 362,  673 => 361,  671 => 360,  668 => 359,  665 => 358,  661 => 355,  653 => 349,  647 => 345,  641 => 344,  639 => 343,  634 => 342,  630 => 340,  623 => 339,  621 => 338,  619 => 337,  616 => 336,  613 => 335,  609 => 332,  601 => 326,  595 => 322,  589 => 321,  587 => 320,  582 => 319,  578 => 317,  569 => 316,  567 => 315,  565 => 314,  562 => 313,  559 => 312,  555 => 309,  547 => 303,  541 => 299,  535 => 298,  533 => 297,  528 => 296,  524 => 294,  515 => 293,  513 => 292,  511 => 291,  508 => 290,  499 => 284,  493 => 280,  491 => 279,  487 => 277,  484 => 275,  481 => 274,  477 => 271,  469 => 265,  463 => 261,  459 => 259,  452 => 258,  450 => 257,  448 => 256,  445 => 255,  442 => 254,  438 => 251,  435 => 250,  431 => 247,  427 => 244,  423 => 242,  418 => 239,  415 => 238,  410 => 236,  407 => 235,  403 => 233,  398 => 230,  395 => 229,  390 => 227,  387 => 226,  383 => 224,  378 => 221,  375 => 220,  370 => 218,  368 => 217,  364 => 215,  360 => 213,  357 => 212,  353 => 210,  343 => 207,  340 => 206,  337 => 205,  327 => 202,  324 => 201,  322 => 200,  319 => 199,  317 => 198,  305 => 196,  303 => 195,  301 => 194,  298 => 193,  295 => 192,  291 => 189,  287 => 186,  283 => 184,  278 => 181,  275 => 180,  270 => 178,  267 => 177,  263 => 175,  258 => 172,  255 => 171,  250 => 169,  248 => 168,  244 => 166,  238 => 165,  236 => 164,  231 => 163,  227 => 161,  220 => 160,  218 => 159,  216 => 158,  213 => 157,  210 => 156,  206 => 153,  202 => 150,  198 => 148,  193 => 145,  190 => 144,  185 => 142,  182 => 141,  178 => 139,  173 => 136,  170 => 135,  165 => 133,  163 => 132,  159 => 130,  153 => 129,  151 => 128,  146 => 127,  142 => 125,  135 => 124,  133 => 123,  131 => 122,  127 => 120,  125 => 119,  123 => 118,  120 => 117,  117 => 116,  113 => 113,  105 => 107,  99 => 103,  95 => 101,  86 => 100,  84 => 99,  82 => 98,  78 => 96,  75 => 94,  71 => 91,  68 => 89,  65 => 87,  59 => 83,  55 => 81,  48 => 79,  46 => 78,  44 => 77,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/magazine_lite/templates/page.html.twig", "/opt/drupal/web/themes/contrib/magazine_lite/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 77];
        static $filters = ["escape" => 79, "t" => 202];
        static $functions = ["path" => 202];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
