<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_ad90a858b57cfee8adf488fc6b1d74254792add62eebf0d68016275d8c3ebce3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'head_custom_stylesheets' => [$this, 'block_head_custom_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'body' => [$this, 'block_body'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'wrapper' => [$this, 'block_wrapper'],
            'header' => [$this, 'block_header'],
            'header_logo' => [$this, 'block_header_logo'],
            'user_menu' => [$this, 'block_user_menu'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'sidebar' => [$this, 'block_sidebar'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'global_actions_wrapper' => [$this, 'block_global_actions_wrapper'],
            'global_actions' => [$this, 'block_global_actions'],
            'content_help' => [$this, 'block_content_help'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'content_footer' => [$this, 'block_content_footer'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'body_custom_javascript' => [$this, 'block_body_custom_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "_")), "en"), "html", null, true);
        echo "\" dir=\"";
        echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("rtl") : ("ltr"));
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('head_custom_stylesheets', $context, $blocks);
        // line 21
        echo "
        ";
        // line 22
        if (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.brand_color") != "hsl(230, 55%, 60%)")) {
            // line 23
            echo "        <style>
            :root { --color-primary: ";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.brand_color"), "html", null, true);
            echo "; }
        </style>
        ";
        }
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 36
        echo "
        ";
        // line 37
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) {
            // line 38
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.rtl.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app-custom-rtl.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 41
        echo "    </head>

    ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 198
        echo "</html>
";
    }

    // line 10
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 16
    public function block_head_custom_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 18
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        ";
    }

    // line 28
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "            ";
        $context["favicon"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.assets.favicon");
        // line 30
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["favicon"] ?? null), "mime_type", [], "any", false, false, false, 30), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["favicon"] ?? null), "path", [], "any", false, false, false, 30)), "html", null, true);
        echo "\" />
        ";
    }

    // line 33
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
        <script>
            document.body.classList.add(
                'easyadmin-content-width-' + (localStorage.getItem('easyadmin/content/width') || 'normal'),
                'easyadmin-sidebar-width-' + (localStorage.getItem('easyadmin/sidebar/width') || 'normal')
            );
        </script>

        ";
        // line 52
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 187
        echo "
        ";
        // line 188
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 189
        echo "
        ";
        // line 190
        $this->displayBlock('body_custom_javascript', $context, $blocks);
        // line 195
        echo "
    </body>
    ";
    }

    // line 44
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 52
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "        <div class=\"wrapper\">
        ";
        // line 54
        $this->displayBlock('wrapper', $context, $blocks);
        // line 185
        echo "        </div>
        ";
    }

    // line 54
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "            <header class=\"main-header\">
                ";
        // line 56
        $this->displayBlock('header', $context, $blocks);
        // line 119
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 122
        $this->displayBlock('sidebar', $context, $blocks);
        // line 134
        echo "            </aside>

            <div class=\"content-wrapper\">
                ";
        // line 137
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 140
        echo "
                <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>

                ";
        // line 143
        $this->displayBlock('content', $context, $blocks);
        // line 181
        echo "
                <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
            </div>
        ";
    }

    // line 56
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                    <nav class=\"navbar\" role=\"navigation\">
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            <i class=\"fa fa-fw fa-bars\"></i>
                        </button>

                        <div id=\"header-logo\">
                            ";
        // line 63
        $this->displayBlock('header_logo', $context, $blocks);
        // line 68
        echo "                        </div>
                    </nav>

                    ";
        // line 71
        $context["_user_name"] = _twig_default_filter($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->readProperty(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 71), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("user.name_property_path")), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.unnamed", array(), "EasyAdminBundle"));
        // line 72
        echo "                    ";
        $context["_logout_path"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getLogoutPath();
        // line 73
        echo "                    ";
        $context["_user_has_logout"] =  !twig_test_empty(($context["_logout_path"] ?? null));
        // line 74
        echo "                    ";
        $context["_user_is_impersonated"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN");
        // line 75
        echo "                    ";
        ob_start(function () { return ''; });
        // line 76
        echo "                        <div class=\"popover-content-section user-details ";
        echo (((($context["_user_has_logout"] ?? null) || ($context["_user_is_impersonated"] ?? null))) ? ("user-has-actions") : (""));
        echo "\">
                            <p class=\"small text-muted mb-0\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</p>
                            <p class=\"user-details-name\">
                                ";
        // line 79
        if ((((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", true, true, false, 79)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 79), false)) : (false)) == false)) {
            // line 80
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                ";
        } else {
            // line 82
            echo "                                    ";
            echo twig_escape_filter($this->env, ($context["_user_name"] ?? null), "html", null, true);
            echo "
                                ";
        }
        // line 84
        echo "                            </p>
                        </div>

                        ";
        // line 87
        $this->displayBlock('user_menu', $context, $blocks);
        // line 99
        echo "                    ";
        $context["_user_menu_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        echo "
                    <div class=\"content-top navbar-custom-menu\">
                        ";
        // line 102
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 117
        echo "                    </div>
                ";
    }

    // line 63
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "                                <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\">
                                    ";
        // line 65
        echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name");
        echo "
                                </a>
                            ";
    }

    // line 87
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                            ";
        if ((($context["_user_has_logout"] ?? null) || ($context["_user_is_impersonated"] ?? null))) {
            // line 89
            echo "                                <div class=\"popover-content-section user-menu\">
                                    ";
            // line 90
            if (($context["_user_has_logout"] ?? null)) {
                // line 91
                echo "                                        <a class=\"user-action user-action-logout\" href=\"";
                echo twig_escape_filter($this->env, ($context["_logout_path"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 93
            echo "                                    ";
            if (($context["_user_is_impersonated"] ?? null)) {
                // line 94
                echo "                                        <a class=\"user-action user-action-exit-impersonation\" href=\"?_switch_user=_exit\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 96
            echo "                                </div>
                            ";
        }
        // line 98
        echo "                        ";
    }

    // line 102
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "                            <div class=\"user user-menu-wrapper ";
        echo ((($context["_user_is_impersonated"] ?? null)) ? ("user-is-impersonated") : (""));
        echo "\" data-toggle=\"popover\" data-placement=\"bottom\" data-container=\".user-menu-wrapper\" data-content=\"";
        echo twig_escape_filter($this->env, ($context["_user_menu_content"] ?? null), "html_attr");
        echo "\" data-html=\"true\">
                                ";
        // line 104
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("user.display_avatar")) {
            // line 105
            echo "                                    ";
            $context["_avatar_image_path"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->readProperty(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 105), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("user.avatar_property_path"));
            // line 106
            echo "                                    ";
            if ((null == ($context["_avatar_image_path"] ?? null))) {
                // line 107
                echo "                                        <i class=\"fa fa-fw ";
                echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 107))) ? ("fa-user-circle") : ("fa-user-times"));
                echo " user-avatar\"></i>
                                    ";
            } else {
                // line 109
                echo "                                        <img class=\"user-avatar\" src=\"";
                echo twig_escape_filter($this->env, ($context["_avatar_image_path"] ?? null), "html", null, true);
                echo "\" />
                                    ";
            }
            // line 111
            echo "                                ";
        }
        // line 112
        echo "                                ";
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("user.display_name")) {
            // line 113
            echo "                                    <span class=\"user-name\">";
            echo twig_escape_filter($this->env, ($context["_user_name"] ?? null), "html", null, true);
            echo "</span>
                                ";
        }
        // line 115
        echo "                            </div>
                        ";
    }

    // line 122
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "                <section class=\"sidebar\">
                    ";
        // line 124
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 131
        echo "                </section>

            ";
    }

    // line 124
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "                        ";
        echo twig_include($this->env, $context, [0 => ((        // line 126
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", [], "any", false, false, false, 126), "menu", [], "any", false, false, false, 126)) : ("")), 1 => $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"]);
        // line 129
        echo "
                    ";
    }

    // line 137
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "                    ";
        echo twig_include($this->env, $context, (((isset($context["_entity_config"]) || array_key_exists("_entity_config", $context))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", [], "any", false, false, false, 138), "flash_messages", [], "any", false, false, false, 138)) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
    }

    // line 143
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "                    <div class=\"content\">
                        ";
        // line 145
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 169
        echo "
                        <section id=\"main\" class=\"content-body\">
                            ";
        // line 171
        $this->displayBlock('main', $context, $blocks);
        // line 172
        echo "                        </section>

                        ";
        // line 174
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 179
        echo "                    </div>
                ";
    }

    // line 145
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "                        ";
        $context["_has_content_help"] = ((isset($context["_entity_config"]) || array_key_exists("_entity_config", $context)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 146), "query", [], "any", false, false, false, 146), "get", [0 => "action"], "method", false, false, false, 146), [], "array", false, true, false, 146), "help", [], "array", true, true, false, 146)) ? (_twig_default_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 146), "query", [], "any", false, false, false, 146), "get", [0 => "action"], "method", false, false, false, 146), [], "array", false, true, false, 146)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["help"] ?? null) : null), false)) : (false)));
        // line 147
        echo "                        <section class=\"content-header ";
        echo ((($context["_has_content_help"] ?? null)) ? ("has-content-help") : (""));
        echo "\">
                            ";
        // line 148
        $this->displayBlock('content_header', $context, $blocks);
        // line 167
        echo "                        </section>
                        ";
    }

    // line 148
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "                                <div class=\"d-flex flex-row justify-content-between align-content-center w-100\">
                                    <div class=\"content-header-title\">
                                        <h1 class=\"title\">";
        // line 151
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                                    </div>

                                    ";
        // line 154
        $this->displayBlock('global_actions_wrapper', $context, $blocks);
        // line 157
        echo "                                </div>

                                ";
        // line 159
        $this->displayBlock('content_help', $context, $blocks);
        // line 166
        echo "                            ";
    }

    // line 151
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 154
    public function block_global_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "                                        <div class=\"global-actions\">";
        $this->displayBlock('global_actions', $context, $blocks);
        echo "</div>
                                    ";
    }

    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 159
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 160
        echo "                                    ";
        if (((isset($context["_entity_config"]) || array_key_exists("_entity_config", $context)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 160), "query", [], "any", false, false, false, 160), "get", [0 => "action"], "method", false, false, false, 160), [], "array", false, true, false, 160), "help", [], "array", true, true, false, 160)) ? (_twig_default_filter((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 160), "query", [], "any", false, false, false, 160), "get", [0 => "action"], "method", false, false, false, 160), [], "array", false, true, false, 160)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["help"] ?? null) : null), false)) : (false)))) {
            // line 161
            echo "                                        <div class=\"content-header-help\">
                                            ";
            // line 162
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["_entity_config"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 162), "query", [], "any", false, false, false, 162), "get", [0 => "action"], "method", false, false, false, 162)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["help"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", [], "any", false, false, false, 162));
            echo "
                                        </div>
                                    ";
        }
        // line 165
        echo "                                ";
    }

    // line 171
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 174
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "                            <section class=\"content-footer\">
                                ";
        // line 176
        $this->displayBlock('content_footer', $context, $blocks);
        // line 177
        echo "                            </section>
                        ";
    }

    // line 176
    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 188
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 190
    public function block_body_custom_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 191
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 192
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  694 => 194,  685 => 192,  680 => 191,  676 => 190,  670 => 188,  664 => 176,  659 => 177,  657 => 176,  654 => 175,  650 => 174,  644 => 171,  640 => 165,  634 => 162,  631 => 161,  628 => 160,  624 => 159,  612 => 155,  608 => 154,  602 => 151,  598 => 166,  596 => 159,  592 => 157,  590 => 154,  584 => 151,  580 => 149,  576 => 148,  571 => 167,  569 => 148,  564 => 147,  561 => 146,  557 => 145,  552 => 179,  550 => 174,  546 => 172,  544 => 171,  540 => 169,  538 => 145,  535 => 144,  531 => 143,  524 => 138,  520 => 137,  515 => 129,  513 => 126,  511 => 125,  507 => 124,  501 => 131,  499 => 124,  496 => 123,  492 => 122,  487 => 115,  481 => 113,  478 => 112,  475 => 111,  469 => 109,  463 => 107,  460 => 106,  457 => 105,  455 => 104,  448 => 103,  444 => 102,  440 => 98,  436 => 96,  430 => 94,  427 => 93,  419 => 91,  417 => 90,  414 => 89,  411 => 88,  407 => 87,  400 => 65,  391 => 64,  387 => 63,  382 => 117,  380 => 102,  376 => 100,  373 => 99,  371 => 87,  366 => 84,  360 => 82,  354 => 80,  352 => 79,  347 => 77,  342 => 76,  339 => 75,  336 => 74,  333 => 73,  330 => 72,  328 => 71,  323 => 68,  321 => 63,  313 => 57,  309 => 56,  302 => 181,  300 => 143,  295 => 140,  293 => 137,  288 => 134,  286 => 122,  281 => 119,  279 => 56,  276 => 55,  272 => 54,  267 => 185,  265 => 54,  262 => 53,  258 => 52,  247 => 44,  241 => 195,  239 => 190,  236 => 189,  234 => 188,  231 => 187,  229 => 52,  215 => 44,  211 => 43,  204 => 34,  200 => 33,  191 => 30,  188 => 29,  184 => 28,  180 => 20,  171 => 18,  166 => 17,  162 => 16,  155 => 13,  151 => 12,  144 => 10,  139 => 198,  137 => 43,  133 => 41,  128 => 39,  123 => 38,  121 => 37,  118 => 36,  116 => 33,  113 => 32,  111 => 28,  108 => 27,  102 => 24,  99 => 23,  97 => 22,  94 => 21,  92 => 16,  89 => 15,  87 => 12,  82 => 10,  69 => 2,  66 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/layout.html.twig", "/var/www/html/Zartisan_prod/zartisanV2/Symfo/zartisan/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
