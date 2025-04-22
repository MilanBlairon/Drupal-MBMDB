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

/* themes/contrib/showcase_lite/templates/page.html.twig */
class __TwigTemplate_446b3139ae63005a6cbfc7806edd6098 extends Template
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
        // line 75
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 75)) {
            // line 76
            yield "  ";
            // line 77
            yield "  <div class=\"clearfix slideout ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slideout_background_color"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
    ";
            // line 79
            yield "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 81), "html", null, true);
            yield "
      </div>
    </div>
    ";
            // line 85
            yield "  </div>
  ";
            // line 87
            yield "
  ";
            // line 89
            yield "  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fa fa-align-justify\"></i></button>
  ";
        }
        // line 92
        yield "
";
        // line 94
        yield "<div class=\"page-container\">

  ";
        // line 96
        if (((((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 96) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 96)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 96)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 96)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 96)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 96)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 96))) {
            // line 97
            yield "    ";
            // line 98
            yield "    <div class=\"header-container\">

      ";
            // line 100
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 100) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 100))) {
                // line 101
                yield "        ";
                // line 102
                yield "        <div class=\"clearfix header-top-highlighted ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_highlighted_background_color"] ?? null), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                yield "\">
          <div class=\"";
                // line 103
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_highlighted_layout_container"] ?? null), "html", null, true);
                yield "\">
            ";
                // line 105
                yield "            <div class=\"clearfix header-top-highlighted__container";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                yield "\"
              ";
                // line 106
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 107
                    yield "                data-animate-effect=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_highlighted_animation_effect"] ?? null), "html", null, true);
                    yield "\"
              ";
                }
                // line 108
                yield ">
              <div class=\"row\">
                ";
                // line 110
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 110)) {
                    // line 111
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_highlighted_first_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 113
                    yield "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 114
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 114), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 117
                    yield "                  </div>
                ";
                }
                // line 119
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 119)) {
                    // line 120
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_highlighted_second_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 122
                    yield "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 123
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 123), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 126
                    yield "                  </div>
                ";
                }
                // line 128
                yield "              </div>
            </div>
            ";
                // line 131
                yield "          </div>
        </div>
        ";
                // line 134
                yield "      ";
            }
            // line 135
            yield "
      ";
            // line 136
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 136) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 136))) {
                // line 137
                yield "        ";
                // line 138
                yield "        <div class=\"clearfix header-top ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_background_color"] ?? null), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                yield "\">
          <div class=\"";
                // line 139
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_layout_container"] ?? null), "html", null, true);
                yield "\">
            ";
                // line 141
                yield "            <div class=\"clearfix header-top__container";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                yield "\"
              ";
                // line 142
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 143
                    yield "                data-animate-effect=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_animation_effect"] ?? null), "html", null, true);
                    yield "\"
              ";
                }
                // line 144
                yield ">
              <div class=\"row\">
                ";
                // line 146
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 146)) {
                    // line 147
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_first_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 149
                    yield "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 150
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 150), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 153
                    yield "                  </div>
                ";
                }
                // line 155
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 155)) {
                    // line 156
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_second_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 158
                    yield "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 159
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 159), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 162
                    yield "                  </div>
                ";
                }
                // line 164
                yield "              </div>
            </div>
            ";
                // line 167
                yield "          </div>
        </div>
        ";
                // line 170
                yield "      ";
            }
            // line 171
            yield "
      ";
            // line 172
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 172) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 172)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 172))) {
                // line 173
                yield "        ";
                // line 174
                yield "        <header role=\"banner\" class=\"clearfix header ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_background_color"] ?? null), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_layout_container_class"] ?? null), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_layout_columns_class"] ?? null), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                yield "\">
          <div class=\"";
                // line 175
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_layout_container"] ?? null), "html", null, true);
                yield "\">
            ";
                // line 177
                yield "            <div class=\"clearfix header__container\">
              <div class=\"row\">
                ";
                // line 179
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 179)) {
                    // line 180
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_third_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 182
                    yield "                    <div class=\"clearfix header__section header-third\">
                      ";
                    // line 183
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 183), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 186
                    yield "                  </div>
                ";
                }
                // line 188
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 188)) {
                    // line 189
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_first_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 191
                    yield "                    <div class=\"clearfix header__section header-first\">
                      ";
                    // line 192
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 192), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 195
                    yield "                  </div>
                ";
                }
                // line 197
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 197)) {
                    // line 198
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_second_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 200
                    yield "                    <div class=\"clearfix header__section header-second\">
                      ";
                    // line 201
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 201), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 204
                    yield "                  </div>
                ";
                }
                // line 206
                yield "              </div>
            </div>
            ";
                // line 209
                yield "          </div>
          ";
                // line 210
                if ((($context["post_progress_status"] ?? null) == "enabled")) {
                    // line 211
                    yield "            ";
                    // line 212
                    yield "            <div class=\"post-progress\">
              <div class=\"post-progress__bar\"></div>
            </div>
            ";
                    // line 216
                    yield "          ";
                }
                // line 217
                yield "        </header>
        ";
                // line 219
                yield "      ";
            }
            // line 220
            yield "
    </div>
    ";
            // line 223
            yield "  ";
        }
        // line 224
        yield "
  ";
        // line 225
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 225)) {
            // line 226
            yield "    ";
            // line 227
            yield "    <div class=\"clearfix banner ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["banner_background_color"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 228
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["banner_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 230
            yield "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"banner__section\">
                ";
            // line 234
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 234), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 240
            yield "      </div>
    </div>
    ";
            // line 243
            yield "  ";
        }
        // line 244
        yield "
  ";
        // line 246
        yield "  <div id=\"page-start\" class=\"clearfix page-start\"></div>

  ";
        // line 248
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 248)) {
            // line 249
            yield "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 253
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 253), "html", null, true);
            yield "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 259
        yield "
  ";
        // line 260
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 260)) {
            // line 261
            yield "    ";
            // line 262
            yield "    <div class=\"clearfix content-top ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_background_color"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 263
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 265
            yield "        <div class=\"clearfix content-top__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 266
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 267
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 268
            yield ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top__section\">
                ";
            // line 272
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 272), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 278
            yield "      </div>
    </div>
    ";
            // line 281
            yield "  ";
        }
        // line 282
        yield "
  ";
        // line 283
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 283)) {
            // line 284
            yield "    ";
            // line 285
            yield "    <div class=\"clearfix content-top-highlighted ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_highlighted_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_highlighted_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 286
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_highlighted_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 288
            yield "        <div class=\"clearfix content-top-highlighted__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 289
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 290
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_highlighted_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 291
            yield ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 295
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 295), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 301
            yield "      </div>
    </div>
    ";
            // line 304
            yield "  ";
        }
        // line 305
        yield "
  ";
        // line 306
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media_background_first", [], "any", false, false, true, 306) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media_background_second", [], "any", false, false, true, 306))) {
            // line 307
            yield "    ";
            // line 308
            yield "    <div class=\"clearfix media-background ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["media_background_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["media_background_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["media_background_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["media_background_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      ";
            // line 310
            yield "      <div class=\"media-background-transparent-bg\"></div>
      ";
            // line 312
            yield "      <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["media_background_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 314
            yield "        <div class=\"clearfix media-background__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["media_background_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 315
            if ((($context["media_background_animations"] ?? null) == "enabled")) {
                // line 316
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["media_background_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 317
            yield ">
          <div class=\"row\">
            ";
            // line 319
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media_background_first", [], "any", false, false, true, 319)) {
                // line 320
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["media_background_first_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 322
                yield "                <div class=\"clearfix media-background__section media-background-first\">
                  ";
                // line 323
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media_background_first", [], "any", false, false, true, 323), "html", null, true);
                yield "
                </div>
                ";
                // line 326
                yield "              </div>
            ";
            }
            // line 328
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media_background_second", [], "any", false, false, true, 328)) {
                // line 329
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["media_background_second_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 331
                yield "                <div class=\"clearfix media-background__section media-background-second\">
                  ";
                // line 332
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media_background_second", [], "any", false, false, true, 332), "html", null, true);
                yield "
                </div>
                ";
                // line 335
                yield "              </div>
            ";
            }
            // line 337
            yield "          </div>
        </div>
        ";
            // line 340
            yield "      </div>
    </div>
    ";
            // line 343
            yield "  ";
        }
        // line 344
        yield "
  ";
        // line 346
        yield "  <div class=\"clearfix main-content region--dark-typography region--white-background  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_content_separator"] ?? null), "html", null, true);
        yield "\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"";
        // line 350
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_grid_class"] ?? null), "html", null, true);
        yield "\">
            ";
        // line 352
        yield "            <div class=\"clearfix main-content__section";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        yield "\"
              ";
        // line 353
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 354
            yield "                data-animate-effect=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_content_animation_effect"] ?? null), "html", null, true);
            yield "\"
              ";
        }
        // line 355
        yield ">
              ";
        // line 356
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 356)) {
            // line 357
            yield "                ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 357), "html", null, true);
            yield "
              ";
        }
        // line 359
        yield "            </div>
            ";
        // line 361
        yield "          </section>
          ";
        // line 362
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 362)) {
            // line 363
            yield "            <aside class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_grid_class"] ?? null), "html", null, true);
            yield "\">
              ";
            // line 365
            yield "              <section class=\"sidebar__section sidebar-first clearfix";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\"
                ";
            // line 366
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 367
                yield "                  data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_animation_effect"] ?? null), "html", null, true);
                yield "\"
                ";
            }
            // line 368
            yield ">
                ";
            // line 369
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 369), "html", null, true);
            yield "
              </section>
              ";
            // line 372
            yield "            </aside>
          ";
        }
        // line 374
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 374)) {
            // line 375
            yield "            <aside class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_grid_class"] ?? null), "html", null, true);
            yield "\">
              ";
            // line 377
            yield "              <section class=\"sidebar__section sidebar-second clearfix";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\"
                ";
            // line 378
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 379
                yield "                  data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_animation_effect"] ?? null), "html", null, true);
                yield "\"
                ";
            }
            // line 380
            yield ">
                ";
            // line 381
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 381), "html", null, true);
            yield "
              </section>
              ";
            // line 384
            yield "            </aside>
          ";
        }
        // line 386
        yield "        </div>
      </div>
    </div>
  </div>
  ";
        // line 391
        yield "
  ";
        // line 392
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 392) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 392))) {
            // line 393
            yield "    ";
            // line 394
            yield "    <div class=\"clearfix content-bottom ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 395
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 397
            yield "        <div class=\"clearfix content-bottom__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 398
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 399
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 400
            yield ">
          <div class=\"row\">
            ";
            // line 402
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 402)) {
                // line 403
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_first_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 405
                yield "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 406
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 406), "html", null, true);
                yield "
                </div>
                ";
                // line 409
                yield "              </div>
            ";
            }
            // line 411
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 411)) {
                // line 412
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_second_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 414
                yield "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 415
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 415), "html", null, true);
                yield "
                </div>
                ";
                // line 418
                yield "              </div>
            ";
            }
            // line 420
            yield "          </div>
        </div>
        ";
            // line 423
            yield "      </div>
    </div>
    ";
            // line 426
            yield "  ";
        }
        // line 427
        yield "
  ";
        // line 428
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 428)) {
            // line 429
            yield "    ";
            // line 430
            yield "    <div class=\"clearfix featured-top ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_top_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_top_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 431
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_top_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 433
            yield "        <div class=\"clearfix featured-top__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 434
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 435
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_top_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 436
            yield ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 440
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 440), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 446
            yield "      </div>
    </div>
    ";
            // line 449
            yield "  ";
        }
        // line 450
        yield "
  ";
        // line 451
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 451)) {
            // line 452
            yield "    ";
            // line 453
            yield "    <div class=\"clearfix featured ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 454
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 456
            yield "        <div class=\"clearfix featured__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 457
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 458
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 459
            yield ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 463
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 463), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 469
            yield "      </div>
    </div>
    ";
            // line 472
            yield "  ";
        }
        // line 473
        yield "
  ";
        // line 474
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 474)) {
            // line 475
            yield "    ";
            // line 476
            yield "    <div class=\"clearfix featured-bottom ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_bottom_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_bottom_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 477
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_bottom_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 479
            yield "        <div class=\"clearfix featured-bottom__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 480
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 481
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_bottom_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 482
            yield ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 486
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 486), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 492
            yield "      </div>
    </div>
    ";
            // line 495
            yield "  ";
        }
        // line 496
        yield "
  ";
        // line 497
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 497)) {
            // line 498
            yield "    ";
            // line 499
            yield "    <div class=\"clearfix sub-featured ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sub_featured_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sub_featured_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 500
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sub_featured_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 502
            yield "        <div class=\"clearfix sub-featured__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 503
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 504
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sub_featured_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 505
            yield ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 509
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 509), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 515
            yield "      </div>
    </div>
    ";
            // line 518
            yield "  ";
        }
        // line 519
        yield "
  ";
        // line 520
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 520)) {
            // line 521
            yield "    ";
            // line 522
            yield "    <div class=\"clearfix highlighted-top ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_top_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_top_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 523
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_top_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 525
            yield "        <div class=\"clearfix highlighted-top__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 526
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 527
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_top_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 528
            yield ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 532
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 532), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 538
            yield "      </div>
    </div>
    ";
            // line 541
            yield "  ";
        }
        // line 542
        yield "
  ";
        // line 543
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 543)) {
            // line 544
            yield "    ";
            // line 545
            yield "    <div class=\"clearfix highlighted ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 546
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 548
            yield "        <div class=\"clearfix highlighted__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 549
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 550
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 551
            yield ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 555
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 555), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 561
            yield "      </div>
    </div>
    ";
            // line 564
            yield "  ";
        }
        // line 565
        yield "
  ";
        // line 566
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 566) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 566))) {
            // line 567
            yield "    ";
            // line 568
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
            // line 569
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 571
            yield "        <div class=\"clearfix footer-top__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            yield "\"
          ";
            // line 572
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 573
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 574
            yield ">
          <div class=\"row\">
            ";
            // line 576
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 576)) {
                // line 577
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_first_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 579
                yield "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 580
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 580), "html", null, true);
                yield "
                </div>
                ";
                // line 583
                yield "              </div>
            ";
            }
            // line 585
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 585)) {
                // line 586
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_second_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 588
                yield "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 589
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 589), "html", null, true);
                yield "
                </div>
                ";
                // line 592
                yield "              </div>
            ";
            }
            // line 594
            yield "          </div>
        </div>
        ";
            // line 597
            yield "      </div>
    </div>
    ";
            // line 600
            yield "  ";
        }
        // line 601
        yield "
  ";
        // line 602
        if (((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 602) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 602)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 602)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 602)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 602))) {
            // line 603
            yield "    ";
            // line 604
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
            // line 605
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-to-top-enabled"))) {
                // line 606
                yield "        <div class=\"to-top\"><i class=\"fa ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["scroll_to_top_icon"] ?? null), "html", null, true);
                yield "\"></i></div>
      ";
            }
            // line 608
            yield "      <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_layout_container"] ?? null), "html", null, true);
            yield "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 611
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 611)) {
                // line 612
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_first_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 614
                yield "                <div class=\"clearfix footer__section footer-first";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                yield "\"
                  ";
                // line 615
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 616
                    yield "                    data-animate-effect=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true);
                    yield "\"
                  ";
                }
                // line 617
                yield ">
                  ";
                // line 618
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 618), "html", null, true);
                yield "
                </div>
                ";
                // line 621
                yield "              </div>
            ";
            }
            // line 623
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 623)) {
                // line 624
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_second_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 626
                yield "                <div class=\"clearfix footer__section footer-second";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                yield "\"
                  ";
                // line 627
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 628
                    yield "                    data-animate-effect=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true);
                    yield "\"
                  ";
                }
                // line 629
                yield ">
                  ";
                // line 630
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 630), "html", null, true);
                yield "
                </div>
                ";
                // line 633
                yield "              </div>
            ";
            }
            // line 635
            yield "            <div class=\"clearfix ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_4_columns_clearfix_first"] ?? null), "html", null, true);
            yield "\"></div>
            ";
            // line 636
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 636)) {
                // line 637
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_third_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 639
                yield "                <div class=\"clearfix footer__section footer-third";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                yield "\"
                  ";
                // line 640
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 641
                    yield "                    data-animate-effect=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true);
                    yield "\"
                  ";
                }
                // line 642
                yield ">
                  ";
                // line 643
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 643), "html", null, true);
                yield "
                </div>
                ";
                // line 646
                yield "              </div>
            ";
            }
            // line 648
            yield "            <div class=\"clearfix ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_4_columns_clearfix_second"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_5_columns_clearfix"] ?? null), "html", null, true);
            yield "\"></div>
            ";
            // line 649
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 649)) {
                // line 650
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_fourth_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 652
                yield "                <div class=\"clearfix footer__section footer-fourth";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                yield "\"
                  ";
                // line 653
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 654
                    yield "                    data-animate-effect=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true);
                    yield "\"
                  ";
                }
                // line 655
                yield ">
                  ";
                // line 656
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 656), "html", null, true);
                yield "
                </div>
                ";
                // line 659
                yield "              </div>
            ";
            }
            // line 661
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 661)) {
                // line 662
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_fifth_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 664
                yield "                <div class=\"clearfix footer__section footer-fifth";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                yield "\"
                  ";
                // line 665
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 666
                    yield "                    data-animate-effect=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true);
                    yield "\"
                  ";
                }
                // line 667
                yield ">
                  ";
                // line 668
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 668), "html", null, true);
                yield "
                </div>
                ";
                // line 671
                yield "              </div>
            ";
            }
            // line 673
            yield "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 678
            yield "  ";
        }
        // line 679
        yield "
  ";
        // line 680
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 680)) {
            // line 681
            yield "    ";
            // line 682
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
            // line 683
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-bottom-to-top-enabled"))) {
                // line 684
                yield "        <div class=\"to-top\"><i class=\"fa ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["scroll_to_top_icon"] ?? null), "html", null, true);
                yield "\"></i></div>
      ";
            }
            // line 686
            yield "      <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_bottom_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 688
            yield "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix footer-bottom__section\">
                ";
            // line 692
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 692), "html", null, true);
            yield "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 698
            yield "      </div>
    </div>
    ";
            // line 701
            yield "  ";
        }
        // line 702
        yield "
  ";
        // line 703
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 703) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 703))) {
            // line 704
            yield "    ";
            // line 705
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
            // line 706
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "subfooter-to-top-enabled"))) {
                // line 707
                yield "        <div class=\"to-top\"><i class=\"fa ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["scroll_to_top_icon"] ?? null), "html", null, true);
                yield "\"></i></div>
      ";
            }
            // line 709
            yield "      <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 711
            yield "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 713
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 713)) {
                // line 714
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_first_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 716
                yield "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 717
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 717), "html", null, true);
                yield "
                </div>
                ";
                // line 720
                yield "              </div>
            ";
            }
            // line 722
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 722)) {
                // line 723
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_second_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 725
                yield "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 726
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 726), "html", null, true);
                yield "
                </div>
                ";
                // line 729
                yield "              </div>
            ";
            }
            // line 731
            yield "          </div>
        </div>
        ";
            // line 734
            yield "      </div>
    </div>
    ";
            // line 737
            yield "  ";
        }
        // line 738
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "slideout_background_color", "slideout_blocks_paddings", "slideout_region_paddings", "header_top_highlighted_background_color", "header_top_highlighted_blocks_paddings", "header_top_highlighted_region_paddings", "header_top_highlighted_layout_container", "header_top_highlighted_animations", "header_top_highlighted_animation_effect", "header_top_highlighted_first_grid_class", "header_top_highlighted_second_grid_class", "header_top_background_color", "header_top_blocks_paddings", "header_top_region_paddings", "header_top_layout_container", "header_top_animations", "header_top_animation_effect", "header_top_first_grid_class", "header_top_second_grid_class", "header_background_color", "header_layout_container_class", "header_layout_columns_class", "header_blocks_paddings", "header_region_paddings", "header_layout_container", "header_third_grid_class", "header_first_grid_class", "header_second_grid_class", "post_progress_status", "banner_background_color", "banner_blocks_paddings", "banner_region_paddings", "banner_layout_container", "content_top_background_color", "content_top_blocks_paddings", "content_top_region_paddings", "content_top_layout_container", "content_top_animations", "content_top_animation_effect", "content_top_highlighted_background_color", "content_top_highlighted_separator", "content_top_highlighted_blocks_paddings", "content_top_highlighted_region_paddings", "content_top_highlighted_layout_container", "content_top_highlighted_animations", "content_top_highlighted_animation_effect", "media_background_background_color", "media_background_separator", "media_background_blocks_paddings", "media_background_region_paddings", "media_background_layout_container", "media_background_animations", "media_background_animation_effect", "media_background_first_grid_class", "media_background_second_grid_class", "main_content_separator", "main_grid_class", "main_content_animations", "main_content_blocks_paddings", "main_content_region_paddings", "main_content_animation_effect", "sidebar_first_grid_class", "sidebar_first_animations", "sidebar_first_blocks_paddings", "sidebar_first_region_paddings", "sidebar_first_animation_effect", "sidebar_second_grid_class", "sidebar_second_animations", "sidebar_second_blocks_paddings", "sidebar_second_region_paddings", "sidebar_second_animation_effect", "content_bottom_background_color", "content_bottom_separator", "content_bottom_blocks_paddings", "content_bottom_region_paddings", "content_bottom_layout_container", "content_bottom_animations", "content_bottom_animation_effect", "content_bottom_first_grid_class", "content_bottom_second_grid_class", "featured_top_background_color", "featured_top_separator", "featured_top_blocks_paddings", "featured_top_region_paddings", "featured_top_layout_container", "featured_top_animations", "featured_top_animation_effect", "featured_background_color", "featured_separator", "featured_blocks_paddings", "featured_region_paddings", "featured_layout_container", "featured_animations", "featured_animation_effect", "featured_bottom_background_color", "featured_bottom_separator", "featured_bottom_blocks_paddings", "featured_bottom_region_paddings", "featured_bottom_layout_container", "featured_bottom_animations", "featured_bottom_animation_effect", "sub_featured_background_color", "sub_featured_separator", "sub_featured_blocks_paddings", "sub_featured_region_paddings", "sub_featured_layout_container", "sub_featured_animations", "sub_featured_animation_effect", "highlighted_top_background_color", "highlighted_top_separator", "highlighted_top_blocks_paddings", "highlighted_top_region_paddings", "highlighted_top_layout_container", "highlighted_top_animations", "highlighted_top_animation_effect", "highlighted_background_color", "highlighted_separator", "highlighted_blocks_paddings", "highlighted_region_paddings", "highlighted_layout_container", "highlighted_animations", "highlighted_animation_effect", "footer_top_regions", "footer_top_background_color", "footer_top_separator", "footer_top_blocks_paddings", "footer_top_region_paddings", "footer_top_layout_container", "footer_top_animations", "footer_top_animation_effect", "footer_top_first_grid_class", "footer_top_second_grid_class", "footer_background_color", "footer_separator", "scroll_to_top_region", "footer_blocks_paddings", "footer_region_paddings", "scroll_to_top_display", "scroll_to_top_icon", "footer_layout_container", "footer_first_grid_class", "footer_animations", "footer_animation_effect", "footer_second_grid_class", "footer_4_columns_clearfix_first", "footer_third_grid_class", "footer_4_columns_clearfix_second", "footer_5_columns_clearfix", "footer_fourth_grid_class", "footer_fifth_grid_class", "footer_bottom_background_color", "footer_bottom_separator", "footer_bottom_blocks_paddings", "footer_bottom_region_paddings", "footer_bottom_layout_container", "subfooter_background_color", "subfooter_separator", "subfooter_bottom_blocks_paddings", "subfooter_bottom_region_paddings", "subfooter_layout_container", "subfooter_first_grid_class", "subfooter_second_grid_class"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/showcase_lite/templates/page.html.twig";
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
        return array (  1609 => 738,  1606 => 737,  1602 => 734,  1598 => 731,  1594 => 729,  1589 => 726,  1586 => 725,  1581 => 723,  1578 => 722,  1574 => 720,  1569 => 717,  1566 => 716,  1561 => 714,  1559 => 713,  1555 => 711,  1550 => 709,  1544 => 707,  1542 => 706,  1531 => 705,  1529 => 704,  1527 => 703,  1524 => 702,  1521 => 701,  1517 => 698,  1509 => 692,  1503 => 688,  1498 => 686,  1492 => 684,  1490 => 683,  1479 => 682,  1477 => 681,  1475 => 680,  1472 => 679,  1469 => 678,  1463 => 673,  1459 => 671,  1454 => 668,  1451 => 667,  1445 => 666,  1443 => 665,  1438 => 664,  1433 => 662,  1430 => 661,  1426 => 659,  1421 => 656,  1418 => 655,  1412 => 654,  1410 => 653,  1405 => 652,  1400 => 650,  1398 => 649,  1391 => 648,  1387 => 646,  1382 => 643,  1379 => 642,  1373 => 641,  1371 => 640,  1366 => 639,  1361 => 637,  1359 => 636,  1354 => 635,  1350 => 633,  1345 => 630,  1342 => 629,  1336 => 628,  1334 => 627,  1329 => 626,  1324 => 624,  1321 => 623,  1317 => 621,  1312 => 618,  1309 => 617,  1303 => 616,  1301 => 615,  1296 => 614,  1291 => 612,  1289 => 611,  1282 => 608,  1276 => 606,  1274 => 605,  1263 => 604,  1261 => 603,  1259 => 602,  1256 => 601,  1253 => 600,  1249 => 597,  1245 => 594,  1241 => 592,  1236 => 589,  1233 => 588,  1228 => 586,  1225 => 585,  1221 => 583,  1216 => 580,  1213 => 579,  1208 => 577,  1206 => 576,  1202 => 574,  1196 => 573,  1194 => 572,  1189 => 571,  1185 => 569,  1174 => 568,  1172 => 567,  1170 => 566,  1167 => 565,  1164 => 564,  1160 => 561,  1152 => 555,  1146 => 551,  1140 => 550,  1138 => 549,  1133 => 548,  1129 => 546,  1120 => 545,  1118 => 544,  1116 => 543,  1113 => 542,  1110 => 541,  1106 => 538,  1098 => 532,  1092 => 528,  1086 => 527,  1084 => 526,  1079 => 525,  1075 => 523,  1066 => 522,  1064 => 521,  1062 => 520,  1059 => 519,  1056 => 518,  1052 => 515,  1044 => 509,  1038 => 505,  1032 => 504,  1030 => 503,  1025 => 502,  1021 => 500,  1012 => 499,  1010 => 498,  1008 => 497,  1005 => 496,  1002 => 495,  998 => 492,  990 => 486,  984 => 482,  978 => 481,  976 => 480,  971 => 479,  967 => 477,  958 => 476,  956 => 475,  954 => 474,  951 => 473,  948 => 472,  944 => 469,  936 => 463,  930 => 459,  924 => 458,  922 => 457,  917 => 456,  913 => 454,  904 => 453,  902 => 452,  900 => 451,  897 => 450,  894 => 449,  890 => 446,  882 => 440,  876 => 436,  870 => 435,  868 => 434,  863 => 433,  859 => 431,  850 => 430,  848 => 429,  846 => 428,  843 => 427,  840 => 426,  836 => 423,  832 => 420,  828 => 418,  823 => 415,  820 => 414,  815 => 412,  812 => 411,  808 => 409,  803 => 406,  800 => 405,  795 => 403,  793 => 402,  789 => 400,  783 => 399,  781 => 398,  776 => 397,  772 => 395,  763 => 394,  761 => 393,  759 => 392,  756 => 391,  750 => 386,  746 => 384,  741 => 381,  738 => 380,  732 => 379,  730 => 378,  723 => 377,  718 => 375,  715 => 374,  711 => 372,  706 => 369,  703 => 368,  697 => 367,  695 => 366,  688 => 365,  683 => 363,  681 => 362,  678 => 361,  675 => 359,  669 => 357,  667 => 356,  664 => 355,  658 => 354,  656 => 353,  649 => 352,  645 => 350,  637 => 346,  634 => 344,  631 => 343,  627 => 340,  623 => 337,  619 => 335,  614 => 332,  611 => 331,  606 => 329,  603 => 328,  599 => 326,  594 => 323,  591 => 322,  586 => 320,  584 => 319,  580 => 317,  574 => 316,  572 => 315,  567 => 314,  562 => 312,  559 => 310,  550 => 308,  548 => 307,  546 => 306,  543 => 305,  540 => 304,  536 => 301,  528 => 295,  522 => 291,  516 => 290,  514 => 289,  509 => 288,  505 => 286,  496 => 285,  494 => 284,  492 => 283,  489 => 282,  486 => 281,  482 => 278,  474 => 272,  468 => 268,  462 => 267,  460 => 266,  455 => 265,  451 => 263,  444 => 262,  442 => 261,  440 => 260,  437 => 259,  428 => 253,  422 => 249,  420 => 248,  416 => 246,  413 => 244,  410 => 243,  406 => 240,  398 => 234,  392 => 230,  388 => 228,  381 => 227,  379 => 226,  377 => 225,  374 => 224,  371 => 223,  367 => 220,  364 => 219,  361 => 217,  358 => 216,  353 => 212,  351 => 211,  349 => 210,  346 => 209,  342 => 206,  338 => 204,  333 => 201,  330 => 200,  325 => 198,  322 => 197,  318 => 195,  313 => 192,  310 => 191,  305 => 189,  302 => 188,  298 => 186,  293 => 183,  290 => 182,  285 => 180,  283 => 179,  279 => 177,  275 => 175,  264 => 174,  262 => 173,  260 => 172,  257 => 171,  254 => 170,  250 => 167,  246 => 164,  242 => 162,  237 => 159,  234 => 158,  229 => 156,  226 => 155,  222 => 153,  217 => 150,  214 => 149,  209 => 147,  207 => 146,  203 => 144,  197 => 143,  195 => 142,  190 => 141,  186 => 139,  179 => 138,  177 => 137,  175 => 136,  172 => 135,  169 => 134,  165 => 131,  161 => 128,  157 => 126,  152 => 123,  149 => 122,  144 => 120,  141 => 119,  137 => 117,  132 => 114,  129 => 113,  124 => 111,  122 => 110,  118 => 108,  112 => 107,  110 => 106,  105 => 105,  101 => 103,  94 => 102,  92 => 101,  90 => 100,  86 => 98,  84 => 97,  82 => 96,  78 => 94,  75 => 92,  71 => 89,  68 => 87,  65 => 85,  59 => 81,  55 => 79,  48 => 77,  46 => 76,  44 => 75,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/showcase_lite/templates/page.html.twig", "/opt/drupal/web/themes/contrib/showcase_lite/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 75];
        static $filters = ["escape" => 77];
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
